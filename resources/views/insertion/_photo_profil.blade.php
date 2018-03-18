@if(Auth::user()->emoji === NULL)
<h3 id="nomprofil"><span><img src="{{ asset('storage/emoji.jpg')}}" width="40" height="30" > {{ Auth::user()->name }} </span></h3>
@else
<h3 id="nomprofil"><span><img src="{{ asset('storage/emojis/'.Auth::user()->id)}}" width="40" height="30" > {{ Auth::user()->name }} </span></h3>
@endif

<div>
 @if ( Auth::user()->image === NULL )
 <img id="photoprofil" src="{{ asset('storage/default.jpg') }}" width="200" height="120" alt="@lang('profil.alt_img1')"/>
 <br/> 
 @else
 
 <img id="photoprofil" src="{{ asset('storage/avatars/'.Auth::user()->id) }}" width="200" height="120" alt="@lang('profil.alt_img1')"/>
 <br/>
</div>
 @endif
 
 <br/>
<div class="container">
 <div class="row">
 <div class="col-md-6 ">
 
 @if(Auth::user()->name_image === NULL)
 <h4 class="col-md-offset-2 col-md-8">Avatar</h4>
 @else(Auth:user()->name_image !== NULL)
 <h4 class="col-md-offset-2 col-md-8">{{ Auth::user()->name_image }} </h4>
 @endif
 </div>
</div>
 <br/>
 
 @if ( Auth::user()->description === NULL )
 <div class="row">
 <div>
 <p class="col-md-offset-1 col-md-8">@lang('profil.description')</p>
 </div>
 
 @else
 <div class="row">
 <div class="col-md-6">
 <p class="col-md-offset-1 col-md-8">{{  Auth::user()->description }}</p>
 </div>
 </div>
	 


<br/>
<br/>
	</div>
</div>
 
 @endif