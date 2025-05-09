@extends('layouts.appsejarah')
@section('content')
    <!-- PROFIL -->
    <section id="profil" class="bg-blue-50 py-16 px-6 md:px-20">
        <div class="bg-holder"
            style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row align-items-center">
                <div class=" text-center mb-4">
                    <!-- <h1 class="text-center"> Profil Rumah Sakit</h1> -->
                </div>
                <div class="col-md-5 col-xxl-6"><img class="img-fluid rounded"  src="{{ asset('assets/img/tes1.png')}}"
                        alt="..." />
                </div>
                <div class="col-md-7 col-xxl-6 text-center text-md-start">
                    <h2 class="fw-bold font-semibold text-gray-800 mb-6">Profil Rumah Sakit<br> </h2>
                    <p class="text-lg text-gray-600 mb-4 text-justify">RSUD Dr.H.Abdul Moeloek sebagai Rumah Sakit Kelas A dan
                        merupakan rumah sakit rujukan tertinggi di Provinsi Lampung yang sudah terakreditasi
                        PARIPURNA
                        RSUD Dr.H.Abdul Moeloek Selalu berupaya memenuhi kebutuhan pelayanan kesehatan masyarakat
                        yang
                        berkualitas, kebutuhan sarana dan prasarana saat ini sudah semua kita penuhi dan sudah
                        memenuhi
                        syarat Kelas A begitu juga dengan tenaga kesehatan dilingkungan RSUDAM.
                        Semoga laporan Profil ini bermanfaat bagi semua pihak terutama RSUD Dr.H.Abdul Moeloek
                        Provinsi
                        Lampung.</p>
                    <!-- <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Learn more </a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Profil Rumah Sakit</h2>
                <div class="col-md-5 col-xxl-6"><img class="img-fluid rounded" src="{{ asset('assets/img/tes1.png')}}" alt="..." />
                </div>
                <img src="{{ asset('assets/img/tes1.png')}}" class="img-fluid mb-3 rounded-3" alt="Ilustrasi Rumah Sakit"
                    class="w-full max-w-md mx-auto mb-6">
                <div class="max-w-3xl mx-auto px-3 py-4">
                    <p class="text-lg text-gray-600 mb-4 text-justify">RSUD Dr.H.Abdul Moeloek sebagai Rumah Sakit Kelas A dan
                        merupakan rumah sakit rujukan tertinggi di Provinsi Lampung yang sudah terakreditasi
                        PARIPURNA
                        RSUD Dr.H.Abdul Moeloek Selalu berupaya memenuhi kebutuhan pelayanan kesehatan masyarakat
                        yang
                        berkualitas, kebutuhan sarana dan prasarana saat ini sudah semua kita penuhi dan sudah
                        memenuhi
                        syarat Kelas A begitu juga dengan tenaga kesehatan dilingkungan RSUDAM.
                        Semoga laporan Profil ini bermanfaat bagi semua pihak terutama RSUD Dr.H.Abdul Moeloek
                        Provinsi
                        Lampung.</p>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Struktur Rumah Sakit</h2>

                </div>
                <img src="{{ asset('assets/img/bagan.png')}}" class="img-fluid mb-3 rounded-3" alt="Ilustrasi Rumah Sakit"
                    class="w-full max-w-md mx-auto mb-6">
            </div> -->
    </section>



@endsection


@section('sejarah')
    <!-- SEJARAH -->
    <section id="sejarah" class="bg-blue-50 py-16 px-6 md:px-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Sejarah Rumah Sakit</h2>
            <p class="text-lg text-gray-600 mb-4 text-justify">Rumah Sakit Sehat didirikan pada tahun 2000 dengan tujuan
                untuk
                menyediakan layanan kesehatan yang terjangkau dan berkualitas.</p>
        </div>
    </section>
@endsection

@section('visi')
    <!-- VISI & MISI -->
    <section id="visi-misi" class="py-16 px-6 md:px-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Visi & Misi</h2>
            <p class="text-lg text-gray-600 mb-4 text-justify">Visi: Menjadi rumah sakit terkemuka dalam pelayanan kesehatan
                berkualitas di seluruh dunia.</p>
            <p class="text-lg text-gray-600 mb-4 text-justify">Misi: Memberikan pelayanan kesehatan yang profesional, ramah,
                dan
                terjangkau.</p>
        </div>
    </section>
@endsection


@section('penghargaan')
    <!-- PENGHARGAAN -->
    <section id="penghargaan" class="bg-blue-50 py-16 px-6 md:px-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Penghargaan & Prestasi</h2>
        </div>
        <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
            <h2>Ini Penghargaan</h2>
            <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i
                    class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i>
            </div>
            <p class="text-lg text-gray-600 mb-4 text-justify">This medical and health care facility distinguishes itself
                from the competition by providing
                technologically advanced medical and health care. A mobile app and a website are available via which you
                can easily schedule appointments, get online consultations, and see physicians, who will assist you
                through the whole procedure. And all of the prescriptions, medications, and other services they offer
                are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an
                outstanding job. Highly recommended their health care services.</p>
        </div>
        </div>
        </div>
    </section>
@endsection

@section('virtual')
    <!-- VIRTUAL TOUR -->
    <section id="virtual-tour" class="py-16 px-6 md:px-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Virtual Tour</h2>
            <p class="text-lg text-gray-600 mb-4 text-justify">Jelajahi rumah sakit kami secara virtual melalui tur 3D yang
                interaktif.</p>
            <!-- Contoh video atau gambar virtual tour -->
            <div class="max-w-lg mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YOuJfiYXx1Q" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
@endsection