<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Penjualan;
use App\Pembelian;

class TransactionCompletedController extends Controller
{
    public function pembelian($code)
    {
    	$pembelian = Pembelian::where('kode',$code)->first();

    	if (!empty($pembelian)) {
    		$pembelian->completed = true;

    		$save = $pembelian->save();

    		if ($pembelian) {
    			return redirect()
    			->back()
    			->with('message',"Nota Pembelian kepada ".$pembelian->supplier->nama." Telah Selesai!")
                ->with('type','success')
                ->with('status',"Transaksi $code Selesai!");
    		}else{
    			return redirect()
    			->back()
    			->with('message',"Nota Pembelian kepada ".$pembelian->supplier->nama." Gagal!")
                ->with('type','error')
                ->with('status',"Transaksi $code Gagal!");
    		}
    	}
    }

    public function penjualan($code)
    {
    	$penjualan = Penjualan::where('kode',$code)->first();

    	if (!empty($penjualan)) {
    		$penjualan->completed = true;

    		$save = $penjualan->save();

    		if ($penjualan) {
    			return redirect()
    			->back()
    			->with('message',"Nota Penjualan kepada ".$penjualan->user->fullName()." Telah Selesai!")
                ->with('type','success')
                ->with('status',"Transaksi $code Selesai!");
    		}else{
    			return redirect()
    			->back()
    			->with('message',"Nota Penjualan kepada ".$penjualan->user->fullName()." Gagal!")
                ->with('type','error')
                ->with('status',"Transaksi $code Gagal!");
    		}
    	}
    }
}
