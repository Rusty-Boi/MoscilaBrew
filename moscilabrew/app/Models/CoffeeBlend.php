<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeBlend extends Model
{
    use HasFactory;

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

    public static function allBlendVendors()
    {
        return collect(self::$blend_vendors);
    }
    
    public static function allStatusPartner()
    {
        return collect(self::$partner_status);
    }
}
