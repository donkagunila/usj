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
	      		</div>
	      	</div>
      	</div>
   </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                <div class="card-body">You are logged in!</div>
            </div>
        </div>
    </div>
</div>
@endsection
