<!-- themeforest:js -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
<script src="{{asset('assets/js/core.min.js')}}"></script>
<script src="{{asset('assets/js/lib.min.js')}}"></script>
<script src="{{asset('assets/js/dashcore.min.js')}}"></script>
<!-- endinject -->

<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>


<script>


    $(window).on('load', function() {

        // back to top
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });

        $("#toTop").click(function () {
            $("html, body").animate({scrollTop: 0}, 1000);
        });

        /*-------------------------------------
        jQuery for Isotope initialization
        -------------------------------------*/
        var $container = $('#inner-isotope');
        if ($container.length > 0) {
            var selector = $container.find('.isotop-classes-tab a.current').attr('data-filter');
            console.log(selector);
            // Isotope initialization
            var $isotope = $container.find('.featuredContainer').isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            // Isotope filter
            $container.find('.isotop-classes-tab').on('click', 'a', function() {
                var $this = $(this);
                $this.parent('.isotop-classes-tab').find('a').removeClass('current');
                $this.addClass('current');
                var selector = $this.attr('data-filter');
                $isotope.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        }
    }); // end window load function
</script>

<script>
    jQuery(document).ready(function ($) {
        $('.homebanner').owlCarousel({
            loop: true,
            animateOut: 'fadeOut',
            autoplay: true,
            autdoplayTimeout: 1000,
            items: 1,
            margin: 0,
            stagePadding: 0,
            smartSpeed: 150
        });

        $('.profolio_banner').owlCarousel({
            loop: false,
            animateOut: 'fadeOut',
            autoplay: true,
            autdoplayTimeout: 1000,
            items: 1,
            margin: 0,
            stagePadding: 0,
            smartSpeed: 150
        });

        $("#msg_click").click(function() {
            $(".msg_details").toggleClass("msg_hide_show");
        });
    });
</script>




