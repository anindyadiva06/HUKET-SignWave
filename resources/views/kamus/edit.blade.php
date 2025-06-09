@extends('layouts.main')

@section('title', 'Kelola Kamus - Edit')

@section('content')

    <div class="pagetitle">
        <h1>Edit Kamus</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('kamus.index') }}">Kamus</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <!-- Flash Message -->
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Kamus</h5>

                    <form action="{{ route('kamus.update', $kamus_signwave->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="kata" name="kata" placeholder="kata" value="{{ $kamus_signwave->kata }}">
                                <label for="kata">Kata</label>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" id="deskripsi" style="height: 100px;">{{ $kamus_signwave->deskripsi }}</textarea>
                                <label for="deskripsi">Deskripsi</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                @if ($kamus_signwave->gambar)
                                    <div style="margin-bottom: 10px;">
                                        <img src="{{ asset('storage/assets/img/kamus/' . $kamus_signwave->gambar) }}" alt="gambar" style="max-width: 100px; display: block;">
                                    </div>
                                @endif
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="{{ route('kamus.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>
        </div>
    </section>
@endsection
