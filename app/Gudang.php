<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $fillable = ['nama','alamat','phone','status','keterangan'];
}
