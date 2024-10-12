<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- ICONS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <style>
        /* Add your custom styles here */
        .first-nav {
            background-color: #fff;
            /* Navbar background color */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            /* Optional: Add a shadow effect */
            --bs-navbar-padding-x: 0;
            --bs-navbar-padding-y: 0.5rem;
            --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
            --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
            --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
            --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-padding-y: 0.32rem;
            --bs-navbar-brand-margin-end: 1rem;
            --bs-navbar-brand-font-size: 1.125rem;
            --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-nav-link-padding-x: 0.5rem;
            --bs-navbar-toggler-padding-y: 0.25rem;
            --bs-navbar-toggler-padding-x: 0.75rem;
            --bs-navbar-toggler-font-size: 1.125rem;
            --bs-navbar-toggler-icon-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
            --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
            --bs-navbar-toggler-border-radius: var(--bs-border-radius);
            --bs-navbar-toggler-focus-width: 0.25rem;
            --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            position: relative;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        .navbar-icon {
            font-size: 30px;
            color: black;
            margin: 0 10px;
        }

        .navbar-icon.active {
            color: #405de6;
        }

        .mobile-logo {
            display: none;
        }

        @media (min-width: 992px) {
            .first-nav {
                display: none;
            }
        }

        @media (max-width: 991.98px) {
            .first-nav {
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .navbar {
                display: none;
            }

            body {
                padding: 0;
            }

            .main-padding {
                padding: 40px 0px !important;
            }

            .mobile-logo {
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                width: 100vw;
                z-index: 10000;
                top: 0;
                backdrop-filter: blur(10px);
                background-color: #ffffff69;
            }
        }
    </style>

    <style>
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #4285f4;
            color: #ffffff;
            border-bottom: none;
            text-align: center;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #4285f4;
            border: none;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #317ae2;
        }

        .signup-link {
            text-align: center;
            margin-top: 15px;
            color: #4285f4;
        }

        .shake {
            animation: shake 0.5s;
        }

        @keyframes shake {

            10%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            80% {
                transform: translateX(5px);
            }

            30%,
            50%,
            70% {
                transform: translateX(-5px);
            }

            40%,
            60% {
                transform: translateX(5px);
            }
        }

        body {
            background-color: #F8F9FA;
            /* Custom background color */
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 2rem;
            /* Custom brand color */
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            color: black;
            font-weight: bold;
        }

        .navbar-nav .nav-item:hover .nav-link {
            color: #8a2be2 !important;
        }
    </style>
    <style>
        .counter-btn {
            width: 30px;
            height: 30px;
            font-size: 16px;
            line-height: 30px;
            text-align: center;
        }

        .notification-toast {
            position: fixed;
            bottom: 80px;
            left: 20px;
            right: 20px;
            background: white;
            max-width: 300px;
            display: flex;
            align-items: flex-start;
            padding: 0px 15px;
            box-shadow: 0 5px 20px hsla(0, 0%, 0%, 0.15);
            transform: translateX(calc(-100% - 40px));
            transition: 0.5s ease-in-out;
            z-index: 2000;
            animation: slideInOut 10s ease-in-out infinite;
        }

        @keyframes slideInOut {

            0%,
            45%,
            100% {
                transform: translateX(calc(-100% - 40px));
                opacity: 0;
                visibility: hidden;
            }

            50%,
            95% {
                transform: translateX(0);
                opacity: 1;
                visibility: visible;
            }
        }

        .notification-toast.closed {
            display: none;
        }

        .toast-close-btn {
            font-size: 24px;
            position: absolute;
            top: 10px;
            right: 10px;
            color: black;
        }

        .toast-banner {
            width: 70px;
            height: 70px;
        }

        .toast-detail {
            padding-right: 10px;
        }

        .toast-message {
            margin-bottom: 8px;
        }

        .cart-count {
            position: absolute;
            top: 10px;
            right: 99px;
            border-radius: 20px;
            font-size: 15px;
            background-color: #ffc800;
            padding: 0px 4px;
        }

        .offcanvas-backdrop {
            background-color: transparent !important;
        }

        .offcanvas {
            backdrop-filter: blur(10px);
            background-color: #ffffff69;
            width: 300px !important;
        }

        .background-transparent {
            backdrop-filter: blur(10px);
            background-color: #ffffff69
        }

        .razorpay-payment-button {
            display: none;
        }

        .btn-dark {
            background-color: #8a2be2 !important;

        }

        h1 {
            color: #8a2be2 !important;
        }

        .text-purple {
            color: #8a2be2 !important;

        }

        .bg-purple {
            background-color: #8a2be2 !important;
        }
    </style>
</head>

<body class="bg-white">
    <div id="app">
        {{-- ofcanvas of user --}}

        <div id="app">
            {{-- ofcanvas of user --}}
            @if (Auth::user())
                <div class="offcanvas offcanvas-end p-2"
                    style="z-index: 20000;backdrop-filter: blur(10px);background:none" tabindex="-1"
                    id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">My Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-unstyled">
                            @if (Auth::user()->hasRole('admin'))
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
                            @endif
                        </ul>
                        @if (Auth::user()->hasRole('owner'))
                            <ul class="list-unstyled">
                                <li><a class="dropdown-item" href="{{ route('owner.index') }}">My Pets</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a class="dropdown-item" href="{{ route('owner.create') }}">Add Pet</a></li>
                            </ul>
                        @endif

                        <ul class="list-unstyled">
                            @if (Auth::user())
                                {{-- <li><a class="dropdown-item" href="{{ route('order.index') }}">Orders</a></li> --}}
                            @endif
                        </ul>
                    </div>
                    <div class="offcanvas-footer">
                        <a class="dropdown-item bg-danger text-white p-2" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
                        </form>
                    </div>
                </div>
            @endif

            <nav class="navbar navbar-expand-lg p-0 px-4"
                style="height: 70px;position: fixed; z-index: 1000;width: 100vw;backdrop-filter: blur(10px);background-color: #ffffff69;">
                <a class="navbar-brand p-0 ml-5" href=""><img src="{{ asset('logos/logo4.png') }}"
                        style="width: 110px;overflow: hidden;" alt="" class="mt-2"></a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ml-auto gap-5">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://127.0.0.1:8000/#home"> HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://127.0.0.1:8000#category" role="button"
                                aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000#adopt-love">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"></i> CONTACT US</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">General Inquiry</a>
                                <a class="dropdown-item" href="#">Sales</a>
                                <a class="dropdown-item" href="#">Support</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="ml-auto navbar-nav">
                        @if (Auth::user())
                            <li class="nav-item mr-4">
                                {{-- <a class="nav-link" href="{{ route('cart.index') }}"><i
                                    class="fas fa-shopping-cart"></i><span
                                    class="cart-count">{{ DB::table('cart_items')->where('user_id', Auth::id())->count() }}</span></a> --}}
                            </li>
                            <li>
                                <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight" class="nav-link" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            @else
                                <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}<i
                                        class="fas fa-sign-in-alt"></i></a>
                        @endif
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="first-nav navbar-expand-lg navbar-light p-0"
                style="z-index: 1000;backdrop-filter: blur(10px);background-color: #ffffff69;">
                {{-- <a class="navbar-brand" href="{{ route('home.index') }}"> --}}
                <i class="fas fa-store navbar-icon"></i>
                </a>
                {{-- <a class="navbar-icon" href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart"></i></a>
      <a class="navbar-icon" href="{{ route('order.index') }}"><i class="fas fa-shopping-bag"></i></a> --}}
                @if (Auth::user())
                    <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight" class="navbar-icon" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user"></i>
                    </a>
                @else
                    <a class="navbar-icon" href="{{ route('login') }}"><i class="fas fa-user"></i></a>
                @endif

                </a>
            </nav>
            <div class="mobile-logo">
                <img src="http://127.0.0.1:8000/logos/trendbazaar-high-resolution-logo-transparent.png"
                    style="width: 144px;overflow: hidden;margin-left: 10px;" alt="" class="mt-1">
                <a class="navbar-icon" href="#"><i class="fas fa-search"></i></a>
            </div>
            <main class="pt-5 main-padding">
                @yield('content')
            </main>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{ asset('assets/js/custom-script.js') }}"></script>
        <script src="{{ asset('jquery.js') }}"></script>
        <script>

             // sweetalert
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(function(button) {
                // Add a click event listener to each delete button
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!',
                        customClass: {
                            confirmButton: 'btn btn-danger',
                            cancelButton: 'btn btn-outline-secondary'
                        }
                    }).then((result) => {

                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + button.getAttribute(
                                'data-admin-id')).submit();

                            Swal.fire(
                                'Deleted!',
                                'The record has been deleted.',
                                'success'
                            );
                        }
                    });
                });
            });
        });

            // show image when user select
            $(document).ready(function() {
                $('#imageInput').on('change', function(e) {
                    var files = e.target.files;
                    var imagePreviews = $('#imagePreviews');

                    // Clear existing previews
                    imagePreviews.empty();

                    // Limit to 5 images
                    var maxImages = 4;
                    var numImages = Math.min(files.length, maxImages);

                    for (var i = 0; i < numImages; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var preview = $(
                                '<div class="col-md-2 text-center"><img class="text-center preview-image" src="' +
                                e
                                .target.result +
                                '" width="125" height="125" style="object-fit: contain;max-height: 100%;" alt="Preview Image"></div>'
                            );
                            imagePreviews.append(preview);
                        };
                        reader.readAsDataURL(files[i]);
                    }
                });
            });
        </script>

</body>

</html>
