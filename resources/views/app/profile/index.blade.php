@extends('layouts.app')

@section('title', 'Profile')

@section('content')


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						{{ Auth::User()->username }}


					</div>
				</div>
			</div>


			<div class="col-md-8">
				<div class="float-right">
					<a class="btn btn-primary" href="{{ route('vendor.join') }}">Become A vendor</a>
				</div>
			</div>
		</div>
	</div>
@endsection