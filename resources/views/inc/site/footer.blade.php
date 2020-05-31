 <!-- FOOTER
    ================================================== -->
    <footer class="py-3 py-md-5 bg-dark">
      <div class="container">



        <div class="row">
          <div class="col-md-12 mt-8">
            <!-- Brand -->
            <a class="navbar-brand mb-10" href="{{ route('index')}}">
              <img src="{{ asset('assets/img/logo/logo2.png') }}" class="footer-brand img-fluid" alt="...">
            </a>

          </div>
        </div>


        <div class="row">

        
          <div class="col-6 col-md-4 col-lg-3">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-white mb-7">
              More About Us
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-white mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="{{ route('about') }}" class="text-reset">
                  About Us
                </a>
              </li>
              <li class="mb-3">
                <a href="{{ route('contact') }}" class="text-reset">
                  Contact Us
                </a>
              </li>
              <li class="mb-3">
                <a href="{{ route('blog') }}" class="text-reset">
                  Blog
                </a>
              </li>
              {{-- <li class="mb-3">
                <a href="#!" class="text-reset">
                  Think with Usajili
                </a>
              </li> --}}
              
            </ul>

          </div>
          <div class="col-6 col-md-4 col-lg-3">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-white mb-7">
              Quick Links
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-white mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Openings
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Become a vendor
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Submit an Issue
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  How To-s
                </a>
              </li>
            </ul>

          </div>
         
          <div class="col-6 col-md-4 col-lg-3">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-white mb-7">
              Community
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-white mb-0">
              <li class="mb-3">
                <a href="{{ route('terms')}}" class="text-reset">
                  Business Relations
                </a>
              </li>

              <li class="mb-3">
                <a href="{{ route('terms')}}" class="text-reset">
                  API Intergration
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Submit a Project
                </a>
              </li>
             
            </ul>

          </div>



          <div class="col-6 col-md-4 col-lg-3">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-white mb-7">
              Social Media
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-white mb-0">
              <li class="mb-3">
                <p class="text-reset">
                  Follow us on Social Media to find out the latest updates and our progress
                </p>
              </li>
             
            </ul>

            <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
              <li class="list-inline-item list-social-item mr-4">
                <a href="{{ url('https://www.instagram.com/usajilitz') }}" target="blank" class="text-decoration-none">
                  <i class="fe fe-instagram text-white list-social-icon"></i>
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-4">
                <a href="#!" class="text-decoration-none">
                  <i class="fe fe-facebook text-white list-social-icon"></i>
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-4">
                <a href="#!" class="text-decoration-none">
                  <i class="fe fe-twitter text-white list-social-icon"></i>
                </a>
              </li>

              
            </ul>



          </div>
        </div> <!-- / .row -->

        <hr class="mt-10">


        <div class="row">
          <div class="col-md-12">
             <ul class="list-unstyled list-inline my-2">
              <li class="list-inline-item mr-4">
                <a href="{{ route('index') }}" target="blank" class="text-decoration-none footer-brand text-white">
                  <b>Usajili</b>
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-4">
                <a href="#!" class="text-decoration-none text-white">
                 <i class="fe fe-info text-white"></i> Help
                </a>
              </li>
              <li class="list-inline-item mr-4">
                <a href="#!" class="text-decoration-none text-white">
                 Privacy
                </a>
              </li>

              <li class="list-inline-item mr-4">
                <a href="#!" class="text-decoration-none text-white">
                  Terms
                </a>
              </li>
              
            </ul>

          </div>
        </div>
      </div> <!-- / .container -->
    </footer>