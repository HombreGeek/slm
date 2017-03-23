<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{{ config('app.locale') }}"><!--<![endif]-->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <title>Reneva</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/colors/blue.css') }}" id="colors" />

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel</title>
    
</head>
<body>
    <!-- Wrapper -->
<div id="wrapper">

<!-- Header
================================================== -->

<div class="container">

	<div class="row">
		<div class="header">

			<div class="col-md-3 col-sm-12">
				<div id="logo">
					<a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
				</div>
			</div>

			<div class="col-md-9 col-sm-12">
				<ul class="header-widget">
					<li>
						<i class="sl sl-icon-call-in"></i>
						<div class="widget-content">
							<span class="title">¿Preguntas?</span>
							<span class="data">+57 (095) 5898143 </span>
						</div>
					</li>

					<li>
						<i class="sl sl-icon-location"></i>
						<div class="widget-content">
							<span class="title">Nuestra Oficina</span>
							<span class="data">Cra.23 N°13B-46</span>
							<span class="data">Barrio Garupal</span>
							<span class="data">Valledupar - Cesar</span>
						</div>
					</li>

					<li class="with-btn"><a href="contact.html" class="button border medium">Solicitar Servicio</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>


<!-- Navigation
================================================== -->
<div class="container">
	<div class="row">
	<div class="col-md-12">

		<!-- Mobile Navigation -->
		<div class="menu-responsive">
			<i class="fa fa-reorder menu-trigger"></i>
			<i class="fa fa-search search-trigger"></i>
	      	<form action="#" method="get" class="responsive-search" />
	      		<input type="text" onblur="if(this.value=='')this.value='Para buscar, escribe y pulsa enter';" onfocus="if(this.value=='Para buscar, escribe y pulsa enter')this.value='';" value="Para buscar, escribe y pulsa enter" />
	      	</form>
		</div>
		
		<!-- Main Navigation -->
		<nav id="navigation">

			<!-- Search Form -->
			<div class="search-container">
		      	<form action="#" method="get" />
		      		<input type="text" name="s" id="s" onblur="if(this.value=='')this.value='Para buscar, escribe y pulsa enter';" onfocus="if(this.value=='Para buscar, escribe y pulsa enter')this.value='';" value="Para buscar, escribe y pulsa enter" />
		      	</form>
		      	<div class="close-search"><a class="fa fa-times" href="#"></a></div>
			</div>

			<ul class="menu" id="responsive">

				<li class="dropdown">
					<a href="index.html" class="current">Inicio</a>
					<ul>
						<li><a href="index.html">Home 1</a></li>
						<li><a href="index-2.html">Home 2</a></li>
						<li><a href="index-3.html">Home 3</a></li>
						<li><a href="index-4.html">Home 4</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Somos</a>
					<div class="mega two-cols">

						<div class="mega-section">
							<ul>
								<li><span class="mega-headline">Elements</span></li>
								<li><a href="shortcodes.html">Shortcodes</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="pricing-tables.html">Pricing Tables</a></li>
								<li><a href="icons.html">Icons</a></li>
							</ul>
						</div>

						<div class="mega-section">
							<ul>
								<li><span class="mega-headline">Example Pages</span></li>
								<li><a href="all-projects-full-width.html">Projects</a></li>
								<li><a href="services-1.html">Services List</a></li>
								<li><a href="shop.html">Shop</a></li>
								<li><a href="contact.html">Contactenos</a></li>
							</ul>
						</div>

					</div>
				</li>
				

				<li class="dropdown">
					<a href="#">Servicios</a>
					<ul>
						<li><a href="services-1.html">Services List 1</a></li>
						<li><a href="services-2.html">Services List 2</a></li>
						<li><a href="single-service-1.html">Single Service Page 1</a></li>
						<li><a href="single-service-2.html">Single Service Page 2</a></li>
					</ul>
				</li>

				
				<li class="dropdown">
					<a href="#">Proyectos</a>
					<ul>
						<li><a href="project-categories.html">Categories</a></li>
						<li><a href="all-projects.html">All Projects</a></li>
						<li><a href="all-projects-full-width.html">All Projects Full-Width</a></li>
						<li><a href="#">Single Project Page</a>
							<ul>
								<li><a href="single-project-content-right.html">Content Right</a></li>
								<li><a href="single-project-content-left.html">Content Left</a></li>
								<li><a href="single-project-content-bottom.html">Content Bottom With Slider</a></li>
								<li><a href="single-project-before-after.html">Before & After Slider</a></li>
								<li><a href="single-project-photo-grid.html">Photo Grid</a></li>
							</ul>
						</li>
						<li><a href="all-projects-before-after.html">Before & After</a></li>
						<li><a href="single-category.html">Single Category</a></li>
						<li><a href="single-category-full-width.html">Single Category Full-Width</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#">Shop</a>
					<ul>
						<li><a href="shop.html">Shop</a></li>
						<li><a href="shop-product-page.html">Product Page</a></li>
						<li><a href="shopping-cart.html">Cart</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#">Blog</a>
					<ul>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-post-page.html">Post Page</a></li>
					</ul>
				</li>

				<li><a href="contact.html">Contáctenos</a></li>


				<!-- Search Icon-->		
				<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>

				<!-- Cart Icon -->
				<li class="cart-icon"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i><span class="cart-counter">1</span></a></li>

			</ul>
		</nav>
	</div>
	</div>
</div>
<div class="clearfix"></div>


<!-- Slider
================================================== -->

<!-- Revolution Slider -->
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

<!-- 5.0.7 auto mode -->
	<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
		<ul>

			<!-- Slide  -->
			<li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

				<!-- Background -->
				<img src="{{ asset('img/slide-01.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

				<!-- Caption-->
				<div class="tp-caption tp-shape tp-shapewrapper custom-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="520" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

					<!-- Caption Content -->
					<div class="caption-title">Maquinaria Pesada</div>
					<div class="caption-text">We specialize in a number of framing, trim and finish carpentry services. Our goal is complete satisfaction.</div>
					<a href="contact.html" class="button medium">Solicitar Servicio</a>
				</div>
			</li>

			<!-- Slide  -->
			<li data-index="rs-2" data-transition="fadefrombottom" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

				<!-- Background -->
				<img src="{{ asset('img/slide-02.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

				<!-- Caption-->
				<div class="tp-caption tp-shape tp-shapewrapper custom-caption tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="520" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

					<!-- Caption Content -->
					<div class="caption-title">Concreto</div>
					<div class="caption-text"> A new coat of paint or is easy ways to refresh your home. We know what makes a great paint job.</div>
					<a href="contact.html" class="button medium">Solicitar servicio</a>
				</div>
			</li>

			<!-- Slide  -->
			<li data-index="rs-3" data-transition="fadefromtop" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

				<!-- Background -->
				<img src="{{ asset('img/slide-03.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

				<!-- Caption-->
				<div class="tp-caption tp-shape tp-shapewrapper custom-caption tp-resizeme rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="520" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

					<!-- Caption Content -->
					<div class="caption-title">Acero Figurado</div>
					<div class="caption-text">Highly experienced in residential and commercial tiling, bathroom renevations, waterproofing, silicone work and soundproofing.</div>
					<a href="contact.html" class="button medium">Solicitar servicio</a>
				</div>
			</li>


		</ul>
		<div class="tp-static-layers"></div>

	</div>
</div>
<!-- Revolution Slider / End -->


<!-- Content
================================================== -->

<!-- Featured Services -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h3 class="headline centered">Featured Services</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-6">
			<!-- Service -->
			<a href="single-service-1.html" class="featured-service">
				<i class="reneva icon-37"></i>
				<h4>Painting</h4>
				<p>A fresh coat of paint can breathe life into any room.</p>
			</a>
		</div>

		<div class="col-md-4 col-sm-6">
			<!-- Service -->
			<a href="single-service-2.html" class="featured-service">
				<i class="reneva icon-7"></i>
				<h4>Repair</h4>
				<p>If something is broken in your home, we can fix it.</p>
			</a>
		</div>

		<div class="col-md-4 col-sm-6">
			<!-- Service -->
			<a href="single-service-1.html" class="featured-service">
				<i class="reneva icon-12"></i>
				<h4>Carpentry</h4>
				<p>We build, construct and install all you need.</p>
			</a>
		</div>

		<div class="col-md-4 col-sm-6">
			<!-- Service -->
			<a href="single-service-2.html" class="featured-service">
				<i class="reneva icon-21"></i>
				<h4>Plumbing</h4>
				<p>Toilet replacement, pipe insulation and more.</p>
			</a>
		</div>

		<div class="col-md-4 col-sm-6">
			<!-- Service -->
			<a href="single-service-1.html" class="featured-service">
				<i class="reneva icon-5"></i>
				<h4>Remodeling</h4>
				<p>Upgrade your home with a few finishing touches.</p>
			</a>
		</div>

		<div class="col-md-4 col-sm-6">
			<!-- Service -->
			<a href="single-service-2.html" class="featured-service">
				<i class="reneva icon-30"></i>
				<h4>Electrical</h4>
				<p>We professionally install electric appliances.</p>
			</a>
		</div>
	</div>

</div>
<!-- Featured Services / End -->


<!-- Latest Projects -->
<div class="full-width projects-container">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<!-- Headline -->
				<h3 class="headline centered">Our Latest Projects</h3>

				<!-- Filters -->
				<div id="filters">
					<ul class="option-set alt">
						<li><a href="#filter" class="selected" data-filter="*">All</a></li>
						<li><a href="#filter" data-filter=".kitchens">Kitchens</a></li>
						<li><a href="#filter" data-filter=".bathrooms">Bathrooms</a></li>
						<li><a href="#filter" data-filter=".bedrooms">Bedrooms</a></li>
						<li><a href="#filter" data-filter=".living-rooms">Living Rooms</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
	</div>
	
	<!-- Projects -->
	<div class="full-width projects">
		
		<!-- Item -->
		<a href="single-project-content-right.html" class="kitchens clickable">
			<img src="{{asset('img/latest-project-01.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Kitchenette</h4>
					<span>March 2016</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>

		<!-- Item -->
		<a href="single-project-before-after.html" class="bathrooms clickable">
			<img src="{{asset('img/latest-project-02.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Bathroom</h4>
					<span>February 2016</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>

		<!-- Item -->
		<a href="single-project-content-right.html" class="kitchens clickable">
			<img src="{{asset('img/latest-project-03.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Kitchen</h4>
					<span>January 2016</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>


		<!-- Item -->
		<a href="single-project-before-after.html" class="bathrooms clickable">
			<img src="{{asset('img/latest-project-04.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Bathroom</h4>
					<span>December 2016</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>

		<!-- Item -->
		<a href="single-project-content-right.html" class="bedrooms clickable">
			<img src="{{asset('img/latest-project-05.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Living Room</h4>
					<span>November 2015</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>

		<!-- Item -->
		<a href="single-project-content-bottom.html" class="bedrooms living-rooms clickable">
			<img src="{{asset('img/latest-project-06.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Living Room</h4>
					<span>November 2015</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>

		<!-- Item -->
		<a href="single-project-content-right.html" class="living-rooms clickable">
			<img src="{{asset('img/latest-project-07.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Living Room</h4>
					<span>September 2015</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>

		<!-- Item -->
		<a href="single-project-content-bottom.html" class="living-rooms kitchens clickable">
			<img src="{{asset('img/latest-project-08.jpg')}}" alt="" />
			<div class="overlay">
				<div class="overlay-content">
					<h4>Kitchenette</h4>
					<span>September 2015</span>
				</div>
			</div>
			<div class="plus-icon"></div>
		</a>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<a href="all-projects.html" class="button medium border">View All Projects</a>
			</div>
		</div>
	</div>

</div>
<div class="clearfix"></div>
<!-- Latest Projects / End -->


<!-- Stages -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h3 class="headline centered with-border margin-bottom-0">All Stages of The Renovation</h3>
		</div>
	</div>

	<div class="row">

		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-18"></i>
				<span>Initial Stage</span>
				<h4>Customer Idea</h4>
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>
		
		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-44"></i>
				<span>Second Stage</span>
				<h4>Free Quotation</h4>
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>
		
		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-45"></i>
				<span>Third Stage</span>
				<h4>Cunstruction</h4>
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-16"></i>
				<span>Final Stage</span>
				<h4>Warranty Beyond</h4>
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>

	</div>

</div>
<!-- Stages / End -->


<!-- Testimonials -->
<div id="testimonials">
	<!-- Slider -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="testimonials-slider">
					  <ul class="slides">
					    <li>
					      <p>I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.
					      <span>Collis Ta’eed, Envato</span></p>
					    </li>

					    <li>
					      <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat. Donec dapibus efficitur arcu, a rhoncus lectus egestas elementum.
					      <span>John Doe</span></p>
					    </li>
					    
					    <li>
					      <p>Maecenas congue sed massa et porttitor. Duis placerat commodo ex, ut faucibus est facilisis ac. Donec eleifend arcu sed sem posuere aliquet. Etiam lorem metus, suscipit vel tortor vitae.
					      <span>Tom Smith</span></p>
					    </li>

					  </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonials / End -->


<!-- Logo Carousel -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="headline centered with-border margin-bottom-30">Just some of our happy clients</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			
			<!-- Carousel -->
			<div class="logo-carousel">
			    <div class="item"><img src="{{asset('img/logo-01.png')}}" alt="" /></div>
			    <div class="item"><img src="{{asset('img/logo-02.png')}}" alt="" /></div>
			    <div class="item"><img src="{{asset('img/logo-03.png')}}" alt="" /></div>
			    <div class="item"><img src="{{asset('img/logo-04.png')}}" alt="" /></div>
			    <div class="item"><img src="{{asset('img/logo-05.png')}}" alt="" /></div>
			    <div class="item"><img src="{{asset('img/logo-06.png')}}" alt="" /></div>
			    <div class="item"><img src="{{asset('img/logo-07.png')}}" alt="" /></div>
			</div>

		</div>
	</div>
</div>
<!-- Logo Carousel / End -->



<!-- Footer
================================================== -->
<div class="margin-top-35"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<h4>About</h4>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
				<a href="#" class="button social-btn"><i class="fa fa-facebook-official"></i> Like Us on Facebook</a>
			</div>

			<div class="col-md-4  col-sm-6">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">About Us</a></li>
					<li><a href="#">Press Releases</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Projects</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">In the News</a></li>
					<li><a href="#">Our Blog</a></li>
					<li><a href="#">Testimonials</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br />
					Phone: <span>(123) 123-456 </span><br />
					Fax: <span>(123) 123-456</span> <br />
					E-Mail:<span> office@example.com </span><br />
				</div>
			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">©  Copyright 2016 by <a href="#">Reneva</a>. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hoverIntent.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.twentytwenty.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.event.move.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.photogrid.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.pricefilter.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.stacktable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.contact-form.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.jpanelmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


<!-- REVOLUTION SLIDER SCRIPT -->
<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_4_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_4_1");
		}else{
			revapi4 = tpj("#rev_slider_4_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"scripts/",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"on",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"zeus",
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'<div class="tp-title-wrap"></div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:00,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:00,
							v_offset:0
						}
					}
					,
					bullets: {
				enable:true,
				hide_onmobile:true,
				hide_under:600,
				style:"hermes",
				hide_onleave:true,
				hide_delay:200,
				hide_delay_mobile:1200,
				direction:"horizontal",
				h_align:"center",
				v_align:"bottom",
				h_offset:0,
				v_offset:32,
				space:5,
				tmp:''
					}
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%"
			},
			responsiveLevels:[1200,992,768,480],
			visibilityLevels:[1200,992,768,480],
			gridwidth:[1180,1024,778,480],
			gridheight:[590,500,400,300],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
		}
	});	/*ready*/
</script>	


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>





</div>
<!-- Wrapper / End -->




</body>
</html>
