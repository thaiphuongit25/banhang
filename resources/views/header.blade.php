<div id="demo-1" data-zs-src='["{{ url('images/b3.jpg') }}", " {{ url('images/b2.jpg') }}", "{{ url('images/b1.jpg') }}"]' data-zs-overlay="dots">
	<div class="demo-inner-content">
	
	<!--/banner-info-->
	  <div class="header">
		<div class="w3-agile-logo">
			<div class="container">
				<div class=" head-wl">
					<div class="headder-w3">
						<h1><a href="index.html" style="font-size: 40px;">Alina beauty</a></h1>
					</div>

					<div class="w3-header-top-right-text">
						<h6 class="caption">Kontaktiere uns</h6>
						<p><a href="tel:00491629103986" style="color: #f14156;">00491629103986</a></p>
					</div>

					<div class="email-right">
						<h6 class="caption">E-Mail an uns</h6>
						<p><a href="mailto:{{ infor()['email'] }}" class="info">{{ infor()['email'] }}</a></p>

					</div>


					<div class="agileinfo-social-grids">
						<h6 class="caption">Folge uns</h6>
						<ul>
							<li><a href="https://www.facebook.com/Alina-Beauty-nagelstudio-Moers-104331675271127"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-rss"></span></a></li>
							<li><a href="#"><span class="fa fa-vk"></span></a></li>
						</ul>
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
				
		</div>
		<div class="top-nav">
		<nav class="navbar navbar-default navbar-fixed-top">
	
	<!-- //header -->
	<div class="container">
			<div class="navbar-header">
	   			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Navigation umschalten</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
              </div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav ">
						<li class="active 0_tab"><a href="{{ url('/') }}">Zuhause</a></li>
						<li class="1_tab"><a href="{{ url('about') }}">Über</a></li>
						<li class="2_tab"><a href="{{ url('service') }}">Dienstleistungen</a></li>
						<li class="3_tab"><a href="{{ url('contact') }}">Kontakt</a></li>
					</ul>
				</div>
			
			</div>
			<div class="clearfix"> </div>
			</nav>	
		</div>
	  </div>
		<div class="w3-banner-head-info">
				<div class="container">
				   <div class="banner-text">
						<h2>Passen Sie auf Ihre Nägel auf
                         <span>Malen Sie sie Farbe Awesome!</span></h2>
					
					</div>
				</div>
		</div>
			<!--/banner-info-->
	</div>
</div>
