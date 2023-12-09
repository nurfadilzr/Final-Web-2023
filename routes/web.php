<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\eCommerceController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/regisBuyer', [eCommerceController::class, 'regisBuyer']);

// Route::get('/regisSeller', [eCommerceController::class, 'regisSeller']);

// Route::get('/login', [eCommerceController::class, 'login']);

// Route::get('/beranda', [eCommerceController::class, 'home']);

Auth::routes();

Route::get('/dashboard-admin', 'AdminController@dashboard')->middleware('admin');
Route::get('/home-buyer', 'BuyerController@index')->middleware('buyer');
Route::get('/home-seller', 'SellerController@profile')->middleware('seller');
Route::get('/home-public', 'eCommerceController@home')->middleware('public');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index']);

Route::get('/productCategory', [ProductController::class, 'search'])->name('products.search');

Route::get('/products/{nama}', [ProductController::class, 'showProduct'])->name('products.show');


Route::group(['middleware' => 'admin'], function () {
    // Rute-rute yang hanya dapat diakses oleh admin
});

Route::group(['middleware' => 'seller'], function () {
    // Rute-rute yang hanya dapat diakses oleh seller
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/buyerDashboard', [BuyerController::class, 'profile']);

Route::post('/buyerDashboard', 'BuyerController@update')->name('profile.update');

Route::post('/uploadProduct', 'SellerController@store')->name('seller.create');


