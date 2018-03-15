<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;


class Image extends Model implements hasMedia
{
    use HasMediaTrait; 
	
	
	protected $fillable = [
        'id', 'user_id', 'picture', 'name_image', 'description', 
    ];
	
	
	public static function last()
	{
		return static::all()->last();
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
