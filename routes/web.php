<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use App\Http\Middleware\SellerLoginCheck;
use App\Http\Middleware\ValidSeller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout.main');
// });

Route::get('/', function () {
    return view('buyer.home');
})->name('home');

Route::get('/products', function () {
    return view('buyer.products');
})->name('product');
 
Route::get('/product', function () {
    return view('buyer.single-product');
})->name('single-product');

Route::get('/cart', function () {
    return view('buyer.cart');
})->name('cart');

Route::get('/wishlist', function () {
    return view('buyer.wishlist');
})->name('wishlist');

Route::get('/notifications', function () {
    return view('buyer.notifications');
})->name('notifications');

Route::get('/login', function () {
    return view('buyer.login');
})->name('login');

Route::get('/register', function () {
    return view('buyer.register');
})->name('register');

Route::get('/profile', function () {
    return view('buyer.profile');
})->name('profile');




Route::prefix('seller')->group(function () {

    Route::middleware([SellerLoginCheck::class])->group(function(){

    Route::view('/register','seller.register')->name('sellerRegisterPage');
    Route::post('/registerSeller',[SellerController::class,'registerSeller'])->name('registerSeller');

    Route::view('/login','seller.login')->name('sellerLoginPage');
    Route::post('/loginSeller',[SellerController::class,'loginSeller'])->name('loginSeller');

    });
    
    Route::middleware([ValidSeller::class])->group(function(){
        Route::view('/','seller.home')->name('seller');
        Route::view('/profile','seller.profile')->name('sellerProfile');
        Route::view('/notifications','seller.notifications')->name('sellerNotifications');

        Route::get('/product/draft',[ProductController::class,'showDrafts'])->name('productDraft');
        Route::get('/product/publish/{id}',[ProductController::class,'publishProduct'])->name('publishProduct');
        Route::get('/logout',[SellerController::class,'logoutSeller'])->name('logoutSeller');
        Route::post('/update',[SellerController::class,'updateSeller'])->name('updateSeller');
        Route::post('/update/password',[SellerController::class,'updateSellerPassword'])->name('updateSellerPassword');

        Route::resource('/product',ProductController::class);

        
        
    });
});