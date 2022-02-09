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
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7 fullscreen-md d-flex justify-content-center align-items-center overlay overlay-primary alpha-8 image-background cover"
                style="background-image:url(https://picsum.photos/1920/1200/?random&amp;gravity=south)">
                <div class="content">
                    <h2 class="display-4 display-md-3 display-lg-2 text-contrast mt-4 mt-md-0">Get started with
                        <span class="bold d-block">Dashcore</span>
                    </h2>
                    <p class="lead text-contrast">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <hr class="mt-md-6 w-25">
                    <div class="d-flex flex-column">
                        <p class="small bold text-contrast">Or sign up with</p>
                        <nav class="nav mb-4"><a class="btn btn-circle btn-outline-contrast me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a> <a
                                class="btn btn-circle btn-outline-contrast me-2" href="#"><i
                                    class="fab fa-twitter"></i></a> <a class="btn btn-circle btn-outline-contrast"
                                href="#"><i class="fab fa-linkedin-in"></i></a></nav>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 mx-auto">
                <div class="register-form mt-5 mt-md-0"><img src="img/logo.png" class="logo img-responsive mb-4 mb-md-6"
                        alt="">
                    <h1 class="text-darker bold">Register</h1>
                    <p class="text-secondary mb-4 mb-md-6">Already have an account? <a href="login.html"
                            class="text-primary bold">Login here</a></p>
                    <form class="cozy" action="https://5studios.net/themes/dashcore3/srv/login.php"
                        data-validate-on="submit" novalidate>
                        <div class="form-group has-icon"><input type="text" id="register_username"
                                class="form-control form-control-rounded" placeholder="Desired username"> <i
                                class="icon fas fa-user-plus"></i></div>
                        <div class="form-group has-icon"><input type="text" id="register_fullname"
                                class="form-control form-control-rounded" placeholder="Full name"> <i
                                class="icon fas fa-address-card"></i></div>
                        <div class="form-group has-icon"><input type="text" id="register_email"
                                class="form-control form-control-rounded" placeholder="Valid email"> <i
                                class="icon fas fa-envelope"></i></div>
                        <div class="form-group has-icon"><input type="password" id="register_password"
                                class="form-control form-control-rounded" placeholder="Password"> <i
                                class="icon fas fa-lock"></i></div>
                        <div class="form-group d-flex align-items-center justify-content-between"><button type="submit"
                                class="btn btn-primary btn-rounded ms-auto">Register <i
                                    class="fas fa-long-arrow-alt-right ms-2"></i></button></div>
                    </form>
                    <div class="mt-5">
                        <p class="small text-secondary">By signing up, I agree to the <a href="terms.html">Terms of
                                Service</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- themeforest:js -->

@endsection
