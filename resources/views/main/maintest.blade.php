
  
@extends('main')

@section('carrousel')






<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ol>
  
  
 

  <div class="carousel-inner">
    <div class="carousel-caption">
  <h1 class="text-center titre-principal" style="color: green;">Fight Club Connection.</h1>
  <div class="container">
  
   
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
      <option value="judo">Judo</option>
     </optgroup>
      <optgroup label="épée">
      <option value="Escrime">Escrime</option>
      </optgroup>
    </select>
  </div>
  <div>
     <label class="col-xs-2 control-label" for="niveau">Niveau:</label>
     <div class="col-xs-4">
        <select id="niveau" name="niveau" class="form-control">
            <option value="amateur">Amateur</option>
            <option value="professionel">Professionel</option>
            <option value="sparing_partner_pro">Spa-ring partner pro</option>
            <option value="sparing_partner_amateur">Spa-ring partner amateur</option>
        </select> 
      </div>
  </div> 
 </div>   
     
      
      </div>
        

    <div class="row">

        <div class="form-group">
         <label class="col-xs-2 control-label" for="datepicker">Date :</label>
         <div class="col-xs-4">
              <input type="text" id="datetimepicker" class="form-control">
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
               <optgroup label="Monde">
                   <option value="monde">Monde entier</option>
               </optgroup>
               <optgroup label="Europe">
                <option value="Europe">Europe</option>
                <option value="Albanie">Albanie</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Autriche">Autriche</option>
                <option value="Belgique" selected>Belgique</option>
                <option value="Biélorussie">Biélorussie</option>
                <option value="Bulgarie">Bulgarie</option>
                <option value="Croatie">Croatie</option>
                <option value="Danemark">Danemark</option>
                <option value="Espagne">Espagne</option>
				<option value="France">France</option>
                <option value="Finlande">Finlande</option>
                <option value="Grèce">Grèce</option>
                <option value="Italie">Italie</option>
                <option value="Irlande">Irlande</option>
                <option value="Islande">Islande</option>
                <option value="Hongrie">Hongrie</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Pays-bas">Pays-bas</option>
                <option value="Pologhe">Pologne</option>
                <option value="Portugal">Portugal</option>
                
                <option value="Suède">Suède</option>
                <option value="Suisse">Suisse</option>
                <option value="Roumanie">Roumanie</option>
                <option value="Russie">Russie</option>
                <option value="United_Kingdom">United Kingdom</option>
                <option value="Ukraine">Ukraine</option>
                </optgroup>
                
                <optgroup label="Moyen-orient">
                <option value="Moyen-orient">Moyen-orient</option>
                <option value="Arabie_saoudite">Arabie Saoudite</option>
                <option value="Emirats_arabe">Emirat arabe unis</option>
                <option value="Iran">Iran</option>
                <option value="Jordanie">Jordanie</option>
                <option value="Qatar">Qatar</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Syrie">Syrie</option>
                <option value="Turquie">Turquie</option>
                </optgroup>
                
                 <optgroup label="Maghreb">
                  <option value="Maghreb">Maghreb</option>
                  <option value="Algerie">Algerie</option>
                  
                  <option value="Egypte">Egypte</option>
                  <option value="Mali">Mali</option>
                  <option value="Maroc">Maroc</option>
                  <option value="Mauritanie">Mauritanie</option>
                  <option value="Niger">Niger</option>
                  <option value="Soudan">Soudan</option>
                  <option value="Tchad">Tchad</option>
                  <option value="Tunisie">Tunisie</option>
                  
                </optgroup>
                
                <optgroup label="Asie">
                	<option value="Chine">Chine</option>
                	<option value="Corée_sudo">Corée du Sud</option>
                	<option value="Inde">Inde</option>
                	<option value="Indonesie">Indonésie</option>
                	
                	<option value="Japon">Japon</option>
                	<option value="Kazakhstan">Kazakhstan</option>
                	<option value="Malaisie">Malaisie</option>
                	<option value="Mongolie">Mongolie</option>
                	<option value="Phillippines">Phillippines</option>
                	<option value="Thailande">Thailande</option>
                	<option value="Vietnam">Vietnam</option>
                </optgroup>
                <optgroup label="Amérique">
                   
                    <option value="Argentine">Argentine</option>
                    <option value="Bolivie">Bolivie</option>
                    <option value="Bresil">Brésil</option>
                	<option value="Canada">Canada</option>
                	<option value="Chili">Chili</option>
                	<option value="Colombie">Colombie</option>
                	<option value="Cuba">Cuba</option>
                	<option value="Equateur">Equateur</option>
					<option value=Guyana>Guyana</option>
					<option value=Guyanne_francaise>Guyanne française</option>
                	<option value="Mexique">Mexique</option>
                	<option value="Panama">Panama</option>
                	<option value="Paraguay">Paraguay</option>
                	<option value="Perou">Pérou</option>
                	<option value="Porto_Rico">Porto Rico</option>
                	<option value="Suriname">Suriname</option>
                	<option value="Uruguay">Uruguay</option>
                	<option value="USA">USA</option>
                	<option value="Venezuela">Venezuela</option>
                	
                	
                </optgroup>
             </select>
         </div>
           
           <label for="plan" class="control-label col-xs-2">plan :</label>
           <div class="col-xs-4">
           <select name="plan" id="plan" class="form-control">
              <option value="non_paye">non-payé</option>
              <option value="paye">payé</option>
              
              
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
      <div class="col-xs-offset-1 col-xs-3">
      	<a href="" class="btn btn-link">Une recherche avancée</a>
      </div>
    </div>
   </div>
 </div>
</form>
 </div>
	</div>
 
    <div class="item active"> <img alt="" src=" {{ asset('/photo/Aikido.jpg') }}"></div>
    <div class="item"> <img alt="" src=" {{ asset('/photo/Boxe_amateur.jpg') }}"></div>
    <div class="item"> <img alt="" src=" {{ asset('/photo/Boxe_anglaise.jpg') }}"></div>
    <div class="item"> <img alt="" src=" {{ asset('/photo/Escrime.jpg') }}"></div>
  </div>
  <a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

 
</div>

<script src="{{ asset('/jquery.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 

@endsection