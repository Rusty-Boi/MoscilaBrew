<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'name' => 'Hengki',
            'email' => 'hengki@gmail.com',
            'password' => 'bene',
            'address' => 'bengkayang',
            'phone_number' => '081257520000'
        ]);
        
        User::create([
            'name' => 'Bene',
            'email' => 'bene@gmail.com',
            'password' => 'ben',
            'address' => 'bengkayang',
            'phone_number' => '0812575210000'
        ]);
           
    }
}
