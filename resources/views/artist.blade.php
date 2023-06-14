@extends('layout.master')

@section('pagename', 'Artist List')

@section('content')

<!--########################## our-men-section-start ##########################-->
<section class="men-section py-md-5 py-5">
    <div class="container">
        <!----- filters-start ----->
        <div class="filters mb-5">
            <div class="search-filters">           
                <div class="filter-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="search-input-main">
                    <div class="search-input">
                        <input type="text" id="searchbar" placeholder="Search for">
                    </div>
                    <div class="search-input">           
                        <input type="text" id="locationbar" placeholder="in (E.g. Chandigarh)">
                    </div>  
                    <select class="form-select">
                        <option selected disabled>Gender</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                    </select>  
                    <div class="filters-btn">
                        <button type="button" class="btn">find</button>
                    </div>    
                </div> 
            </div>  

            <div class="search-list" id="search_dd">
                <div class="search-item">
                    <ul>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                    </ul>
                    <ul>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                    </ul>
                    <ul>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                        <li><a href=""><i class="fa-solid fa-house"></i>Wedding Venues</a></li>
                    </ul>
                </div>
            </div>

            <div class="location-list" id="location">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Region</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">International</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <div class="location-items">
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                            </ul>    
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                            </ul>     
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                            </ul> 
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                            </ul>    
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                            </ul>     
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                            </ul>    
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
                        <div class="location-items">
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                            </ul>    
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                            </ul>     
                            <ul>
                                <li><a href=""><b>Andaman and Nicobar</b></a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Nicobar</a></li>
                                <li><a href="">South Andaman</a></li>
                                <li><a href="">Andaman and Nicobar</a></li>
                            </ul>    
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!----- filters-end ----->

        <!----- Mens-card-start ----->
        <div class="men-head text-center">
            <h2>OUR MEN'S</h2>
        </div>

        <!----- Mens-card-start ----->
        <div class="row">
            @foreach($data as $artist)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp" class="card-img-top" />
                  <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="mb-0">{{ $artist->name }}</h5>
                      <h5 class="text-dark mb-0"><i class="fa-solid fa-heart"></i></h5>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                      <div class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--########################## our-men-section-end ##########################-->

@endsection