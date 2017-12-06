<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
	public function transaksiIndex()
	{
		return view('laporan.transaksi_index');
	}
}
