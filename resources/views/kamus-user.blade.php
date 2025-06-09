<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Wave - Kamus</title>
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
 <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Kamus</h2>
      <p>Selamat datang di kamus SignWave, tempat belajar penuh warna dan kegembiraan! Kamus ini memiliki tiga kategori utama yaitu huruf, angka, dan kosa kata. Setiap entri dilengkapi interpretasi visual menarik, contoh penggunaan jelas, dan panduan pengucapan mudah dipahami. Nikmati pengalaman belajar interaktif dan tingkatkan kemampuan bahasa isyarat Anda. Jelajahi keajaiban bahasa isyarat bersama SignWave!</p>
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

      <div>
        <ul class="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-portfolio">Huruf</li>
          <li data-filter=".filter-product">Angka</li>
        </ul><!-- End Portfolio Filters -->
      </div>

      <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-portfolio">
                <div class="portfolio-wrap">
                    <img src="assets/img/kamus/huruf_rmv.png" class="img-fluid" alt=""></a>
                    <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Huruf</a></h4>
                    <p>Tersedia 26 huruf mulai dari A hingga Z</p>
                    </div>
                </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <img src="assets/img/kamus/angka_rmv.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">Angka</a></h4>
                  <p>Angka dari 0 hingga 1.000</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

        <!-- Menampilkan Huruf -->
        @foreach ($kamus_signwave as $kamus)
          @if ($kamus->id <= 26)
            <div class="col-xl-4 col-md-6 portfolio-item filter-portfolio">
              <div class="portfolio-wrap">
                <img src="{{ asset('storage/assets/img/kamus/' . $kamus->gambar) }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">{{ $kamus->kata }}</a></h4>
                  <p>{{ $kamus->deskripsi }}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          @endif
        @endforeach

        <!-- Menampilkan Angka -->
        @foreach ($kamus_signwave as $kamus)
          @if ($kamus->id >= 27 && $kamus->id <= 60)
            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <img src="{{ asset('storage/assets/img/kamus/' . $kamus->gambar) }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">{{ $kamus->kata }}</a></h4>
                  <p>{{ $kamus->deskripsi }}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          @endif
        @endforeach
      </div><!-- End Portfolio Container -->
    </div>
  </div>
</section><!-- End Portfolio Section -->
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

</html>
