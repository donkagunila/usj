@extends('layouts.auth')

@section('title', 'Register')

@section('content')


        {{-- the left part --}}
        <div class="col-md-6 left-part">
            

            <div class="form-holder">
                    
                    <div class="form-title mb-11">
                        <div></div>

                        <div>
                            <h3>
                                Sign Up
                            </h3>
                            <p>
                                Hop in, Let's get you enrolled
                            </p>
                        </div>
                    </div>


                    <div class="form-body mt-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-group mb-4">

                                <div class="input-group-prepend">
                                    <span class="input-group-text {{ $errors->has('username') ? ' is-invalid' : '' }}">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>

                                
                                     <input id="username" 
                                             type="text" 
                                             class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" 
                                             name="username" 
                                             value="{{ old('username') }}" 
                                             placeholder="Username" 
                                             required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

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
                                            required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>



                            <div class="input-group mb-4">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                               
                                <input id="password" 
                                       type="password" 
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                       name="password" 
                                       placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            


                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 clear mb-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>                               
                            </div>
                        </div>

                         <div class="form-group mb-0">
                            <div class="small text-center">
                                Have an account? <a href="{{ route('login')}}" class="text-primary">Sign In</a>                    
                            </div>
                        </div>

                      </form>
                    </div>

            </div>
        </div>



@endsection
