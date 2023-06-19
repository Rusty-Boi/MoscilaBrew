<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coffee extends Model
{
    use HasFactory;

    protected $guarded = ['id', "created_at", "updated_at"];

    public static function findProductByVendorAndProductId($vendor_id, $coffee_id)
    {
        // return 'test';
        // return collect(static::all()->where('vendor_id', $vendor_id)->);
        return collect(static::all()->where('vendor_id', $vendor_id))->find($coffee_id);
    }

    /**
     * Get the vendor that owns the coffee.
     */
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }    

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity');
    }

    public static function getProductsByBeanCat($bean_cat)
    {
        return collect(static::all())->where('bean_category_name', $bean_cat);
    }

    public static function getBeanCategories()
    {
        return collect(static::all())->pluck('bean_category_name')->unique();
    }

}
