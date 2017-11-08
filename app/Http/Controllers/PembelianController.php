<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePembelian;
use Illuminate\Support\Facades\Input;
use App\Pembelian;


class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Pembelian";

        return view('pembelian.index',compact(['page_title']));
    }

    public function pembayaranPembelian()
    {
        $page_title = "Pembayaran Pembelian";

        $orders = Pembelian::orderBy('id','DESC')->get();

        return view('pembelian.pembayaran_pembelian',compact(['page_title','orders']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        
        $pembelian = new Pembelian;

        $save = $pembelian->create($inputs);

        if ($save) {
            return redirect()->route('admin.pembelian.index')
                            ->with('message','Nota Pembelian Telah Tersimpan')
                            ->with('status','success')
                            ->with('type','success');
        }
    }

    public function listCompleted()
    {
        $page_title = "Daftar Pembelian Telah Selesai";

        $orders = Pembelian::where('completed',true)->orderBy('id','DESC')->get();

        return view('pembelian.list_revisi_pembelian',compact(['page_title','orders']));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
