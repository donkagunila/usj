@extends('layouts.app')

@section('title', 'My Profile')

@section('content')

<section class="main-section">
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		

	<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
	    <!--Begin:: App Aside Mobile Toggle-->
	    <button class="kt-app__aside-close" id="kt_profile_aside_close">
	        <i class="la la-close"></i>
	    </button>
	    <!--End:: App Aside Mobile Toggle-->

	    <!--Begin:: App Aside-->
	    @include('app.profile.menu')
	    <!--End:: App Aside-->

	    <!--Begin:: App Content-->
		    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
		        <div class="kt-portlet">
		            <div class="kt-portlet__head">
		                <div class="kt-portlet__head-label">
		                    <h3 class="kt-portlet__head-title">Personal Details <small>update your personal informaiton</small></h3>
		                </div>
		                {{-- <div class="kt-portlet__head-toolbar">
		                    <div class="kt-portlet__head-wrapper">
		                        <div class="dropdown dropdown-inline">
		                            <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                <i class="flaticon2-gear"></i>
		                            </button>
		                            <div class="dropdown-menu dropdown-menu-right">
		                                <ul class="kt-nav">
		                                    <li class="kt-nav__section kt-nav__section--first">
		                                        <span class="kt-nav__section-text">Export Tools</span>
		                                    </li>
		                                    <li class="kt-nav__item">
		                                        <a href="#" class="kt-nav__link">
		                                            <i class="kt-nav__link-icon la la-print"></i>
		                                            <span class="kt-nav__link-text">Print</span>
		                                        </a>
		                                    </li>
		                                    <li class="kt-nav__item">
		                                        <a href="#" class="kt-nav__link">
		                                            <i class="kt-nav__link-icon la la-copy"></i>
		                                            <span class="kt-nav__link-text">Copy</span>
		                                        </a>
		                                    </li>
		                                    <li class="kt-nav__item">
		                                        <a href="#" class="kt-nav__link">
		                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
		                                            <span class="kt-nav__link-text">Excel</span>
		                                        </a>
		                                    </li>
		                                    <li class="kt-nav__item">
		                                        <a href="#" class="kt-nav__link">
		                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
		                                            <span class="kt-nav__link-text">CSV</span>
		                                        </a>
		                                    </li>
		                                    <li class="kt-nav__item">
		                                        <a href="#" class="kt-nav__link">
		                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
		                                            <span class="kt-nav__link-text">PDF</span>
		                                        </a>
		                                    </li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>
		                </div> --}}
		            </div>
		            <form class="kt-form kt-form--label-right" id="kt_profile_form" method="post" action="{{ route('profile.update')}}" enctype="multipart/form-data">

		            	@csrf 

		                <div class="kt-portlet__body">
		                    <div class="kt-section kt-section--first">
		                        <div class="kt-section__body">
		                            <div class="row">
		                                <label class="col-xl-3"></label>
		                                <div class="col-lg-9 col-xl-6">
		                                    <h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
		                                </div>
		                            </div>
		                            <div class="form-group row">
		                                <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
		                                <div class="col-lg-9 col-xl-6">
		                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_profile_avatar">
		                                        <div class="kt-avatar__holder" style="background-image: url({{ asset('uploads/avatar/' . Auth::User()->profile->avatar ) }});"></div>
		                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
		                                            <i class="fa fa-pencil"></i>
		                                            <input type="file" name="image" accept=".png, .jpg, .jpeg">
		                                        </label>
		                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
		                                            <i class="fa fa-times"></i>
		                                        </span>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="form-group row">
		                                <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
		                                <div class="col-lg-9 col-xl-6">
		                                    <input class="form-control" 
		                                    	   type="text" 
		                                    	   name="first_name" 
		                                    	   value="{{ Auth::user()->profile->first_name}}" 
		                                    	   placeholder="First Name">
		                                </div>
		                            </div>
		                            <div class="form-group row">
		                                <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
		                                <div class="col-lg-9 col-xl-6">
		                                    <input class="form-control" type="text" name="last_name" value="{{ Auth::user()->profile->last_name}}" placeholder="Last Name">
		                                </div>
		                            </div>
		                            <div class="form-group row">
										<label for="example-date-input" class="col-xl-3 col-lg-3 col-form-label">Date of Birth </label>
										<div class="col-lg-9 col-xl-6">
											<input class="form-control" type="date" name="date_of_birth" value="{{ Auth::user()->profile->date_of_birth}}" id="example-date-input">
										</div>
									</div>

		                            <div class="row">
		                                <label class="col-xl-3"></label>
		                                <div class="col-lg-9 col-xl-6">
		                                    <h3 class="kt-section__title kt-section__title-sm">Contact Info:</h3>
		                                </div>
		                            </div>

		                            <div class="form-group row">
		                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
		                                <div class="col-lg-9 col-xl-6">
		                                    <div class="input-group">
		                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
		                                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
		                                    </div>
		                                </div>
		                            </div>


		                            <div class="form-group row">
		                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
		                                <div class="col-lg-9 col-xl-6">
		                                    <div class="input-group">
		                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
		                                        <input type="text" class="form-control" name="mobile_number" value="{{ Auth::user()->profile->mobile_number}}" placeholder="07** *** ***" aria-describedby="basic-addon1">
		                                    </div>
		                                    <span class="form-text text-muted">We'll never share your contacts with anyone else.</span>
		                                </div>
		                            </div>
		                            
		                            
		                        </div>
		                    </div>

		                </div>
		                <div class="kt-portlet__foot">
		                    <div class="kt-form__actions">
		                        <div class="row">
		                            <div class="col-lg-3 col-xl-3">
		                            </div>
		                            <div class="col-lg-9 col-xl-9">
		                                <button type="submit" class="btn btn-success">Save</button>&nbsp;
		                                <button type="reset" class="btn btn-secondary">Cancel</button>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
	    <!--End:: App Content-->
	</div>



	</div>
</section>

@endsection
