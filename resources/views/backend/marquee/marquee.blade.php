@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mt-3">
                <div class="card-header">
                    <h3><i class="fa-solid fa-bars" style="color: rgb(118, 45, 45);"></i> Marquee</h3>
                    <p><i class="fas fa-info-circle" style="color: rgb(69, 143, 255)"></i>Halaman Running text
                    </p>
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

                        <div class="modal fade" id="runningTextModal" tabindex="-1" role="dialog"
                            aria-labelledby="runningTextModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="color:black; background:#ffffff; padding:10px;">
                                    <div class="modal-header text-start">
                                        <h5 class="modal-title w-100 font-weight-bold" id="runningTextModalTitle">Tambah
                                            Running Text</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            style="color: red;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form method="POST" id="runningTextForm" action="{{ route('runningtext.store') }}">
                                        @csrf
                                        <input type="hidden" name="id" id="runningTextId"> {{-- Untuk mode edit --}}
                                        <div class="modal-body mx-3">

                                            <div class="mb-2">
                                                <i class="mr-3 fa-solid fa-pen"></i>
                                                <label for="text">Isi Running Text</label>
                                                <input type="text" name="text" id="runningTextContent"
                                                    class="form-control validate" placeholder="Masukkan isi teks berjalan"
                                                    style="color:black;" required>
                                            </div>

                                            <div class="mb-2">
                                                <i class="mr-3 fa-solid fa-toggle-on"></i>
                                                <label for="status">Status</label>
                                                <select name="status" id="runningTextStatus" class="form-control validate"
                                                    style="color:black;">
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Tidak Aktif</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success" id="submitBtn">Tambah
                                                data</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                            <table id="example2" class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Teks</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
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
                                                <a data-toggle="modal" data-target="#modal-update{{ $text->id }}"
                                                    class="btn btn-warning"> <i class="fas fa-pen"></i> Edit</a>
                                                <a data-toggle="modal" data-target="#modal-hapus{{ $text->id }}"
                                                    class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="modal-update{{ $text->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editRunningTextModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content"
                                                    style="color:black; background:#ffffff; padding:10px;">
                                                    <div class="modal-header text-start">
                                                        <h5 class="modal-title w-100 font-weight-bold">Edit Running Text
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" style="color: red;">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form method="POST"
                                                        action="{{ route('runningtext.update', ['id' => $text->id]) }}">
                                                        @csrf
                                                        <input type="hidden" name="id" id="editRunningTextId">
                                                        {{-- Hidden ID untuk update --}}
                                                        <div class="modal-body mx-3">

                                                            <div class="mb-2">
                                                                <i class="mr-3 fa-solid fa-pen"></i>
                                                                <label for="text">Isi Running Text</label>
                                                                <input type="text" name="text"
                                                                    id="editRunningTextContent"
                                                                    class="form-control validate"
                                                                    value="{{ $text->text }}" style="color:black;"
                                                                    required>
                                                            </div>

                                                            <div class="mb-2">
                                                                <i class="mr-3 fa-solid fa-toggle-on"></i>
                                                                <label for="status">Status</label>
                                                                <select name="status" id="editRunningTextStatus"
                                                                    class="form-control validate" style="color:black;">
                                                                    <option value="1">Aktif</option>
                                                                    <option value="0">Tidak Aktif</option>
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

                                        <div class="modal fade" id="modal-hapus{{ $text->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Default Modal</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus
                                                            <b>{{ $text->text }} ?</b>

                                                        </p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <form
                                                            action="{{ route('runningtext.delete', ['id' => $text->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Ya,
                                                                Hapus</button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
