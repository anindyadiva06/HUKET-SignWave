  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard-admin') }}" class="logo d-flex align-items-center">
        <img src="assets/img/signwave-no-text.png" alt="">
        <span class="d-none d-lg-block">Sign Wave</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('assets/img/guest-profile.png') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ session('nama', 'Guest') }}</span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ session('nama', 'Guest') }}</h6>
              <span>Administrator</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile-admin') }}">
                <i class="bi bi-person"></i>
                <span>Akun Saya</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard-admin') ? 'active' : 'collapsed' }}" href="{{ route('dashboard-admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('kamus.index', 'kamus.edit', 'kamus.tambah') ? 'active' : 'collapsed' }}" href="{{ route('kamus.index') }}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Kelola Kamus</span>
        </a>
      </li><!-- End Kamus Nav -->
      <li class="nav-item">
        <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('latihan.index', 'latihan.edit', 'latihan.tambah') ? 'active' : 'collapsed' }}" href="{{ route('latihan.index') }}">
        <i class="bi bi-card-list"></i>
        <span>Kelola Latihan</span>
    </a>
</li><!-- End Latihan Page Nav -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('artikel.index', 'artikel.edit', 'artikel.tambah') ? 'active' : 'collapsed' }}" href="{{ route('artikel.index') }}">
          <i class="bi bi-journal-text"></i><span>Kelola Artikel</span>        
        </a>
      </li><!-- End Artikel Nav -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('kelola-feedback') ? 'active' : 'collapsed' }}" href="{{ route('kelola-feedback') }}">
          <i class="bi bi-envelope"></i>
          <span>Feedback</span>
        </a>
      </li><!-- End Feedback Page Nav -->


      <li class="nav-heading">akun</li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('profile-admin') ? 'active' : 'collapsed' }}" href="{{ route('profile-admin') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('index-kelola-user', 'edit-user', 'create-user') ? 'active' : 'collapsed' }}" href="{{ route('index-kelola-user') }}">
          <i class="bi bi-person"></i>
          <span>Kelola User</span>
        </a>
      </li><!-- End User Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->