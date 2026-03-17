<?php

namespace App\MenuManager;

use App\MenuManager\Livewire\MenuBuilder;
use App\MenuManager\Livewire\MenuPanel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class MenuManagerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(MenuManager::class);
    }

    public function boot(): void
    {
        Livewire::component('filament-menu-manager.menu-builder', MenuBuilder::class);
        Livewire::component('filament-menu-manager.menu-panel', MenuPanel::class);

        FilamentAsset::register([
            Css::make('filament-menu-manager-styles', asset('css/filament-menu-manager.css')),
            Js::make('filament-menu-manager-scripts', asset('js/filament-menu-manager.js')),
        ], 'app/menu-manager');
    }
}
