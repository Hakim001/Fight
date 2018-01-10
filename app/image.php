<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'images';
	
	protected $fillable = array('library_id', 'description', 'image' );
}
