<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Admin Panel')</title>

    <link rel="icon" href="{{ asset('images/Logo.png') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
          rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f5f7;
            color: #18181b;
            font-family: 'Inter', sans-serif;
        }

        .admin-navbar {
            background: #040404;
            min-height: 115px;
            padding: 15px 40px;
            box-shadow: 0 5px 30px rgba(0,0,0,.15);
        }

        .admin-navbar .navbar-brand img {
            height: 90px;
            width: auto;
            object-fit: contain;
        }

        .admin-navbar .nav-link {
            color: #c8c8c8 !important;
            font-size: 15px;
            font-weight: 500;
            padding: 12px 18px !important;
            transition: .25s;
        }

        .admin-navbar .nav-link:hover {
            color: #ffffff !important;
        }

        .admin-navbar .nav-link i {
            margin-right: 7px;
            color: #c9a55c;
        }

        .navbar-toggler {
            border-color: rgba(255,255,255,.2);
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        .gold-text {
            color: #b89146;
        }

        footer {
            margin-top: 80px;
            padding: 25px;
            text-align: center;
            color: #888;
            font-size: 22px;
        }
    </style>

    @yield('styles')
</head>

<body>

<nav class="navbar navbar-expand-md admin-navbar">
    <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ asset('images/logo.PNG') }}" alt="Webshop">
    </a>

    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#adminNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="adminNavbar">

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/newproduct') }}">
                    <i class="fa-solid fa-plus"></i>
                    Add Product
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/editproduct') }}">
                    <i class="fa-solid fa-pen"></i>
                    Edit Product
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/del') }}">
                    <i class="fa-solid fa-trash"></i>
                    Delete Product
                </a>
            </li>

        </ul>

    </div>
</nav>


<main>
    @yield('content')
</main>


<footer>
    Webshop Administration
</footer>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

@yield('scripts')

</body>
</html>