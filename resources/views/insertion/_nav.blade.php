   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="navbar-header" style="font-style:italic;">
    <a class="navbar-brand" href="{{ route('main') }}">Fight Club Connection</a>
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