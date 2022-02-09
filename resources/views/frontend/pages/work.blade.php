@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row align-items-center">
                <div class=" col-md-8 section_content pb-0">
                    <h1 class="bold display-md-4 text-contrast mb-4 aos-init aos-animate" data-aos="fade-right"> Explore
                        the hallmark
                        examples of our work </h1>
                </div>
                <div class="col-md-4 section_content">
                    <div class="screen aos-init aos-animate" data-aos="zoom-in">
                        <img src="assets/images/works/works-bg.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="position-relative">
        <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
            </svg></div>
    </div><!-- ./Contact Us -->

    <div class="gallery-area2">
        <div class="container" id="inner-isotope">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="isotop-classes-tab isotop-btn">
                        <a href="#" data-filter="*" class="current">All</a>
                        <a href="#" data-filter=".mobile_app"> Mobile Apps </a>
                        <a href="#" data-filter=".technology"> Web Technology </a>
                        <a href="#" data-filter=".graphics"> Graphics </a>
                        <a href="#" data-filter=".Motion-graphics"> Motion Graphics </a>
                        <a href="#" data-filter=".gis-application"> Gis Applications </a>
                    </div>
                </div>
            </div>
            <div class="row featuredContainer gallery-wrapper">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 mobile_app">
                    <div class="gallery-box">
                        <img src="assets/images/works/5b1fb37cdbc62.png" class="img-responsive" alt="gallery">
                        <div class="gallery-content">
                            <a href="img/gallery/6.jpg" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 mobile_app">
                    <div class="gallery-box">
                        <img src="assets/images/works/5b1fb37cdbc62.png" class="img-responsive" alt="gallery">
                        <div class="gallery-content">
                            <a href="img/gallery/6.jpg" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 mobile_app">
                    <div class="gallery-box">
                        <img src="assets/images/works/5b1fb37cdbc62.png" class="img-responsive" alt="gallery">
                        <div class="gallery-content">
                            <a href="img/gallery/6.jpg" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 mobile_app">
                    <div class="gallery-box">
                        <img src="assets/images/works/5b1fb37cdbc62.png" class="img-responsive" alt="gallery">
                        <div class="gallery-content">
                            <a href="img/gallery/6.jpg" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 technology">
                    <div class="gallery-box">
                        <img src="assets/images/works/5b167fae203a4.jpg" class="img-responsive" alt="gallery">
                        <div class="gallery-content">
                            <a href="img/gallery/6.jpg" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




</main><!-- themeforest:js -->

@endsection
