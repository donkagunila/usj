@extends('layouts.admin')

@section('title', 'Dashboard | Admin')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			 <div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
					 <div class="card-icon">
	                    <i class="material-icons">people</i>
	                  </div>
	                  <h4 class="card-title">All Users</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">
						<div class="toolbar">
							
						</div>

						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								 <thead>
			                        <tr>
			                          <th>Name</th>
			                          <th>Description</th>
			                          <th>Date Created</th>
			                          
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                           <th>Name</th>
			                          <th>Description</th>
			                          <th>Date Created</th>
			                          
			                          
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($categories as $category)
				                        <tr>
				                           	<th>{{ $category->title}}</th>
					                        <th>{{ $category->description}}</th>
				                            <th>{{ $category->created_at->toFormatedDaeString()}}</th>
				                        </tr>
				                      @endforeach
				                        
				                    </tbody>
							</table>
						</div>
					</div>
				</div>
				{{-- end of card --}}
			 </div>
		</div>
	</div>
    
</div>
@endsection
