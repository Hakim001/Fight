<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Fight main Sport</title>
      <link href="{{ asset('/css/app.css') }}"  rel="stylesheet">
      <link href="{{ asset('/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
      
   </head>
    
    <body>
    
    <!-- navigation barre-->
    
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
                                    <li><a href="#">Profil</a></li>
                                       
                                    
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
 
    <!--background du module de recherche-->
  
  <div class="container jumbotron">
   
<form class="form-horizontal" method="POST" action="">
<div class="col-xs-6 ">

<!-- titre module de recherche -->
    <h3 class="text-center">   Recherche d'un combat :</h3>

<!-- 1er ligne recherche -->
<div class="row">

<div class="form-group">
 
  
  <label class="col-xs-2 control-label" for="selectbasic">Sport :</label>
  <div class="col-xs-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
     <optgroup label="Sport de combat">
      <option value="anglaise">Boxe Anglaise</option>
      <option value="thai">Boxe Thai</option>
      <option value="française">Boxe Française</option>
      <option value="lutte">Lutte</option>
      <option value="kicboxing">Kickboxing</option>
      <option value="mma">M.M.A</option>
      <option value="muay thai">Muay Thai</option>
     </optgroup>
     <optgroup label="Art martial">
      <option value"krav maga">Krav Maga</option>
      <option value="aïkido">Aïkido</option>
      <option value="jujitsu">Jujitsu</option>
      <option value="kung-fu">Kung-fu</option>
      <option value="taekwondo">Taekwondo</option>
     </optgroup>
      <optgroup label="épée">
      <option value="escrime">Escrime</option>
      </optgroup>
    </select>
  </div>
  <div>
     <label class="col-xs-2 control-label" for="niveau">Niveau:</label>
     <div class="col-xs-4">
        <select id="niveau" name="niveau" class="form-control">
            <option value="amateur">Amateur</option>
            <option value="professionel">Professionel</option>
            <option value="sparing_partner">spa ring partner</option>
        </select> 
      </div>
  </div> 
 </div>   
     
      
      </div>
        

    <div class="row">

        <div class="form-group">
         <label class="col-xs-2 control-label" for="datepicker">Date :</label>
         <div class="col-xs-4">
              <input type="text" id="datepicker" class="form-control">
         </div>
         <label class="col-xs-2 control-label" for="poids">Poids :</label>
         <div class="col-xs-4">
             <select id="poids" name="poids" class="form-control">
                 <option value="&lt50kg">&LT 50kg</option>
                 <option value="50_53kg">50 - 53KG</option>
                 <option value="53_56kg">53 - 56kg</option>
                 <option value="56_60Kg">56 - 60kg</option>
                 <option value="60_66kg">60 - 66kg</option>
                 <option value="66-69kg">66 - 69kg</option>
                 <option value="69_73kg">69 - 73kg</option>
                 <option value="73_76kg">73 - 76kg</option>
                 <option value="76_79kg">76 - 79kg</option>
                 <option value="79_85kg">79 - 85kg</option>
                 <option value="85_91kg">85 - 91kg</option>
                 <option value="&gt91kg">&gt 91kg</option>
             </select>
         </div>
     </div>
    </div>
     
     <div class="row">
     <div class="form-group">
         <label class="col-xs-2 control-label" for="pays">Pays :</label>
         <div class="col-xs-4">
             <select id="pays" name="pays" class="form-control">
               <optgroup label="monde">
                   <option value="monde">Monde entier</option>
               </optgroup>
               <optgroup label="Europe">
                <option value="Europe">Europe</option>
                <option value="Belgique" selected>Belgique</option>
                <option value="France">France</option>
                <option value="Pays-bas">Pays-bas</option>
                <option value="Espagne">Espagne</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Italie">Italie</option>
                <option value="Irlande">Irlande</option>
                <option value="UK">UK</option>
                <option value="Suisse">Suisse</option>
                </optgroup>
                <optgroup label="Moyen-orient">
                <option value="Moyen-orient">Moyen-orient</option>
                <option value="Russie">Russie</option>
                <option value="Turquie">Turquie</option>
                <option value="Iran">Iran</option>
                <option value="Jordanie">Jordanie</option>
                <option value="Syrie">Syrie</option>
                </optgroup>
                <optgroup label="Maghreb">
                  <option value="Maghreb">Maghreb</option>
                  <option value="Algerie">Algerie</option> 
                  <option value="Maroc">Maroc</option>
                  <option value="Egypte">Egypte</option>
                  <option value="Tunisie">Tunisie</option>
                </optgroup>
             </select>
         </div>
           
           <label for="plan" class="control-label col-xs-2">plan:</label>
           <div class="col-xs-4">
           <select name="plan" id="plan" class="form-control">
              <option value="paye">payé</option>
              <option value="non_paye">non-payé</option>
              
           </select>
        
        
             
           </div>
         </div> 
     </div>

    
    <!-- Button -->
   <div class="row">    
    <div class="form-group">
     
      <div class="col-xs-offset-3 col-xs-4">
    <button id="submit1" name="submit1" class="btn btn-primary">Submit</button>
      </div>
    </div>
   </div>
 </div>
</form>
 </div>
   
    <script src="{{ asset('/js/app.js') }}"></script>
    
    
    <script src="{{ asset('/jquery-ui/jquery-ui.min.js') }}"></script>
  <script>
  $(function() {
    $( "#datepicker").datepicker();
  });
</script>
  </body>
</html>
        
    