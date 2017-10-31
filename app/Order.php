<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id','satuan_id','pembelian_id','jumlah','harga','bayar'];

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

    public function pembelian()
    {
        return $this->belongsTo('App\Pembelian','pembelian_id');
    }
}
