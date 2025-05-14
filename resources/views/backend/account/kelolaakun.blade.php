@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper">

        <div class="container-fluid">
            <div class="card mt-3">
                <div class="card-header">
                    <h3><i class="fas fa-home" style="color: rgb(118, 45, 45);"></i> Kelola Akun</h3>
                    <p><i class="fas fa-info-circle" style="color: rgb(69, 143, 255)"></i>Halaman Kelola Akun
                    </p>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" data-toggle="modal" data-target="#penggunaModal">
                                <i class="iconify nav-icon" data-icon="icon-park-solid:add"></i> Tambah
                            </a>
                        </div>
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <div class="modal fade" id="penggunaModal" tabindex="-1" role="dialog"
                            aria-labelledby="penggunaModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="color:black; background:#ffffff; padding:10px;">
                                    <div class="modal-header text-start">
                                        <h5 class="modal-title w-100 font-weight-bold" id="penggunaModalTitle">Tambah
                                            Pengguna</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            style="color: red;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form method="POST" id="penggunaForm" action="{{ route('pengguna.store') }}">
                                        @csrf
                                        <input type="hidden" name="id" id="penggunaId"> {{-- Untuk mode edit --}}
                                        <div class="modal-body mx-3">

                                            <div class="mb-2">
                                                <i class="mr-3 fa-solid fa-pen"></i>
                                                <label for="name">Nama</label>
                                                <input type="name" name="name" id="penggunaContent"
                                                    class="form-control validate" placeholder="Masukkan Nama"
                                                    style="color:black;" required>
                                            </div>

                                            <div class="mb-2">
                                                <i class="iconify nav-icon mr-3" data-icon="ic:outline-email"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-email">Email</label>
                                                <input type="email" name="email" id="defaultForm-email"
                                                    class="form-control validate" placeholder="Input email"
                                                    style="color:black;">
                                            </div>

                                            <div class="mb-2">
                                                <i class="iconify nav-icon mr-3"
                                                    data-icon="teenyicons:password-outline"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-pass">Pin</label>
                                                <input type="pin" name="pin" id="defaultForm-pass"
                                                    class="form-control validate" placeholder="Input pin"
                                                    style="color:black;">
                                            </div>

                                            <div class="mb-2">
                                                <i class="mr-3 fa-regular fa-check-circle"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-statusPelanggan">Role :</label>
                                                <select name="role" id="defaultForm-statusPelanggan"
                                                    class="form-control validate" style="color:black;">
                                                    <option value="admin" selected>Admin</option>
                                                    <option value="superadmin" selected>Super Admin</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success" id="submitBtn">Tambah
                                                Akun</button>
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
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Pin</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($users as $index => $d)
                                    <tbody>

                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->email }}</td>
                                            <td><a class="btn btn-warning text-bold" aria-disabled="true">Pin
                                                    terenkripsi !
                                                </a></td>
                                            <td>{{ $d->role }} </td>
                                            <td>
                                                @if ($d->email == 'superadmin@gmail.com')
                                                    <a class="btn btn-danger disabled" aria-disabled="true">Data
                                                        tidak bisa diubah
                                                    </a>
                                                @else
                                                    <a data-toggle="modal" data-target="#modal-update{{ $d->id }}"
                                                        class="btn btn-warning">
                                                        <i class="fas fa-pen"></i> Edit
                                                    </a>

                                                    @if (Auth::user()->email == $d->email)
                                                        <a class="btn btn-danger disabled" aria-disabled="true">
                                                            <i class="fas fa-trash-alt"></i> Hapus
                                                        </a>
                                                    @else
                                                        <a data-toggle="modal"
                                                            data-target="#modal-hapus{{ $d->id }}"
                                                            class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i> Hapus
                                                        </a>
                                                    @endif
                                                @endif
                                            </td>

                                        </tr>
                                    </tbody>
                                    <div class="modal fade" id="modal-update{{ $d->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editpenggunaModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content"
                                                style="color:black; background:#ffffff; padding:10px;">
                                                <div class="modal-header text-start">
                                                    <h5 class="modal-title w-100 font-weight-bold">Update Akun
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close" style="color: red;">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form method="POST"
                                                    action="{{ route('pengguna.update', ['id' => $d->id]) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body mx-3">

                                                        <div class="mb-2">
                                                            <i class="mr-3 fa-solid fa-pen"></i>
                                                            <label data-error="wrong" data-success="right"
                                                                for="defaultForm-Username">Nama</label>
                                                            <input type="text" name="name" id="editpenggunaContent"
                                                                class="form-control validate" value="{{ $d->name }}"
                                                                style="color:black;" required>
                                                        </div>

                                                        <div class="mb-2">
                                                            <i class="iconify nav-icon mr-3"
                                                                data-icon="ic:outline-email"></i>
                                                            <label data-error="wrong" data-success="right"
                                                                for="defaultForm-email">Email</label>
                                                            <input type="email" name="email" id="defaultForm-email"
                                                                class="form-control validate" value="{{ $d->email }}"
                                                                style="color:black;">
                                                        </div>

                                                        <div class="mb-2">
                                                            <i class="iconify nav-icon mr-3"
                                                                data-icon="teenyicons:password-outline"></i>
                                                            <label data-error="wrong" data-success="right"
                                                                for="defaultForm-pass">Pin</label>
                                                            <input type="pin" name="pin" id="defaultForm-pass"
                                                                class="form-control validate"placeholder="Input pin"
                                                                style="color:black;">
                                                        </div>

                                                        <div class="mb-2">
                                                            <i class="mr-3 fa-regular fa-check-circle"></i>
                                                            <label for="defaultForm-statusPelanggan">Role :</label>
                                                            <select id="defaultForm-statusPelanggan"
                                                                class="form-control validate" style="color:black;"
                                                                disabled>
                                                                <option value="admin" @selected($d->role == 'admin')>
                                                                    Admin</option>
                                                                <option value="superadmin" @selected($d->role == 'superadmin')>
                                                                    Super
                                                                    Admin</option>
                                                            </select>
                                                            <!-- Input hidden agar nilai role tetap dikirim -->
                                                            <input type="hidden" name="role"
                                                                value="{{ $d->role }}">
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </table>
                            @foreach ($users as $index => $d)
                                <div class="modal fade" id="modal-hapus{{ $d->id }}">
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
                                                    <b>{{ $d->name }} ?</b>

                                                </p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <form action="{{ route('pengguna.delete', ['id' => $d->id]) }}"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
