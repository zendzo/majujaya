<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTruck;
use App\Truck;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Daftar Truck";

        $data = Truck::paginate(15);

        return view('truck.index',compact(['page_title','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Tambah Daftar Truck";

        return view('truck.create',compact(['page_title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTruck $request)
    {
        $input = $request->all();

        $truck = new Truck;

        $save = $truck->create($input);

        if ($save) {
            return redirect()->route('admin.truck.index')
                            ->with('message','Data '.$input['plat'].' Telah Tersimpan')
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
        $truck = Truck::findOrFail($id);

        $page_title = "Edit Truck ". $truck->plat;

        return view('truck.edit',compact(['truck','page_title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTruck $request, $id)
    {
        $truck = Truck::findOrFail($id);

        $truck->update($request->all());

        return redirect()->route('admin.truck.index')
                        ->with('message',"Data $truck->plat Telah Diupdate!")
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
