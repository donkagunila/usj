@extends('layouts.auth')




@section('content')


{{-- the left part --}}
        <div class="col-md-6 left-part">
            

            <div class="form-holder">
                    
                    <div class="form-title mb-11">
                        <div></div>

                        <div>
                            <h3>
                                Forget Password
                            </h3>
                            <p>
                               Oops, Lets recover that for you
                            </p>
                        </div>
                    </div>


                    <div class="form-body mt-4">
                        <form method="POST" action="{{ route($passwordEmailRoute) }}">
                            @csrf

                            <div>
                                <p class="mb-5 small">
                                    Enter your email address for recovery, we will send you an email shortly
                                </p>
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
                                           required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                          


                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 clear mb-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset') }}
                                </button>                               
                            </div>
                        </div>


                         <div class="form-group mb-0">
                            <div class="small text-center">
                                New to <b>Usajili?</b> <a href="{{ route('register')}}" class="text-primary">Create account</a>                    
                            </div>
                        </div>

                      </form>
                    </div>

            </div>
        </div>


@endsection
