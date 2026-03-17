<?php

namespace App\MenuManager\Livewire;

use App\MenuManager\MenuManager;
use App\Models\MenuItem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;

class MenuPanel extends Component
{
    public ?int $menuId = null;

    public string $locationHandle = '';

    public string $activeTab = 'custom';

    public string $customTitle = '';

    public string $customUrl = '';

    public string $customTarget = '_self';

    public string $modelSearch = '';

    /** @var array<string, array<int, int>> */
    public array $usedModels = [];

    /** @var array<string, string> */
    protected $listeners = [
        'menuIdChanged' => 'onMenuChanged',
        'menu-content-updated' => 'refreshUsedModels',
    ];

    public function onMenuChanged(int $menuId): void
    {
        $this->menuId = $menuId;
        $this->refreshUsedModels();
    }

    public function mount(): void
    {
        if ($this->menuId) {
            $this->refreshUsedModels();
        }
    }

    public function refreshUsedModels(): void
    {
        if (! $this->menuId) {
            $this->usedModels = [];

            return;
        }

        $this->usedModels = MenuItem::where('menu_id', $this->menuId)
            ->whereNotNull('linkable_type')
            ->whereNotNull('linkable_id')
            ->get()
            ->groupBy('linkable_type')
            ->map(fn ($items) => $items->pluck('linkable_id')->all())
            ->toArray();
    }

    public function addCustomLink(): void
    {
        if (empty($this->customTitle)) {
            return;
        }

        $this->dispatch('menuItemAdded', [
            'title' => $this->customTitle,
            'url' => $this->customUrl ?: '#',
            'target' => $this->customTarget,
            'type' => 'custom',
        ]);

        $this->customTitle = '';
        $this->customUrl = '';
        $this->customTarget = '_self';
    }

    public function addModelItem(string $modelClass, int $modelId): void
    {
        /** @var \App\MenuManager\Contracts\MenuItemSource $model */
        $model = $modelClass::find($modelId);
        if (! $model) {
            return;
        }

        if (in_array($modelId, $this->usedModels[$modelClass] ?? [])) {
            return;
        }

        $this->dispatch('menuItemAdded', [
            'title' => $model->getMenuLabel(),
            'url' => $model->getMenuUrl(),
            'target' => $model->getMenuTarget(),
            'icon' => $model->getMenuIcon(),
            'type' => 'model',
            'linkable_type' => $modelClass,
            'linkable_id' => $modelId,
        ]);
    }

    /**
     * @return array<int, class-string>
     */
    public function getModelSources(): array
    {
        return app(MenuManager::class)->getModelSources();
    }

    public function getModelRecords(string $modelClass): Collection
    {
        if (! class_exists($modelClass)) {
            return collect();
        }

        $query = $modelClass::query();
        if ($this->modelSearch) {
            $table = (new $modelClass)->getTable();
            $columns = Schema::getColumnListing($table);
            $search = $this->modelSearch;

            $query->where(function ($q) use ($columns, $search) {
                foreach (['name', 'title', 'label'] as $col) {
                    if (in_array($col, $columns)) {
                        $q->orWhere($col, 'like', "%{$search}%");
                    }
                }
            });
        }

        return $query->limit(50)->get();
    }

    public function render()
    {
        return view('filament-menu-manager::livewire.menu-panel', [
            'modelSources' => $this->getModelSources(),
        ]);
    }
}
