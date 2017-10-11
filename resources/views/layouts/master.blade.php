<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('head.title') </title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/css/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/css/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
    @yield('head.css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Shop management!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('partials.profile')
            <!-- /menu profile quick info -->
            <br />
            
            <!-- sidebar menu -->
            @include('partials.menu')
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        @include('partials.navbar')
        <!-- /top navigation -->
		    
        <!-- main content -->		
        @yield('body.content')
        <!-- /main content -->

        <!-- footer content -->
        @include('partials.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/js/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/js/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/js/skycons.js"></script>
    <!-- Flot -->
    <script src="/js/jquery.flot.js"></script>
    <script src="/js/jquery.flot.pie.js"></script>
    <script src="/js/jquery.flot.time.js"></script>
    <script src="/js/jquery.flot.stack.js"></script>
    <script src="/js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/js/jquery.flot.orderBars.js"></script>
    <script src="/js/jquery.flot.spline.min.js"></script>
    <!-- <script src="/js/curvedLines.js"></script> -->
    <!-- DateJS -->
    <script src="/js/date.js"></script>
    <!-- JQVMap -->
    <script src="/js/jquery.vmap.js"></script>
    <script src="/js/jquery.vmap.world.js"></script>
    <script src="/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/js/moment.min.js"></script>
    <script src="/js/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/js/custom.min.js"></script>
	  @yield('body.js')
  </body>
</html>
