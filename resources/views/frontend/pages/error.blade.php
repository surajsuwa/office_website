@extends('frontend.master')

@section('custom_css')
<style>
    .navbar,
    .site-footer,
    #features_contact,
    .chat_section {
        display: none;
    }
</style>
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <div class="fullscreen row align-items-center">
            <div class="col-md-4 mx-md-auto text-center">
                <div class="center-xy text-light bold" style="font-size: 25rem; z-index: -1;">404</div><img
                    src="img/section/status/404.svg" class="img-responsive w-70 mx-auto" alt="">
                <h2 class="bold text-danger mt-5">Page not found</h2>
                <p class="text-secondary">Sorry, we can't find the page you are looking for.</p><a
                    href="{{route('home')}}" class="btn btn-info btn-rounded mt-5 py-3"><i
                        class="icon fas fa-long-arrow-alt-left"></i> Back
                    to home</a>
            </div>
        </div>
    </div>
</main><!-- themeforest:js -->
@endsection
