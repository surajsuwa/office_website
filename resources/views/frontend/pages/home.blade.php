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

                @foreach($data['sliders'] as $slider)
                <div class="row gap-y align-items-centern item">
                    <div class="col-md-6 col-lg-6 banner-info">
                        <h1 class="bold text-contrast font-lg display-lg-2 mb-5">{{$slider->title}}
                            <span class="d-block light font-lg">{!! $slider->description !!}</span>
                        </h1>
                    </div>
                    <div class="col-md-6 col-lg-5 ms-lg-auto position-relatice">
                        <div data-aos="fade-left">
                            <div class="screen">
                                <img src="{{get_image_path('slider',$slider->featured_image)}}" class="img-responsive"
                                    alt="slider">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </header>

    {{-- platform --}}
    <section class="section platform-section"
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

        <div class="container p-0">
            @foreach($data['platform'] as $value)

            @if($loop->index == 0)
            <div class="row align-items-center py-5">
                <div class="col-md-6 order-md-2">
                    <figure data-aos="fade-right" class="aos-init aos-animate">
                        <img src="{{get_image_path('platform',$value->featured_image)}}" class="img-responsive" alt="">
                    </figure>
                </div>
                <div class="col-md-6">

                    <div class="mb-5" data-aos="fade-left" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">{{$value->title}}</h2>
                        <p class="lead text-muted">{!! $value->description !!}</p>

                        <a href="{{route('platform', $value->id)}}" class="btn btn-rounded btn-primary">Read
                            More</a>
                    </div>
                </div>
            </div>

            @elseif($loop->index == 1)
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <figure data-aos="fade-right" class="aos-init aos-animate">
                        <img src="{{get_image_path('platform',$value->featured_image)}}" class="img-responsive" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="mb-5" data-aos="fade-left" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">{{$value->title}}</h2>
                        <p class="lead text-muted">{!! $value->description !!}</p>
                        <a href="{{route('platform', $value->id)}}" class="btn btn-rounded btn-primary">Read
                            More</a>
                    </div>
                </div>
            </div>

            @elseif($loop->index == 2)
            <div class="row align-items-center py-5">
                <div class="col-md-6 order-md-2">
                    <figure data-aos="fade-right" class="aos-init aos-animate">
                        <img src="{{get_image_path('platform',$value->featured_image)}}" class="img-responsive" alt="">
                    </figure>
                </div>
                <div class="col-md-6">

                    <div class="mb-5" data-aos="fade-left" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">{{$value->title}}</h2>
                        <p class="lead text-muted">{!! $value->description !!}</p>
                        <a href="{{route('platform', $value->id)}}" class="btn btn-rounded btn-primary">Read
                            More</a>
                    </div>
                </div>
            </div>

            @else
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <figure data-aos="fade-right" class="aos-init aos-animate">
                        <img src="{{get_image_path('platform',$value->featured_image)}}" class="img-responsive" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="mb-5" data-aos="fade-left" class="aos-init aos-animate">
                        <h2 class="bold text-capitalize">{{$value->title}}</h2>
                        <p class="lead text-muted">{!! $value->description !!}</p>
                        <a href="{{route('platform', $value->id)}}" class="btn btn-rounded btn-primary">Read
                            More</a>
                    </div>
                </div>
            </div>

            @endif
            @endforeach

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
                    @foreach($data['service_category'] as $value)
                    @if($loop->index == 0)
                    <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">

                                <a href="{{route('services', $value->category_id)}}">
                                    <img src="{{get_image_path('serviceCategory',$value->featured_image)}}" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>{{$value->name}}</p>
                            </div>
                        </div>
                    </li>

                    @elseif ($loop->index == 1)
                    <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="{{route('services', $value->category_id)}}">
                                    <img src="{{get_image_path('serviceCategory',$value->featured_image)}}" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>{{$value->name}}</p>
                            </div>
                        </div>
                    </li>

                    @elseif ($loop->index == 2)
                    <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="{{route('services', $value->category_id)}}">
                                    <img src="{{get_image_path('serviceCategory',$value->featured_image)}}" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>{{$value->name}}</p>
                            </div>
                        </div>
                    </li>

                    @elseif ($loop->index == 3)
                    <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="{{route('services', $value->category_id)}}">
                                    <img src="{{get_image_path('serviceCategory',$value->featured_image)}}" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>{{$value->name}}</p>
                            </div>
                        </div>
                    </li>
                    @else

                    <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                        <div class="service-icon">
                            <div class="icon-service">
                                <a href="{{route('services', $value->category_id)}}">
                                    <img src="{{get_image_path('serviceCategory',$value->featured_image)}}" class="img-responsive"
                                        alt="title">
                                </a>
                            </div>
                            <div class="images-title">
                                <p>{{$value->name}}</p>
                            </div>
                        </div>
                    </li>

                    @endif

                    @endforeach


                </ul>
            </div>
        </div>
    </section>

    {{-- almost me --}}
    <section class="section profolio-section">
        <div class="container bring-to-front profolio_banner owl-carousel owl-theme">

            @foreach ($data['platformsDetails'] as $value )
                <div class="row gap-y align-items-center text-center text-lg-start item">
                    <div class="col-10 col-lg-6 mx-auto order-md-2 animated fadeIn aos-init aos-animate" data-aos="zoom-in">
                        <div class="mb-5">
                            <h2>{{$value->name}}</h2>
                            <p class="lead text-secondary">Our services includes UI design , UX developement, web
                                application development, mobile application development, Devops management and quality
                                assurance.</p>
                        </div>
                        <a href="{{route('work')}}" class="btn btn-info text-contrast btn-rounded mt-4">View More Protfolio</a>
                    </div>

                    <div class="col-12 col-lg-6 ps-0 order-md-1 aos-init aos-animate" data-aos="zoom-out">
                        <img src="{{get_image_path('serviceDetail',$value->detail_image)}}" alt=""
                            class="img-responsive aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                    </div>
                </div>
            @endforeach


            {{-- <div class="row gap-y align-items-center text-center text-lg-start item">
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
            </div> --}}
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

                @foreach ($data['client'] as $value)
                    @if ($loop->index < 3)
                        <div class="col-4 col-md-4 patner_item">
                            <figure><img src="{{get_image_path('client',$value->featured_image)}}" class="img-responsive mx-auto mb-5" alt=""
                                    style="max-height: 180px">
                            </figure>
                        </div>

                    @elseif($loop->index >= 3 && $loop->index < 7)
                    <div class="col-3 col-md-3 patner_item">
                        <figure><img src="{{get_image_path('client',$value->featured_image)}}" class="img-responsive mx-auto mb-5" alt=""
                                style="max-height: 180px">
                        </figure>
                    </div>

                    @else
                    <div class="col-4 col-md-4 patner_item">
                        <figure><img src="{{get_image_path('client',$value->featured_image)}}" class="img-responsive mx-auto mb-5" alt=""
                                style="max-height: 180px">
                        </figure>
                    </div>
                    @endif
                @endforeach



            </div>
        </div>
    </section>




</main><!-- themeforest:js -->

@endsection
