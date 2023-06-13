<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [AdminController::class, 'index'])->name('dashboard');

Route::middleware(['guest'])->group(function () {
    
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    
    Route::post('/login', [UserController::class, 'authenticate']);
    
    Route::get('/register', function () {
        return view('register', [
            'request' => request()
        ]);
    })->name('register');
    
    Route::post('/register', [UserController::class, 'store']);

});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout',]);
    
    Route::post('/catalog/{coffee:id}/addToCart', [CartController::class, 'addToCart'])->name('cart.add');
    
    Route::get('/catalog/{coffee:id}/remove', [CartController::class, 'removeItem'])->name('cart.remove');
    
    Route::get('/{coffee:id}/addToOrderList', [OrderController::class, 'addToOrderList'])->name('order.add');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    
    // coffee order
    Route::get('/{vendor:id}/addItemsToOrderList', [OrderController::class, 'addItemsToOrderList'])->name('order.addItems');
    
    Route::get('/{coffee:id}/removeItemsOrderList', [OrderController::class, 'removeItemsOrderList'])->name('order.removeItems');
    
    Route::get('/{coffee:id}/removeItemOrderList', [OrderController::class, 'removeItemOrderList'])->name('order.remove');
    
    // coffee blend
    Route::post('/coffee-blend/create', [CoffeeBlendController::class, 'create'])->name('coffeeBlend.create');
    
    Route::get('/coffee-blend/blend-vendors', [CoffeeBlendController::class, 'showBlendVendors'])->name('coffeeBlend.blendVendors');
    
    Route::get('/coffee-blend/confirmation-buy-custom-blend/', [CoffeeBlendController::class, 'showConfirmationCustomBlend'])->name('coffeeBlend.confirmationBlend');
    
    // profile
    
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    
    Route::post('/profile/editName', [UserController::class, 'editName'])->name('profile.editName');
    
    Route::post('/profile/editEmail', [UserController::class, 'editEmail'])->name('profile.editEmail');
    
    Route::post('/profile/editAddress', [UserController::class, 'editAddress'])->name('profile.editAddress');
});

// main fitur

Route::get('/catalog', [CoffeeController::class, 'showCatalog']);

Route::get('/catalog/{bean_cat}', [CoffeeController::class, 'showProductsByBeanCat']);

Route::get('/catalog/{vendor_name}/{coffee}', [CoffeeController::class, 'showProductPage']);

// coffee blend
Route::get('/coffee-blend', [CoffeeBlendController::class, 'index']);

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