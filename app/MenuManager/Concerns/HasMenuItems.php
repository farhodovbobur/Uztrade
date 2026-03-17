<?php

namespace App\MenuManager\Concerns;

use Illuminate\Support\Facades\Route;

/**
 * Add this trait to any Eloquent model to make it usable as a menu item source.
 * Override methods as needed to customise the label, URL, target, or icon.
 */
trait HasMenuItems
{
    public function getMenuLabel(): string
    {
        return (string) ($this->title ?? $this->name ?? $this->label ?? $this->getKey());
    }

    public function getMenuUrl(): string
    {
        if (property_exists($this, 'url') && ! empty($this->url)) {
            return (string) $this->url;
        }

        $name = strtolower(class_basename(static::class));
        if (Route::has($name.'.show')) {
            return route($name.'.show', $this->getKey());
        }
        if (Route::has($name.'s.show')) {
            return route($name.'s.show', $this->getKey());
        }

        return '#';
    }

    public function getMenuTarget(): string
    {
        return '_self';
    }

    public function getMenuIcon(): ?string
    {
        return null;
    }
}
