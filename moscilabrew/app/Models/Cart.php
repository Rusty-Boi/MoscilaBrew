<?php

namespace App\Models;

use App\Models\Coffee;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    /**
     * Get the coffees for the cart.
     */
    // public function coffee(): HasMany
    // {
    //     return $this->hasMany(Coffee::class);
    // }

    public function coffees()
    {
        return $this->belongsToMany(Coffee::class)->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}