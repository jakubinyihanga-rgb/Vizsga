<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Webshop')</title>

    <link rel="icon" href="{{ asset('images/Logo.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
          rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f5f5f7;
            color: #18181b;
        }


        /* ===========================
           NAVBAR
        =========================== */

        .top-navbar {

            background: #111214;

            min-height: 88px;

            padding: 14px 45px;

            box-shadow:
                0 5px 30px rgba(0,0,0,.16);

            position: relative;

            z-index: 100;
        }


        .navbar-brand {

            display: flex;

            align-items: center;
        }


        .navbar-brand img {

            height: 90px;
            width: auto;
            object-fit: contain;
        }


        .top-navbar .nav-link {

            color: #aaa !important;

            font-size: 13px;

            font-weight: 600;

            padding: 11px 16px !important;

            transition: .25s;
        }


        .top-navbar .nav-link i {

            color: #c8a55b;

            margin-right: 7px;
        }


        .top-navbar .nav-link:hover {

            color: #fff !important;
        }


        /* ===========================
           LOGIN BUTTON
        =========================== */

        .login-nav-link {

            border:
                1px solid rgba(200,165,91,.45);

            border-radius: 9px;

            padding:
                10px 18px !important;

            color:
                #c8a55b !important;
        }


        .login-nav-link:hover {

            background:
                #c8a55b;

            color:
                #111 !important;
        }


        /* ===========================
           DROPDOWN
        =========================== */

        .dropdown-menu {

            border: none;

            border-radius: 13px;

            padding: 9px;

            margin-top: 10px;

            box-shadow:
                0 15px 40px rgba(0,0,0,.16);
        }


        .dropdown-item {

            border-radius: 8px;

            padding: 10px 14px;

            color: #444;

            font-size: 13px;

            font-weight: 500;

            transition: .2s;
        }


        .dropdown-item i {

            color: #b89146;

            width: 20px;
        }


        .dropdown-item:hover {

            background: #f6f3ed;

            color: #946f2e;
        }


        /* ===========================
           CONTENT
        =========================== */

        .page-content {

            min-height:
                calc(100vh - 174px);

            background:

                radial-gradient(
                    circle at 85% 10%,
                    rgba(200,165,91,.09),
                    transparent 30%
                ),

                #f5f5f7;
        }


        /* ===========================
           FOOTER
        =========================== */

        .footer-box {

            min-height: 86px;

            background: #111214;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            text-align: center;

            padding: 20px;

            color: #777;
        }


        .footer-brand {

            font-family:
                'Playfair Display',
                serif;

            color: #fff;

            font-size: 19px;

            font-weight: 700;

            margin-bottom: 5px;
        }


        .footer-brand span {

            color: #c8a55b;
        }


        .footer-box p {

            margin: 0;

            font-size: 10px;

            color: #777;
        }


        .footer-box a {

            color: #c8a55b;

            text-decoration: none;
        }


        /* ===========================
           MOBILE
        =========================== */

        @media(max-width: 767px) {

            .top-navbar {

                padding: 13px 20px;
            }


            .navbar-brand img {

                max-width: 150px;

                max-height: 50px;
            }


            .navbar-toggler {

                border:
                    1px solid rgba(255,255,255,.25);
            }


            .navbar-toggler-icon {

                filter: invert(1);
            }


            .navbar-collapse {

                padding-top: 15px;
            }


            .top-navbar .nav-link {

                padding:
                    10px 5px !important;
            }


            .login-nav-link {

                border: none;

                padding:
                    10px 5px !important;
            }

        }

    </style>

    @yield('styles')

</head>


<body>


<!-- ===========================
     NAVBAR
=========================== -->

<nav class="navbar navbar-expand-md top-navbar">

    <a
        href="{{ url('/') }}"
        class="navbar-brand"
    >

        <img
            src="{{ asset('images/logo.PNG') }}"
            alt="Webshop"
        >

    </a>


    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >

        <span class="navbar-toggler-icon"></span>

    </button>


    <div
        class="collapse navbar-collapse"
        id="navbarSupportedContent"
    >


        <ul class="navbar-nav ml-auto">


            @guest


                @if(Route::has('login'))

                    <li class="nav-item">

                        <a
                            class="nav-link login-nav-link"
                            href="{{ route('login') }}"
                        >

                            <i class="fa-regular fa-user"></i>

                            Login

                        </a>

                    </li>

                @endif


            @else


                <li class="nav-item dropdown">

                    <a
                        id="navbarDropdown"
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                    >

                        <i class="fa-regular fa-user"></i>

                        {{ Auth::user()->name }}

                    </a>


                    <div class="dropdown-menu dropdown-menu-right">

                        <a
                            href="{{ url('/') }}"
                            class="dropdown-item"
                        >

                            <i class="fa-solid fa-house"></i>

                            Webshop

                        </a>


                        @if(Auth::user()->isAdmin())

                            <a
                                href="{{ url('/admin') }}"
                                class="dropdown-item"
                            >

                                <i class="fa-solid fa-gear"></i>

                                Admin Panel

                            </a>

                        @endif


                        <div class="dropdown-divider"></div>


                        <a
                            class="dropdown-item"
                            href="{{ route('logout') }}"
                            onclick="
                                event.preventDefault();
                                document
                                    .getElementById('logout-form')
                                    .submit();
                            "
                        >

                            <i class="fa-solid fa-arrow-right-from-bracket"></i>

                            Logout

                        </a>


                        <form
                            id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-none"
                        >

                            @csrf

                        </form>

                    </div>

                </li>


            @endguest


        </ul>

    </div>

</nav>



<!-- ===========================
     PAGE CONTENT
=========================== -->

<main class="page-content">

    @yield('content')

</main>



<!-- ===========================
     FOOTER
=========================== -->

<footer class="footer-box">

    <div class="footer-brand">

        Web<span>shop</span>

    </div>

    <p>

        © {{ date('Y') }} Webshop.
        All rights reserved.

    </p>

</footer>



<!-- ===========================
     JS
=========================== -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

@yield('scripts')


</body>
</html>