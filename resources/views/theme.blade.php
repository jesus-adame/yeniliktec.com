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
                        <i class="ti-paint-bucket text-primary h1"></i>
                        <h3 class="mt-4 text-capitalize h5 ">themes made easy</h3>
                        <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non,
                            recusandae
                            tempore ipsam dignissimos molestias.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <i class="ti-shine text-primary h1"></i>
                        <h3 class="mt-4 text-capitalize h5 ">powerful design</h3>
                        <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non,
                            recusandae
                            tempore ipsam dignissimos molestias.</p>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <i class="ti-thought text-primary h1"></i>
                        <h3 class="mt-4 text-capitalize h5 ">creative content</h3>
                        <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non,
                            recusandae
                            tempore ipsam dignissimos molestias.</p>
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
                        <img class="img-fluid" src="images/feature/feature-new-01.jpg" alt="iphone">
                    </div>
                </div>
                <div class="col-lg-6 mr-auto align-self-center">
                    <div class="feature-content">
                        <!-- Feature Title -->
                        <h2>Increase your productivity with <a
                                href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small
                                Apps</a></h2>
                        <!-- Feature Description -->
                        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut
                            aliquip ex ea commodo consequat.</p>
                    </div>
                    <!-- Testimonial Quote -->
                    <div class="testimonial">
                        <p>
                            "InVision is a window into everything that's being designed at Twitter. It gets all of our best
                            work in one
                            place."
                        </p>
                        <ul class="list-inline meta">
                            <li class="list-inline-item">
                                <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="">
                            </li>
                            <li class="list-inline-item">Jonathon Andrew , Themefisher.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto align-self-center">
                    <div class="feature-content">
                        <!-- Feature Title -->
                        <h2>Increase your productivity with <a
                                href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small
                                Apps</a></h2>
                        <!-- Feature Description -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex
                            ea commodo consequat.</p>
                    </div>
                    <!-- Testimonial Quote -->
                    <div class="testimonial">
                        <p>
                            "InVision is a window into everything that's being designed at Twitter. It gets all of our best
                            work in one
                            place."
                        </p>
                        <ul class="list-inline meta">
                            <li class="list-inline-item">
                                <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="">
                            </li>
                            <li class="list-inline-item">Jonathon Andrew , Themefisher.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mr-auto justify-content-center">
                    <!-- Feature mockup -->
                    <div class="image-content" data-aos="fade-left">
                        <img class="img-fluid" src="images/feature/feature-new-02.jpg" alt="ipad">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Feature Grid  ====-->

    <!--=================================
      =            Video Promo            =
      ==================================-->
      <section class="video-promo section bg-1">
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
                            <i class="ti-control-play video"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Video Promo  ====-->

    <!--==============================
      =            Services            =
      ===============================-->
    <section class="service section bg-gray">
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
                        <img class="img-fluid" src="images/feature/iphone-ipad.jpg" alt="iphone-ipad">
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
    </section>
    <!--====  End of Services  ====-->

    <section class="call-to-action-app section bg-blue">
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
    </section>

    <!--============================
      =            Footer            =
      =============================-->
    @include('shared.footer')


    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="plugins/aos/aos.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
@endsection
