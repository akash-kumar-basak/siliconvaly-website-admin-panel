<?php

use App\Http\Controllers\backend\testControler;
use App\Http\Controllers\backend\Category1Controller;
use App\Http\Controllers\backend\Category2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CompanySettingsConrtoller;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\homeController;

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


//-----------------backend----------------------
Route::get('/dashboard', function () {
    return view('backend.element.dashboard.dashboard');
})->name('dashboard');
Route::get('/category_read/{id}', [Category2Controller::class, 'category2Read']);
Route::resource('companySettings', CompanySettingsConrtoller::class);
Route::resource('category1', Category1Controller::class);
Route::resource('category2', Category2Controller::class);
Route::resource('product', ProductController::class);


//---------------frontend------------------------
Route::get('/', [homeController::class, 'home']);
Route::get('/product/{category}/{id}', [homeController::class, 'productDetails']);
Route::get('/product_carts', [homeController::class, 'productCart']);
Route::get('/product_checkouts', [homeController::class, 'productCheckout']);