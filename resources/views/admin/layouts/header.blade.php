<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!--BEGIN SIDEBAR TOGGLE-->
            <div class="sidebar-toggle-box hidden-phone">
                <div class="icon-reorder"></div>
            </div>
            <!--END SIDEBAR TOGGLE-->
            <!-- BEGIN LOGO -->
            <a class="brand">
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <span class="icon-bar"></span>
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <div id="top_menu" class="nav notify-row">
                <!-- BEGIN NOTIFICATION -->
                <ul class="nav top-menu">
                <h2 align="center" style="color:white">hello world</h2>

                </ul>
            </div>
            <!-- END  NOTIFICATION -->
            <div class="top-nav ">
                <ul class="nav pull-right top-menu" >
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar1_small.jpg" alt="">
                        <span class="username">{{Session::get('admin_name')}}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                        <li><a href="{{route('admin-logout')}}"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
