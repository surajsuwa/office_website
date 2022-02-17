@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row">

                <div class="col-md-6 section_content">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="fade-up"
                        data-aos-anchor-placement="center-center"> About Us </h1>

                </div>

                <div class="col-md-6 col-lg-5 ms-lg-auto position-relatice">
                    <div data-aos="fade-left" class="aos-init aos-animate">
                        <div class="absolute screen-highlightcenter-xw-100"><img src="{{get_image_path('aboutUs',$data['introduction']->featured_image)}}" alt="" class="mx-auto shadow-lg rounded img-responsive aos-init" data-aos-delay="1000" data-aos="zoom-in"></div>
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

    <section class="section mt-n7" data-aos="fade-up" data-aos-delay="500">
        <div class="container bring-to-front pt-0">
            <div class="row align-items-center gap-y">


                <div class="col-md-6 ms-md-auto">
                    <div class="shadow bg-contrast p-4 rounded">
                        <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8 text-center">
                                    <h2 class="bold text-start">{{$data['introduction']->title}} </h2>
                                    <p class="lead text-start">{!! $data['introduction']->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section><!-- ./Other contact channels -->
    <section class="section b-b">
        <div class="container">
            <div class="mantra-img-block aos-init aos-animate" data-aos="zoom-out">

                <div class="mantra-inner-block">
                    <div class="mantra-left-img bounce-left"><img
                            src="{{get_image_path('mantra','mantra-left-img.png')}}" alt="Our Mantra"
                            class="img-responsive"></div>
                    <div class="mantra-right-img bounce-right"><img
                            src="{{get_image_path('mantra','mantra-right-img.png')}}" alt="Our Mantra"
                            class="img-responsive"></div>
                    <div class="mantra-md-img bounce-md"><img src="{{get_image_path('mantra','mantra-md-img.png')}}"
                            alt="Our Mantra" class="img-responsive"></div>
                </div><!-- ends mantra-inner-block -->
            </div>
        </div>
    </section>

    {{-- inspiration --}}
    <div class="inspiration_section">
        <div class="container">
            <h2 class="bold text-center"> Inspiration </h2>

            <div class="inspiration_content relative">

                @foreach ($data['inspirations'] as $value)
                    <div class="inspiration-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <span class="comma">"</span>
                        <p>
                            {!! $value->quotes !!}
                        </p>
                        <p> - {{ $value->quote_by }} </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</main>

@endsection
