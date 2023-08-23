<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Burger Bun - Restaurant Category Responsive Web Template | Home</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/short.jpg') }}">


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/style-starter.css') }}">
    <style>
        /* Add this CSS code to your stylesheet */
        .modal-content {
            background-color: #f8f9fa;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            background-color: #FBAF32;
            color: white;
            border-bottom: none;
            border-radius: 10px 10px 0 0;
        }

        .modal-title {
            font-size: 24px;
        }

        .modal-body {
            font-size: 16px;
        }

        .modal-footer {
            border-top: none;
            border-radius: 0 0 10px 10px;
        }

        .btn-secondary {
            background-color: #FBAF32;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #FBAF32;
        }
    </style>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1> <a class="navbar-brand" href="/">
                        <img src="{{ asset('home/assets/images/burger.png') }}" alt="burger logo"width="35px" />
                        Burger Bun
                    </a></h1>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item {{ Request::is('menu') ? 'active' : '' }}">
                            <a class="nav-link" href="/menu">Menu</a>
                        </li>
                        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>

                        <!--/search-right-->
                        <div class="search-right">
                            <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h4 class="mb-3">Search here</h4>
                                    <form action="error.html" method="GET" class="search-box">
                                        <input type="search" placeholder="Enter Keyword" name="search"
                                            required="required" autofocus="">
                                        <button type="submit" class="btn btn-style btn-primary">Search</button>
                                    </form>

                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- /search popup -->
                        </div>
                        <!--//search-right-->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- Add this code within your home page template -->
    <!-- ... Your existing HTML content ... -->

    <!-- Modal -->
    <div class="modal fade" id="reservationSuccessModal" tabindex="-1" role="dialog"
        aria-labelledby="reservationSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservationSuccessModalLabel">Reservation Submitted</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your reservation has been submitted successfully, we gonna contact you as soon as possible. Thank
                    you!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="waitresscomming" tabindex="-1" role="dialog"
        aria-labelledby="waitresscomming" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="waitresscomming">Thank You for choosing our Restaurant!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    The Waitress will Coming Now, Please Wait!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--/header-->
    @yield('content')
    <!-- footer -->
    <footer class="py-5">
        <div class="container py-xl-4">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_1its footer-text">
                    <!-- logo -->
                    <h2>
                        <a class="logo text-wh" href="/">
                            <img src="{{ asset('home/assets/images/burger.png') }}" alt="burger logo"
                                width="35px" /> Burger Bun
                        </a>
                    </h2>
                    <!-- //logo -->
                    @foreach ($Data as $footer)
                        <p class="mt-lg-4 mt-3 mb-4 pb-lg-2">{{ $footer->footer_description }}</p>
                    @endforeach
                    <!-- social icons -->
                    <ul class="top-right-info">
                        <li>
                            <p>Follow us:</p>
                        </li>
                        <li class="facebook-w3">
                            <a href="#facebbok">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="twitter-w3">
                            <a href="#twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li class="google-w3">
                            <a href="#google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                        <li class="dribble-w3">
                            <a href="#dribble">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- //social icons -->
                </div>
                <div class="col-lg-4 col-sm-6 footer-grid_section_1its mt-lg-0 mt-5">
                    <div class="footer-title">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="footer-text mt-4">
                        <p><strong>Address :</strong> Burger Bun, 208 Trainer Avenue street, Corner
                            Market, NY - 62617.</p>
                        <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 534894364">+12 534894364</a></p>
                        <p><strong>Email :</strong> <a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                    <div class="footer-title mt-4 pt-md-2">
                        <h3>Payments we accept</h3>
                    </div>
                    <ul class="list-unstyled payment-links mt-4">
                        <li>
                            <a href="#payment"><img src="{{ asset('home/assets/images/pay2.png') }}"
                                    class="radius-image" width="55px" alt=""></a>
                        </li>
                        <li>
                            <a href="#payment"><img src="{{ asset('home/assets/images/pay5.png') }}"
                                    class="radius-image" width="55px" alt=""></a>
                        </li>
                        <li>
                            <a href="#payment"><img src="{{ asset('home/assets/images/pay1.png') }}"
                                    class="radius-image" width="55px" alt=""></a>
                        </li>
                        <li>
                            <a href="#payment"><img src="{{ asset('home/assets/images/pay4.png') }}"
                                    class="radius-image" width="55px" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6 footer-grid_section_1its footer-text mt-lg-0 mt-5">
                    <div class="footer-title">
                        <h3>Subscribe Newsletter</h3>
                    </div>
                    <div class="info-form-right mt-4 p-0">
                        <p class="mb-4">Enter your email and receive the latest news, updates and special offers from
                            us.</p>
                        <form action="#" method="post">
                            <div class="form-group mb-2">
                                <input type="email" class="form-control" name="Email" placeholder="Email"
                                    required="">
                            </div>
                            <button type="submit"
                                class="btn btn-style btn-primary w-100 d-block ml-auto py-2">Subscribe</button>
                        </form>
                        <h4 class="mt-4">Subscribe & Get $10 on Your First Order</h4>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center py-4">
        <p>© 2023 Burger Bun. All rights reserved | Design by Mohamed Doukkani</p>
    </div>
    <!-- //copyright -->

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- jQuery (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script>
        $(document).ready(function() {
            @if (session('success'))
                setTimeout(function() {
                    $('#reservationSuccessModal').modal('show');
                }, 30); // Adjust the delay (in milliseconds) as needed
            @endif
        });
    </script>
    <script>
        $(document).ready(function() {
            @if (session('me'))
                setTimeout(function() {
                    $('#waitresscomming').modal('show');
                }, 30); // Adjust the delay (in milliseconds) as needed
            @endif
        });
    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

    <script src="{{ asset('home/assets/js/jquery-3.3.1.min.js') }}"></script> <!-- Common jquery plugin -->

    <script src="{{ asset('home/assets/js/theme-change.js') }}"></script><!-- theme switch js (light and dark)-->

    <script src="{{ asset('home/assets/js/owl.carousel.js') }}"></script><!-- owl carousel -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <script src="{{ asset('home/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>

    <script src="{{ asset('home/assets/js/counter.js') }}"></script>

    <!-- gallery popup js -->
    <script src="{{ asset('home/assets/js/smartphoto.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sm = new SmartPhoto(".js-img-viwer", {
                showAnimation: false
            });
            // sm.destroy();
        });
    </script>
    <!-- //gallery popup js -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('home/assets/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap-->

</body>

</html>
