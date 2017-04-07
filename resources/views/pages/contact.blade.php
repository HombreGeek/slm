@extends('main')

@section('title', ' | Nuestros Proyectos')

@section('slider')

@endsection

@section('content')

  <!-- Parallax Banner
    ================================================== -->
<section>
	<div class="parallax-banner margin-bottom-20" style="background-image: url({{asset('img/recepcion-slm-contruccion.jpg')}})">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">

						<h2 class="parallax-title2">Contactenos <span>Con todo gusto le atenderemos</span></h2>
						
											
						<!-- Breadcrumbs -->
						<nav id="breadcrumbs">
							<ul>
								<li><a href="{{route('home_path')}}">Inicio</a></li>
								<li>Contáctenos</li>
							</ul>
						</nav>

					</div>
				</div>
			</div>
	</div> 
</section>	 
<section><!-- Content -->
	<div class="container margin-top-50"><!-- Container / Start -->


	<div class="row">
		<div class="col-md-12">

			<!-- Google Maps -->
			<section class="google-map-container">
				<div id="googlemaps" class="google-map google-map-full"></div>
			</section>
			<!-- Google Maps / End -->
		</div>
	</div>

	<div class="row">

		<!-- Contact Details -->
		<div class="col-md-3">
			<!-- text box -->
			<div class="sidebar-textbox">
				<h4>Nuestra Oficina</h4>
				<span class="margin-bottom-10">Cra.23 N°13B-46 <br />Barrio Garupal,<br /> Valledupar - Cesar</span> <br />
				Teléfono: <span>+57 (095) 5898143 </span> <br />
				E-Mail: <span>info@slmconstruccionsa.com</span> <br />
			</div>

			<ul class="social-icons margin-bottom-30">
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				<div class="clearfix"></div>
			</ul>
		</div>

		<!-- Contact Form -->
		<div class="col-md-9">

			<section id="contact">
				<h4 class="headline with-border margin-top-10 margin-bottom-35">Póngase en contacto</h4>

				<div id="contact-message"></div> 

					<form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on" />

					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Su Nombre y Apellido" required="required" />
							</div>
							
							<div>
								<input name="email" type="email" id="email" placeholder="Su E-mail" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
						
						<div class="col-md-6">
							<div>
								<input name="phone" type="tel" id="phone" size="30" placeholder="Su teléfono (opcional)" />
							</div>

							<div>
								<select name="subject" id="subject" required="required">
									<option value="" />Seleccione el Asunto
									<option value="Painting" />Painting
									<option value="Repair" />Repair
									<option value="Carpentry" />Carpentry
									<option value="Plumbing" />Plumbing
									<option value="Remodeling" />Remodeling
									<option value="Electrical" />Electrical
									<option value="Other" />Otro
								</select>
							</div>
						</div>
					</div>

					<div>
						<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Mensaje" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit" class="submit" id="submit" value="Enviar" />

					</form>
			</section>
		</div>

	</div>



		
	</div>
</section><!-- End Content -->



    
@endsection

@section('scritpts')
       <!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="{{asset('js/jquery.gmaps.min.js')}}"></script>

<script type="text/javascript">
	(function($){
		$(document).ready(function(){

			$('#googlemaps').gMap({
				maptype: 'ROADMAP',
				scrollwheel: false,
				zoom: 16,
				markers: [
					{
						address: 'Cra 23 #13b-240, Valledupar, Cesar, Colombia', // Your Adress Here
						html: '<strong>SLM Construcción SAS</strong><br>Cra.23 N°13B-46 </br>Barrio Garupal, Valledupar - Cesar',
						popup: true,
					}
				],
			});

		   });

	})(this.jQuery);
</script>

@endsection