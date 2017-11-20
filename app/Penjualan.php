<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Penjualan extends Model
{
    protected $fillable = [
    	'user_id',
		'kode',
		'penjualan_type_id',
		'tanggal_so',
		'tanggal_kirim',
		'gudang_id',
		// 'vendor_id',
		'keterangan',
		'bayar'
    ];

    protected $dates = ['tanggal_so','tanggal_kirim'];

    public function setTanggalSoAttribute($value)
	{
		$this->attributes['tanggal_so'] = Carbon::createFromFormat('d/m/Y',$value)->toDateString();
	}

	public function setTanggalKirimAttribute($value)
	{
		$this->attributes['tanggal_kirim'] = Carbon::createFromFormat('d/m/Y',$value)->toDateString();
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function type()
	{
		return $this->belongsTo('App\PenjualanType','penjualan_type_id');
	}

	public function gudang()
	{
		return $this->belongsTo('App\Gudang');
	}

	// public function vendor()
	// {
	// 	return $this->belongsTo('App\Vendor');
	// }

	public function sales()
	{
		return $this->hasMany('App\Sale','penjualan_id');
	}
}
