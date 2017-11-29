<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Penjualan;

class PembayaranController extends Controller
{
    public function pembelian(Request $request)
    {
    	$input = $request->all();

    	$pembelian = Pembelian::where('id',$input['id'])->where('kode',$input['kode'])->first();

    	$current_pay = $pembelian->bayar;

    	if ($pembelian->orders->sum('total') == 0) {
    		return redirect()->back()
                        ->with('message',"Belum Ada Item Yang Pada Nota!")
                        ->with('status','Something Wrong!')
                        ->with('type','error');
    	}

    	try {

    		if (!is_null($pembelian)) {

    			$add_pay = $input['bayar'] + $current_pay;

    			if ($add_pay > $pembelian->orders->sum('total')) {

    				$kembalian = $add_pay - $pembelian->orders->sum('total');

    				// total bayar = total hutang (luas)
    				$pembelian->bayar = $pembelian->orders->sum('total');

    				$pembelian->save();

    				return redirect()->back()
                        ->with('message',"Nota ".$pembelian->supplier->nama." Telah Dibayar Luas! Kembali : ".$kembalian)
                        ->with('status','success')
                        ->with('type','success');
    			}
    		}else{
    			$pembelian->bayar = $input['bayar'];

    			$pembelian->save();
    		}

    		return redirect()->back()
                        ->with('message',"Nota ".$pembelian->supplier->nama." Telah Dibayar!")
                        ->with('status','success')
                        ->with('type','success');

    	} catch (\Exception $e) {
    		return redirect()->back()
                        ->with('message',$e->getMessage())
                        ->with('status','Something Wrong!')
                        ->with('type','error');
    	}

    }

    public function penjualan(Request $request)
    {
    	$input = $request->all();

    	$penjualan = Penjualan::where('id',$input['id'])->where('kode',$input['kode'])->first();

    	if ($penjualan->sales->sum('total') == 0) {
    		return redirect()->back()
                        ->with('message',"Belum Ada Item Yang Pada Nota!")
                        ->with('status','Tidak Dizinkan Membayar!')
                        ->with('type','error');
    	}

    	$current_pay = $penjualan->bayar;

    	try {

    		if (!is_null($penjualan)) {

    			$add_pay = $input['bayar'] + $current_pay;

    			if ($add_pay > $penjualan->sales->sum('total')) {

    				$kembalian = $add_pay - $penjualan->sales->sum('total');

    				// total bayar = total hutang (luas)
    				$penjualan->bayar = $penjualan->sales->sum('total');

    				$penjualan->save();

    				return redirect()->back()
                        ->with('message',"Nota ".$penjualan->user->fullName()." Telah Dibayar Luas! Kembali : ".$kembalian)
                        ->with('status','success')
                        ->with('type','success');
    			}
    		}else{
    			$penjualan->bayar = $input['bayar'];

    			$penjualan->save();
    		}

    		return redirect()->back()
                        ->with('message',"Nota ".$penjualan->user->fullName()." Telah Dibayar!")
                        ->with('status','success')
                        ->with('type','success');

    	} catch (\Exception $e) {
    		return redirect()->back()
                        ->with('message',$e->getMessage())
                        ->with('status','Something Wrong!')
                        ->with('type','error');
    	}
    }
}
