@extends('main')

@section('title', ' | Inicio')

@section('slider')

    <!-- Revolution Slider -->
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

    <!-- 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>

                <!-- Slide  -->
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                    <!-- Background -->
                    <img src="{{ asset('img/slide-01.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

                    <!-- Caption-->
                    <div class="tp-caption tp-shape tp-shapewrapper custom-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="520" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                        <!-- Caption Content -->
                        <div class="caption-title">Maquinaria Pesada</div>
                        <div class="caption-text">We specialize in a number of framing, trim and finish carpentry services. Our goal is complete satisfaction.</div>
                        <a href="contact.html" class="button medium">Solicitar Servicio</a>
                    </div>
                </li>

                <!-- Slide  -->
                <li data-index="rs-2" data-transition="fadefrombottom" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                    <!-- Background -->
                    <img src="{{ asset('img/slide-02.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

                    <!-- Caption-->
                    <div class="tp-caption tp-shape tp-shapewrapper custom-caption tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="520" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                        <!-- Caption Content -->
                        <div class="caption-title">Concreto</div>
                        <div class="caption-text"> A new coat of paint or is easy ways to refresh your home. We know what makes a great paint job.</div>
                        <a href="contact.html" class="button medium">Solicitar servicio</a>
                    </div>
                </li>

                <!-- Slide  -->
                <li data-index="rs-3" data-transition="fadefromtop" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                    <!-- Background -->
                    <img src="{{ asset('img/slide-03.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

                    <!-- Caption-->
                    <div class="tp-caption tp-shape tp-shapewrapper custom-caption tp-resizeme rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="520" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                        <!-- Caption Content -->
                        <div class="caption-title">Acero Figurado</div>
                        <div class="caption-text">Highly experienced in residential and commercial tiling, bathroom renevations, waterproofing, silicone work and soundproofing.</div>
                        <a href="contact.html" class="button medium">Solicitar servicio</a>
                    </div>
                </li>


            </ul>
            <div class="tp-static-layers"></div>

        </div>
    </div>
    <!-- Revolution Slider / End -->
    
@endsection

@section('content')

    <!-- Stages -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h3 class="headline centered with-border margin-bottom-0">Nuestras líneas de negocios</h3>
		</div>
	</div>

	<div class="row">

		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-4"></i>
				<span>Venta</span>
				<h4>Acero Figurado</h4>
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>
		
		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-8"></i>
				<span>Alquiler</span>
				<h4>Maquinaria y equipo para la contrucción</h4> 
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>
		
		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-39"></i>
				<span>Venta</span>
				<h4>Producción de Concreto</h4>
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-3 col-sm-6">
			<div class="stage">
				<i class="reneva icon-14"></i>
				<span>Alquiler</span>
				<h4>Materiales para la Construcción</h4>
				<p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
			</div>
		</div>

	</div>

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
            <a href="{{route('nameProject_path')}}" class="kitchens clickable">
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