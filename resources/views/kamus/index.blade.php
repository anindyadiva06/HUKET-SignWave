@extends('layouts.main')

@section('title', 'Kelola Kamus')

@section('content')
<div class="pagetitle">
    <h1>Kelola Kamus</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Kamus</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <!-- Flash Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Halaman Kelola Kamus</h5>
                    <a href="{{ route('kamus.tambah') }}"><button type="button" class="btn btn-primary mb-3">Tambah Kamus</button></a>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kata</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kamus_signwave as $index => $kamus)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kamus->kata }}</td>
                                    <td>{{ Str::limit($kamus->deskripsi, 100, '...') }}</td>
                                    <td>
                                        <img src="{{ asset('storage/assets/img/kamus/' . $kamus->gambar) }}" alt="gambar" style="max-width: 100px;">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('kamus.edit',  $kamus->id) }}" class="btn btn-warning btn-sm me-2 flex-fill">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <form action="{{ route('kamus.destroy', $kamus->id) }}" method="POST" style="display:inline;" class="flex-fill delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-button w-100">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-button');
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const form = button.closest('form');

                Swal.fire({
                    title: 'Apakah data akan dihapus?',
                    text: "Data yang dihapus tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection