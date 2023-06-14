@extends('layout.master')

@section('pagename', 'Log In')

@section('content')

<!--########################## log-in-section-start ##########################-->
<section class="log-in-section py-md-5 py-5">
    <div class="container">

        <div class="log-link text-center mb-3">
            <h5>If you have no account <a href="{{ route('register')}}">Sign-Up now</a></h5>
        </div>

        <div class="login-tabs">
            <h4>Login Now</h4>
            <div class="log-heading">
                <h2>Login with your email & password</h2>
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="login-form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="login-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="login-btn">
                                <button type="submit" class="btn">{{ __('Login') }}</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="login-pswd">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
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
<!--########################## log-in-section-end ##########################-->

@endsection
