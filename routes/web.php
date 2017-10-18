<?php

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'admin'], function(){

	Route::get('/','AdminController@index');

	Route::resource('pengguna','PenggunaController');

	Route::resource('role','RoleController');

	Route::resource('cuti','CutiController');

	Route::resource('store','StoreController');

});

Route::group(['prefix'=>'user','as'=>'user.'], function(){

	Route::resource('store','UserStoreController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/profile/{id}','UserProfileController@show');
