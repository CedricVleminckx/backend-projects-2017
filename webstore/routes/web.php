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
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', function () {
    return view('Content.home');
});

Route::get('/shop', 'ShopController@index');
Route::get('/shop/{id}', 'ShopController@categoryItems');
Route::get('/shop/{id}/product/{productNumber}', 'ShopController@detailItem');

Route::get('/order', 'AccountController@orders');
Route::get('/wishlist', 'AccountController@wishlist');
Route::post('/order/{id}', 'AccountController@orderItem');
Route::post('/wishlist/{id}', 'AccountController@wishItem');
Route::post('/wishlist/{id}/delete', 'AccountController@deleteWish');
Route::post('/orderWishlist', 'AccountController@orderWish');
Route::post('/orderWishlist/update', 'AccountController@orderWishUpdate');
Route::post('/order/{id}/payment', 'AccountController@payment');

Route::get('/search', 'ShopController@searchResults');
Route::get('/shop/{id}/filter', 'ShopController@filter');

Route::get('/login', 'AccountController@login');
Route::get('/account', 'AccountController@account');
Route::get('/account/edit', 'AccountController@accountEdit');
Route::post('/account/post/{id}', 'AccountController@accountUpdate');
Route::post('/account/post/{id}/order', 'AccountController@orderAccountUpdate');

Auth::routes();
