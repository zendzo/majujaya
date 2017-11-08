<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pembelian;
use App\Penjualan;

class OpenCompletedTransactionController extends Controller
{
    public function openClosedOrder($code)
    {
    	$pembelian = Pembelian::where('kode',$code)->first();

    	if (!empty($pembelian)) {
    		$pembelian->completed = false;

    		$save = $pembelian->save();

    		if ($pembelian) {
    			return redirect()
    			->back()
    			->with('message',"Nota Pembelian kepada ".$pembelian->supplier->nama." Telah Dibuka Kembali!")
                ->with('type','success')
                ->with('status',"Transaksi $code Dibuka!");
    		}else{
    			return redirect()
    			->back()
    			->with('message',"Nota Pembelian kepada ".$pembelian->supplier->nama." Gagal Dibuka!")
                ->with('type','error')
                ->with('status',"Transaksi $code Gagal Dibuka!");
    		}
    	}
    }

    public function openClosedSale($code)
    {
    	$penjualan = Penjualan::where('kode',$code)->first();

    	if (!empty($penjualan)) {
    		$penjualan->completed = false;

    		$save = $penjualan->save();

    		if ($penjualan) {
    			return redirect()
    			->back()
    			->with('message',"Nota Penjualan kepada ".$penjualan->user->fullName()." Telah Dibuka Kembali!")
                ->with('type','success')
                ->with('status',"Transaksi $code Dibuka!");
    		}else{
    			return redirect()
    			->back()
    			->with('message',"Nota Penjualan kepada ".$penjualan->user->fullName()." Gagal Dibuka!")
                ->with('type','error')
                ->with('status',"Transaksi $code Gagal Dibuka!");
    		}
    	}
    }
}
