 <!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
      <div class="container">

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
            <li class="nav-item">
              <a href="{{ route('login')}}" class="nav-link">Sign In</a>
            </li>

            <li class="nav-item">
              <a class=" btn btn-sm btn-primary lift" href="{{ route('register')}}"> Get Started</a>
            </li>
          </ul>
        

        </div>
  
      </div>
    </nav>

    <div class="topnav"></div>