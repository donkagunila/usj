<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="/assets/img/logo/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Niramit|Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/inbox.css')}}"/>


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/main.css')}}"/>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/styles.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/brand.css')}}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">



    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/theme-switcher/theme-switcher.min.css')}}"/> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome.min.css')}}"/>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  --}}
 
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}"> --}}
</head>
     


    <title>@yield('title') | Usajili</title>
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--static kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">



    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
        <div class="kt-header-mobile__logo">
            <a href="index.html">
                <img alt="Logo" src="{{asset('assets/img/logo/logo.png') }}"/>
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
                        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <!-- begin:: Aside-->
             @include('inc.app.sidebar')

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">
                <!-- begin:: Header -->

                

                @include('inc.app.navbar')

                @yield('content')
             


            </div>


        </div>
    </div>


    
{{-- 
    @include('inc.app.navbar')


    <main>
        @yield('content')
    </main> --}}


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#ff8900",
                        "metal": "#c4c5d6",
                        "light": "#ffffff",
                        "accent": "#00c5dc",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995",
                        "focus": "#9816f4"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>
        <!-- end::Global Config -->




                <!--begin::Global Theme Bundle(used by all pages) -->
                   <script src="{{ asset('assets/js/plugins.bundle.js') }}" type="text/javascript"></script>
                   <script src="{{ asset('assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

                <!--begin::Page Vendors(used by this page) -->
                    {{-- <script src="https://keenthemes.com/keen/themes/keen/theme/demo2/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script> --}}
                <!--end::Page Vendors -->

                <!--begin::Page Scripts(used by this page) -->
                    <script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>
                <!--end::Page Scripts -->


                @yield('scripts')
   
    
</body>
</html>