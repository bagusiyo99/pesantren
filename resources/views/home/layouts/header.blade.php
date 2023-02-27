<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/logo/LOGO.png">BAGUS </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('home') ? 'menu-active' : '' }}" href="/">Home</a>
                </li>
                {{-- <li class="nav-item mx-2">
                    <a class="nav-link  {{ Request::is('about') ? 'menu-active' : '' }}" href="/about">Tentang Kami</a>
                </li> --}}

                <li class="nav-item mx-2">
                    <a class="nav-link  {{ Request::is('blog') ? 'menu-active' : '' }}" href="/blog">Blog</a>
                </li>

                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/about">Sambutan & Sejarah</a></li>
                        <li><a class="dropdown-item" href="#">Akreditas</a></li>
                        <li><a class="dropdown-item" href="#">Prestasi</a></li>
                        <li><a class="dropdown-item" href="#">Alumni</a></li>
                        <li><a class="dropdown-item" href="#">Visi & Misi</a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Galeri
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/foto">Foto</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                {{-- <li class="nav-item mx-2">
                    <a class="nav-link  {{ Request::is('contact') ? 'menu-active' : '' }}" href="/contact">Kontak</a>
                </li> --}}
                {{-- <li class="nav-item mx-2">
                    <a class="nav-link  {{ Request::is('pendaftaran') ? 'menu-active' : '' }}"
                        href="/pendaftaran">Pendaftaran</a>
                </li> --}}
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Kontak
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="/contact" class="dropdown-item">Kirim Pesan</a>
                        <a href="/pendaftaran" class="dropdown-item">Alamat</a>
                        {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Pendaftaran
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="/prosedur" class="dropdown-item">Tata Cara Pendaftaran</a>
                        <a href="/formulir" class="dropdown-item">Formulir</a>
                        {{-- <a href="/siswa" class="dropdown-item">Daftar Sekarang</a> --}}
                        <a href="/daftar_online" class="dropdown-item">Daftar Sekarang</a>

                        {{-- <a href="/pendaftaran" class="dropdown-item">Konfirmasi Pendaftaran</a> --}}
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
