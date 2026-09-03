<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Web_shop - Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/Logo.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #f4f7fb, #eef2f7);
            margin: 0;
            padding: 0;
        }

        .top-navbar {
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            padding: 12px 30px;
        }

        .navbar-brand img {
            border-radius: 10px;
        }

        .nav-link {
            font-weight: 700;
            color: #333 !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .dropdown-menu {
            border-radius: 14px;
            border: none;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .dropdown-item {
            font-weight: 600;
        }

        .dropdown-item:hover {
            background: #f3f6fb;
        }

        .hero-section {
            text-align: center;
            padding: 60px 20px 30px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 800;
            color: #1f2937;
            margin-bottom: 10px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #6b7280;
            max-width: 700px;
            margin: 0 auto 20px;
        }

        .title-line {
            width: 120px;
            height: 4px;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            margin: 20px auto 0;
            border-radius: 10px;
        }

        .contact-section {
            padding: 20px 0 60px;
        }

        .contact-card,
        .info-card {
            background: #ffffff;
            border: none;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            transition: all 0.35s ease;
            height: 100%;
            padding: 30px;
        }

        .contact-card:hover,
        .info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(0,0,0,0.14);
        }

        .section-title {
            font-size: 28px;
            font-weight: 800;
            color: #1f2937;
            margin-bottom: 10px;
        }

        .section-text {
            font-size: 16px;
            color: #6b7280;
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 14px;
            border: 1px solid #dbe3ec;
            padding: 12px 16px;
            min-height: 50px;
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: #007bff;
        }

        textarea.form-control {
            min-height: 160px;
            resize: vertical;
        }

        .send-btn {
            display: inline-block;
            padding: 10px 22px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(to right, #007bff, #00b4db);
            color: white !important;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .send-btn:hover {
            opacity: 0.9;
            transform: scale(1.03);
            text-decoration: none;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 22px;
        }

        .info-icon {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 50%;
            background: #eef6ff;
            color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 18px;
        }

        .info-item h5 {
            margin: 0 0 6px;
            font-size: 18px;
            font-weight: 800;
            color: #1f2937;
        }

        .info-item p,
        .info-item a {
            margin: 0;
            color: #6b7280 !important;
            text-decoration: none;
        }

        .map-placeholder {
            margin-top: 20px;
            border-radius: 18px;
            padding: 35px 20px;
            text-align: center;
            background: #f8fafc;
            color: #6b7280;
            border: 1px dashed #d8e2ee;
        }

        .footer-box {
            background: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 -2px 15px rgba(0,0,0,0.04);
            margin-top: 30px;
        }

        .footer-box h5 {
            margin: 0;
            font-weight: 700;
            color: #374151;
        }

        .alert-success-custom {
            background: #eaf7ee;
            border: 1px solid #b7e4c7;
            color: #1f7a3f;
            border-radius: 14px;
            padding: 14px 18px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 34px;
            }

            .hero-subtitle {
                font-size: 16px;
            }

            .contact-card,
            .info-card {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light top-navbar">
        <a href="/" class="navbar-brand">
            <img src="/images/logo.PNG" width="190" height="75" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <i class="fa fa-cubes mr-2"></i>Products
                    </a>
                    <div class="dropdown-menu">
                        @foreach($data as $row)
                            <a href="/show_details/{{ $row->id }}" class="dropdown-item">{{ $row->pro_name_EN }}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about-us">
                        <i class="fa fa-info-circle mr-2"></i>About Us
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">
                        <i class="fa fa-phone mr-2"></i>Contact Us
                    </a>
                </li>

                @auth
                    @if(auth()->user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                <i class="fa fa-cog mr-2"></i>Settings
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    @if(Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
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

    <div class="container">
        <div class="hero-section">
            <h1 class="hero-title">Contact Us</h1>
            <p class="hero-subtitle">
                We would love to hear from you. Send us your questions, ideas, or product inquiries.
            </p>
            <div class="title-line"></div>
        </div>

        <div class="contact-section">
            <div class="row">
                <div class="col-lg-7 mb-4">
                    <div class="contact-card">
                        <h2 class="section-title">Send a Message</h2>
                        <p class="section-text">
                            Fill out the form below and our team will contact you soon.
                        </p>

                        @if(session('success'))
                            <div class="alert-success-custom">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="/contact-us" method="POST">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Write your message here..."></textarea>
                            </div>

                            <button type="submit" class="send-btn">
                                <i class="fa fa-paper-plane mr-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 mb-4">
                    <div class="info-card">
                        <h2 class="section-title">Get in Touch</h2>
                        <p class="section-text">
                            Here is some sample contact information.
                        </p>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div>
                                <h5>Address</h5>
                                <p>Budapest, Hungary, Fashion Street 12</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p>+36 30 123 4567</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <a href="mailto:info@Web_shop.com">info@Web_shop.com</a>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div>
                                <h5>Working Hours</h5>
                                <p>Monday - Friday: 09:00 - 18:00</p>
                            </div>
                        </div>

                        <div class="map-placeholder">
                            <i class="fa fa-map-o fa-2x mb-3"></i>
                            <div>Google Map Placeholder</div>
                            <small>You can replace this area with a real map later.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-box">
        <h5>© 2026 Copyright: <a href="/">Web_Shop.com</a></h5>
    </div>

</body>
</html>