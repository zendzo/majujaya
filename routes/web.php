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

	// pembelian

	Route::resource('pembelian','PembelianController');

	Route::get('pembelian-completed',[
		'as'	=>	'revisi.pembelian.completed',
		'uses'	=>	'PembelianController@listCompleted'
	]);

	Route::get('pembelian/revisi/{code}',[
		'as'	=>	'revisi.pembelian',
		'uses'	=>	'PembelianController@edit'
	]);

	// penjualan

	Route::resource('penjualan','PenjualanController');

	Route::get('penjualan-completed',[
		'as'	=>	'revisi.penjualan.completed',
		'uses'	=>	'PenjualanController@listCompleted'
	]);

	Route::get('penjualan/revisi/{code}',[
		'as'	=>	'revisi.penjualan',
		'uses'	=>	'PenjualanController@edit'
	]);

	// send-sms-invoice
	Route::get('penjualan/send-sms-invoice/{code}',[
		'as'	=>	'invoice.sms.penjualan',
		'uses'	=>	'PenjualanController@sendSmsInvoce'
	]);

	// open-closed-transatction

	Route::get('pembelian/open/{code}',[
		'as'	=>	'pembelian.open',
		'uses'	=>	'OpenCompletedTransactionController@openClosedOrder'
	]);

	Route::get('penjualan/open/{code}',[
		'as'	=>	'penjualan.open',
		'uses'	=>	'OpenCompletedTransactionController@openClosedSale'
	]);	

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

	// transaksi-selesai

	Route::get('transaksi-pembelian-selesai/{code}',[
		'as'	=>	'transaksi.pembelian.selesai',
		'uses'	=>	'TransactionCompletedController@pembelian'
	]);

	Route::get('transaksi-penjualan-selesai/{code}',[
		'as'	=>	'transaksi.penjualan.selesai',
		'uses'	=>	'TransactionCompletedController@penjualan'
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

Route::get('test/sms', function(){
	
	$user = App\User::findOrFail(2);

	$user->notify(new App\Notifications\TestSmsNotification);
});
