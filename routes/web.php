<?php

use App\Http\Controllers\backend\testControler;
use App\Http\Controllers\backend\Category1Controller;
use App\Http\Controllers\backend\Category2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CompanySettingsConrtoller;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\frontend\ProductCartController;
use App\Http\Controllers\frontend\OrderController;


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
Route::get('/admin_login', function(){
    return view('backend.element.auth.login');
});
Route::get('/category_read/{id}', [Category2Controller::class, 'category2Read']);
Route::resource('companySettings', CompanySettingsConrtoller::class);
Route::resource('category1', Category1Controller::class);
Route::resource('category2', Category2Controller::class);
Route::resource('product', ProductController::class);


//---------------frontend------------------------
Route::get('/customer_login', [CustomerController::class, 'customerLogin']);
Route::get('/customer_order', [CustomerController::class, 'customerOrder'])->name('customer_order');
Route::resource('customer', CustomerController::class);
Route::resource('product_cart', ProductCartController::class);
Route::resource('order', OrderController::class);
Route::get('/', [homeController::class, 'home']);
Route::get('/product/{category}/{id}', [homeController::class, 'productDetails']);
Route::get('/product_cart', [homeController::class, 'productCart']);
Route::get('/product_checkout', [homeController::class, 'productCheckout']);
Route::post('/product_to_cart', [ProductCartController::class, 'productToCart']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
