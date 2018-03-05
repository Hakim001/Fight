
   
   @include('insertion._doctype')
    
    <body>
    
    <!-- navigation barre-->
    @include('insertion._nav')
 
<h1 id="titre" class="text-center titre-principal">Fight Club Connection.</h1>
 
    <!--background du module de recherche-->
  @yield('recherche')
   @yield('contact')
   @yield('carrousel')
   @yield('profil')
   @yield('content')
    
    
    @include('insertion._footer')
  

    <script src="{{ asset('/js/app.js') }}"></script>
    
    
    <script src="{{ asset('/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
      
    <script>
	  
  
   jQuery('#datetimepicker').datetimepicker();

</script>
  </body>
</html>
        
    