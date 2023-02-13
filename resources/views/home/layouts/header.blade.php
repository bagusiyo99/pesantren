{{-- <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light  bg-light shadow py-3 text-center">
        <div class="container ">
            <a class="navbar-brand" href="#">Fixed navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-4 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('home') ? 'menu-active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('about') ? 'menu-active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('service') ? 'menu-active' : '' }}"
                            href="/service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('blog') ? 'menu-active' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('contact') ? 'menu-active' : '' }}"
                            href="/contact">Contact</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <a href="/login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login </a>
                </form>
            </div>
        </div>
    </nav>
    
</header> --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'menu-active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('about') ? 'menu-active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('blog') ? 'menu-active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Foto
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Foto
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('contact') ? 'menu-active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{-- <header>


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
        <div class="container">
            <a class=" navbar-brand d-flex d-lg-none" href="index.html">
                <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">Bagus cell</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa-solid fa-list"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/about">About</a>
                    </li>

                    <div class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Handphone</a>
                        <div class="dropdown-menu m-0">
                            <a href="/samsung" class="dropdown-item ">Samsung</a>
                            <a href="/iphone" class="dropdown-item">Iphone</a>
                            <a href="/asus" class="dropdown-item">Asus</a>
                            <a href="/vivo" class="dropdown-item">Vivo</a>
                            <a href="/oppo" class="dropdown-item">Oppo</a>
                            <a href="/xiomi" class="dropdown-item">Xiomi</a>
                            <a href="/infinix" class="dropdown-item">Infinix</a>
                            <a href="/hplain" class="dropdown-item">Lainnya</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Accessories</a>
                        <div class="dropdown-menu m-0">
                            <a href="/charger" class="dropdown-item">Charger</a>
                            <a href="/casing" class="dropdown-item">Casing </a>
                            <a href="/pb" class="dropdown-item">Power bank</a>
                            <a href="/usb" class="dropdown-item">Usb </a>
                            <a href="/lainaksesoris" class="dropdown-item">Lainnya</a>
                        </div>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link " href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> --}}


{{-- <!--Navbar Start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container">
        <a class=" navbar-brand d-flex d-lg-none" href="index.html">
            <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">School</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-solid fa-list"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/about">About</a>
                </li>

                <div class="nav-item dropdown ">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Handphone</a>
                    <div class="dropdown-menu m-0">
                        <a href="/service" class="dropdown-item ">Samsung</a>
                        <a href="/blog" class="dropdown-item">Iphone</a>
                        <a href="/informasi" class="dropdown-item">Vivo</a>
                        <a href="team.html" class="dropdown-item">Oppo</a>
                        <a href="testimonial.html" class="dropdown-item">Xiomi</a>
                        <a href="testimonial.html" class="dropdown-item">Infinix</a>
                        <a href="testimonial.html" class="dropdown-item">Lainnya</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Accessories</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Charger</a>
                        <a href="detail.html" class="dropdown-item">Casing </a>
                        <a href="feature.html" class="dropdown-item">Power bank</a>
                        <a href="team.html" class="dropdown-item">Usb </a>
                        <a href="testimonial.html" class="dropdown-item">Lainnya</a>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link " href="/contact">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!--Navbar End--> --}}
