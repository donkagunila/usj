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
                      <h4 class="card-title">Create Opening</h4>
                      <p class="card-category">Use the form below to create a new Opening</p>
                    </div >
                  </div>
                  <div class="card-body">
                     <form method="POST" class="form mt-4" action="{{ route('admin.opening.save') }}">
                            @csrf

                             
                            <div class="form-group">
                                <label for="name" >{{ __('title') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required >

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('description') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required >

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('cost') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}" name="cost" value="{{ old('cost') }}" required >

                                    @if ($errors->has('cost'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cost') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('start') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}" name="start" value="{{ old('start') }}" required >

                                    @if ($errors->has('start'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('start') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('end') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('end') ? ' is-invalid' : '' }}" name="end" value="{{ old('end') }}" required >

                                    @if ($errors->has('end'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('end') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('poster') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('poster') ? ' is-invalid' : '' }}" name="poster" value="{{ old('poster') }}" required >

                                    @if ($errors->has('poster'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('poster') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('certificate') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('certificate') ? ' is-invalid' : '' }}" name="certificate" value="{{ old('certificate') }}" required >

                                    @if ($errors->has('certificate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('certificate') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('vacancy') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('vacancy') ? ' is-invalid' : '' }}" name="vacancy" value="{{ old('vacancy') }}" required >

                                    @if ($errors->has('vacancy'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('vacancy') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('fee') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('fee') ? ' is-invalid' : '' }}" name="fee" value="{{ old('fee') }}" required >

                                    @if ($errors->has('fee'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fee') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('promotion') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('promotion') ? ' is-invalid' : '' }}" name="promotion" value="{{ old('promotion') }}" required >

                                    @if ($errors->has('promotion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('promotion') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('terms') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('terms') ? ' is-invalid' : '' }}" name="terms" value="{{ old('terms') }}" required >

                                    @if ($errors->has('terms'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('terms') }}</strong>
                                        </span>
                                    @endif
                               
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
                         <span class="badge badge-primary badge-pill">{{ App\Opening::CountOpening() }}</span>
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
