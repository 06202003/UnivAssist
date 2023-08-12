<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\KeranjangController;
use \App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect(route('login'));
});

Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/indekos',[ItemController::class,'index'])->name('indekos');
    Route::get('/home', 'DashboardController@index')->name('home');
    Route::get('/about', 'DashboardController@about')->name('about');
    Route::get('/faq', 'DashboardController@faq')->name('faq');
    Route::get('/contact', 'DashboardController@contact')->name('contact');
//    Route::get('/indekos', 'DashboardController@indekos')->name('indekos');
    Route::get('/laptop', [ItemController::class,'laptopview'])->name('laptop');
    Route::get('/book', [ItemController::class,'bookview'])->name('book');
    Route::get('/kosdetail/{id}', [ItemController::class,'detail'])->name('kosdetail');
    Route::get('/bookdetail/{id}', [ItemController::class,'bookDetail'])->name('bookdetail');
    Route::get('/laptopdetail/{id}', [ItemController::class,'laptopDetail'])->name('laptopdetail');
    Route::get('/keranjang', 'DashboardController@keranjang')->name('keranjang');
    Route::get('/kost/store/{id}',[KeranjangController::class,'index'])->name('addKostKeranjang');
    Route::post('/kost/store/{id}',[KeranjangController::class,'store'])->name('addKostKeranjang');
});




