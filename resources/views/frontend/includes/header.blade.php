<nav class="st-nav navbar main-nav navigation fixed-top" id="main-nav">
    <div class="container">
        <ul class="st-nav-menu nav navbar-nav">
            <li class="st-nav-section nav-item">
                <a href="#main" class="navbar-brand">
                    <img src="{{asset('assets/images/logo/logo_demo.JPG')}}" alt="utech"
                        class=" logo logo-sticky d-inline-block" />
                </a>
            </li>

            <li class="st-nav-section st-nav-primary nav-item">
                <a href="{{route('home')}}" class="st-root-link nav-link" href="index.html">HOME</a>
                <a class="st-root-link item-platform st-has-dropdown nav-link" data-dropdown="platform"> PLATFORMS </a>
                <a class="sst-root-link item-services st-has-dropdown nav-link" data-dropdown="services"> SERVICES </a>
                <a href="{{route('work')}}" class="st-root-link item-blog st-has-dropdown nav-link"
                    data-dropdown="blog"> WORKS </a>
                <a class="st-root-link item-aboutus st-has-dropdown nav-link" data-dropdown="aboutus"> ABOUT US </a>
                <a href="{{route('contactUs')}}" class="st-root-link item-blog st-has-dropdown nav-link"
                    data-dropdown="blocks"> CONTACT </a>

                <a href="{{route('career')}}" class="st-root-link item-career st-has-dropdown nav-link"
                    data-dropdown="career">CAREERS</a>

            </li>


            <!-- Mobile Navigation -->
            <li class="st-nav-section st-nav-mobile nav-item">
                <button class="st-root-link navbar-toggler" type="button"><span class="icon-bar"></span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span></button>
                <div class="st-popup">
                    <div class="st-popup-container">
                        <a class="st-popup-close-button">Close</a>
                        <div class="st-dropdown-content-group">
                            {{-- <h4 class="text-uppercase regular">services</h4> --}}
                            <a class="regular text-primary" href="/">
                                <i class="far fa-building me-2"></i>
                                 Home
                            </a>
                            <a class="regular text-primary" href="{{route('introduction')}}">
                                <i class="far fa-building me-2"></i>
                                 About Us
                            </a>
                            <a class="regular text-primary" href="{{route('work')}}">
                                <i class="far fa-building me-2"></i>
                                 Work
                            </a>
                            <a class="regular text-success" href="{{route('contactUs')}}">
                                <i class="far fa-envelope me-2"></i>
                                Contact
                            </a>
                            <a class="regular text-warning" href="">
                                <i class="fas fa-hand-holding-usd me-2"></i> Career </a>

                            <a class="regular text-info" href="{{route('faq')}}">
                                <i class="far fa-question-circle me-2"></i>
                                FAQs
                            </a>
                        </div>

                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="st-dropdown-root">
        <div class="st-dropdown-bg">
            <div class="st-alt-bg"></div>
        </div>
        <div class="st-dropdown-arrow"></div>

        <div class="st-dropdown-container">

            {{-- platform --}}
            <div class="st-dropdown-section" data-dropdown="platform">
                <div class="st-dropdown-content container">
                    <div class="st-dropdown-content-group">

                        <div class="row">
                            @foreach ($platforms as $data)

                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{url('platform/'.$data->id)}}">
                                    <div class="d-flex align-items-center flex-column mb-3">
                                        <figure class="mockup">
                                            <img src="{{get_image_path('platform',$data->featured_image)}}"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>
                                        <div class="flex-fill">
                                            <p class="m-0 text-secondary text-center">
                                                {{$data->title}}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <p>{!! Str::limit($data->description,30,'...') !!} </p>
                            </div>
                            @endforeach


                        </div>
                    </div>

                </div>
            </div>

            {{-- services --}}
            <div class="st-dropdown-section" data-dropdown="services">
                <div class="st-dropdown-content container">
                    <div class="st-dropdown-content-group services_group">

                        <div class="row">
                            @foreach ($services_categories as $value)
                            @if ($loop->index <4)
                                <div class="col-3 nav_container">
                                    <a class="nav_content" href="{{url('services/'. $value->category_id)}}">
                                        {{-- <div class="d-flex align-items-center mb-3 flex-row"> --}}
                                        <div class="mb-3 ">
                                            <figure class="mockup">
                                                <img src="{{get_image_path('serviceCategory',$value->featured_image)}}" class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                            </figure>

                                            <div style="text-align: center;">
                                                <h3 class="link-title m-0">{{$value->name}}</h3>
                                                {{-- <p class="m-0 text-secondary">Get to know </p> --}}
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="row">
                            @foreach ($services_categories as $value)
                            @if ($loop->index >=4)
                                <div class="col-3 nav_container">
                                    <a class="nav_content" href="{{url('services/'. $value->category_id)}}}">
                                        <div class="mb-3 ">
                                            <figure class="mockup">
                                                <img src="{{get_image_path('serviceCategory',$value->featured_image)}}" class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                            </figure>

                                            <div style="text-align: center;">
                                                <h3 class="link-title m-0">{{$value->name}}</h3>
                                                {{-- <p class="m-0 text-secondary">Get to know </p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            {{-- about us --}}
            <div class="st-dropdown-section" data-dropdown="aboutus">
                <div class="st-dropdown-content container">
                    <div class="st-dropdown-content-group">

                        <div class="row">
                            <div class="col-4 nav_container">
                                <a class="dropdown-item" href="{{route('introduction')}}">
                                    <h2 class="lead nav_content">Introduction</h2>
                                </a>

                            </div>
                            <div class="col-4 nav_container">
                                <a class="dropdown-item" href="{{route('howWework')}}">
                                    <h2 class="lead nav_content">How we work</h2>
                                </a>

                            </div>
                            <div class="col-4 nav_container">
                                <a class="dropdown-item" href="{{route('our_activity')}}">
                                    <h2 class="lead nav_content">Our Activities</h2>
                                </a>

                            </div>
                            {{-- <div class="col-4 nav_container">
                                <a class="dropdown-item" href="{{route('blogs')}}">
                                    <h2 class="lead nav_content">content</h2>
                                </a>

                            </div> --}}


                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</nav>
