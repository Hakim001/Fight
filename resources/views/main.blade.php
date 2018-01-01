<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Fight Club Connection Sport Combat Art martial Competition</title>
      <link href="{{ asset('/css/app.css') }}"  rel="stylesheet">
      <link href="{{ asset('/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('/datetimepicker/jquery.datetimepicker.css') }}"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
      <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      
      
      
      
      
   </head>
    
    <body>
    
    <!-- navigation barre-->
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="navbar-header" style="font-style:italic;">
    <a class="navbar-brand" href="#">Fight Club Connection</a>
  </div>
    <ul class="nav navbar-nav">
      <li> <a href="{{ route('main')}}">Accueil</a> </li>
      <li> <a href="#">Liens</a> </li>
      <li> <a href="#">Boutique</a> </li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
     
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
    <br/>
    
  </div>
</nav>
<br/>
<br/>

<h1 id="titre" class="text-center titre-principal">Fight Club Connection.</h1>
 
    <!--background du module de recherche-->
  @yield('recherche')
   @yield('contact')
   @yield('carrousel')
   @yield('profil')
    
  
<div class="footer-section">
    <div class="footer">
	<div class="container">
	        <div class="col-md-4 footer-four">
		       <h5>Nous Contacter</h5>
		       <p>Envoie de votre courrier</p>
		         <div class="foot-address">
		          <ul>
                    <li><i class="fa fa-map-marker"></i>Place rouppe 234 1000 Bruxelles </li>
                    <li><i class="fa fa-envelope-o"></i>Fightclubconnection@gmail.com </li>
					  <li><i class="fa fa-phone"></i>+32 (0)2 821 65 87 </li>
                    
                  </ul>
                 </div> 
		    </div>
		   
		    <div class="col-md-3 footer-two">
		       <h5>Fight Club Connection</h5>
		          <ul>
                    <li><a href="#"> A propos de Fight Club Connection.</a> </li>
                    <li><a href="#"> Presse.</a> </li>
                    <li><a href="#"> Condition d'utisation.</a> </li>
                    <li><a href="#"> Informations légales.</a> </li>
                    <li><a href="#"> Protection des données.</a></li>
                  </ul>
                  
		    </div>
		    <div class="col-md-3 footer-three">
		       <h5>Services</h5>
		          <ul>
                    <li><a href="#"> Contact</a> </li>
                    <li><a href="#"> Aide</a> </li>
                    <li><a href="#"> Nos Services</a> </li>
                    <li><a href="#"> Contact Us</a> </li>
                  </ul>
                  
		    </div>
		    <div class="col-md-2 footer-one">
		       <h5>Espace Pro</h5>
		          <ul>
                    <li><a href="#"> Connexion</a> </li>
                    <li><a href="#"> Inscription</a> </li>
                    <li><a href="#"> Aide et informations</a> </li>
                    <li><a href="#"> Contact</a> </li>
                  </ul>
                  
		    </div>
		    
		
		
		
		
		
		<div class="clearfix"></div>
	</div>
</div>

</div>
<div class="footer-bottom">
        <div class="container">
					<div class="row">
						<div class="col-sm-6 ">
							<div class="copyright-text">
								<p>CopyRight © 2017 Digital All Rights Reserved</p>
							</div>
						</div> <!-- End Col -->
						<div class="col-sm-6  ">
						    <div class="copyright-text pull-right">
								<p> <a href="#">Home</a> | <a href="#">Privacy</a> |<a href="#">Terms & Conditions</a> | <a href="#">Refund Policy</a> </p>
							</div>					
													
						</div> <!-- End Col -->
					</div>
				</div>
    </div>
		
    <script src="{{ asset('/js/app.js') }}"></script>
    
    
    <script src="{{ asset('/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
      
    <script>
	  
  
   jQuery('#datetimepicker').datetimepicker();

</script>
  </body>
</html>
        
    