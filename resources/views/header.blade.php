<div id="demo-1" data-zs-src='["{{ url('images/b3.jpg') }}", " {{ url('images/b2.jpg') }}", "{{ url('images/b1.jpg') }}"]' data-zs-overlay="dots">
	<div class="demo-inner-content">
	
	<!--/banner-info-->
	  <div class="header">
		<div class="w3-agile-logo">
			<div class="container">
				<div class=" head-wl">
					<div class="headder-w3">
						<h1><a href="{{ url('/')}}" style="font-size: 40px;">Alina beauty</a></h1>
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
							<li><a href="https://www.facebook.com/Alina-Beauty-nagelstudio-Moers-104331675271127"><span class="fa fa-facebook icon_social"></span></a></li>
							<li><a href="{{ infor()['instagram'] }}"><span class="fa fa-instagram icon_social"></span></a></li>
							{{-- <li><a href="#"><span class="fa fa-twitter"></span></a></li> --}}
							{{-- <li><a href="#"><span class="fa fa-vk"></span></a></li> --}}
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
						<li class="2_tab"><a href="{{ url('library') }}">Bibliothek Nägel</a></li>
						<li class="3_tab"><a href="{{ url('contact') }}">Kontakt</a></li>
						{{-- <li class="1_tab"><a href="{{ url('order') }}">Nägel Termin</a></li> --}}
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
						<h2>Alina Beauty Nagelstudio Neumodellage Auffüllen 
              <span>Shellac
								Maniküre 
								Pediküre
								Wimpernverlängerung</span></h2>
					
					</div>
				</div>
		</div>
			<!--/banner-info-->
	</div>
</div>
<style>
	.icon_social {
		font-size: 18px;
		margin-top: 5px;
		font-weight: bold;
	}
</style>
