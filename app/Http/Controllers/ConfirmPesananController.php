<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Penjualan;
use App\Notifications\ConfirmedPesananSmsNotification;

class ConfirmPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Pembayaran Penjualan";

        $sales = Penjualan::where('confirmed_by_admin',false)->where('user_id','!=',1)->orderBy('id','DESC')->get();

        return view('confirm_penjualan.index',compact(['page_title','sales']));
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
        try {
            $penjualan = Penjualan::findOrFail($id);

            $penjualan->confirmed_by_admin = true;

            $penjualan->user->notify(new ConfirmedPesananSmsNotification($penjualan));

            $penjualan->save();

            return redirect()->route('admin.pembayaran.penjualan')
                            ->with('message','Pesanan Telah Terkonfirmasi & SMS Terkirim!')
                            ->with('type','success')
                            ->with('status','success');
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('message',$e->getMessage())
                            ->with('type','error')
                            ->with('status','Error');
        }
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
