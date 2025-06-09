@extends('layouts.main')

@section('title', 'Kelola Kamus - Tambah')

@section('content')

<div class="pagetitle">
    <h1>Tambah Kamus</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('kamus.index') }}">Kamus</a></li>
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
            <h5 class="card-title">Tambah Kamus</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('kamus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="col-12">
                <label for="katakamus" class="form-label">Kata</label>
                <input type="text" class="form-control" id="katakamus" name="kata">
              </div>
              <div class="col-12">
                <label for="deskripsikamus" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsikamus" name="deskripsi">
              </div>
              <div class="col-12">
                <label for="gambarkamus" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambarkamus" name="gambar">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="{{ route('kamus.index') }}" class="btn btn-danger">Batal</a>
              </div>
            </form><!-- Vertical Form -->
          </div>
         </div>
    </div>
</section>
@endsection

