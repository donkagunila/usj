@extends('layouts.site')

@section('title', 'We have a thing for Enrollment')

@section('contents')
	{{-- the header --}}

	<section class="pt-4 pt-md-11">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">
            
            <!-- Image -->
            <img src="assets/img/illustrations/illustration-4.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="..." data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">
            
            <!-- Heading -->
            <h1 class="display-3 text-center text-md-left">
              Welcome to <span class="text-primary">Usajili</span>. <br>
              Enroll everywhere
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
              We enroll you every where, with one form, fill all other fields online
            </p>
                
            <!-- Buttons -->
            <div class="text-center text-md-left">
              <a href="{{ route('register')}}" class="btn btn-primary shadow lift mr-1">
                Get Started <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
              </a>
              
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>



	{{-- the main part --}}
@endsection