@extends('layouts.appdokter')

@section('title', 'Daftar Dokter')

@section('dokter')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-center mb-4 text-blue-700">Daftar Dokter</h1>
        <!-- Form Pencarian -->
        <div class="mb-3 flex flex-col md:flex-row items-center gap-4">
            <input type="text" id="searchNama" placeholder="Cari berdasarkan nama"
                class="w-full md:w-1/3 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <input type="text" id="searchSpesialis" placeholder="Cari spesialis"
                class="w-full md:w-1/3 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        {{-- Grid 3 kolom responsif --}}

        <div class="container mx-auto px-4 py-6">
            <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
                @foreach ($dokters as $dokter)
                    <div class="col-md-4 mb-4 text-sm-start">
                        <!-- CARD DOKTER -->
                        <div class="d-flex flex-column align-items-center">
                            <div class="bg-white rounded rounded-4 shadow-lg p-4 d-flex w-100 align-items-start border border-light-subtle h-100"
                                style="min-height: 260px; transition: transform 0.3s ease, box-shadow 0.3s ease; max-width: 100%;"
                                onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.1)'"
                                onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)'">

                                <!-- Gambar sebagai tombol modal -->
                                <div class="me-4 flex-shrink-0">
                                    <button type="button" class="btn p-0 border-0 bg-transparent" data-bs-toggle="modal"
                                        data-bs-target="#fotoModal{{ $dokter->id }}">
                                        <img src="{{ asset('storage/' . $dokter->foto) }}" alt="{{ $dokter->nama_dokter }}"
                                            class="rounded rounded-4 shadow object-fit-cover"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                    </button>
                                </div>

                                <!-- Informasi Dokter -->
                                <div class="flex-grow-1 d-flex flex-column">
                                    <h3 class="fs-5 fw-bold text-primary mb-1" style="word-break: break-word;">
                                        {{ $dokter->nama_dokter }}
                                    </h3>
                                    <p class="text-secondary mb-2">{{ $dokter->spesialis->nama_spesialisasi }}</p>
                                    <div class="small text-muted mb-2">
                                        @forelse($dokter->jadwalpraktik as $jadwal)
                                            <p>🕒 {{ $jadwal->hari }}, {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}
                                            </p>
                                        @empty
                                            <p class="text-danger">Belum ada jadwal praktik</p>
                                        @endforelse
                                        <p>📍 RSUD Abdul Moeloek, Lampung</p>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill mt-auto px-3 py-1">
                                        Jadwal Dokter
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- MODAL FOTO -->
                        <div class="modal fade" id="fotoModal{{ $dokter->id }}" tabindex="-1"
                            aria-labelledby="fotoModalLabel{{ $dokter->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0 rounded-4">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title" id="fotoModalLabel{{ $dokter->id }}">Foto
                                            {{ $dokter->nama_dokter }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ asset('storage/' . $dokter->foto) }}"
                                            alt="Foto {{ $dokter->nama_dokter }}" class="img-fluid rounded shadow">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    @endsection
