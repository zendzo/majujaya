<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $fillable = ['nama','symbol','status','keterangan'];

    public function sales()
    {
    	return $this->hasMany('App\Sale');
    }
}
