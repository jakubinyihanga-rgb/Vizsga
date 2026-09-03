<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>ILDI - About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileImage" content="LogoMB2017.png">
    <link rel="icon" href="/images/Logo.png">

    <!-- Bootstrap + Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #0f0f0f;
            --bg-soft: #171717;
            --card-bg: #1d1d1d;
            --gold: #c8a96b;
            --gold-light: #e3c78a;
            --text-main: #f5f1e8;
            --text-soft: #cfc7b8;
            --border-soft: rgba(200, 169, 107, 0.22);
            --shadow-luxury: 0 10px 30px rgba(0, 0, 0, 0.35);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background:
                radial-gradient(circle at top right, rgba(200,169,107,0.10), transparent 25%),
                linear-gradient(135deg, #0b0b0b 0%, #141414 45%, #101010 100%);
            color: var(--text-main);
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 0.5px;
        }

        a {
            text-decoration: none !important;
        }

        /* Navbar */
        .luxury-navbar-wrapper {
            padding: 20px 30px;
        }

        .luxury-navbar {
            background: rgba(20, 20, 20, 0.96);
            border: 1px solid var(--border-soft);
            border-radius: 18px;
            box-shadow: var(--shadow-luxury);
            padding: 14px 24px;
        }

        .navbar-brand img {
            object-fit: contain;
        }

        .navbar-light .navbar-nav .nav-link {
            color: var(--text-main) !important;
            font-weight: 600;
            margin: 0 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: var(--gold-light) !important;
        }

        .navbar-light .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--gold), var(--gold-light));
            transition: width 0.3s ease;
        }

        .navbar-light .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .dropdown-menu {
            background: #181818;
            border: 1px solid var(--border-soft);
            border-radius: 12px;
            box-shadow: var(--shadow-luxury);
        }

        .dropdown-item {
            color: var(--text-main);
            transition: all 0.25s ease;
        }

        .dropdown-item:hover {
            background: rgba(200, 169, 107, 0.12);
            color: var(--gold-light);
        }

        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        /* Hero */
        .hero-section {
            padding: 20px 15px 10px;
        }

        .hero-box {
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border: 1px solid var(--border-soft);
            border-radius: 24px;
            padding: 50px 30px 35px;
            text-align: center;
            box-shadow: var(--shadow-luxury);
            backdrop-filter: blur(6px);
        }

        .hero-title {
            font-size: 3.1rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 10px;
        }

        .hero-subtitle {
            color: var(--text-soft);
            font-size: 1.05rem;
            max-width: 760px;
            margin: 0 auto 25px;
        }

        .luxury-divider {
            width: 120px;
            height: 3px;
            border: none;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            margin: 0 auto;
        }

        /* About */
        .about-section {
            padding: 30px 15px 60px;
        }

        .about-card {
            background: linear-gradient(180deg, #1a1a1a 0%, #131313 100%);
            border: 1px solid var(--border-soft);
            border-radius: 22px;
            box-shadow: var(--shadow-luxury);
            padding: 35px 28px;
            height: 100%;
        }

        .section-title {
            color: var(--text-main);
            font-size: 2rem;
            margin-bottom: 14px;
        }

        .section-text {
            color: var(--text-soft);
            line-height: 1.9;
            margin-bottom: 0;
        }

        .feature-card {
            background: linear-gradient(180deg, #1a1a1a 0%, #131313 100%);
            border: 1px solid var(--border-soft);
            border-radius: 20px;
            box-shadow: var(--shadow-luxury);
            padding: 28px 22px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            border-color: rgba(227, 199, 138, 0.45);
        }

        .feature-icon {
            width: 68px;
            height: 68px;
            margin: 0 auto 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(200,169,107,0.12);
            color: var(--gold-light);
            font-size: 1.4rem;
        }

        .feature-title {
            font-size: 1.5rem;
            color: var(--text-main);
            margin-bottom: 10px;
        }

        .feature-text {
            color: var(--text-soft);
            margin-bottom: 0;
            line-height: 1.7;
        }

        .stats-box {
            margin-top: 30px;
        }

        .stat-card {
            background: rgba(255,255,255,0.02);
            border: 1px solid var(--border-soft);
            border-radius: 18px;
            padding: 24px 20px;
            text-align: center;
            height: 100%;
        }

        .stat-number {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.3rem;
            color: var(--gold-light);
            margin-bottom: 8px;
        }

        .stat-label {
            color: var(--text-soft);
            font-size: 0.98rem;
            margin-bottom: 0;
        }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 2.4rem;
            }

            .luxury-navbar-wrapper {
                padding: 15px;
            }
        }

        @media (max-width: 767px) {
            .hero-box {
                padding: 35px 20px 25px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="luxury-navbar-wrapper">
        <nav class="navbar navbar-expand-md navbar-light luxury-navbar">
            <a href="/" class="navbar-brand">
                <img src="/images/logo.PNG" width="190" height="75" alt="ILDI Logo">
            </a>

            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto align-items-md-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="fas fa-gem mr-2"></i>Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Luxury Perfume</a></li>
                            <li><a href="#" class="dropdown-item">Golden Watch</a></li>
                            <li><a href="#" class="dropdown-item">Elegant Bag</a></li>
                            <li><a href="#" class="dropdown-item">Premium Shoes</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">
                            <i class="fas fa-feather-alt mr-2"></i>About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">
                            <i class="fas fa-phone mr-2"></i>Contact Us
                        </a>
                    </li>

                    @auth
                        @if(auth()->user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">
                                    <i class="fas fa-cog mr-2"></i>Settings
                                </a>
                            </li>
                        @endif
                    @endauth
                </ul>

                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>

    <!-- Hero -->
    <div class="container-fluid hero-section">
        <div class="hero-box">
            <h1 class="hero-title">About Us</h1>
            <p class="hero-subtitle">
                Discover the story behind our brand, our passion for elegance, and our commitment to premium quality and timeless design.
            </p>
            <hr class="luxury-divider">
        </div>
    </div>

    <!-- About Content -->
    <div class="container about-section">
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="about-card">
                    <h2 class="section-title">Who We Are</h2>
                    <p class="section-text">
                        ILDI is a premium brand created for customers who appreciate elegance, quality, and refined style.
                        Our mission is to offer carefully selected luxury products that combine beauty, durability, and timeless value.
                        We believe that every product should represent sophistication and individuality, which is why we focus on exclusive design and excellent presentation.
                        Our goal is to create a memorable shopping experience where every visitor feels the charm of luxury.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="feature-title">Premium Quality</h3>
                    <p class="feature-text">
                        We focus on products that reflect high standards, elegant materials, and lasting value.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="feature-title">Luxury Design</h3>
                    <p class="feature-text">
                        Every detail is chosen to create a sophisticated and visually refined experience for our customers.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="feature-title">Customer Care</h3>
                    <p class="feature-text">
                        We value trust, satisfaction, and personal attention in every interaction with our clients.
                    </p>
                </div>
            </div>
        </div>

        <div class="row stats-box">
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-card">
                    <div class="stat-number">10+</div>
                    <p class="stat-label">Years of Experience</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <p class="stat-label">Happy Clients</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="stat-card">
                    <div class="stat-number">100+</div>
                    <p class="stat-label">Luxury Products</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <p class="stat-label">Support</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>