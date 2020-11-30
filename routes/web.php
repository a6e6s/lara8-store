<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('frontend.home');
// })->name('home');

// home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('login', 'frontend.login')->name('login');
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');
Route::post('register', [UserController::class, 'register'])->name('register');


Route::view('about', 'frontend.about')->name('about');
Route::view('contact', 'frontend.contact')->name('contact');
Route::view('blog', 'frontend.blog')->name('blog-list');
Route::view('products', 'frontend.shop')->name('products');
Route::view('product-single', 'frontend.product-details')->name('product-single');
Route::view('blog-single', 'frontend.blog-single')->name('blog-single');
Route::view('404', '404');
Route::view('cart', 'frontend.cart');
Route::view('checkout', 'frontend.checkout');

Route::get('dashboard', function () {
    return 'dashboard';
})->name('dashboard')->middleware('auth');

//categories
Route::get('category/{id}', [CategoryController::class, 'index'])->name('category');

Route::prefix('admin')->namespace('Admin')->middleware('can:admin')->group(function () {
    // Admin routes go here.
});
