<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DelSerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'list_service' => 'Reguler',
            'Price' => '10000'
        ]);

        User::create([
            'list_service' => 'One day',
            'Price' => '20000'
        ]);

        User::create([
            'list_service' => 'Ekonomi',
            'Price' => '9000'
        ]);
    }
}
