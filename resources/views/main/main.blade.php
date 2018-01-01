
  
@extends('main')

@section('carrousel')


 <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
 <link rel="stylesheet" href="{{ asset('/css/carrousel.css') }}">


      <!--div du carousel complet-->

<div id="carousel" class="carousel slide  hidden-sm hidden-xs" data-ride="carousel">
 
  
  <!-- indication rond en bas des images du caroussel-->
  
   <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
    <li data-target="#carousel" data-slide-to="5"></li>
    <li data-target="#carousel" data-slide-to="6"></li>
    <li data-target="#carousel" data-slide-to="7"></li>
    <li data-target="#carousel" data-slide-to="8"></li>
    <li data-target="#carousel" data-slide-to="9"></li>
    <li data-target="#carousel" data-slide-to="10"></li>
    <li data-target="#carousel" data-slide-to="11"></li>
    <li data-target="#carousel" data-slide-to="12"></li>
    <li data-target="#carousel" data-slide-to="13"></li>
    <li data-target="#carousel" data-slide-to="14"></li>
    <li data-target="#carousel" data-slide-to="15"></li>
    <li data-target="#carousel" data-slide-to="16"></li>
    <li data-target="#carousel" data-slide-to="17"></li>
    <li data-target="#carousel" data-slide-to="18"></li>
    
  </ol>
  
  
 
   
   <!-- intérieur du caroussel -->
   
   <div class="carousel-inner">
    
    
    <!-- écriture du text de la recherche et le titre du caroussel -->
    
    <div class="carousel-caption">
    
     <!-- écriture du titre recherche dans le caroussel--> 
    
    <h1 class="text-center titre-principal" style="color: green;">Fight Club Connection.</h1>
  
  <!-- Container du formulaire de recherche dans le carrousel-->
  
  <div class="container">
  
   
<form id="main-formulaire" class="form-horizontal" method="POST" action="">
 <div class="col-md-12">

     <!-- titre module de recherche dans caroussel -->
    <h3 class="text-center">   Recherche d'un combat :</h3>

        <!-- 1er ligne de recherche -->
       
        <div class="row">

      <div class="form-group">
 
        <!--1er ligne 1er Recherche sport dans caroussel-->
        
        <label class="col-md-1 control-label" for="sport">Sport :</label>
         
         <div class="col-md-2">
         
          <select id="sport" name="sport" class="form-control">
         
             <optgroup label="Sport de combat">
           <option value="anglaise">Boxe Anglaise</option>
           <option value="thai">Boxe Thai</option>
           <option value="française">Boxe Française</option>
           <option value="catch">Catch</option>
           <option value="lutte">Lutte</option>
           <option value="kicboxing">Kickboxing</option>
           <option value="mma">M.M.A</option>
           <option value="muay thai">Muay Thai</option>
         </optgroup>
         
         
             <optgroup label="Art martial">
           <option value"krav maga">Krav Maga</option>
           <option value="aïkido">Aïkido</option>
           <option value="jujitsu">Jujitsu</option>
           <option value="karate">Karate</option>
           <option value="kung-fu">Kung-fu</option>
           <option value="taekwondo">Taekwondo</option>
           <option value="judo">Judo</option>
         </optgroup>
      
             <optgroup label="épée">
           <option value="Escrime">Escrime</option>
         </optgroup>
      
             <optgroup label="Bonus">
      	   <option value="tennis">Tennis</option>
      	   <option value="squash">Squash</option>
      	   <option value="badminton">Badminton</option>
      	   <option value="golf">Golf</option>
         </optgroup>
       
          </select>
  
        </div>
        
        <!-- 1er ligne et 2eme recherche niveau -->
        
         <div>
          
          
          <label class="col-md-1 control-label" for="niveau">Niveau :</label>
           
           <div class="col-md-2">
             
               <select id="niveau" name="niveau" class="form-control">
                <option value="amateur">Amateur</option>
                <option value="professionel">Professionel</option>
                <option value="sparing_partner_pro">Spa-ring partner pro</option>
                <option value="sparing_partner_amateur">Spa-ring partner amateur</option>
               </select> 
           
            </div>
      
          </div>
  
            <!--1er ligne et 3eme Recherche par Age -->
            
 	         <div>
  	           
  	            <label class="col-md-1 control-label" for="age">Age :</label>
  	             <div class="col-md-2">
  		           <select id="age" name="age" class="form-control">
  			     <option value="12">12</option>
  			     <option value="13">13</option>
  			     <option value="14">14</option>
  			     <option value="15">15</option>
  			     <option value="16">16</option>
  			     <option value="17">17</option>
  			     <option value="18">18</option>
  			     <option value="19">19</option>
  			     <option value="20" selected>20</option>
  			     <option value="21">21</option>
  			     <option value="22">22</option>
  			     <option value="23">23</option>
  			     <option value="24">24</option>
  			     <option value="25">25</option>
  			     <option value="26">26</option>
  			     <option value="27">27</option>
  			     <option value="28">28</option>
  			     <option value="29">29</option>
  			     <option value="30">30</option>
  			     <option value="31">31</option>
  			     <option value="32">32</option>
  			     <option value="33">33</option>
  			     <option value="34">34</option>
  			     <option value="35">35</option>
  			     <option value="36">36</option>
  			     <option value="37">37</option>
  			     <option value="38">38</option>
  			     <option value="39">39</option>
  			     <option value="40">40</option>
  			     <option value="41">41</option>
  			     <option value="42">42</option>
  			     <option value="43">43</option>
  			     <option value="44">44</option>
  			     <option value="45">45</option>
  			     <option value="46">46</option>
  			     <option value="47">47</option>
  			     <option value="48">48</option>
  			     <option value="49">49</option>
  			     <option value="59">50</option>
  			     <option value="51">51</option>
  			     <option value="52">52</option>
  			     <option value="53">53</option>
  			     <option value="54">54</option>
  			     <option value="55">55</option>
  			     <option value="56">56</option>
  			     <option value="57">57</option>
  			     <option value="58">58</option>
  			     <option value="59">59</option>
  			     <option value="60">60</option>
  			     <option value="61">61</option>
  			     <option value="62">62</option>
  			     <option value="63">63</option>
  			     <option value="64">64</option>
  			     <option value="65">65</option>
  			     <option value="66">66</option>
  			     <option value="67">67</option>
  			     <option value="68">68</option>
  			     <option value="69">69</option>
  			     <option value="70">70</option>
  			     <option value="71">71</option>
  			     <option value="72">72</option>
  			     <option value="73">73</option>
  			     <option value="74">74</option>
  			     <option value="75">75</option>
  			 </select>
  	             </div>
             </div> 
            
            <!-- fin form-gourp 1er ligne -->
            
            </div>   
     
           <!-- fin du row nécessaire pour un bonne alignement -->
        </div>
       
        
       <!--2eme ligne de recherche principal-->
       
        <div class="row">

         <div class="form-group">
          
          <!--2eme ligne et 1er Recherche par date -->
          
           <label class="col-md-1 control-label" for="datepicker">Date :</label>
              <div class="col-md-2">
                <input type="text" id="datetimepicker" class="form-control">
              </div>
         
         
            <!-- 2eme ligne et 2eme Recherche par poids -->
            
               <label class="col-md-1 control-label" for="poids">Poids :</label>
                <div class="col-md-2">
                  <select id="poids" name="poids" class="form-control">
                     <option value="&lt50kg">&LT 50kg</option>
                     <option value="50_53kg">50 - 53KG</option>
                     <option value="53_56kg">53 - 56kg</option>
                     <option value="56_60Kg">56 - 60kg</option>
                     <option value="60_66kg">60 - 66kg</option>
                     <option value="66-69kg">66 - 69kg</option>
                     <option value="69_73kg">69 - 73kg</option>
                     <option value="73_76kg">73 - 76kg</option>
                     <option value="76_79kg selected">76 - 79kg</option>
                     <option value="79_85kg">79 - 85kg</option>
                     <option value="85_91kg">85 - 91kg</option>
                     <option value="&gt91kg">&gt 91kg</option>
                   </select>
                 </div>
         
              
              <!-- 2eme ligne et 3eme Recherche par Sexe -->
              
               <label class="col-md-1 control-label" for="sexe">Sexe :</label>
                 <div class="col-md-2">
                   <select id="sexe" name="sexe" class="form-control">
              	      <option value="M">Homme</option>
              	      <option value="F">Femme</option>
                   </select>
		         </div>
		         
		      <!-- fin du form-group -->   
		  </div>
		  
		  
		     <!-- fin du row nécessaire pour un bonne alignement-->
	   </div>
       
       
       <!--3eme ligne de recherche principal--> 
       
        <div class="row">
        
        <div class="form-group">
          
          <!--3eme ligne et 1er Recherche par Pays -->
          
           <label class="col-md-1 control-label" for="pays">Pays :</label>
             
             <div class="col-md-2">
             
               <select id="pays" name="pays" class="form-control">
                  <optgroup label="Monde" style="color:red;">
                     <option value="monde">Monde entier</option>
                  </optgroup>
                  
                  <optgroup label="les plus populaire" style="color:blue;">
                     <option value="Allemagne">Allemagne</option>
                     <option value="Belgique" selected>Belgique</option>
                     <option value="Canada">Canada</option>
                     <option value="Espagne">Espagne</option>
                     <option value="France">France</option>
                     <option value="Luxembourg">Luxembourg</option>
                     <option value="Pays-bas">Pays-bas</option>
                     <option value="Suisse">Suisse</option>
                     <option value="United_Kingdom">United Kingdom</option>
                     <option value="USA">USA</option>
               	   </optgroup>
               	   
                   <optgroup label="Europe"style="color:orange;">
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
                
                  <optgroup label="Moyen-orient"style="color:grey;">
                     <option value="Moyen-orient">Moyen-orient</option>
                     <option value="Arabie_saoudite">Arabie Saoudite</option>
                     <option value="Emirats_arabe">Emirat arabe unis</option>
                     <option value="Irak">Irak</option>
                     <option value="Iran">Iran</option>
                     <option value="Jordanie">Jordanie</option>
                     <option value="Qatar">Qatar</option>
                     <option value="Pakistan">Pakistan</option>
                     <option value="Syrie">Syrie</option>
                     <option value="Turquie">Turquie</option>
                  </optgroup>
                
                  <optgroup label="Maghreb" style="color:black;">
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
                
                   <optgroup label="Asie" style="color:green;">
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
                
                  
                  <optgroup label="Amérique" style="color:blue;">
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
           
           
             <!--3eme ligne et 2eme Recherche par plan -->
           
            <label for="plan" class="control-label col-md-1">plan :</label>
              <div class="col-md-2">
                <select name="plan" id="plan" class="form-control">
                   <option value="non_paye">non-payé</option>
                   <option value="paye">payé</option>
                </select>
               </div>
            
            
            <!--3eme ligne et 3eme recherche par taille -->
            
           <label for="taille" class="control-label col-md-1">taille :</label>
              <div class="col-md-2">
                 <select name="taille" id="taille" class="form-control">
           	        <option value="&lt 1.30">&lt 1,30</option>
           		    <option value="1.30">1,30</option>
           		    <option value="1.31">1,31</option>
           		    <option value="1.32">1,32</option>
           		    <option value="1.33">1,33</option>
           		    <option value="1.34">1,34</option>
           		    <option value="1.35">1,35</option>
           		    <option value="1.36">1,36</option>
           		    <option value="1.37">1,37</option>
           		    <option value="1.38">1,38</option>
           		    <option value="1.39">1,39</option>
           		    <option value="1.40">1,40</option>
           		    <option value="1.41">1,41</option>
           		    <option value="1.42">1,42</option>
           		    <option value="1.43">1,43</option>
           		    <option value="1.44">1,44</option>
           		    <option value="1.45">1,45</option>
           		    <option value="1.46">1,46</option>
           		    <option value="1.47">1,47</option>
           		    <option value="1.48">1,48</option>
           		    <option value="1.49">1,49</option>
           		    <option value="1.50">1,50</option>
           		    <option value="1.51">1,51</option>
           		    <option value="1.52">1,52</option>
           		    <option value="1.53">1,53</option>
           		    <option value="1.54">1,54</option>
				    <option value="1.55">1,55</option>
				    <option value="1.56">1,56</option>
				    <option value="1.57">1,57</option>
				    <option value="1.58">1,58</option>
				    <option value="1.59">1,59</option>
				    <option value="1.60">1,60</option>
				    <option value="1.61">1,61</option>
				    <option value="1.62">1,62</option>
				    <option value="1.63">1,63</option>
				    <option value="1.64">1,64</option>
				    <option value="1.65">1,65</option>
				    <option value="1.66">1,66</option>
				    <option value="1.67">1,67</option>
				    <option value="1.68">1,68</option>
				    <option value="1.69">1,69</option>
				    <option value="1.70">1,70</option>
				    <option value="1.71">1,71</option>
				    <option value="1.72">1,72</option>
				    <option value="1.73">1,73</option>
				    <option value="1.74">1,74</option>
				    <option value="1.75">1,75</option>
				    <option value="1.76">1,76</option>
				    <option value="1.77" selected>1,77</option>
				    <option value="1.78">1,78</option>
				    <option value="1.79">1,79</option>
				    <option value="1.80">1,80</option>
          		    <option value="1.81">1,81</option>
          		    <option value="1.82">1,82</option>
          		    <option value="1.83">1,83</option>
          		    <option value="1.84">1,84</option>
          		    <option value="1.85">1,85</option>
          		    <option value="1.86">1,86</option>
          		    <option value="1.87">1,87</option>
          		    <option value="1.88">1,88</option>
          		    <option value="1.89">1,89</option>
          		    <option value="1.90">1,90</option>
          		    <option value="1.91">1,91</option>
          		    <option value="1.92">1,92</option>
          		    <option value="1.93">1,93</option>
          		    <option value="1.94">1,94</option>
          		    <option value="1.95">1,95</option>
          		    <option value="1.96">1,96</option>
          		    <option value="1.97">1,97</option>
          		    <option value="1.98">1,98</option>
          		    <option value="1.99">1,99</option>
          		    <option value="2.00">2,00</option>
          		    <option value="2.01">2,01</option>
          		    <option value="2.02">2,02</option>
          		    <option value="2.03">2,03</option>
          		    <option value="2.04">2,04</option>
				    <option value="2.05">2,05</option>
          		    <option value="2.06">2,06</option>
          		    <option value="2.07">2,07</option>
          		    <option value="2.10">2,10</option>
          		    <option value="2.11">2,11</option>
          		    <option value="2.12">2,12</option>
          		    <option value="2.13">2,13</option>
          		    <option value="2.14">2,14</option>
          		    <option value="2.15">2,15</option>
          		    <option value="2.16">2,16</option>
          		    <option value="2.17">2,17</option>
          		    <option value="2.18">2,18</option>
          		    <option value="2.19">2,19</option>
          		    <option value="2.20">2,20</option>
          		    <option value="2.21">2,21</option>
          		    <option value="2.22">2,22</option>
          		    <option value="2.23">2,23</option>
          		    <option value="2.24">2,24</option>
          		    <option value="2.25">2,25</option>
          		    <option value="2.26">2,26</option>
          		    <option value="2.27">2,27</option>
          		    <option value="2.28">2,28</option>
          		    <option value="&gt 2.28">&gt 2,28</option>
          	    </select>
           </div>
         
           <!-- fin form-group -->
        </div>
        
        <!-- fin row nécéssaire pour un bonne alignement -->
	</div>

    
    
    
      <!-- bouton -->
      
       <div class="row">    
        
           <div class="form-group">
              
              
              <!-- bouton submit -->
             
                <div class="col-md-offset-2 col-md-3">
                <button id="submit1" name="submit1" class="btn btn-primary">Submit</button>
                </div>
               
               <!-- lien recherche avancée -->
               
                <div class="col-md-offset-1 col-md-3">
      	          <a href="" class="btn btn-link">Une recherche avancée</a>
                </div>
                
                <!-- fin de form-group -->
            </div>
               
               <!-- fin de row pour alignement -->
         </div>
 
    <!-- div col-md-12 -->
    
     </div>

        <!-- fin formulaire -->
  </form>
 </div>
	 
	 
	 
	 <!-- fin carousel-caption -->
	</div>
 
    <div class="item d-block img-fluid active"> <img alt="" src=" {{ asset('/photo/Aikido.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Boxe_amateur.jpg') }}"></div>
    <div class="item d-block imag-fluid"> <img alt="" src=" {{ asset('/photo/Boxe_anglaise.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Escrime.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Boxe_thai.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Cage.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Bruce_Lee1.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Girls_training.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Judo2.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Karate.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Maywaether_Mcgregor.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Taekwondo1.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Symbole_muay_thai.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/MMA_Girls.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Lutte.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Taekwondo2.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Krav_maga.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Judo1.jpg') }}"></div>
    <div class="item d-block img-fluid"> <img alt="" src=" {{ asset('/photo/Karate2.jpg') }}"></div>
    
  </div>
  
   <!--chevron gauche du carrousel -->
   
    <a class="left carousel-control" href="#carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    
    <!-- chevron droit du carousel -->
    <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  

   
   <!-- div de fin du carroussel complet -->
   
   </div>
   
  
 
 
   
     <!-- Fonctionnalité Recherche sans le carroussel pour sm et xs -->
     
  
       <div class="container visible-sm visible-xs">
  
   
<form id="main-formulaire" class="form-horizontal" method="POST" action="">
 <div class="col-md-12">

     <!-- titre module de recherche dans caroussel -->
    <h3 class="text-center">   Recherche d'un combat :</h3>

        <!-- 1er ligne de recherche -->
       
        <div class="row">

      <div class="form-group">
 
        <!--1er ligne 1er Recherche sport dans caroussel-->
        
        <label class="col-md-1 control-label" for="sport">Sport :</label>
         
         <div class="col-md-2">
         
          <select id="sport" name="sport" class="form-control">
         
             <optgroup label="Sport de combat">
           <option value="anglaise">Boxe Anglaise</option>
           <option value="thai">Boxe Thai</option>
           <option value="française">Boxe Française</option>
           <option value="catch">Catch</option>
           <option value="lutte">Lutte</option>
           <option value="kicboxing">Kickboxing</option>
           <option value="mma">M.M.A</option>
           <option value="muay thai">Muay Thai</option>
         </optgroup>
         
         
             <optgroup label="Art martial">
           <option value"krav maga">Krav Maga</option>
           <option value="aïkido">Aïkido</option>
           <option value="jujitsu">Jujitsu</option>
           <option value="karate">Karate</option>
           <option value="kung-fu">Kung-fu</option>
           <option value="taekwondo">Taekwondo</option>
           <option value="judo">Judo</option>
         </optgroup>
      
             <optgroup label="épée">
           <option value="Escrime">Escrime</option>
         </optgroup>
      
             <optgroup label="Bonus">
      	   <option value="tennis">Tennis</option>
      	   <option value="squash">Squash</option>
      	   <option value="badminton">Badminton</option>
      	   <option value="golf">Golf</option>
         </optgroup>
       
          </select>
  
        </div>
        
        <!-- 1er ligne et 2eme recherche niveau -->
        
         <div>
          
          
          <label class="col-md-1 control-label" for="niveau">Niveau :</label>
           
           <div class="col-md-2">
             
               <select id="niveau" name="niveau" class="form-control">
                <option value="amateur">Amateur</option>
                <option value="professionel">Professionel</option>
                <option value="sparing_partner_pro">Spa-ring partner pro</option>
                <option value="sparing_partner_amateur">Spa-ring partner amateur</option>
               </select> 
           
            </div>
      
          </div>
  
            <!--1er ligne et 3eme Recherche par Age -->
            
 	         <div>
  	           
  	            <label class="col-md-1 control-label" for="age">Age :</label>
  	             <div class="col-md-2">
  		           <select id="age" name="age" class="form-control">
  			     <option value="12">12</option>
  			     <option value="13">13</option>
  			     <option value="14">14</option>
  			     <option value="15">15</option>
  			     <option value="16">16</option>
  			     <option value="17">17</option>
  			     <option value="18">18</option>
  			     <option value="19">19</option>
  			     <option value="20" selected>20</option>
  			     <option value="21">21</option>
  			     <option value="22">22</option>
  			     <option value="23">23</option>
  			     <option value="24">24</option>
  			     <option value="25">25</option>
  			     <option value="26">26</option>
  			     <option value="27">27</option>
  			     <option value="28">28</option>
  			     <option value="29">29</option>
  			     <option value="30">30</option>
  			     <option value="31">31</option>
  			     <option value="32">32</option>
  			     <option value="33">33</option>
  			     <option value="34">34</option>
  			     <option value="35">35</option>
  			     <option value="36">36</option>
  			     <option value="37">37</option>
  			     <option value="38">38</option>
  			     <option value="39">39</option>
  			     <option value="40">40</option>
  			     <option value="41">41</option>
  			     <option value="42">42</option>
  			     <option value="43">43</option>
  			     <option value="44">44</option>
  			     <option value="45">45</option>
  			     <option value="46">46</option>
  			     <option value="47">47</option>
  			     <option value="48">48</option>
  			     <option value="49">49</option>
  			     <option value="59">50</option>
  			     <option value="51">51</option>
  			     <option value="52">52</option>
  			     <option value="53">53</option>
  			     <option value="54">54</option>
  			     <option value="55">55</option>
  			     <option value="56">56</option>
  			     <option value="57">57</option>
  			     <option value="58">58</option>
  			     <option value="59">59</option>
  			     <option value="60">60</option>
  			     <option value="61">61</option>
  			     <option value="62">62</option>
  			     <option value="63">63</option>
  			     <option value="64">64</option>
  			     <option value="65">65</option>
  			     <option value="66">66</option>
  			     <option value="67">67</option>
  			     <option value="68">68</option>
  			     <option value="69">69</option>
  			     <option value="70">70</option>
  			     <option value="71">71</option>
  			     <option value="72">72</option>
  			     <option value="73">73</option>
  			     <option value="74">74</option>
  			     <option value="75">75</option>
  			 </select>
  	             </div>
             </div> 
            
            <!-- fin form-gourp 1er ligne -->
            
            </div>   
     
           <!-- fin du row nécessaire pour un bonne alignement -->
        </div>
       
        
       <!--2eme ligne de recherche principal-->
       
        <div class="row">

         <div class="form-group">
          
          <!--2eme ligne et 1er Recherche par date -->
          
           <label class="col-md-1 control-label" for="datepicker">Date :</label>
              <div class="col-md-2">
                <input type="text" id="datetimepicker" class="form-control">
              </div>
         
         
            <!-- 2eme ligne et 2eme Recherche par poids -->
            
               <label class="col-md-1 control-label" for="poids">Poids :</label>
                <div class="col-md-2">
                  <select id="poids" name="poids" class="form-control">
                     <option value="&lt50kg">&LT 50kg</option>
                     <option value="50_53kg">50 - 53KG</option>
                     <option value="53_56kg">53 - 56kg</option>
                     <option value="56_60Kg">56 - 60kg</option>
                     <option value="60_66kg">60 - 66kg</option>
                     <option value="66-69kg">66 - 69kg</option>
                     <option value="69_73kg">69 - 73kg</option>
                     <option value="73_76kg">73 - 76kg</option>
                     <option value="76_79kg selected">76 - 79kg</option>
                     <option value="79_85kg">79 - 85kg</option>
                     <option value="85_91kg">85 - 91kg</option>
                     <option value="&gt91kg">&gt 91kg</option>
                   </select>
                 </div>
         
              
              <!-- 2eme ligne et 3eme Recherche par Sexe -->
              
               <label class="col-md-1 control-label" for="sexe">Sexe :</label>
                 <div class="col-md-2">
                   <select id="sexe" name="sexe" class="form-control">
              	      <option value="M">Homme</option>
              	      <option value="F">Femme</option>
                   </select>
		         </div>
		         
		      <!-- fin du form-group -->   
		  </div>
		  
		  
		     <!-- fin du row nécessaire pour un bonne alignement-->
	   </div>
       
       
       <!--3eme ligne de recherche principal--> 
       
        <div class="row">
        
        <div class="form-group">
          
          <!--3eme ligne et 1er Recherche par Pays -->
          
           <label class="col-md-1 control-label" for="pays">Pays :</label>
             
             <div class="col-md-2">
             
               <select id="pays" name="pays" class="form-control">
                  <optgroup label="Monde" style="color:red;">
                     <option value="monde">Monde entier</option>
                  </optgroup>
                  
                  <optgroup label="les plus populaire" style="color:blue;">
                     <option value="Allemagne">Allemagne</option>
                     <option value="Belgique" selected>Belgique</option>
                     <option value="Canada">Canada</option>
                     <option value="Espagne">Espagne</option>
                     <option value="France">France</option>
                     <option value="Luxembourg">Luxembourg</option>
                     <option value="Pays-bas">Pays-bas</option>
                     <option value="Suisse">Suisse</option>
                     <option value="United_Kingdom">United Kingdom</option>
                     <option value="USA">USA</option>
               	   </optgroup>
               	   
                   <optgroup label="Europe"style="color:orange;">
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
                
                  <optgroup label="Moyen-orient"style="color:grey;">
                     <option value="Moyen-orient">Moyen-orient</option>
                     <option value="Arabie_saoudite">Arabie Saoudite</option>
                     <option value="Emirats_arabe">Emirat arabe unis</option>
                     <option value="Irak">Irak</option>
                     <option value="Iran">Iran</option>
                     <option value="Jordanie">Jordanie</option>
                     <option value="Qatar">Qatar</option>
                     <option value="Pakistan">Pakistan</option>
                     <option value="Syrie">Syrie</option>
                     <option value="Turquie">Turquie</option>
                  </optgroup>
                
                  <optgroup label="Maghreb" style="color:black;">
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
                
                   <optgroup label="Asie" style="color:green;">
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
                
                  
                  <optgroup label="Amérique" style="color:blue;">
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
           
           
             <!--3eme ligne et 2eme Recherche par plan -->
           
            <label for="plan" class="control-label col-md-1">plan :</label>
              <div class="col-md-2">
                <select name="plan" id="plan" class="form-control">
                   <option value="non_paye">non-payé</option>
                   <option value="paye">payé</option>
                </select>
               </div>
            
            
            <!--3eme ligne et 3eme recherche par taille -->
            
           <label for="taille" class="control-label col-md-1">taille :</label>
              <div class="col-md-2">
                 <select name="taille" id="taille" class="form-control">
           	        <option value="&lt 1.30">&lt 1,30</option>
           		    <option value="1.30">1,30</option>
           		    <option value="1.31">1,31</option>
           		    <option value="1.32">1,32</option>
           		    <option value="1.33">1,33</option>
           		    <option value="1.34">1,34</option>
           		    <option value="1.35">1,35</option>
           		    <option value="1.36">1,36</option>
           		    <option value="1.37">1,37</option>
           		    <option value="1.38">1,38</option>
           		    <option value="1.39">1,39</option>
           		    <option value="1.40">1,40</option>
           		    <option value="1.41">1,41</option>
           		    <option value="1.42">1,42</option>
           		    <option value="1.43">1,43</option>
           		    <option value="1.44">1,44</option>
           		    <option value="1.45">1,45</option>
           		    <option value="1.46">1,46</option>
           		    <option value="1.47">1,47</option>
           		    <option value="1.48">1,48</option>
           		    <option value="1.49">1,49</option>
           		    <option value="1.50">1,50</option>
           		    <option value="1.51">1,51</option>
           		    <option value="1.52">1,52</option>
           		    <option value="1.53">1,53</option>
           		    <option value="1.54">1,54</option>
				    <option value="1.55">1,55</option>
				    <option value="1.56">1,56</option>
				    <option value="1.57">1,57</option>
				    <option value="1.58">1,58</option>
				    <option value="1.59">1,59</option>
				    <option value="1.60">1,60</option>
				    <option value="1.61">1,61</option>
				    <option value="1.62">1,62</option>
				    <option value="1.63">1,63</option>
				    <option value="1.64">1,64</option>
				    <option value="1.65">1,65</option>
				    <option value="1.66">1,66</option>
				    <option value="1.67">1,67</option>
				    <option value="1.68">1,68</option>
				    <option value="1.69">1,69</option>
				    <option value="1.70">1,70</option>
				    <option value="1.71">1,71</option>
				    <option value="1.72">1,72</option>
				    <option value="1.73">1,73</option>
				    <option value="1.74">1,74</option>
				    <option value="1.75">1,75</option>
				    <option value="1.76">1,76</option>
				    <option value="1.77" selected>1,77</option>
				    <option value="1.78">1,78</option>
				    <option value="1.79">1,79</option>
				    <option value="1.80">1,80</option>
          		    <option value="1.81">1,81</option>
          		    <option value="1.82">1,82</option>
          		    <option value="1.83">1,83</option>
          		    <option value="1.84">1,84</option>
          		    <option value="1.85">1,85</option>
          		    <option value="1.86">1,86</option>
          		    <option value="1.87">1,87</option>
          		    <option value="1.88">1,88</option>
          		    <option value="1.89">1,89</option>
          		    <option value="1.90">1,90</option>
          		    <option value="1.91">1,91</option>
          		    <option value="1.92">1,92</option>
          		    <option value="1.93">1,93</option>
          		    <option value="1.94">1,94</option>
          		    <option value="1.95">1,95</option>
          		    <option value="1.96">1,96</option>
          		    <option value="1.97">1,97</option>
          		    <option value="1.98">1,98</option>
          		    <option value="1.99">1,99</option>
          		    <option value="2.00">2,00</option>
          		    <option value="2.01">2,01</option>
          		    <option value="2.02">2,02</option>
          		    <option value="2.03">2,03</option>
          		    <option value="2.04">2,04</option>
				    <option value="2.05">2,05</option>
          		    <option value="2.06">2,06</option>
          		    <option value="2.07">2,07</option>
          		    <option value="2.10">2,10</option>
          		    <option value="2.11">2,11</option>
          		    <option value="2.12">2,12</option>
          		    <option value="2.13">2,13</option>
          		    <option value="2.14">2,14</option>
          		    <option value="2.15">2,15</option>
          		    <option value="2.16">2,16</option>
          		    <option value="2.17">2,17</option>
          		    <option value="2.18">2,18</option>
          		    <option value="2.19">2,19</option>
          		    <option value="2.20">2,20</option>
          		    <option value="2.21">2,21</option>
          		    <option value="2.22">2,22</option>
          		    <option value="2.23">2,23</option>
          		    <option value="2.24">2,24</option>
          		    <option value="2.25">2,25</option>
          		    <option value="2.26">2,26</option>
          		    <option value="2.27">2,27</option>
          		    <option value="2.28">2,28</option>
          		    <option value="&gt 2.28">&gt 2,28</option>
          	    </select>
           </div>
         
           <!-- fin form-group -->
        </div>
        
        <!-- fin row nécéssaire pour un bonne alignement -->
	</div>

    
    
    
      <!-- bouton -->
      
       <div class="row">    
        
           <div class="form-group">
              
              
              <!-- bouton submit -->
             
                <div class="col-md-offset-2 col-md-3">
                <button id="submit1" name="submit1" class="btn btn-primary">Submit</button>
                </div>
               
               <!-- lien recherche avancée -->
               
                <div class="col-md-offset-1 col-md-3">
      	          <a href="" class="btn btn-link">Une recherche avancée</a>
                </div>
                
                <!-- fin de form-group -->
            </div>
               
               <!-- fin de row pour alignement -->
         </div>
 
    <!-- div col-md-12 -->
    
     </div>

        <!-- fin formulaire -->
  </form>
 </div>
	 
	 
	 


 
 

@endsection