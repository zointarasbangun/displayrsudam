<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DisplayRSUDAM| Log in </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
</head>
<style>
    body {
        padding-top: 40px;
        background-color: #1a89f0;
    }

    .container-fluid {
        max-width: 100%;
        margin: 0 auto;
        padding: 10px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: none;
        padding: 20px 30px;
        font-size: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-header img {
        max-width: 100%;
        /* IE8 */
        display: block;
        margin: 0 auto;
    }

    .card-header .header-content {
        flex: 1;
        text-align: center;
    }

    .card-header .header-content:last-child {
        text-align: right;
    }

    .card-body {
        padding: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #1265A8;
        border-color: #1265A8;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #49a1ff;
        border-color: #0062cc;
    }

    .btn-block {
        display: block;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }

    .text-center {
        text-align: center;
    }

    .text-center a {
        color: #1265A8;
    }

    .img-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .img-container img {
        max-width: 100%;
        height: auto;
        width: auto\9;
        /* IE8 */
    }

    .alert {
        margin-bottom: 0;
    }
</style>

<body class="hold-transition login-page" >

@yield('content')

<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('succes'))
    <script>
        swal.fire('{{ $message }}')
    </script>
@endif

@if ($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $message }}',
        })
    </script>
@endif
</body>

</html>
