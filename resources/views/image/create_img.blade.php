@extends('main')


 

@section('content')

@include('insertion._script_profil')

@include('insertion._photo_profil')


  
 
 <br/>
 
 
    
<div>
<br/>
 
<div class="span3 well">
     <div class="col-md-12">
      <legend> @lang('profil.titre_profil') </legend>
	</div>
      <br/>
      <div class="row">
    <form accept-charset="UTF-8"  action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        
        {{csrf_field()}}
        
        <input  type="file" id="emoji" name="emoji">  <span class="help-block">@lang('profil.help')</span>
        <br/>
		<input  type="file" id="picture" name="picture">  <span class="help-block">@lang('profil.help1')</span>
        <br/>
        <label> @lang('profil.label_img')
        <input class="span3" name="name_image" id="name_image" type="text">
		</label>
        
        <br/>
        @lang('profil.label_description') :<br/>
        
        <textarea  id="description" name="description" placeholder="@lang('profil.text_descritption')" rows="7" cols="50"></textarea> 
        
        <br/>
        
        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> @lang('auth.submit')</button>
   
     </form>
</div>
</div>
</div>
                      
               
@endsection