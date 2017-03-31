<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ config('app.locale') }}">
<!--<![endif]-->
@include('main_partials._head')

<body>
<!-- Wrapper -->
<div id="wrapper">

<!-- Header
================================================== -->

@include('main_partials._header-logo')

<!-- Navigation
================================================== -->

@include('main_partials._nav')

<div class="clearfix"></div>

<!-- Slider
================================================== -->

@yield('slider')

<!-- Content
================================================== -->

@yield('content')


<!-- Footer
================================================== -->

@include('main_partials._footer')

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

@include('main_partials._javascripts')

@yield('scritpts')



</div>
<!-- Wrapper / End -->


</body>
</html>
