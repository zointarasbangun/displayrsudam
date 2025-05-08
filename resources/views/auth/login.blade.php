<!doctype html>
<html lang="en">

<head>
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('live/assets/img/logorsudam1.png') }}">
    <link rel="manifest" href="{{ asset('live/assets/img/favicons/manifest.json') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uf-style1.css') }}">
</head>

<body>
    <div class="uf-form-signin">
        <div class="text-center">
            <a href="#"><img src="{{ asset('live/assets/img/logorsudam1.png') }}" alt=""
                    width="100 px"></a>
            <h1 class="text-white h3"> Login Akun</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('failed'))
                <div class="alert alert-danger">
                    {{ session('failed') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login-proses') }}">
                @csrf
                <div class="input-group uf-input-group input-group-lg mb-3">
                    <span class="input-group-text fa fa-user"></span>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="input-group uf-input-group input-group-lg mb-3">
                    <span class="input-group-text fa fa-lock"></span>
                    <input type="password" name="pin" class="form-control" placeholder="Masukkan Pin">
                </div>
                <div class="d-flex mb-3 justify-content-between">

                </div>
                <div class="d-grid mb-4">
                    <button type="submit" class="btn uf-btn-primary btn-lg">Login</button>
                </div>
            </form>
        </div>
        <div class="d-flex mb-3">
            <div class="dropdown-divider m-auto w-25"></div>
            <small class="text-nowrap text-white">By RSUDAM</small>
            <div class="dropdown-divider m-auto w-25"></div>
        </div>
    </div>

    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
