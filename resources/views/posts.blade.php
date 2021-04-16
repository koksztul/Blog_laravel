<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Central HTML Template</title>
    <!--

    Template 2103 Central

	http://www.tooplate.com/view/2103-central

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/tooplate-style.css">
    <!-- tooplate style -->

    <script>
        var renderPage = true;

        if (navigator.userAgent.indexOf('MSIE') !== -1
            || navigator.appVersion.indexOf('Trident/') > 0) {
            /* Microsoft Internet Explorer detected in. */
            alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
            renderPage = false;
        }
    </script>

</head>

<body>
    @include('layouts/header')
    <div class="container">
        <section class="tm-section-head" id="top">
            <header id="header" class="text-center tm-text-gray">
                <h1>CENTRAL</h1>
                <p>NEW TEMPLATE FOR YOU</p>
            </header>

            

            
        </section>

        <section class="row" id="tm-section-1">
            <div class="col-lg-12 tm-slider-col">
                <div class="tm-img-slider">
                    <div class="tm-img-slider-item" href="img/gallery-img-01.jpg">
                        <p class="tm-slider-caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <img src="img/gallery-img-01.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="img/gallery-img-02.jpg">
                        <p class="tm-slider-caption">Curabitur justo nisl, elementum a mollis sed.</p>
                        <img src="img/gallery-img-02.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="img/gallery-img-03.jpg">
                        <p class="tm-slider-caption">Suspendisse sodales elit non metus dictum blandit.</p>
                        <img src="img/gallery-img-03.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="img/gallery-img-04.jpg">
                        <p class="tm-slider-caption">Aliquam sed molestie tortor, mollis auctor neque.</p>
                        <img src="img/gallery-img-04.jpg" alt="Image" class="tm-slider-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="tm-section-2 tm-section-mb" id="tm-section-2">
            
        </section>

        <section class="tm-section-3 tm-section-mb" id="tm-section-3">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-md-12 tm-mb-sm-4 tm-2col-l">
                    <div class="tm-box-3">
                        <h2>{{ $post->title }}</h2>
                        <div class="image">
                            <img src="img/tm-img-1.jpg" class="rounded mx-auto d-block" />
                        </div>
                        <p> {{ $post->text }}</p>
                        <div class="text-center">
                            <a href="post/{{$post->id}}" class="btn btn-big">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach 
        {{$posts->links()}} 
        <footer class="mt-5">
            <p class="text-center">Copyright © 2018 Your Company Name - Design:
                <a rel="nofollow" href="http://www.tooplate.com/view/2103-central" target="_parent" class="tm-text-black">Central</a>
            </p>
        </footer>
    </div>

    <!-- load JS files -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- https://popper.js.org/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <!-- Slick Carousel -->

    <script>
        function setCarousel() {
            var slider = $('.tm-img-slider');

            if (slider.hasClass('slick-initialized')) {
                slider.slick('destroy');
            }

            if ($(window).width() > 991) {
                // Slick carousel
                slider.slick({
                    autoplay: true,
                    fade: true,
                    speed: 800,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            } else {
                slider.slick({
                    autoplay: true,
                    fade: true,
                    speed: 800,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            }
        }

        $(document).ready(function () {
            if (renderPage) {
                $('body').addClass('loaded');
            }

            setCarousel();

            $(window).resize(function () {
                setCarousel();
            });

            // Close menu after link click
            $('.nav-link').click(function () {
                $('#mainNav').removeClass('show');
            });

            // https://css-tricks.com/snippets/jquery/smooth-scrolling/
            // Select all links with hashes
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top + 1
                            }, 1000, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
        });
    </script>

</body>

</html>