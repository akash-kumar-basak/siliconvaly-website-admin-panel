<?php

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\Category1Controller;
use App\Http\Controllers\backend\Category2Controller;
use App\Http\Controllers\backend\CustomerControllerAdmin;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\WebVisitorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CompanySettingsConrtoller;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\frontend\ProductCartController;
use App\Http\Controllers\frontend\OrderController;
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


//-----------------backend----------------------
Auth::routes();
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/category_read/{id}', [Category2Controller::class, 'category2Read']);
    Route::resource('companySettings', CompanySettingsConrtoller::class);
    Route::resource('category1', Category1Controller::class);
    Route::resource('category2', Category2Controller::class);
    Route::resource('product', ProductController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('customer-order', \App\Http\Controllers\backend\OrderController::class);
    Route::resource('customer-admin', CustomerControllerAdmin::class);
    Route::resource('web-visitor', WebVisitorController::class);
});

Route::get('/admin_login', function () {
    return view('backend.element.auth.login');
})->name('admin_login');
Route::get('/admin_logout', function () {
    return view('backend.element.auth.logout');
})->name('admin_logout');
Route::get('/user/logout', [CustomerController::class, 'userLogout'])->name('userLogout');
Route::get('/customer/logout', [CustomerController::class, 'customerLogout'])->name('customerLogout');


//---------------frontend------------------------
//Auth::routes();
Route::resource('customer', CustomerController::class);
Route::get('/customer_login_form', [CustomerController::class, 'customerLoginForm']);
Route::post('/customer_login', [CustomerController::class, 'customerLogin'])->name('customer_login');
Route::get('/customer_order', [CustomerController::class, 'customerOrder'])->name('customer_order');
Route::resource('product_cart', ProductCartController::class);
Route::resource('order', OrderController::class);
Route::get('/', [homeController::class, 'home']);
Route::get('/product/{category}/{id}', [homeController::class, 'productDetails']);

Route::group(['middleware' => 'auth:customer'], function () {
    Route::get('/product_category_show', [homeController::class, 'productCategoryShow']);
    Route::get('/product_cart', [homeController::class, 'productCart']);
    Route::get('/product_checkout', [homeController::class, 'productCheckout']);
    Route::post('/product_to_cart', [ProductCartController::class, 'productToCart']);
    Route::get('/customer_order_congratulation', [OrderController::class, 'orderCongratulation']);
});

