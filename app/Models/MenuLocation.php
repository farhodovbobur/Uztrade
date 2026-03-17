<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuLocation extends Model
{
    protected $fillable = [
        'handle',
        'name',
    ];

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'menu_location_id');
    }
}
