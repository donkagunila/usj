@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 auth-cover" style="background-image: url({{ asset('assets/img/covers/cover-4.jpg') }});">
            {{-- the left part --}}

            <div class="row">


            <div class="col-md-6">
                
            </div>
            <div class="col-md-4 offset-md-1 mt-4 pt-5">
                <div class="card mt-4">
                    <div class="card-body p-5">
                        <h5 class="card-title">
                            Register
                        </h5>
                        <p>
                            Have an account? <a href="{{ route('login')}}">Login</a>
                        </p>
                   
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                             
                            <div class="form-group">
                                <label for="name" >{{ __('Username') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    {{ __('E-Mail Address') }}
                                </label>

                               
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                              
                            </div>


                           

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                               
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                
                            </div>

                            <div class="form-group mb-0">
                                
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>

        </div>
    </div>
</div>
@endsection
