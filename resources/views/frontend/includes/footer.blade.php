{{-- contact us --}}
<section id="features_contact" class="section contact_section">
    <div class="container mt-0 pt-0">
        <div class="section-heading aos-init aos-animate" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-center">
                    <h2 class="bold">Contact Us</h2>
                    <p class="lead">Our services includes UI design , UX development, web application development
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="map-display aos-init aos-animate" data-aos="zoom-out">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.2055101267697!2d85.3263376399199!3d27.738963058027824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1917203eb05f%3A0xae13c09c50e800a3!2sUTech%20IT%20Professionals!5e0!3m2!1sen!2snp!4v1644049216053!5m2!1sen!2snp"
            width="1800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<footer class="site-footer section">

    <div class="container bring-to-front p-0 location_info" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="row gap-y">
            <div class="col-xl-12 col-lg-12 p-0">
                <div class="shadow-box shadow-hover p-3 rounded h-100">
                    <div class="row no-gutters text-center">

                        @foreach ($location as $data)
                        <div class="col-6 col-sm-3 d-flex flex-column ps-0 pe-2">
                            <h2 style="text-transform:uppercase;">{{$data->location_name}}</h2>
                            <p class="m-0">{{$data->office_name}}</p>
                            <p class="m-0 ">{{$data->location_name}}</p>
                            <p>
                                <i class="fas fa-phone me-2"></i>
                                {{$data->contact}}
                            </p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container pb-3">
        <div class="row gap-y text-center text-md-start">
            <div class="col-md-4 me-auto">
                <img src="{{get_image_path('site',$office_info->site_logo)}}" alt="" class="logo">

                <p>We love the challenge to deliver best possible solution using latest and future technologies....</p>


                <nav class="nav flex-column small">
                    <div class="d-flex align-items-center"><i class="fas fa-map-marker me-2"></i>{{$office_info->address}}</div>
                    <div class="mt-2 d-flex align-items-center"><i class="fas fa-phone me-2"></i>{{$office_info->phone_number}}
                    </div>
                    <div class="mt-2 d-flex align-items-center"><i class="fas fa-envelope me-2"></i> <a
                            href="#">{{$office_info->email_address}}</a></div>
                </nav>

                <nav class="nav social-icons justify-content-start mt-4">

                    @foreach ($social_sites as $value)
                        <a href="#" class="btn text-contrast btn-circle btn-sm me-3  brand-{{$value->icon}}"><i class="{{$value->url}}"></i></a>
                    @endforeach
                </nav>
            </div>

            <div class="col-md-2">
                <h6 class="py-2 bold text-uppercase">Quick Links</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-2" href="{{route('introduction')}}">About Us</a>
                    <a class="nav-item py-2" href="{{route('contactUs')}}">Contact Us</a>
                    <a class="nav-item py-2" href="{{route('work')}}">Our Work</a>

                </nav>
            </div>

            <div class="col-md-2">
                <h6 class="py-2 bold text-uppercase">Company</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-2" href="{{route('howWework')}}">How we Work</a>
                    <a class="nav-item py-2" href="{{route('our_activity')}}">Our Activities</a>
                    <a class="nav-item py-2" href="{{route('career')}}">Carrer</a>
                </nav>
            </div>


            <div class="col-md-2">
                <h6 class="py-2 bold text-uppercase">Support</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-2" href="">Privacy Policy</a>
                    <a class="nav-item py-2" href="{{route('faq')}}">FAQ's</a>
                </nav>
            </div>
        </div>


        <hr class="mt-5">
        <div class="row small align-items-center">
            <div class="col-md-6">
                <p class="mt-2 mb-md-0 text-secondary text-center text-md-start">
                    Copyright @2021 UTECH IT PROFESSIONALS PVT. LTD. All rights reserved
                </p>
            </div>

        </div>
    </div>
</footer>
