@extends('layouts.app')

@section('title', 'Enrolled Openings')

@section('content')

<section class="main-section">
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		
<div class="kt-portlet kt-portlet--mobile">
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Enrolled 
				<small>All Enrolled Openings</small>
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-wrapper">
	<a href="#" class="btn btn-clean kt-hidden">
				Back to dashboard
			</a>
			<a href="#" class="btn btn-clean btn-bold btn-upper btn-font-sm kt-hidden">
				<i class="la la-long-arrow-left"></i>
				Back
			</a>
			
			
			
		</div>		</div>
	</div>

	<div class="kt-portlet__body">


		<!--begin: Search Form -->
		<div class="dataTables_wrapper dt-bootstrap4">
			<table id="example" class="table table-striped dataTable display" style="width:100%">
				<thead>
		            <tr role="row">
		                <th>S/N</th>
		                <th>Title</th>
		                <th>Cost</th>
		                <th>Start</th>
		                <th>End</th>
		                <th>Status</th>
		            </tr>
		        </thead>

		          <tbody>

		          	@foreach($enrollments as $enrollment)
		            <tr>
		                <td>{{ $n++ }}</td>
		                <td>{{ $enrollment->title }}</td>
		                <td>{{ $enrollment->cost }}</td>
		                <td>{{ $enrollment->start_date}}</td>
		                <td>{{ $enrollment->end_date }}</td>
		                <td>{{ $enrollmenr->status }}</td>
		            </tr>
		            @endforeach


			</table>
		</div>
	</div>

		
	
</div>



	</div>
</section>

@endsection

@section('scripts')

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>
	
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

@endsection
