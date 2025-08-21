    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height: 40px;" class="me-2">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                            <a href="/sejarah" class="nav-item nav-link {{ request()->is('sejarah') ? 'active' : '' }}">Sejarah</a>
                            <a href="/struktur" class="nav-item nav-link {{ request()->is('struktur') ? 'active' : '' }}">Struktur</a>
                            <a href="/berita" class="nav-item nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                            <a href="/kontak" class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manajement</a>
                            <div class="dropdown-menu bg-light mt-2">
                            @if (Route::has('login'))
                                @auth
                                    <a
                                        href="{{ url('/home') }}" class="dropdown-item">Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ url('/login') }}" class="dropdown-item">Login
                                    </a>
                                    @if (Route::has('register'))
                                    <a
                                        href="{{ url('/register') }}" class="dropdown-item">Register
                                    </a>
                                    @endif
                                @endauth
                            @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>