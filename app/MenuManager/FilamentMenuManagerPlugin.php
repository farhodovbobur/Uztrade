<?php

namespace App\MenuManager;

use App\MenuManager\Pages\MenuManagerPage;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Illuminate\Contracts\Support\Htmlable;

class FilamentMenuManagerPlugin implements Plugin
{
    protected array $locations = [];

    protected array $modelSources = [];

    protected \UnitEnum|string|null $navigationGroup = null;

    protected \BackedEnum|string|null $navigationIcon = null;

    protected ?int $navigationSort = null;

    protected string|Htmlable|null $navigationLabel = null;

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function getId(): string
    {
        return 'filament-menu-manager';
    }

    public function register(Panel $panel): void
    {
        $panel->pages([MenuManagerPage::class]);
    }

    public function boot(Panel $panel): void
    {
        /** @var MenuManager $manager */
        $manager = app(MenuManager::class);

        $configLocations = config('filament-menu-manager.locations', []);
        $manager->registerLocations(array_merge($configLocations, $this->locations));

        $configSources = config('filament-menu-manager.model_sources', []);
        $manager->registerModelSources(array_merge($configSources, $this->modelSources));

        $manager->syncLocations();
    }

    /**
     * @param  array<string, string>  $locations
     */
    public function locations(array $locations): static
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * @param  array<int, class-string>  $models
     */
    public function modelSources(array $models): static
    {
        $this->modelSources = $models;

        return $this;
    }

    public function navigationGroup(\UnitEnum|string|null $group): static
    {
        $this->navigationGroup = $group;

        return $this;
    }

    public function navigationIcon(\BackedEnum|string|null $icon): static
    {
        $this->navigationIcon = $icon;

        return $this;
    }

    public function navigationSort(?int $sort): static
    {
        $this->navigationSort = $sort;

        return $this;
    }

    public function navigationLabel(string|Htmlable|null $label): static
    {
        $this->navigationLabel = $label;

        return $this;
    }

    public function getNavigationGroup(): \UnitEnum|string|null
    {
        return $this->navigationGroup;
    }

    public function getNavigationIcon(): \BackedEnum|string|null
    {
        return $this->navigationIcon;
    }

    public function getNavigationSort(): ?int
    {
        return $this->navigationSort;
    }

    public function getNavigationLabel(): string|Htmlable|null
    {
        return $this->navigationLabel;
    }
}
