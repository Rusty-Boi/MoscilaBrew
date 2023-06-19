<?php

namespace App\Models;

class Product
{
    private static $deliveryOptions = ['Cash On Delivery', 
                                'TIKI', 
                                'Self-Delivery', 
                                'JNE', 
                                'JNT', 
                                'Gojek-Instant', 
                                'SiCepat', 
                                'Grab-Instant'];

    public static function get_delivery_options(){
        return self::$deliveryOptions;
    }
}
