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

	Route::get('pembelian/send-sms-invoice/{code}',[
		'as'	=>	'invoice.sms.pembelian',
		'uses'	=>	'PembelianController@sendSmsInvoce'
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

	// Route::resource('vendor','VendorController');

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

	Route::get('proses-transaksi-penjualan/{code}',[
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

	// custome sms invoice

	Route::post('/send-custome-penjualan-invoice',[
		'as'	=>	'custome.penjualan.invoice',
		'uses'	=>	'SendCustomeInvoiceController@sendPenjualanInvoice'
	]);

	Route::post('/send-custome-pembelian-invoice',[
		'as'	=>	'custome.pembelian.invoice',
		'uses'	=>	'SendCustomeInvoiceController@sendPembelianInvoice'
	]);

	// Konfirm pembelian by user

	Route::get('/konfirmasi-pembelian',[
		'as'	=> 'konfirmasi.pembelian',
		'uses'	=>	'ConfirmPesananController@index'
	]);

	Route::get('/konfirmasi-pembelian/{kode}',[
		'as'	=>	'konfirmasi.pesanan',
		'uses'	=>	'ConfirmPesananController@update'
	]);

	// inflow dan outflow barang gudang

	Route::get('/gudang/outflow/{id}',[
		'as'	=>	'gudang.outflow',
		'uses'	=>	'WarehouseController@outflow'
	]);

	Route::get('/gudang/inflow/{id}',[
		'as'	=>	'gudang.inflow',
		'uses'	=>	'WarehouseController@inflow'
	]);

	// inflow dan outflow gudang

	Route::get('/gudang/list/outflow',[
		'as'	=>	'gudang.list.outflow',
		'uses'	=>	'WarehouseController@gudangListOutFlow'
	]);

	Route::get('/gudang/list/inflow',[
		'as'	=>	'gudang.list.inflow',
		'uses'	=>	'WarehouseController@gudangListInFlow'
	]);

	//payment

	Route::post('bayar/nota/pembelian',[
		'as'	=> 'bayar.nota.pembelian',
		'uses'	=> 'PembayaranController@pembelian'
	]);

	Route::post('bayar/nota/penjualan',[
		'as'	=> 'bayar.nota.penjualan',
		'uses'	=> 'PembayaranController@penjualan'
	]);

	// laporan

	Route::get('/laporan/transaksi',[
		'as'	=> 'laporan.transaksi.index',
		'uses'	=>	'LaporanController@transaksiIndex'
	]);

	Route::post('/laporan/user',[
		'as'	=> 'laporan.user',
		'uses'	=>	'LaporanController@transaksiUser'
	]);

	Route::post('/laporan/supplier',[
		'as'	=> 'laporan.supplier',
		'uses'	=>	'LaporanController@transaksiSupplier'
	]);

});

Route::group(['prefix'=>'user','as'=>'user.'], function(){

	Route::resource('store','UserStoreController');

	Route::resource('/profile','UserProfileController',['only' => ['show','update']]);

	// Penjualan as/is Pembelian on user

	Route::resource('pembelian','PenjualanController');

	Route::get('pembelian-completed',[
		'as'	=>	'revisi.pembelian.completed',
		'uses'	=>	'PenjualanController@listCompleted'
	]);

	Route::get('pembelian/revisi/{code}',[
		'as'	=>	'revisi.pembelian',
		'uses'	=>	'PenjualanController@edit'
	]);

	Route::get('pembayaran-pembelian',[
		'as'	=>	'pembayaran.pembelian',
		'uses'	=>	'PenjualanController@pembayaranPenjualan'
	]);

	Route::get('proses-transaksi-penujualan/{code}',[
		'as'	=>	'proses.transaksi.penjualan',
		'uses'	=>	'TransaksiController@prosesPenjualan'
	]);

	Route::resource('sales','TransaksiPenjualanController');

	Route::get('transaksi-penjualan-selesai/{code}',[
		'as'	=>	'transaksi.penjualan.selesai',
		'uses'	=>	'TransactionCompletedController@penjualan'
	]);


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
