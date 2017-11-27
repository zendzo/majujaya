<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Penjualan;
use App\PenjualanType;

use App\Notifications\SendPenjualanInvoiceSmsNotification;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Penjualan";

        $penjualanType = PenjualanType::all();

        return view('penjualan.index',compact(['page_title','penjualanType']));
    }

    public function pembayaranPenjualan()
    {
        $page_title = "Pembayaran Penjualan";

        if (Auth::user()->role->id == "1") {
            $sales = Penjualan::where('confirmed_by_admin',true)->orderBy('id','DESC')->get();
        }else{
            $sales = Penjualan::where('user_id',Auth::id())->orderBy('id','DESC')->get();
        }

        return view('penjualan.pembayaran_penjualan',compact(['page_title','sales']));
    }

    public function listCompleted()
    {
        $page_title = "Daftar Penjualan Telah Selesai";

        if (Auth::user()->role == "1") {
            $sales = Penjualan::where('completed',true)->orderBy('id','DESC')->get();
        }else{
            $sales = Penjualan::where('user_id',Auth::id())->where('completed',true)->orderBy('id','DESC')->get();
        }

        return view('penjualan.list_revisi_penjualan',compact(['page_title','sales']));
    }

    public function sendSmsInvoce($code)
    {
        $penjualan = Penjualan::where('kode',$code)->first();

        if ($penjualan) {
            try {
            $penjualan->user->notify(new SendPenjualanInvoiceSmsNotification($penjualan));

           return redirect()->back()
                        ->with('message','SMS Penaggihan Telah Dikirim ke : '.$penjualan->user->phone)
                        ->with('status','SMS Telah Dikirim : '.$penjualan->user->fullName())
                        ->with('type','success');
            } catch (\Exception $e) {
                return redirect()->back()
                        ->with('message',$e->getMessage())
                        ->with('status','Something Wrong!')
                        ->with('type','error');
            }
        }else{
            return redirect()->back()
                            ->with('message','Kode Penjualan Tidak Ditemukan')
                            ->with('status','Kode Tidak Terdaftar')
                            ->with('type','erorr');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        $pembelian = new Penjualan;

        $save = $pembelian->create($input);

        if ($save) {
            if (Auth::user()->role == "1") {
                return redirect()->route('admin.penjualan.index')
                            ->with('message','Nota Penjualan Telah Tersimpan')
                            ->with('status','success')
                            ->with('type','success');
            }else{
                return redirect()->route('user.pembayaran.pembelian')
                            ->with('message','Nota Penjualan Telah Tersimpan')
                            ->with('status','success')
                            ->with('type','success');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
