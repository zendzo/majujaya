<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['product_id','satuan_id','penjualan_id','jumlah','harga'];

    public function getTotalAttribute()
    {
    	return $this->attributes['harga'] * $this->attributes['jumlah'];
    }

    public function product()
    {
    	return $this->belongsTo('App\Product','product_id');
    }

    public function satuan()
    {
    	return $this->belongsTo('App\Satuan','satuan_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
