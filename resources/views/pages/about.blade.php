@extends('main')

@section('title', ' | Somos')

@section('slider')

@endsection

@section('content')


    
			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			<section class="page-header page-header-xlg parallax parallax-3" style="background-image:url({{asset('img/parallax-img.jpg')}})">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1>Somos</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li class="active">About Us</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

  {{--  <!-- Parallax Banner
    ================================================== -->
    <div class="parallax-banner margin-bottom-20 margin-top-45" style="background-image: url({{asset('img/parallax-img.jpg')}})">
        <div class="container title-page">
		<div class="row">
			<div class="col-md-12 ">

				<h2 class="">Somos</h2>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Inicio</a></li>
						<li>Somos</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
    </div> --}}



   
    <!-- Stages -->
<div class="container">

	

</div>
<!-- Stages / End -->

    <!-- Latest Projects -->
    <div class="full-width projects-container">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Headline -->
                    <h3 class="headline centered">Nuestros últimos Proyectos</h3>

                    <!-- Filters -->
                    <div id="filters">
                        <ul class="option-set alt">
                            <li><a href="#filter" class="selected" data-filter="*">Todos</a></li>
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
                        <a href="all-projects.html" class="button medium border">Ver todos los Proyectos</a>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <!-- Latest Projects / End -->

    <!-- Logo Carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline centered with-border margin-bottom-30">Algunos de nuestro Clientes</h3>
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
    
@endsection

@section('scritpts')
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
    
@endsection