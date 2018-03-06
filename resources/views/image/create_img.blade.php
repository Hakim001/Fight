@extends('main')




@section('content')

@include('insertion._script_profil')

<h3>profil : {{ Auth::user()->name }}</h3>

 
<div class="span3 well">
     
      <legend> @lang('profil.titre_profil') </legend>
      
    <form accept-charset="UTF-8"  action="{{ route('image.store') }}" method="post">
        
        {{csrf_field()}}
        
		<input class="span3" type="file" id="image" name="image" required> 
        <br/>
        <label> @lang('profil.label_img')
        <input class="span3" name="name_image" id="name_image" type="text" required>
		</label>
        
        <br/>
        @lang('profil.label_description') :<br/>
        
        <textarea  id="description" name="description" placeholder="@lang('profil.text_descritption')" rows="7" cols="50"></textarea> 
        
        <br/>
        
        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
   
     </form>
</div>
                      
               
@endsection