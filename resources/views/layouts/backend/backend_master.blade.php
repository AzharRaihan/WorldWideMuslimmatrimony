<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSRF Token -->
        <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>



        <!-- Switchery css -->
        <link href="{{ asset('assets/backend/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>

        <!-- Toastr Css -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        @stack('css')

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('layouts.backend.partials.header')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.backend.partials.left_sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- End content-page -->



            <!-- Footer Section Start -->
            @include('layouts.backend.partials.footer')
            <!-- Footer Section  End-->



        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/detect.js') }}"></script>
        <script src="{{ asset('assets/backend/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/backend/js/waves.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/switchery/switchery.min.js') }}"></script>
        <!--Morris Chart-->
		<script src="{{ asset('assets/backend/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js') }}"></script>
        <!-- Counter Up  -->
        <script src="{{ asset('assets/backend/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/counterup/jquery.counterup.js') }}"></script>
        <!-- Page specific js -->
        <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('assets/backend/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/backend/js/jquery.app.js') }}"></script>

        <!-- Toastr Js -->
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error('{{ $error }}', 'Error', {
                        closeButton:true,
                        progressBar:true,
                    });
                @endforeach
            @endif
        </script>

        @stack('js')
        
    </body>
</html>