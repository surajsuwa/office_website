@extends('frontend.master')

@section('content')



<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary">
        <div class="container pb-4 pt-12">
            <div class="row">
                <div class="col-md-8 section_content mb-0" data-aos="zoom-in">
                    <h1 class="bold display-md-4 text-contrast mb-4"> {{$platform->title}}</h1>

                    <p class="lead text-contrast">{!! $platform->description !!}</p>
                </div>
                <div class="col-md-4 section_content">
                    <div class="aos-init aos-animate">
                        <div class="screen" data-aos="fade-up">
                            <img src="{{get_image_path('serviceDetail',$platform->featured_image)}}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    </section>
    <section class="section platform_design platform-bg relative">
        <nav class="slide nav nav-tabs nav-outlined nav-rounded justify-content-around justify-content-md-center mb-5 tech-item">

            @foreach ($platformDetail as $key => $value )
                <a class="nav-item nav-link {{ (0 == $key) ? 'active' : '' }}" data-bs-toggle="tab" href="#value{{$value->detail_id}}">{{$value->title}}</a>
            @endforeach


        </nav>
        <div class="tab-content container">

            @foreach ($platformDetail as $key => $value )
                <div class="tab-pane fade {{ (0 == $key) ? 'active show' : '' }}" id="value{{$value->detail_id}}">
                    <div class="row gap-y align-items-center">
                        <div class="col-md-8">
                            <h2 class="display-4 bold text-contrast animate__slideInDown" data-aos="fade-right">{{$value->title}}</h2>

                            <p class="text-content" data-aos="fade-right" data-aos-delay="500"> {{ strip_tags($value->description) }}</p>
                        </div>
                        <div class="col-md-4 me-md-auto">
                            <div data-aos="fade-up-right"><img src="{{get_image_path('platformDetail',$value->featured_image)}}"
                                    class="img-responsive" alt=""></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>

@endsection

@section('msg')

    @include('frontend.pages.message')
    {{-- <div id="msg_content">
        <div id="msg_detail" class="shadow-box shadow-hover bg-contrast p-3 rounded h-100 msg_details">
            <p class="bold text-darker mt-0">Leave a Message</p>

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
                    <textarea name="message" id="" class="form-control bg-contrast" rows="3">
                    </textarea>
                </div>

                <div class="d-grid gap-2">
                    <button id="" name="submit" type="submit"
                        class="btn btn-primary btn-rounded">Send
                        Message
                    </button>
                </div>

            </form>
        </div>
        <button id="msg_click">Leave a message</button>
    </div> --}}
@endsection
