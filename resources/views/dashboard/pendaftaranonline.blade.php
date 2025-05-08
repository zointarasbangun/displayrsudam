@extends('layouts.apppendaftaranonline')

@section('pendaftaran')
    <section class="py-5" id="pendaftaranqr">
        <div class="container">
            <!-- Title -->
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="text-center text-black">Pendaftaran Online</h1>
                </div>
            </div>

            <!-- Prosedur Items -->
            <div class="row g-5 justify-content-center position-relative" style="z-index: 1;">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="icon-box p-3 border rounded-4 shadow-sm h-100">
                        <a href="#!" class="text-decoration-none text-black">
                            <img src="{{ asset('live/assets/img/qr.png') }}" class="img-fluid mb-3 rounded-3"
                                alt="Pingsan">
                                <p class="fs-4 fw-bold">Pindai Kode QR untuk Daftar Via Smartphone</p>
                        </a>
                    </div>
                </div>
    </section>
@endsection