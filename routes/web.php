<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vendor/add', [App\Http\Controllers\VendorController::class, 'add_vendor'])->name('add_vendor');
Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor');
Route::post('/vendor/create', [App\Http\Controllers\VendorController::class, 'create_vendor'])->name('create_vendor');
Route::post('/update-column-order', [App\Http\Controllers\VendorController::class, 'updateColumnOrder']);

