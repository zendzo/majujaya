<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Penjualan;
use App\Order;
use App\Sale as Sales;

class TransaksiController extends Controller
{
    public function pembelian()
    {
        $page_title = "Transaksi Pembelian";

        $orders = Pembelian::orderBy('id','DESC')->get();

        return view('transaksi.pembelian',compact(['page_title','orders']));
    }

    public function penjualan()
    {
        $page_title = "Transaksi Penjualan";

        $sales = Penjualan::orderBy('id','DESC')->get();

        return view('transaksi.penjualan',compact(['page_title','sales']));
    }

    public function prosesPembelian($code)
    {
        $page_title = "Detail Nota Transaksi Pembelian";

        $order = Pembelian::where('kode','=',$code)->first();

        $order_items = Order::where('pembelian_id','=',$order->id)->get();

        return view('transaksi.proses_pembelian',compact(['page_title','order','order_items']));
    }

    public function prosesPenjualan($code)
    {
        $page_title = "Daftar Transaksi Penjualan";

        $sale = Penjualan::where('kode','=',$code)->first();

        $sale_items = Sales::where('penjualan_id','=',$sale->id)->get();

        return view('transaksi.proses_penjualan',compact(['page_title','sale','sale_items']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
