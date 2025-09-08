<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
    public function users(): HasMany
    {
        return $this->hasMany(City::class);
    }
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
