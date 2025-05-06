<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>DisplayRSUDAM </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="manifest" href="{{ asset('live/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('live/assets/img/logorsudam1.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('live/assets/css/theme.css') }}" rel="stylesheet">

</head>

<body>

    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand d-flex flex-column flex-lg-row align-items-start align-items-lg-center gap-3"
                    href="#">
                    <img src="{{ asset('live/assets/img/rsudam.png') }}" width="150" alt="logo">
                    <div class="text-center text-lg-start">

                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <div class="navbar-nav pt-2 pt-lg-0 font-base text-center">
                        <h4 class=" fw-bold" style="color: #2C3E50; font-size: 0.95 rem;">
                            Sahabat masyarakat menuju Lampung sehat
                        </h4>
                    </div>
                </div>
            </div>
        </nav>


        <section class="py-5 d-flex align-items-start justify-content-center"
            style="min-height: 100vh; background-image: url('{{ asset('live/assets/img/gallery/hero-bg.png') }}'); background-size: cover; background-position: top center;">

            @yield('content')

        </section>
        <section class="py-5 d-flex align-items-start justify-content-center bg-secondary"
            style="min-height: 100vh; background-image: url('{{ asset('live/assets/img/gallery/bg-eye-care.png') }}'); background-size: cover; background-position: top center;">

            @yield('visi')

        </section>
        <section class="py-0 bg-secondary">
            <div class="bg-holder opacity-25"
                style="background-image: url('{{ asset('live/assets/img/gallery/dot-bg.png') }}');background-position:top left;margin-top:-3.125rem;background-size:auto;">
            </div>

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-0 bg-primary">

                <div class="container">
                    <div class="row justify-content-md-between justify-content-evenly py-4">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                            <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; RS Abdoel Moeloek, 2025
                            </p>
                        </div>
                        <div class="col-12 col-sm-8 col-md-6">
                            <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="12" fill="#F95C19" viewBox="0 0 16 16">
                                    <path
                                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                    </path>
                                </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="#"
                                    target="_blank">SIMRSUDAM </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


        </section>

    </main>
    <script src="{{ asset('live/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('live/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('live/vendors/is/is.min.js') }}"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('live/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('live/assets/js/theme.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap"
        rel="stylesheet">
</body>

</html>
