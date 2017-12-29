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
         <link  href="{{ asset('/fotorama/src/scss/fotorama.scss') }}" rel="stylesheet">

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
			<style type="text/css">
    body {
      margin: 0;
      overflow: hidden;
    }

    .fotorama__html {
      font-family: sans-serif;
      font-size: 64px;
      font-size: 40vw;
      line-height: 1;
      text-align: center;
      display: table-row;
      text-transform: uppercase;
      letter-spacing: .1em;
    }

    .fotorama__html > div {
      position: relative;
      top: 50%;
      margin-top: -.5em;
    }

    .fotorama .fotorama__dot {
      border-color: #000;
    }

    .fotorama .fotorama__active .fotorama__dot {
      background-color: #000;
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
		</div> <br/>
        
      <div class="fotorama">
      	<img src="fotorama/test/i/okonechnikov/image/1-lo.jpg" width="250" heigth="250"/>
      	<img src="fotorama/test/i/okonechnikov/image/2-lo.jpg" width="250" heigth="250"/>
      	<img src="fotorama/test/i/okonechnikov/image/3-lo.jpg" width="250" heigth="250"/>
      	
      	<img src="fotorama/test/i/okonechnikov/image/4-lo.jpg" width="250" heigth="250"/>
      	<img src="fotorama/test/i/okonechnikov/image/5-lo.jpg" width="250" heigth="250"/>
      </div>  

        
      <script src="{{ asset('/js/app.js') }}"></script>
      <script src="{{ asset('/jquery.min.js') }}"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="../product/fotorama.js"></script>
  
    <script src="{{ asset('/fotorama/src/js/fotorama.js') }}"></script>


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
       
         <script type="text/javascript">
    $(function () {
      $('.fotorama')
          .on('fotorama:ready', function (e, fotorama) {
            fotorama.show({index: 2, time: 0});
          })
          .fotorama();
    })
  </script>
        
        
    </body>
</html>




