@extends('main')

@section('title', ' | Servicios')

@section('slider')

@endsection

@section('content')

  <!-- Parallax Banner
    ================================================== -->
    <div class="parallax-banner margin-bottom-20" style="background-image: url({{asset('img/servicios.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <h2 class="parallax-title2">Servicios <span>Nuestra Línea de Negocio</span></h2>
					
                                        
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('home_path')}}">Inicio</a></li>
                            <li>Servicios</li>
                        </ul>
                    </nav>

                </div>
            </div>
	    </div>
     </div> 
	 
<div class="container margin-top-50">
	<div class="row">

		<div class="col-md-6 col-sm-6">
			<!-- Service -->
			<div class="service">
				<img src="{{asset('img/service-01.jpg')}}" alt="" />
				<div class="service-overlay">
					<i class="reneva icon-4"></i>
					<h4>Venta de Acero Figurado</h4>
					<div class="hidden-part">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
						<a href="{{route('aceroFigurado_path')}}">Leer más</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<!-- Service -->
			<div class="service">
				<img src="{{asset('img/service-02.jpg')}}" alt="" />
				<div class="service-overlay">
					<i class="reneva icon-8"></i>
					<h4>Alquiler de Maquinaria y Equipo</h4>
					<div class="hidden-part">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="{{route('maquinariaEquipos_path')}}">Leer más</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<!-- Service -->
			<div class="service">
				<img src="{{asset('img/service-03.jpg')}}" alt="" />
				<div class="service-overlay">
					<i class="reneva icon-39"></i>
					<h4>Producción de Concreto</h4>
					<div class="hidden-part">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="{{route('concreto_path')}}" >Leer más</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<!-- Service -->
			<div class="service">
				<img src="{{asset('img/service-04.jpg')}}" alt="" />
				<div class="service-overlay">
					<i class="reneva icon-14"></i>
					<h4>Materiales de contrucción</h4>
					<div class="hidden-part">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="{{route('materialesConstru_path')}}">Leer más</a>
					</div>
				</div>
			</div>
		</div>

		{{-- <div class="col-md-4 col-sm-6">
			<!-- Service -->
			<div class="service">
				<img src="{{asset('img/service-05.jpg')}}" alt="" />
				<div class="service-overlay">
					<i class="reneva icon-5"></i>
					<h4>Remodeling</h4>
					<div class="hidden-part">
						<p>Upgrade your home with a few finishing touches.</p>
						<a href="single-service-1.html">Read More</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6">
			<!-- Service -->
			<div class="service">
				<img src="images/service-06.jpg" alt="" />
				<div class="service-overlay">
					<i class="reneva icon-30"></i>
					<h4>Electrical</h4>
					<div class="hidden-part">
						<p>We professionally install electric appliances.</p>
						<a href="single-service-1.html">Read More</a>
					</div>
				</div>
			</div>
		</div>
 --}}
	</div>

	{{-- <div class="row">
		<div class="col-md-12">
			<h3 class="headline centered with-border margin-bottom-30 margin-top-30">Just some of our happy clients, <span class="color">join to them!</span></h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			
			<!-- Carousel -->
			<div class="logo-carousel">
			    <div class="item"><img src="images/logo-01.png" alt="" /></div>
			    <div class="item"><img src="images/logo-02.png" alt="" /></div>
			    <div class="item"><img src="images/logo-03.png" alt="" /></div>
			    <div class="item"><img src="images/logo-04.png" alt="" /></div>
			    <div class="item"><img src="images/logo-05.png" alt="" /></div>
			    <div class="item"><img src="images/logo-06.png" alt="" /></div>
			    <div class="item"><img src="images/logo-07.png" alt="" /></div>
			</div>

		</div>
	</div> --}}

</div>

<section>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-banner">				
                        <div class="info-content">
                            <h3>Su Productividad es Nuestro Objetivo</h3>            
                        </div>

                        <a href="#small-dialog" class=" button border popup-with-zoom-anim ">Solicitar Servicio</a>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>

   </div>
</section>

    
@endsection

@section('scritpts')
       
@endsection