@extends('main')

@section('title', ' | Nuestros Proyectos')

@section('slider')

@endsection

@section('content')

  <!-- Parallax Banner
    ================================================== -->
<section>
	<div class="parallax-banner margin-bottom-20" style="background-image: url({{asset('img/nuestros-proyectos-participacion.jpg')}})">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">

						<h2 class="parallax-title2">Proyectos <span>Participación en Obras</span></h2>
						
											
						<!-- Breadcrumbs -->
						<nav id="breadcrumbs">
							<ul>
								<li><a href="{{route('home_path')}}">Inicio</a></li>
								<li>Nuestros Proyectos</li>
							</ul>
						</nav>

					</div>
				</div>
			</div>
	</div> 
</section>	 
<section><!-- Content -->
	<div class="container margin-top-50">
				<div class="row sticky-wrapper">

				<!-- Photos -->
				<div class="col-md-8">
					<div class="before-after">
						<img src="{{asset('img/project-01-before.jpg')}}" alt="" />
						<img src="{{asset('img/project-01-after.jpg')}}" alt="" />
					</div>
					
					<div class="project-photos">
						<a href="{{asset('img/single-project-02a.jpg')}}" class="mfp-gallery img-hover" title="Nombre descriptivo"><img src="{{asset('img/single-project-02.jpg')}}" alt="" /></a>
					</div>
					<div class="project-photos">
						<a href="{{asset('img/single-project-01a.jpg')}}" class="mfp-gallery img-hover" title="Nombre descriptivo"><img src="{{asset('img/single-project-01.jpg')}}" alt="" /></a>
					</div>
					
					
				</div>

				<!-- Content -->
				<div class="col-md-4">
					<div class="project-details sticky">
						<h4 class="headline with-border">Nombre del Proyecto</h4>
						<p>Nulla congue magna varius pellentesque.Entesque habitant morbi tristique senectus lorem et netus et malesuada fames ac turpis egestas.</p>
						<p>Vestibulum quis ipsum ipsum. Maecenas ullamcorper nibh sed justo iaculis lacinia. Nam eu arcu facilisis, condimentum urna et, tempor erat.</p>

						<ul class="details">
							<li><span>Fecha:</span> 11 Enero 2016</li>
							<li><span>Lugar:</span> Valledupar</li>
							<li><span>Categoria:</span> <a href="#">Carreteras</a>, <a href="#">Urbanización</a></li>
						</ul>

						<ul class="project-nav">
							<li><a href="#" class="button border"><i class="fa fa-long-arrow-left"></i> Anterior</a></li>
							<li><a href="#" class="button border">Siguiente <i class="fa fa-long-arrow-right"></i></a></li>
						</ul>

					</div>
				</div>

		</div>
	</div>

		
	</div>
</section><!-- End Content -->

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