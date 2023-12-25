<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home_page', function () {
    return view('home_page');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shuffle', function () {
    return view('shuffle');
});
Route::get('/cart-kosong', function () {
    return view('cart-kosong');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/store-locator', function () {
    return view('store-locator');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/howtoorder', function () {
    return view('howtoorder');
});
Route::get('/sizing-info', function () {
    return view('sizing-info');
});
Route::get('/shipping-info', function () {
    return view('shipping-info');
});
Route::get('/order-status', function () {
    return view('order-status');
});
Route::get('/return-refund-policy', function () {
    return view('return-refund-policy');
});
Route::get('/product-warranty', function () {
    return view('product-warranty');
});
Route::get('/how-to-clean', function () {
    return view('how-to-clean');
});
Route::get('/my-account', function () {
    return view('my-account');
});
Route::post('/process-login', 'AuthController@login')->name('process-login');