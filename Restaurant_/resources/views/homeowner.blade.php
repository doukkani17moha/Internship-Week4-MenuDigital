@extends('layoutowner')
@section('content')
    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container py-lg-5 py-md-4 mt-lg-0 mt-md-5 mt-4">
            <div class="row align-items-center py-lg-5 py-4 mt-4">
                <div class="col-lg-6 col-sm-12">
                    @foreach($Data as $home)
                    <h3 class="">{{ $home->home_title }}</h3>
                    <h2 class="mb-4">Steak Burger</h2>
                    <p>{{ $home->home_description }}</p>
                    @endforeach
                    <div class="mt-md-5 mt-4">
                        <a class="btn btn-primary btn-style mr-2" href="{{ asset('/menu/'. Auth::user()->restaurant) }}"> See Menu </a>
                        <a class="btn btn-outline-primary btn-style" href="{{ asset('/reservation/'. Auth::user()->restaurant) }}"> Book a table </a>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <section class="w3l-index3" id="work">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-6 left-wthree-img text-righ">
                        <div class="position-relative">
                            <img src="{{ asset('home/assets/images/about.jpg') }}" alt=""
                                class="img-fluid radius-image-full">
                            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="{{ $home->home_story_video}}" allow="autoplay; fullscreen"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                        <h5 class="title-small mb-1">Our story</h5>
                        @foreach($Data as $home)
                        <h3 class="title-big">{{ $home->home_story_title }}
                            <span>Ingredients</span></h3>
                        <p class="mt-sm-4 mt-3">{{ $home->home_story_description }}</p>
                        @endforeach
                        <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-2" href="/about"> Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /bottom-grids-->
    <section class="w3l-bottom-grids-6 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <img src="{{ asset('home/assets/images/burger.png') }}" alt="burger logo" width="35px">
                        <h4><a class="title-head">Burgers</a></h4>
                        <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in
                            faucibus orci dolor sit et amet.</p>
                        <a href="/menu" class="btn btn-text">View all </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <img src="{{ asset('home/assets/images/snack.png') }}" alt="burger logo" width="35px">
                        <h4><a class="title-head">Snacks</a></h4>
                        <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in
                            faucibus orci dolor sit et amet.</p>
                        <a href="/menu" class="btn btn-text">View all </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <img src="{{ asset('home/assets/images/beverage.png') }}" alt="burger logo" width="35px">
                        <h4><a class="title-head">Beverages</a></h4>
                        <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in
                            faucibus orci dolor sit et amet.</p>
                        <a href="/menu" class="btn btn-text">View all </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

    <!-- /mobile section --->
    <section class="w3l-mobile-content-6 py-5">
        <div class="mobile-info py-lg-5 py-md-4 py-2">
            <!-- /mobile-info-->
            <div class="container">
                <div class="row mobile-info-inn mx-lg-0">
                    <div class="col-lg-4 mobile-right">
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-leaf"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a>Natural ingredients</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-shopping-basket"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a> Fresh vegetables & Meet</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-users"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a>World’s best Chef </a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mobile-left">
                        <img src="{{ asset('home/assets/images/burger1.png') }}" class="img-fluid radius-image" alt="">
                    </div>
                    <div class="col-lg-4 mobile-right">
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-cogs"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a>Best quality products</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-motorcycle"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a>Fastest door delivery</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-thumbs-down"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a>Ground beef & Low fat</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- //mobile-info-->
        </div>
    </section>
    <!-- //mobile section --->
    <!-- middle -->
    <div class="middle py-5" id="call">
        <div class="container py-lg-3">
            <div class="welcome-left text-center py-md-5 py-3">
                <h3>The Right Ingredients
                    for the Right Food. Eat Healthy, Delicious and Perfect Burgers From Our Hotel</h3>
                <h3 class="mt-4">Call us to order: <a href="tel:+21269680732">+212696807732</a> </h3>
                <a href="{{ asset('/contact/'. Auth::user()->restaurant) }}" class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2">Contact Us</a>
                <a href="{{ asset('/reservation/'. Auth::user()->restaurant) }}" class="btn btn-style btn-outline-primary mt-sm-5 mt-4">Book a table</a>
            </div>
        </div>
    </div>
    <!-- //middle -->
    <!--  Work gallery section -->
    <div class="w3l-gallery2" id="gallery">
        <div class="burger galleryks py-5">
            <div class="container py-lg-4 py-md-3">
                <h6 class="title-small text-center">Food Gallery</h6>
                <h3 class="title-big mb-lg-5 mb-4 text-center">Our Plats Gallery</h3>
                <div class="row no-gutters masonry">
                    @foreach ($plats as $plat)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="{{ asset('assets/images/'. $plat->plat_img) }}" class="js-img-viwer d-block"
                            data-caption="The Right Ingredients for the Right Food." data-id="lion">
                            <img src="{{ asset('assets/images/plats/'. $plat->plat_img) }}" class="img-fluid radius-image-full"
                                alt="burger gallery" />
                            <div class="content-overlay"></div>
                            <div class="content-details fadeIn-top">
                                <span class="fa fa-plus" aria-hidden="true"></span>
                                <h4>{{ $plat->plat_name }}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--  //Work gallery section -->


    <!-- features -->
    <section class="w3l-reasons py-5" id="why">
        <div class="main-w3 py-lg-5 py-md-d py-2">
            <div class="container">
                <div class="title-content text-center">
                    <h6 class="title-small">Why we are the best</h6>
                    <h3 class="title-big">4 Reasons to Choose us</h3>
                </div>
                <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                    <div class="col-lg-3 col-sm-6 grids-feature">
                        <a style="color:#FBAF32" class="icon"><span class="fa fa-cutlery"></span></a>
                        <h4><a class="title-head">Tasty Burgers</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                        <a style="color:#FBAF32" class="icon"><span class="fa fa-cogs"></span></a>
                        <h4><a class="title-head">Quality Products</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                        <a style="color:#FBAF32" class="icon"><span class="fa fa-users"></span></a>
                        <h4><a class="title-head">World's best Chef</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                        <a style="color:#FBAF32" class="icon"><span class="fa fa-motorcycle"></span></a>
                        <h4><a class="title-head">Fastest delivery</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //features -->
@endsection()
