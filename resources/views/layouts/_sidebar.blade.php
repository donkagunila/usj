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