<?php

use App\Http\Controllers\Category1Controller;
use App\Http\Controllers\Category2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanySettingsConrtoller;

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
    return view('element.dashboard.dashboard');
})->name('/');


Route::resource('companySettings', CompanySettingsConrtoller::class);
Route::resource('category1', Category1Controller::class);
Route::resource('category2', Category2Controller::class);

Route::get('/category2Read', [Category2Controller::class, 'category2Read']);