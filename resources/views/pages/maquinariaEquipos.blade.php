@extends('main')

@section('title', ' | Alquiler Maquinarias y Equipos para la Construcción')

@section('slider')

@endsection

@section('content')

  <!-- Parallax Banner
    ================================================== -->
    <div class="parallax-banner margin-bottom-20" style="background-image: url({{asset('img/maquinaria-equipos-servicio.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <h2 class="parallax-title2">Alquiler<span>Maquinarias y Equipos para la construcción</span></h2>
					
                                        
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('home_path')}}">Inicio</a></li>
                            <li><a href="{{route('services_path')}}">Servicios</a></li>
							<li>Maquinaria y Equipos</li>
                        </ul>
                    </nav>

                </div>
            </div>
	    </div>
     </div> 
	 
 <!-- Content
    ================================================== -->

<section>
	<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-md-3">
			<ul class="services-list sticky">
				<li><a href="{{route('services_path')}}">Todos los Servicios</a></li>
				<li><a href="{{route('aceroFigurado_path')}}">Acero Figurado</a></li>
				<li><a href="{{route('maquinariaEquipos_path')}}" class="{{ Request::is('servicios/maquinaria-equipos-construccion') ? "active" : "" }}">Maquinaria y Equipos</a></li><li><a href="{{route('concreto_path')}}" >Producción de Concreto</a></li>
				<li><a href="{{route('materialesConstru_path')}}">Material de Construcción</a></li>
			</ul>
		</div>
		

		<!-- Content -->
		<div class="col-md-9 col-sm-12 extra-gutter-left">

			<div class="row">
				<div class="col-md-6">

					<a href="{{asset('img/maquinaria-equipos-servicio01.jpg')}}" class="img-hover mfp-gallery margin-bottom-10"><img src="{{asset('img/maquinaria-equipos-servicio01.jpg')}}" alt="" /></a>
					<h4 class="headline with-border margin-bottom-20">Somos Especialistas en</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, saepe, temporibus! Neque quidem quo delectus, tempore. Odit maiores alias temporibus, inventore tempore.  </p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores doloremque, molestias tempora eveniet consequatur, quibusdam sapiente sed porro veritatis</p>
				</div>

				<div class="col-md-6">
					<a href="{{asset('img/maquinaria-equipos-servicio02.jpg')}}" class="img-hover mfp-gallery margin-bottom-10"><img src="{{asset('img/maquinaria-equipos-servicio02.jpg')}}" alt="" /></a>
					<h4 class="headline with-border margin-bottom-20">Nuestra garantía de servicio</h4>
					<ul class="list-1 alt">
						<li>Custom home framing,</li>
						<li>Interior and exterior door and window installation</li>
						<li>Interior and exterior trim installation or replacement</li>
						<li>Base trim and crown molding installation</li>
						<li>Beadboard and wainscoting installation</li>
					</ul>
				</div>

			</div>

			{{-- <!-- Table with prices -->
			<h3 class="headline small with-border margin-top-30">Pricing</h3>
			<table class="basic-table">

				<tr>
					<th>Item</th>
					<th>Price</th>
				</tr>

				<tr>
					<td>Kitchen Cabinet (Full Height)</td>
					<td>$240/ft</td>
				</tr>

				<tr>
					<td>Kitchen Cabinet (Low Height)</td>
					<td>$130/ft</td>
				</tr>

				<tr>
					<td>Wardrobe – Swing Door</td>
					<td>$240/ft</td>
				</tr>

				<tr>
					<td>Wardrobe – Normal Sliding Door</td>
					<td>$255/ft</td>
				</tr>

			</table> --}}

		</div>

	</div>
</div>

</section>

<section class="with-border margin-top-30">
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
</div>
</section>

    
@endsection

@section('scritpts')
       
@endsection