@extends('founder.home.layout')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand" href="/founder/index"><img src="{{ asset('founder/home/assets/img/logo.svg') }}"
                    height="34" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="#service">Service</a>
                    </li>
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="#destination">Dashboards</a>
                    </li>
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="#booking">Plans</a>
                    </li>
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="#testimonial">Testimonial</a>
                    </li>
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item px-3 px-xl-4">
                        <a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="{{ route('register') }}">Sign Up</a>
                    </li>
                    <li class="nav-item dropdown px-3 px-lg-0">
                        <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">EN</a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius: 0.3rem"
                            aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">EN</a></li>
                            <li><a class="dropdown-item" href="#!">BN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section style="padding-top: 7rem">
        <div class="bg-holder" style="background-image: url({{ asset('founder/home/assets/img/hero/hero-bg.svg') }})"></div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                    <img class="pt-7 pt-md-0 hero-img" src="{{ asset('founder/home/assets/img/bg.png') }}"
                        alt="hero-header" />
                </div>
                <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                    <h4 class="fw-bold text-danger mb-3">
                        All You Need are Here
                    </h4>
                    <h1 class="hero-title">
                        Choose a Plan, Pay and Enjoy
                    </h1>
                    <p class="mb-4 fw-medium">
                        We provide custom panels and websites tailored for restaurant<br class="d-none d-xl-block" />owners,
                        enhancing their online presence<br class="d-none d-xl-block" />and streamlining operations.
                    </p>
                    <div class="text-center text-md-start">
                        <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#booking"
                            role="button">Find out more</a>
                        <div class="w-100 d-block d-md-none"></div>
                        <a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span
                                class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow">
                                <img src="{{ asset('founder/home/assets/img/hero/play.svg') }}" width="15"
                                    alt="paly" /></span></a><span class="fw-medium">Play Demo</span>
                        <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <iframe class="rounded" style="width: 100%; max-height: 500px" height="500px"
                                        src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="allowfullscreen"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pt-md-9" id="service">
        <div class="container">
            <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
                <img src="{{ asset('founder/home/assets/img/category/shape.svg') }}" style="max-width: 200px"
                    alt="service" />
            </div>
            <div class="mb-7 text-center">
                <h5 class="text-secondary">CATEGORY</h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    We Offer Best Services
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4">
                            <img src="{{ asset('founder/home/assets/img/category/icon1.png') }}" width="75"
                                alt="Service" /><br> <br>
                            <h4 class="mb-3">Server Hosting</h4>
                            <p class="mb-0 fw-medium">
                                Built Wicket longer admire do barton vanity itself do in it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4">
                            <img src="{{ asset('founder/home/assets/img/category/icon2.png') }}" width="75"
                                alt="Service" /> <br> <br>
                            <h4 class="mb-3">Best Panels</h4>
                            <p class="mb-0 fw-medium">
                                Engrossed listening. Park gate sell they west hard for the.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4">
                            <img src="{{ asset('founder/home/assets/img/category/icon3.png') }}" width="75"
                                alt="Service" /><br> <br>
                            <h4 class="mb-3">Control Your Restaurant</h4>
                            <p class="mb-0 fw-medium">
                                Barton vanity itself do in it. Preferd to men it engrossed
                                listening.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4">
                            <img src="{{ asset('founder/home/assets/img/category/icon4.png') }}" width="75"
                                alt="Service" /><br> <br>
                            <h4 class="mb-3">Customization</h4>
                            <p class="mb-0 fw-medium">
                                We deliver outsourced aviation services for military
                                customers
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5" id="destination">
        <div class="container">
            <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
                <img src="{{ asset('founder/home/assets/img/dest/shape.svg') }}" alt="destination" />
            </div>
            <div class="mb-7 text-center">
                <h5 class="text-secondary">Top Selling</h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    Top Dashboards
                </h3>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow">
                        <img class="card-img-top" src="{{ asset('founder/home/assets/img/dest/temp1.jpg') }}"
                            alt="Rome, Italty" />
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium">
                                    <a class="link-900 text-decoration-none stretched-link" href="#!">Tolya.com</a>
                                </h4>
                                <span class="fs-1 fw-medium">$450</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow">
                        <img class="card-img-top" src="{{ asset('founder/home/assets/img/dest/temp2.jpg') }}"
                            alt="London, UK" />
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium">
                                    <a class="link-900 text-decoration-none stretched-link" href="#!">Alba.com</a>
                                </h4>
                                <span class="fs-1 fw-medium">$350</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow">
                        <img class="card-img-top" src="{{ asset('founder/home/assets/img/dest/temp3.jpg') }}"
                            alt="Full Europe" />
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium">
                                    <a class="link-900 text-decoration-none stretched-link" href="#!">Ferta.com</a>
                                </h4>
                                <span class="fs-1 fw-medium">$400</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <section id="booking">
        <div class="container">
            <div class="mb-7 text-center">
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    All Plans
                </h3>
            </div>
            <div class="wrapper">
                @foreach ($plans as $plan)
                    <div class="table {{ strtolower($plan->name) }}">
                        <div class="head_tab">
                            <h2>
                                {{ $plan->name }} Plan
                            </h2>
                        </div>
                        <div class="aj_p">
                            <p>{{ $plan->description }}</p>
                        </div>
                        @if ($plan->name == 'Standard')
                            <div class="ribbon"><span>BEST VALUE</span></div>
                        @endif
                        <div class="price-section">
                            <div class="price-area">
                                <div class="inner-area">
                                    <span class="text">$</span>
                                    <span class="price">{{ $plan->price }}<span
                                            style="font-size: 12px">/mo</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="package-name"></div>
                        <ul class="features">
                            <div class="btn">
                                <button onclick="window.location.href='/register';">Choose this plan</button>
                            </div>
                            <p class="aj_des">
                                ${{ number_format($plan->price * 12 - $plan->price * 12 * 0.2, 2, '.', '') }} (Per
                                Year 20% Off)</p>
                            @foreach (explode("\n", $plan->features) as $feature)
                                <li>
                                    <span class="list-name">{{ $feature }}</span>
                                    <span class="icon check"><i class="ti ti-check"></i></span>
                                </li>
                            @endforeach
                        </ul>
                        @if ($plan->name == 'Standard')
                            <div class="standard_all">
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <!-- end of .container-->
    </section>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-8 text-start">
                        <h5 class="text-secondary">Testimonials</h5>
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                            What people say about Us.
                        </h3>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="pe-7 ps-5 ps-lg-0">
                        <div class="carousel slide carousel-fade position-static" id="testimonialIndicator"
                            data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button class="active" type="button" data-bs-target="#testimonialIndicator"
                                    data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                    data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                    data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item position-relative active">
                                    <div class="card shadow" style="border-radius: 10px">
                                        <div class="position-absolute start-0 top-0 translate-middle">
                                            <img class="rounded-circle fit-cover"
                                                src="{{ asset('founder/home/assets/img/testimonial/author.png') }}"
                                                height="65" width="65" alt="" />
                                        </div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">
                                                &quot;On the Windows talking painted pasture yet its
                                                express parties use. Sure last upon he same as knew
                                                next. Of believed or diverted no.&quot;
                                            </p>
                                            <h5 class="text-secondary">Mike taylor</h5>
                                            <p class="fw-medium fs--1 mb-0">Lahore, Pakistan</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                        style="
                          border-radius: 10px;
                          transform: translate(25px, 25px);
                        ">
                                    </div>
                                </div>
                                <div class="carousel-item position-relative">
                                    <div class="card shadow" style="border-radius: 10px">
                                        <div class="position-absolute start-0 top-0 translate-middle">
                                            <img class="rounded-circle fit-cover"
                                                src="{{ asset('founder/home/assets/img/testimonial/author2.png') }}"
                                                height="65" width="65" alt="" />
                                        </div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">
                                                &quot;Jadoo is recognized as one of the finest
                                                travel agency in the world. When it came to planning
                                                a trip, I found them to be dependable.&quot;
                                            </p>
                                            <h5 class="text-secondary">Thomas Wagon</h5>
                                            <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                        style="
                          border-radius: 10px;
                          transform: translate(25px, 25px);
                        ">
                                    </div>
                                </div>
                                <div class="carousel-item position-relative">
                                    <div class="card shadow" style="border-radius: 10px">
                                        <div class="position-absolute start-0 top-0 translate-middle">
                                            <img class="rounded-circle fit-cover"
                                                src="{{ asset('founder/home/assets/img/testimonial/author3.png') }}"
                                                height="65" width="65" alt="" />
                                        </div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">
                                                &quot;On the Windows talking painted pasture yet its
                                                express parties use. Sure last upon he same as knew
                                                next. Of believed or diverted no.&quot;
                                            </p>
                                            <h5 class="text-secondary">Kelly Willium</h5>
                                            <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                        style="
                          border-radius: 10px;
                          transform: translate(25px, 25px);
                        ">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                                style="height: 60px; width: 20px">
                                <button class="carousel-control-prev position-static" type="button"
                                    data-bs-target="#testimonialIndicator" data-bs-slide="prev">
                                    <img src="{{ asset('founder/home/assets/img/icons/up.svg') }}" width="16"
                                        alt="icon" />
                                </button>
                                <button class="carousel-control-next position-static" type="button"
                                    data-bs-target="#testimonialIndicator" data-bs-slide="next">
                                    <img src="{{ asset('founder/home/assets/img/icons/down.svg') }}" width="16"
                                        alt="icon" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
        <div class="container">
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="{{ asset('founder/home/assets/img/partner/1.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="{{ asset('founder/home/assets/img/partner/2.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="{{ asset('founder/home/assets/img/partner/3.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="{{ asset('founder/home/assets/img/partner/4.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="{{ asset('founder/home/assets/img/partner/5.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-6">
        <div class="container">
            <div class="py-8 px-5 position-relative text-center"
                style="
              background-color: rgba(223, 215, 249, 0.199);
              border-radius: 129px 20px 20px 20px;
            ">
                <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3">
                    <img src="{{ asset('founder/home/assets/img/cta/send.png') }}" style="max-width: 70px"
                        alt="send icon" />
                </div>
                <div class="position-absolute end-0 top-0 z-index--1">
                    <img src="{{ asset('founder/home/assets/img/cta/shape-bg2.png') }}" width="264"
                        alt="cta shape" />
                </div>
                <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block">
                    <img src="{{ asset('founder/home/assets/img/cta/shape-bg1.png') }}" style="max-width: 340px"
                        alt="cta shape" />
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="text-secondary lh-1-7 mb-7">
                            Subscribe to get information, latest news and other
                            interesting offers about Cobham
                        </h2>
                        <form class="row g-3 align-items-center w-lg-75 mx-auto">
                            <div class="col-sm">
                                <div class="input-group-icon">
                                    <input class="form-control form-little-squirrel-control" type="email"
                                        placeholder="Enter email " aria-label="email" /><img class="input-box-icon"
                                        src="{{ asset('founder/home/assets/img/cta/mail.svg') }}" width="17"
                                        alt="mail" />
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <button class="btn btn-danger orange-gradient-btn fs--1">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
@endsection()
