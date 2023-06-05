<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Coffee extends Model
class Coffee 
{
    // use HasFactory;

    private static $coffee_catalog = [
        [
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Vendor Name',
            'vendor-name_slug' => 'vendor-name',
            'product-img' => 'img/aceh-gayo.png',
            'product-title' => 'Robusta',
            'product-title_slug' => 'robusta',
            'price' => 'Rp.60.000',
            'rate' => '4.8',
            'average' => 'Terjual 100+'
        ],
        [
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Aceh',
            'vendor-name_slug' => 'aceh',
            'product-img' => 'img/aceh-gayo.png',
            'product-title' => 'Kopi Gayo',
            'product-title_slug' => 'kopi-gayo',
            'price' => 'Rp.90.000',
            'rate' => '4.7',
            'average' => 'Terjual 200+'
        ]
    ];

    public static function all()
    {
        return collect(self::$coffee_catalog);
    }

    public static function find($vendor_name, $product_title)
    {
        // return static::all()->firstWhere('vendor-name', $vendor_name);
        return collect(static::all()->where('vendor-name_slug', $vendor_name))->firstWhere('product-title_slug', $product_title);
    }
}