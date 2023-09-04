<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ auth()->user()->usertype }} Panel</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets//vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets//vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets//vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets//vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets//vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets//vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets//css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/short.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdi@5.5.55/css/materialdesignicons.min.css">

    <style>
        .btn-green {
            background-color: green padding: 8px 16px;
        }

        .btn-green:hover {
            background-color: darkgreen;
        }

        .btn-green:hover .btn-padding {
            background-color: darkgreen;
        }

        .popup {
            display: none;
        }

        .popup-content {}

        .mdi-clock {
            color: yellow;
        }

        .mdi-chef-hat {
            color: brown;
        }

        .mdi-view-list {
            color: #8F5FE8;
        }

        .mdi-calendar-clock {
            color: orange;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="/admin/dashboard"
                    style="color:white;text-decoration:none;">{{ auth()->user()->usertype }} Panel</a>

                <a class="sidebar-brand brand-logo-mini" href="/admin/dashboard">A</a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle"
                                    src="{{ asset('assets/images/admin/' . (auth()->user()->profile_photo_path ?: 'default.png')) }}"
                                    alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"></h5>
                                <span><b>{{ auth()->user()->usertype }}</b></span><br>
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                @php  $plantype = Auth::user()->Plan; @endphp
                @if ($plantype === 'Premium' || Auth::user()->usertype === 'founder')
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/dashboard">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/food-menu">
                            <span class="menu-icon">
                                <i class="mdi mdi-food"></i>
                            </span>
                            <span class="menu-title">Food Menu</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/chefs">
                            <span class="menu-icon">
                                <i class="mdi mdi-chef-hat"></i>
                            </span>
                            <span class="menu-title">Chefs</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/reservation">
                            <span class="menu-icon">
                                <i class="mdi mdi-calendar-check"></i>
                            </span>
                            <span class="menu-title">Reservation</span>
                        </a>
                    </li>


                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/categories">
                            <span class="menu-icon">
                                <i class="mdi mdi-view-list"></i>
                            </span>
                            <span class="menu-title">Categories</span>
                        </a>
                    </li>

                    <li class="nav-item menu-items">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-icon">
                                <i class="mdi mdi-settings"></i>
                            </span>
                            <span class="menu-title">Customize Template</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic2">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/home/'. Auth::user()->restaurant)}}">Home</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/about/'. Auth::user()->restaurant)}}">About</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/contact/'. Auth::user()->restaurant)}}">Contact</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/footer/'. Auth::user()->restaurant)}}">Footer</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/sessions">
                            <span class="menu-icon">
                                <i class="mdi mdi-clock"></i>
                            </span>
                            <span class="menu-title">Sessions</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/qrcode">
                            <span class="menu-icon">
                                <i class="mdi mdi-qrcode-scan"></i>
                            </span>
                            <span class="menu-title">QR Code</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/waitress">
                            <span class="menu-icon">
                                <i class="mdi mdi-eye-outline"></i>
                            </span>
                            <span class="menu-title">Attention to a Client</span>
                        </a>
                    </li>
                @elseif ($plantype === 'Standard' || Auth::user()->usertype === 'founder')
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/dashboard">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/food-menu">
                        <span class="menu-icon">
                            <i class="mdi mdi-food"></i>
                        </span>
                        <span class="menu-title">Food Menu</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/chefs">
                        <span class="menu-icon">
                            <i class="mdi mdi-chef-hat"></i>
                        </span>
                        <span class="menu-title">Chefs</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/reservation">
                        <span class="menu-icon">
                            <i class="mdi mdi-calendar-check"></i>
                        </span>
                        <span class="menu-title">Reservation</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/categories">
                        <span class="menu-icon">
                            <i class="mdi mdi-view-list"></i>
                        </span>
                        <span class="menu-title">Categories</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings"></i>
                        </span>
                        <span class="menu-title">Customize Template</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/home/'. Auth::user()->restaurant)}}">Home</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/about/'. Auth::user()->restaurant)}}">About</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/contact/'. Auth::user()->restaurant)}}">Contact</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ asset('/template/footer/'. Auth::user()->restaurant)}}">Footer</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/admin/qrcode">
                        <span class="menu-icon">
                            <i class="mdi mdi-qrcode-scan"></i>
                        </span>
                        <span class="menu-title">QR Code</span>
                    </a>
                </li>
                @elseif ($plantype === 'Basic' || Auth::user()->usertype === 'founder')
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/dashboard">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/food-menu">
                            <span class="menu-icon">
                                <i class="mdi mdi-food"></i>
                            </span>
                            <span class="menu-title">Food Menu</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/chefs">
                            <span class="menu-icon">
                                <i class="mdi mdi-chef-hat"></i>
                            </span>
                            <span class="menu-title">Chefs</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/admin/dashboard">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="{{ asset('admin/assets//images/logo-mini.svg') }}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form id="search-form" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search"
                                action="/search" method="GET">
                                <input type="text" class="form-control" name="search_term"
                                    placeholder="Search products">
                                <button type="submit" class="btn btn-success btn-green">
                                    <span class="btn-padding">Search</span>
                                </button>
                            </form>
                        </li>
                    </ul>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle"
                                        src="{{ asset('assets/images/admin/' . (auth()->user()->profile_photo_path ?: 'default.png')) }}"
                                        alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">{{ auth()->user()->name }}</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="/profile">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-account text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Profile</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item preview-item" type="submit">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-logout text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">Log out</p>
                                        </div>
                                    </button>
                                </form>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('container')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Designed &
                            Developed By Mohamed Doukkani 2023</span>

                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="{{ asset('/owner/'. Auth::user()->restaurant)}}"
                                target="_blank">Go to Client Section</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets//vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets//vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets//vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets//vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/assets//vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets//vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/assets//js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets//js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets//js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets//js/misc.js') }}"></script>
    <script src="{{ asset('admin/assets//js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets//js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin/assets//js/dashboard.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- End custom js for this page -->
</body>

</html>
