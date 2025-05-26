@extends('backend.layouts.app')

@section('content')
@php
    $prefixRoute = auth()->user()->role === 'superadmin' ? 'superadmin' : 'admin';
@endphp

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                <h3><i class="fa-solid fa-bars" style="color: rgb(118, 45, 45);"></i> Marquee</h3>
                <p><i class="fas fa-info-circle" style="color: rgb(69, 143, 255)"></i>Halaman Running text</p>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#runningTextModal">
                            <i class="iconify nav-icon" data-icon="icon-park-solid:add"></i> Tambah
                        </a>
                    </div>

                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    {{-- Modal Tambah --}}
                    <div class="modal fade" id="runningTextModal" tabindex="-1" role="dialog"
                        aria-labelledby="runningTextModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="color:black; background:#ffffff; padding:10px;">
                                <div class="modal-header text-start">
                                    <h5 class="modal-title w-100 font-weight-bold" id="runningTextModalTitle">Tambah Running Text</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form method="POST" id="runningTextForm" action="{{ route($prefixRoute . '.runningtext.store') }}">
                                    @csrf
                                    <div class="modal-body mx-3">
                                        <div class="mb-2">
                                            <i class="mr-3 fa-solid fa-pen"></i>
                                            <label for="text">Isi Running Text</label>
                                            <input type="text" name="text" class="form-control validate" placeholder="Masukkan isi teks berjalan" required>
                                        </div>

                                        <div class="mb-2">
                                            <i class="mr-3 fa-solid fa-toggle-on"></i>
                                            <label for="status">Status</label>
                                            <select name="status" class="form-control validate">
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success" id="submitBtn">Tambah data</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Teks</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($texts as $index => $text)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $text->text }}</td>
                                        <td>
                                            @if ($text->status)
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-secondary">Tidak Aktif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal-update{{ $text->id }}" class="btn btn-warning">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-hapus{{ $text->id }}" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>

                                    {{-- Modal Edit --}}
                                    <div class="modal fade" id="modal-update{{ $text->id }}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="color:black; background:#ffffff; padding:10px;">
                                                <div class="modal-header text-start">
                                                    <h5 class="modal-title w-100 font-weight-bold">Edit Running Text</h5>
                                                    <button type="button" class="close" data-dismiss="modal" style="color: red;">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form method="POST" action="{{ route($prefixRoute . '.runningtext.update', ['id' => $text->id]) }}">
                                                    @csrf
                                                    <div class="modal-body mx-3">
                                                        <div class="mb-2">
                                                            <i class="mr-3 fa-solid fa-pen"></i>
                                                            <label for="text">Isi Running Text</label>
                                                            <input type="text" name="text" class="form-control validate" value="{{ $text->text }}" required>
                                                        </div>

                                                        <div class="mb-2">
                                                            <i class="mr-3 fa-solid fa-toggle-on"></i>
                                                            <label for="status">Status</label>
                                                            <select name="status" class="form-control validate">
                                                                <option value="1" {{ $text->status ? 'selected' : '' }}>Aktif</option>
                                                                <option value="0" {{ !$text->status ? 'selected' : '' }}>Tidak Aktif</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Modal Hapus --}}
                                    <div class="modal fade" id="modal-hapus{{ $text->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda yakin ingin menghapus <b>{{ $text->text }}</b>?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form method="POST" action="{{ route($prefixRoute . '.runningtext.delete', ['id' => $text->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection