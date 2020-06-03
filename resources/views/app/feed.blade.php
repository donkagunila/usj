@extends('layouts.main')

@section('title', 'Feed')

@section('contents')


<div class="container-fluid app">
	<div class="row">
		<div class="col-auto">
			@include('layouts._sidebar')
		</div>





		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-2">
						<div class="card-body">
							<div>
								<p>
									Post an event.
								</p>
							</div>

							<div>
								<form action="" 
									   class="">
									<textarea name=""
									          class="form-control bg-muted"></textarea>
									<hr>

									<footer class="d-flex justify-content-between align-items-center">
										<div class="avatar">
											<img src="https://i.pravatar.cc/100" 
												 class="avatar-img rounded-circle"
												 alt="">
										</div>
										<button type="submit" 
												class="btn btn-primary btn-sm">
											Post event
										</button>
									</footer>

								</form>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-12">
					@foreach($posts as $post)
						@include('_post')
					@endforeach
				</div>
			</div>
		</div>


		<div class="col">
			side
		</div>


	</div>
</div>





@endsection
