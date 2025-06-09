<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin Sign Wave</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/signwave-no-text.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="col-lg-9">
          <div class="row">
          <!-- Kamus Card -->
            <div class="col-xxl-4 col-md-6">
              <a href="{{ route('kamus.index') }}">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Kelola Kamus <span>| Sign Wave</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-layout-text-window-reverse"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Kamus</h6>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div><!-- End Kamus Card -->
            
            <!-- Latihan Card -->
            <div class="col-xxl-4 col-md-6">
              <a href="{{ route('latihan.index') }}">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Kelola Latihan <span>| Sign Wave</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Latihan</h6>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div><!-- End Latihan Card -->

            <!-- Artikel Card -->
            <div class="col-xxl-4 col-md-6">
              <a href="#Artikel">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Kelola Artikel <span>| Sign Wave</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Artikel</h6>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div><!-- End Artikel Card -->

            <!-- Feedback Card -->
            <div class="col-xxl-4 col-md-6">
              <a href="{{ route('kelola-feedback') }}">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Kelola Feedback <span>| Sign Wave</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Feedback</h6>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div><!-- End Feedback Card -->

            <!-- User Card -->
            <div class="col-xxl-4 col-md-6">
              <a href="{{ route('index-kelola-user') }}">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Kelola User <span>| Sign Wave</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>User</h6>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div><!-- End User Card -->
    </section>
  </main>
    <!-- MAIN -->
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

</body>

</html>