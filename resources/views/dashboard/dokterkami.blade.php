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
            background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
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
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #3498db, #9b59b6);
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
        <h2 class="text-center mb-8 section-title">
            <span class="display-4 font-bold text-dark">DOKTER KAMI</span>
        </h2>

        <div class="row">
            <!-- Dokter Spesialis Penyakit Dalam -->
            <div class="col-md-4 mb-4">
                <div class="card-animate card shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center card-body">
                        <i class="mdi mdi-stethoscope card-icon text-info"></i>
                        <a class="stretched-link" href="/dokter-penyakit-dalam">
                            <h5 class="card-title text-muted">Dokter Spesialis Penyakit Dalam</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dokter Spesialis Anak -->
            <div class="col-md-4 mb-4">
                <div class="card-animate card shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center card-body">
                        <i class="mdi mdi-baby-bottle card-icon text-primary"></i>
                        <a class="stretched-link" href="/dokter-anak">
                            <h5 class="card-title text-muted">Dokter Spesialis Anak</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dokter Spesialis Kandungan -->
            <div class="col-md-4 mb-4">
                <div class="card-animate card shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center card-body">
                        <i class="mdi mdi-human-pregnant card-icon text-danger"></i>
                        <a class="stretched-link" href="/dokter-kandungan">
                            <h5 class="card-title text-muted">Dokter Spesialis Kandungan</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dokter Spesialis Bedah -->
            <div class="col-md-4 mb-4">
                <div class="card-animate card shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-center card-body">
                        <i class="mdi mdi-scissors-cutting card-icon text-warning"></i>
                        <a class="stretched-link" href="/dokter-bedah">
                            <h5 class="card-title text-muted">Dokter Spesialis Bedah</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dokter Spesialis Anestesi -->
            <div class="col-md-4 mb-4">
                <div class="card-animate card shadow-sm" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center card-body">
                        <i class="mdi mdi-needle card-icon text-secondary"></i>
                        <a class="stretched-link" href="/dokter-anestesi">
                            <h5 class="card-title text-muted">Dokter Spesialis Anestesi</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dokter Spesialis Radiologi -->
            <div class="col-md-4 mb-4">
                <div class="card-animate card shadow-sm" data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center card-body">
                        <i class="mdi mdi-radiology-box card-icon text-success"></i>
                        <a class="stretched-link" href="/dokter-radiologi">
                            <h5 class="card-title text-muted">Dokter Spesialis Radiologi</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
