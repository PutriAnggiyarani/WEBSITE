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
    return view('index');
});

Route::get('/profilecustomer', function () {
    return view('profile');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/order-tracking', function () {
    return view('order-tracking');
});

Route::get('/order-tracking-done', function () {
    return view('order-tracking-done');
});

Route::get('/detailproduct', function () {
    return view('detailproduct');
});

Route::get('/ktgatasan', function () {
    return view('kategori.ktgatasan');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/add-address', function () {
    return view('add-address');
});

Route::get('/favorite', function () {
    return view('favorite');
});

Route::get('/chat-customer', function () {
    return view('chat');
});

Route::get('/ktgbawahan', function () {
    return view('kategori.ktgbawahan');
});

Route::get('/ktghijab', function () {
    return view('kategori.ktghijab');
});

Route::get('/ktglainnya', function () {
    return view('kategori.ktglainnya');
});

Route::get('/ktgmukenah', function () {
    return view('kategori.ktgmukenah');
});

Route::get('/produkbaru', function () {
    return view('kategori.produkbaru');
});

Route::get('/produkterlaris', function () {
    return view('kategori.produkterlaris');
});

//Admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/product', function () {
    return view('admin.product');
});

Route::get('/productdetails', function () {
    return view('admin.productdetails');
});

Route::get('/addproduct', function () {
    return view('admin.addproduct');
});

Route::get('/editproduct', function () {
    return view('admin.editproduct');
});

Route::get('/category', function () {
    return view('admin.category');
});

Route::get('/transaction', function () {
    return view('admin.transaction');
});

Route::get('/transactiondetail', function () {
    return view('admin.transactiondetail');
});

Route::get('/edittransaction', function () {
    return view('admin.edittransaction');
});

Route::get('/customer', function () {
    return view('admin.customer');
});

Route::get('/loginadmin', function () {
    return view('admin.login');
});

Route::get('/register', function () {
    return view('admin.register');
});
