<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coffees', function (Blueprint $table) {
            // $table->uuid('product_id')->default(DB::raw('uuid()'));
            $table->id();
            // $table->uuid('vendor_id')->foreign()->references('vendor_id')->on('vendors');
            // $table->foreign('vendor_id')->references('vendor_id')->on('vendors');
            // $table->unsignedBigInteger('vendor_id')->foreign()->references('vendor_id')->on('vendors');
            $table->foreignId('vendor_id');
            $table->string('bean_category_name');
            $table->string('product_img');
            $table->string('product_name');
            $table->text('product_desc');
            $table->integer('jumlah_stok');
            $table->integer('harga_product');
            $table->decimal('rating_product', 2, 1)->default(0);
            $table->string('average')->default(0);
            $table->integer('jumlah_review')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
