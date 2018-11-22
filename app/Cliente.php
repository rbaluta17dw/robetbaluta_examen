<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	public function hotels()
	{
		return $this->belongsToMany('App\Hotels');
	}
}
