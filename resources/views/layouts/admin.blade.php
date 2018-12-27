<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    Admin
    </title>

    <!-- Styles -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/daterangepicker.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('/')}}/css/admin/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css"> -->


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    <!-- jQuery 3 -->
    <script src="{{url('/')}}/js/admin/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('/')}}/js/admin/jquery-ui.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{url('/')}}/js/admin/bootstrap.min.js"></script>

    <script src="{{url('/')}}/js/admin/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/js/admin/dataTables.bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="{{url('/')}}/js/admin/raphael.min.js"></script>
    <script src="{{url('/')}}/js/admin/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="{{url('/')}}/js/admin/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{{url('/')}}/js/admin/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{url('/')}}/js/admin/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('/')}}/js/admin/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{url('/')}}/js/admin/moment.min.js"></script>
    <script src="{{url('/')}}/js/admin/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{{url('/')}}/js/admin/bootstrap-datepicker.min.js"></script>
    <!-- Slimscroll -->
    <script src="{{url('/')}}/js/admin/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('/')}}/js/admin/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('/')}}/js/admin/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('/')}}/js/admin/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('/')}}/js/admin/demo.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
        label.error{color: red; font-weight: 400; font-style: italic;}
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <!-- Header -->

        <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>A</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Super</b>Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::user()->image != '')
                        <img src="{{url('/')}}/images/users/{{Auth::user()->image}}" class="user-image" alt="User Image">
                        @else
                        <img src="{{url('/')}}/images/users/noimage.png" class="user-image" alt="User Image">
                        @endif
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                            @if(Auth::user()->image != '')
                            <img src="{{url('/')}}/images/users/{{Auth::user()->image}}" class="img-circle" alt="User Image">
                            @else
                            <img src="{{url('/')}}/images/users/noimage.png" class="img-circle" alt="User Image">
                            @endif
                            
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since {{date('M. Y', strtotime(Auth::user()->created_at))}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                           
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    
                                    <a href="" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header end -->

    <!-- Sidebar -->
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    @if(Auth::user()->image != '')
                    <img src="{{url('/')}}/images/users/{{Auth::user()->image}}" class="img-circle" alt="User Image">
                    @else
                    <img src="{{url('/')}}/images/users/noimage.png" class="img-circle" alt="User Image">
                    @endif
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-globe"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
                </li>

                <!-- <li>
                    <a href="{{url('admin/users')}}">
                    <i class="fa fa-users"></i> <span>Users</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
                </li> -->

                <!-- <li>
                    <a href="{{url('admin/cc')}}">
                    <i class="fa fa-cube"></i> <span>Course Categories</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/plans')}}">
                    <i class="fa fa-cube"></i> <span>Subscription Plans</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/contacts')}}">
                    <i class="fa fa-cube"></i> <span>Contact us</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
                </li> -->
                
                <!-- <li class="treeview">
                    <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                    </ul>
                </li> -->

                
                
                <!-- <li class="treeview">
                    <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                </li> -->
                
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Sidebar end -->

    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <!-- <b>Version</b> 2.4.0 -->
        </div>
        <strong>Copyright &copy; 2018-2018 <a href="">Teachslate</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

    </div>
</body>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

</html>