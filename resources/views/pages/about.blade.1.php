@extends('main')

@section('title', ' | Somos')

@section('slider')

@endsection

@section('content')

  <!-- Parallax Banner
    ================================================== -->
    <div class="parallax-banner margin-bottom-20" style="background-image: url({{asset('img/parallax-img.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <h2 class="parallax-title2">Somos</h2>
                    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('home_path')}}">Inicio</a></li>
                            <li>Somos</li>
                        </ul>
                    </nav>

                </div>
            </div>
	    </div>
     </div> 


     <div class="container">
         <div class="row">
            <div class="col-md-8">
                <h1>¿Quiénes Somos?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt totam illum temporibus velit nesciunt nisi suscipit quod rerum, at. Ipsum odio adipisci dignissimos repellendus neque itaque rem minus fuga laboriosam.</p>
            </div>
            <div class="col-md-4">
            <h4 class="headline with-border margin-bottom-30">¿Por qué Elegirnos?</h4>
                <!-- Accordion -->
				<div class="accordion">

					<!-- Section 1 -->
					<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>Atención Integral</h3>
					<div>
						<p>Proporcionamos a nuestros clientes una atención integral, que satisface sus necesidades en sus proyectos, ya que conocemos los factores que hacen posible tal integración de nuestros asesores con el cliente. Buscamos un desarrollo profesional y personal</p>
					</div>

					<!-- Section 2 -->
					<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>Actitud Positiva</h3>
					<div>
						<p>Fomentamos una actitud positiva en la búsqueda de la excelencia de nuestros servicios, escuchamos a nuestros clientes para entender sus necesidad y requerimientos. </p>
					</div>
                    <!-- Section 3 -->
                    <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>Las Mejores Opciones</h3>
					<div>
						<p>Nuestros asesores presentaran las mejores opciones disponibles, sea producto o servicio, que responda a sus necesidades y deseos.</p>
					</div>

				</div>
				<!-- Accordion / End -->

                
            </div>
         
         </div>
     </div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="headline2 with-border">MISIÓN</h3>
            <p>Somos una organización de alquiler de equipos, producción, comercialización y venta de insumos de calidad para el sector de la construcción, satisfaciendo las expectativas de nuestros clientes, comprometidos con el medio ambiente, innovando en el desarrollo tecnológico y generando valor agregado y sostenible para los socios, empleados y la sociedad </p>
        </div>

        <div class="col-md-6">
            <h3 class="headline2 with-border">VISIÓN</h3>
             <p>En el 2018, <mark class="color">SLM CONSTRUCCIÓN S.A</mark> incrementara sus VENTAS en un 20% promedio año, crecimiento proveniente del desarrollo de sus dos nuevas líneas de negocios y de su nueva  estructura organizacional. 
             Seremos identificados como la empresa del sector mas exitosa que busca consolidarse como modelo en la región Caribe en el mercado de servicios integrales para la industria de la construcción, generando un crecimiento del 18% en sus utilidades y desarrollando  siempre el mejoramiento continuo y la satisfacción de nuestros clientes, empleados y socios.</p>
        </div>
        </div>
    </div>

</div>
   
    <!-- Stages -->
<div class="container">

	<!-- Info Box
	================================================== -->
	<div class="row">
		<div class="col-md-12">
				<h4 class="headline with-border margin-bottom-30 margin-top-50">Su Productividad es nuestro Objetivo</h4>

			<div class="info-banner">
				<div class="info-content">
                    <h3>Somos la Solución Perfecta para su Negocio</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, excepturi mollitia saepe repudiandae, id laboriosam accusamus, harum inventore reprehenderit facere non, eius soluta.</p>
                </div>
                    <a href="my-account.html" class="button border">Solicitar Servicio</a>
                    <div class="clearfix"></div>
			</div>

		</div>
	</div><!-- Info box / End -->

</div><!-- Stages / End -->
  {{-- </div> --}}
    
@endsection

@section('scritpts')
       
@endsection