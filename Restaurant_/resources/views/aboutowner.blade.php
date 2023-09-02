@extends('layoutowner')
@section('content')
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            @foreach($Data as $about)
            <h2 class="title">{{$about->about_bigtitle}}</h2>
            @endforeach
        </div>
    </div>
</section>
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                @foreach($Data as $about)
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="{{asset('home/assets/images/'. $about->about_img)}}" alt="" class="img-fluid radius-image-full">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Our Resturant</h5>
                    <h3 class="title-big">{{$about->about_title}}</h3>
                    <p class="mt-4">{{$about->about_description}}</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-4" href="/about"> Read More </a>

                    <a href="#small-dialog1" class="popup-with-zoom-anim play-view text-center position-absolute mt-md-5 mt-4">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span>
                        </span>
                        See Our Story
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                        <iframe src="{{$about->about_video}}" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- features -->
<section class="w3l-reasons py-5" id="how">
    <div class="main-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="title-small">Our process</h6>
                <h3 class="title-big">How We Work</h3>
            </div>
            <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                <div class="col-lg-3 col-sm-6 grids-feature">
                    <a  style="color:#FBAF32" class="icon"><span class="fa fa-pie-chart"></span></a>
                    <h4><a  class="title-head">Food Served Hot</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                    <a style="color:#FBAF32" class="icon"><span class="fa fa-cogs"></span></a>
                    <h4><a  class="title-head">Ample options</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a style="color:#FBAF32" class="icon"><span class="fa fa-glass"></span></a>
                    <h4><a  class="title-head">In-House Brevery</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a style="color:#FBAF32" class="icon"><span class="fa fa-motorcycle"></span></a>
                    <h4><a class="title-head">Fastest delivery</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->

<!--/team-sec-->
<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h6 class="title-small">Experts and skillful</h6>
                <h3 class="title-big">Our Experienced Chefs</h3>
            </div>
            <div class="row team-row mt-md-5 mt-5">
                @foreach($chefs as $chef)
                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="{{asset('assets/images/chefs/'.$chef->chef_img) }}" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="https:\\facebook.com">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <a href="https:\\twitter.com">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a href="https:\\instagram.com">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-title">{{ $chef->chef_name }}</div>
                        <p>{{ $chef->chef_job }}</p>
                    </div>
                </div>
                @endforeach
                <!-- end team member -->
            </div>
        </div>
</section>
<!--//team-sec-->


<!-- testimonials -->
<section class="w3l-clients-1" id="testimonials">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="heading align-self text-center">
                <h6 class="title-small">What our customers Say</h6>
                <h3 class="title-big mb-md-5 mb-4">Customer Testimonials</h3>
            </div>
            <!-- /grids -->
            <div class="testimonial-row py-md-4">
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Dennis wilson</h3>
                                        <p class="indentity">Customer </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Tommy sakura</h3>
                                        <p class="indentity">Customer </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Roy Linderson</h3>
                                        <p class="indentity">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Mike Thyson</h3>
                                        <p class="indentity">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
<!-- //testimonials -->
    <!-- forms -->
    <section class="w3l-forms-9 py-5" id="">
        <div class="main-w3 py-lg-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="main-midd col-lg-8">
                        <h3 class="title-big">Do You want to Contact with us. Then Don't Hesitate!</h3>
                    </div>
                    <div class="main-midd-2 col-lg-4 mt-lg-0 mt-4 text-lg-right">
                        <a class="btn btn-white btn-style" href="/contact"> Contact Us </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //forms -->
    @endsection()

