<?php

namespace App\Models;

use App\Models\Coffee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = ['vendor_id'];

    /**
     * Get the coffee associated with the vendor.
     */
    public function coffee(): HasMany
    {
        return $this->hasMany(Coffee::class);
    }
}
