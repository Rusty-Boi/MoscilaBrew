<?php

namespace Database\Seeders;

use App\Models\MsDelivery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MsDeliveriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MsDelivery::create([
            'delivery_name' => 'JNT',    
        ]);   

        MsDelivery::create([
            'delivery_name' => 'JNE',    
        ]);   

        MsDelivery::create([
            'delivery_name' => 'SiCepat',    
        ]);   
    }
}
