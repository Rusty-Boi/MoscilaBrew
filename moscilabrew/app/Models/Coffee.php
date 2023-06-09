<?php

namespace App\Models;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coffee extends Model
{
    use HasFactory;

    protected $guarded = ['product_id', "created_at", "updated_at"];

    public static function findProductByVendorAndProductId($vendor_id, $product_id)
    {
        // return 'test';
        // return collect(static::all()->where('vendor_id', $vendor_id)->);
        return collect(static::all()->where('vendor_id', $vendor_id))->firstWhere('product_id', $product_id);
    }

    /**
     * Get the vendor that owns the coffee.
     */
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'vendor_id');
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
