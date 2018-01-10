<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function profil(){
		
		$libraries = \App\Library::with('Photos')->get();
        
		return view('profils.profil');
    }
}
