<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('admin_partials._head')

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    @include('admin_partials._nav')
    
    @include('admin_partials._sideleftmenu')

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
 </div> <!-- /.content-wrapper -->

 @include('admin_partials._footer')

 @include('admin_partials._javascripts')

</body>
</html>
