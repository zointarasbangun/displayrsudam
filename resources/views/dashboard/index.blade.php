@extends('layouts.app')

@section('content')

    <section class="py-5 position-relative" style="min-height: 100vh;">
        {{-- Language Switcher --}}

        <div class="container text-center">
            <div class="position-absolute end-0 m-3 mt-3 mt-lg-3 " style="top: 0.95 rem;">
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="langDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <!-- Ikon glob/flag hanya tampil di portrait (layar < lg) -->
                        <span class="d-inline-block d-lg-none">
                            <i class="fas fa-globe"></i>
                        </span>

                        <!-- Teks “Bahasa” hanya tampil di landscape (layar ≥ lg) -->
                        <span class="d-none d-lg-inline">
                            Bahasa
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li><a class="dropdown-item" href="#">🇮🇩 Indonesia</a></li>
                        <li><a class="dropdown-item" href="#">🇬🇧 English</a></li>
                    </ul>
                </div>
            </div>
            {{-- Logo & Judul di Tengah Atas --}}
            <div class="mb-2">
                <img src="{{ asset('live/assets/img/logorsudam1.png') }}" alt="Logo RS" class="img-fluid mb-3"
                    style="max-width: 90px;">
                <h1 class="fw-bold">RS Abdul Moeloek</h1>
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <a href="{{ route ('profilrsudam') }}" class="menu-button btn btn-primary btn-lg w-100 py-4 text-white text-center">
                        <i class="fas fa-hospital fa-2x mb-2 d-block "></i>
                        <span class="menu-label">Profil RSUDAM</span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route ('layananunggulan') }}" class="menu-button btn btn-success btn-lg w-100 py-4 text-white text-center">
                        <i class="fas fa-star fa-2x mb-2 d-block"></i>
                        <span class="menu-label"> Layanan Unggulan </span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('dokterspesialis') }}" class="menu-button btn btn-info btn-lg w-100 py-4 text-white text-center">
                        <i class="fas fa-user-md fa-2x mb-2 d-block"></i>
                        <span class="menu-label">Dokter Spesialis </span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route ('fasilitasrsudam') }}" class="menu-button btn btn-warning btn-lg w-100 py-4 text-center">
                        <i class="fas fa-clinic-medical fa-2x mb-2 d-block"></i>
                        <span class="menu-label"> Fasilitas RSUDAM</span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route ('pendaftaranonline') }}" class="menu-button btn btn-secondary btn-lg w-100 py-4 text-white text-center">
                        <i class="fas fa-clipboard-list fa-2x mb-2 d-block"></i>
                        <span class="menu-label"> Pendaftaran Online</span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('infodarurat') }}" class="menu-button btn btn-danger btn-lg w-100 py-4 text-white text-center">
                        <i class="fas fa-phone-volume fa-2x mb-2 d-block"></i>
                        <span class="menu-label">Info Darurat </span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('testimoni') }}" class="menu-button btn btn-dark btn-lg w-100 py-4 text-white text-center">
                        <i class="fas fa-comments fa-2x mb-2 d-block"></i>
                        <span class="menu-label"> Testimoni Pasien</span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route ('petakontak') }}" class="menu-button btn btn-outline-dark btn-lg w-100 py-4  text-center">
                        <i class="fas fa-map-marker-alt fa-2x mb-2 d-block"></i>
                        <span class="menu-label"> Peta Kontak</span>
                    </a>
                </div>
            </div>

            {{-- Marquee Teks Berjalan --}}
            <div class="mt-4">
                <marquee behavior="scrol+l" direction="left" class="bg-danger text-white py-2 fw-bold rounded">
                    Selamat datang di RSUD Dr. H. Abdul Moeloek Provinsi Lampung — Kami siap melayani Anda dengan sepenuh
                    hati.
                </marquee>
            </div>


        </div>
    </section>
@endsection


