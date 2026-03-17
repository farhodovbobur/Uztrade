<?php

namespace App\MenuManager;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\MenuLocation;

class MenuManager
{
    protected array $locations = [];

    protected array $modelSources = [];

    /**
     * Register menu locations (handle => name).
     */
    public function registerLocations(array $locations): void
    {
        foreach ($locations as $handle => $name) {
            $key = is_int($handle) ? $name : $handle;
            $label = is_int($handle) ? ucfirst($name) : $name;
            $this->locations[$key] = $label;
        }
    }

    /**
     * Register Eloquent model classes as item sources.
     */
    public function registerModelSources(array $models): void
    {
        $this->modelSources = array_merge($this->modelSources, $models);
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function getModelSources(): array
    {
        return $this->modelSources;
    }

    /**
     * Sync configured locations into the DB.
     */
    public function syncLocations(): void
    {
        $handles = array_keys($this->locations);

        foreach ($this->locations as $handle => $name) {
            MenuLocation::updateOrCreate(
                ['handle' => $handle],
                ['name' => $name]
            );
        }

        $deprecated = MenuLocation::whereNotIn('handle', $handles)->get();

        if ($deprecated->isNotEmpty()) {
            $deprecatedIds = $deprecated->pluck('id')->toArray();

            $menuIds = Menu::whereIn('menu_location_id', $deprecatedIds)->pluck('id')->toArray();

            if (! empty($menuIds)) {
                MenuItem::whereIn('menu_id', $menuIds)->delete();
                Menu::whereIn('id', $menuIds)->delete();
            }

            MenuLocation::whereIn('id', $deprecatedIds)->delete();
        }
    }

    /**
     * Get all DB-persisted locations.
     */
    public function allLocations()
    {
        return MenuLocation::orderBy('id')->get();
    }

    /**
     * Retrieve menus for a given location handle.
     */
    public function menusForLocation(string $handle)
    {
        $location = MenuLocation::where('handle', $handle)->first();

        return $location ? $location->menus()->orderBy('name')->get() : collect();
    }

    /**
     * Save tree order from a nested array (from SortableJS).
     *
     * @param  array<int, array{id: int, children?: array}>  $tree
     */
    public function saveTree(int $menuId, array $tree, ?int $parentId = null, int &$order = 0, int $currentDepth = 0): void
    {
        foreach ($tree as $node) {
            $order++;
            MenuItem::where('id', $node['id'])->update([
                'parent_id' => $parentId,
                'order' => $order,
            ]);

            if (! empty($node['children'])) {
                $this->saveTree($menuId, $node['children'], $node['id'], $order, $currentDepth + 1);
            }
        }
    }
}
