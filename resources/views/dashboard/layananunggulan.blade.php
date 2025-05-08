@extends('layouts.appunggulan')

@section('content')
  <section class="py-5 position-relative" style="min-height: 100vh;">
    {{-- Language Switcher --}}
    <!-- <section> begin ============================-->
    <section class="py-5" id="poliklinik">
    <div class="container">
      <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size"
        style="background-image:url(assets/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->
        <h1 class="text-center">POLIKLINIK KESEHATAN</h1>
      </div>
      </div>
    </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
    <div class="container">
      <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="{{asset('live/assets/img/icons/neurology.png')}}" alt="..." /><img
            class="mb-3 deparment-icon-hover" src="{{asset('live/assets/img/icons/neurology.svg')}}" alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Poliklinik Syaraf</p>
          </a></div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="{{asset('live/assets/img/icons/eye-care.png')}}" alt="..." /><img
            class="mb-3 deparment-icon-hover" src="{{asset('live/assets/img/icons/eye-care.svg')}}" alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Poliklinik Mata</p>
          </a></div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="{{asset('live/assets/img/icons/cardiac.png')}}" alt="..." /><img
            class="mb-3 deparment-icon-hover" src="{{asset('live/assets/img/icons/cardiac.svg')}}" alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Poliklinik Paru</p>
          </a></div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="{{asset('live/assets/img/icons/heart.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover"
            src="{{asset('live/assets/img/icons/heart.svg')}}" alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Heart care</p>
          </a></div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="assets/img/icons/osteoporosis.png" alt="..." /><img class="mb-3 deparment-icon-hover"
            src="assets/img/icons/osteoporosis.svg" alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Osteoporosis</p>
          </a></div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="{{asset('live/assets/img/icons/ent.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover"
            src="{{asset('live/assets/img/icons/ent.svg')}}" alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Poliklinik THT</p>
          </a></div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="{{asset('live/assets/img/icons/bedah-plastik.png')}}" alt="..." /><img
            class="mb-3 deparment-icon-hover" src="{{asset('live/assets/img/icons/bedah-plastik.svg')}}"
            alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Bedah Plastik</p>
          </a></div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon"
            src="{{asset('live/assets/img/icons/bedah-digestif.png')}}" alt="..." /><img
            class="mb-3 deparment-icon-hover" src="{{asset('live/assets/img/icons/bedah-digestif.svg')}}"
            alt="..." />
          <p class="fs-1 fs-xxl-2 text-center">Bedah Digestif</p>
          </a></div>
        </div>
      </div>
      </div>
    </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
  </section>
@endsection

@section(section: 'igd24')
  <!-- IGD 24 JAM -->
  <section class="bg-secondary">
    <div class="bg-holder"
    style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
    <div class="mt-4">
      <h1 class="text-center text-white"> IGD 24 JAM</h1>
    </div>

    </div>
    <!--/.bg-holder-->
    <div class="container">
    <div class="row align-items-center">
      <div class=" text-center mb-4"
      style="position: absolute; top: 5%; left: 50%; transform: translateX(-50%); z-index: 2;">
      </div>
      <div class="row align-items-center justify-content-center">
      <!-- Gambar 1 -->
      <div class="col-md-6 text-center mb-3">
        <img class="img-fluid rounded w-100" style="height: 300px; object-fit: cover;"
        src="{{asset('live/assets/img/igd1.png')}}" alt="Gedung IGD RSUDAM" />
      </div>

      <!-- Gambar 2 -->
      <div class="col-md-6 text-center mb-3">
        <img class="img-fluid rounded w-100" style="height: 300px; object-fit: cover;"
        src="{{asset('live/assets/img/igd2.png')}}" alt="Ruang IGD Zona 1" />
      </div>
      </div>
      <div class="text-center text-light my-3">
      <p class="fw-bold mb-2">Layanan Instalasi Gawat Darurat (IGD) RSUDAM Provinsi Lampung
        dilayani Dokter Spesialis on-site setiap Hari Pukul 17.00-06.00 WB terdiri dari:<br< /p>
        <p>
          dr. Spesial Penyakit Dalam<br />
          dr. Spesialis Bedah<br />
          dr. Spesialis Kandungan
        </p>
      </div>
    </div>
    </div>
  </section>

@endsection

@section(section: 'labrad')
  <!-- Laboratorium & Radiologi Modern -->
  <div class="mt-4">
    <h1 class="text-center"> LABORATORIUM DAN RADIOLOGI MODERN</h1>
  </div>


@endsection