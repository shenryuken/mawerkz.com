<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Bikers Club</title>
		<link rel="icon" type="image/x-icon" href="media/favicon.png" />

		<link href="{{asset('bikers_club/css/master.css')}}" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('bikers_club/assets/switcher/css/switcher.css')}}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('bikers_club/assets/switcher/css/color1.css')}}" title="color1" media="all" data-default-color="true"  />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('bikers_club/assets/switcher/css/color2.css')}}" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('bikers_club/assets/switcher/css/color3.css')}}" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('bikers_club/assets/switcher/css/color4.css')}}" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('bikers_club/assets/switcher/css/color5.css')}}" title="color5" media="all" />
		
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Loader -->
		<div id="page-preloader"><span class="spinner"></span></div>
		<!-- Loader end -->

		<!-- Start Switcher -->
		<div class="switcher-wrapper">	
			<div class="demo_changer">
				<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
				<div class="form_holder">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="predefined_styles">
								<div class="skin-theme-switcher">
									<h4>Color</h4>
									<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#ce0000;"> </a>
									<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#4fb0fd;"> </a>
									<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#ffc73c;"> </a>							
									<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#ff8300;"> </a>
									<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#02cc8b;"> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->

		<nav id="header-top" class="top-nav top-nav--home">
			<div class="container">
				<div class="top-nav__main top-nav__main--home">
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<a href="home-main.html" class="logo logo--home">
								<span class="logo__moto">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width='50px' x="0px" y="0px"
										viewBox="0 0 337.227 337.227" style="enable-background:new 0 0 337.227 337.227;" xml:space="preserve">
										<g>
											<g>
												<path d="M214.517,164.668c2.176-2.377,2.486-5.635,0.685-7.283c-1.795-1.643-5.015-1.05-7.19,1.327
													l-3.742,4.09c2.665,1.795,5.156,3.459,7.413,4.96L214.517,164.668z"/>
												<path d="M225.395,170.107c2.176-2.377,2.486-5.635,0.685-7.283c-1.795-1.643-5.015-1.05-7.19,1.327
													l-4.775,5.216c3.41,2.246,6.037,3.943,7.528,4.835L225.395,170.107z"/>
												<path  d="M236.273,175.546c2.176-2.377,2.486-5.635,0.685-7.283c-1.795-1.643-5.015-1.05-7.19,1.327
													l-4.873,5.325c2.524,0.245,6.369,0.555,11.128,0.897L236.273,175.546z"/>
												<path  d="M176.742,144.092c7.887,5.401,16.682,11.395,24.476,16.649l5.075-5.075
													c0,0-10.758-7.321-20.271-13.832C183.231,142.232,180.158,142.96,176.742,144.092z"/>
												<path d="M90.114,233.755c2.132-4.493,5.907-14.506,4.96-22.42c-1.039-1.256-4.835-5.27-16.85-14.539
													c1.719,3.971,2.681,8.349,2.681,12.95c0,18.025-14.609,32.634-32.634,32.634s-32.634-14.609-32.634-32.634
													s14.609-32.634,32.634-32.634c1.452,0,2.872,0.125,4.27,0.31c-6.505-5.189-11.857-9.964-15.964-14.462
													C15.583,168.192,0,187.126,0,209.747c0,26.657,21.609,48.272,48.272,48.272C66.183,258.018,81.782,248.239,90.114,233.755z"/>
												<path  d="M51.138,188.279c-0.946-0.125-1.882-0.288-2.861-0.288c-11.999,0-21.756,9.758-21.756,21.756
													c0,11.999,9.758,21.756,21.756,21.756s21.756-9.758,21.756-21.756c0-2.91-0.593-5.673-1.637-8.213l-11.52,14.876
													c-2.072,2.681-5.211,4.215-8.61,4.215c-2.426,0-4.727-0.789-6.652-2.274c-4.743-3.677-5.613-10.519-1.942-15.262L51.138,188.279z"
													/>
												<path d="M286.236,155.356c-16.975,0-31.971,8.327-41.239,21.087c7.968,0.538,17.035,1.115,25.738,1.648
													c4.601-2.529,9.883-3.976,15.501-3.976c17.797,0,32.226,14.43,32.226,32.226s-14.43,32.226-32.226,32.226
													c-9.883,0-18.71-4.46-24.623-11.46c-7.49-2.219-16.361-4.64-24.236-6.239c6.26,21.076,25.754,36.463,48.859,36.463
													c28.163,0,50.991-22.828,50.991-50.991S314.394,155.356,286.236,155.356z"/>
												<path d="M48.261,111.599c7.044-5.493,16.605-11.025,30.029-16.421l9.078-15.969l-12.537,5.668
													C59.808,93.992,52.204,103.821,48.261,111.599z"/>
												<path d="M301.884,101.303c-0.005,0-0.011,0-0.011,0c-3.601-0.179-7-0.267-10.204-0.267
													c-16.807,0-28.267,2.328-36.034,5.238c-6.967,7.212-25.052,25.08-33.679,25.504c-0.044,0-0.615,0.016-0.664,0.016
													c-10.236,0-44.492-11.449-45.949-11.939c-1.066-0.359-1.806-1.338-1.849-2.458c-0.049-1.126,0.598-2.159,1.632-2.611l13.543-5.901
													c-3.709-3.753-5.771-4.183-5.771-4.183c-17.759-9.127-43.567-10.378-56.398-10.378c-4.857,0-7.854,0.179-7.854,0.179
													c0.092-1.779-2.029-2.42-5.156-2.42c-8.224,0-23.399,4.46-23.399,4.46c-6.103,2.11-11.422,4.248-16.203,6.391
													c-14.626,6.549-23.557,13.152-29.447,19.298c-4.895,5.107-7.751,9.899-10.106,14.087c-4.003,7.12-2.66,14.196,8.643,25.46
													c4.248,4.237,9.926,9.083,17.264,14.745c0.713,0.549,1.414,1.093,2.159,1.659c0.131,0.098,0.245,0.19,0.37,0.288l-1.169,1.512
													l-0.495,0.636l-1.67,2.148l-1.311,1.697l-3.535,4.569L43.268,203.66c-2.6,3.361-1.985,8.186,1.371,10.786
													c1.403,1.082,3.057,1.61,4.705,1.61c2.295,0,4.569-1.023,6.086-2.981l11.346-14.647l3.508-4.531l1.523-1.964l1.664-2.154
													l0.294-0.381l1.371-1.768c0.136,0.098,0.245,0.185,0.375,0.283c0.767,0.571,1.452,1.093,2.176,1.637
													c9.872,7.446,15.49,12.243,18.612,15.218c3.845,3.671,3.998,4.645,3.998,4.645c2.268,12.352-5.891,27.989-5.891,27.989
													s86.797,0,96.543,0s13.598-5.439,13.598-5.439s6.57-8.159,12.238-16.317c0.968-1.398,3.465-1.98,6.929-1.98
													c3.361,0,7.653,0.56,12.341,1.43c6.695,1.246,14.196,3.138,21.109,5.08c2.736,0.767,5.347,1.528,7.8,2.268
													c8.637,2.594,14.979,4.765,14.979,4.765l0.016-0.103c2.002,0.609,4.085,1.028,6.282,1.028c12.031,0,21.783-9.752,21.783-21.783
													c0-11.514-8.958-20.842-20.271-21.631l0.027-0.152c0,0-6.565-0.381-15.577-0.93c-2.589-0.158-5.374-0.332-8.273-0.511
													c-7.283-0.457-15.213-0.968-22.3-1.458c-3.742-0.261-7.234-0.511-10.269-0.745c-5.869-0.457-10.013-0.848-10.731-1.088
													c-0.027-0.011-0.12-0.065-0.152-0.082c-0.392-0.163-1.294-0.685-2.556-1.469c-1.828-1.131-4.384-2.79-7.511-4.852
													c-0.767-0.506-1.605-1.066-2.426-1.61c-2.317-1.539-4.797-3.198-7.413-4.96c-1.077-0.723-2.159-1.452-3.263-2.197
													c-15.164-10.236-32.08-21.881-32.08-21.881c5.608-2.497,10.389-4.177,14.528-5.243c4.068-1.044,7.517-1.496,10.487-1.496
													c9.856,0,14.506,4.841,19.684,8.436c2.774,1.925,5.684,2.567,8.327,2.567c5.287,0,9.518-2.567,9.518-2.567
													C316.793,101.64,302.347,101.303,301.884,101.303z M145.669,183.84l19.01-16.921c2.252-1.996,5.684-1.795,7.68,0.446
													c1.996,2.246,1.8,5.684-0.446,7.68l-16.845,14.995L145.669,183.84z M148.361,156.041c2.246-1.996,5.684-1.795,7.68,0.446
													c1.996,2.246,1.8,5.684-0.446,7.68l-16.915,15.061l-9.399-6.201L148.361,156.041z M188.23,185.924l-16.78,14.936l-9.399-6.201
													l18.939-16.861c2.252-1.996,5.678-1.795,7.68,0.446C190.672,180.49,190.476,183.927,188.23,185.924z"/>
												<path d="M221.288,129.08l0.005-0.027l0.386-2.703c1.692-0.082,4.406-1.55,7.647-3.845
													c2.616-1.855,5.575-4.253,8.615-6.902c0.044-0.038,0.087-0.076,0.125-0.109c0.609-0.528,1.213-1.055,1.822-1.599
													c-0.218,0.054-0.479,0.109-0.8,0.152c-0.908,0.125-2.312,0.201-4.64,0.201c-0.027,0-0.044,0-0.071,0
													c-8.964,0-26.885-1.061-35.653-1.621c-1.474-0.092-2.66-0.169-3.53-0.228c-0.315-0.022-0.62-0.044-0.843-0.054l-1.974,0.859
													l-8.528,3.72c4.096,1.3,9.013,2.807,13.957,4.232c1.284,0.37,2.545,0.723,3.818,1.077c3.987,1.104,7.816,2.089,11.166,2.828
													c2.562,0.566,4.765,0.957,6.527,1.142c0.696,0.076,1.436,0.169,1.964,0.169v2.692v0.016H221.288z"/>
											</g>
										</g>
									</svg>
								</span>
								<h2 class="logo__title">
									<strong>MA</strong><span style="color: red;">Werkz</span>
								</h2>
							</a>
						</div>
						<div class="col-md-9 col-xs-12">
							<div class="main-nav main-nav--home navbar-main-slide">
								<a href="#" class="btn_header_search main-nav__search no-decoration">
									<span class="fa fa-search"></span>
								</a>
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- <ul class="collapse navbar-collapse navbar-nav-menu" id="nav">
									<li class="dropdown">
										<a class="no-decoration dropdown-toggle" data-toggle="dropdown" href="home-main.html">Home <i class="fa fa-angle-down"></i></a>
										<span class="main-nav__separator"><span></span><span></span><span></span></span>
										<ul class="dropdown-menu">
											<li><a href="home-main.html">Home 1</a></li>
											<li><a href="home.html">Home 2</a></li>
											<li><a href="home2.html">Home 3</a></li>
										</ul>
									</li>
									<li><a class="no-decoration" href="about.html">About us</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="shop.html">Offer</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="article.html">Services</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="item.html">Listings</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="blog.html">Blog</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="contacts.html">Contact</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="shop.html">Shop</a></li>
								</ul> -->
								<div class="search-form-modal transition">
									<form class="navbar-form header_search_form">
										<i class="fa fa-times search-form_close"></i>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search">
										</div>
										<button type="submit" class="btn btn_search customBgColor">Search</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav><!--top-nav-->

		<section class="sliders sliders--home">
			<ul class="sliders__main js-slider-main slider enable-bx-slider" data-auto="true" data-auto-hover="true" data-mode="fade" data-pager="false" data-pager-custom="null" data-prev-selector="null" data-next-selector="null">
				<li>
					<img src="{{asset('bikers_club/media/sliders/slider2.jpg')}}" alt="bxSlider" />
					<div class="sliders__text">
						<h2>our customers are enjoying</h2>
						<h3>outstanding services<span class="line line--slider')}}"><span class="line__first"></span><span class="line__second"></span></span></h3>
						<p>With the continued support from our customers, we are now moving one step further. In recognition of our customer support, we will launch e-commerce in 2019. Stay tuned for it</p>
						<a href="#" class="btn button button--red triangle">Coming Soon</a>
					</div>
				</li>
				<li>
					<img src="{{asset('bikers_club/media/sliders/slider8.jpg')}}" alt="bxSlider" />
					<div class="sliders__text">
						<h2>our customers are enjoying</h2>
						<h3>outstanding services<span class="line line--slider"><span class="line__first"></span><span class="line__second"></span></span></h3>
						<p>With the continued support from our customers, we are now moving one step further. In recognition of our customer support, we will launch e-commerce in 2019. Stay tuned for it</p>
						<a href="#" class="btn button button--red triangle">Coming Soon</a>
						<!-- <p>Donec ac nisi eget sem ultrices tempus. Phasellus et sem quis
							felis pharetra convallis nulla sem nullam variu.</p>
						<a href="item.html" class="btn button button--red triangle">LEARN MORE</a> -->
					</div>
				</li>
				<li>
					<img src="{{asset('bikers_club/media/sliders/slider6.jpg')}}" alt="bxSlider" />
					<div class="sliders__text">
						<h2>our customers are enjoying</h2>
						<h3>outstanding services<span class="line line--slider"><span class="line__first"></span><span class="line__second"></span></span></h3>
						<p>With the continued support from our customers, we are now moving one step further. In recognition of our customer support, we will launch e-commerce in 2019. Stay tuned for it</p>
						<a href="#" class="btn button button--red triangle">Coming Soon</a>
						<!-- <p>Donec ac nisi eget sem ultrices tempus. Phasellus et sem quis
							felis pharetra convallis nulla sem nullam variu.</p>
						<a href="item.html" class="btn button button--red triangle">LEARN MORE</a> -->
					</div>
				</li>
				<li>
					<img src="{{asset('bikers_club/media/sliders/slider10.jpg')}}" alt="bxSlider" />
					<div class="sliders__text">
						<h2>our customers are enjoying</h2>
						<h3>outstanding services<span class="line line--slider"><span class="line__first"></span><span class="line__second"></span></span></h3>
						<p>With the continued support from our customers, we are now moving one step further. In recognition of our customer support, we will launch e-commerce in 2019. Stay tuned for it</p>
						<a href="#" class="btn button button--red triangle">Coming Soon</a>
						<!-- <p>Donec ac nisi eget sem ultrices tempus. Phasellus et sem quis
							felis pharetra convallis nulla sem nullam variu.</p>
						<a href="item.html" class="btn button button--red triangle">LEARN MORE</a> -->
					</div>
				</li>
			</ul>
		</section><!--sliders-->

		<section class="biker-club">
			<div class="container">
				<div class="biker-club__main line-down triangle triangle--big">
					<div class="row">
						<div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="biker-club__upcoming">
								<h2 class="title"><span class="title__bold">Mawerkz</span>Activities</h2>
								<h3 class="title-space">UPCOMING EVENTS</h3>
								<p class="text"><strong>EICMA 2018 76th Worldwide Motorcycle Exhibition</strong></p>
								<p>Every year, the EICMA Motorcycle Show in Milan, Italy, showcases all of the new motorcycles from every corner of the industry: cruisers, ADV bikes, sport bikes, luxury tourers, dual-sports, motocross, and enduro machines.</p>
								<a href="http://2018.eicma.org/" class="button btn button--main button--grey">SEE YOU THERE</a>
							</div>
						</div>
						<div class="col-sm-8 col-xs-12 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="event">
								<div class="row row--no-padding">
									<div class="col-xs-6">
										<div class="event__info clearfix">
											<h3 class="event__title">Eicma-Motorcycle Exhibition</h3>
											<div class="event__time">Milan, Italy <span>|</span>  6 Days</div>
											<div class="event__addr-date clearfix"><span class="fa fa-map-marker"></span>Exhibition & Trade Centre, Fiera Milano,<br />Rho Milan Italy</div>
											<div class="event__addr-date clearfix"><span class="fa fa-calendar-o"></span>Tuesday - Sunday, November 6-11th, 2018</div>
											<a href="http://2018.eicma.org/" class="button btn button--red button--main pull-right" >BUY TICKETS</a>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="event__img">
											<img src="{{asset('bikers_club/media/370x280/event.jpg')}}" class="img-responsive" alt="event" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--biker-club-->

		<section class="we-are we-are--home">
			<div class="container">
				<h2 class="title title--main wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">We Are The<span class="title__bold"> Mawerkz</span><span class="line line--title"><span class="line__first"></span><span class="line__second"></span></span></h2>
				<p class="text text--anons wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">MA TRADING is Malaysia top supplier of parts and accessories for vintage and modern scooters. We have everything you need, from wear-and-tear items to aftermarket parts from brands like Malossi, Ermax, Bitubo, Grip Lock, FA Italia and more.
MA TRADING, is a dedicated bike products importer, wholesaler and distributor to the Malaysian scooters retail market since 2007.  We offer a wide range of scooters products, which includes replacement parts, performance parts, scooter accessories, scooter tools, scooter manuals, essentials like oils, tires, tubes, or for lifestyle items.
</p>
			</div>
		</section><!--we-are-->

		<div class="images">
			<div class="row row--no-padding">
				<div class="col-xs-4 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<div class="images__one">
						<img src="{{asset('bikers_club/media/530x360/bike1.jpg')}}" class="img-responsive" alt="bike"/>
					</div>
				</div>
				<div class="col-xs-4 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<div class="images__one">
						<img src="{{asset('bikers_club/media/530x360/bike2.jpg')}}" class="img-responsive" alt="bike"/>
					</div>
				</div>
				<div class="col-xs-4 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<div class="images__one">
						<img src="{{asset('bikers_club/media/530x360/bike3.jpg')}}" class="img-responsive" alt="bike"/>
					</div>
				</div>
			</div>
		</div><!--images-->

		<section class='info-blocks'>
			<div class="container">
				<div class="row">
					<div class="col-xs-6 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="info-block">
							<h3 class="title title--block"><span class="title__bold">TOPCLASS</span>Performance</h3>
							<p class="text">MA Trading  offers a wide range of aftermarket scooter performance upgrades to help make your scooter handle better, accelerate faster, rev quicker, stop harder, and go faster!  We are the exclusive Malaysia importers for high-quality performance scooter parts brands! </p>
							<!-- <a href="article.html" class="btn button button--red button--main">Read More</a> -->
						</div>
					</div>
					<div class="col-xs-6 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="info-block">
							<h3 class="title title--block"><span class="title__bold">BUILDING</span>YourBrand</h3>
							<p class="text">We strives for a continuous effort to improve and Professionalism is always our hallmark. Besides supplying quality products, we also provide quality after sales services to ensure that the quality of our products fulﬁll the market needs. MA Trading has its new warehouse cum showroom which is located in Selangor, Malaysia. The warehouse commands a total ﬂoor space and office space of 5000 sq ft. If you are already in this business or planning to, we aim to become your reliable partner and look forward to have you onboard.</p>
							<!-- <a href="article.html" class="btn button button--red button--main">Read More</a> -->
						</div>
					</div>
				</div>
			</div>
		</section><!--info-blocks-->

		<div class="numbers numbers--home">
			<div class="container">
				<div class="clearfix percent-blocks" data-waypoint-scroll="true">
					<div class="numbers__one">
						<header class="numbers__head">
							<span class="fa fa-building"></span>
							<div class="line line--slim line--title"><div class="line__first"></div><div class="line__second"></div></div>
						</header>
						<div class="numbers__body chart" data-percent="25">
							<div class="numbers__num percent">25</div>
							<div class="number__desc">CitiesNetwork</div>
						</div>
					</div>
					<div class="numbers__one">
						<header class="numbers__head">
							<span class="fa fa-motorcycle"></span>
							<div class="line line--slim line--title"><div class="line__first"></div><div class="line__second"></div></div>
						</header>
						<div class="numbers__body chart" data-percent="5000">
							<div class="numbers__num percent">5000</div>
							<div class="number__desc">ClubMembers</div>
						</div>
					</div>
					<div class="numbers__one">
						<header class="numbers__head">
							<span class="fa fa-cog"></span>
							<div class="line line--slim line--title"><div class="line__first"></div><div class="line__second"></div></div>
						</header>
						<div class="numbers__body chart" data-percent="1258">
							<div class="numbers__num percent">1258</div>
							<div class="number__desc">ServicesDone</div>
						</div>
					</div>
					<div class="numbers__one">
						<header class="numbers__head">
							<span class="fa fa-tachometer"></span>
							<div class="line line--slim line--title"><div class="line__first"></div><div class="line__second"></div></div>
						</header>
						<div class="numbers__body chart" data-percent="6000">
							<div class="numbers__num percent">6000</div>
							<div class="number__desc">MilesDriven</div>
						</div>
					</div>
					<div class="numbers__one">
						<header class="numbers__head">
							<span class="fa fa-road"></span>
							<div class="line line--slim line--title"><div class="line__first"></div><div class="line__second"></div></div>
						</header>
						<div class="numbers__body chart" data-percent="9000">
							<div class="numbers__num percent">9000</div>
							<div class="number__desc">TestRides</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--numbers-->

		<div class="home-reviews dark-bg">
			<div class="container">
				<div class="home-reviews__quote triangle triangle--services"><span class="fa  fa-quote-right"></span></div>
				<div class="owl-carousel js-home-reviews enable-owl-carousel" data-auto-play="5000" data-stop-on-hover="true" data-items="2" data-pagination="true" data-navigation="false" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="1" data-items-tablet-small="1" >
					<div>
						<div class="home-reviews__review wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="home-reviews__person">
								<div class="person person--first"></div>
							</div>
							<div class="home-reviews__text">
								<p>Proin blandit quam molestie luctus vehicula orci massa interdum justo nec rutrum risus augue ut nisl  ultric lacu at  Etiam eleifend nisl nec lectus aecen
									as sit amet donec erat. Fusce quis nisl ac sapien tristiqu</p>
							</div>
							<div class="home-reviews__author">
								Martin Hasman
							</div>
							<div class="home-reviews__position">
								Owner Ducati S600VX
							</div>
						</div>
					</div>
					<div>
						<div class="home-reviews__review wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="home-reviews__person">
								<div class="person person--second"></div>
							</div>
							<div class="home-reviews__text">
								<p>Proin blandit quam molestie luctus vehicula orci massa interdum justo nec rutrum risus augue ut nisl  ultric lacu at  Etiam eleifend nisl nec lectus aecen
									as sit amet donec erat. Fusce quis nisl ac sapien tristiqu</p>
							</div>
							<div class="home-reviews__author">
								Ben Thomas
							</div>
							<div class="home-reviews__position">
								Owner Honda CB1000R
							</div>
						</div>
					</div>
					<div>
						<div class="home-reviews__review wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="home-reviews__person">
								<div class="person person--first"></div>
							</div>
							<div class="home-reviews__text">
								<p>Proin blandit quam molestie luctus vehicula orci massa interdum justo nec rutrum risus augue ut nisl  ultric lacu at  Etiam eleifend nisl nec lectus aecen
									as sit amet donec erat. Fusce quis nisl ac sapien tristiqu</p>
							</div>
							<div class="home-reviews__author">
								Martin Hasman
							</div>
							<div class="home-reviews__position">
								Owner Ducati S600VX
							</div>
						</div>
					</div>
					<div>
						<div class="home-reviews__review wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="home-reviews__person">
								<div class="person person--second"></div>
							</div>
							<div class="home-reviews__text">
								<p>Proin blandit quam molestie luctus vehicula orci massa interdum justo nec rutrum risus augue ut nisl  ultric lacu at  Etiam eleifend nisl nec lectus aecen
									as sit amet donec erat. Fusce quis nisl ac sapien tristiqu</p>
							</div>
							<div class="home-reviews__author">
								Ben Thomas
							</div>
							<div class="home-reviews__position">
								Owner Honda CB1000R
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--home-reviews-->

		<section class="services">
			<div class="container">
				<div class="services__main">
					<h2 class="title title--main wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s"><span class="title__bold">Biker</span>ClubServices<span class="line line--title"><span class="line__first"></span><span class="line__second"></span></span></h2>
					<p class="text text--anons wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">Nullam ac velit. Fusce consequat ipsum non ipsum. Nam ullamcorper ipsum quis erat. Aliquam non elit. In vitae dui sagittis cursus. Duis convallis rutrum mauris. Maecenas eu neque lacinia.</p>
					<div class="row">
						<div class="col-sm-7 col-xs-12 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="services__img">
								<img class="img-responsive" src="media/motorcycles/moto-red.png" alt="bike" />
							</div>
						</div>
						<div class="col-sm-5 col-xs-12 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="services__info">
								<div class="services__info-block wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
									<h5 class="clearfix services__title"><a class="pull-left no-decoration js-toggle" href="#">Motorcycle Inspection</a><a class="square square--toggle pull-right js-toggle"><span class="fa fa-plus"></span></a></h5>
									<div class="services__text triangle triangle--services">
										Nunc molestie sapien tempor placerat Cras et lectus. Etiam sit amet turpis. Suspendisse et erat. Ut  Proin a ipsum vitae orci porta tristique nam. Class aptent taciti sociosqu ad sodales f
									</div>
								</div>
								<div class="services__info-block wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
									<h5 class="clearfix services__title"><a class="pull-left no-decoration js-toggle" href="#">Finance And Insurance</a><a class="square square--toggle pull-right js-toggle"><span class="fa fa-plus"></span></a></h5>
									<div class="services__text triangle triangle--services">
										Nunc molestie sapien tempor placerat Cras et lectus. Etiam sit amet turpis. Suspendisse et erat. Ut  Proin a ipsum vitae orci porta tristique nam. Class aptent taciti sociosqu ad sodales f
									</div>
								</div>
								<div class="services__info-block wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
									<h5 class="clearfix services__title"><a class="pull-left no-decoration js-toggle" href="#">Ready For the Racing</a><a class="square square--toggle pull-right js-toggle"><span class="fa fa-plus"></span></a></h5>
									<div class="services__text triangle triangle--services">
										Nunc molestie sapien tempor placerat Cras et lectus. Etiam sit amet turpis. Suspendisse et erat. Ut  Proin a ipsum vitae orci porta tristique nam. Class aptent taciti sociosqu ad sodales f
									</div>
								</div>
								<div class="services__info-block wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
									<h5 class="clearfix services__title"><a class="pull-left no-decoration js-toggle" href="#">Tyre And Oil Change</a><a class="square square--toggle pull-right js-toggle"><span class="fa fa-plus"></span></a></h5>
									<div class="services__text triangle triangle--services">
										Nunc molestie sapien tempor placerat Cras et lectus. Etiam sit amet turpis. Suspendisse et erat. Ut  Proin a ipsum vitae orci porta tristique nam. Class aptent taciti sociosqu ad sodales f
									</div>
								</div>
								<div class="services__info-block wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
									<h5 class="clearfix services__title"><a class="pull-left no-decoration js-toggle" href="#">Parts Replacement</a><a class="square square--toggle pull-right js-toggle"><span class="fa fa-plus"></span></a></h5>
									<div class="services__text triangle triangle--services">
										Nunc molestie sapien tempor placerat Cras et lectus. Etiam sit amet turpis. Suspendisse et erat. Ut  Proin a ipsum vitae orci porta tristique nam. Class aptent taciti sociosqu ad sodales f
									</div>
								</div>
								<div class="services__info-block wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
									<h5 class="clearfix services__title"><a class="pull-left no-decoration js-toggle" href="#"> Accident Repairs And Quotes</a><a class="square square--toggle pull-right js-toggle"><span class="fa fa-plus"></span></a></h5>
									<div class="services__text triangle triangle--services">
										Nunc molestie sapien tempor placerat Cras et lectus. Etiam sit amet turpis. Suspendisse et erat. Ut  Proin a ipsum vitae orci porta tristique nam. Class aptent taciti sociosqu ad sodales f
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--services-->

		<section class="listings">
			<div class="container">
				<header class="tab-header clearfix wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<h2 class="title title--main pull-left"><span class="title__bold">Biker</span>ClubListings<span class="line line--title"><span class="line__first"></span><span class="line__second"></span></span></h2>
					<div class="tab-toggles pull-right js-isotope-btns">
						<a href="#" class="button button--grey button--main btn js-isotope-btn" data-sort-by="name">BY TYPE</a>
						<a href="#" class="button button--grey button--main btn button--active js-isotope-btn" data-sort-by='original-order'>BY NEWEST</a>
					</div>
				</header>
				<p class="text text--anons wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">Nullam ac velit. Fusce consequat ipsum non ipsum. Nam ullamcorper ipsum quis erat. Aliquam non elit. In vitae dui sagittis cursus. Duis convallis rutrum mauris. Maecenas eu neque lacinia.</p>
				<div class="row isotope">
					<div class="col-md-3 col-xs-6 isotope-item wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<a href="shop.html" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="{{asset('bikers_club/media/270x230/listing1.jpg')}}" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">DIRT BIKE MOTORCYCLES</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>DIRT BIKE MOTORCYCLES</h3>
								<p>Nunc molestie sapien temporplace</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 col-xs-6 isotope-item wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<a href="shop.html" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="{{asset('bikers_club/media/270x230/listing3.jpg')}}" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">SPORTBIKE MOTORCYCLES</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>SPORTBIKE MOTORCYCLES</h3>
								<p>Nunc molestie sapien temporplace</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 col-xs-6 isotope-item wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<a href="shop.html" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="{{asset('bikers_club/media/270x230/listing4.jpg')}}" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">CRUISER BIKES</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>CRUISER BIKES</h3>
								<p>Nunc molestie sapien temporplace</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 col-xs-6 isotope-item wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<a href="shop.html" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="{{asset('bikers_club/media/270x230/listing2.jpg')}}" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">MINI &amp; POCKET BIKES</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>MINI &amp; POCKET BIKES</h3>
								<p>Nunc molestie sapien temporplace</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section><!--listings-->

		<section class="blog blog--home">
			<div class="container-fluid no-padding">
				<div class="row row--no-padding">
					<div class="col-lg-4 col-xs-12 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="blog__info">
							<h2 class="title title--main"><span class="title__bold">BIKER</span>ClubBlog<span class="line line--small"><span class="line__second"></span><span class="line__first"></span></span></h2>
							<p class="text">Nullam ac velit. Fusce consequat ipsum non ipsum. Nam ullamcorper ipsum quis erat am non sed ipsum elit.</p>
							<a href="blog.html" class="button btn button--main button--red">VISIT BLOG</a>
						</div>
					</div>
					<div class="col-lg-8 col-xs-12">
						<div class="row row--no-padding">
							<div class="col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay="0.7s" data-wow-duration="1.5s">
								<a href="article.html" class="blog-anons no-decoration">
									<div class="blog-anons__img">
										<img src="{{asset('bikers_club/media/575x250/blog-anons1.jpg')}}" class="img-responsive" alt="bike" />
									</div>
									<div class="blog-anons__hidden triangle triangle--bigger">
										<div class="blog-anons__text">
											<h3>AUGUE DUI CONVALLIS VAMUS</h3>
											<div class="blog-anons__info">
												<span><span class="fa fa-calendar-o"></span>MAR 23, 2015</span>
												<span><span class="fa fa-comment-o"></span>20</span>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
								<a href="article.html" class="blog-anons no-decoration">
									<div class="blog-anons__img">
										<img src="{{asset('bikers_club/media/575x250/blog-anons3.jpg')}}" class="img-responsive" alt="bike" />
									</div>
									<div class="blog-anons__hidden triangle triangle--bigger">
										<div class="blog-anons__text">
											<h3>AUGUE DUI CONVALLIS VAMUS</h3>
											<div class="blog-anons__info">
												<span><span class="fa fa-calendar-o"></span>MAR 23, 2015</span>
												<span><span class="fa fa-comment-o"></span>20</span>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
								<a href="article.html" class="blog-anons no-decoration">
									<div class="blog-anons__img">
										<img src="{{asset('bikers_club/media/575x250/blog-anons2.jpg')}}" class="img-responsive" alt="bike" />
									</div>
									<div class="blog-anons__hidden triangle triangle--bigger">
										<div class="blog-anons__text">
											<h3>AUGUE DUI CONVALLIS VAMUS</h3>
											<div class="blog-anons__info">
												<span><span class="fa fa-calendar-o"></span>MAR 23, 2015</span>
												<span><span class="fa fa-comment-o"></span>20</span>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
								<a href="article.html" class="blog-anons no-decoration">
									<div class="blog-anons__img">
										<img src="{{asset('bikers_club/media/575x250/blog-anons4.jpg')}}" class="img-responsive" alt="bike" />
									</div>
									<div class="blog-anons__hidden triangle triangle--bigger">
										<div class="blog-anons__text">
											<h3>AUGUE DUI CONVALLIS VAMUS</h3>
											<div class="blog-anons__info">
												<span><span class="fa fa-calendar-o"></span>MAR 23, 2015</span>
												<span><span class="fa fa-comment-o"></span>20</span>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--blog-->

		<section class="partners">
			<div class="container">
				<h2 class="title title--main wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s"><span class="title__bold">MAWerkz</span> Trusted Partners<span class="line line--title line--center"><span class="line__first"></span><span class="line__second"></span></span></h2>
				<!-- <p class="text--small wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">Nullam ac velit. Fusce consequat ipsum non ipsum. Nam ullamcorper ipsum quis erat. Aliquam non elit vitae
					dui sagittis cursus. Duis convallis rutrum mauris. Maecenas eu neque lacinia.</p> -->
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="brand">
							<img src="{{asset('bikers_club/logos/afam.png')}}" alt="brand" />
						</div>
						<div class="brand">
							<img src="{{asset('bikers_club/logos/bitubo.jpg')}}" alt="brand" />
						</div>
						<div class="brand">
							<img src="{{asset('bikers_club/logos/domino.jpg')}}" alt="brand" />
						</div>
						<div class="brand">
							<img src="{{asset('bikers_club/logos/ermax.jpg')}}" alt="brand" />
						</div>
						<div class="brand">
							<img src="{{asset('bikers_club/logos/FA_italia.png')}}" alt="brand" />
						</div>
						<div class="brand">
							<img src="{{asset('bikers_club/logos/griplock.png')}}" alt="brand" />
						</div>
						<div class="brand">
							<img src="{{asset('bikers_club/logos/malossi.jpg')}}" alt="brand" />
						</div>
						<div class="brand">
							<img src="{{asset('bikers_club/logos/piaggio.jpg')}}" alt="brand" />
						</div>
					</div>
				</div>
			</div>
		</section><!--partners-->

		<section class="signup">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="signup__desc">
							<h2 class="title title--main"><span class="fa fa-envelope-o"></span><span class="title__bold">SIGNUP</span>ForNewsletter</h2>
							<p class="text--small">Subscribe to our weekly newsletter to get notified and stay updated with latest Bikes news and sporting </p>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 col-xs-12 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<form action="/" method="post" class="sign-form">
							<div class="relative-pos"><div class="input-triangle"></div><input class="sign-input" type="text" name="sign" placeholder="Enter your email address" /></div>
							<button type="submit" class="btn button button--red button--sign triangle triangle--12">SUBSCRIBE</button>
						</form>
					</div>
				</div>
			</div>
		</section><!--signup-->

		<footer class="home-footer">
			<div class="footer-logo">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<a href="index.html" class="logo logo--home">
								<span class="logo__moto">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width='50px' x="0px" y="0px"
										viewBox="0 0 337.227 337.227" style="enable-background:new 0 0 337.227 337.227;" xml:space="preserve">
										<g>
											<g>
												<path d="M214.517,164.668c2.176-2.377,2.486-5.635,0.685-7.283c-1.795-1.643-5.015-1.05-7.19,1.327
													l-3.742,4.09c2.665,1.795,5.156,3.459,7.413,4.96L214.517,164.668z"/>
												<path d="M225.395,170.107c2.176-2.377,2.486-5.635,0.685-7.283c-1.795-1.643-5.015-1.05-7.19,1.327
													l-4.775,5.216c3.41,2.246,6.037,3.943,7.528,4.835L225.395,170.107z"/>
												<path  d="M236.273,175.546c2.176-2.377,2.486-5.635,0.685-7.283c-1.795-1.643-5.015-1.05-7.19,1.327
													l-4.873,5.325c2.524,0.245,6.369,0.555,11.128,0.897L236.273,175.546z"/>
												<path  d="M176.742,144.092c7.887,5.401,16.682,11.395,24.476,16.649l5.075-5.075
													c0,0-10.758-7.321-20.271-13.832C183.231,142.232,180.158,142.96,176.742,144.092z"/>
												<path d="M90.114,233.755c2.132-4.493,5.907-14.506,4.96-22.42c-1.039-1.256-4.835-5.27-16.85-14.539
													c1.719,3.971,2.681,8.349,2.681,12.95c0,18.025-14.609,32.634-32.634,32.634s-32.634-14.609-32.634-32.634
													s14.609-32.634,32.634-32.634c1.452,0,2.872,0.125,4.27,0.31c-6.505-5.189-11.857-9.964-15.964-14.462
													C15.583,168.192,0,187.126,0,209.747c0,26.657,21.609,48.272,48.272,48.272C66.183,258.018,81.782,248.239,90.114,233.755z"/>
												<path  d="M51.138,188.279c-0.946-0.125-1.882-0.288-2.861-0.288c-11.999,0-21.756,9.758-21.756,21.756
													c0,11.999,9.758,21.756,21.756,21.756s21.756-9.758,21.756-21.756c0-2.91-0.593-5.673-1.637-8.213l-11.52,14.876
													c-2.072,2.681-5.211,4.215-8.61,4.215c-2.426,0-4.727-0.789-6.652-2.274c-4.743-3.677-5.613-10.519-1.942-15.262L51.138,188.279z"
													/>
												<path d="M286.236,155.356c-16.975,0-31.971,8.327-41.239,21.087c7.968,0.538,17.035,1.115,25.738,1.648
													c4.601-2.529,9.883-3.976,15.501-3.976c17.797,0,32.226,14.43,32.226,32.226s-14.43,32.226-32.226,32.226
													c-9.883,0-18.71-4.46-24.623-11.46c-7.49-2.219-16.361-4.64-24.236-6.239c6.26,21.076,25.754,36.463,48.859,36.463
													c28.163,0,50.991-22.828,50.991-50.991S314.394,155.356,286.236,155.356z"/>
												<path  d="M48.261,111.599c7.044-5.493,16.605-11.025,30.029-16.421l9.078-15.969l-12.537,5.668
													C59.808,93.992,52.204,103.821,48.261,111.599z"/>
												<path d="M301.884,101.303c-0.005,0-0.011,0-0.011,0c-3.601-0.179-7-0.267-10.204-0.267
													c-16.807,0-28.267,2.328-36.034,5.238c-6.967,7.212-25.052,25.08-33.679,25.504c-0.044,0-0.615,0.016-0.664,0.016
													c-10.236,0-44.492-11.449-45.949-11.939c-1.066-0.359-1.806-1.338-1.849-2.458c-0.049-1.126,0.598-2.159,1.632-2.611l13.543-5.901
													c-3.709-3.753-5.771-4.183-5.771-4.183c-17.759-9.127-43.567-10.378-56.398-10.378c-4.857,0-7.854,0.179-7.854,0.179
													c0.092-1.779-2.029-2.42-5.156-2.42c-8.224,0-23.399,4.46-23.399,4.46c-6.103,2.11-11.422,4.248-16.203,6.391
													c-14.626,6.549-23.557,13.152-29.447,19.298c-4.895,5.107-7.751,9.899-10.106,14.087c-4.003,7.12-2.66,14.196,8.643,25.46
													c4.248,4.237,9.926,9.083,17.264,14.745c0.713,0.549,1.414,1.093,2.159,1.659c0.131,0.098,0.245,0.19,0.37,0.288l-1.169,1.512
													l-0.495,0.636l-1.67,2.148l-1.311,1.697l-3.535,4.569L43.268,203.66c-2.6,3.361-1.985,8.186,1.371,10.786
													c1.403,1.082,3.057,1.61,4.705,1.61c2.295,0,4.569-1.023,6.086-2.981l11.346-14.647l3.508-4.531l1.523-1.964l1.664-2.154
													l0.294-0.381l1.371-1.768c0.136,0.098,0.245,0.185,0.375,0.283c0.767,0.571,1.452,1.093,2.176,1.637
													c9.872,7.446,15.49,12.243,18.612,15.218c3.845,3.671,3.998,4.645,3.998,4.645c2.268,12.352-5.891,27.989-5.891,27.989
													s86.797,0,96.543,0s13.598-5.439,13.598-5.439s6.57-8.159,12.238-16.317c0.968-1.398,3.465-1.98,6.929-1.98
													c3.361,0,7.653,0.56,12.341,1.43c6.695,1.246,14.196,3.138,21.109,5.08c2.736,0.767,5.347,1.528,7.8,2.268
													c8.637,2.594,14.979,4.765,14.979,4.765l0.016-0.103c2.002,0.609,4.085,1.028,6.282,1.028c12.031,0,21.783-9.752,21.783-21.783
													c0-11.514-8.958-20.842-20.271-21.631l0.027-0.152c0,0-6.565-0.381-15.577-0.93c-2.589-0.158-5.374-0.332-8.273-0.511
													c-7.283-0.457-15.213-0.968-22.3-1.458c-3.742-0.261-7.234-0.511-10.269-0.745c-5.869-0.457-10.013-0.848-10.731-1.088
													c-0.027-0.011-0.12-0.065-0.152-0.082c-0.392-0.163-1.294-0.685-2.556-1.469c-1.828-1.131-4.384-2.79-7.511-4.852
													c-0.767-0.506-1.605-1.066-2.426-1.61c-2.317-1.539-4.797-3.198-7.413-4.96c-1.077-0.723-2.159-1.452-3.263-2.197
													c-15.164-10.236-32.08-21.881-32.08-21.881c5.608-2.497,10.389-4.177,14.528-5.243c4.068-1.044,7.517-1.496,10.487-1.496
													c9.856,0,14.506,4.841,19.684,8.436c2.774,1.925,5.684,2.567,8.327,2.567c5.287,0,9.518-2.567,9.518-2.567
													C316.793,101.64,302.347,101.303,301.884,101.303z M145.669,183.84l19.01-16.921c2.252-1.996,5.684-1.795,7.68,0.446
													c1.996,2.246,1.8,5.684-0.446,7.68l-16.845,14.995L145.669,183.84z M148.361,156.041c2.246-1.996,5.684-1.795,7.68,0.446
													c1.996,2.246,1.8,5.684-0.446,7.68l-16.915,15.061l-9.399-6.201L148.361,156.041z M188.23,185.924l-16.78,14.936l-9.399-6.201
													l18.939-16.861c2.252-1.996,5.678-1.795,7.68,0.446C190.672,180.49,190.476,183.927,188.23,185.924z"/>
												<path d="M221.288,129.08l0.005-0.027l0.386-2.703c1.692-0.082,4.406-1.55,7.647-3.845
													c2.616-1.855,5.575-4.253,8.615-6.902c0.044-0.038,0.087-0.076,0.125-0.109c0.609-0.528,1.213-1.055,1.822-1.599
													c-0.218,0.054-0.479,0.109-0.8,0.152c-0.908,0.125-2.312,0.201-4.64,0.201c-0.027,0-0.044,0-0.071,0
													c-8.964,0-26.885-1.061-35.653-1.621c-1.474-0.092-2.66-0.169-3.53-0.228c-0.315-0.022-0.62-0.044-0.843-0.054l-1.974,0.859
													l-8.528,3.72c4.096,1.3,9.013,2.807,13.957,4.232c1.284,0.37,2.545,0.723,3.818,1.077c3.987,1.104,7.816,2.089,11.166,2.828
													c2.562,0.566,4.765,0.957,6.527,1.142c0.696,0.076,1.436,0.169,1.964,0.169v2.692v0.016H221.288z"/>
											</g>
										</g>
									</svg>
								</span>
								<h2 class="logo__title">
									MAWerkz<span>Team</span>
								</h2>
							</a>
						</div>
						<div class="col-xs-8 wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="social social--footer social--footer-home pull-right clearfix">
								<a href="#" class="social__one square">
									<span class="fa fa-twitter"></span>
								</a>
								<a href="#" class="social__one square">
									<span class="fa fa-facebook"></span>
								</a>
								<a href="#" class="social__one square">
									<span class="fa fa-google-plus"></span>
								</a>
								<a href="#" class="social__one square">
									<span class="fa fa-pinterest"></span>
								</a>
								<a href="#" class="social__one square">
									<span class="fa fa-instagram"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div><!--footer-logo-->

			<div class="footer-main-home dark-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-6 wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="2.5s">
							<div class="footer-main-home__block equal-height-item">
								<h2 class="footer-main-home__title">about mawerkz e-commerce</h2>
								<p class="text text--footer-main-home">Our ecommerce is under development. It is expected to be used early in 2019. As a token of our appreciation of the customer support that brought us forward.</p>
								<!-- <a href="about.html" class="btn button button--red button--main">PURCHASE</a> -->
							</div>
						</div>
						<div class="col-md-3 col-xs-6 wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="footer-main-home__block equal-height-item footer-main-home__block--margin">
								<h2 class="footer-main-home__title">Upcoming events</h2>
								<div class="footer-main-home__event clearfix">
									<div class="event-num triangle pull-right">2</div>
									<div class="footer-main-home__event-text">
										<h3><a class="no-decoration" href="http://www.kuala-lumpur.ws/magazine/motor-gp-malaysia.htm">MotoGP Malaysia 2018</a></h3>
										<p class="text text--footer-main-home">3 days Event. Starting November 2nd</p>
									</div>
								</div>
								<div class="footer-main-home__event clearfix">
									<div class="event-num triangle pull-right">4</div>
									<div class="footer-main-home__event-text">
										<h3><a class="no-decoration"  href="https://www.kawasaki.com.my/index.php?cat=21&page=1939">Kawasaki MotoGP Konvoi 2018</a></h3>
										<p class="text text--footer-main-home">1 day Event. Starting November 4 , 7-9am (registration)</p>
									</div>
								</div>
								<div class="footer-main-home__event clearfix">
									<div class="event-num triangle pull-right">6</div>
									<div class="footer-main-home__event-text">
										<h3><a class="no-decoration"  href="http://2018.eicma.org/">EICMA 2018 (MILAN, ITALY)</a></h3>
										<p class="text text--footer-main-home">6 days Event on November 6th 2018</p>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-3 col-xs-6 wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="footer-main-home__block equal-height-item footer-main-home__block--img">
								<h2 class="footer-main-home__title">Flickr Feed</h2>
								<div class="row row--no-padding">
									<div class="col-xs-4">
										<a href="#"><img class="img-responsive" alt="bike" src="media/80x80/footer1.jpg" /></a>
									</div>
									<div class="col-xs-4">
										<a href="#"><img class="img-responsive" alt="bike" src="media/80x80/footer2.jpg" /></a>
									</div>
									<div class="col-xs-4">
										<a href="#"><img class="img-responsive" alt="bike" src="media/80x80/footer3.jpg" /></a>
									</div>
									<div class="col-xs-4">
										<a href="#"><img class="img-responsive" alt="bike" src="media/80x80/footer4.jpg" /></a>
									</div>
									<div class="col-xs-4">
										<a href="#"><img class="img-responsive" alt="bike" src="media/80x80/footer5.jpg" /></a>
									</div>
									<div class="col-xs-4">
										<a href="#"><img class="img-responsive" alt="bike" src="media/80x80/footer6.jpg" /></a>
									</div>
								</div>
							</div>
						</div> -->
						<div class="col-md-3 col-xs-6 wow slideInRight" data-wow-delay="0.7s" data-wow-duration="2.5s">
							<div class="footer-main-home__block equal-height-item">
								<h2 class="footer-main-home__title">Contact info</h2>
								<div class="phone"><br>Tel : +603 4287 4957 <br>H/P : +6019 268 8063 <br> Fax : +603 4292 9989 </div>
								<h5 class="footer-main-home__address-title">MAWerkz Address</h5>
								<p class="text text--footer-main-home">MA TRADING 05/AD Menara Pandan A,<br />
									Jalan Pandan Utama 55100 Kuala Lumpur<br />
									Malaysia</p>
								<div class="email"><span>Email: </span><br>hazriell@gmail.com <br>  matrading08@yahoo.com.my</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--footer-main-home-->

			<div class="footer-bottom-home">
				<div  class="container">
					<div class="copyright wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<p>&copy; Copyrights 2015 by <span>Templines</span> | <span>BikerClub. </span> All rights reserved.</p>
					</div>
				</div>
			</div>
			<a id="to-top" href="#header-top"><i class="fa fa-chevron-up"></i></a>
		</footer><!--home-footer-->
		<!--Main-->   
		<script src="{{asset('bikers_club/js/jquery-1.11.3.min.js')}}"></script>
		<script src="{{asset('bikers_club/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('bikers_club/js/modernizr.custom.js')}}"></script>
		<!--Counter-->
		<script src="{{asset('bikers_club/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('bikers_club/js/waypoints.min.js')}}"></script>
		<script src="{{asset('bikers_club/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('bikers_club/js/classie.js')}}"></script>
		<!--Switcher-->
		<script src="{{asset('bikers_club/assets/switcher/js/switcher.js')}}"></script>		
		<!--Owl Carousel-->
		<script src="{{asset('bikers_club/assets/owl-carousel/owl.carousel.min.js')}}"></script>		
		<!--bxSlider-->
		<script src="{{asset('bikers_club/assets/bxslider/jquery.bxslider.min.js')}}"></script>		
		<!-- jQuery UI Slider -->
		<script src="{{asset('bikers_club/assets/slider/jquery.ui-slider.js')}}"></script>		
		<!--Isotope-->
		<script src="{{asset('bikers_club/assets/isotope/isotope.js')}}"></script>
		<!--Slider-->
		<script src="{{asset('bikers_club/assets/slider/jquery.ui-slider.js')}}"></script>		
		<!--Fancybox-->
		<script src="{{asset('bikers_club/assets/fancybox/jquery.fancybox.pack.js')}}"></script>
		<!--Theme-->
		<script src="{{asset('bikers_club/js/jquery.smooth-scroll.js')}}"></script>
		<script src="{{asset('bikers_club/js/wow.min.js')}}"></script>
		<script src="{{asset('bikers_club/js/jquery.placeholder.min.js')}}"></script>
		<script src="{{asset('bikers_club/js/theme.js')}}"></script>
	</body>
</html>