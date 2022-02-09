@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row">


                <div class="col-md-6 section_content">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="fade-up"
                        data-aos-anchor-placement="center-center"> Blogs </h1>
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

    <section class="section">
        <div class="container">
            <div class="row gap-y">
                <div class="col-md-6 col-lg-4">
                    <div class="card card-blog shadow-box shadow-hover border-0">
                        <a href="{{route('single-blog-post')}}"><img class="card-img-top img-responsive"
                                src="https://picsum.photos/350/200/?random&amp;gravity=north" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="author d-flex align-items-center"><img
                                        class="author-picture rounded-circle icon-md shadow-box"
                                        src="assets/images/avatar/user.png" alt="...">
                                    <p class="small bold my-0">Jenny Oliver</p>
                                </div>
                                <nav class="nav"><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i
                                            class="fas fa-heart text-danger me-2"></i> <span class="small">347</span>
                                    </a><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i
                                            class="far fa-bookmark me-2"></i> <span class="small">73</span></a>
                                </nav>
                            </div>
                            <hr>
                            <p class="card-title regular"><a href="{{route('single-blog-post')}}">Discover the Beauty of
                                    DashCore</a></p>
                            <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Animi at, cumque dolores dolorum est.</p>
                            <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-blog shadow-box shadow-hover border-0">
                        <a href="{{route('single-blog-post')}}"><img class="card-img-top img-responsive"
                                src="https://picsum.photos/350/200/?random&amp;gravity=north" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="author d-flex align-items-center"><img
                                        class="author-picture rounded-circle icon-md shadow-box"
                                        src="assets/images/avatar/user.png" alt="...">
                                    <p class="small bold my-0">Jenny Oliver</p>
                                </div>
                                <nav class="nav"><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i
                                            class="fas fa-heart text-danger me-2"></i> <span class="small">347</span>
                                    </a><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i
                                            class="far fa-bookmark me-2"></i> <span class="small">73</span></a>
                                </nav>
                            </div>
                            <hr>
                            <p class="card-title regular"><a href="{{route('single-blog-post')}}">Discover the Beauty of
                                    DashCore</a></p>
                            <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Animi at, cumque dolores dolorum est.</p>
                            <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-blog shadow-box shadow-hover border-0">
                        <a href="{{route('single-blog-post')}}"><img class="card-img-top img-responsive"
                                src="https://picsum.photos/350/200/?random&amp;gravity=north" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="author d-flex align-items-center"><img
                                        class="author-picture rounded-circle icon-md shadow-box"
                                        src="assets/images/avatar/user.png" alt="...">
                                    <p class="small bold my-0">Jenny Oliver</p>
                                </div>
                                <nav class="nav"><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i
                                            class="fas fa-heart text-danger me-2"></i> <span class="small">347</span>
                                    </a><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i
                                            class="far fa-bookmark me-2"></i> <span class="small">73</span></a>
                                </nav>
                            </div>
                            <hr>
                            <p class="card-title regular"><a href="{{route('single-blog-post')}}">Discover the Beauty of
                                    DashCore</a></p>
                            <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Animi at, cumque dolores dolorum est.</p>
                            <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-blog shadow-box shadow-hover border-0">
                        <a href="{{route('single-blog-post')}}"><img class="card-img-top img-responsive"
                                src="https://picsum.photos/350/200/?random&amp;gravity=north" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="author d-flex align-items-center"><img
                                        class="author-picture rounded-circle icon-md shadow-box"
                                        src="assets/images/avatar/user.png" alt="...">
                                    <p class="small bold my-0">Jenny Oliver</p>
                                </div>
                                <nav class="nav"><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i
                                            class="fas fa-heart text-danger me-2"></i> <span class="small">347</span>
                                    </a><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i
                                            class="far fa-bookmark me-2"></i> <span class="small">73</span></a>
                                </nav>
                            </div>
                            <hr>
                            <p class="card-title regular"><a href="{{route('single-blog-post')}}">Discover the Beauty of
                                    DashCore</a></p>
                            <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Animi at, cumque dolores dolorum est.</p>
                            <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-blog shadow-box shadow-hover border-0">
                        <a href="{{route('single-blog-post')}}"><img class="card-img-top img-responsive"
                                src="https://picsum.photos/350/200/?random&amp;gravity=north" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="author d-flex align-items-center"><img
                                        class="author-picture rounded-circle icon-md shadow-box"
                                        src="assets/images/avatar/user.png" alt="...">
                                    <p class="small bold my-0">Jenny Oliver</p>
                                </div>
                                <nav class="nav"><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i
                                            class="fas fa-heart text-danger me-2"></i> <span class="small">347</span>
                                    </a><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i
                                            class="far fa-bookmark me-2"></i> <span class="small">73</span></a>
                                </nav>
                            </div>
                            <hr>
                            <p class="card-title regular"><a href="{{route('single-blog-post')}}">Discover the Beauty of
                                    DashCore</a></p>
                            <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Animi at, cumque dolores dolorum est.</p>
                            <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-blog shadow-box shadow-hover border-0">
                        <a href="{{route('single-blog-post')}}"><img class="card-img-top img-responsive"
                                src="https://picsum.photos/350/200/?random&amp;gravity=north" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="author d-flex align-items-center"><img
                                        class="author-picture rounded-circle icon-md shadow-box"
                                        src="assets/images/avatar/user.png" alt="...">
                                    <p class="small bold my-0">Jenny Oliver</p>
                                </div>
                                <nav class="nav"><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i
                                            class="fas fa-heart text-danger me-2"></i> <span class="small">347</span>
                                    </a><a href="javascript:;"
                                        class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i
                                            class="far fa-bookmark me-2"></i> <span class="small">73</span></a>
                                </nav>
                            </div>
                            <hr>
                            <p class="card-title regular"><a href="{{route('single-blog-post')}}">Discover the Beauty of
                                    DashCore</a></p>
                            <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Animi at, cumque dolores dolorum est.</p>
                            <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                        </div>
                    </div>
                </div>



            </div>
            <nav class="nav justify-content-center mt-5"><a class="btn btn-outline-primary btn-rounded me-5"
                    href="javascript:;"><i class="fas fa-angle-left me-3"></i> Previous</a> <a
                    class="btn btn-outline-primary btn-rounded" href="javascript:;">Next <i
                        class="fas fa-angle-right ms-3"></i></a></nav>
        </div>
    </section><!-- ./Footer - Four Columns -->


</main><!-- themeforest:js -->

@endsection
