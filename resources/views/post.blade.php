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
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400')}}">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.5.0/css/font-awesome.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">
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
                    <div class="tm-img-slider-item" href="{{asset('img/gallery-img-01.jpg')}}">
                        <p class="tm-slider-caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <img src="{{asset('img/gallery-img-01.jpg')}}" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="{{asset('img/gallery-img-02.jpg')}}">
                        <p class="tm-slider-caption">Curabitur justo nisl, elementum a mollis sed.</p>
                        <img src="{{asset('img/gallery-img-02.jpg')}}" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="{{asset('img/gallery-img-03.jpg')}}">
                        <p class="tm-slider-caption">Suspendisse sodales elit non metus dictum blandit.</p>
                        <img src="{{asset('img/gallery-img-03.jpg')}}" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="{{asset('img/gallery-img-04.jpg')}}">
                        <p class="tm-slider-caption">Aliquam sed molestie tortor, mollis auctor neque.</p>
                        <img src="{{asset('img/gallery-img-04.jpg')}}" alt="Image" class="tm-slider-img">
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="tm-section-3 tm-section-mb" id="tm-section-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 tm-mb-sm-4 tm-2col-l ">
                    <div class="tm-box-3">
                        <h2>{{$post[0]->title}}</h2>
                        <div class="image">
                            <img src="{{asset('img/tm-img-1.jpg')}}" class="rounded mx-auto d-block" />
                        </div>
                        <p> {{$post[0]->text}} </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <a rel="" href="{{asset('https://bbbootstrap.com/snippets/bootstrap-comments-list-font-awesome-icons-and-toggle-button-91650380')}}" target="_parent" class="">Bootstrap 5 comments list</a>
                        <div class="headings d-flex justify-content-between align-items-center mb-3">
                            <h5>Comments({{ $count_comments }})</h5>
                        </div>
                        @foreach ($comments as $comment)
                            <div class="card p-3 m-1">
                                <div class="d-flex justify-content-start reply px-4">
                                    <small>{{ $comment->created_at }}</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="user d-flex flex-row align-items-center"> <img src="{{asset('dist/img/user2-160x160.jpg')}}" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">{{ $comment->name }}</small> <small class="font-weight-bold">{{$comment->text}}</small></span></div>
                                </div>
                                <div class="action d-flex justify-content-between mt-2 align-items-center">
                                    <!--
                                    <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                                    -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-8">
                    @if (Auth::user())
                        <form action="" method="POST">
                            @csrf
                            <label for="comment">Write Comment:</label>
                            <textarea class="form-control" rows="2" id="comment" name="text"></textarea>
                        
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        
                            <input type="hidden" name="post_id" value="{{ $post[0]->id }}">
                            <button type="submit" class="btn btn-secondary">Comment</button>
                        </form>
                    @else
                    <a rel="" href="{{asset('/login')}}" target="_parent" class="">Sign in to add a comment</a>
                    @endif
                    </div>
                </div>

            </div>
        </div>
            
  

        <footer class="mt-5">
            <p class="text-center">Copyright © 2018 Your Company Name - Design:
                <a rel="nofollow" href="{{asset('http://www.tooplate.com/view/2103-central')}}" target="_parent" class="tm-text-black">Central</a>
            </p>
        </footer>
    </div>

    <!-- load JS files -->
    <script type="text/javascript" src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- https://popper.js.org/ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- https://getbootstrap.com/ -->
    <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
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