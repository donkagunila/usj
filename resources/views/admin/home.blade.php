@extends('layouts.admin')


@section('title', 'Dashboard | Admin')

@section('content')

   <div class="content">
      	<div class="content mt-30">
      		<div class="container-fluid">
	      		<div class="row">
	      		 <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-primary card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">people</i>
                                </div>
                                <p class="card-category">Users</p>
                                <h3 class="card-title">{{ App\Site::CountUsers() }}</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons text-primary">add</i>
                                  <a href="{{ route('admin.user.add')}}">Add Users</a>
                                </div>
                              </div>
                            </div>
              </div>


               <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">category</i>
                                </div>
                                <p class="card-category">Categories</p>
                                <h3 class="card-title">{{ App\Category::CountCategories() }}</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats stats-success text-success">
                                  <i class="material-icons text-success">category</i>
                                  <a href="{{ route('admin.category.all')}}"> See Categories</a>
                                </div>
                              </div>
                            </div>
              </div>


               <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">insert_invitation</i>
                                </div>
                                <p class="card-category">Requests</p>
                                <h3 class="card-title">{{ App\Vrequest::Countall() }}</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats stats-success text-success">
                                  <i class="material-icons text-success">visibility</i>
                                  <a href="{{ route('admin.category.all')}}"> View Requests</a>
                                </div>
                              </div>
                            </div>
              </div>


              <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">group</i>
                                </div>
                                <p class="card-category">Vendors</p>
                                <h3 class="card-title">{{ App\vendor::Countall() }}</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats stats-success text-success">
                                  <i class="material-icons text-secondary">list</i>
                                  <a href="{{ route('admin.category.all')}}"> Vendor list</a>
                                </div>
                              </div>
                            </div>
              </div>


            
	      		</div>
	      	</div>
      	</div>
   </div>


@endsection
