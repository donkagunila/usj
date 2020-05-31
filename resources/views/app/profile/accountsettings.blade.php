@extends('layouts.app')

@section('title', 'Account Settings')

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
                    <h3 class="kt-portlet__head-title">Account Settings <small>control when and how often Usajili sends emails to you</small></h3>
                </div>
            </div>
            <form class="kt-form kt-form--label-right" id="kt_profile_form" method="post" action="{{ route('p.account.settings.update' )}}">

            	@csrf

                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h3 class="kt-section__title kt-section__title-sm">Setup Account Notifications:</h3>
                                </div>
                            </div>
                            <div class="form-group form-group-sm row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                <div class="col-lg-9 col-xl-6">
                                    <span class="kt-switch">
									    <label>
										    <input type="checkbox" {{ ($settings->email_notification == 'on') ? 'checked' : ''}} name="email_notification">
									    	<span></span>
                                    	</label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-group-last row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Push Notifications</label>
                                <div class="col-lg-9 col-xl-6">
                                    <span class="kt-switch">
										<label>
											<input type="checkbox" name="push_notification">
											<span></span>
	                                    </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="kt-checkbox-list">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="new_notification"> You have new notifications.
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox"  checked="checked" name="direct_message"> You're sent a direct message
                                            <span></span>
                                        </label>
                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h3 class="kt-section__title kt-section__title-sm">Updates From Usajili:</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="kt-checkbox-list">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="new_message"> News about Openings and updates
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="get_more"> Tips on getting more out of Usajili
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox" checked="checked" name="things_missed"> Things you missed since you last logged into Usajili
                                            <span></span>
                                        </label>
                                        
                                        <label class="kt-checkbox">
                                            <input type="checkbox" checked="checked" name="best_products"> Tips on best openings and opportunities
                                            <span></span>
                                        </label>
                                    </div>
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
                                <button type="submit" class="btn btn-brand btn-bold">Save</button>&nbsp;
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
