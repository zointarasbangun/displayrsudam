@extends('layouts.appunggulan')

@section('poliklinik')
<style>
  .card-poli {
    border: 1px solid #ddd;
    border-radius: 12px;
    padding: 20px;
    margin: 10px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #fff;
  }
  .card-poli:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  }
  .card-poli img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    margin-bottom: 10px;
  }
  .card-title {
    font-size: 1.2rem;
    font-weight: 600;
  }
  @media (max-width: 576px) {
    .card-poli img {
      width: 60px;
      height: 60px;
    }
    .card-title {
      font-size: 1rem;
    }
  }
  /* Tambahkan padding-top supaya konten tidak tertutup top bar */
  #poliklinik {
    padding-top: 100px; /* Atur sesuai tinggi top bar */
  }
</style>

<section class="py-5" id="poliklinik">
  <div class="container">
    <h1 class="text-center mb-4">POLIKLINIK KESEHATAN</h1>
    <div class="row">
      @php
        $poli = [
          [
            'title' => 'Anak',
            'icon' => 'anak',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Anak, Anak Kardiologi, Anak Hematologi Onkologi, Anak Endokrinologi, Neurologi Anak, Nefrologi Anak, dan Perinatologi',
            'desc' => 'Menangani masalah kesehatan mulai dari bayi baru lahir hingga usia remaja (biasanya sampai usia 18 tahun).',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => '',
          ],
          [
            'title' => 'Anestesi',
            'icon' => 'anestesi',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Anestesi dan Neuroanestesi.',
            'desc' => 'Menangani pasien yang membutuhkan persiapan anestesi (pembiusan) untuk tindakan medis dan bedah, serta evaluasi dan tindak lanjut pasien yang memerlukan perawatan intensif.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 3',
            'url_dokter' => ''
          ],
          [
            'title' => 'Bedah',
            'icon' => 'bedah',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Bedah Umum, Bedah Onkologi, Bedah Plastik, Bedah Anak, Bedah Syaraf, dan Bedah Thorax Kardiak & Vaskuler',
            'desc' => 'Menangani berbagai kondisi yang memerlukan evaluasi dan tindakan bedah (operasi), baik yang bersifat elektif (terjadwal) maupun darurat.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 3',
            'url_dokter' => ''
          ],
          [
            'title' => 'Gigi & Bedah Mulut',
            'icon' => 'gigi',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Gigi Umum, Gigi Prosthodonti, Gigi Endodonsi, Orthodonti, Penyakit Mulut, dan Bedah Mulut',
            'desc' => 'Menangani berbagai masalah kesehatan gigi, mulut, dan rahang, baik yang bersifat ringan (seperti karies gigi) hingga kasus yang memerlukan tindakan pembedahan.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 4',
            'url_dokter' => ''
          ],
          [
            'title' => 'Gizi',
            'icon' => 'gizi',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Gizi Klinik',
            'desc' => 'Menangani berbagai masalah terkait status gizi, pola makan, dan nutrisi klinis untuk mendukung kesehatan dan pengobatan pasien.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 4',
            'url_dokter' => ''
          ],
             [
            'title' => 'Jantung dan Pembuluh Darah',
            'icon' => 'jantung',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Jantung & Pembuluh darah, Pelayanan Vaskular',
            'desc' => 'Menangani berbagai masalah yang berhubungan dengan kesehatan jantung dan pembuluh darah.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
          [
            'title' => 'Kanca Sehati',
            'icon' => 'kanca',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Kanca Sehati',
            'desc' => 'Menangani segala hal yang berkaitan dengan pencegahan, diagnosis, pengobatan, dan pengelolaan infeksi HIV/AIDS.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 4',
            'url_dokter' => ''
          ],
          [
            'title' => 'Kedokteran Jiwa',
            'icon' => 'jiwa',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Jiwa',
            'desc' => 'Menangani berbagai masalah dan gangguan kesehatan mental.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
          [
            'title' => 'Kedokteran Fisik dan Rehabilitasi',
            'icon' => 'rehab',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Rehabilitasi Medik',
            'desc' => 'Menangani proses pemulihan fungsi tubuh dan kualitas hidup pasien yang mengalami gangguan fisik atau kesehatan akibat penyakit, cedera, atau operasi.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
           [
            'title' => 'Kulit Kelamin',
            'icon' => 'kelamin',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Kulit Kelamin',
            'desc' => 'Menangani berbagai masalah kesehatan yang berkaitan dengan kulit serta penyakit menular seksual (PMS).',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 3',
            'url_dokter' => ''
          ],
          [
            'title' => 'Mata',
            'icon' => 'mata',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Mata, Vitreo Retina',
            'desc' => 'Menangani berbagai masalah yang berkaitan dengan kesehatan dan gangguan pada mata.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
          [
            'title' => 'Obstetri dan Ginekologi',
            'icon' => 'ginekologi',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Obstetri Ginekologi Sosial, Obgyn, Onkologi Ginekologi, Fetomaternal',
            'desc' => 'Menangani segala hal yang berkaitan dengan kesehatan reproduksi wanita, kehamilan, dan proses persalinan.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
          [
            'title' => 'Orthopedi dan Traumatology',
            'icon' => 'ortho',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Orthopedi, Spine, Hip & Knee, Hand & Microsurgery',
            'desc' => 'Menangani masalah pada sistem muskuloskeletal, yaitu tulang, sendi, otot, ligamen, dan tendon.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 3',
            'url_dokter' => ''
          ],
           [
            'title' => 'Paru',
            'icon' => 'paru',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Paru, Onkologi Toraks, Asma PPOK',
            'desc' => 'Menangani berbagai masalah dan penyakit yang berkaitan dengan paru-paru dan saluran pernapasan.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
           [
            'title' => 'Penyakit Dalam',
            'icon' => 'dalam',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Penyakit Dalam, Gastroenterologi-Hepatologi, Hematologi-Onkologi Medik, Ginjal-Hipertensi, Reumatologi, Endokrinologi',
            'desc' => 'Menangani berbagai penyakit organ dalam yang bersifat non-bedah pada pasien dewasa.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
           [
            'title' => 'Psikologi',
            'icon' => 'psikologi',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Psikologi',
            'desc' => 'Menangani masalah psikologis, mental, dan perilaku pada individu, baik anak-anak maupun orang dewasa.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 2',
            'url_dokter' => ''
          ],
           [
            'title' => 'Saraf',
            'icon' => 'saraf',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Neurologi (Saraf)',
            'desc' => 'Menangani berbagai gangguan dan penyakit yang berhubungan dengan sistem saraf, yaitu otak, sumsum tulang belakang, saraf tepi, serta otot.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 3',
            'url_dokter' => ''
          ],
           [
            'title' => 'THT-KL',
            'icon' => 'tht',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'THT-KL',
            'desc' => 'Menangani gangguan kesehatan yang berhubungan dengan telinga, hidung (sinus), tenggorokan, saluran pernapasan atas, leher dan kepala bagian luar.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 4',
            'url_dokter' => ''
          ],
           [
            'title' => 'Urologi',
            'icon' => 'urologi',
            'desc_img' => 'poli01.jpg',
            'sub_poli' => 'Urologi',
            'desc' => 'Menangani penyakit yang berkaitan dengan saluran kemih pria dan wanita, serta organ reproduksi pria.',
            'lokasi' => 'Gedung Poliklinik/Rawat Jalan, Lantai 3',
            'url_dokter' => ''
          ],
          // ...tambahkan data lain sesuai kebutuhan
        ];
      @endphp

      @foreach($poli as $index => $item)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
        <div class="card-poli w-100">
          <button 
            class="btn text-dark text-decoration-none w-100" 
            data-bs-toggle="modal" 
            data-bs-target="#modalP{{ $index }}"
          >
            <img src="{{ asset('live/assets/img/icons/'.$item['icon'].'.png') }}" alt="{{ $item['title'] }}">
            <div class="card-title">{{ $item['title'] }}</div>
          </button>
        </div>
      </div>

      <!-- Modal Utama Poliklinik -->
      <div class="modal fade" id="modalP{{ $index }}" tabindex="-1" aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel{{ $index }}">{{ $item['title'] }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <img 
                src="{{ asset('live/assets/img/desc_images/' . $item['desc_img']) }}" 
                alt="Deskripsi {{ $item['title'] }}" 
                style="width: 100%; margin-bottom: 15px;"
                onerror="this.style.display='none'" 
              >
              <p> {{ $item['desc'] }}</p>
              <p><strong>Sub Poli:</strong> {{ $item['sub_poli'] }}</p>
              <p><strong>Lokasi:</strong> {{ $item['lokasi'] }}</p>

              <!-- Tombol untuk membuka modal dokter -->
              <a href="{{ $item['url_dokter'] }}" class="btn btn-primary mt-3 w-100">
                Lihat Dokter
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection

@section('igd24')
<section class="bg-secondary py-5" id="igd24">
  <div class="container">
    <h1 class="text-center text-white mb-4">IGD 24 JAM</h1>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <img class="img-fluid rounded w-100" style="height: 300px; object-fit: cover;"
          src="{{ asset('live/assets/img/igd1.png') }}" alt="Gedung IGD RSUDAM" />
      </div>
      <div class="col-md-6 mb-3">
        <img class="img-fluid rounded w-100" style="height: 300px; object-fit: cover;"
          src="{{ asset('live/assets/img/igd2.png') }}" alt="Ruang IGD Zona 1" />
      </div>
    </div>
    <div class="text-center text-light mt-4">
      <p class="fw-bold mb-2">
        Layanan Instalasi Gawat Darurat (IGD) RSUDAM Provinsi Lampung dilayani Dokter Spesialis on-site
        setiap Hari Pukul 17.00-06.00 WB terdiri dari:
      </p>
      <p>
        dr. Spesialis Penyakit Dalam<br />
        dr. Spesialis Bedah<br />
        dr. Spesialis Kandungan
      </p>
    </div>
  </div>
</section>
@endsection

@section('labrad')
<section class="bg-secondary py-5" id="labrad">
  <div class="container">
    <h1 class="text-center text-white mb-4">LABORATORIUM DAN RADIOLOGI MODERN</h1>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <img class="img-fluid rounded w-100" style="height: 300px; object-fit: cover;"
          src="{{ asset('live/assets/img/radiologi01.jpg') }}" alt="Laboratorium Modern" />
      </div>
      <div class="col-md-6 mb-3">
        <img class="img-fluid rounded w-100" style="height: 300px; object-fit: cover;"
          src="{{ asset('live/assets/img/lab01.jpg') }}" alt="Radiologi Modern" />
      </div>
    </div>
    <div class="text-center text-light mt-3">
      <p>
        Laboratorium dan Radiologi Modern kami dilengkapi dengan peralatan terkini untuk menunjang proses diagnosis
        secara akurat dan cepat, dilayani oleh tenaga ahli profesional.
      </p>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<!-- Bootstrap Bundle with Popper (Modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush