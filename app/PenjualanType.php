<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanType extends Model
{
    protected $fillable = ['type'];

    public function penjualans()
    {
    	return $this->hasMany('App\Penjualan');
    }
}
