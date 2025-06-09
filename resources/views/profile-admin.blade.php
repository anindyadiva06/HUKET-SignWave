<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Profile - Sign Wave</title>
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
  <style>
    .icon-white img {
        filter: brightness(0) invert(1);
    }
  </style>
</head>

<body>
@include('layout.navbar-admin')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
          <li class="breadcrumb-item">Akun</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets/img/guest-profile.png" alt="Profile" class="rounded-circle">
              <h2>{{ session('nama', 'Guest') }}</h2>
              <h3>Administrator</h3>
              <a href="{{ route('profile-admin.edit') }}" class="btn btn-primary mt-3 icon-white"><img src="assets/img/edit-icon.png" style="width: 20px;">&nbsp Edit Akun &nbsp</a>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Tentang</h5>
                  <p class="small fst-italic">Administrator pada aplikasi web Sign Wave bertanggung jawab untuk mengelola berbagai aspek penting yang memastikan kelancaran operasional dan kualitas layanan. Tugas utama seorang admin mencakup pengelolaan akun pengguna, yang meliputi pembuatan, pengeditan, dan penghapusan akun serta pemantauan aktivitas pengguna untuk memastikan keamanan dan kepatuhan. Selain itu, admin juga mengelola kamus yang berfungsi sebagai sumber informasi utama dalam aplikasi, memastikan bahwa entri kamus selalu akurat dan diperbarui. Pengelolaan artikel merupakan bagian penting lainnya, di mana admin menambahkan, mengedit, dan menghapus konten artikel untuk memberikan informasi yang bermanfaat dan relevan kepada pengguna. Selain itu, admin bertanggung jawab atas pengelolaan latihan yang digunakan pengguna untuk belajar dan berlatih, memastikan bahwa latihan-latihan tersebut berkualitas dan dapat diakses dengan mudah. Terakhir, admin mengelola feedback dari pengguna, yang melibatkan pengumpulan, analisis, dan penindaklanjutan masukan untuk terus meningkatkan pengalaman pengguna dan fungsi aplikasi secara keseluruhan.</p>
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">{{ session('nama', 'Guest') }}</div>
                  </div>
                </div>
                </div>

              </div><!-- End Bordered Tabs -->

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