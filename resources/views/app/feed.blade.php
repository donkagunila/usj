@extends('layouts.main')

@section('title', 'Feed')

@section('contents')


<div class="container-fluid app">
	<div class="row">
		<div class="col-auto">
			<div class="card bg-primary">
				<div class="card-body">
					
	                  

							<div class="row align-items-center">
								<div class="col-auto">						
									<div class="avatar avatar-lg">
										<img src="{{ asset('uploads/avatar/avatar.png')}}" class="avatar-img rounded-circle" alt="">
									</div>
								</div>

								<div class="col-6 ml-n5">
									 <p class="mb-0 text-capitalize text-white">
			                          {{ Auth::User()->username }}
			                        </p>

			                        <!-- Text -->
			                        <a class="d-block small text-truncate text-white">
			                          {{ Auth::User()->email }}
			                        </a>
								</div>
							</div>

							<hr>

							<div class="row text-white text-center">
								<div class="col">
									<span class="text-white text-center">5 <small>Enrolled</small></span>
								</div>

								<div class="col">
									<span class="text-white text-center">12 <small>Posts</small></span>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-auto">
									<ul class="list mb-0 sb-lists">
									  <li class="list-item">
									    <a class="list-link text-white {{ Request::is('feed/*') ? 'active' : ''}} " href="{{ route('home') }}">
									    	<i class="fe fe-life-buoy"></i>
									    </a>
									  </li>

									  <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home') }}">
									    	<i class="fe fe-sunrise"></i>
									    </a>
									  </li>

									  <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home') }}">
									    	<i class="fe fe-link-2"></i>
									    </a>
									  </li>

									  <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home') }}">
									    	<i class="fe fe-message-circle"></i>
									    </a>
									  </li>

									  <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home') }}">
									    	<i class="fe fe-paperclip"></i>
									    </a>
									  </li>
									</ul>


								</div>


								<div class="col-6 ml-n5">
									<ul class="list mb-0 sb-lists-words">
									  <li class="list-item ">
									    <a class="list-link text-white {{ Request::is('feed/*') ? 'active' : ''}}" href="{{ route('home')}}">Feed</a>
									  </li>

									   <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home')}}">Explore</a>
									  </li>

									   <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home')}}">Enrollement</a>
									  </li>

									   <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home')}}">Messages</a>
									  </li>

									   <li class="list-item">
									    <a class="list-link text-white" href="{{ route('home')}}">Reports</a>
									  </li>
									  
									</ul>
								</div>
							</div>

				</div>
			</div>
		</div>





		<div class="col-auto">


		


			<section class="main-section">
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		{{-- <div class="row">
		    <div class="col">
		        <div class="alert alert-light alert-elevate fade show" role="alert">
		            <div class="alert-icon">
		            	<i class="fa fa-list"></i>
		            </div>
		            <div class="alert-text">
		                Minimalistic but perfect custom scrollbar plugin.
		                <br>
						For more info please visit the plugin's <a class="kt-link kt-font-bold" href="https://rgalus.github.io/sticky-js/" target="_blank">Demo Page</a> or 
						<a class="kt-link kt-font-bold" href="https://github.com/rgalus/sticky-js" target="_blank">Github Repo</a>.
		            </div>
		        </div>
		    </div>
		</div>
 --}}


	<div class="row" data-sticky-container="">
   
		@include('app.feed.menu')

    <div class="col-lg-6 col-xl-8">
    	

    	<div class="kt-portlet" id="all">
            <div class="kt-portlet__body">
		       
		       
		      
		         <p>
		        	Feed will come here
		        </p>
		    </div>
		</div>

		{{-- <div class="kt-portlet" id="schools">
            <div class="kt-portlet__body">
		        <p>
		        	here <br>
		        	
		        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		        </p>
		        
		       
		    </div>
		</div> --}}
    </div>
   {{--  <div class="col-lg-3 col-xl-2">
    	<div class="kt-portlet sticky" data-sticky="true" data-margin-top="100" data-sticky-for="1023" data-sticky-class="kt-sticky" style="">
            <div class="kt-portlet__body">
                <p>
		        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
		        </p>
		        <p>
		        	 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
		        </p>
		        <p>
		        	Recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		        </p>
            </div>
        </div>
    </div> --}}
</div>



	</div>
</section>

		</div>
	</div>
</div>





@endsection
