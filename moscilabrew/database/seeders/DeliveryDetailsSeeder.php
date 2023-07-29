<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryDetail;

class DeliveryDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryDetail::create([
            'msDelivery_id' => 1,    
            'msDeliveryService_id' => 1
        ]);
        
        DeliveryDetail::create([
            'msDelivery_id' => 1,    
            'msDeliveryService_id' => 2
        ]);

        DeliveryDetail::create([
            'msDelivery_id' => 2,    
            'msDeliveryService_id' => 2
        ]);
        
        DeliveryDetail::create([
            'msDelivery_id' => 2,    
            'msDeliveryService_id' => 3
        ]);

        DeliveryDetail::create([
            'msDelivery_id' => 3,    
            'msDeliveryService_id' => 1
        ]);
        
        DeliveryDetail::create([
            'msDelivery_id' => 2,    
            'msDeliveryService_id' => 3
        ]);
    }
}
