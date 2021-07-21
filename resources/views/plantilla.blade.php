
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>My-dentis</title>
    @yield('css')
        <link rel="stylesheet" href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css')}}"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>


    
        
        
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


            <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- NProgress -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/nprogress/nprogress.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/iCheck/skins/flat/green.css')}}">
	
    <!-- bootstrap-progressbar -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/jqvmap/dist/jqvmap.min.css')}}"/>
    <!-- bootstrap-daterangepicker -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/bootstrap-daterangepicker/daterangepicker.css')}}">

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{URL::asset('./build/css/custom.min.css')}}">
    <!--<link href="https://bootswatch.com/4/darkly/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{URL::asset('./build/css/custom.css')}}" >
    <!--estilos-->
  <link rel="stylesheet" href="{{URL::asset('./build/css/estilos.css')}}">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route ('pacientes')}}" class="site_title"><i class="fa fa-space-shuttle"></i> <span>Mis practicas</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{URL::asset('./production/images/gustavo.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Gustavo Angel</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('pacientes')}}"><i class="fa fa-navicon"></i>Crud modal (File)<!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta odontologos</a></li>
                      <li><a href="./production/formulario.html">Reporte odontologos</a></li>
                      <li><a href="./production/formulario.html">Eliminación odontologos</a></li>
                      <li><a href="./production/formulario.html">Modificación odontologos</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('usuarios')}}"><i class="fa fa-navicon"></i> Crud Modal (No File) <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                
                      <li><a href="./production/formulario.html">Alta usuarios</a></li>
                      <li><a href="./production/formulario.html">Reporte usuarios</a></li>
                      <li><a href="./production/formulario.html">Eliminación usuarios</a></li>
                      <li><a href="./production/formulario.html">Modificación usuarios</a></li>
                    </ul> -->
                  </li>
                  </li>
                  
                  <li><a href="{{route('usuariospdf')}}"><i class="fa fa-navicon"></i>Implementación PDF-EXCEL<!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta pacientes</a></li>
                      <li><a href="./production/formulario.html">Reporte pacientes</a></li>
                      <li><a href="./production/formulario.html">Eliminación pacientes</a></li>
                      <li><a href="./production/formulario.html">Modificación pacientes</a></li>
                    </ul> -->
                  
                  <li><a href="{{route('productos')}}"><i class="fa fa-navicon"></i>Carrito de compras<!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">            
                      <li><a href="./production/formulario.html">Alta consultas</a></li>
                      <li><a href="./production/formulario.html">Reporte consultas</a></li>
                      <li><a href="./production/formulario.html">Eliminación consultas</a></li>
                      <li><a href="./production/formulario.html">Modificación consultas</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('qrcode')}}"><i class="fa fa-navicon"></i>QR imagen <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta municipios</a></li>
                      <li><a href="./production/formulario.html">Reporte municipios</a></li>
                      <li><a href="./production/formulario.html">Eliminación municipios</a></li>
                      <li><a href="./production/formulario.html">Modificación municipios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('escanerqr')}}"><i class="fa fa-navicon"></i>QR <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta municipios</a></li>
                      <li><a href="./production/formulario.html">Reporte municipios</a></li>
                      <li><a href="./production/formulario.html">Eliminación municipios</a></li>
                      <li><a href="./production/formulario.html">Modificación municipios</a></li>
                    </ul> -->
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{URL::asset('./production/images/gustavo.jpg')}}" alt="">Gustavo Angel
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content aqui va su codigo  -->
        <div id="contenido">
          @yield('contenido')
        </div>
        <!-- /page content termina su codigo -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Santos Clemente Gustavo Angel IDGS-93
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="./vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="./vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="./vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="./vendors/Flot/jquery.flot.js"></script>
    <script src="./vendors/Flot/jquery.flot.pie.js"></script>
    <script src="./vendors/Flot/jquery.flot.time.js"></script>
    <script src="./vendors/Flot/jquery.flot.stack.js"></script>
    <script src="./vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="./vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="./vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="./vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="./vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="./vendors/moment/min/moment.min.js"></script>
    <script src="./vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./build/js/custom.min.js"></script>
	
  </body>
  @yield('js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    
    

</html>