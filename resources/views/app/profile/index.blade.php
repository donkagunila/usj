@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<section class="main-section">


	<div class="container">
		<div class="row">
			
			@include('inc.app.sidebar')

			@if($requested == 0)
				<div class="col-md-8">
					<div class="float-right">
						<a class="btn btn-primary" href="#">Waiting for response</a>
					</div>
				</div>
			@elseif(!$requested == 1)
				<div class="col-md-8">
					<div class="float-right">
						<a class="btn btn-primary" href="{{ route('vendor.join') }}">Become A vendor</a>
					</div>
				</div>
			@endif
		</div>
	</div>

</section>
@endsection