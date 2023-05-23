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

<<<<<<< Updated upstream
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
=======
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
>>>>>>> Stashed changes
