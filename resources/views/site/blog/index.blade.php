@extends('layouts.site')

@section('title', 'Our Blog')

@section('contents')
	{{-- the header --}}

   <!-- WELCOME
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-primary overlay-20 bg-cover jarallax bottom-image" style="background-image: url(assets/img/covers/cover-2.jpg); background-position: center; background-size: cover">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-white">
              Our Blog
            </h1>

            <!-- Text -->
            <p class="lead mb-0 text-white-75">
              Keep up to date with what we're working on! Usajili is an ever evolving project with more to come. 
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

<!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>


     <section class="pt-7 pt-md-10">
      <div class="container">
        <div class="row">


          <div class="col-12 col-xl-4 d-flex">

                <!-- Card -->
                <div class="card shadow-light-lg">

                  <!-- Body -->
                  <a class="card-body my-auto" href="#!">

                    <!-- Heading -->
                    <h3 class="mt-auto">
                      It's the little touches that make memories.
                    </h3>

                    <!-- Text -->
                    <p class="mb-0 text-muted">
                      Once you have your rental posted, you should focus on how you can differentiate your home with little touches. Chocolates, specialty coffee, fast wifi, nice toiletries, or a personal note. Small touches can make a huge difference.
                    </p>

                  </a>

                  <!-- Meta -->
                  <a class="card-meta" href="#!">

                    <!-- Divider -->
                    <hr class="card-meta-divider">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm mr-2">
                      <img src="../assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                      Dave Gamache
                    </h6>

                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                      <time datetime="2019-05-02">May 02</time>
                    </p>

                  </a>

                </div>

              </div>
  
  <div class="col-12 col-xl-4 d-flex">

                <!-- Card -->
                <div class="card mb-6 mb-xl-0 shadow-light-lg">

                  <!-- Image -->
                  <a class="card-img-top" href="#!">
                    <img src="assets/img/photos/photo-1.jpg" alt="..." class="img-fluid">
                  </a>

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-fluid-x shape-bottom svg-shim text-white">
                      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"></path></svg>
                    </div>
                  </div>

                  <!-- Body -->
                  <a class="card-body" href="#!">

                    <!-- Heading -->
                    <h3>
                      Photos should appeal to a sense of adventure
                    </h3>

                    <!-- Text -->
                    <p class="mb-0 text-muted">
                      Cozy vibes are out and this summer you should focus on making customer's feel brave.
                    </p>

                  </a>

                  <!-- Meta -->
                  <a class="card-meta" href="#!">

                    <!-- Divider -->
                    <hr class="card-meta-divider">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm mr-2">
                      <img src="uploads/avatar/avatar.png" alt="..." class="avatar-img rounded-circle">
                    </div>

                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                      Danny Devito
                    </h6>

                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                      <time datetime="2019-05-02">May 02</time>
                    </p>

                  </a>

                </div>

  </div>


  <div class="col-12 col-xl-4 d-flex">
    
    <!-- Card -->
    <div class="card shadow-light-lg">

      <!-- Body -->
      <a class="card-body my-auto" href="#!">

        <!-- Heading -->
        <h3 class="mt-auto">
          It's the little touches that make memories.
        </h3>

        <!-- Text -->
        <p class="mb-0 text-muted">
          Once you have your rental posted, you should focus on how you can differentiate your home with little touches. Chocolates, specialty coffee, fast wifi, nice toiletries, or a personal note. Small touches can make a huge difference.
        </p>

      </a>

      <!-- Meta -->
      <a class="card-meta" href="#!">

        <!-- Divider -->
        <hr class="card-meta-divider">

        <!-- Avatar -->
        <div class="avatar avatar-sm mr-2">
          <img src="../assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
        </div>
        
        <!-- Author -->
        <h6 class="text-uppercase text-muted mr-2 mb-0">
          Dave Gamache
        </h6>
        
        <!-- Date -->
        <p class="h6 text-uppercase text-muted mb-0 ml-auto">
          <time datetime="2019-05-02">May 02</time>
        </p>

      </a>

    </div>

  </div>


</div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

     <!-- MORE
    ================================================== -->
    <section class="py-7 py-md-10">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9 col-lg-8 col-xl-7">
            
            <!-- Button -->
            <a href="#!" class="btn btn-block btn-outline-gray-300 d-flex align-items-center">
              <span class="mx-auto">Load more</span> <i class="fe fe-arrow-right"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-primary">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>




	{{-- the main part --}}
@endsection