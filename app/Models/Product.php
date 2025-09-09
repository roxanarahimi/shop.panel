<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function orders(): HasMany
    {
        return $this->hasMany(OrderItem::class);//->quantity
    }
    protected function casts(): array
    {
        return [
            'images' => 'array',
        ];
    }
}
