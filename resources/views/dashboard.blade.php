<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard | Usuario
    </title>

    <link rel="Shortcut Icon" type="image/x-icon" href="{{ asset('favicons/logo.png') }}" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('users/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('users/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('users/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo text-center">
                <a href="/">
                    <img src="{{ asset('inicio/img/food logo.png') }}" alt="" / height="100px">
                </a>

            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{ route('map') }}" class="{{ request()->routeIs('map') ? 'active' : '' }}">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Mapa</p>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Perfil de usuario</p>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Listado de pedidos</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand">Listado de Pedidos</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Más acciones</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Cerrar sesion</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <img class="rounded-circle bac-fondo"
                                        src="{{ auth()->user()->profile_photo_url }}" height="25px">
                                    <p>
                                        <span class="d-lg-none d-md-block">{{ auth()->user()->name }}</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listado de pedidos</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Country
                                            </th>
                                            <th>
                                                City
                                            </th>
                                            <th class="text-right">
                                                Salary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Dakota Rice
                                                </td>
                                                <td>
                                                    Niger
                                                </td>
                                                <td>
                                                    Oud-Turnhout
                                                </td>
                                                <td class="text-right">
                                                    $36,738
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Minerva Hooper
                                                </td>
                                                <td>
                                                    Curaçao
                                                </td>
                                                <td>
                                                    Sinaai-Waas
                                                </td>
                                                <td class="text-right">
                                                    $23,789
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Sage Rodriguez
                                                </td>
                                                <td>
                                                    Netherlands
                                                </td>
                                                <td>
                                                    Baileux
                                                </td>
                                                <td class="text-right">
                                                    $56,142
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Philip Chaney
                                                </td>
                                                <td>
                                                    Korea, South
                                                </td>
                                                <td>
                                                    Overland Park
                                                </td>
                                                <td class="text-right">
                                                    $38,735
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Doris Greene
                                                </td>
                                                <td>
                                                    Malawi
                                                </td>
                                                <td>
                                                    Feldkirchen in Kärnten
                                                </td>
                                                <td class="text-right">
                                                    $63,542
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Mason Porter
                                                </td>
                                                <td>
                                                    Chile
                                                </td>
                                                <td>
                                                    Gloucester
                                                </td>
                                                <td class="text-right">
                                                    $78,615
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Jon Porter
                                                </td>
                                                <td>
                                                    Portugal
                                                </td>
                                                <td>
                                                    Gloucester
                                                </td>
                                                <td class="text-right">
                                                    $98,615
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class=" container-fluid ">
                        <nav>
                            <ul>
                                <li>
                                    <a href="/">
                                        Food Fast
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('food.about') }}">
                                        Acerca de Nosotros
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('food.blog') }}">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright" id="copyright">
                            &copy;
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>, Designed by <a href="#" target="_blank">C.R.I.S</a>. Coded by <a
                                href="#" target="_blank">Cristofer Alejandro Payan Rodriguez</a>.
                        </div>
                    </div>
                </footer>




                <!--   Core JS Files   -->
                <script src="{{ asset('users/js/core/jquery.min.js') }}"></script>
                <script src="{{ asset('users/js/core/popper.min.js') }}"></script>
                <script src="{{ asset('users/js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('users/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
                <!--  Google Maps Plugin    -->
                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
                <!-- Chart JS -->
                <script src="{{ asset('users/js/plugins/chartjs.min.js') }}"></script>
                <!--  Notifications Plugin    -->
                <script src="{{ asset('users/js/plugins/bootstrap-notify.js') }}"></script>
                <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
                <script src="{{ asset('users/js/now-ui-dashboard.min.js?v=1.5.0') }}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
                <script src="{{ asset('users/demo/demo.js') }}"></script>
</body>

</html>
