<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    private static $carousel_item = [
        [
            'img' => 'img/coffee-18.jpg',
            'coffee-name' => 'Arabica Coffee'
        ],
        [
            'img' => 'img/coffee-18.jpg',
            'coffee-name' => 'Robusta Coffee'
        ],
        [
            'img' => 'img/coffee-18.jpg',
            'coffee-name' => 'Arabica Coffee'
        ]
    ];

    private static $featured_coffee_catalog = [
        [
            'coffee-name' => 'Robusta',
            'img' => 'img/aceh-gayo.png'
        ],
        [
            'coffee-name' => 'Robusta',
            'img' => 'img/aceh-gayo.png'
        ],
        [
            'coffee-name' => 'Robusta',
            'img' => 'img/aceh-gayo.png'
        ]
    ];

    private static $services = [
        [
            'img' => '/img/freshly-roasted.png',
            'name' => 'Freshly Roasted',
            'desc' => 'Roasted 12 hours before shipment'
        ],      
        [
            'img' => '/img/express-shipment.png',
            'name' => 'Express Shipment',
            'desc' => 'Express shipment for JABODETABEK'
        ],
        [
            'img' => '/img/quality-storage.png',
            'name' => 'Quality Storage',
            'desc' => 'High quality storage system'
        ]
    ];

    public static function getCarouselItem()
    {
        return collect(self::$carousel_item);
    }

    public static function getFeaturedCoffeeCatalog()
    {
        return collect(self::$featured_coffee_catalog);
    }

    public static function getServices()
    {
        return collect(self::$services);
    }
}
