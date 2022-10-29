<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
    <title>Yaqeen Welfare Foundation - Fundraising and Charity</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta name="author" content="Yasir Amin">
</head>

<body>
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-box-one">
                    <div class="pre-box-two"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left">
                        <ul>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <a href="javascript:void(0);">C.2Block C OGDC Society Mustafabad Malir Karachi</a>
                            </li>
                            <li>
                                <i class="icofont-ui-call"></i>
                                <a href="tel:+923336838157">(+92) 333 6838157</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right">
                        <ul>
                            <li>
                                <span>Follow Us:</span>
                            </li>
                            <li>
                                <a href="javascript:void(0);" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>

                        {{-- <div class="header-search">
                            <i id="search-btn" class="icofont-search-2"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id="search-box">
                                        <i id="close-btn" class="icofont-close"></i>
                                        <form>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <button type="submit" class="btn">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="{{ asset('assets/img/logo-two.png') }}" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo-one" alt="Logo">
                        <img src="{{ asset('assets/img/logo-two.png') }}" class="logo-two" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('frontend.index') }}" class="nav-link @yield('activeHome')">Home </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.aboutus') }}" class="nav-link @yield('activeAbout')">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);"
                                    class="nav-link dropdown-toggle @yield('activeDClass')">Donations <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('frontend.alldonations') }}"
                                            class="nav-link @yield('activeAllDonation')">Donations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('frontend.donationdetails') }}"
                                            class="nav-link @yield('activeDonationDetail')">Donation Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link dropdown-toggle @yield('activeEClass')">Events <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('frontend.allevents') }}" class="nav-link @yield('activeAllEvents')">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('frontend.eventdetails') }}" class="nav-link @yield('activeEventDetails')">Event Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link dropdown-toggle @yield('activeBClass')">Blog <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('frontend.allblogs') }}" class="nav-link @yield('activeAllBlogs')">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('frontend.blogdetails') }}" class="nav-link @yield('activeBlogDetails')">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.contactus') }}"
                                    class="nav-link @yield('activeContact')">Contact Us</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="donate-btn" href="javascript:void(0);">
                                Donate
                                <i class="icofont-heart-alt"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    {{ $slot }}
    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="logo" href="{{ route('frontend.index') }}">
                                <img src="{{ asset('assets/img/logo-two.png') }}" alt="Logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero, magni est placeat
                                neque, repellat maxime a dolore</p>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank">
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Quick links</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('frontend.aboutus') }}">
                                        <i class="icofont-simple-right"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.allblogs') }}">
                                        <i class="icofont-simple-right"></i>
                                        Our Blogs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.allevents') }}">
                                        <i class="icofont-simple-right"></i>
                                        Our Events
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.alldonations') }}">
                                        <i class="icofont-simple-right"></i>
                                        Donation List
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>24/7 Supoorts</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('frontend.policies') }}">
                                        <i class="icofont-simple-right"></i>
                                        Privacy & Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.termsconditions') }}">
                                        <i class="icofont-simple-right"></i>
                                        Terms & Condtions
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.faq') }}">
                                        <i class="icofont-simple-right"></i>
                                        F A Q
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icofont-simple-right"></i>
                                        Live Chat
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-contact">
                            <h3>Contact info</h3>
                            <div class="contact-inner">
                                <ul>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        <a href="javascript:void(0);">C.2Block C OGDC Society Mustafabad Malir
                                            Karachi</a>
                                    </li>
                                    <li>
                                        <i class="icofont-ui-call"></i>
                                        <a href="tel:+923336838157">(+92) 333 6838157</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <p>Copyright @
                    <script>
                        document.write(new Date().getFullYear())
                    </script>. All rights Reserved By <a href="/">Yaqeen Welfare Foundations</a>.
                </p>
            </div>
        </div>
    </footer>


    <div class="go-top">
        <i class="icofont-arrow-up"></i>
        <i class="icofont-arrow-up"></i>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
