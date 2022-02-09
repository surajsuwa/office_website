@extends('frontend.master')

@section('content')
<main class="overflow-hidden">
    {{-- banner --}}
    <header class="section header text-contrast app-landing-header">
        <div class="shape-wrapper">
            <div class="shape shape-background shape-main bg-primary"></div>
            <div class="shape shape-background shape-top gradient gradient-primary-dark"></div>
        </div>
        <div class="container">
            <div class="homebanner owl-carousel owl-theme">
                <div class="row gap-y align-items-centern item">
                    <div class="col-md-6 col-lg-6 banner-info">

                        <h1 class="bold text-contrast font-lg display-lg-2 mb-5">let greet the new world <span
                                class="d-block light font-lg">Artifical Intelegence, Machine learning and Many
                                More</span></h1>

                        <div class="nav mt-5 align-items-center"><a href="#"
                                class="btn btn-rounded btn-lg btn-dark shadow me-3 px-4 text-capitalize">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 ms-lg-auto position-relatice">
                        <div data-aos="fade-left">

                            <div class="screen"><img src="assets/images/banner/future1.png" class="img-responsive"
                                    alt="">
                            </div>
                            <div class="notch"></div>

                            <div class="absolute screen-highlightcenter-xw-100"><img
                                    src="img/screens/app/2-highlight.png" alt=""
                                    class="mx-auto shadow-lg rounded img-responsive" data-aos-delay="1000"
                                    data-aos="zoom-in"></div>
                        </div>
                    </div>
                </div>

                <div class="row gap-y align-items-centern item">
                    <div class="col-md-6 col-lg-6 banner-info">

                        <h1 class="bold text-contrast font-lg display-lg-2 mb-5">Creative solutions to improve your
                            business! <span class="d-block light font-lg">We work hand-in-hand with industry-leading
                                brands to help</span>
                        </h1>

                        <div class="nav mt-5 align-items-center"><a href="#"
                                class="btn btn-rounded btn-lg btn-dark shadow me-3 px-4 text-capitalize">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 ms-lg-auto position-relatice">
                        <div data-aos="fade-left">

                            <div class="screen"><img src="assets/images/banner/main-pic.png" class="img-responsive"
                                    alt="">
                            </div>
                            <div class="notch"></div>

                            <div class="absolute screen-highlightcenter-xw-100"><img
                                    src="img/screens/app/2-highlight.png" alt=""
                                    class="mx-auto shadow-lg rounded img-responsive" data-aos-delay="1000"
                                    data-aos="zoom-in">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    {{-- <section class="section">
        <div class="swiper-container shop-home-slider" data-sw-effect="fade">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid pt-6 pb-9 py-md-0" style="background-color: rgb(0, 157, 206);">
                        <div class="row gap-y align-items-center">
                            <div class="col-md-6 col-lg-6 px-0 order-md-2"><img class="img-responsive ms-auto"
                                    style="max-height: 620px;" src="assets/images/platform/happy-girl.jpg" alt="...">
                            </div>
                            <div class="col-md-6 col-lg-4 ms-lg-auto">
                                <div class="text-center text-lg-start text-lg-nowrap">
                                    <h4 class="text-light font-weight-light mb-0 pb-1">What you were waiting for?
                                    </h4>
                                    <h1 class="text-contrast bold display-4">The Headphones Collection</h1>
                                    <p class="lead text-light pb-3">Discover our selection of the best Headphones
                                    </p><a class="btn btn-primary" href="javascript:;">Shop Now <i
                                            class="fas fa-chevron-right ms-2 me-n1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid pt-6 pb-9 py-md-0" style="background-color: rgb(92, 216, 217);">
                        <div class="row gap-y align-items-center">
                            <div class="col-md-6 col-lg-6 px-0 order-md-2"><img class="img-responsive ms-auto"
                                    style="max-height: 620px;" src="assets/images/platform/app-deals.jpg" alt="...">
                            </div>
                            <div class="col-md-6 col-lg-4 ms-lg-auto">
                                <div class="text-center text-lg-start text-lg-nowrap">
                                    <h4 class="text-light font-weight-light mb-0 pb-1">Download the App</h4>
                                    <h1 class="text-contrast bold display-4">Shop on the Go</h1>
                                    <p class="lead text-light pb-3">Get the best of our store at your fingertips</p>
                                    <a class="btn btn-primary" href="javascript:;">Shop Now <i
                                            class="fas fa-chevron-right ms-2 me-n1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="swiper-pagination highlight-active text-md-right pe-md-6 pb-5 mb-5 mb-md-0"></div>

        </div>
    </section><!-- Deals --> --}}

    {{-- platform --}}
    <section class="section"
        style="background-image: url('assets/images/banner/banner-bg2.jpg'); background-repeat: no-repeat;">
        <div class="section-heading">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-center">
                    <h2 class="bold">Platforms</h2>
                    <p class="lead">Customizable, Scalable, Efficient</p>
                    <p class="lead text-muted">Streamlined platforms for companies to build solutions based on Business
                        Intelligence, Supply Chain Management, B2B Order Management system and Geo-Spatial Analysis.</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-6 order-md-2">
                    <figure data-aos="fade-right" class="aos-init aos-animate"><img
                            src="assets/images/platform/receive.svg" class="img-responsive" alt=""></figure>
                </div>
                <div class="col-md-6">
                    <div class="icon-xxl mb-4" data-aos="zoom-in-down" data-aos="zoom-in-down">
                        <div class="icon-shape"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.98 213.35"
                                class="shape shape-xxl drop-shadow">
                                <defs>
                                    <style>
                                        .cls-shape {
                                            fill: #1fa2ff;
                                        }
                                    </style>
                                </defs>
                                <title>shape-4</title>
                                <g id="layer_1" data-name="layer_1">
                                    <g id="OBJECTS">
                                        <path class="cls-shape"
                                            d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z">
                                        </path>
                                    </g>
                                </g>
                            </svg> <i class="icon fas fa-2x fa-users-cog center-xy text-contrast"></i></div>
                    </div>
                    <div class="mb-5" data-aos="fade-left" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">AI Platform</h2>
                        <p class="lead text-muted">From Computer Vision to Natural Language Processing to Data
                            Analytics, we leverage Machine Learning algorithms to provide valued benefits to our
                            clients.</p>
                        <a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center py-5">
                <div class="col-md-6">

                    <figure data-aos="fade-right" class="aos-init"><img src="assets/images/platform/configure.svg"
                            class="img-responsive" alt=""></figure>
                </div>
                <div class="col-md-6">
                    <div class="icon-xxl mb-4" data-aos="zoom-in-down">
                        <div class="icon-shape"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.98 213.35"
                                class="shape shape-xxl drop-shadow">
                                <defs>
                                    <style>
                                        .cls-shape {
                                            fill: #1fa2ff;
                                        }
                                    </style>
                                </defs>
                                <title>shape-4</title>
                                <g id="layer_1" data-name="layer_1">
                                    <g id="OBJECTS">
                                        <path class="cls-shape"
                                            d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z">
                                        </path>
                                    </g>
                                </g>
                            </svg> <i class="icon fas fa-2x fa-user-shield center-xy text-contrast"></i></div>
                    </div>
                    <div class="mb-5" data-aos="fade-left" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">Point Nemo</h2>
                        <p class="lead text-muted">While Data is New Oil, Location data are new gold mine. Unlock hidden
                            opportunities of your location data . Point Nemo's powerful tool allows geospatial and
                            business data to seamlessly merge, giving you wide range of new possibilities.</p>
                        <a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center py-5">
                <div class="col-md-6 order-md-2">
                    <figure data-aos="fade-left" class="aos-init aos-animate"><img
                            src="assets/images/platform/receive.svg" class="img-responsive" alt=""></figure>
                </div>
                <div class="col-md-6">
                    <div class="icon-xxl mb-4" data-aos="zoom-in-down">
                        <div class="icon-shape"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.98 213.35"
                                class="shape shape-xxl drop-shadow">
                                <defs>
                                    <style>
                                        .cls-shape {
                                            fill: #1fa2ff;
                                        }
                                    </style>
                                </defs>
                                <title>shape-4</title>
                                <g id="layer_1" data-name="layer_1">
                                    <g id="OBJECTS">
                                        <path class="cls-shape"
                                            d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z">
                                        </path>
                                    </g>
                                </g>
                            </svg> <i class="icon fas fa-2x fa-users-cog center-xy text-contrast"></i></div>
                    </div>
                    <div class="mb-5" data-aos="fade-right" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">Lumle</h2>
                        <p class="lead text-muted">Lumle　
                            Globally 20-30% of sales is lost due to inadequate stock and 5~8% goes to waste due to
                            overstock, With our industry proven supply chain algorithm powered by EKbana AI platform,
                            businesses will never miss sales or need to overstock. Our 'Just in Time' algorithm will be
                            invaluable tool for you from day one.</p>
                        <a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <figure data-aos="fade-left" class="aos-init"><img src="assets/images/platform/configure.svg"
                            class="img-responsive" alt=""></figure>
                </div>
                <div class="col-md-6">
                    <div class="icon-xxl mb-4" data-aos="zoom-in-down">
                        <div class="icon-shape"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.98 213.35"
                                class="shape shape-xxl drop-shadow">
                                <defs>
                                    <style>
                                        .cls-shape {
                                            fill: #1fa2ff;
                                        }
                                    </style>
                                </defs>
                                <title>shape-4</title>
                                <g id="layer_1" data-name="layer_1">
                                    <g id="OBJECTS">
                                        <path class="cls-shape"
                                            d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z">
                                        </path>
                                    </g>
                                </g>
                            </svg> <i class="icon fas fa-2x fa-user-shield center-xy text-contrast"></i></div>
                    </div>
                    <div class="mb-5" data-aos="fade-right" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">Point Nemo</h2>
                        <p class="lead text-muted">While Data is New Oil, Location data are new gold mine. Unlock hidden
                            opportunities of your location data . Point Nemo's powerful tool allows geospatial and
                            business data to seamlessly merge, giving you wide range of new possibilities.</p>
                        <a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- services --}}
    <section id="features" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class=" container">
            <div class="section-heading">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 text-center" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">
                        <h2 class="bold">Services</h2>
                        <p class="lead">Providing Streamlined Solutions</p>
                        <p class="lead text-muted">Streamlined platforms for companies to build solutions based on

                            Let our expertise help bring your ideas to life.
                        </p>
                    </div>
                </div>
            </div>

            <div class="service-menu mb-0">
                <ul>
                    <li data-aos="fade-up" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="">
                                    <img src="assets/images/services/5b1a744a64dc8.png" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>Mobile App Development</p>
                            </div>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="">
                                    <img src="assets/images/services/5b18b5c2cff8b.png" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>Mobile App Development</p>
                            </div>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="">
                                    <img src="assets/images/services/5b18b594258e4.png" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>Mobile App Development</p>
                            </div>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="">
                                    <img src="assets/images/services/5b064c657dd4c.png" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>Mobile App Development</p>
                            </div>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="">
                                    <img src="assets/images/services/5b064c3639f0c.png" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>Mobile App Development</p>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </section>

    {{-- almost me --}}
    <section class="section business-section">
        <div class="container bring-to-front business_banner owl-carousel owl-theme">
            <div class="row gap-y align-items-center text-center text-lg-start item">
                <div class="col-10 col-lg-6 mx-auto order-md-2 animated fadeIn aos-init aos-animate" data-aos="zoom-in">


                    <div class="mb-5">
                        <h2>Latest Mobile App UI</h2>
                        <p class="lead text-secondary">Our services includes UI design , UX developement, web
                            application development, mobile application development, Devops management and quality
                            assurance.</p>
                    </div>
                    <a href="#" class="btn btn-info text-contrast btn-rounded mt-4">View More Protfolio</a>
                </div>


                <div class="col-12 col-lg-6 ps-0 order-md-1 aos-init aos-animate" data-aos="zoom-out">
                    <img src="assets/images/business/5b3a1481a39b1.png" alt=""
                        class="img-responsive aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                </div>
            </div>



            <div class="row gap-y align-items-center text-center text-lg-start item">
                <div class="col-10 col-lg-4 mx-auto order-md-2">
                    <div class="mb-5 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
                        <h2>Click and Control Your Business</h2>
                        <p class=" lead text-secondary">n , UX developement, web application development, mobile
                            application development, Devops management and quality assurance.</p>
                    </div>
                    <a href="#" class="btn btn-info text-contrast btn-rounded mt-4">View More Protfolio</a>
                </div>
                <div class="col-12 col-lg-6 ps-0 order-md-1"><img src="assets/images/business/5b39b3215b339.png" alt=""
                        class="img-responsive aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>


    {{-- client section --}}
    <section class="section partners">
        <div class="container">
            <div class="section-heading aos-init aos-animate" data-aos="fade-up" style="margin-bottom:0px;">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 text-center">
                        <h2 class="bold">Few of Our Valued Clients</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-5 patner-content aos-init aos-animate" data-aos="flip-up">


                <div class="diagnol_line"></div>
                <div class="diagnol_line diagnol_line_second"></div>
                <div class="diagnol_line diagnol_line_third"></div>

                <div class="col-4 col-md-4 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>

                <div class="col-4 col-md-4 patner_item">
                    <figure><img src="assets/images/client/5b29fc7d5b1d6.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-4 col-md-4 patner_item">
                    <figure><img src="assets/images/client/5b064d121240b.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-3 col-md-3 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-3 col-md-3 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-3 col-md-3 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-3 col-md-3 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-4 col-md-4 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-4 col-md-4 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>
                <div class="col-4 col-md-4 patner_item">
                    <figure><img src="assets/images/client/1.png" class="img-responsive mx-auto mb-5" alt=""
                            style="max-height: 180px">
                    </figure>
                </div>

            </div>
        </div>
    </section>




</main><!-- themeforest:js -->

@endsection
