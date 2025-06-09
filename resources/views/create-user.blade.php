<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelola User - Sign Wave</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/signwave-no-text.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

@include('layout.navbar-admin')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Kelola User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('index-kelola-user') }}">Kelola User</a></li>
          <li class="breadcrumb-item active">Tambah User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
          <div class="card" style="margin-top:20px;">
            <div class="card-header">Tambah User</div>

            <div class="card-body">
              <form method="POST" action="{{ route('create-user.store') }}">
                @csrf

                <div class="form-group" style="margin:5px;">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="form-group" style="margin:5px;">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="form-group" style="margin:5px;">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group" style="margin:5px;">
                  <label for="role">Role</label>
                  <select class="form-control" id="role" name="role" required>
                    <option> </option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>
                <div class="form-group" style="margin:15px 5px 5px 5px;">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="{{ route('index-kelola-user')}}" class="btn btn-danger" >Batal</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
    @include('layout.footer-admin')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

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

  </main>
</body>
</html>
