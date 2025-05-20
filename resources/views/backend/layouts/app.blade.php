<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PWA  -->
    <meta name="theme-color" content="#00ABEC" />
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <title>Sistem Monitoring Jaringan| PGNCOM</title>

    <!-- Google Font: Source Sans Pro -->
    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <!--Iconify-->
    {{-- <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js') }}"> --}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    @yield('styles')

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            color: 212B36;
            height: 400px;
            width: 600px;
            max-width: 100%;
            max-height: 100%;
        }

        .sidebar-dark-primary {
            background-color: #0077be;
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active {
            background-color: #132a40;
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active:hover {
            background-color: #132a40;
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link:hover {
            background-color: #132a40;
        }

        .nav-sidebar a {
            color: white !important;
        }

        .sidebar-dark-primary .brand-link {
            background-color: #0A3C65;
            border-bottom: 0;
        }

        .sidebar-dark-primary .brand-link:hover {
            background-color: #132a40;
        }

        .main-header.navbar {
            background-color: #e3f1ff;
            /* Warna latar belakang navbar */
            color: white;

            /* Warna teks dalam navbar */
        }

        .logout-container {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }
    </style>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ URL('images/pgncom1.jpeg') }}" alt="AdminLTELogo" width="100"
        width="60">
    </div> --}}


        <!-- /.navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto ">

                <!-- Notif -->
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link rounded-circle" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        </div>
                    </li>
                    <!-- /Notif -->

                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" href="#">
                            <img src="{{ asset('lte/dist/img/avatar5.png') }}" class="img-circle elevation-2"
                                alt="User Image" width="40" height="40">
                        </a>

                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            {{-- <div class="dropdown-divider"></div> --}}

                            <a class="dropdown-item dropdown-footer disabled " style="font-weight: bold;">Admin</a>


                            {{-- <div class="dropdown-divider"></div> --}}
                            <a href="#" class="dropdown-item dropdown-footer"><i
                                    class="far fa-user mx-2"></i>Lihat
                                Profil</a>
                            <a class="dropdown-item dropdown-footer" href=""
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                @csrf
                            </form>

                    </li>
                @elseif(Auth::user()->role == 'superadmin')
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link rounded-circle" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        </div>
                    </li>
                    <!-- /Notif -->

                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" href="#">
                            <img src="{{ asset('lte/dist/img/avatar5.png') }}" class="img-circle elevation-2"
                                alt="User Image" width="40" height="40">
                        </a>

                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            {{-- <div class="dropdown-divider"></div> --}}

                            <a class="dropdown-item dropdown-footer disabled " style="font-weight: bold;">Super
                                Admin</a>


                            {{-- <div class="dropdown-divider"></div> --}}
                            <a href="#" class="dropdown-item dropdown-footer"><i
                                    class="far fa-user mx-2"></i>Lihat
                                Profil</a>
                            <a class="dropdown-item dropdown-footer text-danger" href=""
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </ul>

        </nav>

        @include('backend.layouts.navigation')

        @yield('content')


    </div>
    <footer class="main-footer">
        <a class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; RS Abdoel
            Moeloek, 2025
        </a>.</strong>
        <div class="float-right d-none d-sm-inline-block">
            <a class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                    fill="#F95C19" viewBox="0 0 16 16">
                    <path
                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                    </path>
                </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="#" target="_blank">SIMRSUDAM 1.0.0</a>
            </a>
        </div>
    </footer>
    <!-- ./wrapper -->

    <script src="{{ asset('js/admintable.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('lte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('lte/dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte/dist/js/pages/dashboard.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte/dist/js/pages/dashboard.js') }}"></script>


    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>

    <script>
        @if (Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: '{{ Session::get('success') }}',
            });
        @elseif (Session::has('error'))
            Swal.fire({
                icon: 'error',
                title: '{{ Session::get('error') }}',
            });
        @endif
    </script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
    @yield('js')
</body>

</html>



{{-- <body id="body-pd">
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav me-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @include('layouts.navigation')
        @endguest
    </ul>
</div>
</div>
</nav>

<main class="py-4">
    @yield('content')
</main>
</div>

<script src="js/main.js"></script>
@yield('scripts')
</body>

</html> --}}
