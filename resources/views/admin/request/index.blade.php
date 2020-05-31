@extends('layouts.admin')

@section('title', 'Dashboard | Admin')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="card-title">
									<h4>Requests</h4>
									<div class="float-right">
										<a href="{{ route('admin.opening.create')}}" class="btn btn-primary">
											<i class="material-icons">add</i>
											Create
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			 <div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
					 <div class="card-icon">
	                    <i class="material-icons">people</i>
	                  </div>
	                  <h4 class="card-title">All Openings</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">
						<div class="toolbar">
							
						</div>

						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								 <thead>
			                        <tr>
			                          <th>Username</th>
			                          <th>Description</th>
			                          <th>Cost</th>
			                          <th>Start</th>
			                          <th>End</th>
			                          
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                          <th>Title</th>
			                          <th>Description</th>
			                          <th>Cost</th>
			                          <th>Start</th>
			                          <th>End</th>
			                          
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($requests as $request)
				                        <tr>
				                          <td>{{ $request->title }}</td>
				                          <td>{{ $request->profile->is_vendor }}</td>
				                          <td><a href="mailto:{{ $request->email}}">{{ $request->email}}</a></td>
				                          <td>{{ $request->created_at->toFormattedDateString() }}</td>
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
