@extends('layouts.admin')


@section('title', 'Dashboard | Admin')

@section('content')

    @include('layouts.shared.nav')

   <div class="main-content">

      		<div class="container-fluid">

                <!-- Header -->
                <div class="header mt-md-5">
                    <div class="header-body">

                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
                                    Dashboard
                                </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                    Admin Dashboard
                                </h1>
                            </div>


                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">

                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            Users
                                        </h6>

                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            {{ App\Site::CountUsers() }}
                                          </span>

                                      
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h2 fe fe-users text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 col-xl">

                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            Categories
                                        </h6>

                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                          {{ App\Category::CountCategories() }}
                                        </span>

                                      
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 col-xl">

                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            openings
                                        </h6>

                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                          {{ App\vendor::Countall() }}
                                        </span>

                                       
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 col-xl">

                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            Requests
                                        </h6>

                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                          {{ App\Vrequest::Countall() }}
                                        </span>

                                        
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>

                    </div>

                </div>




	      		 


            
	      		</div>
	      	</div>
   </div>


@endsection
