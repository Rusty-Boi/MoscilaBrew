<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('test', ['name' => 'Hengki',
                        'hobby' => ['mancing', 'bermusik']]);
});

Route::get('/', function () {
    return view('index');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/featured', function () {
    return view('featured');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
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
Route::get('/blend-coffee', function () {
    return view('blend-coffee');
});

Route::get('/confirmation-buy', function () {
    return view('confirmation-buy');
});

Route::get('/confirmation-buy-custom-blend', function () {
    return view('confirmation-buy-custom-blend');
});


// seller
Route::get('/seller/dashboard', function () {
    return view('seller/dashboard');
});

Route::get('/seller/discuss', function () {
    return view('seller/discuss');
});
