<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Details</title>

    <link rel="icon" href="{{ asset('images/Logo.png') }}">

    <!-- Bootstrap -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet"
    >


    <style>

        * {
            box-sizing: border-box;
        }


        body {

            margin: 0;

            font-family: 'Inter', sans-serif;

            background: #f5f5f7;

            color: #18181b;
        }



        /* =========================================
           NAVBAR
        ========================================= */

        .main-navbar {

            background: #111214;

            min-height: 90px;

            padding: 15px 45px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            box-shadow:
                0 5px 30px rgba(0,0,0,.15);
        }


        .main-navbar img {

            max-height: 60px;

            width: auto;
        }


        .back-home {

            color: #b9b9b9;

            font-size: 13px;

            font-weight: 600;

            text-decoration: none !important;

            transition: .25s;
        }


        .back-home i {

            margin-right: 8px;

            color: #c8a55b;
        }


        .back-home:hover {

            color: white;
        }



        /* =========================================
           PAGE
        ========================================= */

        .products-page {

            padding: 65px 0 80px;
        }


        .page-heading {

            margin-bottom: 40px;
        }


        .page-label {

            color: #b89146;

            font-size: 10px;

            letter-spacing: 4px;

            font-weight: 700;
        }


        .page-heading h1 {

            font-family:
                'Playfair Display',
                serif;

            font-size: 42px;

            font-weight: 700;

            margin: 8px 0;
        }


        .page-heading h1 span {

            color: #b89146;
        }


        .page-heading p {

            color: #8a8a8a;

            font-size: 14px;
        }



        /* =========================================
           PRODUCT CARD
        ========================================= */

        .product-card {

            background: white;

            border-radius: 26px;

            overflow: hidden;

            margin-bottom: 35px;

            border:
                1px solid #ebebeb;

            box-shadow:
                0 18px 50px rgba(0,0,0,.07);

            transition: .3s ease;
        }


        .product-card:hover {

            transform:
                translateY(-5px);

            box-shadow:
                0 25px 65px rgba(0,0,0,.11);
        }



        /* =========================================
           PRODUCT IMAGE + ZOOM
        ========================================= */

        .product-image {

            min-height: 430px;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 40px;

            background:

                radial-gradient(
                    circle at center,
                    #ffffff 0%,
                    #f6f6f6 100%
                );

            position: relative;

            overflow: hidden;

            cursor: zoom-in;
        }


        .product-image::after {

            content: "";

            position: absolute;

            top: 30px;

            right: 0;

            bottom: 30px;

            width: 1px;

            background: #eeeeee;

            z-index: 3;
        }


        .product-image img {

            width: 100%;

            max-width: 340px;

            max-height: 340px;

            object-fit: contain;

            transition:
                transform .20s ease;

            transform-origin:
                center center;

            cursor: zoom-in;

            user-select: none;

            -webkit-user-drag: none;
        }


        /* ZOOM ACTIVE */

        .product-image.zoomed img {

            transform: scale(2.5);

            cursor: zoom-out;
        }



        /* SMALL ZOOM INDICATOR */

        .zoom-indicator {

            position: absolute;

            bottom: 20px;

            left: 20px;

            z-index: 4;

            background:
                rgba(17,18,20,.88);

            color: #c8a55b;

            padding:
                8px 12px;

            border-radius:
                8px;

            font-size:
                10px;

            font-weight:
                600;

            letter-spacing:
                .5px;

            pointer-events:
                none;

            transition:
                opacity .2s;
        }


        .zoom-indicator i {

            margin-right:
                5px;
        }


        .product-image.zoomed
        .zoom-indicator {

            opacity: 0;
        }



        /* =========================================
           PRODUCT CONTENT
        ========================================= */

        .product-content {

            padding: 55px 50px;

            display: flex;

            flex-direction: column;

            justify-content: center;
        }


        .product-tag {

            display: inline-block;

            width: fit-content;

            background: #151618;

            color: #c8a55b;

            border-radius: 50px;

            padding: 7px 14px;

            font-size: 9px;

            letter-spacing: 2px;

            font-weight: 700;

            margin-bottom: 20px;
        }


        .product-title {

            font-family:
                'Playfair Display',
                serif;

            font-size: 36px;

            line-height: 1.2;

            font-weight: 700;

            color: #191919;

            margin-bottom: 18px;
        }



        /* =========================================
           PRICE
        ========================================= */

        .product-price-wrapper {

            display: flex;

            align-items: baseline;

            gap: 7px;

            margin-bottom: 30px;
        }


        .product-price {

            font-size: 30px;

            font-weight: 700;

            color: #b58c42;
        }


        .currency {

            font-size: 15px;

            color: #999;

            font-weight: 600;
        }



        /* =========================================
           DIVIDER
        ========================================= */

        .product-divider {

            width: 55px;

            height: 3px;

            background:

                linear-gradient(
                    90deg,
                    #9d7733,
                    #ddc17f
                );

            border-radius: 5px;

            margin-bottom: 25px;
        }



        /* =========================================
           DESCRIPTION
        ========================================= */

        .description-title {

            color: #333;

            font-size: 11px;

            letter-spacing: 2px;

            font-weight: 700;

            text-transform: uppercase;

            margin-bottom: 12px;
        }


        .description-text {

            color: #777;

            font-size: 14px;

            line-height: 1.9;

            margin: 0;

            white-space: pre-line;
        }



        /* =========================================
           FOOTER
        ========================================= */

        .footer {

            background: #111214;

            min-height: 100px;

            display: flex;

            justify-content: center;

            align-items: center;

            color: #777;

            font-size: 20px;
        }


        .footer a {

            color: #c8a55b;

            text-decoration: none;
        }



        /* =========================================
           RESPONSIVE
        ========================================= */

        @media(max-width: 767px) {


            .main-navbar {

                padding:
                    15px 20px;
            }


            .main-navbar img {

                max-width:
                    150px;
            }


            .products-page {

                padding:
                    40px 0 60px;
            }


            .page-heading h1 {

                font-size:
                    34px;
            }


            .product-image {

                min-height:
                    300px;

                padding:
                    25px;
            }


            .product-image::after {

                display:
                    none;
            }


            .product-image img {

                max-height:
                    250px;
            }


            /*
             Disable mouse zoom on phones
            */

            .product-image.zoomed img {

                transform:
                    none;
            }


            .product-image {

                cursor:
                    default;
            }


            .zoom-indicator {

                display:
                    none;
            }


            .product-content {

                padding:
                    35px 28px;
            }


            .product-title {

                font-size:
                    28px;
            }


            .product-price {

                font-size:
                    26px;
            }

        }

    </style>

</head>


<body>



<!-- =========================================
     NAVBAR
========================================= -->

<nav class="main-navbar">

    <a href="{{ url('/') }}">

        <img
            src="{{ asset('images/logo.PNG') }}"
            alt="Webshop"
        >

    </a>


    <a
        href="{{ url('/') }}"
        class="back-home"
    >

        <i class="fa-solid fa-arrow-left"></i>

        Back to shop

    </a>

</nav>



<!-- =========================================
     PRODUCTS
========================================= -->

<section class="products-page">

    <div class="container">


        <!-- PAGE TITLE -->

        <div class="page-heading">

            <span class="page-label">

                OUR COLLECTION

            </span>


            <h1>

                Product
                <span>Details</span>

            </h1>


            <p>

                Discover more information about our selected products.

            </p>

        </div>



        <!-- PRODUCTS -->

        @foreach($data as $row)


            <div class="product-card">


                <div class="row no-gutters">



                    <!-- =====================================
                         PRODUCT IMAGE
                    ====================================== -->

                    <div class="col-lg-5">


                        <div class="product-image">


                            <img
                                src="{{ url('/w/show/'.$row->id) }}"
                                alt="{{ $row->pro_name_EN }}"
                                class="zoom-image"
                                draggable="false"
                            >


                            <div class="zoom-indicator">

                                <i class="fa-solid fa-magnifying-glass-plus"></i>

                                Hover to zoom

                            </div>


                        </div>


                    </div>



                    <!-- =====================================
                         PRODUCT INFORMATION
                    ====================================== -->

                    <div class="col-lg-7">


                        <div class="product-content">


                            <span class="product-tag">

                                PREMIUM PRODUCT

                            </span>



                            <h2 class="product-title">

                                {{ $row->pro_name_EN }}

                            </h2>



                            <!-- PRICE -->

                            <div class="product-price-wrapper">


                                <span class="product-price">

                                    {{ $row->pro_price }}

                                </span>


                                <span class="currency">

                                    USD

                                </span>


                            </div>



                            <div class="product-divider"></div>



                            <!-- DESCRIPTION -->

                            <div class="description-title">

                                Product Description

                            </div>


                            <p class="description-text">

                                {{ $row->pro_description_EN }}

                            </p>


                        </div>


                    </div>


                </div>


            </div>


        @endforeach


    </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->

<footer class="footer">

    © {{ date('Y') }}&nbsp;

    <a href="{{ url('/') }}">
        Webshop
    </a>

    &nbsp;— All rights reserved.

</footer>



<!-- =========================================
     IMAGE ZOOM JAVASCRIPT
========================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    const productImages =
        document.querySelectorAll('.product-image');


    productImages.forEach(function(container) {


        const image =
            container.querySelector('.zoom-image');


        if (!image) {
            return;
        }



        /*
         * Start zoom
         */

        container.addEventListener(
            'mouseenter',
            function() {


                /*
                 * Only enable mouse zoom
                 * on larger screens.
                 */

                if (window.innerWidth <= 767) {
                    return;
                }


                container.classList.add('zoomed');

            }
        );



        /*
         * Follow mouse
         */

        container.addEventListener(
            'mousemove',
            function(event) {


                if (window.innerWidth <= 767) {
                    return;
                }


                const rect =
                    container.getBoundingClientRect();


                const mouseX =
                    event.clientX - rect.left;


                const mouseY =
                    event.clientY - rect.top;


                const xPercent =
                    (mouseX / rect.width) * 100;


                const yPercent =
                    (mouseY / rect.height) * 100;


                image.style.transformOrigin =
                    xPercent + '% ' + yPercent + '%';

            }
        );



        /*
         * Reset zoom
         */

        container.addEventListener(
            'mouseleave',
            function() {


                container.classList.remove('zoomed');


                image.style.transformOrigin =
                    'center center';

            }
        );


    });


});

</script>


</body>

</html>