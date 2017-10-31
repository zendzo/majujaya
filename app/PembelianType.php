<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianType extends Model
{
    protected $fillable = ['type'];

    public function pembelians()
    {
    	return $this->hasMany('App\Pembelian');
    }
}
