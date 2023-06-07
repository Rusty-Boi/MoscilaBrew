<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    private static $bean_table = [
        [
            'bean_category_id' => 'AR',
            'bean_category_name' => 'arabika',
            'product_id' => 'AR0001'
        ],
        [
            'bean_category_id' => 'RO',
            'bean_category_name' => 'robusta',
            'product_id' => 'RO0001'
        ],
        [
            'bean_category_id' => 'LI',
            'bean_category_name' => 'liberica',
            'product_id' => 'LI0001'
        ],
        [
            'bean_category_id' => 'EX',
            'bean_category_name' => 'excelsa',
            'product_id' => 'EX0001'
        ],
        [
            'bean_category_id' => 'AR',
            'bean_category_name' => 'arabika',
            'product_id' => 'AR0002'
        ],
        [
            'bean_category_id' => 'RO',
            'bean_category_name' => 'robusta',
            'product_id' => 'RO0002'
        ],
        [
            'bean_category_id' => 'LI',
            'bean_category_name' => 'liberica',
            'product_id' => 'LI0002'
        ],
        [
            'bean_category_id' => 'EX',
            'bean_category_name' => 'excelsa',
            'product_id' => 'EX0002'
        ]
    ];

    private static $vendors = [
        [
            'vendor-id' => 'VD0001',
            'vendor-name' => 'Vendor-name',
            'vendor-logo' => 'img/coffee-pack.png'
        ]
    ];

    private static $coffee_catalog = [
        [
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Vendor Name',
            'vendor-name_slug' => 'vendor-name',
            'product-id' => 'RO0001',
            'bean_category' => 'robusta',
            'product-img' => 'img/aceh-gayo.png',
            'product-title' => 'Kopi Gayo',
            'product-title_slug' => 'kopi-gayo',
            'product-desc' => 'Lorem ipsum dolor sit...',
            'jumlah-stok' => 55,
            'price' => 60000,
            'rate' => '4.8',
            'average' => 'Terjual 100+',
            'jumlah_review' => 200
        ],
    ];

    // public static function all()
    // {
    //     return collect(self::$coffee_catalog);
    // }

    public static function find($vendor_name, $product_title)
    {
        // return static::all()->firstWhere('vendor-name', $vendor_name);
        return collect(static::all()->where('vendor-name_slug', $vendor_name))->firstWhere('product-title_slug', $product_title);
    }

    public static function getBeanCategories()
    {
        return collect(self::$bean_table)->pluck('bean_category_name')->unique();
    }

    public static function getVendors()
    {
        return collect(self::$vendors);
    }
}