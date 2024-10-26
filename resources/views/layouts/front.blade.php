<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/edumall/edumall/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 16:24:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Boost Consultancy & Coaching Hub LTD" />
    <meta name="keywords" content="Boost Consultancy & Coaching Hub LTD,Boost Consultancy,BCCH LTD">
    <!-- Favicon -->
    <title>@yield('title') | BCCH Institution</title>

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/boost.png') }}" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/edumall-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/perfect-scrollbar.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/plugins/jquery.powertip.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/select2.min.css') }}"> --}}

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css?v=2') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/vendor/edumall-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <main class="main-wrapper">

        <!-- Header start -->
        <div class="header-section header-sticky">

            <!-- Header Top Start -->
            <div class="header-top d-none d-sm-block">
                <div class="container">

                    <!-- Header Top Bar Wrapper Start -->
                    <div class="header-top-bar-wrap d-sm-flex justify-content-between">

                        <div class="header-top-bar-wrap__info">
                            <ul class="header-top-bar-wrap__info-list">
                                <li><a href="tel:+250 783 590 293"><i class="fas fa-phone"></i> <span
                                            class="info-text">+250 783 590 293</span></a></li>
                                <li><a href="info@bcchacademy.com"><i class="far fa-envelope"></i> <span
                                            class="info-text"><span class="__cf_email__"><span
                                                    class="__cf_email__"><span class="__cf_email__"><span
                                                            class="__cf_email__"
                                                            data-cfemail="0c65626a634c6e6f6f646d6f6d68696175226f6361">info@bcchinstitution.com</span></span></span></span></span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="header-top-bar-wrap__info d-sm-flex">
                            <ul class="header-top-bar-wrap__info-list d-none d-lg-flex">
                                <li><button data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button></li>
                                <li><a href="{{ route('trainings') }}">Register</a></li>
                            </ul>
                            <ul class="header-top-bar-wrap__info-social">
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- Header Top Bar Wrapper End -->

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">
                    <!-- Header Main Wrapper Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a class="header-logo__logo" href="{{ route('index') }}"><img
                                    src="{{ asset('frontend/academy.png') }}" width="296" height="64"
                                    alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->
                        <!-- Header Inner Start -->
                        <div class="header-inner">


                            <!-- Header Navigation Start -->
                            <div class="header-navigation d-none d-xl-block">
                                <nav class="menu-primary">
                                    <ul class="menu-primary__container">
                                        <li><a href="{{ route('index') }}"
                                                class="{{ Request::routeIs('index') ? 'active' : '' }}"><span>Home</span></a>
                                        </li>
                                        <li>
                                            <a class="{{ Request::routeIs(['our_stoty', 'vision_mission', 'governance_structure', 'leadership', 'offices', 'policy_guidelines']) ? 'active' : '' }}"
                                                href="#"><span>About Us</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('our_stoty') }}"><span>Our Story</span></a></li>
                                                <li><a href="{{ route('vision_mission') }}"><span>Vision &
                                                            Mission</span></a></li>
                                                <li><a href="{{ route('governance_structure') }}"><span>Governance
                                                            Structure</span></a></li>
                                                <li><a href="{{ route('leadership') }}"><span>Leadership</span></a>
                                                </li>
                                                <li><a href="{{ route('offices') }}"><span>Offices</span></a></li>
                                                <li><a href="{{ route('policy_guidelines') }}"><span>Policies &
                                                            Guidelines</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="{{ Request::routeIs(['programs', 'awards','news']) ? 'active' : '' }}"
                                                href="#"><span>BCCH Academy</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('programs') }}"><span>Programs</span></a>
                                                </li>
                                                <li><a href="{{ route('awards') }}"><span>Awards</span></a></li>


                                            </ul>
                                        </li>
                                        <li>
                                            <a class="{{ Request::routeIs(['careers', 'testimonies']) ? 'active' : '' }}"
                                                href="#"><span>Consultancy</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('careers') }}"><span>Careers</span></a></li>
                                                <li><a href="{{ route('testimonies') }}"><span>Testimonies</span></a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('accreditations') }}"
                                                class="{{ Request::routeIs('accreditations') ? 'active' : '' }}"><span>Accreditation</span></a>
                                        </li>

                                        <li><a href="#"><span>Journal & Articles</span></a></li>
                                        <li><a href="{{ route('news') }}" class="{{ Request::routeIs('news') ? 'active' : '' }}"><span>Updates</span></a></li>
                                        <li><a href="{{ route('publications') }}" class="{{ Request::routeIs('publications') ? 'active' : '' }}"><span>Gallery</span></a></li>
                                        <li><a href="{{ route('contact') }}"
                                                class="{{ Request::routeIs('contact') ? 'active' : '' }}"><span>Contact
                                                    </span></a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Navigation End -->

                            <!-- Header Mobile Toggle Start -->
                            <div class="header-toggle">
                                <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasMobileMenu">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                                <button class="header-toggle__btn search-open d-flex d-md-none">
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                </button>
                            </div>
                            <!-- Header Mobile Toggle End -->

                        </div>
                        <!-- Header Inner End -->

                    </div>
                    <!-- Header Main Wrapper End -->
                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header End -->



        @yield('body')
        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu"
            style="background-image: url({{ asset('frontend/images/mobile-bg.jpg') }});">
            <div class="offcanvas-header bg-white">
                <div class="offcanvas-logo">
                    <a class="offcanvas-logo__logo" href="#"><img src="{{ asset('frontend/logo.png') }}"
                            alt="Logo"></a>
                </div>
                <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i
                        class="fas fa-times"></i></button>
            </div>

            <div class="offcanvas-body">
                <nav class="canvas-menu">
                    <ul class="offcanvas-menu">

                        <li><a class="active" href="#"><span>BCCH Academy</span></a>

                            <ul class="mega-menu">
                                <li>
                                    <!-- Mega Menu Content Start -->
                                    <div class="mega-menu-content">

                                        <div class="menu-content-list">
                                            @foreach (\App\Models\Category::orderByDesc('id')->get() as $item)
                                                <a href="{{ route('show_school', encrypt($item->id)) }}"
                                                    class="menu-content-list__link">{{ $item->title }}</a>
                                            @endforeach
                                        </div>

                                    </div>
                                    <!-- Mega Menu Content Start -->
                                </li>
                            </ul>

                        </li>
                        <li><a href="#"><span>About Us</span></a></li>
                        <li><a href="#"><span>Partners & Accreditation</span></a></li>
                        <li><a href="#"><span>Contact Us</span></a></li>
                    </ul>
                </nav>
            </div>

            <!-- Header User Button Start -->
            <div class="offcanvas-user d-lg-none">
                <div class="offcanvas-user__button">
                    <button class="offcanvas-user__login btn btn-secondary btn-hover-secondarys"
                        data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
                </div>
                <div class="offcanvas-user__button">
                    <button class="offcanvas-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Sign Up</button>
                </div>
            </div>
            <!-- Header User Button End -->

        </div>
        <!-- Offcanvas End -->
       <!-- Footer Start -->
<div class="footer-section" style="background-color: #2c3e50; color: #ecf0f1; padding: 40px 0;">

<!-- Footer Widget Area Start -->
<div class="footer-widget-area section-padding-01">
    <div class="container">
        <div class="row gy-6">

            <!-- Social Media Section Only -->
            <div class="col-lg-4">
                <div class="footer-widget text-center">
                    <div class="footer-widget__social">
                        <a href="https://twitter.com/" target="_blank" aria-label="Twitter" style="color: #1abc9c;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook" style="color: #3498db;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" aria-label="LinkedIn" style="color: #2980b9;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank" aria-label="YouTube" style="color: #e74c3c;">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram" style="color: #e84393;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.whatsapp.com/" target="_blank" aria-label="WhatsApp" style="color: #25d366;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Us Form -->
            <div class="col-lg-4">
                <div class="footer-widget">
                    <h4 class="footer-widget__title" style="color: #ecf0f1;">Contact Us</h4>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required style="background-color: #34495e; border: none; color: #ecf0f1; padding: 10px;">
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required style="background-color: #34495e; border: none; color: #ecf0f1; padding: 10px;">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="3" placeholder="Your Message" required style="background-color: #34495e; border: none; color: #ecf0f1; padding: 10px;"></textarea>
                        </div>
                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white; padding: 10px 20px; border: none; cursor: pointer;">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Map Section -->
            <div class="col-lg-4">
                <div class="footer-widget">
                    <h4 class="footer-widget__title" style="color: #ecf0f1;">Our Location</h4>
                    <div class="footer-map mt-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26404.142547301544!2d30.06178523102762!3d-1.9492131284712972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7a0f445ab9f%3A0x5cb38ab495fa4ed3!2sKigali!5e0!3m2!1sen!2srw!4v1601407072862!5m2!1sen!2srw"
                            width="100%"
                            height="400"  <!-- Increased height -->
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer Widget Area End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom text-center mt-4" style="color: #ecf0f1; padding-top: 20px; border-top: 1px solid #7f8c8d;">
    <p>Designed by NDIKUMANA Eric | Email: <a href="mailto:ndikumanaeric001@gmail.com" style="color: #1abc9c;">ndikumanaeric001@gmail.com</a> | Contact: +250 78 218 5745</p>
</div>
<!-- Footer Bottom End -->

</div>
<!-- Footer End -->


        <!--Back To Start-->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fas fa-arrow-up"></i>
            <i class="arrow-bottom fas fa-arrow-up"></i>
        </button>
        <!--Back To End-->


    </main>

    <!-- Log In Modal Start -->
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-dialog-centered modal-login">

            <!-- Modal Wrapper Start -->
            <div class="modal-wrapper">
                <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

                <!-- Modal Content Start -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <p class="modal-description">Don't have an account yet? <a
                                href="{{ route('trainings') }}">Sign up for free</a></p>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login_auth') }}">
                            @csrf
                            <div class="modal-form">
                                <label class="form-label">Username or email</label>
                                <input type="text" class="form-control" name="email" placeholder="Your email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="modal-form">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="modal-form d-flex justify-content-between flex-wrap gap-2">
                                <div class="form-check">
                                    <input type="checkbox" id="rememberme">
                                    <label for="rememberme">Remember me</label>
                                </div>
                                <div class="text-end">
                                    <a class="modal-form__link" href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="modal-form">
                                <button type="submit" class="btn btn-primary btn-hover-secondary w-100">Log
                                    In</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Modal Content End -->

            </div>
            <!-- Modal Wrapper End -->

        </div>
    </div>
    <!-- Log In Modal End -->





    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('frontend/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/parallax.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.powertip.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.sticky-kit.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/flatpickr.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/plugins/range-slider.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                $(this).find("button[type=submit]").addClass('btn btn-outline-primary btn-load').html(`<span class="d-flex align-items-center">
                                            <span class="spinner-border flex-shrink-0" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                            <span class="flex-grow-1 ms-2">
                                                Loading...
                                            </span>
                                        </span>`).prop("disabled", true);
            });
        });
    </script>
    @yield('js')

</body>

</html>
