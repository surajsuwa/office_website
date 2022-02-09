@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row align-items-center">
                <div class=" col-md-8 section_content pb-0">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="fade-right">Services explore the hallmark
                        examples of our work </h1>
                </div>
                <div class="col-md-4 section_content">
                    <div class="screen" data-aos="zoom-in">
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



    <section class="section block services_info bg-contrast py-5">

        <div class="container py-4">
            <div class="section-heading text-center">
                <h2 class="bold">We Are Expert In</h2>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <nav class="nav nav-tabs nav-outlined nav-rounded mb-4" id="tab-outlined">
                        <a class="nav-item nav-link active" id="php-outlined-tab" data-bs-toggle="tab"
                            href="#php-outlined">
                            PHP/Laravel
                        </a>
                        <a class="nav-item nav-link" id="nodeJs-outlined-tab" data-bs-toggle="tab"
                            href="#nodeJs-outlined">
                            Node Js
                        </a>
                        <a class="nav-item nav-link" id="net-outlined-tab" data-bs-toggle="tab" href="#net-outlined">
                            net
                        </a>
                        <a class="nav-item nav-link" id="stock-outlined-tab" data-bs-toggle="tab"
                            href="#Stock-outlined">
                            AWS Stock
                        </a>
                    </nav>
                    <div class="tab-content" id="tab-default-content-outlined">
                        <div class="tab-pane fade show active" id="php-outlined">
                            <section class="section">
                                <div class="container-wide bring-to-front">
                                    <div class="row gap-y align-items-center text-center text-lg-start">
                                        <div class="col-10 col-lg-4 mx-auto order-md-2">
                                            <div class="mb-5">

                                                <h2>AWS Serverless computing </h2>
                                                <p class="lead text-secondary">
                                                    The Amazon web services (AWS) Stack we use are to provide
                                                    serverless(cloud) computing technology to our clients as they are
                                                    highly scalable with amazing performance and security. We are
                                                    experts in using services like AWS Lambda and Amazon DynamoDB among
                                                    other AWS Stacks.
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-12 col-lg-6 ps-0 order-md-1">
                                            <div class="feature-image animate__animated animate__backInLeft">
                                                <img src="assets/images/services/webTechnology/5b2108f4add76.png" alt=""
                                                    class="img-responsive aos-init aos-animate" data-aos="fade-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="nodeJs-outlined">
                            <section class="section">
                                <div class="container-wide bring-to-front">
                                    <div class="row gap-y align-items-center text-center text-lg-start">
                                        <div class="col-10 col-lg-4 mx-auto order-md-2">
                                            <div class="mb-5">
                                                <h2> Scalable Tailormade PHP Solutions on Laravel </h2>
                                                <p class="lead text-secondary">
                                                    We build custom web applications using popular PHP Web Framework
                                                    Our extensive experience of building and develiring CMS, Custom
                                                    Application, E-Commerce Applications, Data Migration, 3rd party API
                                                    integration and SAAS Applications, your project is in safe hand.
                                                </p>
                                            </div>

                                        </div>
                                        <div
                                            class="col-12 col-lg-6 ps-0 order-md-1 animate__animated animate__backInRight">
                                            <img src="assets/images/services/webTechnology/5b1a144fd6754.png" alt=""
                                                class="img-responsive aos-init aos-animate" data-aos="fade-right">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="net-outlined">
                            <section class="section">
                                <div class="container-wide bring-to-front">
                                    <div class="row gap-y align-items-center text-center text-lg-start">
                                        <div class="col-10 col-lg-4 mx-auto order-md-2">
                                            <div class="mb-5">
                                                <h2>AWS Serverless computing </h2>
                                                <p class="lead text-secondary">
                                                    The Amazon web services (AWS) Stack we use are to provide
                                                    serverless(cloud) computing technology to our clients as they are
                                                    highly scalable with amazing performance and security. We are
                                                    experts in using services like AWS Lambda and Amazon DynamoDB among
                                                    other AWS Stacks.
                                                </p>
                                            </div>

                                        </div>
                                        <div
                                            class="col-12 col-lg-6 ps-0 order-md-1 animate__animated animate__backInRight">
                                            <img src="assets/images/services/webTechnology/5b2108f4add76.png" alt=""
                                                class="img-responsive aos-init aos-animate" data-aos="fade-right">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="Stock-outlined">
                            <section class="section">
                                <div class="container-wide bring-to-front">
                                    <div class="row gap-y align-items-center text-center text-lg-start">
                                        <div class="col-10 col-lg-4 mx-auto order-md-2">
                                            <div class="mb-5">
                                                <h2>AWS Serverless computing </h2>
                                                <p class="lead text-secondary">
                                                    The Amazon web services (AWS) Stack we use are to provide
                                                    serverless(cloud) computing technology to our clients as they are
                                                    highly scalable with amazing performance and security. We are
                                                    experts in using services like AWS Lambda and Amazon DynamoDB among
                                                    other AWS Stacks.
                                                </p>
                                            </div>

                                        </div>
                                        <div
                                            class="col-12 col-lg-6 ps-0 order-md-1 animate__animated animate__backInLeft">
                                            <img src="assets/images/services/webTechnology/5b1a144fd6754.png" alt=""
                                                class="img-responsive aos-init aos-animate" data-aos="fade-right">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="trending-now">
        <div class="container">
            <div class="section-heading">
                <span class="text-primary bold">Discover</span>
                <h3>What's Trending Now</h3>
            </div>
            <div class="row gap-y">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="feature_image">
                        <a href="">
                            <img src="assets/images/services/webTechnology/5b1fb37cdbc62.png"
                                class="img-responsive mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="feature_image">
                        <a href="">
                            <img src="assets/images/services/webTechnology/5b1fb37cdbc62.png"
                                class="img-responsive mx-auto" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="feature_image">
                        <a href="">
                            <img src="assets/images/services/webTechnology/5b1fb37cdbc62.png"
                                class="img-responsive mx-auto" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="feature_image">
                        <a href="">
                            <img src="assets/images/services/webTechnology/5b1fb37cdbc62.png"
                                class="img-responsive mx-auto" alt="">
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>

</main><!-- themeforest:js -->

@endsection
