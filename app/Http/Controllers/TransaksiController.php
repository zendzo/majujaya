<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function pembelian()
    {
        $page_title = "Transaksi Pembelian";

        return view('transaksi.pembelian',compact(['page_title']));
    }

    public function penjualan()
    {
        $page_title = "Transaksi Penjualan";

        return view('transaksi.penjualan',compact(['page_title']));
    }

    public function revisiPembelian()
    {
        $page_title = "Daftar Transaksi Pembelian";

        return view('transaksi.revisi_pembelian',compact(['page_title']));
    }

    public function revisiPenjualan()
    {
        $page_title = "Daftar Transaksi Penjualan";

        return view('transaksi.revisi_penjualan',compact(['page_title']));
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
