```blade
@extends('layouts.Adcon')

@section('title','Delete Products')

@section('content')

<div class="delete-page">

    <div class="container">

        {{-- HEADER --}}
        <div class="page-header">

            <div>
                <span class="page-label">PRODUCT MANAGEMENT</span>

                <h1>
                    Delete <span>Products</span>
                </h1>

                <p>
                    Remove products that are no longer available in your webshop.
                </p>
            </div>

            <div class="header-icon">
                <i class="fa-solid fa-trash"></i>
            </div>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="alert-box success-box">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>

        @endif


        {{-- LIST HEADER --}}
        <div class="product-list-header">

            <div>
                <span>CATALOGUE</span>
                <h3>Product List</h3>
            </div>

            <div class="product-count">
                {{ count($products) }} Products
            </div>

        </div>


        {{-- PRODUCTS --}}
        <div class="product-list">

            @forelse($products as $product)

                <div class="product-delete-card">

                    <div class="product-image">

                        <img
                            src="{{ url('/w/show/'.$product->id) }}"
                            alt="{{ $product->pro_name_EN }}"
                        >

                    </div>


                    <div class="product-info">

                        <span class="product-id">
                            PRODUCT #{{ $product->id }}
                        </span>

                        <h3>
                            {{ $product->pro_name_EN }}
                        </h3>

                        <div class="product-price">
                            {{ $product->pro_price }} USD
                        </div>

                    </div>


                    <div class="delete-action">

                        <form
                            action="{{ route('products.destroy', $product->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this product?');"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="delete-button"
                            >

                                <i class="fa-solid fa-trash"></i>

                                <span>
                                    Delete
                                </span>

                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <div class="empty-products">

                    <i class="fa-solid fa-box-open"></i>

                    <h3>No Products Found</h3>

                    <p>
                        There are currently no products available to delete.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection


@section('styles')

<style>

.delete-page {
    padding: 60px 0 80px;
}


/* ===========================
   HEADER
=========================== */

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

    display: flex;

    align-items: center;

    justify-content: center;

    color: #c8a55b;

    font-size: 30px;

    position: relative;

    z-index: 2;
}


/* ===========================
   SUCCESS MESSAGE
=========================== */

.alert-box {

    border-radius: 14px;

    padding: 17px 20px;

    margin-bottom: 25px;

    display: flex;

    gap: 10px;

    align-items: center;

    font-size: 13px;
}


.success-box {

    background: #f0fff6;

    border:
        1px solid #ccebd8;

    color: #267746;
}


/* ===========================
   LIST HEADER
=========================== */

.product-list-header {

    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 20px;

    padding: 0 5px;
}


.product-list-header span {

    color: #b89146;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: 3px;
}


.product-list-header h3 {

    margin: 4px 0 0;

    font-family:
        'Playfair Display',
        serif;

    font-size: 26px;

    font-weight: 700;
}


.product-count {

    background: #17181a;

    color: #c8a55b;

    border-radius: 50px;

    padding: 9px 15px;

    font-size: 11px;

    font-weight: 700;
}


/* ===========================
   PRODUCT CARD
=========================== */

.product-delete-card {

    background: white;

    border:
        1px solid #e9e9e9;

    border-radius: 20px;

    padding: 20px;

    margin-bottom: 18px;

    display: flex;

    align-items: center;

    gap: 25px;

    box-shadow:
        0 10px 35px rgba(0,0,0,.05);

    transition:
        .25s ease;
}


.product-delete-card:hover {

    transform: translateY(-3px);

    border-color:
        rgba(184,145,70,.4);

    box-shadow:
        0 18px 45px rgba(0,0,0,.08);
}


/* ===========================
   PRODUCT IMAGE
=========================== */

.product-image {

    width: 120px;

    height: 120px;

    flex-shrink: 0;

    border-radius: 16px;

    background:
        #f6f6f6;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 12px;
}


.product-image img {

    width: 100%;

    height: 100%;

    object-fit: contain;

    border-radius: 10px;
}


/* ===========================
   PRODUCT INFO
=========================== */

.product-info {

    flex: 1;
}


.product-id {

    color: #b89146;

    font-size: 9px;

    letter-spacing: 2px;

    font-weight: 700;
}


.product-info h3 {

    margin:
        6px 0 10px;

    font-family:
        'Playfair Display',
        serif;

    font-size: 22px;

    font-weight: 700;
}


.product-price {

    color: #777;

    font-size: 14px;

    font-weight: 600;
}


/* ===========================
   DELETE BUTTON
=========================== */

.delete-action {

    min-width: 140px;

    display: flex;

    justify-content: flex-end;
}


.delete-button {

    border: none;

    border-radius: 11px;

    min-width: 125px;

    padding: 13px 18px;

    background:
        #fff2f2;

    color:
        #b94343;

    font-size: 12px;

    font-weight: 700;

    cursor: pointer;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    transition:
        .25s ease;
}


.delete-button:hover {

    background:
        #b94343;

    color:
        white;

    transform:
        translateY(-2px);

    box-shadow:
        0 8px 20px rgba(185,67,67,.22);
}


/* ===========================
   EMPTY
=========================== */

.empty-products {

    background: white;

    border:
        1px solid #eee;

    border-radius: 22px;

    padding: 70px 30px;

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


/* ===========================
   MOBILE
=========================== */

@media(max-width: 767px) {

    .delete-page {
        padding-top: 30px;
    }

    .page-header {

        min-height: auto;

        padding: 32px 25px;
    }

    .page-header h1 {
        font-size: 34px;
    }

    .header-icon {
        display: none;
    }

    .product-delete-card {

        flex-direction: column;

        text-align: center;

        padding: 25px;
    }

    .product-image {

        width: 150px;

        height: 150px;
    }

    .delete-action {

        width: 100%;

        justify-content: center;
    }

    .delete-button {

        width: 100%;
    }

}

</style>

@endsection
```
