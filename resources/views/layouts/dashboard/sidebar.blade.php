<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
        <img src="{{ asset('vendors/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
               <a href="#" class="d-block">Selamat Datang  {{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                @if (auth()->guard('admin')->check())
                <a href="{{ route('admin.home') }}"
                    class="nav-link {{ request()->routeIS('admin.home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>DASBOARD</p>
                </a>
                @endif
            </li>

            <li class="nav-item">
                @if (auth()->guard('web')->check())
                <a href="{{ route('user.index') }}"
                    class="nav-link {{ request()->routeIS('user.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>DASBOARD</p>
                </a>
                @endif
            </li>
            <li class="nav-item">
                @if (auth()->guard('web')->check())
                <a href="{{ route('user.formulir.create') }}"
                    class="nav-link {{ request()->routeIS('user.formulir.create') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Form Pendaftaran</p>
                </a>
                @endif
            </li>
            {{-- <li class="nav-item">
                @if (auth()->guard('web')->check())
                <a href="{{ route('user.formulir.edit')}}"
                    class="nav-link {{ request()->routeIS('user.formulir.edit') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-history"></i>
                    <p>Riwayat Pendaftaran</p>
                </a>
                @endif
            </li> --}}
            <li class="nav-item">
                @if (auth()->guard('admin')->check())
                <a href="{{ route('admin.siswa.index') }}"
                    class="nav-link {{ request()->routeIS('admin.siswa.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>Data User Siswa</p>
                </a>
                @endif
            </li>
            <li class="nav-item">
                @if (auth()->guard('admin')->check())
                <a href="{{ route('admin.sekolah.index') }}"
                    class="nav-link {{ request()->routeIS('admin.sekolah.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>Data Sekolah Siswa</p>
                </a>
                @endif
            </li>
            <li class="nav-item">
                @if (auth()->guard('admin')->check())
                <a href="{{ route('admin.keluarga.index') }}"
                    class="nav-link {{ request()->routeIS('admin.keluarga.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Data keluarga Siswa</p>
                </a>
                @endif
            </li>
            <li class="nav-item">
                @if (auth()->guard('admin')->check())
                <a href="{{ route('admin.keluarga.index') }}"
                    class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>Pengaturan</p>
                </a>
                @endif
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
