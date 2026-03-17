<?php

namespace App\MenuManager\Pages;

use App\MenuManager\FilamentMenuManagerPlugin;
use App\MenuManager\MenuManager;
use App\Models\Menu;
use App\Models\MenuLocation;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Collection;

class MenuManagerPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament-menu-manager::pages.menu-manager';

    protected static \UnitEnum|string|null $navigationGroup = 'Settings';

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-bars-3';

    protected static ?string $navigationLabel = 'Menu Manager';

    protected static ?int $navigationSort = 99;

    protected ?string $subheading = 'Set up location-based menus to manage navigation across your application.';

    public ?int $activeLocationId = null;

    public ?int $activeMenuId = null;

    public string $activeLocationHandle = '';

    public static function getNavigationGroup(): \UnitEnum|string|null
    {
        return FilamentMenuManagerPlugin::get()->getNavigationGroup() ?? static::$navigationGroup;
    }

    public static function getNavigationIcon(): \BackedEnum|string|null
    {
        return FilamentMenuManagerPlugin::get()->getNavigationIcon() ?? static::$navigationIcon;
    }

    public static function getNavigationLabel(): string
    {
        return (string) (FilamentMenuManagerPlugin::get()->getNavigationLabel() ?? static::$navigationLabel);
    }

    public static function getNavigationSort(): ?int
    {
        return FilamentMenuManagerPlugin::get()->getNavigationSort() ?? static::$navigationSort;
    }

    public function mount(): void
    {
        $locations = $this->getLocations();

        if ($locations->isNotEmpty()) {
            $first = $locations->first();
            $this->activeLocationId = $first->id;
            $this->activeLocationHandle = $first->handle;

            $menus = $this->getMenusForActiveLocation();
            if ($menus->isNotEmpty()) {
                $this->activeMenuId = $menus->first()->id;
            }
        }
    }

    public function getMenuManager(): MenuManager
    {
        return app(MenuManager::class);
    }

    public function getLocations(): Collection
    {
        return $this->getMenuManager()->allLocations();
    }

    public function getMenusForActiveLocation(): Collection
    {
        if (! $this->activeLocationId) {
            return collect();
        }

        return Menu::where('menu_location_id', $this->activeLocationId)
            ->orderBy('name')
            ->get();
    }

    public function switchLocation(int $locationId): void
    {
        $location = MenuLocation::find($locationId);

        if ($location) {
            $this->activeLocationId = $location->id;
            $this->activeLocationHandle = $location->handle;
            $this->activeMenuId = null;

            $menus = $this->getMenusForActiveLocation();
            if ($menus->isNotEmpty()) {
                $this->activeMenuId = $menus->first()->id;
            }
        }
    }

    public function switchMenu(int $menuId): void
    {
        $this->activeMenuId = $menuId;
    }

    /**
     * @return array<int, Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            Action::make('createMenu')
                ->label('New Menu')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->form([
                    Select::make('menu_location_id')
                        ->label('Location')
                        ->options(
                            fn () => $this->getLocations()->pluck('name', 'id')->toArray()
                        )
                        ->default(fn () => $this->activeLocationId)
                        ->required(),
                    TextInput::make('name')
                        ->label('Menu Name')
                        ->required()
                        ->maxLength(255),
                ])
                ->action(function (array $data): void {
                    $menu = Menu::create($data);
                    $this->activeMenuId = $menu->id;
                    Notification::make('menu_created')
                        ->title('Menu created')
                        ->success()
                        ->send();
                }),

            Action::make('deleteMenu')
                ->label('Delete Menu')
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation()
                ->visible(fn () => $this->activeMenuId !== null)
                ->action(function (): void {
                    if ($this->activeMenuId) {
                        Menu::destroy($this->activeMenuId);
                        $this->activeMenuId = null;

                        $menus = $this->getMenusForActiveLocation();
                        if ($menus->isNotEmpty()) {
                            $this->activeMenuId = $menus->first()->id;
                        }

                        Notification::make('menu_deleted')
                            ->title('Menu deleted')
                            ->success()
                            ->send();
                    }
                }),
        ];
    }
}
