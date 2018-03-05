
@extends('main')
 
@section('contact')
<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('/css/main.css') }}">

<section id="contact" class="content-section text-center">
        
           <div class="row">
                        <div class="col-md-12">
                            <div class="4 map">
                                
                                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722606851!2d2.277020636303585!3d48.858837739604695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1508139076680" width="auto" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                                <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=quai%20du%20chantier%2010%20%20+(chez%20moi)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe>
                            </div>
                        </div>
                    </div>
           <div class="contact-section">
            <div class="container">
				<h2>Formulaire de contact.</h2>
             <p>---N'hésitez pas à venir voir sur nos sites sociaux et nous faire des likes.---</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal" action="" method="Post">
                   
                   {{ csrf_field() }}
                    <div class="form-group">
                      <label for="name2">Nom :</label>
                      <input type="text" class="form-control" name="name2"id="name2" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                      <label for="email2">Email :</label>
                      <input type="email" class="form-control" id="email2" placeholder="Email@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="message">Votre message :</label>
                     <textarea  class="form-control" placeholder="Votre message"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Envoyer un message</button>
					</form>											 

                  <hr>
                    <h3 id="h3footer">Nos sites social</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i id="twitter" class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i id="facebook" class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i id="youtube" class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section>
 @endsection
  
 