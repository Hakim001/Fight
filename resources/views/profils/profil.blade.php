


@extends('main')

@section('content')

@include('insertion._script_profil')
 
@include('insertion._photo_profil') 
 
 
 <div class="row">
 
   <div class="col-md-3">
	 <a href="{{ route('image.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-picture"></span>@lang('profil.img_btn') </a>
   </div> 
	 <div class="col-md-3">
	 	<a href="{{ route('info.index') }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> @lang('profil.info_pers') </a>
	 </div>
	 
</div>
</div>
<br/>
 @endsection
 
 
  

 
 
 
  






