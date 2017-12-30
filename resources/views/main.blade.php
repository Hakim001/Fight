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
      <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
      
      
   </head>
    
    <body>
    
    <!-- navigation barre-->
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
    
  </div>
</nav>

<h1 class="text-center titre-principal" style="color: navy;">Fight Club Connection.</h1>
 
    <!--background du module de recherche-->
  @yield('recherche')
   @yield('contact')
    
    <footer id="footer">

    <!-- Start Footer-Top -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 logo-footer">
            <img src="img/logo-footer.png" alt="" class="img-responsive">
          </div>
          <div class="col-md-4 widget widget-about">
            <h5 class="title">
              About Us
            </h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Etiam sit amet lectus quis est congue mollis.</p>
          </div>
          <div class="col-md-4 widget widget-news">
            <h5 class="title">
              Latest News
            </h5>
            <ul class="custom-list">
              <li><a href="#">Lorem ipsum dolor</a></li>
              <li><a href="#">Proin nibh augue suscipit scelerisque</a></li>
              <li><a href="#">Etiam pellentesque aliquet tellus</a></li>
            </ul>
          </div>
          <div class="col-md-4 widget widget-newsletter">
            <h5 class="title">
              Newsletter
            </h5>
            <form action="#" class="default-form">
              <input type="text" placeholder="Your email">
              <button class="btn btn-transparent pull-right">Sign Up</button>
            </form>
            <div class="social">
              <h5 class="title pull-left">
                Stay in touch
              </h5>
              <ul class="custom-list list-inline pull-right">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer-Top -->

    <!-- Start Footer-Copyrights -->
    <div class="footer-copyrights">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class=text-center>Copyright 2017 © Fight Club Connection. All rights reserved. Powered by S.H</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer-Copyrights -->

  </footer>
   
    <script src="{{ asset('/js/app.js') }}"></script>
    
    
    <script src="{{ asset('/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
  <script>
  
   jQuery('#datetimepicker').datetimepicker();

</script>
  </body>
</html>
        
    