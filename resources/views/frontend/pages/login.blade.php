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
                    <h2 class="display-4 display-md-3 display-lg-2 text-contrast mt-5 mt-md-0">Welcome to <span
                            class="bold d-block">Dashcore</span></h2>
                    <p class="lead text-contrast">Login to your account</p>
                    <hr class="mt-md-6 w-25">
                    <div class="d-flex flex-column">
                        <p class="small bold text-contrast">Or sign in with</p>
                        <nav class="nav mb-4"><a class="btn btn-circle btn-outline-contrast me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a> <a
                                class="btn btn-circle btn-outline-contrast me-2" href="#"><i
                                    class="fab fa-twitter"></i></a> <a class="btn btn-circle btn-outline-contrast"
                                href="#"><i class="fab fa-linkedin-in"></i></a></nav>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 mx-auto">
                <div class="login-form mt-5 mt-md-0"><img src="img/logo.png" class="logo img-responsive mb-4 mb-md-6"
                        alt="">
                    <h1 class="text-darker bold">Login</h1>
                    <p class="text-secondary mt-0 mb-4 mb-md-6">Don't have an account yet? <a href="register.html"
                            class="text-primary bold">Create it here</a></p>
                    <form class="form cozy" action="https://5studios.net/themes/dashcore3/srv/login.php"
                        data-validate-on="submit" novalidate><label class="form-label">User name</label>
                        <div class="form-group has-icon"><input type="text" id="login_username" name="Login[username]"
                                class="form-control form-control-rounded" placeholder="Your registered username"
                                required> <i class="icon fas fa-user"></i>
                        </div><label class="form-label">Password</label>
                        <div class="form-group has-icon"><input type="password" id="login_password"
                                name="Login[password]" class="form-control form-control-rounded"
                                placeholder="Your password" required> <i class="icon fas fa-lock"></i></div>
                        <div class="form-group d-flex align-items-center justify-content-between"><a href="forgot.html"
                                class="text-dark small">Forgot your password?</a>
                            <div class="ajax-button">
                                <div class="fas fa-check btn-status text-success success"></div>
                                <div class="fas fa-times btn-status text-danger failed"></div><button type="submit"
                                    class="btn btn-primary btn-rounded">Login <i
                                        class="fas fa-long-arrow-alt-right ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main><!-- themeforest:js -->

@endsection
