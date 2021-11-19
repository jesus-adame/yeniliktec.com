@extends('layouts.main')

@section('content')
    @include('shared.navbar')
    <!--====================================
      =            Hero Section            =
      =====================================-->
    @include('shared.slider')
    <!--====  End of Hero Section  ====-->

    <section class="section pt-0 relative pull-top">
        <div class="container">
            <div class="rounded shadow p-5 bg-white">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <em class="ti-desktop text-primary h1"></em>
                        <h3 class="mt-4 text-capitalize h5 ">Desarrollo Web</h3>
                        <ul class="text-decoration-none list-unstyled">
                            <li>Paginas web</li>
                            <li>tiendas en línea</li>
                            <li>Paginas de captura</li>
                            <li>Blogs</li>
                            <li>Sistemas web</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <em class="ti-announcement text-primary h1"></em>
                        <h3 class="mt-4 text-capitalize h5 ">Desarrollo Web</h3>
                        <ul class="text-decoration-none list-unstyled">
                            <li>Paginas web</li>
                            <li>tiendas en línea</li>
                            <li>Paginas de captura</li>
                            <li>Blogs</li>
                            <li>Sistemas web</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <em class="ti-thought text-primary h1"></em>
                        <h3 class="mt-4 text-capitalize h5 ">Analítica Web</h3>
                        <p class="regular text-muted">
                            El servicio de analítica web que través de metodologías y frameworks recopilará datos fundamentales de tus productos e inversiones publicitarias,
                            esto servirá para medir de manera real y concreta la efectividad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================================
      =            Feature Grid            =
      ===================================-->
    <section class="feature section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto justify-content-center">
                    <!-- Feature Mockup -->
                    <div class="image-content" data-aos="fade-right">
                        <img class="img-fluid" src="/images/content-marketing.png" alt="iphone">
                    </div>
                </div>
                <div class="col-lg-6 mr-auto align-self-center">
                    <div class="feature-content">
                        <!-- Feature Title -->
                        <h2>
                            Marketing Digital
                        </h2>
                        <!-- Feature Description -->
                        <p class="desc">
                            Con nuestros servicios de creación de estrategias publicitarias en marketing digital podrás tener el control de los recursos que inviertes en redes sociales y más,
                            contamos con expertos que te ayudarán desde el análisis hasta la ejecución de tu plan de marketing.
                        </p>
                    </div>
                    <!-- Testimonial Quote -->
                    <div class="testimonial">
                        <p>
                            "Una caracteristica de los negocios éxitosos, es que cuentan con un grupo de expertos que los asesoran."
                        </p>
                        <ul class="list-inline flex meta align-items-center mt-2">
                            <li class="list-inline-item">
                                <img src="/images/personal/luis-figueroa.png" alt="Luis A. Figueroa">
                            </li>
                            <li class="list-inline-item">Luis A. Figueroa, Digital Marketer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mx-auto px-5">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/amzn-ads.png" alt="Amazon Ads">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/analytics.png" alt="Google Analytics">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/datastudio.png" alt="Google Data Studio">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/doubleclick-search.png" alt="Double Click Search">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/facebook.png" alt="Facebook">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/amzn-ads.png" alt="Amazon Ads">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/google-ads.png" alt="Google Ads">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/linkedin.png" alt="LinkedIn">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/mailchimp.png" alt="Mailchimp">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/mercadoads.png" alt="Mercado Ads">
                    </li>
                    <li class="splide__slide flex items-center">
                        <img class="h-full" src="/images/carousel/twitter.png" alt="Twitter">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="feature section pt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto align-self-center">
                    <div class="feature-content">
                        <!-- Feature Title -->
                        <h2>
                            Desarrollo Web
                        </h2>
                        <!-- Feature Description -->
                        <p>
                            Creamos páginas web que te servirán para tener la infraestructura necesaria para conseguir clientes en línea,
                            de esta manera podrás ir escalando tu negocio de manera exponencial. Podemos desarrollar cualquier idea que tengas en mente. 
                        </p>
                    </div>
                    <!-- Testimonial Quote -->
                    <div class="testimonial">
                        <p>
                            "Somos concientes de la importancia del software para los negocios, en Yeniliktec utilizamos metodologías avanzadas
                            que nos ayudan a construir cualquier proyecto."
                        </p>
                        <ul class="list-inline flex meta align-items-center mt-2">
                            <li class="list-inline-item">
                                <img src="/images/personal/jesus-adame.jpg" alt="Jesús Adame">
                            </li>
                            <li class="list-inline-item">Jesús Adame, Scrum Master</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mr-auto justify-content-center">
                    <!-- Feature mockup -->
                    <div class="image-content" data-aos="fade-left">
                        <img class="img-fluid" src="/images/mockup-pc.png" alt="ipad">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Feature Grid  ====-->

    <!--=================================
      =            Video Promo            =
      ==================================-->
    {{-- <section class="video-promo section bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-block">
                        <!-- Heading -->
                        <h2>Watch Our Promo Video</h2>
                        <!-- Promotional Speech -->
                        <p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet
                            et,
                            porttitor at sem. Vivamus </p>
                        <!-- Popup Video -->
                        <a data-fancybox href="https://www.youtube.com/watch?v=jrkvirglgaQ">
                            <em class="ti-control-play video"></em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====  End of Video Promo  ====-->

    <!--==============================
      =            Services            =
      ===============================-->
    {{-- <section class="service section bg-gray">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>An Interface For Lifestyle</h2>
                        <p><a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small
                                Apps</a> makes
                            it easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 align-self-center">
                    <!-- Feature Image -->
                    <div class="service-thumb left" data-aos="fade-right">
                        <img class="img-fluid" src="/theme/images/feature/iphone-ipad.jpg" alt="iphone-ipad">
                    </div>
                </div>
                <div class="col-lg-5 mr-auto align-self-center">
                    <div class="service-box">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-bookmark"></i>
                                    <!-- Heading -->
                                    <h3>Easy Prototyping</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-pulse"></i>
                                    <!-- Heading -->
                                    <h3>Sensor Bridge</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-bar-chart"></i>
                                    <!-- Heading -->
                                    <h3>Strategist</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-panel"></i>
                                    <!-- Heading -->
                                    <h3>Art Direction</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====  End of Services  ====-->

    {{-- <section class="call-to-action-app section bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>It's time to change your mind</h2>
                    <p>Download over 2 million humans .Get <a
                            href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small
                            Apps</a> free forever!
                        <br>We say you won’t look back.
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="" class="btn btn-rounded-icon">
                                <i class="ti-apple"></i>
                                Iphone
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="btn btn-rounded-icon">
                                <i class="ti-android"></i>
                                Android
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="btn btn-rounded-icon">
                                <i class="ti-microsoft-alt"></i>
                                Windows
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <!--============================
      =            Footer            =
      =============================-->
    @include('shared.footer')

    <!-- To Top -->
    <div class="scroll-top-to" style="left: 20px; right: auto">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="/theme/plugins/jquery/jquery.min.js"></script>
    <script src="/theme/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/theme/plugins/slick/slick.min.js"></script>
    <script src="/theme/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="/theme/plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="/theme/plugins/aos/aos.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="/theme/plugins/google-map/gmap.js"></script>

    <script src="/theme/js/script.js"></script>
@endsection

@push('scripts')
<script>
	document.addEventListener('DOMContentLoaded', function () {
        let config = {
            type: 'loop',
            perMove: 1,
            height: '60px',
            autoWidth: true,
            autoplay: true,
            interval: 1500,
            arrows: false,
            pauseOnHover: false,
            speed: 500,
            gap: '3rem',
            pagination: false,
        }
		new Splide('.splide', config).mount();
	});
</script>
@endpush