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
            'product-img' => 'img/aceh-gayo.png',
            'product-title' => 'Kopi Gayo',
            'price' => 'Rp.90.000',
            'rate' => '4.9',
            'average' => 'Terjual 200+'
        ],
        [
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Vendor Name',
            'product-img' => 'img/aceh-gayo.png',
            'product-title' => 'Kopi Gayo',
            'price' => 'Rp.90.000',
            'rate' => '4.9',
            'average' => 'Terjual 200+'
        ],
        [
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Vendor Name',
            'product-img' => 'img/aceh-gayo.png',
            'product-title' => 'Kopi Gayo',
            'price' => 'Rp.90.000',
            'rate' => '4.9',
            'average' => 'Terjual 200+'
        ],
        [
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Vendor Name',
            'product-img' => 'img/aceh-gayo.png',
            'product-title' => 'Kopi Gayo',
            'price' => 'Rp.90.000',
            'rate' => '4.9',
            'average' => 'Terjual 200+'
        ]
    ];

    public static function all()
    {
        return collect(self::$coffee_catalog);
    }
}
