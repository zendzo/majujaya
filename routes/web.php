<?php

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'admin'], function(){

	Route::get('/','AdminController@index');

	Route::resource('pengguna','PenggunaController');

	Route::resource('role','RoleController');

	Route::resource('store','StoreController');

	Route::resource('pembelian','PembelianController');

	Route::resource('supplier','SupplierController');

	Route::resource('product','ProductController');

	Route::resource('product-type','ProductTypeController');

	Route::resource('warehouse','WarehouseController');

	Route::resource('truck','TruckController');

	Route::get('pembayaran-pembelian',[
		'as'	=>	'pembayaran.pembelian',
		'uses'	=>	'PembelianController@pembayaranPembelian'
	]);

	Route::get('pembayaran-penjualan',[
		'as'	=>	'pembayaran.penjualan',
		'uses'	=>	'PenjualanController@pembayaranPenjualan'
	]);

	Route::resource('penjualan','PenjualanController');

	// admin-revisi-transaksi

	Route::get('transksi-pembelian',[
		'as'	=>	'transaksi.pembelian',
		'uses'	=>	'TransaksiController@pembelian'
	]);

	Route::get('transksi-penujualan',[
		'as'	=>	'transaksi.penjualan',
		'uses'	=>	'TransaksiController@penjualan'
	]);

	// admin-revisi-transaksi

	Route::get('revisi-transksi-pembelian',[
		'as'	=>	'revisi.transaksi.pembelian',
		'uses'	=>	'TransaksiController@revisiPembelian'
	]);

	Route::get('revisi-transksi-penujualan',[
		'as'	=>	'revisi.transaksi.penjualan',
		'uses'	=>	'TransaksiController@revisiPenjualan'
	]);

});

Route::group(['prefix'=>'user','as'=>'user.'], function(){

	Route::resource('store','UserStoreController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/profile/{id}','UserProfileController@show');
