<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\library;

class profilController extends Controller
{
    public function profil(){
		
		$libraries = library::with('Photos')->get();
        
		return view('profils.profil');
    }
}
