<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSupplier;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Daftar Supplier";

        $data = Supplier::paginate(25);

        return view('supplier.index',compact(['page_title','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Supplier";

        return view('supplier.create',compact(['page_title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplier $request)
    {
        $input = $request->all();

        $supplier = new Supplier;

        $supplier->create($input);

        return redirect()->route('admin.supplier.index')
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
        $supplier = Supplier::findOrFail($id);

        $page_title = "Edit Supplier ". $supplier->nama;

        return view('supplier.edit',compact(['supplier','page_title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSupplier $request, $id)
    {
        $input = $request->all();

        $supplier = Supplier::findOrFail($id);

        $supplier->update($input);

        return redirect()->route('admin.supplier.index')
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
        Supplier::findOrFail($id)->delete();

        return redirect()->route('admin.supplier.index')
                    ->with('message','Data Telah Terhapus!')
                    ->with('type','success')
                    ->with('status','success');
    }
}
