<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="/assets/img/logo/favicon.png">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/stroke-7/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/theme-switcher/theme-switcher.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css')}}"/>
    <link type="text/css" href="{{ asset('assets/css/app.css')}}" rel="stylesheet">  </head>
     


    <title>Usajili | @yield('title')</title>
</head>
<body>

    @include('inc.app.navbar')


    <main class="container mt-5 py-5">
        @yield('content')
    </main>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    
</body>
</html>