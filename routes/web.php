<?php

use App\Http\Livewire\Cart;
use \App\Http\Livewire\Product;
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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/cart', Cart::class);
    Route::get('/products', Product::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
