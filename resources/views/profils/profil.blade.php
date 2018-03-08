


@extends('main')

@section('content')

@include('insertion._script_profil')
 
 
 
 <h3>profil : {{ Auth::user()->name }}</h3>
 
 <a href="{{ route('image.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-picture"></span>@lang('profil.img_btn') </a>
 
 @endsection
 
 
  

 
 
 
  






