<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = ['vendor_id'];

    /**
     * Get the coffee associated with the vendor.
     */
    public function coffee(): HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
