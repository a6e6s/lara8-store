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
    return view('home');
});

// Route::view('about','about')->name('about');
// Route::view('contact','contact')->name('contact');
// Route::view('blog-list','blog-list')->name('blog-list');
// Route::view('blog-single','blog-single')->name('blog-single');
// Route::view('products','products')->name('products');
// Route::view('product-single','product-single')->name('product-single');
// Route::view('blog-single','blog-single')->name('blog-single');