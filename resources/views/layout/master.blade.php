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

<!--########################## about-banner-section-start ##########################-->
<section class="about-section">
    <div class="container">

        <nav aria-label="breadcrumb" class="about-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('pagename')</li>
            </ol>
        </nav>

    </div>
</section>
<!--########################## about-banner-section-end ##########################-->

    @yield('content')

    @include('layout.footer')

</body>

<!-- Latest compiled JavaScript -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

<!-- Owlcarousel JS  -->
<script src="{{ asset('assets/owlcarousel/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>

<script>

    // header java script
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("web-logo").style.top = "88px";
        document.getElementById("web-logo").style.left = "0px";
        document.getElementById("web-logo").style.textAlign = "unset";
        document.getElementById("web-logo").style.margin = "unset";
        document.getElementById("logo").style.maxWidth = "50px"; 
        document.getElementById("logo").style.marginTop = "-12px"; 
        document.getElementById("icons-nav").style.top = "94px";
      } else {
        document.getElementById("web-logo").style.top = "0px";
        document.getElementById("web-logo").style.left = "0px";
        document.getElementById("web-logo").style.textAlign = "center";
        document.getElementById("web-logo").style.margin = "auto";
        document.getElementById("logo").style.maxWidth = "110px"; 
        document.getElementById("logo").style.marginTop = "-30px";
        document.getElementById("icons-nav").style.top = "6px";
      }
    }

    // search items java script
    document.getElementById("searchbar").onclick = function() {Functionsearch()};

    function Functionsearch() {
        document.getElementById("search_dd").classList.toggle("show");
    }

    // location items java script
    document.getElementById("locationbar").onclick = function() {Functionlocation()};

    function Functionlocation() {
        document.getElementById("location").classList.toggle("show");
    }

</script>

</html>