<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['nama',
						'alamat',
						'npwp',
						'status',
						'keterangan',
						'user_id'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
