@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary">
        <div class="container pb-4 pt-12">
            <div class="row">
                <div class="col-md-8 section_content mb-0">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="zoom-in"> Platform Explore the hallmark
                        examples </h1>
                </div>
                <div class="col-md-4 section_content">
                    <div class="aos-init aos-animate">
                        <div class="screen" data-aos="fade-up">
                            <img src="assets/images/platform/platform-design.png" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="section platform_design platform-bg relative">
        <nav
            class="slide nav nav-tabs nav-outlined nav-rounded justify-content-around justify-content-md-center mb-5 tech-item">
            <a class="nav-item nav-link active" data-bs-toggle="tab" href="#ecommerce-tab">Ecommerce</a>
            <a class="nav-item nav-link" data-bs-toggle="tab" href="#mobile-app-tab">Mobile Application</a>
            <a class="nav-item nav-link" data-bs-toggle="tab" href="#networking-tab">Networking</a>

        </nav>
        <div class="tab-content container">
            <div class="tab-pane fade active show" id="ecommerce-tab">
                <div class="row gap-y align-items-center">
                    <div class="col-md-8">
                        <h2 class="display-4 bold text-contrast animate__slideInDown" data-aos="fade-right">Multi
                            Warehouse</h2>



                        <p class="text-content" data-aos="fade-right" data-aos-delay="500">All Businesses are Unique and
                            do business in their own way, there isnt one magic solution for all. Thats why, Koklass, a
                            customizable business-to-business (B2B) eCommerce platform. Go live with basic function
                            within 2 days and we help you further customize solution based on your business needs making
                            it a perfect solution.</p>
                    </div>
                    <div class="col-md-4 me-md-auto">
                        <div data-aos="fade-up-right"><img src="assets/images/platform/mobile.png"
                                class="img-responsive" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="mobile-app-tab">
                <div class="row gap-y align-items-center">
                    <div class="col-md-8">
                        <h2 class="display-4 bold text-contrast">Multi Warehouse
                        </h2>
                        <p class="text-content">When buying Dashcore you will get right in your hand a powerful tool to
                            boost your
                            design. You will get not just a template but a complete ready-to-use HTML code snippets
                            to start right away with your project.</p>
                    </div>
                    <div class="col-md-4 me-md-auto">
                        <div class="aos-init aos-animate" data-aos="fade-up-left"><img
                                src="assets/images/platform/hand.png" class="img-responsive" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="networking-tab">
                <div class="row gap-y align-items-center">
                    <div class="col-md-8">
                        <h2 class="display-4 bold text-contrast">Multi Warehouse</h2>
                        <p class="text-content">When buying Dashcore you will get right in your hand a powerful tool to
                            boost your
                            design. You will get not just a template but a complete ready-to-use HTML code snippets
                            to start right away with your project.</p>
                    </div>
                    <div class="col-md-4 me-md-auto">
                        <div class="aos-init aos-animate" data-aos="fade-end"><img
                                src="assets/images/platform/warehouse.png" class="img-responsive" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="bring-to-front pb-0 pt-3 chatapp_section relative">
        <div class="container">
            <div class="row align-items-center g-0 py-5">
                <div class="col-md-4">
                    <div class="card border-0 rounded-lg shadow-lg mb-4 mb-md-0 aos-init aos-animate"
                        data-aos="fade-up">
                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col-xl-9 mx-auto">
                                    <div class="pricing text-center mb-5">
                                        <h5 class="bold text-uppercase text-primary">Our Location</h5>
                                        <hr class="my-4">
                                        <p>Everything you can get from a professional solution to keep your business on
                                            its
                                            way to success</p>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5 class="bold mt-0 mb-1 text-secondary">Nepal</h5>
                                            <p>Kathmandu, Nepal</p>

                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fas fa-phone me-2"></i>
                                                <div class="flex-fill">+977 975363535</div>
                                            </div>
                                            <hr class="mb-2">
                                        </li>
                                        <li>
                                            <h5 class="bold mt-0 mb-1 text-secondary">Nepal</h5>
                                            <p>Kathmandu, Nepal</p>

                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fas fa-phone me-2"></i>
                                                <div class="flex-fill">+977 975363535</div>
                                            </div>
                                            <hr class="mb-2">
                                        </li>
                                        <li>
                                            <h5 class="bold mt-0 mb-1 text-secondary">Nepal</h5>
                                            <p>Kathmandu, Nepal</p>

                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fas fa-phone me-2"></i>
                                                <div class="flex-fill">+977 975363535</div>
                                            </div>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="read-more text-center mb-4">
                            <a href="#" class="btn btn-secondary btn-sm btn-block py-2">
                                See Map
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-8 ms-md-n3 relative chtapp_rightaos-init aos-animate" data-aos="fade-up"
                    style="z-index: 1;margin-bottom: 220px;">
                    <div class="card border-0 rounded-lg shadow-lg aos-init aos-animate chtapp_body" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col-xl-10 mx-auto">
                                    <div class="text-center">
                                        <p class="text-muted chat_message">
                                            Hi there, I am N-bot from EKbana. I am here to provide services to our
                                            valued
                                            customers like you. Are you interested for a quick conversation?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="read-more-info text-center">
                                <a href="#" class="btn btn-primary btn-sm btn-block py-2">
                                    Yes
                                </a>
                                <a href="#" class="btn btn-secondary btn-sm btn-block py-2">
                                    No
                                </a>
                            </div>
                        </div>

                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col-xl-10 mx-auto">
                                    <div class="text-center">
                                        <p class="text-muted chat_message">
                                            Is there something spexific i can help you with?
                                        </p>
                                        <p class="text-muted chat_message">
                                            Or DO you need some guidance?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="read-more-info text-center">
                                <a href="#!" class="btn btn-primary btn-sm btn-block py-2">
                                    Guide Me
                                </a>

                            </div>

                        </div>

                        <div class="type-text relative">
                            <form>
                                <input type="text" class="form-control" placeholder="Type your message here">
                                <button type="submit" class="btn-chat"></button>
                            </form>
                        </div>
                    </div>
                    <div class="feature_image">
                        <img src="assets/images/chat/talk.png" class="img-responsive w-75" alt="">
                    </div>
                </div>
            </div>
        </div>


    </div>


</main><!-- themeforest:js -->


@endsection
