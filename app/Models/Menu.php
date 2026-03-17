<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    protected $fillable = [
        'menu_location_id',
        'name',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(MenuLocation::class, 'menu_location_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(MenuItem::class)->orderBy('order');
    }

    public function rootItems(): HasMany
    {
        return $this->items()->whereNull('parent_id');
    }

    public function getTree(): array
    {
        $items = $this->items()->get()->keyBy('id');

        $tree = [];
        foreach ($items as $item) {
            if (is_null($item->parent_id)) {
                $tree[] = $this->buildNode($item, $items);
            }
        }

        return $tree;
    }

    protected function buildNode(MenuItem $item, $allItems): array
    {
        $node = $item->toArray();
        $node['children'] = [];

        foreach ($allItems as $child) {
            if ($child->parent_id === $item->id) {
                $node['children'][] = $this->buildNode($child, $allItems);
            }
        }

        usort($node['children'], fn ($a, $b) => $a['order'] <=> $b['order']);

        return $node;
    }
}
