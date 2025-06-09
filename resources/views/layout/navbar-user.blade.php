<head>
  <style>
    .navbar .active > a {
      color: #fff;
    }
  </style>
</head>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('home-user') }}" class="logo d-flex align-items-center">
        <img src="assets/img/signwave-user.png" alt="Logo">
        <h1>Sign Wave<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home-user">Beranda</a></li>
          <li><a class="{{ Request::routeIs('kamus-user') ? 'active' : '' }}" href="{{ route('kamus-user') }}">Kamus</a></li>
          <li><a class="{{ Request::routeIs(['latihan.showQuestions', 'latihan.reviewAnswers', 'latihan.showResults']) ? 'active' : '' }}" href="home-user#latihan">Latihan</a></li>
          <li><a href="home-user#artikel">Artikel</a></li>
          <li><a href="home-user#feedback">Feedback</a></li>
          <li><a href="home-user#about">Tentang Kami</a></li>
          <li class="dropdown {{ Request::routeIs('profile-user') || Request::routeIs('profile-user.edit') ? 'active' : '' }}">
            <a href="#"><span>Akun Saya</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a class="dropdown-item d-flex align-items-center {{ Request::routeIs('profile-user') ? 'active' : '' }}" href="{{ route('profile-user') }}">
                  <span class="bi bi-person"> &nbsp &nbsp Akun Saya</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                <span class="bi bi-box-arrow-right"> &nbsp &nbsp Log Out</span>
              </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->