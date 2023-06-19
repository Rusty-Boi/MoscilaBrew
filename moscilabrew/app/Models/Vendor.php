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

    private static $partner_status = [
        "Gold Partner" => "img/single-beans.png"
    ];

    private static $blend_vendors = [
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"],
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"],
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"],
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"],
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"],
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"],
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"],
        ['vendor-Name' => "Vendor Name",
        "partner-status" => "Gold Partner"]
    ];

    /**
     * Get the coffee associated with the vendor.
     */
    public function coffee(): HasMany
    {
        return $this->hasMany(Coffee::class);
    }

    public static function allStatusPartner()
    {
        return collect(self::$partner_status);
    }

    public static function allBlendVendors()
    {
        return collect(self::$blend_vendors);
    }
}
