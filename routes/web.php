<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::redirect('/', '/myweb');

Route::get('/dashboard', function () {
    return view('backoffice.dashboard');
});
// Route::get('/product', function () {
//     return view('backoffice.product');
// });
// Route::get('/myweb', function () {
//     return view('frontend.index');
// });
Route::get('/myweb', [ProductController::class, 'products']);


Route::post('/orders', [OrderController::class, 'store']);
Route::get('/order', [OrderController::class, 'index']);


Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/add', [ProductController::class, 'create']);
Route::post('/product/add', [ProductController::class, 'store']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update', [ProductController::class, 'update']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);