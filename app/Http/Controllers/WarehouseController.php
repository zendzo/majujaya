<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Daftar Gudang";

        $data = Gudang::paginate(25);

        return view('warehouse.index',compact(['page_title','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Daftar Truck";

        return view('warehouse.create',compact(['page_title']));
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

        $gudang = new Gudang;

        $gudang->create($input);

        return redirect()->route('admin.warehouse.index')
                    ->with('message','Data Telah Tersimpan!')
                    ->with('type','success')
                    ->with('status','success');
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
        $gudang = Gudang::findOrFail($id);

        $page_title = "Edit Gudang ". $gudang->nama;

        return view('warehouse.edit',compact(['gudang','page_title']));
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
        $input = $request->all();

        $gudang = Gudang::findOrFail($id);

        $gudang->update($input);

        return redirect()->route('admin.warehouse.index')
                    ->with('message',"Data $gudang->nama Telah Diupdate")
                    ->with('type','success')
                    ->with('status','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gudang::findOrFail($id)->delete();

        return redirect()->route('admin.warehouse.index')
                    ->with('message','Data Telah Terhapus!')
                    ->with('type','success')
                    ->with('status','success');
    }
}
