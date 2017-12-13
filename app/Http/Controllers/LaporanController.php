<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Supplier;
use App\Store;

class LaporanController extends Controller
{
	public function transaksiIndex()
	{
		$page_title = "Laporan";

		$users = User::all();

		$vendors = Supplier::all();

		$stores = Store::all();

		return view('laporan.transaksi_index',compact(['page_title','users','vendors','stores']));
	}

	public function transaksiUser(Request $request)
	{
		$input = $request->all();

		$user  = User::where('id',$input['user_id'])->with(['penjualan','penjualan.sales'])->first();

		$page_title = "Laporan Transaksi User";

		return view('laporan.laporan_user',compact(['page_title','user']));
	}

	public function transaksiSupplier(Request $request)
	{
		$input = $request->all();

		$supplier  = Supplier::findOrFail($input['supplier_id'])->with(['pembelians','pembelians.orders'])->first();

		$page_title = "Laporan Transaksi Supplier : $supplier->nama";

		return view('laporan.laporan_supplier',compact(['page_title','supplier']));
	}
}
