<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                    <div class="block">
                        <a href="/"><img src="/theme/images/logo_blanco_yeniliktec.png" alt="footer-logo"></a>
                        <!-- Social Site Icons -->
                        <ul class="social-icon list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/yeniliktec" target="_blank"><em class="ti-facebook"></em></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/company/yeniliktec/" target="_blank"><em class="ti-linkedin"></em></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/yeniliktec/?hl=es-la" target="_blank"><em class="ti-instagram"></em></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Servicios</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="/marketing-digital">Marketing digital</a></li>
                            <li><a href="/sitios-web">Sitios Web</a></li>
                            {{-- <li><a href="FAQ.html">FAQs</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Acceso</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Singup</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Company</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="career.html">Career</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="team.html">Investor</a></li>
                            <li><a href="privacy.html">Terms</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Compañia</h6>
                        <!-- links -->
                        <ul>
                            {{-- <li><a href="about.html">Nosotros</a></li> --}}
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                            <li><a href="{{ route('about') }}">Equipo</a></li>
                            <li><a href="{{ route('terms.show') }}">Politica de privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center text-light bg-dark py-4">
        </small  class="text-secondary">{{ date('Y') }} Designed &amp; Developed by <a href="https://yeniliktec.com/">Yeniliktec &copy;</a></small>
    </div>
</footer>

@include('shared.new-scripts')