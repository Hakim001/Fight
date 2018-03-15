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
		
				//dd($photo);
		//$image = Image::last()->getMedia()->first()->getpath();
		
		//$images = Storage::get('app/public/avatar_def.jpg');
		//$photo = Storage::
		//$images = App\Image::last()->getMedia()->all();
		
		//dd($image, $images);
	
        return view('image.create_img',compact('images') );
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

        
    
   
		
//	\App\Image::create()
//   ->addMediafromRequest('picture')
//   ->preservingOriginal()
//   ->toMediaCollection('profil')
//   ->newsItem;	
		
		//$photo = User::image();
		//Image::create()
			//->addMediaFromRequest('picture')
			//->preservingOriginal()
			//->toMediaCollection('photo_profil');
		//->addMedia($request->file('picture'))
		
		
		
	//$mediaItems = $newsItem->getMedia();
		
		//dd($mediaItems);
  
		//$OnDisk = $media[0]->getPath();
		 
		
		
		DB::table('users')
          ->where('id', $id)
          ->update(['image' => $request->picture ,'name_image' => $request->name_image, 'description' => $request->description]);
		
		
		//$users = User::all();
		
		//$photos = Image::all();
		//return $path;
		return redirect()->back();
		
		// return view('image.create_img', compact('media','OnDisk','photos'));
	
		
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
