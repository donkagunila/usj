<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="/assets/img/logo/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,500,600&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
</head>
     


    <title>@yield('title') | Usajili</title>
</head>
<body>



    <main>
        <div class="container-fluid">
    <div class="row">
        {{-- the left part --}}

        @yield('content')
        
        {{-- the right part --}}
        <div class="col-md-6 right-part d-none d-md-block">
            <div id="particles-js"></div>

            <div class="slider-holder">
                <div id="onboard" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#onboard" data-slide-to="0" class="active"></li>
                        <li data-target="#onboard" data-slide-to="1"></li>
                        <li data-target="#onboard" data-slide-to="2"></li>
                    </ol>


                  <div class="carousel-inner slider-content">
                    <div class="carousel-item active">
                        <div class="slider-area">
                            <div class="slider-image mb-5">
                                <img src="{{ asset('img/ease.png')}}" class="d-block " alt="...">
                            </div>

                            <div class="slider-title mb-3">
                                <h4 class="text-white">
                                    Enroll with Ease
                                </h4>
                            </div>

                            <div class="slider-words mb-11">
                                <p class="text-white">
                                    Usajili enrolls ou easily, <br> Neither physical availability nor paperwork is required.
                                </p>
                            </div>
                        </div>

                    </div>


                    <div class="carousel-item">
                       <div class="slider-area">
                            <div class="slider-image mb-5">
                                <img src="{{ asset('img/fast.png')}}" class="d-block " alt="...">
                            </div>

                            <div class="slider-title mb-3">
                                <h4 class="text-white">
                                    Fast Enrollment
                                </h4>
                            </div>

                            <div class="slider-words mb-11">
                                <p class="text-white">
                                    With a click of a button, <br> usajili enrolls you instantly.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="slider-area">
                            <div class="slider-image mb-5">
                                <img src="{{ asset('img/multiple.png')}}" class="d-block " alt="...">
                            </div>

                            <div class="slider-title mb-3">
                                <h4 class="text-white">
                                    Multiple Enrolments
                                </h4>
                            </div>

                            <div class="slider-words mb-11">
                                <p class="text-white">
                                    Usajili enrolls you in schools, trainings, Marathons<br>  search it, usajili enrolls you.
                                </p>
                            </div>
                        </div>
                    </div>


                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </main>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="{{ asset('js/particles.min.js') }}"></script>
<script>
    
particlesJS.load('particles-js', '{{ asset('js/particles.json') }}', function() {
  console.log('callback - particles.js config loaded');
});
</script>
   
    
</body>
</html>