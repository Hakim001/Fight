<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function profils()
	{
		return $this->belongsToMany('App\profil');
	}
	
	
}
