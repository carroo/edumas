<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landing Page - Edumas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="{{ asset('admin/assets/img/edumas.png') }}" rel="icon" />
    <link href="{{ asset('admin/assets/img/edumas.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- assets/vendor CSS Files -->
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
    @stack('css')
    <style>
        .search-input {
            border-radius: 50px;
            height: 100%;
        }

        .search-icon {
            border-radius: 0 50px 50px 0;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            z-index: 1000;
            list-style: none;
            padding: 0.5rem 0;
        }

        .dropdown-menu.show {
            display: block;
        }
    </style>
</head>

<body>
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('landingpage.layouts.header')

        <main id="main">

            @yield('content')

        </main>
        @include('landingpage.layouts.footer')
    </div>
    <!-- .site-wrap -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script>
        var dropdown = document.querySelector('.nav-item.dropdown');
        var dropdownMenu = document.querySelector('.dropdown-menu');
        var navbarDropdown = document.querySelector('#btn-dropdown');
        console.log(navbarDropdown);

        navbarDropdown.addEventListener('click', function(event) {
            console.log("ASds");
            event.preventDefault();
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function(event) {
            if (!dropdown.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>
    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/owlcarousel/owl.carousel.min.js') }}"></script>


    @stack('script')

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
