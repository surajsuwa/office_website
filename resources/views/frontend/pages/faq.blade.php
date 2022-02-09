@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->
    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row">


                <div class="col-md-6 section_content">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="fade-up"
                        data-aos-anchor-placement="center-center"> FAQ's </h1>
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
    </div><!-- ./Contact Us -->

    <div class="container-fluid py-3 demo-blocks">

        <section class="section block bg-contrast">
            <div class="container py-4">
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">frequently <span class="bold">asked questions</span></h2>
                    <p class="lead text-secondary">Here are the answers to some of the most common questions we hear
                        from our appreciated customers</p>
                </div>
                <div class="row gap-y">
                    <div class="col-md-6">
                        <h5 class="bold">What does the package include?</h5>
                        <p>When you buy Dashcore, you get all you see in the demo but the images. We include SASS
                            files for styling, complete JS files with comments, all HTML variations. Besides we
                            include all mobile PSD mockups.</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="bold">What is the typical response time for a support question?</h5>
                        <p>Since you report us a support question we try to make our best to find out what is going
                            on, depending on the case it could take more or les time, however a standard time could
                            be minutes or hours.</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="bold">What do I need to know to customize this template?</h5>
                        <p>Our documentation give you all you need to customize your copy. However you will need
                            some basic web design knowledge (HTML, Javascript and CSS)</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="bold">Can I suggest a new feature?</h5>
                        <p>Definitely <span class="bold">Yes</span>, you can contact us to let us know your needs.
                            If your suggestion represents any value to both we can include it as a part of the theme
                            or you can request a custom build by an extra cost. Please note it could take some time
                            in order for the feature to be implemented.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>


</main><!-- themeforest:js -->

@endsection
