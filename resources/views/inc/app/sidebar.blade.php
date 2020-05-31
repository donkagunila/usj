<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

                <!-- begin:: Aside -->
                <div class="kt-aside__brand   kt-grid__item" id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <a href="{{ route('index') }}">
                            <img alt="Logo" src="{{asset('assets/img/logo/logo.png') }}"/>
                        </a>
                    </div>
                    
                </div>
                <!-- end:: Aside -->


                
                <!-- begin:: Aside Menu -->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div 
                        id="kt_aside_menu" 
                        class="kt-aside-menu "
                        data-ktmenu-vertical="1"
                         data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500"  
                        >       
                        
                        <ul class="kt-menu__nav ">

                            {{-- <li class="kt-menu__item " aria-haspopup="true" >
                                <a  href="{{ route('dashboard')}}" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-icon fa fa-tachometer"></i>
                                    <span class="kt-menu__link-text">Dashboard</span>
                                </a>

                            </li>
 --}}
                            <li class="kt-menu__item {{ Request::is('feed/*') ? 'kt-menu__item--active' : ''}} " aria-haspopup="true" >
                                <a  href="{{ route('home')}}" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-icon fa fa-list"></i>
                                    <span class="kt-menu__link-text">Feed</span>
                                </a>

                            </li>

                            <li class="kt-menu__section ">
                                <h4 class="kt-menu__section-text">Enrollment</h4>
                                <i class="kt-menu__section-icon flaticon-more-v2"></i>
                            </li>


                             <li class="kt-menu__item {{ Request::is('enrolled') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" >
                                <a  href="{{ Route('enrolled')}}" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-icon fa fa-link"></i>
                                    <span class="kt-menu__link-text">Enrolled</span>
                                </a>

                            </li>


                            <li class="kt-menu__section ">
                                <h4 class="kt-menu__section-text">Notifications</h4>
                                <i class="kt-menu__section-icon flaticon-more-v2"></i>
                            </li>



                             <li class="kt-menu__item {{ Request::is('messages') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" >
                                <a  href="{{ route('messages')}}" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-icon fa fa-comments"></i>
                                    <span class="kt-menu__link-text">Messages</span>
                                </a>

                            </li>

                            <li class="kt-menu__item {{ Request::is('notifications') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" >
                                <a  href="{{ route('notifications')}}" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-icon fa fa-bell"></i>
                                    <span class="kt-menu__link-text">Notifications</span>
                                </a>

                            </li>

                        

                        </ul>
                    </div>
                </div>
                <!-- end:: Aside Menu -->   
            </div>