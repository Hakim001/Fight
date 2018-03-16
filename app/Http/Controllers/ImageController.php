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
		
		$path = DB::table('users')
		->where('id', $id)
		->select('image')
		->get();	
		
		
		//Storage::get('app/public/avatar_def.jpg');
		//$photo = Storage::
		//$images = App\Image::last()->getMedia()->all();
		
		//dd($image, $images);
	
        return view('image.create_img', compact('path','contents', 'id') );
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
		
	   $path = $request->file('picture')->storeAs(
    'public/avatars', $request->user()->id
);
 
    $contents = Storage::get('public/avatars/'.$request->user()->id);
		
		$user = Auth::user();
		$user->contents;
		$user->save;
   DB::table('users')
          ->where('id', $id)
          ->update(['image'=>$path, 'name_image' => $request->name_image, 'description' => $request->description]);
		/*if($request->hasFile('picture')){
    		$avatar = $request->file('picture');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
		*/
		
//	\App\Image::create()
//   ->addMediafromRequest('picture')
//   ->preservingOriginal()
//   ->toMediaCollection('profil')
//   ->newsItem;	
		
		
		
		
		
	
		 
		
		
		
		
		
		//$users = User::all();
		
		//$photos = Image::all();
		//return $path;
		//return redirect()->back();
		
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
