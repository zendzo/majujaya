<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama','product_type_id','kode','deskripsi','status','keterangan'];
}
