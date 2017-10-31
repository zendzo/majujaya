<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $fillable = ['nama','alamat','phone','status','keterangan'];

    public function pembelians()
    {
    	return $this->hasMany('App\Pembelian');
    }

    public function penjualans()
    {
    	return $this->hasMany('App\Penjualan');
    }
}
