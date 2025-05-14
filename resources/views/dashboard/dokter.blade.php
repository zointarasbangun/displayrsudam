@extends('layouts.appdokter')

@section('title', 'Daftar Dokter')

@section('dokter')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold text-center mb-8 text-blue-700">Daftar Dokter</h2>
        <!-- Form Pencarian -->
        <div class="mb-6 flex flex-col md:flex-row items-center gap-4">
            <input type="text" id="searchNama" placeholder="Cari berdasarkan nama"
                class="w-full md:w-1/3 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <input type="text" id="searchSpesialis" placeholder="Cari spesialis"
                class="w-full md:w-1/3 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        {{-- Grid 3 kolom responsif --}}

        <div class="container">
            <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        {{-- Kartu Dokter 1 --}}
                        <div class="bg-white rounded-lg shadow p-6 flex items-center">
                            <img src="{{ asset('images/dokter1.jpg') }}" alt="Foto Dokter"
                                class="w-24 h-24 rounded-full object-cover mr-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Andi Wijaya</h3>
                                <p class="text-gray-600">Spesialis Anak</p>
                                <div class="text-sm text-gray-500 mt-2">
                                    <p>🕒 Senin - Rabu, 08.00 - 12.00</p>
                                    <p>📍 RSUD Abdul Moeloek, Lampung</p>
                                </div>
                                <a href="#"
                                    class="inline-block mt-3 text-blue-600 border border-blue-600 px-4 py-1 rounded-full hover:bg-blue-600 hover:text-white text-sm transition">
                                    Jadwal Dokter
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        {{-- Kartu Dokter 2 --}}
                        <div class="bg-white rounded-lg shadow p-6 flex items-center">
                            <img src="{{ asset('images/dokter2.jpg') }}" alt="Foto Dokter"
                                class="w-24 h-24 rounded-full object-cover mr-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Maya Rahmawati</h3>
                                <p class="text-gray-600">Spesialis Kandungan</p>
                                <div class="text-sm text-gray-500 mt-2">
                                    <p>🕒 Selasa - Jumat, 10.00 - 15.00</p>
                                    <p>📍 RSUD Abdul Moeloek, Lampung</p>
                                </div>
                                <a href="#"
                                    class="inline-block mt-3 text-blue-600 border border-blue-600 px-4 py-1 rounded-full hover:bg-blue-600 hover:text-white text-sm transition">
                                    Jadwal Dokter
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        {{-- Kartu Dokter 3 --}}
                        <div class="bg-white rounded-lg shadow p-6 flex items-center">
                            <img src="{{ asset('images/dokter2.jpg') }}" alt="Foto Dokter"
                                class="w-24 h-24 rounded-full object-cover mr-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Maya Rahmawati</h3>
                                <p class="text-gray-600">Spesialis Kandungan</p>
                                <div class="text-sm text-gray-500 mt-2">
                                    <p>🕒 Selasa - Jumat, 10.00 - 15.00</p>
                                    <p>📍 RSUD Abdul Moeloek, Lampung</p>
                                </div>
                                <a href="#"
                                    class="inline-block mt-3 text-blue-600 border border-blue-600 px-4 py-1 rounded-full hover:bg-blue-600 hover:text-white text-sm transition">
                                    Jadwal Dokter
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        {{-- Kartu Dokter 3 --}}
                        <div class="bg-white rounded-lg shadow p-6 flex items-center">
                            <img src="{{ asset('images/dokter2.jpg') }}" alt="Foto Dokter"
                                class="w-24 h-24 rounded-full object-cover mr-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Maya Rahmawati</h3>
                                <p class="text-gray-600">Spesialis Kandungan</p>
                                <div class="text-sm text-gray-500 mt-2">
                                    <p>🕒 Selasa - Jumat, 10.00 - 15.00</p>
                                    <p>📍 RSUD Abdul Moeloek, Lampung</p>
                                </div>
                                <a href="#"
                                    class="inline-block mt-3 text-blue-600 border border-blue-600 px-4 py-1 rounded-full hover:bg-blue-600 hover:text-white text-sm transition">
                                    Jadwal Dokter
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        {{-- Kartu Dokter 3 --}}
                        <div class="bg-white rounded-lg shadow p-6 flex items-center">
                            <img src="{{ asset('images/dokter2.jpg') }}" alt="Foto Dokter"
                                class="w-24 h-24 rounded-full object-cover mr-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Maya Rahmawati</h3>
                                <p class="text-gray-600">Spesialis Kandungan</p>
                                <div class="text-sm text-gray-500 mt-2">
                                    <p>🕒 Selasa - Jumat, 10.00 - 15.00</p>
                                    <p>📍 RSUD Abdul Moeloek, Lampung</p>
                                </div>
                                <a href="#"
                                    class="inline-block mt-3 text-blue-600 border border-blue-600 px-4 py-1 rounded-full hover:bg-blue-600 hover:text-white text-sm transition">
                                    Jadwal Dokter
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        {{-- Kartu Dokter 3 --}}
                        <div class="bg-white rounded-lg shadow p-6 flex items-center">
                            <img src="{{ asset('images/dokter2.jpg') }}" alt="Foto Dokter"
                                class="w-24 h-24 rounded-full object-cover mr-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Maya Rahmawati</h3>
                                <p class="text-gray-600">Spesialis Kandungan</p>
                                <div class="text-sm text-gray-500 mt-2">
                                    <p>🕒 Selasa - Jumat, 10.00 - 15.00</p>
                                    <p>📍 RSUD Abdul Moeloek, Lampung</p>
                                </div>
                                <a href="#"
                                    class="inline-block mt-3 text-blue-600 border border-blue-600 px-4 py-1 rounded-full hover:bg-blue-600 hover:text-white text-sm transition">
                                    Jadwal Dokter
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
@endsection