<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coffee;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coffee::create(['product_img' => 'img/aceh-gayo.png',
        'vendor_id' => '1',
        'product_name' => 'Kopi Gayo',
        'product_desc' => 'Lorem ipsum dolor sit...',
        'bean_category_name' => 'Arabica',
        'jumlah_stok' => 55,
        'harga_product' => 60000,
        'rating_product' => 4.8,
        'average' => 'Terjual 100+',
        'jumlah_review' => 200]);

        Coffee::create(['product_img' => 'img/aceh-gayo.png',
        'vendor_id' => '2',
        'product_name' => 'Kopi Luak',
        'product_desc' => 'Lorem ipsum dolor sit...',
        'bean_category_name' => 'Robusta',
        'jumlah_stok' => 70,
        'harga_product' => 100000,
        'rating_product' => 4.5,
        'average' => 'Terjual 20+',
        'jumlah_review' => 200]);     
    }
}
