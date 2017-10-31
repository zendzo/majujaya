<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Daftar Jenis Satuan Products";

        $data = Satuan::paginate(15);

        return view('satuan.index',compact(['page_title','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Jenis Satuan";

        return view('satuan.create',compact(['page_title']));
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

        $product = new Satuan;

        $save = $product->create($input);

        if ($save) {
            return redirect()->route('admin.satuan.index')
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
        $satuan = Satuan::findOrFail($id);

        $page_title = "Edit Jenis Satuan ". $satuan->nama;

        return view('satuan.edit',compact(['satuan','page_title']));
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
        $satuan = Satuan::findOrFail($id);

        $satuan->update($request->all());

        return redirect()->route('admin.satuan.index')
                        ->with('message',"Data $satuan->nama Telah Diupdate!")
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
        $satuan = Satuan::findOrFail($id);

        $delete = $satuan->delete();

        if ($delete) {
            return redirect()->route('admin.satuan.index')
                        ->with('message',"Data $satuan->nama Telah Dihapus!")
                        ->with('status','success')
                        ->with('type','success');
        }
    }
}
