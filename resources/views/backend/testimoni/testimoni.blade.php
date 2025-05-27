@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 100vh;">
    <div class="container-fluid mt-4">

        <h2 class="mb-4 text-primary"><i class="bi bi-chat-dots-fill me-2"></i>Manajemen Testimoni</h2>

        {{-- Alert --}}
        @if (session('message') || session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') ?? session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Tombol trigger modal --}}
        <button class="btn btn-primary mb-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahTestimoniModal">
            <i class="bi bi-plus-circle me-1"></i> Tambah Testimoni
        </button>

        {{-- Modal Form --}}
        <div class="modal fade" id="tambahTestimoniModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route(auth()->user()->role . '.testimoni.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="modalLabel"><i class="bi bi-pencil-square me-2"></i>Tambah Testimoni</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control" required autocomplete="name" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required autocomplete="email">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="media_type" class="form-label">Jenis Media</label>
                                    <select name="media_type" id="media_type" class="form-select" required>
                                        <option value="" disabled selected>-- Pilih Jenis Media --</option>
                                        <option value="video">Video</option>
                                        <option value="image">Image</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="video_url" class="form-label">URL Video (jika video)</label>
                                    <input type="url" name="video_url" id="video_url" class="form-control" placeholder="https://youtube.com/..." autocomplete="off">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Gambar (jika image)</label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><i class="bi bi-send me-1"></i> Kirim Testimoni</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Daftar Testimoni full height --}}
        <div class="card shadow-sm" style="height: calc(100vh - 240px);">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>Daftar Testimoni</h5>
            </div>
            <div class="card-body table-responsive p-0" style="height: calc(100% - 56px); overflow-y: auto;">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-light sticky-top" style="z-index: 1;">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Media</th>
                            <th>Gambar</th>
                            <th>URL Video</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonis as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->message }}</td>
                                <td>{{ ucfirst($item->media_type) }}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset($item->image) }}" width="100" class="img-thumbnail">
                                    @else
                                        <span class="text-muted">Tidak Ada</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->video_url)
                                        <a href="{{ $item->video_url }}" target="_blank" class="btn btn-sm btn-outline-primary">Tonton</a>
                                    @else
                                        <span class="text-muted">Tidak Ada</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route(auth()->user()->role . '.testimoni.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-danger p-0">
                                            <i class="bi bi-trash3-fill"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada testimoni</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection