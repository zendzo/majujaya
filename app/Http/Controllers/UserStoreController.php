<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Store;

class UserStoreController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Data Toko ".Auth::user()->fullName();

        $stores = Auth::user()->store()->get();

        return view('user_store.index',compact(['page_title','stores']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Toko Baru";

        return view('user_store.create',compact(['page_title']));
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

        $save = $store->create($input);

        if ($save) {
            return redirect()->route('user.store.index')
                            ->with('message','Data Tersimpan!')
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
        $page_title = "Edit Toko";
        
        $store = Store::findOrFail($id);

        return view('user_store.edit',compact('store','page_title'));
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

        return redirect()->route('user.store.index')
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
    public function destroy($id)
    {
        //
    }
}
