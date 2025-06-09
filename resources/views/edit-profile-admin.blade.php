<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Admin Profile - Sign Wave</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/signwave-no-text.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
@include('layout.navbar-admin')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
          <li class="breadcrumb-item">Akun</li>
          <li class="breadcrumb-item active">Edit Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-8 offset-xl-2">

          <div class="card">
            <div class="card-body pt-3">
              <form method="POST" action="{{ route('profile-admin.update') }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                  <label for="nama" class="col-md-4 col-form-label text-md-end">Nama</label>

                  <div class="col-md-6">
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', session('nama', 'Guest')) }}" required autocomplete="name" autofocus>

                    @error('nama')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="current_password" class="col-md-4 col-form-label text-md-end">Password Saat Ini <br><span style="color:red">(biarkan jika tidak ingin mengubah)</span></label>

                  <div class="col-md-6">
                    <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password">

                    @error('current_password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="new_password" class="col-md-4 col-form-label text-md-end">Password Baru <br><span style="color:red">(biarkan jika tidak ingin mengubah)</span></label>

                  <div class="col-md-6">
                    <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password">
                    @error('new_password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="new_password_confirmation" class="col-md-4 col-form-label text-md-end">Konfirmasi Password Baru <br><span style="color:red">(biarkan jika tidak ingin mengubah)</span></label>

                  <div class="col-md-6">
                    <input id="new_password_confirmation" type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation">

                    @error('new_password_confirmation')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                    <a href="{{ route('profile-admin') }}" class="btn btn-danger">Batal</a>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @include('layout.footer-admin')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
