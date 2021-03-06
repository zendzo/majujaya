<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = ['nama','alamat','phone','npwp','status','keterangan'];

    public function pembelians()
    {
    	return $this->hasMany('App\Pembelian');
    }

    public function penjualans()
    {
    	return $this->hasMany('App\Penjualan');
    }
}
