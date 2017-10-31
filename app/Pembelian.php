<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = ['supplier_id',
							'kode',
							'pembelian_type_id',
							'tanggal_po',
							'tanggal_kirim',
							'gudang_id',
							'vendor_id',
							'keterangan'
						];

	protected $dates = ['tanggal_po','tanggal_kirim'];


	public function setTanggalPoAttribute($value)
	{
		$this->attributes['tanggal_po'] = Carbon::createFromFormat('d/m/Y',$value)->toDateString();
	}

	public function setTanggalKirimAttribute($value)
	{
		$this->attributes['tanggal_kirim'] = Carbon::createFromFormat('d/m/Y',$value)->toDateString();
	}

	public function supplier()
	{
		return $this->belongsTo('App\Supplier');
	}

	public function type()
	{
		return $this->belongsTo('App\PembelianType','pembelian_type_id');
	}

	public function gudang()
	{
		return $this->belongsTo('App\Gudang');
	}

	public function vendor()
	{
		return $this->belongsTo('App\Vendor');
	}
}
