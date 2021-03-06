<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Bakery Home</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   <link href="{{asset('/')}}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="{{asset('/')}}assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="{{asset('/')}}assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="{{asset('/')}}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="{{asset('/')}}css/style.css" rel="stylesheet" />
   <link href="{{asset('/')}}css/style-responsive.css" rel="stylesheet" />
   <link href="{{asset('/')}}css/style-default.css" rel="stylesheet" id="style_color" />
   <link href="{{asset('/')}}assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="{{asset('/')}}assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   @include('bakery.layouts.header')
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu active">
              <a class="" href="{{route('bakery-dashboard')}}">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Settings</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                  <li><a class="" href="">Manage All Item</a></li>
                  <li><a class="" href="">Manage All Sells Book</a></li>
                  <li><a class="" href=""></a></li>
                  </ul>
              </li>

          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Bakery Dashboard
                   </h3>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           @yield('bakery-home')

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
  @include('bakery.layouts.footer')
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="{{asset('/')}}js/jquery-1.8.3.min.js"></script>
   <script src="{{asset('/')}}js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="{{asset('/')}}assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="{{asset('/')}}assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="{{asset('/')}}assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="{{asset('/')}}assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script src="{{asset('/')}}assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="{{asset('/')}}js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="{{asset('/')}}assets/chart-master/Chart.js"></script>

   <!--common script for all pages-->
   <script src="{{asset('/')}}js/common-scripts.js"></script>

   <!--script for this page only-->

   <script src="{{asset('/')}}js/easy-pie-chart.js"></script>
   <script src="{{asset('/')}}js/sparkline-chart.js"></script>
   <script src="{{asset('/')}}js/home-page-calender.js"></script>
   <script src="{{asset('/')}}js/chartjs.js"></script>

   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
