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
	<div class="row sticky-wrapper ">

		<div class="col-md-3 col-sm-12">

			<div class="sticky">
				<!-- Button with popup -->
				<a href="#small-dialog" class="sidebar-btn popup-with-zoom-anim">
					<i class="sl sl-icon-envolope"></i>
					<span>Contáctenos</span>
				</a>
				
				<!-- popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">

					<div class="small-dialog-headline">
						<h4>Solicitar Servicio</h4>
					</div>

					<div class="small-dialog-content">
						<div id="contact-message"></div>

						<form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on" />

							<div>
								<input name="name" type="text" id="name" placeholder="Su Nombre" required="required" />
							</div>
							<div>
								<input name="email" type="email" id="email" placeholder="Correo Electrónico" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>

							<div>
								<input name="phone" type="tel" id="phone" size="30" placeholder="Teléfono (opcional)" />
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
									<option value="Other" />Otros
								</select>
							</div>

							<div>
								<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Mensaje" spellcheck="true" required="required"></textarea>
							</div>

							<div class="divider"></div>

							<input type="submit" class="submit" id="submit" value="Enviar" />

						</form>
					</div>
				</div>


				<!-- text box -->
				<div class="sidebar-textbox">
					<h4>Nuestra Oficina</h4>
					<span class="margin-bottom-10">Cra.23 N°13B-46 <br />Barrio Garupal<br />Valledupar - Cesar</span><br />
					Teléfono: <span>+57 (095) 5898143</span> <br />
					E-Mail: <span>info@slmcontruccionsa.com</span> <br />
				</div>
                <!-- social networks -->
                <ul class="social-icons margin-bottom-30">
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>                    
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    <div class="clearfix"></div>
			    </ul>

			</div>
		</div>
		

		<!-- Content -->
		<div class="col-md-9 col-sm-12 sticky-wrapper extra-gutter-left">

			<div class="col-md-12 margin-bottom-40">

                <h2 class="margin-bottom-40" >¿Quiénes Somos?</h2>
                <p><img class="img-peq" src="{{asset('img/smart-min.png')}}" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt totam illum temporibus velit nesciunt nisi suscipit quod rerum, at. Ipsum odio adipisci dignissimos repellendus neque itaque rem minus fuga laboriosam.</p>
            </div>
            

            
    
        <div class="col-md-6">
            <h3 class="headline2 with-border ">MISIÓN</h3>
            <p>Somos una organización de alquiler de equipos, producción, comercialización y venta de insumos de calidad para el sector de la construcción, satisfaciendo las expectativas de nuestros clientes, comprometidos con el medio ambiente, innovando en el desarrollo tecnológico y generando valor agregado y sostenible para los socios, empleados y la sociedad </p>
        </div>

        <div class="col-md-6">
            <h3 class="headline2 with-border">VISIÓN</h3>
             <p>En el 2018, <mark class="color">SLM CONSTRUCCIÓN S.A</mark> incrementara sus VENTAS en un 20% promedio año, crecimiento proveniente del desarrollo de sus dos nuevas líneas de negocios y de su nueva  estructura organizacional. 
             Seremos identificados como la empresa del sector mas exitosa que busca consolidarse como modelo en la región Caribe en el mercado de servicios integrales para la industria de la construcción, generando un crecimiento del 18% en sus utilidades y desarrollando  siempre el mejoramiento continuo y la satisfacción de nuestros clientes, empleados y socios.</p>
        </div>
        <div class="col-md-12">
                <h4 class="headline with-border ">¿Por qué Elegirnos?</h4>
                <ul class="list-3 color">
						<li>Proporcionamos a nuestros clientes una atención integral, que satisface sus necesidades en sus proyectos, ya que conocemos los factores que hacen posible tal integración de nuestros asesores con el cliente. Buscamos un desarrollo profesional y personal</li>
						<li>Fomentamos una actitud positiva en la búsqueda de la excelencia de nuestros servicios, escuchamos a nuestros clientes para entender sus necesidad y requerimientos.</li>
						<li>Nuestros asesores presentaran las mejores opciones disponibles, sea producto o servicio, que responda a sus necesidades y deseos.</li>
					
					</ul>
            </div> <!-- porque elegirnos / End -->
      


			</div>



		</div>

	</div>
</div>

<section>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-banner">				
                        <div class="info-content">
                            <h3>Su Productividad es Nuestro Objetivo</h3>            
                        </div>

                        <a href="my-account.html" class="button border">Solicitar Servicio</a>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>

   </div>
</section>

    
@endsection

@section('scritpts')
       
@endsection