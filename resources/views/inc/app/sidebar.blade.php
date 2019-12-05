<div class="col-md-4">
    <div class="sidebar">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="user-area">
                    <div class="user-img mb-1">
                        <img src="{{ asset('uploads/avatar/avatar.png')}}" alt="">
                    </div>

                    <div class="user-name">
                        <p>
                            {{ Auth::User()->username }}
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item {{ Request::is('*feed') ? 'active' : ''}}">
                <a href="{{ route('home')}}">
                    Feed
                </a>
            </li>
            <li class="list-group-item {{ Request::is('*my-profile') ? 'active' : ''}}">
                <a href="{{ route('profile')}}">
                    Profile
                </a>
            </li>

            <li class="list-group-item {{ Request::is('*openings') ? 'active' : ''}}">
                <a href="{{ route('openings')}}">
                    Openings
                </a>
            </li>
        </ul>
    </div>    		
</div>