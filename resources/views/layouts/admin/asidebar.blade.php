<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{ asset('assets/img/Logo.png') }}" alt="Sindangpano" class="brand-image elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Sindangpano</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('assets/admin/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="/home" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="/home/berita" class="nav-link {{ request()->is('home/berita') ? 'active' : '' }}">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
            Berita
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="/home/umkm" class="nav-link {{ request()->is('home/umkm') ? 'active' : '' }}">
            <i class="nav-icon fas fa-building"></i>
            <p>
            UMKM
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="/home/wisata" class="nav-link {{ request()->is('home/wisata') ? 'active' : '' }}">
            <i class="nav-icon fas fa-globe"></i>
            <p>
            Wisata
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="/home/pengaturan" class="nav-link {{ request()->is('home/pengaturan') ? 'active' : '' }}">
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