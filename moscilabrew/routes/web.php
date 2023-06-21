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
Route::get('/aboutUs', function () {
    return view('aboutus');
});
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
    
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    
    Route::post('/cart/addToCart/{coffee:id}', [CartController::class, 'addToCart'])->name('cart.add');
    
    Route::get('/cart/remove/{coffee:id}', [CartController::class, 'removeItem'])->name('cart.remove');
    
    Route::get('/cart/minusQty', [CartController::class, 'minusQty'])->name('cart.minusQty');
    
    Route::get('/cart/plusQty', [CartController::class, 'plusQty'])->name('cart.plusQty');
    
    Route::get('/cart/updateQty', [CartController::class, 'updateQty'])->name('cart.updateQty');
    
    Route::get('/cart/addToOrderList/{cart:id}', [OrderController::class, 'addToOrderList'])->name('order.add');
    
    Route::get('/cart/removeItemOrderList/{cart:id}', [OrderController::class, 'removeItemOrderList'])->name('order.remove');

    Route::get('/cart/addItemsToOrderList/{vendor:id}', [OrderController::class, 'addItemsToOrderList'])->name('order.addItems');
    
    Route::get('/cart/removeItemsOrderList/{vendor:id}', [OrderController::class, 'removeItemsOrderList'])->name('order.removeItems');
    
    Route::get('/cart/confirmation-buy', [CartController::class, 'showCheckout'])->name('cart.checkout');
    
    Route::get('/setDeliveryFee', [CartController::class, 'setDeliveryFee'])->name('setDeliveryFee');
    
    // coffee blend
    Route::post('/coffee-blend/bean-chooser', [CoffeeBlendController::class, 'beanChooser'])->name('coffeeBlend.beanChooser');
    
    Route::post('/coffee-blend/create', [CoffeeBlendController::class, 'create'])->name('coffeeBlend.create');
    
    Route::post('/coffee-blend/buy', [CoffeeBlendController::class, 'buy'])->name('coffeeBlend.buy');
    
    Route::get('/coffee-blend/create-blend', [CoffeeBlendController::class, 'createView'])->name('coffeeBlend.create.index');
    
    Route::get('/coffee-blend/blend-vendors', [CoffeeBlendController::class, 'showBlendVendors'])->name('coffeeBlend.blendVendors');
    
    Route::get('/coffee-blend/confirmation-buy-custom-blend/', [CoffeeBlendController::class, 'showConfirmationCustomBlend'])->name('coffeeBlend.confirmationBlend');
    
    Route::get('/coffee-blend/set-weight', [CoffeeBlendController::class, 'setWeight']);
    
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
Route::get('search', [CoffeeBlendController::class, 'search']); // search bean

Route::get('/coffee-blend', [CoffeeBlendController::class, 'index']);

Route::get('/daftar-transaksi', [UserController::class, 'showDaftarTransaksi'])->name('daftar-transaksi');


/* =============
    SELLER
================ */
Route::get('/seller/dashboard', [SellerController::class, 'dashboard']);

Route::get('/seller/discuss', [SellerController::class, 'discuss']);

// add product
Route::get('/seller/add-product', [ProductController::class, 'viewAddProduct'])->name('seller.viewAddProduct');

Route::post('/seller/storeProduct/{process_num}', [ProductController::class, 'addProductProcess'])->name('seller.addProductProcess');

Route::post('/seller/storeProduct', [ProductController::class, 'store'])->name('seller.storeProduct');

Route::get('/waiting-payment{transaction}', [CartController::class, 'showWaitingPayment'])->name('showWaitingPayment');

Route::get('/waiting-payment2{total_harga}', [CartController::class, 'showWaitingPayment2'])->name('showWaitingPayment2');