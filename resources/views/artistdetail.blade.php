@extends('layout.master')

@section('pagename', 'Artist Detail')

@section('content')

<!--########################## slider-section-start ##########################-->
<section class="slider-section py-md-5 py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="about-slider-image">
                    <img src="assets/images/slider01.jpg" alt="slider-img">
                </div>
            </div>
            <div class="col-lg-6 about-main">
                <div class="about-slider-info">
                    <div class="about-slider-head">
                        <h2>Yvonne Scott</h2>
                        <h3>MAKEUP ARTIST</h3>
                        <div class="stars-main">
                            <div class="slider-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <div class="start-num">
                                    <h4>(50)</h4>
                                </div>
                            </div>

                            <!-- Review Pop-up modal start-->
                            <div class="review-modal">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Review
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content pop-up">
                                            <div class="modal-header pop-head">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Submit Your Review</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body pop-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="review-image">
                                                            <img src="assets/images/owl-item-4.jpg" alt="review-img">
                                                            <div class="review-title">
                                                                <h3>Yvonne Scott</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="review-info">
                                                            <div class="review-head">
                                                                <h4>Rate Me</h4>
                                                                <div class="review-stars">
                                                                    <!-- <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i> -->
                                                                    <div class="rate">
                                                                        <input type="radio" id="star5" name="rate" value="5" />
                                                                        <label for="star5" title="text">5 stars</label>
                                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                                        <label for="star4" title="text">4 stars</label>
                                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                                        <label for="star3" title="text">3 stars</label>
                                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                                        <label for="star2" title="text">2 stars</label>
                                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                                        <label for="star1" title="text">1 star</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form>
                                                                <textarea rows="7" placeholder="Enter Your Review"></textarea>
                                                                <div class="review-btn">
                                                                    <button type="button" class="btn">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- Review Pop-up modal end-->
                        </div>    
                    </div>
                    <div class="about-discription">
                        <p>Some representative placeholder content for the first slide.
                            Some representative placeholder content for the first slide 
                            content for the first slide.</p>
                    </div>

                    <!-- Review-slider-start -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="about-review">
                                    <img src="assets/images/men-1.jpg" alt="">
                                    <div class="about-review-info">
                                        <h2>Robert</h2>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <p>Some representative placeholder content for the first slide.
                                            Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="about-review">
                                    <img src="assets/images/men-1.jpg" alt="">
                                    <div class="about-review-info">
                                        <h2>Robert</h2>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <p>Some representative placeholder content for the first slide.
                                            Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="about-review">
                                    <img src="assets/images/men-1.jpg" alt="">
                                    <div class="about-review-info">
                                        <h2>Robert</h2>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <p>Some representative placeholder content for the first slide.
                                            Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon about-prev" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon about-next" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <!-- Review-slider-end -->
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--########################## slider-section-end ##########################-->

<!--########################## package-section-start ##########################-->
<section class="package-section py-md-5 py-5">
    <div class="container">
        <div class="package-head text-center">
            <h2>Packages</h2>
        </div>

        <div class="owl-carousel owl-theme package-slider">
			<div class="item package-images">
				<img src="{{ asset('assets/images/owl-item-1.jpg')}}" alt="owl-image">
                <div class="owl-info">
                    <h2>SAMPLES</h2>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <h3>$90.00</h3>
                </div>
			</div>
			<div class="item package-images">
				<img src="{{ asset('assets/images/owl-item-2.jpg')}}" alt="owl-image">
                <div class="owl-info">
                    <h2>SAMPLES</h2>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <h3>$90.00</h3>
                </div>
			</div>
			<div class="item package-images">
				<img src="{{ asset('assets/images/about.jpg')}}" alt="owl-image">
                <div class="owl-info">
                    <h2>SAMPLES</h2>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <h3>$90.00</h3>
                </div>
			</div>
			<div class="item package-images">
				<img src="{{ asset('assets/images/owl-item-3.jpg')}}" alt="owl-image">
                <div class="owl-info">
                    <h2>SAMPLES</h2>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <h3>$90.00</h3>
                </div>
			</div>
			<div class="item package-images">
				<img src="{{ asset('assets/images/owl-item-4.jpg')}}" alt="owl-image">
                <div class="owl-info">
                    <h2>SAMPLES</h2>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <h3>$90.00</h3>
                </div>
			</div>
		</div>

    </div>
</section>
<!--########################## package-section-end ##########################-->

<!--########################## match-section-start ##########################-->
<section class="match-section py-md-5 py-5">
    <div class="container">
        <div class="match-head text-center mb-5">
            <h2>FIND YOUR</h2>
            <h3>PERFECT MATCH</h3>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card-image-main">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/card-1.jpg')}}" alt="card-img">
                    </div>
                    <div class="card-main">
                        <div class="card-info">
                            <h2>Jane Doe</h2>
                            <h3>Makeup Artist</h3>
                        </div>    
                        <div class="card-link">
                            <a href="">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-image-main">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/card-2.jpg')}}" alt="card-img">
                    </div>    
                    <div class="card-main">
                        <div class="card-info">
                            <h2>Jane Doe</h2>
                            <h3>Makeup Artist</h3>
                        </div>    
                        <div class="card-link">
                            <a href="">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-image-main mt-md-4 mt-lg-0">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/card-3.jpg')}}" alt="card-img">
                    </div>
                    <div class="card-main">
                        <div class="card-info">
                            <h2>Jane Doe</h2>
                            <h3>Makeup Artist</h3>
                        </div>    
                        <div class="card-link">
                            <a href="">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-image-main mt-md-4 mt-lg-0">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/card-4.jpg')}}" alt="card-img">
                    </div>
                    <div class="card-main">
                        <div class="card-info">
                            <h2>Jane Doe</h2>
                            <h3>Makeup Artist</h3>
                        </div>    
                        <div class="card-link">
                            <a href="">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--########################## match-section-end ##########################-->

@endsection