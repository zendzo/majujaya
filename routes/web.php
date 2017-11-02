<?php

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'admin'], function(){

	Route::get('/',[
		'as'	=>	'dashboard',
		'uses'	=>	'AdminController@index'
	]);

	Route::resource('pengguna','PenggunaController');

	Route::resource('role','RoleController');

	Route::resource('store','StoreController');

	Route::resource('pembelian','PembelianController');

	Route::resource('supplier','SupplierController');

	Route::resource('product','ProductController');

	Route::resource('product-type','ProductTypeController');

	Route::resource('warehouse','WarehouseController');

	Route::resource('truck','TruckController');

	Route::resource('vendor','VendorController');

	Route::resource('satuan','SatuanController');

	Route::resource('sales','TransaksiPenjualanController');

	Route::resource('orders','TransaksiPembelianController');

	// index nota transaksi

	Route::get('pembayaran-pembelian',[
		'as'	=>	'pembayaran.pembelian',
		'uses'	=>	'PembelianController@pembayaranPembelian'
	]);

	Route::get('pembayaran-penjualan',[
		'as'	=>	'pembayaran.penjualan',
		'uses'	=>	'PenjualanController@pembayaranPenjualan'
	]);

	Route::resource('penjualan','PenjualanController');

	// admin-transaksi-jual-beli

	Route::get('transksi-pembelian',[
		'as'	=>	'transaksi.pembelian',
		'uses'	=>	'TransaksiController@pembelian'
	]);

	Route::get('transksi-penujualan',[
		'as'	=>	'transaksi.penjualan',
		'uses'	=>	'TransaksiController@penjualan'
	]);

	// admin-show-and-add-transaksi-items

	Route::get('proses-transaksi-pembelian/{code}',[
		'as'	=>	'proses.transaksi.pembelian',
		'uses'	=>	'TransaksiController@prosesPembelian'
	]);

	Route::get('proses-transaksi-penujualan/{code}',[
		'as'	=>	'proses.transaksi.penjualan',
		'uses'	=>	'TransaksiController@prosesPenjualan'
	]);

});

Route::group(['prefix'=>'user','as'=>'user.'], function(){

	Route::resource('store','UserStoreController');

	Route::resource('/profile','UserProfileController',['only' => ['show','update']]);

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/profile/{id}','UserProfileController@show');

Route::get('/users/find','PelangganApiController@find');

Route::get('/pembelian/data',['as' => 'pembelian.data','uses' => 'PembelianApiController@getAll']);
