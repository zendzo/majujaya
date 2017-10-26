<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductType;
use App\ProductType;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Daftar Type Products";

        $data = ProductType::paginate(25);

        return view('product-type.index',compact(['page_title','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Type Products";

        return view('product-type.create',compact(['page_title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductType $request)
    {
        $input = $request->all();

        $ProductType = new ProductType;

        $save = $ProductType->create($input);

        if ($save) {
            return redirect()->route('admin.product-type.index')
                            ->with('message','Data '.$input['nama'].' Telah Tersimpan')
                            ->with('status','success')
                            ->with('type','success');
        }
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
        $productType = productType::findOrFail($id);

        $page_title = "Edit Product ". $productType->nama;

        return view('product-type.edit',compact(['productType','page_title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductType $request, $id)
    {
        $productType = ProductType::findOrFail($id);

        $productType->update($request->all());

        return redirect()->route('admin.product-type.index')
                        ->with('message',"Data $productType->nama Telah Diupdate!")
                        ->with('status','success')
                        ->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productType = ProductType::findOrFail($id);

        $delete = $productType->delete();

        if ($delete) {
            return redirect()->route('admin.product-type.index')
                        ->with('message',"Data $productType->nama Telah Dihapus!")
                        ->with('status','success')
                        ->with('type','success');
        }
    }
}
