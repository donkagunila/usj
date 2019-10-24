<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="{{ asset('assets/css/dashboard.min.css') }}" rel="stylesheet" />
    
    <title> @yield('title') </title>

</head>
<body>

    <div class="wrapper">
        

        {{--  sidebar --}}
        @include('inc.admin.sidebar')

        {{-- main part --}}


        <div class="main-panel">
            @include('inc.admin.navbar')
            
            @yield('content')

         {{-- Success Alert --}}
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


             {{-- Error Alert --}}
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        </div>

    </div>




      <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
      <!-- Plugin for the momentJs  -->
      <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
      <!--  Plugin for Sweet Alert -->
      <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
      <!-- Forms Validations Plugin -->
      <script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
      <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
      <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
      <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
      <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
      <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
      <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
      <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
      <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
      <script src="{{ asset('assets/js/plugins/jquery-jvectormap.js') }}"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      <!-- Library for adding dinamically elements -->
      <script src="{{ asset('assets/js/plugins/arrive.min.js') }}"></script>
      <!--  Google Maps Plugin    -->
      {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script> --}}
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Chartist JS -->
      <script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
      <!--  Notifications Plugin    -->
      <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{ asset('assets/js/material-dashboard.minf066.js?v=2.1.0') }}" type="text/javascript"></script>
   

    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
			setTimeout(function() {
	        	$(".alert").alert('close');
	    	}, 3000);
    	});

         $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
    </script>
    
</body>
</html>