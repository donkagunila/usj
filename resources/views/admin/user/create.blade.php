@extends('layouts.admin')


@section('title', 'Dashboard | Admin')

@section('content')

   <div class="content">
      	<div class="content mt-30">
      		<div class="container-fluid">
	      		<div class="row">
	      		  <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-text card-header-warning">
                    <div class="card-text">
                      <h4 class="card-title">Create User</h4>
                      <p class="card-category">Use the form below to create a user</p>
                    </div >
                  </div>
                  <div class="card-body">
                     <form method="POST" class="form mt-4" action="{{ route('admin.user.save') }}">
                            @csrf

                             
                            <div class="form-group">
                                <label for="name" >{{ __('Username') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required >

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



              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      User Statistics
                    </div>
                    <hr>

                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">Total Created
                         <span class="badge badge-primary badge-pill">{{ App\Site::CountUsers() }}</span>
                      </li>
                      <li class="list-group-item">Last Created</li>
                      <li class="list-group-item">Total Activated</li>
                    </ul>
                  </div>
                </div>
              </div>
	      		</div>
	      	</div>
      	</div>
   </div>


@endsection
