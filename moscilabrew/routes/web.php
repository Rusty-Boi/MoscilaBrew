<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CoffeeBlendController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/tes', function () {
    // return view('test', ['name' => 'Hengki',
    //                     'hobby' => ['mancing', 'bermusik']]);
    return view('test');
});

Route::get('/', [AdminController::class, 'index']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// main fitur

Route::get('/catalog', [CoffeeController::class, 'showCatalog']);

Route::get('{vendor_name}/{product_title}', [CoffeeController::class, 'showProductPage']);

Route::get('/coffee-blend', [CoffeeBlendController::class, 'index']);

Route::get('/coffee-blend/blend-vendors', [CoffeeBlendController::class, 'showBlendVendors']);

Route::get('/confirmation-buy-custom-blend', [CoffeeBlendController::class, 'showConfirmationCustomBlend']);

Route::get('/cart', [UserController::class, 'showCart']);

Route::get('/daftar-transaksi', [UserController::class, 'showDaftarTransaksi']);

Route::get('/confirmation-buy', function () {
    return view('confirmation-buy');
});


/* =============
    SELLER
================ */
Route::get('/seller/dashboard', [SellerController::class, 'dashboard']);

Route::get('/seller/discuss', [SellerController::class, 'discuss']);

// add product
Route::get('/seller/add-product', [ProductController::class, 'add']);