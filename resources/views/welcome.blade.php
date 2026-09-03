<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webshop</title>

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

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f6f6f7;
            color: #18181b;
        }


        /* =====================================
           NAVBAR
        ===================================== */

        .top-navbar {

            background: #111214;

            min-height: 120px;

            padding: 14px 45px;

            box-shadow:
                0 5px 30px rgba(0,0,0,.17);
        }


        .navbar-brand img {

            max-height: 90px;

            width: auto;
        }


        .top-navbar .nav-link {

            color: #b8b8b8 !important;

            font-size: 22px;

            font-weight: 600;

            padding: 12px 16px !important;

            transition: .25s;
        }


        .top-navbar .nav-link:hover {

            color: white !important;
        }


        .top-navbar .nav-link i {

            color: #c8a55b;

            margin-right: 7px;
        }


        .navbar-toggler {

            border-color:
                rgba(255,255,255,.25);
        }


        .navbar-toggler-icon {

            filter: invert(1);
        }



        /* DROPDOWN */

        .dropdown-menu {

            border: none;

            border-radius: 14px;

            padding: 10px;

            margin-top: 10px;

            box-shadow:
                0 15px 40px rgba(0,0,0,.16);
        }


        .dropdown-item {

            border-radius: 8px;

            padding: 10px 14px;

            font-size: 20px;

            font-weight: 500;

            transition: .2s;
        }


        .dropdown-item:hover {

            background: #f4f1eb;

            color: #977332;
        }



        /* =====================================
           HERO
        ===================================== */

        .hero-section {

            margin-top: 45px;

            min-height: 390px;

            border-radius: 30px;

            padding: 65px 60px;

            display: flex;

            align-items: center;

            position: relative;

            overflow: hidden;

            background:

                linear-gradient(
                    135deg,
                    #101112 0%,
                    #1d1e21 100%
                );

            box-shadow:
                0 25px 70px rgba(0,0,0,.18);
        }


        .hero-section::before {

            content: "";

            position: absolute;

            width: 450px;
            height: 450px;

            right: -130px;
            top: -180px;

            border-radius: 50%;

            background:
                rgba(200,165,91,.14);
        }


        .hero-section::after {

            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            right: 120px;
            bottom: -190px;

            border-radius: 50%;

            background:
                rgba(200,165,91,.07);
        }


        .hero-content {

            max-width: 720px;

            position: relative;

            z-index: 2;
        }


        .hero-label {

            display: inline-block;

            color: #c8a55b;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 4px;

            margin-bottom: 17px;
        }


        .hero-title {

            font-family:
                'Playfair Display',
                serif;

            color: white;

            font-size: 58px;

            line-height: 1.05;

            font-weight: 700;

            margin-bottom: 20px;
        }


        .hero-title span {

            color: #c8a55b;
        }


        .hero-subtitle {

            color: #999;

            max-width: 600px;

            font-size: 15px;

            line-height: 1.8;

            margin-bottom: 28px;
        }


        .shop-button {

            display: inline-flex;

            align-items: center;

            gap: 16px;

            padding: 15px 24px;

            border-radius: 11px;

            background:

                linear-gradient(
                    135deg,
                    #ae8741,
                    #d4b56f
                );

            color: #111 !important;

            text-decoration: none !important;

            font-size: 12px;

            font-weight: 700;

            transition: .25s;
        }


        .shop-button:hover {

            transform: translateY(-2px);

            box-shadow:
                0 10px 30px rgba(190,151,76,.25);
        }



        /* =====================================
           PRODUCTS HEADER
        ===================================== */

        .products-section {

            padding:
                75px 0 80px;
        }


        .section-heading {

            display: flex;

            justify-content: space-between;

            align-items: flex-end;

            margin-bottom: 32px;
        }


        .section-label {

            color: #b89146;

            letter-spacing: 4px;

            font-size: 9px;

            font-weight: 700;
        }


        .section-heading h2 {

            font-family:
                'Playfair Display',
                serif;

            font-size: 36px;

            font-weight: 700;

            margin:
                7px 0 0;
        }


        .section-heading h2 span {

            color: #b89146;
        }


        .product-total {

            background: #17181a;

            color: #c8a55b;

            padding: 9px 16px;

            border-radius: 50px;

            font-size: 11px;

            font-weight: 700;
        }



        /* =====================================
           PRODUCT CARD
        ===================================== */

        .product-card {

            height: 100%;

            background: white;

            border-radius: 22px;

            overflow: hidden;

            border:
                1px solid #e8e8e8;

            box-shadow:
                0 12px 35px rgba(0,0,0,.055);

            transition:
                transform .3s ease,
                box-shadow .3s ease,
                border-color .3s ease;
        }


        .product-card:hover {

            transform: translateY(-7px);

            border-color:
                rgba(184,145,70,.4);

            box-shadow:
                0 25px 55px rgba(0,0,0,.11);
        }



        /* IMAGE */

        .product-image-box {

            height: 300px;

            padding: 30px;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;

            position: relative;

            background:

                radial-gradient(
                    circle at center,
                    #ffffff,
                    #f3f3f3
                );
        }


        .product-image-box::after {

            content: "";

            position: absolute;

            left: 25px;
            right: 25px;
            bottom: 0;

            height: 1px;

            background: #eeeeee;
        }


        .product-image-box img {

            width: 100%;

            height: 100%;

            object-fit: contain;

            transition:
                transform .35s ease;
        }


        .product-card:hover
        .product-image-box img {

            transform: scale(1.055);
        }



        /* PRODUCT BODY */

        .product-body {

            padding: 27px;
        }


        .product-category {

            color: #b89146;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 2px;

            margin-bottom: 8px;
        }


        .product-name {

            font-family:
                'Playfair Display',
                serif;

            color: #181818;

            font-size: 22px;

            font-weight: 700;

            min-height: 54px;

            margin-bottom: 14px;
        }



        /* STARS */

        .ratings {

            color: #c8a55b;

            font-size: 12px;

            margin-bottom: 23px;

            letter-spacing: 2px;
        }



        /* ACTION */

        .product-footer {

            border-top:
                1px solid #eeeeee;

            padding-top: 20px;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .view-btn {

            color: #977332 !important;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: .5px;

            text-transform: uppercase;

            text-decoration:
                none !important;
        }


        .view-btn i {

            margin-left: 8px;

            transition:
                transform .2s;
        }


        .view-btn:hover i {

            transform:
                translateX(5px);
        }


        .product-number {

            color: #bbb;

            font-size: 10px;
        }



        /* =====================================
           EMPTY PRODUCTS
        ===================================== */

        .empty-products {

            background: white;

            border-radius: 22px;

            border:
                1px solid #eee;

            padding:
                80px 30px;

            text-align: center;
        }


        .empty-products i {

            font-size: 45px;

            color: #c8a55b;

            margin-bottom: 20px;
        }


        .empty-products h3 {

            font-family:
                'Playfair Display',
                serif;

            font-weight: 700;
        }


        .empty-products p {

            color: #999;

            font-size: 13px;
        }



        /* =====================================
           FOOTER
        ===================================== */

        .footer-box {

            background: #111214;

            padding:
                36px 20px;

            text-align: center;

            color: #777;
        }


        .footer-logo {

            font-family:
                'Playfair Display',
                serif;

            color: white;

            font-size: 40px;

            font-weight: 700;

            margin-bottom: 8px;
        }


        .footer-logo span {

            color: #c8a55b;
        }


        .footer-box p {

            margin: 0;

            font-size: 20px;
        }



        /* =====================================
           MOBILE
        ===================================== */

        @media(max-width: 767px) {

            .top-navbar {

                padding:
                    14px 20px;
            }


            .navbar-brand img {

                max-width:
                    150px;
            }


            .hero-section {

                margin-top:
                    25px;

                padding:
                    45px 28px;

                min-height:
                    330px;
            }


            .hero-title {

                font-size:
                    41px;
            }


            .hero-subtitle {

                font-size:
                    14px;
            }


            .products-section {

                padding-top:
                    50px;
            }


            .section-heading {

                align-items:
                    flex-start;

                flex-direction:
                    column;

                gap:
                    15px;
            }


            .section-heading h2 {

                font-size:
                    31px;
            }


            .product-image-box {

                height:
                    250px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================
     NAVIGATION
===================================== -->

<nav class="navbar navbar-expand-md top-navbar">

    <a href="{{ url('/') }}" class="navbar-brand">

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
    >

        <span class="navbar-toggler-icon"></span>

    </button>


    <div
        class="collapse navbar-collapse"
        id="navbarSupportedContent"
    >


        <!-- LEFT -->

        <ul class="navbar-nav mr-auto">


            <li class="nav-item dropdown">

                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                >

                    <i class="fa-solid fa-bag-shopping"></i>

                    Products

                </a>


                <div class="dropdown-menu">

                    @foreach($data as $row)

                        <a
                            href="{{ url('/show_details/'.$row->id) }}"
                            class="dropdown-item"
                        >

                            {{ $row->pro_name_EN }}

                        </a>

                    @endforeach

                </div>

            </li>



            @auth

                @if(auth()->user()->isAdmin())

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ url('/admin') }}"
                        >

                            <i class="fa-solid fa-gear"></i>

                            Admin Panel

                        </a>

                    </li>

                @endif

            @endauth


        </ul>



        <!-- RIGHT -->

        <ul class="navbar-nav ml-auto">


            @guest

                @if(Route::has('login'))

                    <li class="nav-item">

                        <a
                            class="nav-link"
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
                        class="nav-link dropdown-toggle"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                    >

                        <i class="fa-regular fa-user"></i>

                        {{ Auth::user()->name }}

                    </a>


                    <div class="dropdown-menu dropdown-menu-right">

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

                            <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>

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



<div class="container">


    <!-- =====================================
         HERO
    ===================================== -->

    <section class="hero-section">

        <div class="hero-content">

            <span class="hero-label">

                PREMIUM COLLECTION

            </span>


            <h1 class="hero-title">

                Discover products
                made for <span>you.</span>

            </h1>


            <p class="hero-subtitle">

                Explore our carefully selected collection
                and discover quality products through a
                simple and refined shopping experience.

            </p>


            <a
                href="#products"
                class="shop-button"
            >

                Explore Products

                <i class="fa-solid fa-arrow-down"></i>

            </a>

        </div>

    </section>



    <!-- =====================================
         PRODUCTS
    ===================================== -->

    <section
        class="products-section"
        id="products"
    >


        <div class="section-heading">

            <div>

                <span class="section-label">

                    OUR COLLECTION

                </span>


                <h2>

                    Featured
                    <span>Products</span>

                </h2>

            </div>


            <div class="product-total">

                {{ count($data) }} Products

            </div>

        </div>



        <div class="row">


            @forelse($data as $row)


                <div class="col-lg-4 col-md-6 mb-4">


                    <div class="product-card">


                        <!-- IMAGE -->

                        <div class="product-image-box">

                            <a
                                href="{{ url('/show_details/'.$row->id) }}"
                            >

                                <img
                                    src="{{ url('/w/show/'.$row->id) }}"
                                    alt="{{ $row->pro_name_EN }}"
                                >

                            </a>

                        </div>



                        <!-- CONTENT -->

                        <div class="product-body">


                            <div class="product-category">

                                PREMIUM PRODUCT

                            </div>


                            <div class="product-name">

                                {{ $row->pro_name_EN }}

                            </div>



                            <div class="ratings">

                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>

                            </div>



                            <div class="product-footer">


                                <a
                                    href="{{ url('/show_details/'.$row->id) }}"
                                    class="view-btn"
                                >

                                    View Details

                                    <i class="fa-solid fa-arrow-right"></i>

                                </a>


                                <span class="product-number">

                                    #{{ $row->id }}

                                </span>


                            </div>

                        </div>

                    </div>

                </div>


            @empty


                <div class="col-12">

                    <div class="empty-products">

                        <i class="fa-solid fa-box-open"></i>

                        <h3>
                            No Products Available
                        </h3>

                        <p>
                            New products will appear here.
                        </p>

                    </div>

                </div>


            @endforelse


        </div>

    </section>

</div>



<!-- =====================================
     FOOTER
===================================== -->

<footer class="footer-box">

    <div class="footer-logo">

        Web<span>shop</span>

    </div>

    <p>

        © {{ date('Y') }} Webshop.
        All rights reserved.

    </p>

</footer>



<!-- JS -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>