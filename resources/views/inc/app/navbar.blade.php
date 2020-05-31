<div id="kt_header" class="kt-header kt-grid__item "  data-ktheader-minimize="on" >
    <div class="kt-container  kt-container--fluid ">
    
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">@yield('title')</h3>
            </div>
        </div>

        <!-- begin:: Topbar -->
        <div class="kt-header__topbar"> 
            

            <!--begin: Search -->
            <div class="kt-header__topbar-item kt-header__topbar-item--search kt-hidden">
                <div class="kt-input-icon kt-input-icon--right">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="la la-search"></i></span>
                    </span>
                </div>
            </div>
            <!--end: Search -->

          
          

           

            <!--begin: Notifications -->
            <div class="kt-header__topbar-item dropdown">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px">
                    <span class="kt-header__topbar-icon kt-bg-brand"><i class="fa fa-bell kt-font-light"></i></span>
                    {{-- <span class="kt-badge kt-badge--danger kt-badge--notify">3</span> --}}
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                    <div class="kt-head app-gradient">
                        <h3 class="kt-head__title">Notifications</h3>
                        {{-- <div class="kt-head__sub"><span class="kt-head__desc">23 new notifications</span></div> --}}
                        <div class="kt-head__sub"><span class="kt-head__desc">You have no new Notifications</span></div>

                    </div>
                    <div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="2" data-mobile-height="220">
                    </div>
                    {{-- <div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="270" data-mobile-height="220"> --}}
                        {{-- <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-line-chart kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New order has been received
                                </div>
                                <div class="kt-notification__item-time">
                                    2 hrs ago
                                </div>
                            </div>
                        </a> --}}
                     
                    {{-- </div> --}}
                </div>
            </div>
            <!--end: Notifications -->  

            <!--begin: User -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">           
                    <img alt="Pic" src="{{ asset('uploads/avatar/' . Auth::user()->profile->avatar)}}"/>
                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-md">
                    <div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile app-gradient">
                        <div class="kt-user-card__wrapper">
                            <div class="kt-user-card__pic">
                                <!--use "kt-rounded" class for rounded avatar style-->
                                <img alt="Pic" src="{{ asset('uploads/avatar/' . Auth::user()->profile->avatar)}}" class="kt-rounded-"/>
                            </div>
                            <div class="kt-user-card__details">
                                <div class="kt-user-card__name">{{ Auth::User()->username }}</div>
                                <div class="kt-user-card__position">{{ Auth::User()->email }}</div>
                            </div>
                        </div>
                    </div>

                    <ul class="kt-nav kt-margin-b-10">
                        <li class="kt-nav__item">
                            <a href="{{ route('profile')}}" class="kt-nav__link">
                                <span class="kt-nav__link-icon"><i class="fa fa-user"></i></span>
                                <span class="kt-nav__link-text">My Profile</span>
                            </a>
                        </li>
                        {{-- <li class="kt-nav__item">
                            <a href="custom/profile/overview-1.html" class="kt-nav__link">
                                <span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
                                <span class="kt-nav__link-text">My Tasks</span>
                            </a>
                        </li> --}}
                       
                        <li class="kt-nav__item">
                            <a href="{{ route('notification.settings')}}" class="kt-nav__link">
                                <span class="kt-nav__link-icon"><i class="fa fa-bell"></i></span>
                                <span class="kt-nav__link-text">Notification Settings</span>
                            </a>
                        </li>
                        <li class="kt-nav__separator kt-nav__separator--fit"></li>

                        <li class="kt-nav__custom kt-space-between">
                            <a href="#" class="kt-nav__link" onclick="event.preventDefault();
                                document.querySelector('#logout-form').submit();">
                                <span class="kt-nav__link-icon danger"><i class="fa fa-sign-out"></i></span>
                                <span class="kt-nav__link-text">Sign Out</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end: User -->
        </div>
        <!-- end:: Topbar -->   
    </div>
</div>
