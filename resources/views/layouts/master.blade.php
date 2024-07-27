<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ 'assets/images/favicon.png' }}" type="image/x-icon">

    <title>
        Fazkiya ID
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ 'assets/css/bootstrap.css' }}" />

    <!-- Custom styles for this template -->
    <link href="{{ 'assets/css/style.css' }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ 'assets/css/responsive.css' }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                        Fazkiya ID
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Products</a>
                        </li>
                        <li class="nav-item {{ Request::is('why-us') ? 'active' : '' }}">
                            <a class="nav-link" href="/why-us">Why Us</a>
                        </li>
                        <li class="nav-item {{ Request::is('testimonials') ? 'active' : '' }}">
                            <a class="nav-link" href="/testimonials">Testimonial</a>
                        </li>
                        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>

                    <div class="user_option">
                        <a href="/admin/login">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Login
                            </span>
                        </a>
                        {{-- <a href="">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </a>
                        <form class="form-inline ">
                            <button class="btn nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form> --}}
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header section -->

    </div>
    <!-- end hero area -->

    @yield('content')


    <!-- footer section -->
    <footer class=" footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a class="text-danger" href="/">fazkiya.id </a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- end info section -->


    <script src="{{ 'assets/js/jquery-3.4.1.min.js' }}"></script>
    <script src="{{ 'assets/js/bootstrap.js' }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ 'assets/js/custom.js' }}"></script>

</body>

</html>
