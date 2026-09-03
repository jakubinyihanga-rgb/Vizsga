@extends('layouts.Adcon')

@section('title', 'Admin Control')

@section('content')

<section class="admin-dashboard">

    <div class="container">

        <!-- Header -->
        <div class="dashboard-header">

            <div>
                <span class="dashboard-label">
                    MANAGEMENT
                </span>

                <h1>
                    Admin <span>Dashboard</span>
                </h1>

                <p>
                    Manage your webshop products from one place.
                </p>
            </div>

            <div class="header-icon">
                <i class="fa-solid fa-crown"></i>
            </div>

        </div>


        <!-- Cards -->
        <div class="row">

            <!-- Add Product -->
            <div class="col-lg-4 col-md-6 mb-4">

                <a href="{{ url('/newproduct') }}" class="dashboard-card">

                    <div class="card-number">
                        01
                    </div>

                    <div class="card-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>

                    <h3>
                        Add Product
                    </h3>

                    <p>
                        Create a new product and add it to your webshop catalogue.
                    </p>

                    <div class="card-action">
                        Create product
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                </a>

            </div>


            <!-- Edit Product -->
            <div class="col-lg-4 col-md-6 mb-4">

                <a href="{{ url('/editproduct') }}" class="dashboard-card">

                    <div class="card-number">
                        02
                    </div>

                    <div class="card-icon">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>

                    <h3>
                        Edit Product
                    </h3>

                    <p>
                        Update product information, pricing, descriptions and details.
                    </p>

                    <div class="card-action">
                        Manage products
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                </a>

            </div>


            <!-- Delete Product -->
            <div class="col-lg-4 col-md-6 mb-4">

                <a href="{{ url('/del') }}"
                   class="dashboard-card delete-card">

                    <div class="card-number">
                        03
                    </div>

                    <div class="card-icon">
                        <i class="fa-solid fa-trash"></i>
                    </div>

                    <h3>
                        Delete Product
                    </h3>

                    <p>
                        Remove products that are no longer available in your webshop.
                    </p>

                    <div class="card-action">
                        Remove product
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                </a>

            </div>

        </div>

    </div>

</section>

@endsection


@section('styles')

<style>

.admin-dashboard {
    padding: 70px 0 40px;
}


/* ===========================
   HEADER
=========================== */

.dashboard-header {
    min-height: 220px;
    background:
        linear-gradient(
            135deg,
            #101112 0%,
            #191a1d 100%
        );

    border-radius: 28px;

    padding: 45px 50px;

    margin-bottom: 45px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    position: relative;
    overflow: hidden;

    box-shadow:
        0 25px 60px rgba(0,0,0,.18);
}


/* decorative glow */

.dashboard-header::after {
    content: "";

    position: absolute;

    width: 300px;
    height: 300px;

    right: -100px;
    top: -150px;

    border-radius: 50%;

    background:
        rgba(196, 159, 88, .16);

    filter: blur(10px);
}


.dashboard-label {
    font-size: 11px;
    letter-spacing: 4px;

    color: #c8a55b;

    font-weight: 700;
}


.dashboard-header h1 {

    font-family: 'Playfair Display', serif;

    margin-top: 10px;

    color: white;

    font-size: 48px;

    font-weight: 700;
}


.dashboard-header h1 span {
    color: #c8a55b;
}


.dashboard-header p {

    max-width: 500px;

    color: #aaa;

    font-size: 15px;

    margin-top: 12px;
    margin-bottom: 0;
}


.header-icon {

    width: 90px;
    height: 90px;

    border-radius: 50%;

    border:
        1px solid rgba(202,165,91,.35);

    display: flex;
    justify-content: center;
    align-items: center;

    color: #c8a55b;

    font-size: 31px;

    background:
        rgba(255,255,255,.03);

    position: relative;
    z-index: 2;
}


/* ===========================
   DASHBOARD CARDS
=========================== */

.dashboard-card {

    display: block;

    position: relative;

    height: 100%;

    min-height: 320px;

    padding: 36px;

    border-radius: 22px;

    background: white;

    border:
        1px solid #ececec;

    text-decoration: none !important;

    color: #18181b !important;

    overflow: hidden;

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}


.dashboard-card:hover {

    transform: translateY(-8px);

    border-color:
        rgba(184,145,70,.45);

    box-shadow:
        0 24px 55px
        rgba(0,0,0,.10);
}


/* gold line */

.dashboard-card::before {

    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 4px;

    background:
        linear-gradient(
            90deg,
            #8f6b29,
            #d6b86f,
            #8f6b29
        );
}


/* Card number */

.card-number {

    position: absolute;

    right: 25px;
    top: 22px;

    font-family:
        'Playfair Display',
        serif;

    font-size: 50px;

    color: #f1f1f1;

    font-weight: 700;
}


/* icon */

.card-icon {

    width: 58px;
    height: 58px;

    border-radius: 16px;

    display: flex;
    align-items: center;
    justify-content: center;

    background:
        #141517;

    color:
        #c8a55b;

    font-size: 20px;

    margin-bottom: 30px;

    position: relative;
    z-index: 2;

    transition: .3s;
}


.dashboard-card:hover .card-icon {

    background:
        #c8a55b;

    color:
        #111;
}


.dashboard-card h3 {

    font-family:
        'Playfair Display',
        serif;

    font-size: 25px;

    font-weight: 700;

    margin-bottom: 15px;
}


.dashboard-card p {

    color: #888;

    font-size: 14px;

    line-height: 1.8;

    min-height: 76px;
}


/* action */

.card-action {

    margin-top: 25px;

    padding-top: 20px;

    border-top:
        1px solid #eeeeee;

    display: flex;

    justify-content: space-between;
    align-items: center;

    color:
        #9b7838;

    font-size: 13px;

    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: 1px;
}


.card-action i {
    transition: transform .25s;
}


.dashboard-card:hover .card-action i {
    transform: translateX(6px);
}


/* delete variation */

.delete-card .card-icon {
    color: #d98b8b;
}


.delete-card:hover .card-icon {
    background: #bb4444;
    color: white;
}


/* ===========================
   RESPONSIVE
=========================== */

@media(max-width: 767px) {

    .admin-dashboard {
        padding-top: 35px;
    }

    .dashboard-header {
        padding: 35px 28px;
    }

    .dashboard-header h1 {
        font-size: 36px;
    }

    .header-icon {
        display: none;
    }

}

</style>

@endsection