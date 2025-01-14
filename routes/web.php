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
})->name('index');

Route::get('/profilecustomer', function () {
    return view('profile');
})->name('profilecustomer');

Route::get('/editprofile', function () {
    return view('editprofile');
})->name('editprofile');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/order-tracking', function () {
    return view('order-tracking');
})->name('order-tracking');

Route::get('/order-tracking-done', function () {
    return view('order-tracking-done');
})->name('order-tracking-done');

Route::get('/detailproduct', function () {
    return view('detailproduct');
})->name('detailproduct');

Route::get('/ktgatasan', function () {
    return view('kategori.ktgatasan');
})->name('ktgatasan');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/add-address', function () {
    return view('add-address');
})->name('add-address');

Route::get('/favorite', function () {
    return view('favorite');
})->name('favorite');

Route::get('/chat-customer', function () {
    return view('chat');
})->name('chat-customer');

Route::get('/ktgbawahan', function () {
    return view('kategori.ktgbawahan');
})->name('ktgbawahan');

Route::get('/ktghijab', function () {
    return view('kategori.ktghijab');
})->name('ktghijab');

Route::get('/ktglainnya', function () {
    return view('kategori.ktglainnya');
})->name('ktglainnya');

Route::get('/ktgmukenah', function () {
    return view('kategori.ktgmukenah');
})->name('ktgmukenah');

Route::get('/produkbaru', function () {
    return view('kategori.produkbaru');
})->name('produkbaru');

Route::get('/produkterlaris', function () {
    return view('kategori.produkterlaris');
})->name('produkterlaris');

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

Route::get('/ulasanproduk', function () {
    return view('admin.ulasanproduct');
});

Route::get('/category', function () {
    return view('admin.category');
});

Route::get('/listcategory', function () {
    return view('admin.listcategory');
});

Route::get('/editkategori', function () {
    return view('admin.editkategori');
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

Route::get('/chat', function () {
    return view('admin.chat');
});

Route::get('/promo', function () {
    return view('admin.promosi');
});

Route::get('/howtobuy', function () {
    return view('howtobuy');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/addvoucher', function () {
    return view('admin.addvoucher');
});

Route::get('/editvoucher', function () {
    return view('admin.editvoucher');
});

Route::get('/detailvoucher', function () {
    return view('admin.detailvoucher');
});

Route::get('/detailkategori', function () {
    return view('admin.detailkategori');
});
