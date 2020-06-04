@extends('layouts.main')

@section('title', 'Feed')

@section('contents')


<div class="container-fluid app">
	<div class="row">
		<div class="col-auto">
			@include('layouts._sidebar')
		</div>





		<div class="col-md-7">
			<div class="d-flex justify-content-center">
				<div class="row">
				<div class="col-md-12">
					<div class="card mb-2">
						<div class="card-body">
							<div>
								<p>
									Share an opening
								</p>
							</div>

							<div>
								<button type="botton" 
									   class="form-control input-rounded bg-muted pointer"
									   data-toggle="modal" data-target="#postModal">
							    </button>
							</div>

							{{-- <div>
								<form action="{{ route('post.create') }}"
									  method="POST" 
									   class="">

									@csrf

									<textarea name="body"
									          class="form-control bg-muted"
									></textarea>

									<hr>

									<footer class="d-flex justify-content-between align-items-center">
										<div class="avatar">

											<img src="{{ auth()->user()->avatar }}" 
												 class="avatar-img rounded-circle"
												 alt=""
										    >

										</div>
										<button type="submit" 
												class="btn btn-primary btn-sm">
											Post event
										</button>
									</footer>

								</form>

								@error('body')
									<p class="small text-danger">{{ $message }}</p>
								@enderror
							</div> --}}
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
		</div>


		<div class="col">
			side
		</div>


	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Share Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
								<form action="{{ route('post.create') }}"
									  method="POST" 
									   class="">

									@csrf

									<textarea name="body"
									          class="form-control bg-muted"
									></textarea>

									<hr>

									<footer class="d-flex justify-content-between align-items-center">
										<div class="avatar">

											<img src="{{ auth()->user()->avatar }}" 
												 class="avatar-img rounded-circle"
												 alt=""
										    >

										</div>
										<button type="submit" 
												class="btn btn-primary btn-sm">
											Post event
										</button>
									</footer>

								</form>

								@error('body')
									<p class="small text-danger">{{ $message }}</p>
								@enderror
							</div>
      </div>
      {{-- <div class="modal-footer"> --}}
{{--         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      {{-- </div> --}}
    </div>
  </div>
</div>





@endsection
