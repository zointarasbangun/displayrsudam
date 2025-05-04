@extends('layouts.app')

@section('content')
    <section class="py-5 position-relative" style="min-height: 100vh;">
        {{-- Language Switcher --}}



        <div class="container text-center mt-3">
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
            <div class="mb-5">
                <img src="{{ asset('live/assets/img/rsudam.png') }}" alt="Logo RS" class="img-fluid mb-3"
                    style="max-width: 200px;">
                <h1 class="fw-bold">RS Abdoel Moeloek</h1>
            </div>

            {{-- 8 Tombol Besar --}}
            <div class="row g-3">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="col-6 col-md-3">
                        <a href="#" class="btn btn-primary btn-lg w-100 py-4">
                            Menu {{ $i }}
                        </a>
                    </div>
                @endfor
            </div>

        </div>
    </section>
@endsection
