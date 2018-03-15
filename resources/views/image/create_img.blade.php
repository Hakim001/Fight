@extends('main')


 

@section('content')

@include('insertion._script_profil')


<h3 id="nomprofil">{{ Auth::user()->name }} </h3>
 @if ( Auth::user()->image === NULL )
 <img id="photoprofil" src="{{asset('storage/default.jpg')}}" width="400" height="320" alt="@lang('profil.alt_img1')"/>
 @else
 
 <img id="photoprofil" src="{{asset('storage/avatars/'. Auth::user()->id)}}" width="400" height="320" alt="@lang('profil.alt_img1')"/>
 @endif
 
 <br/>
 <div class="container">
 <div class="row">
 
 <h4 class="col-md-offset-2 col-md-8">{{ Auth::user()->name_image }} </h4>
 <br/>
 @if ( Auth::user()->description === NULL )
 
 <p class="col-md-offset-2 col-md-8">@lang('profil.description')</p>
 
 @else
 
 <p class="col-md-offset-2 col-md-8">{{  Auth::user()->description }}</p>
 
 @endif
  
 </div>
 	
 </div>
 <br/>
 
 
    

 
<div class="span3 well">
     
      <legend> @lang('profil.titre_profil') </legend>
      
    <form accept-charset="UTF-8"  action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        
        {{csrf_field()}}
        
		<input class="span3" type="file" id="picture" name="picture" required> 
        <br/>
        <label> @lang('profil.label_img')
        <input class="span3" name="name_image" id="name_image" type="text" required>
		</label>
        
        <br/>
        @lang('profil.label_description') :<br/>
        
        <textarea  id="description" name="description" placeholder="@lang('profil.text_descritption')" rows="7" cols="50"></textarea> 
        
        <br/>
        
        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> @lang('auth.submit')</button>
   
     </form>
</div>
                      
               
@endsection