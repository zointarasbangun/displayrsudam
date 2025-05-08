@extends('layouts.appinfodarurat')

@section('kontak')
<section class="py-5" id="kontakugd">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <div class="p-4 rounded-4 shadow-sm position-relative"
                     style="background-image: url('{{ asset('live/assets/img/gallery/bg-departments.png') }}');
                            background-size: cover;
                            background-position: center;
                            background-repeat: no-repeat;">
                    <h1 class="text-black fs-4 fs-md-2 m-0">Kontak UGD : 08xxxxxxxxxxx</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('prosedur')
<!-- Section: Prosedur Items -->
<section class="py-5" id="prosedurugd">
    <div class="container">
        <!-- Title -->
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center text-black">Prosedur Darurat</h1>
            </div>
        </div>

        <!-- Prosedur Items -->
        <div class="row g-5 justify-content-center position-relative" style="z-index: 1;">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="icon-box p-3 border rounded-4 shadow-sm h-100">
                    <a href="#!" class="text-decoration-none text-black">
                        <img src="{{ asset('live/assets/img/pingsan.jpeg') }}" class="img-fluid mb-3 rounded-3" alt="Pingsan">
                        <p class="fs-4 fw-bold">Pingsan</p>
                        <p class="text-black small">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="icon-box p-3 border rounded-4 shadow-sm h-100">
                    <a href="#!" class="text-decoration-none text-black">
                        <img src="{{ asset('live/assets/img/pingsan.jpeg') }}" class="img-fluid mb-3 rounded-3" alt="Luka Bakar">
                        <p class="fs-4 fw-bold">Luka Bakar</p>
                        <p class="text-black small">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="icon-box p-3 border rounded-4 shadow-sm h-100">
                    <a href="#!" class="text-decoration-none text-black">
                        <img src="{{ asset('live/assets/img/pingsan.jpeg') }}" class="img-fluid mb-3 rounded-3" alt="Kecelakaan">
                        <p class="fs-4 fw-bold">Kecelakaan</p>
                        <p class="text-black small">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('peta')
<section class="py-5" id="petaugd">
    < <div class="container">
        <!-- Title -->
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center text-black">Peta Menuju UGD</h1>
            </div>
        </div>

        <!-- Map Content -->
        <div class="row py-4 justify-content-center position-relative" style="z-index: 1;">
            <div class="col-12 col-md-8 col-lg-6 text-center">
                <div class="icon-box p-3 border rounded-4 shadow-sm">
                    <a href="#!" class="text-decoration-none text-black">
                        <img src="{{ asset('live/assets/img/google-maps.png') }}" class="img-fluid mb-3 rounded" alt="Peta UGD">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
