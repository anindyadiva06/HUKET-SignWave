@extends('layouts.main')

@section('title', 'Kelola Artikel - Tambah')

@section('content')
<div class="pagetitle">
    <h1>Tambah Artikel</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}">Artikel</a></li>
            <li class="breadcrumb-item active">Tambah</li>
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
    
<div class="col-lg-12">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Tambah Artikel</h5>

    <!-- Vertical Form -->
    <form class="row g-3" action="{{ route('artikel.store') }}" method="POST">
    @csrf
      <div class="col-12">
        <label for="judulArtikel" class="form-label">Judul Artikel</label>
        <input type="text" class="form-control" id="judulArtikel" name="judul_artikel">
      </div>
      <div class="col-12">
        <label for="ringkasanArtikel" class="form-label">Ringkasan Artikel</label>
        <input type="text" class="form-control" id="ringkasanArtikel" name="konten">
      </div>
      <div class="col-12">
        <label for="tautanArtikel" class="form-label">Tautan Artikel</label>
        <input type="url" class="form-control" id="tautanArtikel" name="link">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('artikel.index') }}" class="btn btn-danger">Batal</a>
      </div>
    </form><!-- Vertical Form -->
  </div>
 </div>
</div>
</section>
@endsection