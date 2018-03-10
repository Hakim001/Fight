<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ImageRequest;

use User;

use Auth;

use App\Image;
 
use DB;

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
        return view('image.create_img');
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
		
		//dd($request);
		
			$image = Image::create()
			->addMedia($request->file('picture'))
			->preservingOriginal()
			->toMediaCollection();
		
		//dd($image);
		
		
		DB::table('users')
            ->where('id', $id)
            ->update(array('image'=> $image, 'name_image' => $request->name_image, 'description' => $request->description));
		
		
		//$newsItem = Image::find(1);
		
		//$newsItem->addMedia($request->file('picture'))->toMediaCollection('picture');
		
		return redirect()->back();
	
		
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
