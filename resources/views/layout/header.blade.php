<header class="navbar-sticky" id="nav">
    <section class="navbar-section">
        <div class="container m-container">
            <div class="head-main">
                <div class="icons-main">
                    <div class="d-lg-block d-none search-bar"><input placeholder="SEARCH">
                        <div class="search-icon"><i class="fa-search fas"></i></div>
                    </div>
                    <div class="logo" id="web-logo"><a href="index.html"><img alt="logo"
                                src="{{ asset($logo->url)}}" id="logo"></a></div>
                    @guest
                    <div class="nav-icons" id="icons-nav">
                        <div class="d-lg-block d-none wishlist">
                            <div class="wishlist-main"><a href="{{ route('login')}}">
                                    <h2>Sign In</h2>
                                </a><span>/</span><a href="{{ route('register')}}">
                                    <h2>Sign Up<i class="fa-solid fa-user"></i></h2>
                                </a></div>
                        </div>
                        <div class="d-lg-block d-none bag"><a href="">
                                <h2>Bag 0</h2><i class="fa-solid fa-bag-shopping"></i>
                            </a></div>
                    </div>
                    @endguest
                    @auth
                    <div class="nav-icons" id="icons-nav">
                        <div class="dropdown user-dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Hey </b>Johny
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('wishlist')}}"><i class="fa-solid fa-heart"></i> 
                                    My Favourite</a></li>
                                <li><a class="dropdown-item" href="{{ route('dashboard')}}"><i class="fa-solid fa-gauge"></i>
                                    My Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                            </ul>
                        </div>
                        <div class="d-lg-block d-none bag">
                            <a href="">
                                <h2>Bag 0</h2><i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
        <nav class="d-lg-block d-none navbar navbar-expand-lg navbar-main">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item mx-4"><a href="{{ route('index')}}" class="nav-link">home</a>
                <li class="nav-item mx-4 dropdown dropdown-hover position-static"><a href="#"
                        class="nav-link dropdown-toggle" aria-expanded="false" data-mdb-toggle="dropdown"
                        id="navbarDropdown" role="button">pages</a>
                    <div class="dropdown-menu dropdown-main" aria-labelledby="navbarDropdown">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="list-group list-group-flush drop-content"><a href=""
                                        class="list-group-item list-group-item-action"><img alt="dropdown-img"
                                            src="assets/images/drop-img-1.jpg">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="list-group list-group-flush drop-content"><a href=""
                                        class="list-group-item list-group-item-action"><img alt="dropdown-img"
                                            src="assets/images/drop-img-1.jpg">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="list-group list-group-flush drop-content"><a href=""
                                        class="list-group-item list-group-item-action"><img alt="dropdown-img"
                                            src="assets/images/drop-img-1.jpg">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="list-group list-group-flush drop-content"><a href=""
                                        class="list-group-item list-group-item-action"><img alt="dropdown-img"
                                            src="assets/images/drop-img-1.jpg">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                <li class="nav-item mx-4"><a href="#" class="nav-link">shop</a>
                <li class="nav-item mx-4 dropdown dropdown-hover position-static"><a href="#"
                        class="nav-link dropdown-toggle" aria-expanded="false" data-mdb-toggle="dropdown"
                        id="navbarDropdown" role="button">store</a>
                    <div class="dropdown-menu dropdown-main-three" aria-labelledby="navbarDropdown">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href=""
                                        class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href=""
                                        class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href=""
                                        class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href=""
                                        class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                <li class="nav-item mx-4"><a href="#" class="nav-link">portfolio</a>
                <li class="nav-item mx-4 dropdown dropdown-hover position-static"><a href="#"
                        class="nav-link dropdown-toggle" aria-expanded="false" data-mdb-toggle="dropdown"
                        id="navbarDropdown" role="button">blog</a>
                    <div class="dropdown-menu dropdown-main-three" aria-labelledby="navbarDropdown">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href=""
                                        class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href=""
                                        class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href=""
                                        class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                            <div class="col-md-3">
                                <div class="list-group list-group-flush drop-content-three"><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a><a href="" class="list-group-item list-group-item-action">
                                        <h2>Mega Menu</h2>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                <li class="nav-item mx-4"><a href="{{ route('contact')}}" class="nav-link">Contact Us</a>
            </ul>
        </nav>
        <div class="d-block d-lg-none side-navbar">
            <div class="container">
                <div class="offcanvas-main">
                    <div class="offcanvas-btn"><button class="btn btn-primary" type="button"
                            aria-controls="offcanvasExample" data-bs-target="#offcanvasExample"
                            data-bs-toggle="offcanvas"><i class="fa-solid fa-bars"></i></button></div>
                    <div class="canvas-main offcanvas offcanvas-start" aria-labelledby="offcanvasExampleLabel"
                        id="offcanvasExample" tabindex="-1">
                        <div class="canvas-head offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a href=""><img alt="logo"
                                        src="{{ asset($logo->url)}}"></a></h5><button class="btn-close text-reset"
                                type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
                        </div>
                        <div class="canvas-body offcanvas-body">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"><a href="{{ route('index')}}" class="nav-link">home</a>
                                <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown">pages</a>
                                    <div class="dropdown-menu side-content"><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a></div>
                                <li class="nav-item"><a href="" class="nav-link">shop</a>
                                <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown">store</a>
                                    <div class="dropdown-menu side-content"><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a></div>
                                <li class="nav-item"><a href="" class="nav-link">portfolio</a>
                                <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown">Blog</a>
                                    <div class="dropdown-menu side-content"><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a><a href="" class="dropdown-item">mega menu</a><a href=""
                                            class="dropdown-item">mega menu</a><a href="" class="dropdown-item">mega
                                            menu</a></div>
                                <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact Us</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>