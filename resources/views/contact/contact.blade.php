
@extends('main')
 
@section('contact')
<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('/css/main.css') }}">

<section id="contact" class="content-section text-center">
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
  
 