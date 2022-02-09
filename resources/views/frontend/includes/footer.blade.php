{{-- chat --}}
<section class="section edge top-left chat_section">
    <div class="container pt-5">

        <div class="d-flex align-items-center flex-column aos-init aos-animate" data-aos="zoom-in">
            <div class="text-center text-md-start d-flex align-items-center flex-column">
                <div class="icon-chat">
                    <a href="">
                        <img src="assets/images/chat/icon-chat.png" class="img-responsive" alt="title">
                    </a>
                </div>
                <p class="light mb-0 text-primary lead">Ready to get started?</p>
                <h2 class="mt-0 bold">Create an account now</h2>
            </div>
            <div class="read-more">
                <a href="register.html" class="btn btn-primary btn-rounded mt-3 mt-md-0 ms-md-auto">
                    Chat Now
                </a>
            </div>
        </div>
    </div>
</section>

{{-- contact us --}}
<section id="features_contact" class="section contact_section">
    <div class="container">
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
                        <div class="col-6 col-sm-3 d-flex flex-column ps-0 pe-2">
                            <h2>Nepal</h2>
                            <p>Basundhara, ktm</p>
                            <p>
                                <i class="fas fa-phone me-2"></i>
                                + 98672384324
                            </p>
                        </div>
                        <div class="col-6 col-sm-3 d-flex flex-column ps-0 pe-2">
                            <h2>Nepal</h2>
                            <p>Basundhara, ktm</p>
                            <p>
                                <i class="fas fa-phone me-2"></i>
                                + 98672384324
                            </p>
                        </div>
                        <div class="col-6 col-sm-3 d-flex flex-column ps-0 pe-2">
                            <h2>Nepal</h2>
                            <p>Basundhara, ktm</p>
                            <p>
                                <i class="fas fa-phone me-2"></i>
                                + 98672384324
                            </p>
                        </div>
                        <div class="col-6 col-sm-3 d-flex flex-column ps-0 pe-2">
                            <h2>Nepal</h2>
                            <p>Basundhara, ktm</p>
                            <p>
                                <i class="fas fa-phone me-2"></i>
                                + 98672384324
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container pb-3">
        <div class="row gap-y text-center text-md-start">
            <div class="col-md-4 me-auto">
                <img src="{{asset('assets/images/logo/utech.png')}}" alt="" class="logo">
                <p>We love the challenge to deliver best possible solution using latest and future technologies....</p>

                <nav class="nav flex-column small">
                    <div class="d-flex align-items-center"><i class="fas fa-map-marker me-2"></i> 123 Street St,
                        Your City, YC Your Country</div>
                    <div class="mt-2 d-flex align-items-center"><i class="fas fa-phone me-2"></i> (123) 456-7890
                    </div>
                    <div class="mt-2 d-flex align-items-center"><i class="fas fa-envelope me-2"></i> <a
                            href="mailto:yourmail@domain.com">yourmail@domain.com</a></div>
                </nav>

                <nav class="nav social-icons justify-content-start mt-4"><a href="#"
                        class="btn text-contrast btn-circle btn-sm brand-facebook me-3"><i
                            class="fab fa-facebook"></i></a> <a href="#"
                        class="btn text-contrast btn-circle btn-sm brand-twitter me-3"><i
                            class="fab fa-twitter"></i></a> <a href="#"
                        class="btn text-contrast btn-circle btn-sm brand-youtube me-3"><i
                            class="fab fa-youtube"></i></a> <a href="#"
                        class="btn text-contrast btn-circle btn-sm brand-pinterest"><i class="fab fa-pinterest"></i></a>
                </nav>
            </div>



            <div class="col-md-2">
                <h6 class="py-2 bold text-uppercase">Quick Links</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-2" href="{{route('introduction')}}">About Us</a>
                    <a class="nav-item py-2" href="{{route('services')}}">Services</a>
                    <a class="nav-item py-2" href="{{route('contact')}}">Contact Us</a>
                    <a class="nav-item py-2" href="{{route('work')}}">Our Work</a>

                </nav>
            </div>

            <div class="col-md-2">
                <h6 class="py-2 bold text-uppercase">Company</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-2" href="{{route('howWework')}}">How we Work</a>
                    <a class="nav-item py-2" href="{{route('our_activity')}}">Our Activities</a>
                    <a class="nav-item py-2" href="{{route('blogs')}}">Blogs</a>
                    <a class="nav-item py-2" href="{{route('career')}}">Carrer</a>
                </nav>
            </div>


            <div class="col-md-2">
                <h6 class="py-2 bold text-uppercase">Support</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-2" href="{{route('term_condition')}}">Terms and Condition</a>
                    <a class="nav-item py-2" href="{{route('error_404')}}">Privacy Policy</a>
                    <a class="nav-item py-2" href="{{route('faq')}}">FAQ's</a>
                    <a class="nav-item py-2" href="{{route('register')}}">Register</a>
                    <a class="nav-item py-2" href="{{route('login')}}">Login</a>
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
