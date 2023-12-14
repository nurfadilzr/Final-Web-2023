<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\eCommerceController;
use App\Http\Controllers\LoginBuyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\RegisBuyerController;
use App\Http\Controllers\RegisSellerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

Route::get('/regisBuyer', [eCommerceController::class, 'regisBuyer']);
Route::post('/regisBuyer', [RegisBuyerController::class, 'create']);

Route::get('/regisSeller', [eCommerceController::class, 'regisSeller']);
Route::post('/regisSeller', [RegisSellerController::class, 'create']);

Route::get('/login', [eCommerceController::class, 'login']);
Route::post('/login-buyer', [LoginBuyerController::class, 'login']);
Route::post('/login-seller', [AuthController::class, 'loginSeller']);

Route::get('/home-public', [eCommerceController::class, 'home']);
Route::get('/home-buyer', [BuyerController::class, 'index']);

// Auth::routes();

// Route::get('/dashboard-admin', 'AdminController@dashboard')->middleware('admin');
// Route::get('/home-buyer', 'BuyerController@index')->middleware('buyer');
// Route::get('/home-seller', 'SellerController@profile')->middleware('seller');
// Route::get('/home-public', 'eCommerceController@home')->middleware('public');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index']);

Route::get('/productCategory', [ProductController::class, 'search'])->name('products.search');

Route::get('/products/{nama}', [ProductController::class, 'showProduct'])->name('products.show');


// Route::group(['middleware' => 'admin'], function () {
//     // Rute-rute yang hanya dapat diakses oleh admin
// });

// Route::group(['middleware' => 'seller'], function () {
//     // Rute-rute yang hanya dapat diakses oleh seller
// });


Route::get('/logout', [LoginBuyerController::class, 'logout'])->name('logout');

Route::get('/buyerDashboard', [BuyerController::class, 'profile']);
Route::post('/buyerDashboard', 'BuyerController@update')->name('profile.updateBuyer');

Route::get('/sellerDashboard', [SellerController::class, 'profile']);   // ambil & tampiin data seller
// Route::post('/sellerDashboard', [SellerController::class, 'update']);    // update profile seller
Route::match(['put', 'patch'], '/sellerDashboard/{id}', [SellerController::class, 'updateSeller'])->name('profile.updateSeller');



Route::get('/uploadProduct', [SellerController::class, 'index'])->name('seller.create');
Route::post('/uploadProduct', [SellerController::class, 'store'])->name('seller.create');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
