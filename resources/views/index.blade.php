<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Wave</title>
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
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('index') }}" class="logo d-flex align-items-center">
        <img src="assets/img/signwave-user.png" alt="">
        <h1>Sign Wave<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index">Beranda</a></li>
          <li><a href="{{ route('kamus-index') }}">Kamus</a></li>
          <li><a href="index#artikel">Artikel</a></li>
          <li><a href="index#feedback">Feedback</a></li>
          <li><a href="index#about">Tentang Kami</a></li>
          <li><a href="{{ route('login') }}"><span class="bi bi-box-arrow-in-right">&nbsp Masuk</span></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2><span>Sign Wave</span></h2>
          <p>Platform <b>Sign Wave</b> adalah sebuah sistem berbasis web yang dirancang untuk membantu orang-orang dalam mempelajari dan berkomunikasi menggunakan Bahasa Isyarat Indonesia (BISINDO). Platform ini dirancang untuk memudahkan komunikasi antara orang yang mendengar (teman dengar) dan orang dengan keterbatasan pendengaran (teman tuli) melalui berbagai fitur interaktif yang mendukung pembelajaran Bahasa Isyarat.</p>
        </div>
        <div class="col-lg-5 order-1" style="margin-left:100px;">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="Sign Wave" data-aos="zoom-out" data-aos-delay="100" width="80%">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5 justify-content-center">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-layout-text-window-reverse"></i></div>
              <h4 class="title"><a href="{{ route('kamus-index') }}" class="stretched-link">Kamus Bahasa</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-journal-text"></i></div>
              <h4 class="title"><a href="index#artikel" class="stretched-link">Artikel</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-envelope"></i></div>
              <h4 class="title"><a href="index#feedback" class="stretched-link">Feedback</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">


  <!-- Artikel Section -->
        <section id="artikel" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Artikel</h2>
                    <p>Selamat datang di artikel SignWave, tempat untuk mengeksplorasi beragam artikel yang mengangkat dunia bahasa isyarat secara mendalam dan menyenangkan! Temukan cerita inspiratif, tips praktis, dan berita terkini seputar bahasa isyarat yang akan membawa kita lebih dekat dengan komunitas ini. Ayo, mari jelajahi bersama dan tingkatkan pemahaman serta apresiasi terhadap keindahan bahasa isyarat!</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($artikel_signwave as $artikel)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <h3>{{ $artikel->judul_artikel }}</h3>
                            <p>{{ $artikel->konten }}</p>
                            <a href="{{ $artikel->link }}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Artikel Section -->
    <!-- ======= Feedback Section ======= -->
    <section id="feedback" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Feedback</h2>
          <p>Kami menghargai setiap masukan dan saran dari Anda untuk meningkatkan aplikasi Sign Wave. Mohon berikan pendapat Anda mengenai pengalaman menggunakan aplikasi ini, serta saran yang dapat membantu kami dalam pengembangan lebih lanjut. Terima kasih atas partisipasi Anda!</p>
        </div>
        <div class="row gx-lg-0 gy-4">
          @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Sign Wave</h4>
                  <p>Universitas Jenderal Soedirman</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
          <div class="col-lg-8">
            <form action="{{ route('feedback.store') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda (opsional)">
              </div>
              <div class="form-group mt-3">
                  <textarea class="form-control" name="isi" rows="7" placeholder="Masukkan komentar Anda mengenai Web ini" required></textarea>
              </div>
              <div class="my-3">
                  <div class="loading">Memuat</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Feedback Anda telah terkirim. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Feedback</button></div>
          </form>
          </div><!-- End Feedback Form -->
        </div>
      </div>
    </section><!-- End Feedback Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Tentang Kami</h2>
                <p>Selamat datang di Sign Wave, sebuah platform yang didedikasikan untuk memperluas pemahaman dan keterampilan dalam bahasa isyarat dengan cara yang inovatif dan mengasyikkan. Kami berkomitmen untuk memberikan sumber daya yang bermanfaat bagi siapa pun yang ingin mempelajari bahasa isyarat.</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 order-lg-2">
                    <img src="{{ asset('assets/img/deaf-mute-people-concept-illustration.png') }}" class="img-fluid rounded-4 mb-4" alt="">
                </div>
                <h3>Sign Wave</h3>
                <div class="col-lg-8 order-lg-2">
                    <p>Bahasa isyarat adalah cara komunikasi yang indah dan kaya, digunakan oleh jutaan orang di seluruh dunia. Namun, akses terhadap materi pembelajaran yang efektif sering kali terbatas. Di Sign Wave, kami hadir untuk mengatasi tantangan ini dengan menyediakan berbagai alat dan sumber daya yang dirancang untuk memenuhi kebutuhan beragam pembelajar. Mulai dari gambar-gambar huruf dan angka hingga kata-kata sederhana, fitur-fitur interaktif kami didesain untuk membuat proses belajar bahasa isyarat menjadi lebih mudah dan menyenangkan.</p>
                    <p>Sign Wave bukan sekadar alat pembelajaran, tetapi juga pusat informasi lengkap tentang bahasa isyarat. Kami menyediakan materi interaktif yang inovatif, artikel mendalam tentang sejarah dan evolusi bahasa isyarat, serta tips praktis untuk penggunaan sehari-hari. Selain itu, kami menyediakan kuis-kuis sederhana untuk memperkuat pemahaman tentang bahasa isyarat, memadukan teori dengan praktik secara efektif. Kami percaya bahwa setiap individu berhak mempelajari bahasa isyarat, dan kami siap mendukung perjalanan pembelajaran mereka dari berbagai latar belakang dan tingkat kemampuan. Bersama Sign Wave, mari kita terus memperkaya pemahaman dan menghargai keindahan bahasa isyarat, menciptakan dunia yang lebih inklusif dan penuh pengertian bagi semua.</p>
                </div>
                <div class="col-lg-12 order-3 content ps-0 ps-lg-5">
                    <h3>Apa yang Kami Berikan:</h3>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> <h5>Materi Pembelajaran Interaktif</h5> <p>Sign Wave menyediakan berbagai gambar untuk huruf, angka, dan kata-kata sederhana dalam bahasa isyarat. Pengguna dapat belajar secara mandiri menggunakan alat pembelajaran yang intuitif dan interaktif. Fitur-fitur ini dirancang untuk memfasilitasi proses pembelajaran yang menyenangkan dan efektif.</p></li>
                        <li><i class="bi bi-check-circle-fill"></i> <h5>Artikel Terkait Bahasa Isyarat</h5> <p>Sign Wave menghadirkan artikel-artikel informatif dan inspiratif mengenai bahasa isyarat. Artikel-artikel ini tidak hanya memperluas pemahaman tentang sejarah, perkembangan, dan kepentingan bahasa isyarat tetapi juga memberikan wawasan yang mendalam tentang bagaimana bahasa ini berperan dalam komunikasi sehari-hari dan di berbagai komunitas.</p></li>
                        <li><i class="bi bi-check-circle-fill"></i> <h5>Kuis Sederhana</h5> <p>Sign Wave menyediakan kuis-kuis sederhana yang dirancang khusus untuk menguji pengetahuan pengguna tentang bahasa isyarat. Tujuan dari kuis ini adalah untuk memperkuat pemahaman serta mengasah kemampuan pengguna dalam menerapkan bahasa isyarat dalam situasi berbeda.</p></li>
                    </ul>
                </div>
                <p>Terima kasih telah mengakses Sign Wave! <br>Kami percaya bahwa dengan memahami dan menghargai keindahan bahasa isyarat, kita tidak hanya memperkaya pengalaman kita sendiri tetapi juga membuka pintu untuk inklusi yang lebih luas dan pemahaman yang lebih dalam tentang perbedaan. Dengan Sign Wave, kami berkomitmen untuk membangun sebuah dunia di mana setiap individu, tanpa memandang latar belakang atau kemampuan, dapat merasa didengar, dimengerti, dan dihargai. Mari bersama-sama menciptakan masyarakat yang lebih inklusif, harmonis, dan penuh pengertian.</p>
            </div>
        </div>

    <!-- ======= Our Team Section ======= -->
        <div class="container team" data-aos="fade-up" style="margin-top:100px;">
            <div class="section-header">
                <h2>Tim Kami</h2>
                <p>Tim di balik Sign Wave terdiri dari sekelompok mahasiswa yang sangat berdedikasi dalam mengembangkan platform ini. Mereka membawa beragam keahlian dan semangat untuk memperluas akses dan pemahaman terhadap bahasa isyarat. Dengan komitmen mereka, Sign Wave tidak hanya menjadi alat pembelajaran, tetapi juga sebuah inisiatif untuk meningkatkan inklusi sosial dan penghargaan terhadap keberagaman komunikasi di seluruh dunia.</p>
            </div>

            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="member p-3">
                        <img src="{{ asset('assets/img/dipa.jpg') }}" class="img-fluid" alt="Anindya Diva Talitha">
                        <h4>Anindya Diva Thalita</h4>
                        <span>H1D022026</span>
                        <div class="social">
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="member p-3">
                        <img src="{{ asset('assets/img/tipa.jpg') }}" class="img-fluid" alt="Athifa Nathania">
                        <h4>Athifa Nathania</h4>
                        <span>H1D022031</span>
                        <div class="social">
                            <a href="https://www.instagram.com/athifanthn?igsh=NTNyMnNqc3B3Zm9p"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/athifanthn"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/athifanathania"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="member p-3">
                        <img src="{{ asset('assets/img/ebel.jpg') }}" class="img-fluid" alt="Eka Belandini">
                        <h4>Eka Belandini</h4>
                        <span>H1D022002</span>
                        <div class="social">
                            <a href="https://www.instagram.com/belandiniekaa?igsh=MXN2Y2tuZ3k5bDhqYQ=="><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/belandiniekaa/"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/belandiniekaa"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            </div>
        </div>
    </section><!-- End About Us & team Section -->


  </main><!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
      <a href="{{ route('index') }}" class="logo align-items-center">
        <span>Sign Wave</span>
        <br><br>
      </a>
      <a href="{{ route('index') }}">
      <img src="assets/img/signwave-user.png" alt="Logo" style="display:block; margin: 25px;" width=20%;>
      </a>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Link Berguna</h4>
      <ul>
        <li><a href="{{ route('index') }}">Beranda</a></li>
        <li><a href="index#about">Tentang Kami</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links ">
      <h4>Layanan Kami</h4>
      <ul>
        <li><a href="{{ route('kamus-index') }}">Kamus Bahasa</a></li>
        <li><a href="index#artikel">Artikel</a></li>
        <li><a href="index#feedback">Feedback</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Hubungi Kami</h4>
      <p>
        Universitas Jenderal Soedirman<br>
        Purwokerto, Jawa Tengah<br>
        Indonesia<br><br></p>
        <table>
          <tr>
            <td><strong>Telepon:</strong></td>
            <td>+62 896 3765 7957</td>
          </tr>
          <tr>
            <td></td>
            <td>+62 882 1259 8191</td>
          </tr>
          <tr>
            <td></td>
            <td>+62 877 7440 3654</td>
          </tr>
            <tr>
            <td><strong>Email:</strong></td>
            <td>eka.belandini@mhs.unsoed.ac.id</td>
          </tr>
          <tr>
            <td></td>
            <td>anindya.talitha@mhs.unsoed.ac.id</td>
          </tr>
          <tr>
            <td></td>
            <td>athifa.nathania@mhs.unsoed.ac.id</td>
          </tr>
        </table>
    </div>
  </div>
</div>


    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Sign Wave</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

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