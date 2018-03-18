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

Route::get('/contact', 'mainController@contact')->name('contact');

Route::get('/main1', 'mainController@index')->name('main1');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'profilController@profil')->name('profil')->middleware('auth');

Route::group(['middleware' => 'auth'], function (){
	
	Route::get('/Info', 'InfopersoController@index')->name('info.index');
	
});


Route::get('/', 'mainController@index2')->name('main');

Route::get('/test', 'mainController@test')->name('test');

Route::middleware('auth')->group(function () {
    Route::resource('image', 'ImageController', [
        'only' => ['create', 'store', 'destroy']
    ]);
}); 

use App\Image;

Route::get('/1', function() {
	Image::create()
			->addMedia(storage_path('picture/Aikido.jpg'))
			->preservingOriginal()
			->toMediaCollection();
		
});

