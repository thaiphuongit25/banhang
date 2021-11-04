@extends('layouts.app')
@section('content')
<div class="banner-bottom">
  <div class="container">
    <div class="inner_sec_info_agileits_w3">
            <h3 class="heading-agileinfo">Kontaktiere uns<span>Dienstleistungen für Haut, Nägel und Schönheit</span></h3>
      <div class="contact-form">
             <form action="{{ route('contacts.store') }}" method="POST">
              @csrf
             <div class="left_form">
              <div>
                <span><label>Name</label></span>
                <span><input name="name" type="text" class="textbox" required=""></span>
              </div>
              <div>
                <span><label>E-mail</label></span>
                <span><input name="email" type="text" class="textbox" required=""></span>
              </div>
            </div>
            <div class="right_form">
              <div>					    	
                <span><label>Nachricht</label></span>
                <span><textarea name="message" required=""> </textarea></span>
              </div>
               <div>
                <span><input type="submit" value="einreichen" class="myButton"></span>
              </div>
            </div>
            <div class="clearfix"></div>
          </form>
        </div>
    </div>
  </div>
</div>
  <!-- /map -->
    <div class="map_w3layouts_agile">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.3501335778833!2d6.623430515197859!3d51.45172762259401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8bce22ab8b9d5%3A0x65b8e6825ebd7b99!2sSteinstra%C3%9Fe%202D%2C%2047441%20Moers%2C%20Germany!5e0!3m2!1sen!2s!4v1628259267077!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  <!-- //map -->
@endsection