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
									 Opening Categories
								 </h1>
							 </div>

							 <div class="col-auto">

								 <!-- Buttons -->
								 <a href="{{ route('admin.category.create') }}" class="btn btn-primary ml-2">
									 Create Category
								 </a>


							 </div>
						 </div>

					 </div>
				 </div>


				<div class="card">
					<div class="card-header">
						<!-- Title -->
						<h4 class="card-header-title">
							Opening Categories
						</h4>


						<!-- Button -->
						<a href="#!" class="btn btn-sm btn-white">
							Export
						</a>

					</div>




						<div class="table-responsive mb-0" data-list='{"valueNames": ["category-name", "category-description", "category-status", "category-date"]}'>
							<table id="datatables" class="table table-sm table-nowrap table-hover card-table">
								 <thead>
			                        <tr>
			                          <th>
										  <a href="#" class="text-muted list-sort" data-sort="category-name">
											  Name
										  </a>
									  </th>
			                          <th>
										  <a href="#" class="text-muted list-sort" data-sort="category-description">
											  Description
										  </a>
									  </th>
			                          <th>
										  <a href="#" class="text-muted list-sort" data-sort="category-status">
											  Status
										  </a>
									  </th>
			                          <th>
										  <a href="#" class="text-muted list-sort" data-sort="category-date">
											  Date Created
										  </a>
									  </th>
			                          
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                           <th>Name</th>
			                          <th>Description</th>
			                          <th>Status</th>
			                          <th>Date Created</th>
			                          
			                          
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($categories as $category)
				                        <tr>
				                           	<td>{{ $category->title}}</td>
					                        <td>{{ $category->description}}</td>
					                        <td>{{ \App\Category::status($category->status) }}</td>
				                            <td>{{ $category->created_at->toFormattedDateString()}}</td>
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
