@extends('layouts.app') {{-- Ganti dengan layout utama kamu --}}

@section('content')
    <div class="container mt-4">
        <h2>Manajemen Testimoni</h2>

        {{-- Alert jika ada pesan --}}
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @elseif(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Form Tambah Testimoni --}}
        <div class="card shadow-sm rounded my-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Testimoni</h5>
            </div>
            <div class="card-body">
                <form action="{{ route(auth()->user()->role . '.testimoni.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Masukkan nama lengkap" autocomplete="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Masukkan email aktif" autocomplete="email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea name="message" id="message" rows="4" class="form-control" placeholder="Tulis pesan atau testimoni..."
                            required></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="media" class="form-label">Jenis Media</label>
                            <select name="media_type" id="media" class="form-select" required>
                                <option value="" disabled selected>-- Pilih Jenis Media --</option>
                                <option value="video">video</option>
                                <option value="image">image</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="video_url" class="form-label">URL Video (Jika Media Video)</label>
                            <input type="url" name="video_url" id="video_url" class="form-control"
                                placeholder="https://youtube.com/..." autocomplete="off">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label">Upload Gambar (Jika Media Gambar)</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send-fill me-1"></i> Kirim Testimoni
                    </button>
                </form>
            </div>
        </div>

        {{-- Daftar Testimoni --}}
        <div class="card">
            <div class="card-header">Daftar Testimoni</div>
            <div class="card-body">
                <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Media</th>
                                <th>image</th>
                                <th>url video</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonis as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td>{{ $item->media_type }}</td>
                                    <td>
                                        @if ($item->image)
                                            <img src="{{ asset($item->image) }}" width="100">
                                        @else
                                            Tidak Ada
                                        @endif
                                    </td>
                                    <td>{{ $item->video_url}}</td>
                                    <td>
                                        {{-- Edit dan Hapus bisa ditambahkan modal/form jika diinginkan --}}
                                        <form action="{{ route(auth()->user()->role . '.testimoni.delete', $item->id) }}"
                                            method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mt-1">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($testimonis) === 0)
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada testimoni</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
