@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<section class="main-section">


	<div class="container">
		<div class="row">
			
			@include('inc.app.sidebar')

			<div class="col-md-8">
				<div class="float-right">
					<a class="btn btn-primary" href="{{ route('vendor.join') }}">Become A vendor</a>
				</div>
			</div>
		</div>
	</div>

</section>
@endsection