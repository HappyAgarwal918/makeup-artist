@extends('layout.master')

@section('pagename', 'Sign Up')

@section('content')

<!--########################## Sign-Up-section-start ##########################-->
<section class="log-in-section py-md-5 py-5">
    <div class="container">

        <div class="log-link text-center mb-3">
            <h5>Already Registered <a href="{{ route('login')}}">Login Now</a></h5>
        </div>

        <div class="login-tabs">
            <h4>Register Now</h4>
            <div class="log-heading">
                <h2>Welcome! Register for an account</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="login-form">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Your Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>    
                        <div class="col-md-6">
                            <div class="login-form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email or Phone No" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="login-form">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Your Password" required autocomplete="new-password">
                            </div>
                        </div> 
                        
                        <div class="col-md-12 mx-auto">
                            <div class="login-btn">
                                <button type="submit" class="btn">{{ __('Register') }}</button>
                            </div>
                        </div>
                        <!-- <div class="col-md-7">
                            <div class="login-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Don't want any promotions by email
                                    </label>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </form>

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="or-word">
                            <h2>OR</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-4">
                        <div class="login-icons-one">
                            <a href="">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-4">
                        <div class="login-icons-two">
                            <a href="">
                                <i class="fa-brands fa-google"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-4">
                        <div class="login-icons-three">
                            <a href="">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

    </div>
</section>
<!--########################## Sign-Up-section-end ##########################-->

@endsection
