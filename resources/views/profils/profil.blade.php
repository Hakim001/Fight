<!DOCTYPE html>

<html>
    <head>
        <meta charset=utf-8>
        <title>Profil Fight Club Connection</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/app.css') }}"  rel="stylesheet">
        <link href="{{ asset('/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
        <!-- Magnific Popup core CSS file -->
         <link rel="stylesheet" href="{{ asset('magnific-popup/dist/magnific-popup.css') }}">

        <style>
			#open-popup {padding:20px}
         
			.white-popup {
         position: relative;
         background: #FFF;
         padding: 40px;
         width: auto;
         max-width: 200px;
         margin: 20px auto;
         text-align: center;
               }

		</style>
    
    </head>
    <body>
         <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li> <a href="{{ route('main')}}">Accueil</a> </li>
      <li> <a href="#">Liens</a> </li>
      <li> <a href="#">Livre d'or</a> </li>
     
    </ul>
    <div class="form-group">
       <div class="nav navbar-nav pull-right">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href=" {{ route('profil') }}">Your profil</a></li>
                                       
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
           
        </div>    
    </div>
    
  </div>
</nav>
        
        <h1 class="text-center">Profil de : {{ Auth::user()->username }}</h1>
        
    <button id="open-popup">Open popup</button>

<div id="my-popup" class="mfp-hide white-popup">
  Inline popup
</div>

        
      <script src="{{ asset('/js/app.js') }}"></script>
      <script src="{{ asset('/jquery.min.js') }}"></script>
    
    
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
     <script src="{{ asset('/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
     
       
      
       
<script>
	$('#open-popup').magnificPopup({
    items: [
      {
        src: 'http://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Peter_%26_Paul_fortress_in_SPB_03.jpg/800px-Peter_%26_Paul_fortress_in_SPB_03.jpg',
        title: 'Peter & Paul fortress in SPB'
      },
      {
        src: 'https://vimeo.com/123123',
        type: 'iframe' // this overrides default type
      },
      {
        src: $('<div class="white-popup">Dynamically created element</div>'), // Dynamically created element
        type: 'inline'
      },
      {
        src: '<div class="white-popup">Popup from HTML string</div>', // HTML string
        type: 'inline'
      },
      {
        src: '#my-popup', // CSS selector of an element on page that should be used as a popup
        type: 'inline'
      }
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
	</script>
        
        
        
    </body>
</html>




