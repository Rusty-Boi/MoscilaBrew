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
            $table->uuid('product_id')->default(DB::raw('uuid()'));
            $table->uuid('vendor_id')->foreign()->references('vendor_id')->on('vendors');
            $table->string('bean_category_name');
            $table->string('product_img');
            $table->string('product_name');
            $table->text('product_desc');
            $table->integer('jumlah_stok');
            $table->integer('harga_product');
            $table->decimal('rating_product', 2, 1);
            $table->string('average');
            $table->integer('jumlah_review');
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
