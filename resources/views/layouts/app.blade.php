<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    Alina beauty | nails & spa | steinstraße 2D | moers
  </title>
  @yield('title')
  <script> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } 
  </script>

  <link rel="shortcut icon" href="{{ url('logo/logo.jpg') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

  <link rel="stylesheet" type="text/css" href="{{ url('css/zoomslider.css') }}" /><!--zoomslider css -->
  <script type="text/javascript" src="{{ url('js/modernizr-2.6.2.min.js') }}"></script><!--modernizer css -->
  <!-- //for banner css files -->
  <link rel="stylesheet" href="{{ url('css/flexslider.css') }}" type="text/css" media="all" />
  <!-- custom-theme css files -->
  <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
  <!-- //custom-theme css files-->
  <!-- font-awesome-icons -->
  <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet"> 
  <!-- //font-awesome-icons -->
  <!-- googlefonts -->
  <link href="{{ url('fonts/fontawesome-webfont.eot') }}" rel="stylesheet">
  <link href="{{ url('fonts/fontawesome-webfont.ttf') }}" rel="stylesheet">
  <link href="{{ url('fonts/fontawesome-webfont.woff') }}" rel="stylesheet">
  <link href="{{ url('fonts/fontawesome-webfont.woff2') }}" rel="stylesheet">
  <link href="{{ url('fonts/glyphicons-halflings-regular.woff') }}" rel="stylesheet">
  <!-- //googlefonts -->
   @yield('css')
  <!-- Styles -->
  {{-- <link href="{{ url('css/style.css') }}" rel="stylesheet"> --}}
</head>

<body>
  @include('header')

  <div class="flash-message">
    @include('layouts.partials.alert_section')
  </div>
  @yield('content')
  @include('footer')
  @include('auth.login_dialog')

  <script type="text/javascript" src="{{ url('js/jquery-2.1.4.min.js') }}"></script>
<!-- for bootstrap working -->
	<script src="{{ url('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- //js -->
<!-- for banner js file-->
 <script type="text/javascript" src="{{ url('js/jquery.zoomslider.min.js') }}"></script><!-- zoomslider js -->
<!-- //for banner js file-->
<!-- for smooth scrolling -->
@yield('js')
<script src="{{ url('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/easing.js') }}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- //for smooth scrolling -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<!-- FlexSlider-JavaScript -->
	<script defer src="{{ url('js/jquery.flexslider.js') }}"></script>
	<script type="text/javascript">
		
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
  <script>
    function activeMenu(index) {
      for(let i = 0 ; i <= 3; i ++) {
        if (i === index) {
          $('.' + i + '_tab').addClass('active');
        } else {
          $('.' + i + '_tab').removeClass('active');
        }
      }
    }
    let pathname = window.location.pathname
    switch (pathname) {
      case '/':
        activeMenu(0)
        break;
      case '/about':
        activeMenu(1)
        break;
      case '/library':
        activeMenu(2)
        break;
      case '/contact':
        activeMenu(3)
        break;
      default:
        break;
    }
</script>

  <!-- Messenger Plugin chat Code -->
  <div id="fb-root"></div>

  <!-- Your Plugin chat code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "110890464620589");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v11.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/de_DE/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</body>
</html>
