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
                            <h2>Edit Akun Saya</h2>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home-user') }}">Home</a></li>
                        <li><a href="{{ route('profile-user') }}">Akun Saya</a></li>
                        <li>Edit Akun Saya</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Edit Profile Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-8 col-md-6 offset-lg-2">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h3>Edit Akun</h3>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('profile-user.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}" readonly disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="current_password">Password Saat Ini: <span style="color:red">(biarkan jika tidak ingin mengubah)</span></label>
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                </div>
                                <div class="form-group">
                                    <label for="new_password">Password Baru: <span style="color:red">(biarkan jika tidak ingin mengubah)</span></label>
                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                </div>
                                <div class="form-group">
                                    <label for="new_password_confirmation">Konfirmasi Password Baru: <span style="color:red">(biarkan jika tidak ingin mengubah)</span></label>
                                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('profile-user')}}" class="btn btn-danger" >Batal</a>
                                    </div>
                            </form>
                        </div>
                    </div><!-- End Service Item -->
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