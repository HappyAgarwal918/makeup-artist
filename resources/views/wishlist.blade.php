@extends('layout.master')

@section('pagename', 'Wishlist')

@section('content')

<section class="wishlist-section py-md-5 py-5">
    <div class="container">

        <div class="row justify-content-center heading-row">
            <div class="col-md-2">
                <div class="card-heading">
                    <h2>PRODUCT NAME</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card-heading">
                    <h2>UNIT PRICE</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card-heading">
                    <h2>STOCK STATUS</h2>
                </div>
            </div>
        </div>

        <div class="row card-row">
            <div class="col-md-1">
                <div class="product-remove">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-image">
                    <a href="">
                        <img src="assets/images/product-img.jpg" alt="product-img">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-name">
                    <h2>VIP CARD</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-price">
                    <h3>$100.00</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-status">
                    <h3>In Stock</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-btn">
                    <a href="">add to cart</a>
                </div>
            </div>
        </div>
        <div class="row card-row">
            <div class="col-md-1">
                <div class="product-remove">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-image">
                    <a href="">
                        <img src="assets/images/product-img.jpg" alt="product-img">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-name">
                    <h2>VIP CARD</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-price">
                    <h3>$100.00</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-status">
                    <h3>In Stock</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-btn">
                    <a href="">add to cart</a>
                </div>
            </div>
        </div>
        <div class="row card-row">
            <div class="col-md-1">
                <div class="product-remove">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-image">
                    <a href="">
                        <img src="assets/images/product-img.jpg" alt="product-img">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-name">
                    <h2>VIP CARD</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-price">
                    <h3>$100.00</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-status">
                    <h3>In Stock</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-btn">
                    <a href="">add to cart</a>
                </div>
            </div>
        </div>
        <div class="row card-row">
            <div class="col-md-1">
                <div class="product-remove">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-image">
                    <a href="">
                        <img src="assets/images/product-img.jpg" alt="product-img">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-name">
                    <h2>VIP CARD</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-price">
                    <h3>$100.00</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product-status">
                    <h3>Out of Stock</h3>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="product-btn">
                    <a href="">add to cart</a>
                </div>
            </div> -->
        </div>

    </div>
</section>

@endsection

@section('js')
