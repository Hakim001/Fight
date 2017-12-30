<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index() {
		
		return view('main1');
	}
	
	public function contact() {
		
		return view('contact.contact');
	}
	
	public function index2() {
		
		return view('main.main');
	}
}
