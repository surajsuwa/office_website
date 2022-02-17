@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->

    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row">
                <div class="col-md-6 section_content">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="fade-up"
                        data-aos-anchor-placement="center-center"> Contact us</h1>
                    <p class="lead text-contrast"> Get in
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
    </div><!-- ./Contact Us -->

    <section class="section mt-n7" data-aos="fade-up" data-aos-delay="500">
        <div class="container bring-to-front pt-0">
            <div class="row align-items-center gap-y">
                <div class="col-md-6">
                    <div class="shadow bg-contrast p-4 rounded">

                        <form action="{{route('sendmail')}}" method="POST">
                            @csrf

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif


                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                            @endif

                            <div class="mb-4">
                                <label for="name" class="text-dark bold">Name</label>
                                <input type="text" name="name" id="" class="form-control bg-contrast" placeholder="name">
                            </div>

                            <div class="mb-4">
                                <label for="email" class="text-dark bold mb-0">Emailaddress</label>
                                <input type="email" name="email" id="" class="form-control bg-contrast"
                                    placeholder="Valid Email">
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="text-dark bold">Phone</label>
                                <input type="tel" name="contact" id="" class="form-control bg-contrast"
                                    placeholder="Phone no">
                            </div>

                            <div class="mb-4">
                                <label for="contact_email" class="text-dark bold">Message</label>
                                <textarea name="message" id="" class="form-control bg-contrast"
                                    placeholder="What do you want to let us know?" rows="8">
                                </textarea>
                            </div>

                            {{-- <div class="g-recaptcha" data-sitekey="6Lcvtn8eAAAAABbHDKn9twMOfWFZzkfj0EC_UYS-"></div>
                            @error('g-recaptcha-response')

                            @enderror --}}

                            <div class="d-grid gap-2">
                                <button id="" name="submit" type="submit"
                                    class="btn btn-primary btn-rounded">Send
                                    Message
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
                <div class="col-md-5 ms-md-auto">
                    <div class="d-flex mt-md-5"><i class="fas fa-map-marker font-l text-primary me-3"></i>
                        <div class="flex-fill">
                            {{$office_info->address}}
                        </div>
                    </div>
                    <div class="d-flex my-4"><i class="fas fa-phone font-l text-primary me-3"></i>
                        <div class="flex-fill"><span class="d-block">
                            <a href="#">
                                {{$office_info->phone_number}}
                            </a>
                        </div>
                    </div>

                    <div class="d-flex"><i class="fas fa-envelope font-l text-primary me-3"></i>
                        <div class="flex-fill"><a href="mailto:support@5studios.net">  {{$office_info->email_address}}</a></div>
                    </div>


                    <hr class="my-4">
                    <nav class="nav justify-content-center justify-content-md-start">
                        @foreach ($social_sites as $value)
                            <a href="#" class="btn btn-circle btn-secondary btn-sm me-3 brand-{{$value->icon}}"><i class="{{$value->url}}"></i></a>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- ./Other contact channels -->


</main><!-- themeforest:js -->

@endsection
