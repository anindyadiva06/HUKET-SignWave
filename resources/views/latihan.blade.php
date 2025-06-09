<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Wave - Latihan</title>
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
  <link href="assets/css/user/main.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
@include('layout.navbar-user')
  <main id="main">
<section id="latihan" class="latihan">
    <div class="container position-relative">

      <div class="row gy-7" data-aos="fade-in">
        <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <br><br>
          <h2>Selamat datang di Halaman Kuis Bahasa Isyarat untuk Pemula!</h2>
          <p><br>Kami mengundang Anda untuk menguji pengetahuan dan kemampuan Anda dalam mengenali huruf, angka, dan kata-kata sehari-hari dalam Bahasa Isyarat Indonesia (BISINDO). Kuis ini dirancang dengan penuh tantangan dan interaktif, terdiri dari serangkaian pertanyaan yang mencakup berbagai aspek dasar dari Bahasa Isyarat.</p>

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ route('latihan.showQuestions') }}" class="btn-get-started">Mulai Kuis</a>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 latihan-img">
          <img src="{{ asset('assets/img/kuis.jpg') }}" class="img-fluid animated" alt="">
        </div>
      </div>

    </div>
</section><!-- End Latihan Section -->
</main>
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
