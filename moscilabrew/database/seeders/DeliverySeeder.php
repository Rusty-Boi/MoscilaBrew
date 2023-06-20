<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Delivery;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Delivery::create([
            'vendor_id' => 1,    
            'deliveryDetail_id' => 2
        ]);

        Delivery::create([
            'vendor_id' => 1,    
            'deliveryDetail_id' => 1
        ]);

        Delivery::create([
            'vendor_id' => 2,    
            'deliveryDetail_id' => 3
        ]);

        Delivery::create([
            'vendor_id' => 2,    
            'deliveryDetail_id' => 1
        ]);

        Delivery::create([
            'vendor_id' => 2,    
            'deliveryDetail_id' => 2
        ]);
    }
}
