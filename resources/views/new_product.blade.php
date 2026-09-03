@extends('layouts.Adcon')

@section('title', 'Add New Product')

@section('content')

<div class="product-page">

    <div class="container">

        {{-- HEADER --}}
        <div class="page-header">
            <div>
                <span class="page-label">PRODUCT MANAGEMENT</span>

                <h1>
                    Add New <span>Product</span>
                </h1>

                <p>Create a new product and add it to your webshop.</p>
            </div>

            <div class="header-icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
        </div>


        {{-- VALIDATION ERRORS --}}
        @if($errors->any())
            <div class="alert-box error-box">
                <i class="fa-solid fa-circle-exclamation"></i>

                <div>
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            </div>
        @endif


        {{-- SUCCESS --}}
        @if(session()->has('success'))
            <div class="alert-box success-box">
                <i class="fa-solid fa-circle-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif


        <form method="POST"
              action="{{ url('newproduct/store') }}"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                {{-- IMAGE + PRICE --}}
                <div class="col-lg-4 mb-4">

                    <div class="luxury-card h-100">

                        <div class="section-title">
                            <div class="section-icon">
                                <i class="fa-solid fa-image"></i>
                            </div>

                            <div>
                                <span>MEDIA</span>
                                <h3>Product Details</h3>
                            </div>
                        </div>


                        {{-- PRICE --}}
                        <div class="form-group-luxury">

                            <label>
                                Product Price
                                <span>*</span>
                            </label>

                            <div class="input-wrapper">

                                <i class="fa-solid fa-tag"></i>

                                <input
                                    type="text"
                                    name="Product_Price"
                                    value="{{ old('Product_Price') }}"
                                    placeholder="e.g. 249.99"
                                    required
                                >

                            </div>

                        </div>


                        {{-- IMAGE --}}
                        <div class="form-group-luxury">

                            <label>
                                Product Image
                                <span>*</span>
                            </label>

                            <label class="upload-box" for="productImage">

                                <div class="upload-icon">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                </div>

                                <strong>Upload product image</strong>

                                <small>
                                    PNG, JPG or WEBP
                                </small>

                                <span class="upload-button">
                                    Choose Image
                                </span>

                            </label>

                            <input
                                id="productImage"
                                name="image"
                                type="file"
                                accept="image/*"
                                hidden
                                required
                            >

                            <div id="imageName" class="image-name"></div>

                        </div>

                    </div>

                </div>


                {{-- PRODUCT INFORMATION --}}
                <div class="col-lg-8 mb-4">

                    <div class="luxury-card h-100">

                        <div class="section-title">

                            <div class="section-icon">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div>
                                <span>INFORMATION</span>
                                <h3>Product Information</h3>
                            </div>

                        </div>


                        {{-- NAME --}}
                        <div class="form-group-luxury">

                            <label>
                                Product Name
                                <span>*</span>
                            </label>

                            <div class="input-wrapper">

                                <i class="fa-solid fa-box"></i>

                                <input
                                    type="text"
                                    name="product_name_en"
                                    value="{{ old('product_name_en') }}"
                                    placeholder="Enter product name"
                                    required
                                >

                            </div>

                        </div>


                        {{-- DESCRIPTION --}}
                        <div class="form-group-luxury">

                            <label>
                                Description
                                <span>*</span>
                            </label>

                            <textarea
                                name="productdescription_en"
                                rows="8"
                                placeholder="Describe your product..."
                                required
                            >{{ old('productdescription_en') }}</textarea>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ACTION BAR --}}
            <div class="action-bar">

                <a href="{{ url('/admin') }}" class="cancel-button">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back
                </a>

                <button type="submit" class="save-button">

                    <span>
                        Save Product
                    </span>

                    <i class="fa-solid fa-arrow-right"></i>

                </button>

            </div>

        </form>

    </div>

</div>

@endsection


@section('styles')

<style>

.product-page {
    padding: 60px 0 80px;
}


/* HEADER */

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
    justify-content: space-between;
    align-items: center;

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

    font-size: 11px;

    letter-spacing: 4px;

    font-weight: 700;
}


.page-header h1 {
    color: white;

    font-family: 'Playfair Display', serif;

    font-size: 45px;

    margin-top: 10px;

    margin-bottom: 8px;

    font-weight: 700;
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

    display: flex;
    align-items: center;
    justify-content: center;

    border:
        1px solid rgba(200,165,91,.35);

    background:
        rgba(255,255,255,.03);

    color: #c8a55b;

    font-size: 30px;

    position: relative;
    z-index: 2;
}


/* CARD */

.luxury-card {
    background: white;

    border-radius: 22px;

    padding: 35px;

    border:
        1px solid #eaeaea;

    box-shadow:
        0 12px 40px rgba(0,0,0,.055);

    transition: .25s;
}


.luxury-card:hover {
    box-shadow:
        0 20px 50px rgba(0,0,0,.08);
}


/* SECTION HEADER */

.section-title {
    display: flex;
    align-items: center;

    gap: 15px;

    margin-bottom: 35px;

    padding-bottom: 20px;

    border-bottom:
        1px solid #eeeeee;
}


.section-icon {
    width: 46px;
    height: 46px;

    border-radius: 13px;

    background: #161719;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #c8a55b;
}


.section-title span {
    color: #aaa;

    letter-spacing: 2px;

    font-size: 9px;

    font-weight: 700;
}


.section-title h3 {
    margin: 2px 0 0;

    font-family:
        'Playfair Display',
        serif;

    font-size: 21px;

    font-weight: 700;
}


/* FORMS */

.form-group-luxury {
    margin-bottom: 28px;
}


.form-group-luxury label {
    display: block;

    margin-bottom: 9px;

    color: #333;

    font-size: 13px;

    font-weight: 600;
}


.form-group-luxury label span {
    color: #b89146;
}


.input-wrapper {
    position: relative;
}


.input-wrapper i {
    position: absolute;

    left: 17px;
    top: 50%;

    transform: translateY(-50%);

    color: #aaa;

    font-size: 13px;
}


.input-wrapper input {
    width: 100%;

    height: 52px;

    border:
        1px solid #ddd;

    border-radius: 12px;

    padding:
        0 16px 0 45px;

    outline: none;

    font-size: 14px;

    transition: .2s;

    background: #fafafa;
}


.input-wrapper input:focus {
    background: white;

    border-color: #b89146;

    box-shadow:
        0 0 0 3px rgba(184,145,70,.08);
}


textarea {
    width: 100%;

    border:
        1px solid #ddd;

    border-radius: 12px;

    padding: 16px;

    outline: none;

    background: #fafafa;

    resize: vertical;

    font-size: 14px;

    transition: .2s;
}


textarea:focus {
    background: white;

    border-color: #b89146;

    box-shadow:
        0 0 0 3px rgba(184,145,70,.08);
}


/* IMAGE UPLOAD */

.upload-box {
    border:
        1px dashed #cfcfcf;

    border-radius: 16px;

    min-height: 220px;

    padding: 30px;

    cursor: pointer;

    display: flex !important;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    text-align: center;

    background: #fafafa;

    transition: .25s;
}


.upload-box:hover {
    border-color: #b89146;

    background: #fffdf8;
}


.upload-icon {
    width: 56px;
    height: 56px;

    border-radius: 50%;

    background: #161719;

    color: #c8a55b;

    display: flex;
    justify-content: center;
    align-items: center;

    font-size: 20px;

    margin-bottom: 15px;
}


.upload-box strong {
    font-size: 14px;

    margin-bottom: 5px;
}


.upload-box small {
    color: #aaa;

    margin-bottom: 18px;
}


.upload-button {
    background: #eee;

    color: #333 !important;

    padding: 9px 18px;

    border-radius: 8px;

    font-size: 11px;
}


.image-name {
    color: #888;

    font-size: 12px;

    margin-top: 10px;

    text-align: center;
}


/* ALERT */

.alert-box {
    border-radius: 14px;

    padding: 17px 20px;

    margin-bottom: 25px;

    display: flex;

    gap: 12px;

    align-items: flex-start;

    font-size: 13px;
}


.error-box {
    background: #fff3f3;

    border: 1px solid #ffd4d4;

    color: #a53232;
}


.success-box {
    background: #f0fff6;

    border: 1px solid #ccebd8;

    color: #267746;
}


/* ACTION BAR */

.action-bar {
    background: white;

    border-radius: 18px;

    padding: 18px 22px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    box-shadow:
        0 12px 40px rgba(0,0,0,.06);
}


.cancel-button {
    color: #777;

    text-decoration: none !important;

    padding: 13px 20px;

    font-size: 13px;

    font-weight: 600;
}


.cancel-button i {
    margin-right: 7px;
}


.save-button {
    border: none;

    border-radius: 11px;

    padding: 15px 25px;

    min-width: 190px;

    background:
        linear-gradient(
            135deg,
            #b08a43,
            #d2b26c
        );

    color: #111;

    font-weight: 700;

    font-size: 13px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    cursor: pointer;

    transition: .25s;
}


.save-button:hover {
    transform: translateY(-2px);

    box-shadow:
        0 10px 25px rgba(176,138,67,.25);
}


/* MOBILE */

@media(max-width: 767px) {

    .product-page {
        padding-top: 30px;
    }

    .page-header {
        padding: 32px 25px;
    }

    .page-header h1 {
        font-size: 34px;
    }

    .header-icon {
        display: none;
    }

    .luxury-card {
        padding: 25px;
    }

}

</style>

@endsection


@section('scripts')

<script>

document
    .getElementById('productImage')
    .addEventListener('change', function () {

        const fileName =
            this.files.length
                ? this.files[0].name
                : '';

        document.getElementById('imageName').innerText =
            fileName
                ? 'Selected: ' + fileName
                : '';

    });

</script>

@endsection