@extends('layouts.site')

@section('title', 'About Us')

@section('contents')
	{{-- the header --}}


    <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Headin -->
            <h1 class="display-2">
              Small team. Big hearts.
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-7 mb-md-9">
              Our focus is always on finding the best people to work with. Our bar is high, but you look ready to take on the challenge.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Image -->
            <div class="form-row">
              <div class="col-4">
                
                <img src="assets/img/photos/photo.png" class="img-fluid rounded shadow-lg" alt="...">

              </div>
              <div class="col-3">

                <img src="assets/img/photos/photo.png" class="img-fluid rounded shadow-lg mb-4" alt="...">

                <img src="assets/img/photos/photo.png" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
              <div class="col-5">

                <div class="form-row mb-4">
                  <div class="col-5">
                    
                    <img src="assets/img/photos/photo.png" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                  <div class="col-7">
                    
                    <img src="assets/img/photos/photo.png" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                </div> <!-- / .row -->

                <img src="assets/img/photos/photo.png" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

     <!-- LOCATION
    ================================================== -->
    <section class="pt-8 pt-md-0 bg-white">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">

            <!-- Map (mobile) -->
            <div class="embed-responsive embed-responsive-1by1 d-md-none">
              <div class="embed-responsive-item" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>
            </div>
            
            <!-- Map -->
            <div class="position-relative h-100 vw-50 float-right d-none d-md-block">

              <!-- Map -->
              <div class="h-100 w-100" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>
              
              <!-- Shape -->
              <div class="shape shape-right shape-fluid-y svg-shim text-light">
                <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 386V0h100v1544H50v-386L0 386z" fill="currentColor"/></svg>
              </div>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">
            
            <!-- Heading -->
            <h2>
              Located in Dar Es Sallam.<br>
              <span class="text-primary">Welcome</span>
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6">
             We are located at Sinza Kumekucha near clomps Motel in Dar es salaam, wanna see the operation site? welcome our doors are always open
            </p>

          

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>




    <!-- SLIDER
    ================================================== -->
    <section>
      <div class="flickity-button-white flickity-button-inset" data-flickity='{"imagesLoaded": true, "wrapAround": true, "pageDots": false}'>
        <div class="w-100">
          
          <!-- Image -->
          <img src="assets/img/covers/contact.jpg" class="img-fluid w-100" alt="...">

          <!-- Shape -->
          <div class="shape shape-top shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2880 0H0v54.112h720s289.42 40.248 705 0c416.5-37.733 735 0 735 0h720V0z" fill="currentColor"/></svg>
          </div>

        </div>
        <div class="w-100">
          
          <!-- Image -->
          <img src="assets/img/covers/contact.jpg" class="img-fluid w-100" alt="...">

          <!-- Shape -->
          <div class="shape shape-top shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2880 0H0v54.112h720s289.42 40.248 705 0c416.5-37.733 735 0 735 0h720V0z" fill="currentColor"/></svg>
          </div>

        </div>
      </div>
    </section>


	{{-- the main part --}}
@endsection