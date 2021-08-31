<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Muslim Matrimony @yield('title')</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Fontawesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    {{-- <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}
    <!-- Template Main Css Start -->
    {{-- <link rel="stylesheet" href="assets/css/owl-custom-css.css"> --}}
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
    <!-- Toastr Css -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Template Main Css Start -->


    @stack('css')





</head>
<body>
    
    <!-- Header Section -->
    @include('layouts.frontend.partials.header')

    <!-- Main Section -->
    @yield('content')

    <!-- Footer Section -->
    @include('layouts.frontend.partials.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/vendor/counterup/counterup.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/js/main.js') }}"></script> --}}
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
