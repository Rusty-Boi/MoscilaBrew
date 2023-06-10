<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            'vendor_name' => 'Aceh',    
            'vendor_logo' => 'img/coffee-pack.png'
        ]);

        Vendor::create([
            'vendor_name' => 'Vendor Name',    
            'vendor_logo' => 'img/coffee-pack.png'
        ]);       
    }
}