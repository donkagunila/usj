@extends('layouts.admin')


@section('title', 'Create Opening | Admin')

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
                                    Create Opening
                                </h1>
                            </div>

                            <div class="col-auto">

                        <!-- Button -->
                        <a href="{{ route('admin.opening.all') }}" class="btn btn-primary lift">
                          Cancel
                        </a>

                      </div>


                        </div>

                    </div>


                </div>


                <div class="card">

                  <div class="card-body">
                  <!-- Form -->
                  <form class="tab-content py-6" id="wizardSteps">
                    <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne">

                      <!-- Header -->
                      <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                          <!-- Pretitle -->
                          <h6 class="mb-4 text-uppercase text-muted">
                            Step 1 of 3
                          </h6>

                          <!-- Title -->
                          <h1 class="mb-3">
                            Basic Information
                          </h1>

                          <!-- Subtitle -->
                          <p class="mb-5 text-muted">
                            This is where the customer understands you, make it count.
                          </p>

                        </div>
                      </div> <!-- / .row -->


                      <!-- Divider -->
                      <hr class="my-5">

                      <!-- Footer -->
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Button -->
                          <button class="btn btn-lg btn-white" type="reset">Cancel</button>

                        </div>
                        <div class="col text-center">

                          <!-- Step -->
                          <h6 class="text-uppercase text-muted mb-0">Step 1 of 3</h6>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepTwo">Continue</a>

                        </div>
                      </div>

                    </div>
                    <div class="tab-pane fade" id="wizardStepTwo" role="tabpanel" aria-labelledby="wizardTabTwo">

                      <!-- Header -->
                      <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                          <!-- Pretitle -->
                          <h6 class="mb-4 text-uppercase text-muted">
                            Step 2 of 3
                          </h6>

                          <!-- Title -->
                          <h1 class="mb-3">
                            Costs and Time
                          </h1>

                          <!-- Subtitle -->
                          <p class="mb-5 text-muted">
                            Set the Cost and Time constraints of the opening.
                          </p>

                        </div>
                      </div> <!-- / .row -->

                      <!-- Divider -->
                      <hr class="mt-5 mb-5">


                      <!-- Divider -->
                      <hr class="my-5">

                      <!-- Footer -->
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Button -->
                          <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepOne">Back</a>

                        </div>
                        <div class="col text-center">

                          <!-- Step -->
                          <h6 class="text-uppercase text-muted mb-0">Step 3 of 3</h6>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepThree">Continue</a>

                        </div>
                      </div>

                    </div>
                    <div class="tab-pane fade" id="wizardStepThree" role="tabpanel" aria-labelledby="wizardTabThree">

                      <!-- Header -->
                      <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                          <!-- Pretitle -->
                          <h6 class="mb-4 text-uppercase text-muted">
                            Step 1 of 3
                          </h6>

                          <!-- Title -->
                          <h1 class="mb-3">
                            Basic Information
                          </h1>

                          <!-- Subtitle -->
                          <p class="mb-5 text-muted">
                            This is where the customer understands you, make it count.
                          </p>

                        </div>
                      </div> <!-- / .row -->


                      <!-- Divider -->
                      <hr class="mt-5 mb-5">

                      <div class="row">
                        <div class="col-12 col-md-6">

                          <!-- Private project -->
                          <div class="form-group">

                            <!-- Label -->
                            <label class="mb-1">
                              Private project
                            </label>

                            <!-- Text -->
                            <small class="form-text text-muted">
                              If you are available for hire outside of the current situation, you can encourage others to hire you.
                            </small>

                            <!-- Switch -->
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="switchOne">
                              <label class="custom-control-label" for="switchOne"></label>
                            </div>

                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Warning -->
                          <div class="card bg-light border">
                            <div class="card-body">

                              <!-- Heading -->
                              <h4 class="mb-2">
                                <i class="fe fe-alert-triangle"></i> Warning
                              </h4>

                              <!-- Text -->
                              <p class="small text-muted mb-0">
                                Once a project is made private, you cannot revert it to a public project.
                              </p>

                            </div>
                          </div>

                        </div>
                      </div> <!-- / .row -->

                      <!-- Divider -->
                      <hr class="my-5">

                      <!-- Footer -->
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Button -->
                          <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepTwo">Back</a>

                        </div>
                        <div class="col text-center">

                          <!-- Step -->
                          <h6 class="text-uppercase text-muted mb-0">Step 3 of 3</h6>

                        </div>
                        <div class="col-auto">

                          <!-- Button -->
                          <button class="btn btn-lg btn-primary" type="submit">Create</button>

                        </div>
                      </div>

                    </div>
                  </form>

          </div>

      
                 
                  {{-- <div class="card-body">
                     <form method="POST" class="form mt-4" action="{{ route('admin.opening.save') }}">
                            @csrf

                             
                            <div class="form-group">
                                <label for="name" >{{ __('title') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required >

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('description') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required >

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('cost') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}" name="cost" value="{{ old('cost') }}" required >

                                    @if ($errors->has('cost'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cost') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('start') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}" name="start" value="{{ old('start') }}" required >

                                    @if ($errors->has('start'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('start') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('end') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('end') ? ' is-invalid' : '' }}" name="end" value="{{ old('end') }}" required >

                                    @if ($errors->has('end'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('end') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('poster') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('poster') ? ' is-invalid' : '' }}" name="poster" value="{{ old('poster') }}" required >

                                    @if ($errors->has('poster'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('poster') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('certificate') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('certificate') ? ' is-invalid' : '' }}" name="certificate" value="{{ old('certificate') }}" required >

                                    @if ($errors->has('certificate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('certificate') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('vacancy') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('vacancy') ? ' is-invalid' : '' }}" name="vacancy" value="{{ old('vacancy') }}" required >

                                    @if ($errors->has('vacancy'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('vacancy') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('fee') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('fee') ? ' is-invalid' : '' }}" name="fee" value="{{ old('fee') }}" required >

                                    @if ($errors->has('fee'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fee') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                             <div class="form-group">
                                <label for="name" >{{ __('promotion') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('promotion') ? ' is-invalid' : '' }}" name="promotion" value="{{ old('promotion') }}" required >

                                    @if ($errors->has('promotion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('promotion') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>


                             <div class="form-group">
                                <label for="name" >{{ __('terms') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('terms') ? ' is-invalid' : '' }}" name="terms" value="{{ old('terms') }}" required >

                                    @if ($errors->has('terms'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('terms') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                        

                            <div class="form-group mb-0">
                                
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                
                            </div>
                        </form>
                  </div> --}}
                </div>   
              </div>



             
	      		</div>
	      	</div>
      	</div>
   </div>


@endsection

@section('scripts')


  <script>
//      var quill = new Quill('#ql-editor', {
          // theme: 'snow'
//      });






      // var e = document.querySelectorAll('[data-toggle="dropzone"]');
      //  "undefined" != typeof Dropzone &&
      //  	e &&
      // 	((Dropzone.autoDiscover = !1),
      // 	(Dropzone.thumbnailWidth = null),
      //      		(Dropzone.thumbnailHeight = null),
      //      		[].forEach.call(e, function (e) {
      //      			!(function (e) {
      //      				var t = void 0,
      //      					a = e.dataset.options;
      //      				a = a ? JSON.parse(a) : {};
      //      				var o = {
      //                           previewsContainer: e.querySelector(".dz-preview"),
      //                           previewTemplate: e.querySelector(".dz-preview").innerHTML,
      //                           init: function () {
      //                               this.on("addedfile", function (e) {
      //                                   1 == a.maxFiles && t && this.removeFile(t), (t = e);
      //                               });
      //                           },
      //                       },
      //                       l = Object.assign(o, a);
      //                        (e.querySelector(".dz-preview").innerHTML = ""), new Dropzone(e, l);
      //      			})(e);
      //      		}));





      // Dropzone.options.imageHolder =
      //        {
      //        	autoProcessQueue: false,
      //        	acceptedFiles:".jpg,.png",
  //        	maxFiles: 1,
  //        	paramName: "file",
  //        	url: "http://localhost:8000/admin/categories/create",
  //        	headers: {
  // 	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  // 	  },

  //        	init: function () {
  //        		var submitButton = document.querySelector('#submit-all');
  //        		myDropzone = this;

  //        		submitButton.addEventListener('click', function  (e) {
  //        			e.preventDefault();
  //        			e.stopPropagation();
  //        			myDropzone.processQueue();
  //        		});

  //        		this.on("sending", function(file) {
  // 	        alert('Sending the file' +  file.name)
  // 	      });


  //        		this.on("complete", function  () {
  //        			if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0 ){
  //        				var _this = this;
  //        				_this.removeAllFiles();
  //        			}
  //        		});

  // this.on("success", function(file, serverResponse) {
  // Called after the file successfully uploaded.
  // console.log(serverResponse);

  // If the image is already a thumbnail:
  // this.emit('thumbnail', file, serverResponse.imageUrl);

  // If it needs resizing:
  // this.createThumbnailFromUrl(file, serverResponse.imageUrl);
  // });




  //        		$('#submit-all').on('click', function () {
  //        			var description = $(".ql-editor").html();
  //       			$("#description").val(description);
  //        			myDropzone.processQueue();
  //        		});

  //        		this.on("complete", function () {
  //        			if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
  //        				var _this = this;
  //        				_this.removeFiles();
  //        			}
  //        		});

  // }
  // };

  $("#form").submit(function() {
  var description = $(".ql-editor").html();
  $("#description").val(description);
  });
  </script>

@endsection
