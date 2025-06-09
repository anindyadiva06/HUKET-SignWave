@extends('layouts.main')

@section('title', 'Kelola Artikel')

@section('content')
<div class="pagetitle">
  <h1>Kelola Artikel</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
      <li class="breadcrumb-item">Artikel</li>
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
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kelola Artikel</h5>
        <a href="{{ route('artikel.tambah') }}" class="btn btn-primary">Tambah Artikel</a>
        <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <th>Isi Artikel</th>
                                    <th>Tautan</th>
                                    <th>Waktu Dibuat</th>
                                    <th>Waktu Diperbaharui</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikel_signwave as $index => $artikel)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $artikel->judul_artikel }}</td>
                                    <td>{{ Str::limit($artikel->konten, 100, '...') }}</td>
                                    <td>{{ $artikel->link }}</td>
                                    <td>{{ $artikel->created_at }}</td>
                                    <td>{{ $artikel->updated_at }}</td>
                                    <td>
                                      <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-success" style="margin-bottom: 10px;">Edit</a>
                                        <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
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