@extends('layouts.admin')

@section('title', 'Dashboard | Admin')

@section('content')

    @include('layouts.shared.nav')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">


            <div class="col-12 col-lg-10 col-xl-10">

                <!-- Header -->
                <div class="header mt-md-5">
                    <div class="header-body">

                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
                                    Categories
                                </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                    Create Opening Categories
                                </h1>
                            </div>

                            <div class="col-auto">

                                <!-- Buttons -->
                                <a href="{{ route('admin.category.index') }}" class="btn btn-primary ml-2">
                                    Cancel
                                </a>


                            </div>
                        </div>

                    </div>
                </div>


    <div class="card">
        <div class="card-body">
            <form method="POST" class="form mt-4" action="{{ route('admin.category.save') }}">
                @csrf


                <div class="form-group">
                    <label for="name" >{{ __('Title') }}</label>


                    <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required >

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                    @endif

                </div>

                <div class="form-group">
                    <label for="email">
                        {{ __('description') }}
                    </label>


                    <textarea name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                    @endif

                </div>




                <div class="form-group mb-0">

                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>

@endsection