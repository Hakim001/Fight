


@extends('main')

@section('profil')
 
 <link rel="stylesheet" href="{{ asset('/css/profil.css') }}">
 
 <h3>profil : {{ Auth::user()->name }}.</h3>
@endsection






