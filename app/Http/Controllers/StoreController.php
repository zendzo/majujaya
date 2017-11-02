<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\User;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Daftar Toko";

        $stores = Store::all();

        return view('store.index',compact(['page_title','stores']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Toko Baru";

        return view('store.create',compact(['page_title']));
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

        $store = new Store;

        if (Store::where('user_id',$input['user_id'])->first()) {
            return redirect()->back()
                            ->with('message','User Sudah Memiliki Sebuah Toko!')
                            ->with('status','Tidak Dizinkan!')
                            ->with('type','error');
        }

        $save = $store->create($input);

        if ($save) {
            return redirect('admin/store/')->with('message','Data Tersimpan!')->with('status','success')->with('type','success');
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
        $page_title = "Edit Toko";

        $store = Store::findOrFail($id);

        return view('store.edit',compact('store','page_title'));
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

        $store = Store::findOrFail($id);

        $store->update($input);

        return redirect()->route('admin.store.index')
        ->with('message', 'Data Telah Terupdate!')
        ->with('status','success')
        ->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $delete = $store->delete();

        if ($delete) {
            return redirect()->back()
            ->with('message', 'Data Telah Terhapus!')
            ->with('status','success')
            ->with('type','success');
        }
    }
}
