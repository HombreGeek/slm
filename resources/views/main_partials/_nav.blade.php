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
					<a href="{{ route('home_path')}}" class="{{ Request::is('/') ? "current" : "" }}">Inicio</a>
					{{-- <ul>
						<li><a href="index.html">Home 1</a></li>
						<li><a href="index-2.html">Home 2</a></li>
						<li><a href="index-3.html">Home 3</a></li>
						<li><a href="index-4.html">Home 4</a></li>
					</ul> --}}
				</li>
				<li>
					<a href="{{ route('about_path')}}" class="{{ Request::is('somos') ? "current" : "" }}">Somos</a>
					{{-- <div class="mega two-cols">

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

					</div> --}}
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

				{{-- <li class="dropdown">
					<a href="#">Shop</a>
					<ul>
						<li><a href="shop.html">Shop</a></li>
						<li><a href="shop-product-page.html">Product Page</a></li>
						<li><a href="shopping-cart.html">Cart</a></li>
					</ul>
				</li> --}}

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
				<li class="user-icon"><a href="shopping-cart.html" title="Zona Usuario" ><i class="fa fa-users"></i></a></li> 

			</ul>
		</nav>
	</div>
	</div>
</div>