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
									 Users
								 </h6>

								 <!-- Title -->
								 <h1 class="header-title">
									 All Users
								 </h1>
							 </div>

							 <div class="col-auto">

								 <!-- Buttons -->
								 <a href="{{ route('admin.user.add') }}" class="btn btn-primary ml-2">
									 Create User
								 </a>


							 </div>
						 </div>

					 </div>
				 </div>

				<div class="card">
					<div class="card-header">

						<!-- Title -->
						<h4 class="card-header-title">
							All Users
						</h4>

						<!-- Button -->
						<a href="#!" class="btn btn-sm btn-white">
							Export
						</a>
					</div>





						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								 <thead>
			                        <tr>
			                          <th>Name</th>
			                          <th>Type</th>
			                          <th>Email</th>
			                          <th>Registered</th>
			                          
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                          <th>Name</th>
			                          <th>Type</th>
			                          <th>Email</th>
			                          <th>Registered</th>
			                          
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($users as $user)
				                        <tr>
				                          <td>{{ $user->username }}</td>
				                          <td>{{ $user->profile->is_vendor }}</td>
				                          <td><a href="mailto:{{ $user->email}}">{{ $user->email}}</a></td>
				                          <td>{{ $user->created_at->toFormattedDateString() }}</td>
				                        </tr>
				                      @endforeach
				                        
				                    </tbody>
							</table>
						</div>
				</div>
				{{-- end of card --}}
			 </div>
		</div>
	</div>
    
</div>
@endsection
