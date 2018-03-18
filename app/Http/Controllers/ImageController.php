<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ImageRequest;

use Auth;
 use DB;
use Illuminate\Support\Facades\Storage;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class ImageController extends Controller
{
	
	
    /**
     * Create a new ImageController instance.
     *
     * @param  \App\Repositories\ImageRepository $repository
     */
   
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$id = Auth::user()->id;
		
		
        return view('image.create_img' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
	    $photo = \App\Image::find($id);
		
		$image = DB::table('users')
          ->where('id', $id)
		  ->select('image')
		  ->get();
		
		$name_image = DB::table('users')
          ->where('id', $id)
		  ->select('name_image')
		  ->get();
		//dd($name_image);
		$descriptione = DB::table('users')
          ->where('id', $id)
		  ->select('description')
		  ->get();
		
		$emojis = DB::table('users')
		->select('emoji')
		->get();
		
	if($request->file('picture') !== NULL)
	{
		
	//$contents = Storage::get('public/avatars/'.$request->user()->id);
	   
		 $path = $request->file('picture')->storeAs(
    'public/avatars/', $request->user()->id);
			
			DB::table('users')
          ->where('id', $id)
		  ->update(['image' => $path]);
		
		$user = Auth::user();
	    $user->path;
	    $user->save;
		
	}
		
	if ($request->name_image === NULL)
	{
		if($name_image !== NULL)
		{
			$titre = Auth::user()->name_image;
		
		}
		
		else
		{
			$titre = 'Avatar';
		}
		DB::table('users')
          ->where('id', $id)
		  ->update(['name_image' => $titre]);
		
	}
		
	elseif ($request->name_image !== NULL)
	{
	  $titre = $request->name_image;
		
		DB::table('users')
          ->where('id', $id)
		  ->update(['name_image' => $titre]);
		
	}
	
    if ($request->description === NULL)	
	{
		if($descriptione !== NULL)
		{
		 $description = Auth::user()->description;
			
			DB::table('users')
          ->where('id', $id)
		  ->update(['description' => $description]);
		}
		
	}
	elseif ($request->description !== NULL)
	{
		$description = $request->description;
		DB::table('users')
          ->where('id', $id)
		  ->update(['description' => $description]);
	}
	
	if ($request->file('emoji') !== NULL)
	{
		$path = $request->file('emoji')->storeAs(
    'public/emojis/', $request->user()->id);
		
		DB::table('users')
			->Where('id', $id)
			->update(['emoji' => $path]);
		
		$user = Auth::user();
	    $user->path;
	    $user->save;
	}
		
		
   /*DB::table('users')
          ->where('id', $id)
          ->update(['name_image' => $titre, 'description' => $description]);
		
		/*if($request->hasFile('picture')){
    		$avatar = $request->file('picture');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
		*/
		//save();
		
		return redirect()->route('profil');
	
		
	}
	
		
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
