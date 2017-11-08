<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Supplier extends Model
{
	use Notifiable;
	
    protected $fillable = ['nama','alamat','phone','npwp','status','keterangan'];

    public function pembelians()
    {
    	return $this->hasMany('App\Pembelian');
    }

    public function penjualans()
    {
    	return $this->hasMany('App\Penjualan');
    }

    public function routeNotificationForSmsGateway()
    {
        return $this->phone;
    }
}
