@extends('layouts.app')
@section('content')
<div class="banner-bottom">
  <div class="container">
    <div class="inner_sec_info_agileits_w3">
            <h3 class="heading-agileinfo">Kontaktiere uns<span>Dienstleistungen für Haut, Nägel und Schönheit</span></h3>
      <div class="contact-form">
             <form>
             <div class="left_form">
              <div>
                <span><label>Name</label></span>
                <span><input name="userName" type="text" class="textbox" required=""></span>
              </div>
              <div>
                <span><label>E-mail</label></span>
                <span><input name="userEmail" type="text" class="textbox" required=""></span>
              </div>
              <div>
                 <span><label>Fax</label></span>
                <span><input name="userPhone" type="text" class="textbox" required=""></span>
              </div>
            </div>
            <div class="right_form">
              <div>					    	
                <span><label>Message</label></span>
                <span><textarea name="Message" required=""> </textarea></span>
              </div>
               <div>
                <span><input type="submit" value="Submit" class="myButton"></span>
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.349932073151!2d6.6234110153060834!3d51.45173132259364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8bce22a865219%3A0xaf8207e6a0631b6a!2sSteinstra%C3%9Fe%202%2C%2047441%20Moers%2C%20Germany!5e0!3m2!1sen!2s!4v1626504420217!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
  <!-- //map -->
@endsection