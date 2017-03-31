<div class="container">

	<div class="row">
		<div class="header">

			<div class="col-md-3 col-sm-12">
				<div id="logo">
					<a href="{{ route('home_path')}}"><img src="{{ asset('img/logo.png') }}" alt="SLM Contrucción S.A." /></a>
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

					<li class="with-btn"><a href="#small-dialog" class=" button border  popup-with-zoom-anim ">Solicitar Servicio</a></li>
					<!--Formulario para hacer solicitud de servicio -->
				    @include('main_partials._solicitar-servicio-form')
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>