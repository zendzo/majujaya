<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Truck extends Model
{
    protected $fillable = ['truck_type_id','plat','tanggal_inspeksi','pengemudi','status','keterangan'];

    protected $dates = ['tanggal_inspeksi'];

    public function setTanggalInspeksiAttribute($value)
    {
    	$this->attributes['tanggal_inspeksi'] = Carbon::createFromFormat('m/d/Y',$value)->toDateString();	
    }
}
