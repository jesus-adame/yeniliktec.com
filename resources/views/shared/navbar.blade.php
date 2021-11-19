<nav class="navbar main-nav position-sticky sticky-top shadow w-100 navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img style="margin-top: -50px; margin-bottom: -45px; height: 100px" src="/images/logo-oscuro.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown @@pages">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Marketing Digital
                        <span><em class="ti-angle-down"></em></span>
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @@team" href="{{ route('marketing') }}">Social Media</a></li>
                        <li><a class="dropdown-item @@career" href="{{ route('marketing') }}">Community Maanger</a></li>
                        <li><a class="dropdown-item @@blog" href="{{ route('marketing') }}">Analítica Web</a></li>
                        <li><a class="dropdown-item @@blogSingle" href="{{ route('marketing') }}">Generación de contenido</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown @@pages">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Desarrollo Web
                        <span><i class="ti-angle-down"></i></span>
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @@team" href="{{ route('websites') }}">Diseño de Sitio Web</a></li>
                        <li><a class="dropdown-item @@career" href="{{ route('websites') }}">E-commerce</a></li>
                        <li><a class="dropdown-item @@blog" href="{{ route('websites') }}">Desarrollo a la medida</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown @@pages">
                    <a class="nav-link dropdown-toggle" href="{{ route('marketing') }}" data-toggle="dropdown">Nuestros Proyectos
                        <span><em class="ti-angle-down"></em></span>
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @@team" href="{{ route('websites') }}">Sitio Web</a></li>
                        <li><a class="dropdown-item @@career" href="{{ route('marketing') }}">Marketing</a></li>
                        <li><a class="dropdown-item @@blog" href="{{ route('websites') }}">Analitica Web</a></li>
                    </ul>
                </li>
                <li class="nav-item @@contact">
                    <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>