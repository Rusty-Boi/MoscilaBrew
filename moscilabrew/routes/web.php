<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/featured', function () {
    return view('featured');
});

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

Route::get('/coffee-blend', [CoffeeBlendController::class, 'index']);

Route::get('/coffee-blend/blend-vendors', [CoffeeBlendController::class, 'showBlendVendors']);

Route::get('/cart', [UserController::class, 'showCart']);

Route::get('/daftar-transaksi', [UserController::class, 'showDaftarTransaksi']);

Route::get('/confirmation-buy', function () {
    return view('confirmation-buy');
});

Route::get('/confirmation-buy-custom-blend', function () {
    return view('confirmation-buy-custom-blend');
});


/* =============
    SELLER
================ */
Route::get('/seller/dashboard', [SellerController::class, 'dashboard']);

Route::get('/seller/discuss', [SellerController::class, 'discuss']);

// add product
Route::get('/seller/add-product', [ProductController::class, 'add']);