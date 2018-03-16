


@extends('main')

@section('content')

@include('insertion._script_profil')
 
@include('insertion._photo_profil') 
 
 
 <div class="row">
 
 <div class="col-md-4">
	 <a href="{{ route('image.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-picture"></span>@lang('profil.img_btn') </a>
	 </div> 
</div>
</div>
<br/>
 @endsection
 
 
  

 
 
 
  






