<?php

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

Route::get('/', 'Auth\LoginController@home');
// Cards
Route::get('cards', 'CardController@list');
Route::get('cards/{id}', 'CardController@show');

// API
Route::put('api/cards', 'CardController@create');
Route::delete('api/cards/{card_id}', 'CardController@delete');
Route::put('api/cards/{card_id}/', 'ItemController@create');
Route::post('api/item/{id}', 'ItemController@update');
Route::delete('api/item/{id}', 'ItemController@delete');

// Authentication

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


//routes for debugging pages - remove later 

Route::get('home', function () {
    return view('pages.home');
});

//profile pages and stuff related 
Route::get('profile', function () {
    return view('pages.profile');
});

Route::get('review', function () {
    return view('pages.review');
});

Route::get('profile/wishlist', function () {
    return view('pages.wishlist');
});

Route::get('profile/purchased_history', function () {
    return view('pages.purchased_history');
});


//shopping cart and checkout 
Route::get('cart', function () {
    return view('pages.cart');
});

Route::get('checkout/shipping', function () {
    return view('pages.checkout.shipping');
});

Route::get('checkout/payment', function () {
    return view('pages.checkout.payment');
});

Route::get('checkout/confirm', function () {
    return view('pages.checkout.confirm');
});