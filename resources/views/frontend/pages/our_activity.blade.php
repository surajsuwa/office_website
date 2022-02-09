@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row">
                <div class="col-md-6 section_content">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="fade-up"
                        data-aos-anchor-placement="center-center">Our Activity</h1>
                    <p class="lead text-contrast">Get in
                        touch and let us know how we can help. Fill out the form
                        and we’ll be in touch as soon as possible.</p>
                </div>
            </div>
        </div>
    </header>

    <div class="position-relative">
        <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
            </svg></div>
    </div>


    {{-- our activities --}}
    <section class="section container my-5">
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

        <div class="shape-wrapper">
            <div class="shape shape-background shape-right"></div>
            <div class="shape shape-background top shape-left bg-info op-1"></div>
        </div>

        <div class="container">
            <div class="relative">

                <div>
                    <span class="bar-circle" data-aos="zoom-in"></span>
                    <span class="bar-circle big-circle" data-aos="zoom-in"></span>
                </div>
                <div class="bar-block"></div>

                <div class="row align-items-center py-5">
                    <div class="col-md-6 order-md-2">
                        <figure data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="500">
                            <img src="assets/images/platform/receive.svg" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <div class="icon-xxl mb-4">
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
                        <div class="mb-5">
                            <h2 class="bold text-capitalize">AI Platform</h2>
                            <p class="lead text-muted">From Computer Vision to Natural Language Processing to Data
                                Analytics, we leverage Machine Learning algorithms to provide valued benefits to our
                                clients.</p>
                        </div><a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>

                <div class="bar-block-top"></div>
                <div>
                    <span class="bar-circle" data-aos="zoom-in"></span>
                    <span class="bar-circle big-circle" data-aos="zoom-in"></span>
                </div>
                <div class="bar-block"></div>

                <div class="row align-items-center py-5">
                    <div class="col-md-6">
                        <figure data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="500"><img
                                src="assets/images/platform/configure.svg" class="img-responsive" alt=""></figure>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <div class="icon-xxl mb-4">
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
                        <div class="mb-5">
                            <h2 class="bold text-capitalize">Point Nemo</h2>
                            <p class="lead text-muted">While Data is New Oil, Location data are new gold mine. Unlock
                                hidden
                                opportunities of your location data . Point Nemo's powerful tool allows geospatial and
                                business data to seamlessly merge, giving you wide range of new possibilities.</p>
                        </div><a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>

                <div class="bar-block-top"></div>
                <div>
                    <span class="bar-circle" data-aos="zoom-in"></span>
                    <span class="bar-circle big-circle" data-aos="zoom-in"></span>
                </div>
                <div class="bar-block"></div>

                <div class="row align-items-center py-5">
                    <div class="col-md-6">
                        <figure data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="500"><img
                                src="assets/images/platform/configure.svg" class="img-responsive" alt=""></figure>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <div class="icon-xxl mb-4">
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
                        <div class="mb-5">
                            <h2 class="bold text-capitalize">Point Nemo</h2>
                            <p class="lead text-muted">While Data is New Oil, Location data are new gold mine. Unlock
                                hidden
                                opportunities of your location data . Point Nemo's powerful tool allows geospatial and
                                business data to seamlessly merge, giving you wide range of new possibilities.</p>
                        </div><a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>

                <div class="bar-block-top"></div>
                <div>
                    <span class="bar-circle" data-aos="zoom-in"></span>
                    <span class="bar-circle big-circle" data-aos="zoom-in"></span>
                </div>
                <div class="bar-block"></div>

                <div class="row align-items-center py-5">
                    <div class="col-md-6">
                        <figure data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="500"><img
                                src="assets/images/platform/configure.svg" class="img-responsive" alt=""></figure>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <div class="icon-xxl mb-4">
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
                        <div class="mb-5">
                            <h2 class="bold text-capitalize">Point Nemo</h2>
                            <p class="lead text-muted">While Data is New Oil, Location data are new gold mine. Unlock
                                hidden
                                opportunities of your location data . Point Nemo's powerful tool allows geospatial and
                                business data to seamlessly merge, giving you wide range of new possibilities.</p>
                        </div><a href="javascript:;" class="btn btn-rounded btn-primary">Read More</a>
                    </div>
                </div>

                <div class="bar-block-top"></div>
                <div>
                    <span class="bar-circle" data-aos="zoom-in"></span>
                    <span class="bar-circle big-circle" data-aos="zoom-in"></span>
                </div>
            </div>
        </div>
    </section>

</main><!-- themeforest:js -->

@endsection
