@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="container-fluid">
    <div class="row">
        {{-- the left part --}}
        <div class="col-md-6 left-part">
            

            <div class="form-holder">
                    
                    <div class="form-title mb-11">
                        <div></div>

                        <div>
                            <h3>
                                Sign In
                            </h3>
                            <p>
                                Welcome back, Let's get you enrolled
                            </p>
                        </div>
                    </div>


                    <div class="form-body mt-5">
                        <form method="POST" action="{{ route($loginRoute) }}">
                            @csrf

                            <div class="input-group mb-4">

                                <div class="input-group-prepend">
                                    <span class="input-group-text {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>

                                
                                    <input id="email" 
                                           type="email" 
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           placeholder="Email Address" 
                                           required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="input-group mb-1">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                               
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="forgot-link mb-5">
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link text-right" href="{{ route($forgotPasswordRoute) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>


                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 clear">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign In') }}
                                </button>                               
                            </div>
                        </div>
                      </form>
                    </div>

            </div>
        </div>

        {{-- the right part --}}
        <div class="col-md-6 right-part d-none d-md-block">
            <div id="particles-js"></div>

            <div class="slider-holder">
                <div id="onboard" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#onboard" data-slide-to="0" class="active"></li>
                        <li data-target="#onboard" data-slide-to="1"></li>
                        <li data-target="#onboard" data-slide-to="2"></li>
                    </ol>


                  <div class="carousel-inner slider-content">
                    <div class="carousel-item active">
                        <div class="slider-area">
                            <div class="slider-image mb-5">
                                <img src="{{ asset('img/ease.png')}}" class="d-block " alt="...">
                            </div>

                            <div class="slider-title mb-3">
                                <h4 class="text-white">
                                    Enroll with Ease
                                </h4>
                            </div>

                            <div class="slider-words mb-11">
                                <p class="text-white">
                                    Usajili enrolls ou easily, <br> Neither physical availability nor paperwork is required.
                                </p>
                            </div>
                        </div>

                    </div>


                    <div class="carousel-item">
                       <div class="slider-area">
                            <div class="slider-image mb-5">
                                <img src="{{ asset('img/fast.png')}}" class="d-block " alt="...">
                            </div>

                            <div class="slider-title mb-3">
                                <h4 class="text-white">
                                    Fast Enrollment
                                </h4>
                            </div>

                            <div class="slider-words mb-11">
                                <p class="text-white">
                                    With a click of a button, <br> usajili enrolls you instantly.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="slider-area">
                            <div class="slider-image mb-5">
                                <img src="{{ asset('img/multiple.png')}}" class="d-block " alt="...">
                            </div>

                            <div class="slider-title mb-3">
                                <h4 class="text-white">
                                    Multiple Enrolments
                                </h4>
                            </div>

                            <div class="slider-words mb-11">
                                <p class="text-white">
                                    Usajili enrolls you in schools, trainings, Marathons<br>  search it, usajili enrolls you.
                                </p>
                            </div>
                        </div>
                    </div>


                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
