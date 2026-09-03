@extends('layouts.Adcon')

@section('title','Update Products')

@section('content')

<div class="update-page">

    <div class="container">

        {{-- HEADER --}}
        <div class="page-header">

            <div>
                <span class="page-label">PRODUCT MANAGEMENT</span>

                <h1>
                    Update <span>Products</span>
                </h1>

                <p>
                    Edit product information, pricing and descriptions.
                </p>
            </div>

            <div class="header-icon">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>

        </div>


        {{-- SUCCESS --}}
        @if(session('success'))

            <div class="alert-box success-box">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>

        @endif


        {{-- ERRORS --}}
        @if ($errors->any())

            <div class="alert-box error-box">

                <i class="fa-solid fa-circle-exclamation"></i>

                <div>
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>

            </div>

        @endif


        {{-- PRODUCT LIST --}}
        <div class="product-list-header">

            <div>
                <span>CATALOGUE</span>
                <h3>Product List</h3>
            </div>

            <div class="product-count">
                {{ count($products) }} Products
            </div>

        </div>


        @foreach($products as $product)

            <div class="product-edit-card">

                <div class="row no-gutters">


                    {{-- IMAGE --}}
                    <div class="col-lg-3">

                        <div class="product-image-section">

                            <div class="product-id">
                                #{{ $product->id }}
                            </div>

                            <img
                                src="{{ url('/w/show/'.$product->id) }}"
                                alt="{{ $product->pro_name_EN }}"
                            >

                        </div>

                    </div>


                    {{-- FORM --}}
                    <div class="col-lg-9">

                        <div class="product-form-section">

                            <div class="product-card-heading">

                                <div>
                                    <span>EDIT PRODUCT</span>

                                    <h3>
                                        {{ $product->pro_name_EN }}
                                    </h3>
                                </div>

                                <div class="edit-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </div>

                            </div>


                            <form
                                action="{{ route('products.updateInfo', $product->id) }}"
                                method="POST"
                            >

                                @csrf
                                @method('PUT')


                                <div class="row">

                                    {{-- NAME --}}
                                    <div class="col-md-8">

                                        <div class="form-group-luxury">

                                            <label>
                                                Product Name
                                            </label>

                                            <div class="input-wrapper">

                                                <i class="fa-solid fa-box"></i>

                                                <input
                                                    type="text"
                                                    name="product_name_en"
                                                    value="{{ $product->pro_name_EN }}"
                                                    required
                                                >

                                            </div>

                                        </div>

                                    </div>


                                    {{-- PRICE --}}
                                    <div class="col-md-4">

                                        <div class="form-group-luxury">

                                            <label>
                                                Product Price
                                            </label>

                                            <div class="input-wrapper">

                                                <i class="fa-solid fa-dollar-sign"></i>

                                                <input
                                                    type="number"
                                                    step="0.01"
                                                    name="Product_Price"
                                                    value="{{ $product->pro_price }}"
                                                    required
                                                >

                                            </div>

                                        </div>

                                    </div>


                                    {{-- DESCRIPTION --}}
                                    <div class="col-12">

                                        <div class="form-group-luxury">

                                            <label>
                                                Product Description
                                            </label>

                                            <textarea
                                                name="productdescription_en"
                                                rows="4"
                                                required
                                            >{{ $product->pro_description_EN }}</textarea>

                                        </div>

                                    </div>

                                </div>


                                <div class="form-actions">

                                    <span class="product-info">
                                        <i class="fa-solid fa-circle-info"></i>
                                        Product ID: {{ $product->id }}
                                    </span>


                                    <button
                                        type="submit"
                                        class="update-button"
                                    >

                                        <span>
                                            Update Product
                                        </span>

                                        <i class="fa-solid fa-arrow-right"></i>

                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        @endforeach


        @if(count($products) === 0)

            <div class="empty-products">

                <i class="fa-solid fa-box-open"></i>

                <h3>No Products Found</h3>

                <p>
                    There are currently no products available to edit.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection


@section('styles')

<style>

.update-page {
    padding: 60px 0 80px;
}


/* ========================
   HEADER
======================== */

.page-header {

    background:
        linear-gradient(
            135deg,
            #101112 0%,
            #1b1c1f 100%
        );

    min-height: 210px;

    border-radius: 28px;

    padding: 45px 50px;

    margin-bottom: 35px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    position: relative;

    overflow: hidden;

    box-shadow:
        0 25px 60px rgba(0,0,0,.18);
}


.page-header::after {

    content: "";

    position: absolute;

    width: 320px;
    height: 320px;

    right: -100px;
    top: -170px;

    border-radius: 50%;

    background:
        rgba(200,165,91,.15);
}


.page-label {

    color: #c8a55b;

    font-size: 10px;

    letter-spacing: 4px;

    font-weight: 700;
}


.page-header h1 {

    color: white;

    font-family:
        'Playfair Display',
        serif;

    font-size: 45px;

    font-weight: 700;

    margin-top: 10px;

    margin-bottom: 8px;
}


.page-header h1 span {
    color: #c8a55b;
}


.page-header p {

    margin: 0;

    color: #999;

    font-size: 14px;
}


.header-icon {

    width: 90px;
    height: 90px;

    border-radius: 50%;

    border:
        1px solid rgba(200,165,91,.35);

    background:
        rgba(255,255,255,.03);

    color:
        #c8a55b;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 30px;

    z-index: 2;
}


/* ========================
   ALERTS
======================== */

.alert-box {

    padding: 17px 20px;

    border-radius: 14px;

    margin-bottom: 25px;

    display: flex;

    align-items: flex-start;

    gap: 12px;

    font-size: 13px;
}


.success-box {

    background:
        #f0fff6;

    border:
        1px solid #ccebd8;

    color:
        #267746;
}


.error-box {

    background:
        #fff3f3;

    border:
        1px solid #ffd4d4;

    color:
        #a53232;
}


/* ========================
   LIST HEADER
======================== */

.product-list-header {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 20px;

    padding:
        0 5px;
}


.product-list-header span {

    color:
        #b89146;

    font-size:
        9px;

    font-weight:
        700;

    letter-spacing:
        3px;
}


.product-list-header h3 {

    margin:
        4px 0 0;

    font-family:
        'Playfair Display',
        serif;

    font-size:
        26px;

    font-weight:
        700;
}


.product-count {

    background:
        #17181a;

    color:
        #c8a55b;

    padding:
        9px 15px;

    border-radius:
        50px;

    font-size:
        11px;

    font-weight:
        700;
}


/* ========================
   PRODUCT CARD
======================== */

.product-edit-card {

    background:
        white;

    border-radius:
        22px;

    overflow:
        hidden;

    border:
        1px solid #e9e9e9;

    margin-bottom:
        25px;

    box-shadow:
        0 12px 40px rgba(0,0,0,.055);

    transition:
        .3s ease;
}


.product-edit-card:hover {

    transform:
        translateY(-4px);

    box-shadow:
        0 22px 55px rgba(0,0,0,.09);

    border-color:
        rgba(184,145,70,.4);
}


/* ========================
   IMAGE
======================== */

.product-image-section {

    height:
        100%;

    min-height:
        350px;

    position:
        relative;

    display:
        flex;

    justify-content:
        center;

    align-items:
        center;

    padding:
        35px;

    background:

        radial-gradient(
            circle at center,
            #ffffff 0%,
            #f3f3f3 100%
        );

    border-right:
        1px solid #ededed;
}


.product-image-section img {

    width:
        100%;

    max-width:
        220px;

    max-height:
        250px;

    object-fit:
        contain;

    transition:
        .3s ease;
}


.product-edit-card:hover
.product-image-section img {

    transform:
        scale(1.04);
}


.product-id {

    position:
        absolute;

    top:
        18px;

    left:
        18px;

    background:
        #17181a;

    color:
        #c8a55b;

    border-radius:
        7px;

    padding:
        6px 10px;

    font-size:
        10px;

    font-weight:
        700;
}


/* ========================
   FORM SECTION
======================== */

.product-form-section {

    padding:
        35px 40px;
}


.product-card-heading {

    display:
        flex;

    justify-content:
        space-between;

    align-items:
        center;

    border-bottom:
        1px solid #eeeeee;

    padding-bottom:
        20px;

    margin-bottom:
        28px;
}


.product-card-heading span {

    color:
        #b89146;

    font-size:
        9px;

    letter-spacing:
        2px;

    font-weight:
        700;
}


.product-card-heading h3 {

    font-family:
        'Playfair Display',
        serif;

    font-weight:
        700;

    font-size:
        23px;

    margin:
        4px 0 0;
}


.edit-icon {

    width:
        42px;

    height:
        42px;

    border-radius:
        12px;

    background:
        #161719;

    color:
        #c8a55b;

    display:
        flex;

    justify-content:
        center;

    align-items:
        center;
}


/* ========================
   FORM
======================== */

.form-group-luxury {

    margin-bottom:
        23px;
}


.form-group-luxury label {

    display:
        block;

    margin-bottom:
        8px;

    font-size:
        12px;

    font-weight:
        600;

    color:
        #444;
}


.input-wrapper {

    position:
        relative;
}


.input-wrapper i {

    position:
        absolute;

    left:
        16px;

    top:
        50%;

    transform:
        translateY(-50%);

    color:
        #aaa;

    font-size:
        12px;
}


.input-wrapper input {

    width:
        100%;

    height:
        50px;

    border:
        1px solid #ddd;

    border-radius:
        11px;

    padding:
        0 15px 0 43px;

    background:
        #fafafa;

    outline:
        none;

    font-size:
        13px;

    transition:
        .2s;
}


.input-wrapper input:focus {

    background:
        white;

    border-color:
        #b89146;

    box-shadow:
        0 0 0 3px rgba(184,145,70,.08);
}


textarea {

    width:
        100%;

    border:
        1px solid #ddd;

    border-radius:
        11px;

    padding:
        14px;

    background:
        #fafafa;

    outline:
        none;

    resize:
        vertical;

    font-size:
        13px;

    transition:
        .2s;
}


textarea:focus {

    background:
        white;

    border-color:
        #b89146;

    box-shadow:
        0 0 0 3px rgba(184,145,70,.08);
}


/* ========================
   ACTION
======================== */

.form-actions {

    border-top:
        1px solid #eeeeee;

    padding-top:
        20px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        space-between;
}


.product-info {

    color:
        #999;

    font-size:
        11px;
}


.product-info i {

    color:
        #b89146;

    margin-right:
        5px;
}


.update-button {

    min-width:
        180px;

    border:
        none;

    padding:
        14px 20px;

    border-radius:
        10px;

    background:

        linear-gradient(
            135deg,
            #ae8741,
            #d2b16a
        );

    color:
        #111;

    font-size:
        12px;

    font-weight:
        700;

    cursor:
        pointer;

    display:
        flex;

    justify-content:
        space-between;

    align-items:
        center;

    transition:
        .25s;
}


.update-button:hover {

    transform:
        translateY(-2px);

    box-shadow:
        0 10px 25px rgba(174,135,65,.25);
}


.update-button i {

    transition:
        transform .2s;
}


.update-button:hover i {

    transform:
        translateX(5px);
}


/* ========================
   EMPTY
======================== */

.empty-products {

    background:
        white;

    border:
        1px solid #eee;

    border-radius:
        22px;

    padding:
        70px 30px;

    text-align:
        center;
}


.empty-products i {

    font-size:
        45px;

    color:
        #c8a55b;

    margin-bottom:
        20px;
}


.empty-products h3 {

    font-family:
        'Playfair Display',
        serif;

    font-weight:
        700;
}


.empty-products p {

    color:
        #999;

    font-size:
        13px;
}


/* ========================
   MOBILE
======================== */

@media(max-width:767px) {

    .update-page {
        padding-top:
            30px;
    }

    .page-header {

        padding:
            32px 25px;

        min-height:
            auto;
    }

    .page-header h1 {

        font-size:
            34px;
    }

    .header-icon {
        display:
            none;
    }

    .product-image-section {

        min-height:
            260px;

        border-right:
            none;

        border-bottom:
            1px solid #eee;
    }

    .product-image-section img {

        max-height:
            190px;
    }

    .product-form-section {

        padding:
            28px 22px;
    }

    .form-actions {

        flex-direction:
            column;

        align-items:
            stretch;

        gap:
            15px;
    }

    .update-button {

        width:
            100%;
    }

}

</style>

@endsection