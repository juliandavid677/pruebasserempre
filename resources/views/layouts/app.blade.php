<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Compras-Ventas con Laravel y Vue Js- webtraining-it.com">
    <meta name="keyword" content="Sistema Compras-Ventas con Laravel y Vue Js">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.min.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app">
        <header class="app-header navbar">
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!--PONER LOGO-->
            <!--<a class="navbar-brand" href="#"></a>-->
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav d-md-down-none">
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Dashbord</a>
                </li>

            </ul>
            <ul class="nav navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Cuenta</strong>
                        </div>







                        <form id="logout-form" action="" method="POST" style="display: none;">

                        </form>
                    </div>
                </li>
            </ul>
        </header>


    <div class="app-body">

        <div class="sidebar">
             <nav class="sidebar-nav">
                 <ul class="nav">
                     <li class="nav-item">
                         <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Dashbord</a>
                     </li>
                     <li class="nav-title">
                         Menú
                     </li>


                     <li class="nav-item">
                         <a class="nav-link" href="/citiesbl"><i class="fa fa-list"></i> Ciudades</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" href="/clientbl"><i class="fa fa-tasks"></i> Clientes</a>
                     </li>




                 </ul>
             </nav>
             <button class="sidebar-minimizer brand-minimizer" type="button"></button>
         </div>

         <!-- Contenido Principal -->
         <main class="main  ">
            @yield('content')
        </main>
         <!-- /Fin del contenido principal -->
     </div>
    </div>
     <footer class="app-footer">
         <span><a >Desarrollado en:</a> &copy; 2020</span>
         <span class="ml-auto">Desarrollado por <a >Julian David Parra Alvarez</a></span>
     </footer>
     <!-- Bootstrap and necessary plugins -->
     <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/pace.min.js"></script>
     <!-- Plugins and scripts required by all views -->
     <script src="vendors/js/Chart.min.js"></script>
     <!-- GenesisUI main scripts -->
     <script src="vendors/js/template.js"></script>
</body>
</html>
