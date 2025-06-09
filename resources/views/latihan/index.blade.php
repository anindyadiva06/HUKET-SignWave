@extends('layouts.main')

@section('title', 'Daftar Latihan')

@section('content')
<div class="pagetitle">
    <h1>Daftar Latihan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Latihan</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
                <script>
                  Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ session('success') }}'
                  });
                </script>
              @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Latihan</h5>
                    <a href="{{ route('latihan.create') }}"><button type="button" class="btn btn-primary mb-3">Tambah Latihan</button></a>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Pertanyaan</th>
                                    <th>Pilihan</th>
                                    <th>Jawaban</th>
                                    <th>Kelola</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pertanyaans as $pertanyaan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ Storage::url($pertanyaan->gambar) }}" alt="gambar" style="max-width: 100px;"></td>
                                    <td>{{ $pertanyaan->deskripsi_pertanyaan }}</td>
                                    <td>
                                        <ol class="list-group list-group" style="background-color: transparent;">
                                            @foreach($pertanyaan->jawaban as $jawaban)
                                            <li class="list-group-item" style="background-color: transparent;">{{ $jawaban->deskripsi_jawaban }}</li>
                                            @endforeach
                                        </ol>
                                    </td>
                                    <td>
                                        @foreach($pertanyaan->jawaban as $jawaban)
                                            @if($jawaban->benar == 1)
                                                {{ $jawaban->deskripsi_jawaban }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('latihan.edit', ['id' => $pertanyaan->id_pertanyaan]) }}" class="btn btn-warning btn-sm me-2 flex-fill">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <form action="{{ route('latihan.destroy', ['id' => $pertanyaan->id_pertanyaan]) }}" method="POST" style="display:inline;" class="flex-fill delete-form">
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
