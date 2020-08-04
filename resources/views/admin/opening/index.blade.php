@extends('layouts.admin')

@section('title', 'Dashboard | Admin')

@section('content')

	@include('layouts.shared.nav')

<div class="main-content">
	<div class="container-fluid">
		<div class="row justify-content-center">

			<div class="col-12 col-lg-10 col-xl-8">

				 <!-- Header -->
                <div class="header mt-md-5">
                    <div class="header-body">

                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
                                    Openings
                                </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                    All Openings
                                </h1>
                            </div>

                            <div class="col-auto">

				                <!-- Button -->
				                <a href="#!" class="btn btn-primary lift">
				                  Create Opening
				                </a>

				              </div>


                        </div>

                    </div>


                </div>

				<div class="card">
					<div class="card-header">					
	                  <h4 class="card-header-title">All Openings</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">
	

						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								 <thead>
			                        <tr>
			                          <th>Title</th>
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

			                       	@foreach($openings as $opening)
				                        <tr>
				                          <td>{{ $opening->title }}</td>
				                          <td>{{ $opening->profile->is_vendor }}</td>
				                          <td><a href="mailto:{{ $opening->email}}">{{ $opening->email}}</a></td>
				                          <td>{{ $opening->created_at->toFormattedDateString() }}</td>
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
