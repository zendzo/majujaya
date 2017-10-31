<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pembelian;
use DataTables;

class PembelianApiController extends Controller
{
    public function getAll()
    {
    	$orderData = Pembelian::all();

        return DataTables::of($orderData)->make(true);
    }
}
