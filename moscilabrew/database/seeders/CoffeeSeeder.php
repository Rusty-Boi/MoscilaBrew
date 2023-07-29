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
        Coffee::create([
        'product_img' => 'img/aceh-gayo.png',
        'vendor_id' => '2',
        'product_name' => 'Dropshot Arabica Aceh Gayo Natural',
        'product_desc' => 'Lorem ipsum dolor sit...',
        'bean_category_name' => 'Arabica',
        'jumlah_stok' => 20,
        'harga_product' => 79000,
        'rating_product' => 4.8,
        'average' => 'Terjual 100+',
        'jumlah_review' => 200]);

        Coffee::create(['product_img' => 'img/aceh-gayo.png',
        'vendor_id' => '2',
        'product_name' => 'Dropshot Robusta Blend',
        'product_desc' => 'Lorem ipsum dolor sit...',
        'bean_category_name' => 'Robusta',
        'jumlah_stok' => 20,
        'harga_product' => 39000,
        'rating_product' => 4.5,
        'average' => 'Terjual 20+',
        'jumlah_review' => 200]);     

        Coffee::create(['product_img' => 'img/aceh-gayo.png',
        'vendor_id' => '1',
        'product_name' => 'Arutala Robusta Toraja Rantebua',
        'product_desc' => 'Lorem ipsum dolor sit...',
        'bean_category_name' => 'Robusta',
        'jumlah_stok' => 25,
        'harga_product' => 37000,
        'rating_product' => 4.5,
        'average' => 'Terjual 20+',
        'jumlah_review' => 200]);     

        Coffee::create(['product_img' => 'img/aceh-gayo.png',
        'vendor_id' => '1',
        'product_name' => 'Arutala Robusta Flores Fine Powder',
        'product_desc' => 'Lorem ipsum dolor sit...',
        'bean_category_name' => 'Robusta',
        'jumlah_stok' => 22,
        'harga_product' => 37000,
        'rating_product' => 4.5,
        'average' => 'Terjual 20+',
        'jumlah_review' => 200]);     
    }
}
