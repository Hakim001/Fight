<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\library;
use View;
use Validator;
use Redirect;

class librariesController extends Controller
{
    public function getList() {
		
		
		$libraries = App\library::Width('photos')->get();
		return View::make('index')->with('libraries', $libraries);
		
	}
	
	public function getLibrary($id)
	{
		$library = library::width('Photos')->find($id);
		return view::make('library')->with('library', $library);
		
	}
	
	public function getForm() {
		
		return View::make('createlibrary');
	}
	
	public function postCreate() {
		
		$rules = array(
			'name' => 'requred',
			'cover_image' => 'requred|image'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			
			return Redirect::route('create_album_form')->withErrors($validator)->withInput();
		}
		
		$file =Input::file('cover_image');
		$random_name = str_ramdom(8);
		$destinationPath = 'library/';
		$extension = $file->getClientOriginalExtension();
		$filename = $random_name . '_cover.' .$extension;
		$uploadSucess = Input::file('cover_image')->move($destinationPath, $filename);
		
		$library = library::create(array(
		'name' => Input::get('name'),
		'description' => Input::get('description'),
		'cover_image' => $filename,
		));
		
		return Redirect::route('show_album', array('id' => $library->id));
		
	}
	
	public function getDelete($id)
	{
		$library = library::find($id);
		
		$library->delete();
		
		return Redirect::route('index');
	}
}
