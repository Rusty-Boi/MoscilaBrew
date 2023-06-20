<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MsDeliveryService;

class MsDeliveryServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MsDeliveryService::create([
            'service_name' => 'Reguler'
        ]);   
        
        MsDeliveryService::create([
            'service_name' => 'Ekonomi'
        ]);   

        MsDeliveryService::create([
            'service_name' => 'One Day'
        ]);   
    }
}
