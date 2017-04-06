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
			<div class="row">
				<div class="col-md-12">

					<!-- Filters -->
					<div id="filters">
						<ul class="option-set margin-bottom-40">
							<li><a href="#filter" class="selected" data-filter="*">Todos</a></li>
							<li><a href="#filter" data-filter=".CC">Centro Comercial</a></li>
							<li><a href="#filter" data-filter=".CR">Conjunto Residencial</a></li>
							<li><a href="#filter" data-filter=".edificio">Edificios</a></li>
							<li><a href="#filter" data-filter=".carreteras">Carreteras</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>

		<div class="row">

			<!-- Projects -->
			<div class="projects isotope-wrapper">
				
				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 CC">
					<a href="{{route('nameProject_path')}}">
						<img src="{{asset('img/latest-project-01.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Kitchenette</h4>
								<span>Marzo 2016</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 CR">
					<a href="single-project-before-after.html">
						<img src="{{asset('img/latest-project-02.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Bathroom</h4>
								<span>Febrero 2016</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 CC">
					<a href="single-project-content-right.html">
						<img src="{{asset('img/latest-project-03.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Kitchen</h4>
								<span>Enero 2016</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 CR">
					<a href="single-project-before-after.html">
						<img src="{{asset('img/latest-project-04.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Bathroom</h4>
								<span>Diciembre 2016</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 edificio">
					<a href="single-project-content-right.html">
						<img src="{{asset('img/latest-project-05.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Living Room</h4>
								<span>Noviembre 2015</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 edificio carreteras">
					<a href="single-project-content-bottom.html">
						<img src="{{asset('img/latest-project-06.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Living Room</h4>
								<span>Noviembre 2015</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 carreteras">
					<a href="single-project-content-right.html">
						<img src="{{asset('img/latest-project-07.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Living Roomn</h4>
								<span>Septiembre 2015</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 CC carreteras">
					<a href="single-project-content-bottom.html">
						<img src="{{asset('img/latest-project-08.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Kitchenette</h4>
								<span>Septiembre 2015</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
				</div>

				<!-- Item -->
				<div class="isotope-item col-md-4 col-sm-6 CC">
					<a href="single-project-content-right.html">
						<img src="{{asset('img/latest-project-09.jpg')}}" alt="" />
						<div class="overlay">
							<div class="overlay-content">
								<h4>Kitchen</h4>
								<span>Agosto 2015</span>
							</div>
						</div>
						<div class="plus-icon"></div>
					</a>
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