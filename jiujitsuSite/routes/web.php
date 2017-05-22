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

Route::get('/', function(){
  return Redirect::to('/home');
});

Route::get('/home', function(){
  return view('jiujitsu.home');
});

Route::get('/home/geschiedenis', function(){
  return view('jiujitsu.history');
});

Route::get('/contact', function(){
  return view('jiujitsu.about');
});

Route::get('/kalender', 'EventController@overview');
Route::get('/kalender/{id}', 'EventController@detail');
Route::get('/inschrijvingen', 'AdminController@subscriptions');
Route::post('/inschrijvingen/post/{id}', 'EventController@inschrijven');

Route::get('/bewerken', 'AdminController@bewerken');
Route::get('/bewerken/add', 'AdminController@add');
Route::post('/bewerken/add/post', 'AdminController@store');
Route::get('/bewerken/edit/{id}', 'AdminController@edit');
Route::post('/bewerken/post/{id}', 'AdminController@update');
Route::post('/bewerken/delete', 'AdminController@delete');

Route::get('/login', 'AdminController@index');

Auth::routes();
