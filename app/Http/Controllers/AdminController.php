<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware(['auth']);
    }

    public function index()
    {
    	$page_title = "Halaman utama";

    	return view('admin.home',compact('page_title'));
    }

    public function pegawaiIndex()
    {
    	$page_title = "Daftar Pegawai";

    	return view('pegawai.index',compact('page_title'));
    }
}
