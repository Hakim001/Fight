<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Fight main Sport</title>
      <link href="{{ asset('/css/app.css') }}"  rel="stylesheet">
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
   
<form class="form-horizontal ">
<fieldset class="col-xs-5 ">

<!-- Form Name -->
<legend>Recherche d'un évènement sportif :</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Sport</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="anglaise">Boxe Anglaise</option>
      <option value="thai">Boxe Thai</option>
      <option value="française">Boxe Française</option>
      <option value="lutte">Lutte</option>
      <option value"krav maga">Krav Maga</option>
      <option value="aïkido">Aïkido</option>
      <option value="jujitsu">Jujitsu</option>
      <option value="mma">M.M.A</option>
      <option value="muay thai">Muay Thai</option>
      <option value="kicboxing">Kickboxing</option>
      <option value="kung-fu">Kung-fu</option>
      <option value="escrime">Escrime</option>
      <option value="taekwondo">Taekwondo</option>
    </select>
  </div>
</div>
    
     <div>
    

         Date <input type="text" id="datepicker">




     </div>

</fieldset>
</form>
 </div>
   
    <script src="{{ asset('/js/app.js') }}"></script>
    
    <script>
  $(function() {
    $( "#datepicker").datepicker();
  });
</script>
  </body>
</html>
        
    