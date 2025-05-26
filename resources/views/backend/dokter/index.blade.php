@extends('backend.layouts.app')

@section('content')
    <style>
        /* Modal Custom Style */
        .modal-content {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .modal-icon {
            background: rgba(255, 255, 255, 0.2);
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .floating-label {
            position: relative;
        }

        .floating-label label {
            position: absolute;
            top: 12px;
            left: 45px;
            color: #6c757d;
            transition: all 0.3s;
            pointer-events: none;
            background: white;
            padding: 0 5px;
        }

        .floating-label .prefix-icon {
            position: absolute;
            left: 15px;
            top: 12px;
            color: #6c757d;
        }

        .floating-label input:focus~label,
        .floating-label input:not(:placeholder-shown)~label,
        .floating-label select:focus~label,
        .floating-label select:not([value=""])~label {
            top: -10px;
            left: 40px;
            font-size: 12px;
            color: #667eea;
        }

        .form-control,
        .form-select {
            padding-left: 45px;
            height: 45px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }

        /* File Upload Style */
        .file-upload-wrapper {
            position: relative;
        }

        .file-upload-input {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        .file-upload-label {
            display: block;
            cursor: pointer;
        }

        .file-upload-design {
            border: 2px dashed #e0e0e0;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
        }

        .file-upload-label:hover .file-upload-design {
            border-color: #667eea;
            background: rgba(102, 126, 234, 0.05);
        }

        .file-upload-preview img {
            max-height: 150px;
            display: block;
            margin: 0 auto;
        }

        /* Button Styles */
        .btn-check:checked+.btn-outline-primary {
            background-color: rgba(102, 126, 234, 0.1);
            border-color: #667eea;
            color: #667eea;
            font-weight: 500;
        }

        .btn-check:checked+.btn-outline-success {
            background-color: rgba(40, 167, 69, 0.1);
            border-color: #28a745;
            color: #28a745;
            font-weight: 500;
        }

        .btn-check:checked+.btn-outline-danger {
            background-color: rgba(220, 53, 69, 0.1);
            border-color: #dc3545;
            color: #dc3545;
            font-weight: 500;
        }
    </style>

    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                            <h5 class="mb-0">Daftar Dokter</h5>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#createDokterModal">
                                <i class="fas fa-plus me-2"></i>Tambah Dokter
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="createDokterModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0">
                                    <!-- Modal Header dengan Gradient -->
                                    <div class="modal-header bg-gradient-primary text-white">
                                        <div class="d-flex align-items-center">
                                            <div class="modal-icon me-3">
                                                <i class="fas fa-user-md fa-2x"></i>
                                            </div>
                                            <div class="ml-2">
                                                <h5 class="modal-title mb-0">Tambah Dokter Baru</h5>
                                                <p class="small mb-0">Isi form berikut untuk menambahkan dokter baru</p>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close btn-close-red" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body p-4">
                                        <form id="createDokterForm" method="POST"
                                            action="{{ route('superadmin.dokter.store') }}" enctype="multipart/form-data">
                                            @csrf

                                            <!-- Nama Dokter -->
                                            <div class="form-group floating-label">

                                                <input type="text" class="form-control" id="nama_dokter"
                                                    name="nama_dokter" required>
                                                <i class="fas fa-user prefix-icon"></i>
                                                <label for="nama_dokter">Nama Dokter</label>

                                            </div>

                                            <!-- Tipe Dokter -->
                                            <div class="form-group">
                                                <i class="fas fa-user prefix-icon"></i>
                                                <label class="form-label">Tipe Dokter</label>
                                                <div class="d-flex gap-3">
                                                    <div class="flex-grow-1">
                                                        <input type="radio" class="btn-check" name="tipe_dokter"
                                                            id="tipe_umum" value="umum" autocomplete="off" checked>
                                                        <label class="btn btn-outline-primary w-100 py-3" for="tipe_umum">
                                                            <i class="fas fa-user-md me-2 mr-2 "></i>Dokter Umum
                                                        </label>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <input type="radio" class="btn-check" name="tipe_dokter"
                                                            id="tipe_spesialis" value="spesialis" autocomplete="off">
                                                        <label class="btn btn-outline-success w-100 py-3"
                                                            for="tipe_spesialis">
                                                            <i class="fas fa-stethoscope me-2 mr-2"></i>Dokter Spesialis
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Spesialisasi (Conditional) -->
                                            <div class="form-group floating-label mt-3" id="spesialisasi-group"
                                                style="display: none;">
                                                <select class="form-select" id="spesialis_id" name="spesialis_id">
                                                    <option value="" selected disabled></option>
                                                    @foreach ($spesialisasis as $spesialisasi)
                                                        <option value="{{ $spesialisasi->id }}">
                                                            {{ $spesialisasi->nama_spesialisasi }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="spesialis_id">Spesialisasi</label>
                                                <i class="fas fa-certificate prefix-icon"></i>
                                            </div>

                                            <!-- Upload Foto -->
                                            <div class="form-group">
                                                <label class="form-label">Foto Dokter</label>
                                                <div class="file-upload-wrapper">
                                                    <input type="file" id="foto" name="foto"
                                                        class="file-upload-input" accept="image/*" required>
                                                    <label for="foto" class="file-upload-label">
                                                        <div class="file-upload-design">
                                                            <i class="fas fa-cloud-upload-alt fa-3x mb-3 text-primary"></i>
                                                            <p class="mb-1">Drag and drop file here</p>
                                                            <p class="small text-muted">or click to browse (Max 2MB)</p>
                                                        </div>
                                                        <div class="file-upload-preview d-none">
                                                            <img id="fotoPreview" src="#" alt="Preview"
                                                                class="img-thumbnail">
                                                            <button type="button"
                                                                class="btn btn-sm btn-danger mt-2 remove-preview">
                                                                <i class="fas fa-trash me-1"></i>Remove
                                                            </button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Status -->
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <div class="d-flex gap-3">
                                                    <div class="flex-grow-1">
                                                        <input type="radio" class="btn-check" name="status"
                                                            id="status_aktif" value="active" autocomplete="off" checked>
                                                        <label class="btn btn-outline-success w-100 py-2"
                                                            for="status_aktif">
                                                            <i class="fas fa-check-circle me-2"></i>Aktif
                                                        </label>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <input type="radio" class="btn-check" name="status"
                                                            id="status_tidak_aktif" value="deactive" autocomplete="off">
                                                        <label class="btn btn-outline-danger w-100 py-2"
                                                            for="status_tidak_aktif">
                                                            <i class="fas fa-times-circle me-2"></i>Tidak Aktif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                            <i class="fas fa-times me-2 mr-2"></i>Batal
                                        </button>
                                        <button type="submit" form="createDokterForm" class="btn btn-primary">
                                            <i class="fas fa-save me-2 mr-2"></i>Simpan Dokter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped text-center" id="dokterTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tipe</th>
                                            <th>Spesialisasi</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dokters as $key => $dokter)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('storage/' . $dokter->foto) }}"
                                                                alt="{{ $dokter->nama_dokter }}" class="rounded-circle"
                                                                width="40" height="40">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">{{ $dokter->nama_dokter }}</h6>
                                                            <small class="text-muted">{{ $dokter->email }}</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge {{ $dokter->tipe_dokter == 'spesialis' ? 'bg-info' : 'bg-warning' }}">
                                                        {{ ucfirst($dokter->tipe_dokter) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    {{ $dokter->tipe_dokter == 'spesialis' ? $dokter->spesialis->nama_spesialisasi ?? '-' : 'Umum' }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $dokter->foto) }}"
                                                        alt="{{ $dokter->nama_dokter }}" class="rounded" width="50">
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge {{ $dokter->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                        {{ ucfirst($dokter->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" style="gap: 0.5rem;">
                                                        <!-- Tombol Edit -->
                                                        <button type="button" class="btn btn-sm btn-warning"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editDokterModal{{ $dokter->id }}"
                                                            onclick="loadEditData({{ $dokter->id }})">
                                                            <i class="fas fa-edit me-2"></i>Edit
                                                        </button>

                                                        <!-- Tombol Hapus -->
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteDokterModal{{ $dokter->id }}"
                                                            onclick="prepareDelete({{ $dokter->id }}, '{{ $dokter->nama_dokter }}')">
                                                            <i class="fas fa-trash me-2"></i>Hapus
                                                        </button>
                                                    </div>
                                                </td>

                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="editDokterModal{{ $dokter->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content border-0">
                                                        <!-- Modal Header dengan Gradient -->
                                                        <div class="modal-header bg-gradient-primary text-white">
                                                            <div class="d-flex align-items-center">
                                                                <div class="modal-icon me-3">
                                                                    <i class="fas fa-user-md fa-2x"></i>
                                                                </div>
                                                                <div class="ml-2">
                                                                    <h5 class="modal-title mb-0">Edit Dokter</h5>
                                                                    <p class="small mb-0">Isi form berikut untuk Edit
                                                                        dokter</p>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn-close btn-close-red"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <!-- Modal Body -->
                                                        <div class="modal-body p-4">
                                                            <form id="editDokterForm{{ $dokter->id }}" method="POST"
                                                                action="{{ route('superadmin.dokter.update', ['id' => $dokter->id]) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('POST')

                                                                <!-- Nama Dokter -->
                                                                <div class="form-group floating-label">
                                                                    <input type="text" class="form-control"
                                                                        id="nama_dokter{{ $dokter->id }}"
                                                                        name="nama_dokter"
                                                                        value="{{ $dokter->nama_dokter }}" required>
                                                                    <i class="fas fa-user prefix-icon"></i>
                                                                    <label for="nama_dokter{{ $dokter->id }}">Nama
                                                                        Dokter</label>
                                                                </div>

                                                                <!-- Tipe Dokter -->
                                                                <div class="form-group">
                                                                    <i class="fas fa-user prefix-icon"></i>
                                                                    <label class="form-label">Tipe Dokter</label>
                                                                    <div class="d-flex gap-3">
                                                                        <div class="flex-grow-1">
                                                                            <input type="radio" class="btn-check"
                                                                                name="tipe_dokter"
                                                                                id="tipe_umum_edit{{ $dokter->id }}"
                                                                                value="umum" autocomplete="off"
                                                                                {{ $dokter->tipe_dokter == 'umum' ? 'checked' : '' }}>
                                                                            <label
                                                                                class="btn btn-outline-primary w-100 py-3"
                                                                                for="tipe_umum_edit{{ $dokter->id }}">
                                                                                <i class="fas fa-user-md me-2"></i>Dokter
                                                                                Umum
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <input type="radio" class="btn-check"
                                                                                name="tipe_dokter"
                                                                                id="tipe_spesialis_edit{{ $dokter->id }}"
                                                                                value="spesialis" autocomplete="off"
                                                                                {{ $dokter->tipe_dokter == 'spesialis' ? 'checked' : '' }}>
                                                                            <label
                                                                                class="btn btn-outline-success w-100 py-3"
                                                                                for="tipe_spesialis_edit{{ $dokter->id }}">
                                                                                <i
                                                                                    class="fas fa-stethoscope me-2"></i>Dokter
                                                                                Spesialis
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Spesialisasi (Conditional) -->
                                                                <div class="form-group floating-label mt-3"
                                                                    id="spesialisasi-group-edit{{ $dokter->id }}"
                                                                    style="{{ $dokter->tipe_dokter == 'spesialis' ? '' : 'display: none;' }}">
                                                                    <select class="form-select"
                                                                        id="spesialis_id{{ $dokter->id }}"
                                                                        name="spesialis_id">
                                                                        <option value="" selected disabled>Pilih
                                                                            Spesialisasi</option>
                                                                        @foreach ($spesialisasis as $spesialisasi)
                                                                            <option value="{{ $spesialisasi->id }}"
                                                                                {{ $dokter->spesialis_id == $spesialisasi->id ? 'selected' : '' }}>
                                                                                {{ $spesialisasi->nama_spesialisasi }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    <label
                                                                        for="spesialis_id{{ $dokter->id }}">Spesialisasi</label>
                                                                    <i class="fas fa-certificate prefix-icon"></i>
                                                                </div>

                                                                <!-- Edit Foto -->
                                                                <div class="form-group">
                                                                    <label class="form-label">Foto Dokter</label>
                                                                    <div class="file-upload-wrapper">
                                                                        <input type="file"
                                                                            id="fotoEdit{{ $dokter->id }}"
                                                                            name="foto" class="file-upload-input"
                                                                            accept="image/*">
                                                                        <label for="fotoEdit{{ $dokter->id }}"
                                                                            class="file-upload-label">
                                                                            <div id="editDesign{{ $dokter->id }}"
                                                                                class="file-upload-design {{ $dokter->foto ? 'd-none' : '' }}">
                                                                                <i
                                                                                    class="fas fa-cloud-upload-alt fa-3x mb-3 text-primary"></i>
                                                                                <p class="mb-1">Drag and drop file here
                                                                                </p>
                                                                                <p class="small text-muted">or click to
                                                                                    browse (Max 2MB)</p>
                                                                            </div>
                                                                            <div id="editPreview{{ $dokter->id }}"
                                                                                class="file-upload-preview {{ $dokter->foto ? '' : 'd-none' }}">
                                                                                <img id="fotoPreviewEdit{{ $dokter->id }}"
                                                                                    src="{{ $dokter->foto ? asset('storage/' . $dokter->foto) : '#' }}"
                                                                                    alt="Preview" class="img-thumbnail"
                                                                                    style="max-height: 200px;">
                                                                                <button type="button"
                                                                                    id="removePreviewEdit{{ $dokter->id }}"
                                                                                    class="btn btn-sm btn-danger mt-2">
                                                                                    <i class="fas fa-trash me-1"></i>
                                                                                    Remove
                                                                                </button>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                    <small class="text-muted">Biarkan kosong jika tidak
                                                                        ingin mengubah foto</small>
                                                                </div>

                                                                <!-- Status -->
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <div class="d-flex gap-3">
                                                                        <div class="flex-grow-1">
                                                                            <input type="radio" class="btn-check"
                                                                                name="status"
                                                                                id="status_aktif_edit{{ $dokter->id }}"
                                                                                value="active" autocomplete="off"
                                                                                {{ $dokter->status == 'active' ? 'checked' : '' }}>
                                                                            <label
                                                                                class="btn btn-outline-success w-100 py-2"
                                                                                for="status_aktif_edit{{ $dokter->id }}">
                                                                                <i
                                                                                    class="fas fa-check-circle me-2"></i>Aktif
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <input type="radio" class="btn-check"
                                                                                name="status"
                                                                                id="status_tidak_aktif_edit{{ $dokter->id }}"
                                                                                value="deactive" autocomplete="off"
                                                                                {{ $dokter->status == 'deactive' ? 'checked' : '' }}>
                                                                            <label
                                                                                class="btn btn-outline-danger w-100 py-2"
                                                                                for="status_tidak_aktif_edit{{ $dokter->id }}">
                                                                                <i
                                                                                    class="fas fa-times-circle me-2"></i>Tidak
                                                                                Aktif
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                        <!-- Modal Footer -->
                                                        <div class="modal-footer bg-light">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                data-bs-dismiss="modal">
                                                                <i class="fas fa-times me-2 mr-2"></i>Batal
                                                            </button>
                                                            <button type="submit"
                                                                form="editDokterForm{{ $dokter->id }}"
                                                                class="btn btn-primary">
                                                                <i class="fas fa-save me-2 mr-2"></i>Perbaharui Dokter
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Hapus Dokter -->
                                            <div class="modal fade" id="deleteDokterModal{{ $dokter->id }}"
                                                tabindex="-1" aria-labelledby="deleteDokterModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="deleteDokterModalLabel">Konfirmasi
                                                                Hapus
                                                            </h5>
                                                            <button type="button" class="btn-close btn-close-white"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form
                                                            action="{{ route('superadmin.dokter.destroy', ['id' => $dokter->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body">
                                                                <p>Apakah Anda yakin ingin menghapus dokter berikut?</p>
                                                                <b>{{ $dokter->nama_dokter }} ?</b>
                                                                <p class="text-muted">Data yang dihapus tidak dapat
                                                                    dikembalikan.
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>

                                    <!-- Modal Edit Dokter -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        @if (Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: '{{ Session::get('success') }}',
            });
        @elseif (Session::has('error'))
            Swal.fire({
                icon: 'error',
                title: '{{ Session::get('error') }}',
            });
        @endif
    </script>
    <script src="{{ asset('/sw.js') }}"></script>

    <script>
        function loadEditData(id) {
            fetch(`/dokter/${id}`)
                .then(response => response.json())
                .then(data => {
                    // isi value input
                    document.getElementById(`editDokterForm${id}`).action = `/dokter/${id}`;
                    document.getElementById(`nama_dokter${id}`).value = data.nama_dokter;

                    // tipe dokter
                    document.getElementById('tipe_umum').checked = data.tipe_dokter === 'umum';
                    document.getElementById('tipe_spesialis').checked = data.tipe_dokter === 'spesialis';

                    // tipe dokter dengan ID unik
                    document.getElementById(`tipe_umum_edit${id}`).checked = data.tipe_dokter === 'umum';
                    document.getElementById(`tipe_spesialis_edit${id}`).checked = data.tipe_dokter === 'spesialis';

                    // tampilkan dropdown spesialis jika tipe = spesialis
                    if (data.tipe_dokter === 'spesialis') {
                        document.getElementById('spesialisasi-group').style.display = 'block';
                        document.getElementById('spesialis_id').value = data.spesialis_id;
                    } else {
                        document.getElementById('spesialisasi-group').style.display = 'none';
                    }

                    // tampilkan dropdown spesialis jika tipe = spesialis
                    if (data.tipe_dokter === 'spesialis') {
                        document.getElementById(`spesialisasi-group-edit${id}`).style.display = 'block';
                        document.getElementById(`spesialis_id${id}`).value = data.spesialis_id;
                    } else {
                        document.getElementById(`spesialisasi-group-edit${id}`).style.display = 'none';
                    }

                    // status
                    document.getElementById('status_aktif').checked = data.status === 'aktif';
                    document.getElementById('status_tidak_aktif').checked = data.status !== 'aktif';

                    // status dengan ID unik
                    document.getElementById(`status_aktif_edit${id}`).checked = data.status === 'active';
                    document.getElementById(`status_tidak_aktif_edit${id}`).checked = data.status !== 'active';

                    if (data.foto) {
                        document.getElementById(`editDesign${id}`).classList.add('d-none');
                        document.getElementById(`editPreview${id}`).classList.remove('d-none');
                        document.getElementById(`fotoPreviewEdit${id}`).src = `/storage/${data.foto}`;
                    }
                });

        }

        function prepareDelete(id, nama) {
            document.getElementById('deleteForm').action = `/dokter/${id}`;
            document.getElementById('dokterToDelete').innerText = nama;
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle edit doctor modals
            document.querySelectorAll('[id^="editDokterModal"]').forEach(modal => {
                const modalId = modal.id;
                const dokterId = modalId.replace('editDokterModal', '');

                // Toggle Spesialisasi for edit form
                const tipeUmum = document.getElementById(`tipe_umum_edit${dokterId}`);
                const tipeSpesialis = document.getElementById(`tipe_spesialis_edit${dokterId}`);
                const spesialisasiGroupEdit = document.getElementById(`spesialisasi-group-edit${dokterId}`);
                const spesialisSelect = document.getElementById(`spesialis_id${dokterId}`);

                if (tipeUmum && tipeSpesialis && spesialisasiGroupEdit) {
                    tipeUmum.addEventListener('change', function() {
                        spesialisasiGroupEdit.style.display = 'none';
                        spesialisSelect.removeAttribute('required');
                    });

                    tipeSpesialis.addEventListener('change', function() {
                        spesialisasiGroupEdit.style.display = 'block';
                        spesialisSelect.setAttribute('required', 'required');
                    });
                }

                // File edit Preview for edit form
                const fotoInputEdit = document.getElementById(`fotoEdit${dokterId}`);
                const fotoPreviewEdit = document.getElementById(`fotoPreviewEdit${dokterId}`);
                const editDesign = document.getElementById(`editDesign${dokterId}`);
                const editPreview = document.getElementById(`editPreview${dokterId}`);
                const removePreviewEdit = document.getElementById(`removePreviewEdit${dokterId}`);

                if (fotoInputEdit && fotoPreviewEdit && editDesign && editPreview && removePreviewEdit) {
                    // When user selects new file
                    fotoInputEdit.addEventListener('change', function() {
                        if (this.files && this.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                fotoPreviewEdit.src = e.target.result;
                                editDesign.classList.add('d-none');
                                editPreview.classList.remove('d-none');
                            };
                            reader.readAsDataURL(this.files[0]);
                        }
                    });

                    // Remove button (clear preview & reset input)
                    removePreviewEdit.addEventListener('click', function() {
                        fotoInputEdit.value = '';
                        fotoPreviewEdit.src = '#';
                        editDesign.classList.remove('d-none');
                        editPreview.classList.add('d-none');
                    });
                }
            });

            // Handle add doctor form (non-unique IDs)
            const spesialisasiGroup = document.getElementById('spesialisasi-group');
            const fotoInput = document.getElementById('foto');
            const fotoPreview = document.getElementById('fotoPreview');
            const uploadDesign = document.querySelector('.file-upload-design');
            const uploadPreview = document.querySelector('.file-upload-preview');

            // Toggle Spesialisasi for add form
            if (spesialisasiGroup) {
                document.querySelectorAll('input[name="tipe_dokter"]').forEach(radio => {
                    radio.addEventListener('change', function() {
                        spesialisasiGroup.style.display = this.value === 'spesialis' ? 'block' :
                            'none';
                        const spesialisSelect = document.getElementById('spesialis_id');
                        if (this.value === 'spesialis') {
                            spesialisSelect.setAttribute('required', 'required');
                        } else {
                            spesialisSelect.removeAttribute('required');
                        }
                    });
                });
            }

            // File Upload Preview for add form
            if (fotoInput && fotoPreview && uploadDesign && uploadPreview) {
                fotoInput.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            fotoPreview.src = e.target.result;
                            uploadDesign.classList.add('d-none');
                            uploadPreview.classList.remove('d-none');
                        };
                        reader.readAsDataURL(this.files[0]);
                    }
                });

                // Remove Preview for add form
                document.querySelector('.remove-preview')?.addEventListener('click', function() {
                    fotoInput.value = '';
                    uploadDesign.classList.remove('d-none');
                    uploadPreview.classList.add('d-none');
                });
            }
        });
    </script>
@endsection
