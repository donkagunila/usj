 <!-- NAVBAR
    ================================================== -->
    <nav class="navbar header navbar-expand-lg fixed-top navbar-dark bg-primary">


        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index')}}">
          <img src="{{ asset('assets/img/logo/logo-primary.png') }}" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>


          <ul class="navbar-nav ml-auto">
            <li class="nav-item d-flex justify-content-center">
              <a href="" class="nav-link">
                <i class="fe fe-bell fs-20"></i>
              </a>
            </li>

            <li class="nav-item">
              <div class="dropdown user-account">
                  <a class="dropdown-toggle avatar-lg user-avatar" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('uploads/avatar/avatar.png') }}" class="avatar-img rounded-circle" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-menu-md" aria-labelledby="dropdownMenuButton">
                    <div class="list-group list-group-flush">
                      <a class="list-group-item" href="#">

                        <div class="icon icon-sm text-primary">
                          <i class="fe fe-account"></i>
                        </div>
                        <div class="ml-4">
                         <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                          Account
                        </h6>
                        <p class="font-size-sm text-gray-700 mb-0">
                          {{ Auth::user()->email }}
                        </p>
                        </div>
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Logout</a>
                  </div>
                </div>
              {{-- <a class=" btn btn-sm btn-primary lift" href="{{ route('register')}}">Account</a> --}}
            </li>
          </ul>
        

        </div>
  
    </nav>

    {{-- <div class="topnav"></div> --}}