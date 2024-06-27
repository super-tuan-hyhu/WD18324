<?php

use App\Http\Controllers\ListProFileContrller;
use App\Http\Controllers\ProductController;
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

// list-product
Route::get('list', [ProductController::class, 'showProduct']);

// làm kiểu slug
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

Route::get('thongtinsv', [ListProFileContrller::class, 'showProfile']);

Route::get('/', function () {
    return view('welcome');
});
