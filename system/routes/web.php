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
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function (){
    return view('about');
});
Route::get('/category', function (){
    return view('category');
});
Route::get('/product', function (){
    return view('product');
});
Route::get('/blog', function (){
    return view('blog');
});
Route::get('/element', function (){
    return view('element');
});
Route::get('/kontak', function(){
    return view('kontak');
});
Route::get('/cart', function(){
    return view('cart');
});
Route::get('/dashboard', function(){
    return view('dashboard');
});
Route::get('/table', function(){
    return view('table');
});
Route::get('/billing', function(){
    return view('billing');
});
Route::get('/profile', function(){
    return view('profile');
});
Route::get('/virtual', function(){
    return view('virtual');
});
Route::get('/rtl', function(){
    return view('rtl');
});
Route::get('/sign-up', function(){
    return view('sign-up');
});
Route::get('/sign', function(){
    return view('sign');
});