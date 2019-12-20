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
				                          <td>{{ $user->is_vendor }}</td>
				                          <td><a href="mailto:{{ $user->email}}">{{ $user->email}}</a></td>
				                          <td>{{ $user->created_at->toFormattedDateString() }}</td>
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
