<div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--sm kt-app__aside--fit" id="kt_profile_aside">
    	
        <!--Begin:: Portlet-->
			<div class="kt-portlet">
			    <div class="kt-portlet__body">
			        <div class="kt-widget kt-widget--general-1">
			            <div class="kt-media kt-media--brand kt-media--md kt-media--circle">
			                <img src="{{ asset('uploads/avatar/' . Auth::user()->profile->avatar)}}" alt="{{ Auth::user()->username}}">
			            </div>
			            <div class="kt-widget__wrapper">
			                <div class="kt-widget__label">
			                    <a href="#" class="kt-widget__title">
			                                {{ Auth::user()->username}}
			                            </a>
			                    <span class="kt-widget__desc">
			                                {{ Auth::user()->email}}
			                            </span>
			                </div>
			                
			            </div>
			        </div>
			    </div>

			    <div class="kt-portlet__separator"></div>

			    <div class="kt-portlet__body">
			        <ul class="kt-nav kt-nav--bolder kt-nav--fit-ver kt-nav--v4" role="tablist">
			            <li class="kt-nav__item  {{ Request::is('my-profile') ? 'active' : ''}} ">
			                <a class="kt-nav__link {{ Request::is('my-profile') ? 'active' : ''}}" href="{{ route('profile')}}" role="tab">
			                    <span class="kt-nav__link-icon">
			                    	<i class="fa fa-user"></i>
			                    </span>
			                    <span class="kt-nav__link-text">Personal Information</span>
			                </a>
			            </li>
			           {{--  <li class="kt-nav__item {{ Request::is('account-settings') ? 'active' : ''}}">
			                <a class="kt-nav__link {{ Request::is('account-settings') ? 'active' : ''}}" href="{{ route('p.account.settings')}}" role="tab">
			                    <span class="kt-nav__link-icon"><i class="fa fa-cog"></i></span>
			                    <span class="kt-nav__link-text">Account Settings</span>
			                </a>
			            </li> --}}
			            {{-- <li class="kt-nav__item  ">
			                <a class="kt-nav__link" href="" role="tab">
			                    <span class="kt-nav__link-icon"><i class="fa fa-lock"></i></span>
			                    <span class="kt-nav__link-text">Change Password</span>
			                </a>
			            </li> --}}
			            {{-- <li class="kt-nav__item  ">
			                <a class="kt-nav__link" href="" role="tab">
			                    <span class="kt-nav__link-icon"><i class="fa fa-pie-chart"></i></span>
			                    <span class="kt-nav__link-text">User Settings</span>
			                </a>
			            </li> --}}
			        </ul>
			    </div>

			    {{-- <div class="kt-portlet__separator"></div> --}}  
			</div>
			<!--End:: Portlet-->

			<!--Begin:: Portlet-->
			<div class="kt-portlet kt-portlet--head-noborder">
			    <div class="kt-portlet__head">
			        <div class="kt-portlet__head-label">
			            <h3 class="kt-portlet__head-title  kt-font-info">
							Become a Vendor
						</h3>
			        </div>
			       
			    </div>
			    <div class="kt-portlet__body kt-portlet__body--fit-top">
			        <div class="kt-section kt-section--space-sm">
			            Gain the abiility to post openiings and enroll people in your own generated events
			        </div>
			        <div class="kt-section kt-section--last">
			            <a href="{{ route('vendor.join')}}" class="btn btn-primary"><i class=""></i> Learn More</a>&nbsp;
			        </div>
			    </div>
			</div>
		<!--End:: Portlet-->
    </div>