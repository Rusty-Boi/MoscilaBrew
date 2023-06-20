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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('picture');
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->unique();
            $table->string('gender')->nullable();
            $table->string('birth_date')->nullable();
            // $table->foreign('history_id')->;
            // $table->id('history_id')->foreign()->references('history_id')->on('histories');
            // $table->uuid('vendor_id')->foreign()->references('vendor_id')->on('vendors');
            // $table->id('receipt_id')->foreign()->references('receipt_id')->on('vendors');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
