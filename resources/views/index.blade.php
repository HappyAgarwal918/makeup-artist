<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautebooth</title>

    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- External Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <!-- Font-Awesome Link -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.css')}}">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet">

    <!-- Owlcarousel Css  -->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
</head>
<body>
    @include('layout.header')

<!--########################## banner-section-start ##########################-->
<section class="banner-section">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="banner-slider" style="background-image: url({{ asset('assets/images/banner-1.jpg')}});">
                <div class="carousel-caption slider-info">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.
                        Some representative placeholder content for the first slide.
                    </p>
                    <div class="slider-btn">
                        <a href="{{ route('artistlist','men')}}">Mens</a>
                        <a href="{{ route('artistlist','women')}}">Womens</a>
                    </div>
                </div>
                <div class="slider-product product-ani-one">
                    <img src="{{ asset('assets/images/rev-shop-1.jpg')}}" alt="animation-img">
                    <div class="product-detail">
                        <h2>un fond de teint</h2>
                        <h3>$43.00</h3>
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>    
          </div>
          <div class="carousel-item">
            <div class="banner-slider" style="background-image: url({{ asset('assets/images/banner-2.jpg')}});">
                <div class="carousel-caption slider-info slider-ani-two">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.
                        Some representative placeholder content for the first slide.
                    </p>
                    <div class="slider-btn">
                        <a href="">Mens</a>
                        <a href="">Womens</a>
                    </div>
                </div>  
                <div class="slider-product product-ani-two">
                    <img src="{{ asset('assets/images/rev-shop-1.jpg')}}" alt="animation-img">
                    <div class="product-detail">
                        <h2>un fond de teint</h2>
                        <h3>$43.00</h3>
                        <a href="">ADD TO CART</a>
                    </div>
                </div>  
            </div>   
          </div>
          <div class="carousel-item">
            <div class="banner-slider" style="background-image: url({{ asset('assets/images/banner-1.jpg')}});">
                <div class="carousel-caption slider-info slider-ani-three">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.
                        Some representative placeholder content for the first slide.
                    </p>
                    <div class="slider-btn">
                        <a href="">Mens</a>
                        <a href="">Womens</a>
                    </div>
                </div>
                <div class="slider-product product-ani-three">
                    <img src="{{ asset('assets/images/rev-shop-1.jpg')}}" alt="animation-img">
                    <div class="product-detail">
                        <h2>un fond de teint</h2>
                        <h3>$43.00</h3>
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>    
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon home-prev" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon home-next" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>
<!--########################## banner-section-end ##########################-->

</body>

<!-- Latest compiled JavaScript -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <!-- Owlcarousel JS  -->
    <script src="{{ asset('assets/owlcarousel/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>

</html>