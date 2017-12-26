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
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li> <a href="{{ route('main')}}">Accueil</a> </li>
      <li> <a href="#">Liens</a> </li>
      <li> <a href="#">Témoignages</a> </li>
      <li> <a href="#">Références</a> </li>
    </ul>
    <div class="form-group">
       <div class="nav navbar-nav">
           <li> <a href="{{ route('login')}}">login</a></li>
           <li> <a href=" {{ route('home')}}">register</a></li>
        </div>    
    </div>
    
  </div>
</nav>
  
  <div class="container jumbotron">
   
<form class="form-horizontal" method="POST" action="">
<fieldset class="col-xs-5 ">

<!-- Form Name -->
<legend>Recherche d'un évènement sportif :</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-xs-4 control-label" for="selectbasic">Sport :</label>
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
</div>
    
     <div class="form-group">
         <label class="col-xs-4 control-label" for="datepicker">Date :</label>
         <div class="col-xs-4">
              <input type="text" id="datepicker" class="form-control">
         </div>
     </div>
     <div class="form-group">
         <label class="col-xs-4 control-label" for="pays">Pays :</label>
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
     </div>

</fieldset>
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
        
    