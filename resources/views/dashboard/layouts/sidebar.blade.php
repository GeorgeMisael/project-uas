<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('img/Logo-Branding-UNAIR-biru.png') }}" alt="Unair Logo" class="brand-image img-circle elevation-1">
      <span class="brand-text font-weight-light">Universitas Airlangga</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard" class="d-block active">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          {{-- USER --}}
            <ul class="nav">
              <li class="nav-item">
                <a href="/usermk" class="nav-link @if($sb_submenu =='usermatakuliah') active @endif">
                  <i class="bi bi-arrow-right-circle-fill nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/userdosen" class="nav-link @if($sb_submenu =='userdosen') active @endif">
                  <i class="bi bi-arrow-right-circle-fill nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/userkelas" class="nav-link @if($sb_submenu =='userkelas') active @endif">
                  <i class="bi bi-arrow-right-circle-fill nav-icon"></i>
                  <p>Kelas</p>
                </a>
              </li>
            </ul>

          {{-- ADMINISTRATOR --}}
          @can('admin')
          <li class="nav-header">ADMINISTRATOR</li>
          <li class="nav-item @if($sb_menu == 'mahasiswa')menu-open @endif">
            <a href="#" class="nav-link @if($sb_menu =='mahasiswa') active @endif">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Mahasiswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mastermhs" class="nav-link @if($sb_submenu =='mastermahasiswa') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/mastermk" class="nav-link @if($sb_submenu =='mastermk') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/masterkelas" class="nav-link @if($sb_submenu =='masterkelas') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ruang Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/masterdosen" class="nav-link @if($sb_submenu =='masterdosen') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen Pengampuh</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if($sb_menu == 'perkuliahan')menu-open @endif">
            <a href="#" class="nav-link @if($sb_menu =='perkuliahan') active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Perkuliahan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/jadwalKuliah" class="nav-link @if($sb_submenu =='jadwalKuliah') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jadwalUjian" class="nav-link @if($sb_submenu =='jadwalUjian') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Ujian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/absenMahasiswa" class="nav-link @if($sb_submenu =='absenMahasiswa') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/nilaiMahasiswa" class="nav-link @if($sb_submenu =='nilaiMahasiswa') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>