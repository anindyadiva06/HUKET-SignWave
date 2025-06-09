@extends('layouts.main')

@section('title', 'Kelola Artikel - Edit')

@section('content')
    <div class="pagetitle">
        <h1>Edit Artikel</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}">Artikel</a></li>
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
                    <h5 class="card-title">Edit Artikel</h5>

                    <form action="{{ route('artikel.update', $artikel_signwave->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Judul" value="{{ $artikel_signwave->judul_artikel }}">
                                <label for="judul_artikel">Judul</label>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="konten" placeholder="Ringkasan Artikel" id="konten" style="height: 100px;">{{ $artikel_signwave->konten }}</textarea>
                                <label for="konten">Ringkasan Artikel</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="link" name="link" placeholder="Tautan" value="{{ $artikel_signwave->link }}">
                                    <label for="link">Tautan</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="{{ route('artikel.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>
        </div>
    </section>
@endsection
