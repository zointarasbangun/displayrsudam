@extends('layouts.appdokter')

@section('dokter')
    <style>
        /* Base Styles */
        .card-animate {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            border-radius: 12px;
            border: none;
            height: 100%;
            background-color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        /* Hover Effects */
        .card-animate:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-animate::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-animate:hover::before {
            opacity: 1;
        }

        /* Card Content */
        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .card-animate:hover .card-icon {
            transform: scale(1.15);
        }

        .card-title {
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0;
        }

        .card-animate:hover .card-title {
            color: #2c3e50 !important;
        }

        .card-body {
            padding: 2rem 1.5rem;
            position: relative;
            z-index: 1;
        }

        /* Section Title */
        .section-title {
            position: relative;
            margin-bottom: 3rem;
            padding-bottom: 1rem;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 4px;
            background: linear-gradient(100deg, #747474, #5091ed);
            border-radius: 2px;
        }

        /* Responsive Adjustments */
        @media (max-width: 767.98px) {
            .card-body {
                padding: 1.5rem 1rem;
            }

            .card-icon {
                font-size: 2rem;
            }

            .card-title {
                font-size: 1rem;
            }

            .section-title span {
                font-size: 2rem !important;
            }
        }

        @media (max-width: 575.98px) {
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .card-animate {
                max-width: 320px;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>

    <div class="container mx-auto px-4 py-6">
        <h2 class="text-center mb-4 section-title">
            <span class="display-4 font-bold text-dark">DOKTER KAMI</span>
        </h2>

        <div class="row">
            @foreach ($spesialisasis as $spesialisasi)
                <div class="col-md-4 mb-4">
                    <div class="card-animate card shadow-sm" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="text-center card-body">
                            {{-- Pilih ikon berdasarkan nama atau slug --}}
                            @switch($spesialisasi->nama_spesialisasi)
                                @case('GIGI PROSTHODONTI')
                                    <i class="mdi mdi-tooth-outline card-icon text-danger"></i>
                                @break

                                @case('GIGI ENDODONSI')
                                    <i class="mdi mdi-tooth card-icon text-danger"></i>
                                @break

                                @case('GIGI PEDODONTIS')
                                    <i class="mdi mdi-baby-face-outline card-icon text-danger"></i>
                                @break

                                @case('ORTHODONTI')
                                    <i class="mdi mdi-tooth-outline card-icon text-danger"></i>
                                @break

                                @case('PENYAKIT MULUT')
                                    <i class="mdi mdi-hospital-box-outline card-icon text-danger"></i>
                                @break

                                @case('BEDAH MULUT')
                                    <i class="mdi mdi-toothbrush card-icon text-danger"></i>
                                @break

                                @case('GIGI UMUM')
                                    <i class="mdi mdi-tooth-outline card-icon text-danger"></i>
                                @break

                                @case('OBGYN')
                                    <i class="mdi mdi-human-female card-icon text-danger"></i>
                                @break

                                @case('ONKOLOGI GINEKOLOGI')
                                    <i class="mdi mdi-hospital-box card-icon text-danger"></i>
                                @break

                                @case('OBSTETRI GINEKOLOGI SOSIAL')
                                    <i class="mdi mdi-human-female-female card-icon text-danger"></i>
                                @break

                                @case('FETOMATERNAL')
                                    <i class="mdi mdi-human-pregnant card-icon text-danger"></i>
                                @break

                                @case('PENYAKIT DALAM')
                                    <i class="mdi mdi-stethoscope card-icon text-danger"></i>
                                @break

                                @case('GASTROENTEROLOGI - HEPATOLOGI')
                                    <i class="mdi mdi-stomach card-icon text-danger"></i>
                                @break

                                @case('HEMATOLOGI - ONKOLOGI MEDIK')
                                    <i class="mdi mdi-blood-bag card-icon text-danger"></i>
                                @break

                                @case('GINJAL - HIPERTENSI')
                                    <i class="mdi mdi-water-percent card-icon text-danger"></i>
                                @break

                                @case('REUMATOLOGI')
                                    <i class="mdi mdi-bone card-icon text-danger"></i>
                                @break

                                @case('ENDOKRINOLOGI')
                                    <i class="mdi mdi-human-male-female card-icon text-danger"></i>
                                @break

                                @case('BEDAH UMUM')
                                    <i class="mdi mdi-scissors-cutting card-icon text-danger"></i>
                                @break

                                @case('BEDAH ONKOLOGI')
                                    <i class="mdi mdi-medical-bag card-icon text-danger"></i>
                                @break

                                @case('BEDAH DIGESTIF')
                                    <i class="mdi mdi-scissors-cutting card-icon text-danger"></i>
                                @break

                                @case('BEDAH PLASTIK REKONTRUKSI & ESTETIKA')
                                    <i class="mdi mdi-face-woman-shimmer card-icon text-danger"></i>
                                @break

                                @case('BEDAH ANAK')
                                    <i class="mdi mdi-baby-buggy card-icon text-danger"></i>
                                @break

                                @case('BEDAH SYARAF')
                                    <i class="mdi mdi-brain card-icon text-danger"></i>
                                @break

                                @case('BEDAH THORAX KARDIAK DAN VASKULER')
                                    <i class="mdi mdi-heart-pulse card-icon text-danger"></i>
                                @break

                                @case('UROLOGI')
                                    <i class="mdi mdi-water-alert card-icon text-danger"></i>
                                @break

                                @case('GIZI KLINIK')
                                    <i class="mdi mdi-nutrition card-icon text-danger"></i>
                                @break

                                @case('JIWA')
                                    <i class="mdi mdi-head-cog card-icon text-danger"></i>
                                @break

                                @case('PSIKOLOGI')
                                    <i class="mdi mdi-head-snowflake card-icon text-danger"></i>
                                @break

                                @case('REHABILITASI MEDIK')
                                    <i class="mdi mdi-wheelchair-accessibility card-icon text-danger"></i>
                                @break

                                @case('THT-KL')
                                    <i class="mdi mdi-ear-hearing card-icon text-danger"></i>
                                @break

                                @case('MATA')
                                    <i class="mdi mdi-eye card-icon text-danger"></i>
                                @break

                                @case('VITREO RETINA')
                                    <i class="mdi mdi-eye-settings card-icon text-danger"></i>
                                @break

                                @case('KULIT KELAMIN')
                                    <i class="mdi mdi-human-handsdown card-icon text-danger"></i>
                                @break

                                @case('KANCA SEHATI')
                                    <i class="mdi mdi-heart card-icon text-danger"></i>
                                @break

                                @case('ORTHOPEDI')
                                    <i class="mdi mdi-bone card-icon text-danger"></i>
                                @break

                                @case('SPINE')
                                    <i class="mdi mdi-dumbbell card-icon text-danger"></i>
                                @break

                                @case('HIP & KNEE')
                                    <i class="mdi mdi-human-male-height card-icon text-danger"></i>
                                @break

                                @case('HAND & MICROSURGERY')
                                    <i class="mdi mdi-hand-back-right card-icon text-danger"></i>
                                @break

                                @case('ANESTESI')
                                    <i class="mdi mdi-needle card-icon text-danger"></i>
                                @break

                                @case('NEUROANESTESI')
                                    <i class="mdi mdi-brain card-icon text-danger"></i>
                                @break

                                @case('PARU')
                                    <i class="mdi mdi-lungs card-icon text-danger"></i>
                                @break

                                @case('ONKOLOGI TORAKS')
                                    <i class="mdi mdi-lungs card-icon text-danger"></i>
                                @break

                                @case('ASMA PPOK')
                                    <i class="mdi mdi-lungs card-icon text-danger"></i>
                                @break

                                @case('NEUROLOGI (SARAF)')
                                    <i class="mdi mdi-brain card-icon text-danger"></i>
                                @break

                                @case('JANTUNG & PEMBULUH DARAH')
                                    <i class="mdi mdi-heart-pulse card-icon text-danger"></i>
                                @break

                                @case('PELAYANAN VASKULAR')
                                    <i class="mdi mdi-heart-pulse card-icon text-danger"></i>
                                @break

                                @case('ANAK')
                                    <i class="mdi mdi-baby-face-outline card-icon text-danger"></i>
                                @break

                                @case('PERINATOLOGI')
                                    <i class="mdi mdi-baby-bottle-outline card-icon text-danger"></i>
                                @break

                                @case('ANAK HEMATOLOGI ONKOLOGI')
                                    <i class="mdi mdi-blood-bag card-icon text-danger"></i>
                                @break

                                @case('ANAK KARDIOLOGI')
                                    <i class="mdi mdi-heart-pulse card-icon text-danger"></i>
                                @break

                                @case('ANAK ENDOKRINOLOGI')
                                    <i class="mdi mdi-human-male-female card-icon text-danger"></i>
                                @break

                                @case('NEUROLOGI ANAK')
                                    <i class="mdi mdi-human-child card-icon text-danger"></i>
                                @break

                                @case('NEFROLOGI ANAK')
                                    <i class="mdi mdi-brain card-icon text-danger"></i>
                                @break

                                @default
                                    <i class="mdi mdi-gender-female card-icon text-danger"></i>
                            @endswitch
                            <a class="stretched-link" href="{{ route('dokter.bySpesialis', $spesialisasi->id) }}">
                                <h5 class="card-title text-muted">
                                    Dokter Spesialis {{ $spesialisasi->nama_spesialisasi }}
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- GIGI PROSTHODONTI -->

        </div>
    </div>
@endsection
