<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="/storage/{{ $systems->image }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ $systems->system_name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ auth()->user()->pp ? '/storage/' . auth()->user()->pp : '/images/blank-profile.png' }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">RINGKASAN</li>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Halaman Utama
                  </p>
                </a>
            </li>
            <li class="nav-header">MENU UTAMA</li>
            <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link">
                  <i class="nav-icon fas fa-cubes"></i>
                  <p>
                    Paket
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>
                    Pesanan
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link">
                  <i class="nav-icon fas fa-cube"></i>
                  <p>
                    Assets
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link">
                  <i class="nav-icon fas fa-money-bill"></i>
                  <p>
                    Pengeluaran
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Laporan
                  </p>
                </a>
            </li>
            <li class="nav-header">MENU SISTEM</li>
            <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Profil
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Pengguna
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/setting" class="nav-link">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                    Pengaturan
                  </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
