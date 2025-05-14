@extends('layouts.appdokter')

@section('title', 'Tanggal Praktek')

@section('tanggal')
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