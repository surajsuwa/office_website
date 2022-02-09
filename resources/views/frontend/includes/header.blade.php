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
                <a href="{{route('contact')}}" class="st-root-link item-blog st-has-dropdown nav-link"
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
                            <h4 class="text-uppercase regular">services</h4>
                            <a class="regular text-primary" href="about.html"><i class="far fa-building me-2"></i> About
                            </a><a class="regular text-success" href="contact.html"><i class="far fa-envelope me-2"></i>
                                Contact </a>
                            <a class="regular text-warning" href="pricing.html"><i
                                    class="fas fa-hand-holding-usd me-2"></i> Pricing </a>
                            <a class="regular text-info" href="faqs.html"><i class="far fa-question-circle me-2"></i>
                                FAQs</a>
                        </div>
                        <div class="st-dropdown-content-group border-top bw-2">
                            <h4 class="text-uppercase regular">Components</h4>
                            <div class="row">
                                <div class="col me-4">
                                    <a target="_blank" href="components/alert.html">Alerts</a> <a target="_blank"
                                        href="components/badge.html">Badges</a> <a target="_blank"
                                        href="components/button.html">Buttons</a>
                                    <a target="_blank" href="#">Colors</a> <a target="_blank"
                                        href="components/accordion.html">Accordion</a> <a target="_blank"
                                        href="components/cookie-law.html">Cookielaw</a>
                                </div>
                                <div class="col me-4">
                                    <a target="_blank" href="components/overlay.html">Overlay</a> <a target="_blank"
                                        href="components/progress.html">Progress</a> <a target="_blank"
                                        href="components/lightbox.html">Lightbox</a>
                                    <a target="_blank" href="components/tab.html">Tabs</a> <a target="_blank"
                                        href="components/tables.html">Tables</a> <a target="_blank"
                                        href="components/typography.html">Typography</a>
                                </div>
                            </div>
                        </div>
                        <div class="st-dropdown-content-group bg-light b-t">
                            <a href="login.html">Sign in <i class="fas fa-arrow-right"></i></a>
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
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('platform')}}">
                                    <div class="d-flex align-items-center flex-column mb-3">
                                        <figure class="mockup"><img src="assets/images/platform/5b1a44d5123a6.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>
                                        <div class="flex-fill">
                                            <p class="m-0 text-secondary text-center">
                                                Technology Platform
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('platform')}}">
                                    <div class="d-flex align-items-center flex-column mb-3">
                                        <figure class="mockup"><img src="assets/images/platform/5b1a44d5123a6.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>
                                        <div class="flex-fill">
                                            <p class="m-0 text-secondary text-center">
                                                Technology Platform
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('platform')}}">
                                    <div class="d-flex align-items-center flex-column mb-3">
                                        <figure class="mockup"><img src="assets/images/platform/5b1a44d5123a6.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>
                                        <div class="flex-fill">
                                            <p class="m-0 text-secondary text-center">
                                                Technology Platform
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('platform')}}">
                                    <div class="d-flex align-items-center flex-column mb-3">
                                        <figure class="mockup"><img src="assets/images/platform/5b1a44d5123a6.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>
                                        <div class="flex-fill">
                                            <p class="m-0 text-secondary text-center">
                                                Technology Platform
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            {{-- services --}}
            <div class="st-dropdown-section" data-dropdown="services">
                <div class="st-dropdown-content container">
                    <div class="st-dropdown-content-group services_group">
                        <div class="row">
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">Mobile App</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">Web Technology</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">User Centerd</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">Frontend Dev</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">Quality Assurance</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">Custom Cad App</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">Cloud Services</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="nav_content" href="{{route('services')}}">
                                    <div class="d-flex align-items-center mb-3">
                                        <figure class="mockup"><img src="assets/images/services/5b1a744a64dc8.png"
                                                class="img-responsive mx-auto" alt="" style="max-height: 180px">
                                        </figure>

                                        <div class="flex-fill">
                                            <h3 class="link-title m-0">Colors</h3>
                                            <p class="m-0 text-secondary">Get to know </p>
                                        </div>
                                    </div>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- about us --}}
            <div class="st-dropdown-section" data-dropdown="aboutus">
                <div class="st-dropdown-content container">
                    <div class="st-dropdown-content-group">

                        <div class="row">
                            <div class="col-3 nav_container">
                                <a class="dropdown-item" href="{{route('introduction')}}">
                                    <h2 class="lead nav_content">Introduction</h2>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="dropdown-item" href="{{route('howWework')}}">
                                    <h2 class="lead nav_content">How we work</h2>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="dropdown-item" href="{{route('our_activity')}}">
                                    <h2 class="lead nav_content">Our Activities</h2>
                                </a>
                                <p>Our passion and drive </p>
                            </div>
                            <div class="col-3 nav_container">
                                <a class="dropdown-item" href="{{route('blogs')}}">
                                    <h2 class="lead nav_content">Blog</h2>
                                </a>
                                <p>Our passion and drive </p>
                            </div>


                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</nav>
