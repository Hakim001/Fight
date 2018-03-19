<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $table = 'profils';
	
    protected $fillable = [
        'taille', 'poids', 'telephone', 'adresse', 'ville','pays', 'sport',
    ];
	
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function sports()
	{
		return $this->belongsToMany('App\Sport');
	}
	
	
}
