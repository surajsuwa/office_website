@extends('frontend.master')

@section('content')

<main class="overflow-hidden">
    <!-- ./Page header -->

    <header class="page header text-contrast bg-primary" style="">
        <div class="container pb-9">
            <div class="row">


                <div class="col-md-6 section_content">
                    <h1 class="bold display-md-4 text-contrast mb-4" data-aos="fade-up"
                        data-aos-anchor-placement="center-center">Contact us</h1>
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

    <section class="section mt-n7" data-aos="fade-up" data-aos-delay="500">
        <div class="container bring-to-front pt-0">
            <div class="row align-items-center gap-y">
                <div class="col-md-6">
                    <div class="shadow bg-contrast p-4 rounded">
                        <form action="https://5studios.net/themes/dashcore3/srv/contact.php" method="post"
                            class="form form-contact" name="form-contact" data-response-message-animation="slide-in-up">
                            <div class="mb-4"><label for="contact_email" class="text-dark bold mb-0">Email
                                    address</label>
                                <div id="emailHelp" class="small form-text text-secondary mt-0 mb-2 italic">We'll
                                    never share your email with anyone else.</div><input type="email"
                                    name="Contact[email]" id="contact_email" class="form-control bg-contrast"
                                    placeholder="Valid Email" required>
                            </div>
                            <div class="mb-4"><label for="contact_email" class="text-dark bold">Subject</label>
                                <input type="text" name="Contact[subject]" id="contact_subject"
                                    class="form-control bg-contrast" placeholder="Subject" required>
                            </div>
                            <div class="mb-4"><label for="contact_email" class="text-dark bold">Message</label>
                                <textarea name="Contact[message]" id="contact_message" class="form-control bg-contrast"
                                    placeholder="What do you want to let us know?" rows="8" required></textarea>
                            </div>
                            <div class="d-grid gap-2"><button id="contact-submit" data-loading-text="Sending..."
                                    name="submit" type="submit" class="btn btn-primary btn-rounded">Send
                                    Message</button></div>
                        </form>
                        <div class="response-message">
                            <div class="section-heading"><i class="fas fa-check font-lg"></i>
                                <p class="font-md m-0">Thank you!</p>
                                <p class="response">Your message has been send, we will contact you as soon as
                                    possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ms-md-auto">
                    <div class="d-flex mt-md-5"><i class="fas fa-map-marker font-l text-primary me-3"></i>
                        <div class="flex-fill">123 Street St, Your City,<span class="d-block">YC Country</span>
                        </div>
                    </div>
                    <div class="d-flex my-4"><i class="fas fa-phone font-l text-primary me-3"></i>
                        <div class="flex-fill"><span class="d-block"><a href="tel:+1-123-456-7890">(123)
                                    456-7890</a></span> <span class="d-block"><a href="tel:+1-987-654-3201">(987)
                                    654-3201</a></span></div>
                    </div>
                    <div class="d-flex"><i class="fas fa-envelope font-l text-primary me-3"></i>
                        <div class="flex-fill"><a href="mailto:support@5studios.net">support@5studios.net</a></div>
                    </div>
                    <hr class="my-4">
                    <nav class="nav justify-content-center justify-content-md-start"><a href="#"
                            class="btn btn-circle btn-secondary btn-sm me-3"><i class="fab fa-facebook"></i></a> <a
                            href="#" class="btn btn-circle btn-secondary btn-sm me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-circle btn-secondary btn-sm"><i class="fab fa-instagram"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- ./Other contact channels -->

    <section class="section b-b">
        <div class="container">
            <div class="row gap-y align-items-center text-center text-lg-start">
                <div class="col-12 col-md-6 py-4 px-5 b-md-r"><i data-feather="dollar-sign" width="36" height="36"
                        class="stroke-darker"></i> <a href="javascript:;"
                        class="mt-4 text-darker d-flex align-items-center">
                        <h4 class="me-3">Contact Sales</h4><i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                    <p class="mt-4">Looking for a custom quote? need to tell us more about your project? or want a
                        demonstration? drop us a line to <a href="mailto:support@5studios.net">sales@5studios.net</a>
                    </p>
                </div>
                <div class="col-12 col-md-6 py-4 px-5"><i data-feather="life-buoy" width="36" height="36"
                        class="stroke-darker"></i> <a href="javascript:;"
                        class="mt-4 text-darker d-flex align-items-center">
                        <h4 class="me-3">Technical Support</h4><i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                    <p class="mt-4">Any question about how to integrate your product?. Don't fret, our geek team is
                        ready for you at <a href="mailto:support@5studios.net">support@5studios.net</a></p>
                </div>
            </div>
        </div>
    </section><!-- ./Footer - Simple -->

</main><!-- themeforest:js -->

@endsection
