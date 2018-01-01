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
    return view('welcome');
});

//Route::get('/main', function () {
 //   return view('main');
//})->name('main');

Route::get('/contact', 'mainController@contact')->name('contact');

Route::get('/main1', 'mainController@index')->name('main1');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'profilController@profil')->name('profil')->middleware('auth');

Route::get('/main', 'mainController@index2')->name('main');

Route::get('/test', 'mainController@test')->name('test');
