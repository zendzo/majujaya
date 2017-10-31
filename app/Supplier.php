<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
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
