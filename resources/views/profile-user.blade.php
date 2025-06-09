<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Wave - Akun Saya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/signwave-user.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor_user/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor_user/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor_user/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor_user/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor_user/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
@include('layout.navbar-user')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Akun Saya</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home-user') }}">Home</a></li>
            <li>Akun Saya</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
    
    <!-- ======= Profile Section ======= -->
<section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-4">
            <div class="service-item  position-relative">
              <div class="profile-img">
              <img src="assets/img/ava-user.png" alt="Profile Picture" class="img-fluid">
            </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-6">
            <div class="service-item  position-relative">
              @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>{{ Auth::user()->nama }}</h3>
              <p>Profil pengguna pada aplikasi web Sign Wave menampilkan informasi dasar mengenai pengguna serta aktivitas mereka dalam aplikasi. Pengguna dapat melihat dan memperbarui informasi pribadi mereka, memantau kemajuan belajar, dan mengakses berbagai fitur yang disediakan oleh aplikasi.</p>
              <br><h3>Username: {{ Auth::user()->username }}</h3>
              <br><br><a href="{{ route('profile-user.edit') }}" class="btn btn-primary" style="margin-left:650px;"><img src="assets/img/edit-icon.png" style="width: 20px;">Edit Akun</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

@include('layout.footer-user')
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor_user/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor_user/aos/aos.js"></script>
  <script src="assets/vendor_user/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor_user/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor_user/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor_user/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor_user/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/user.js"></script>
  

</body>

</html>