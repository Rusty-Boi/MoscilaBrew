<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coffeeproduct', function (Blueprint $table) {
            $table->id();
            $table->string('coffeename');
            $table->timestamp('coffeedate')->nullable();
            $table->integer('coffeestock');
            $table->integer('berat');
            $table->integer('harga');
            

            // $table->OrderID();
            // $table->PaymentID();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffeeproduct');
    }
};