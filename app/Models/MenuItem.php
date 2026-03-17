<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class MenuItem extends Model
{
    protected $fillable = [
        'menu_id',
        'parent_id',
        'title',
        'url',
        'target',
        'icon',
        'type',
        'linkable_type',
        'linkable_id',
        'order',
        'enabled',
        'data',
    ];

    protected function casts(): array
    {
        return [
            'enabled' => 'boolean',
            'data' => 'array',
        ];
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(static::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(static::class, 'parent_id')->orderBy('order');
    }

    public function linkable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getResolvedUrl(): string
    {
        if ($this->type === 'model' && $this->linkable) {
            return $this->linkable->getMenuUrl();
        }

        return $this->url ?? '#';
    }

    public function getResolvedTitle(): string
    {
        return $this->title;
    }
}
