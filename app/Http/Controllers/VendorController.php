<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreVendor;
use App\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Daftar Vendor";

        $data = Vendor::paginate(25);

        return view('vendor.index',compact(['page_title','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Vendor";

        return view('vendor.create',compact(['page_title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendor $request)
    {
        $input = $request->all();

        $supplier = new Vendor;

        $supplier->create($input);

        return redirect()->route('admin.vendor.index')
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
        $vendor = Vendor::findOrFail($id);

        $page_title = "Edit Vendor ". $vendor->nama;

        return view('vendor.edit',compact(['vendor','page_title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVendor $request, $id)
    {
        $input = $request->all();

        $supplier = Vendor::findOrFail($id);

        $supplier->update($input);

        return redirect()->route('admin.vendor.index')
                    ->with('message','Data Telah Terupdate!')
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
        Vendor::findOrFail($id)->delete();

        return redirect()->route('admin.vendor.index')
                    ->with('message','Data Telah Terhapus!')
                    ->with('type','success')
                    ->with('status','success');
    }
}
