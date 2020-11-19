<?php

use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');


Route::view('login', 'login')->name('login');
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');


Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('blog', 'blog')->name('blog-list');
Route::view('products', 'shop')->name('products');
Route::view('product-single', 'product-details')->name('product-single');
Route::view('blog-single', 'blog-single')->name('blog-single');
Route::view('404', '404');
Route::view('cart', 'cart');
Route::view('checkout', 'checkout');
