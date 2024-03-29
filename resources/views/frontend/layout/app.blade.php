<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!--favicon-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="upg-z8V9g72Y39H79ZNBO4VUZUIsRL9cC4LyVAdY7xo" />
    <meta name="facebook-domain-verification" content="6plkrpajlqllnxzqqg8blejrj7m27m" />
    <link rel="icon" type="image/x-icon" href="{{asset($CompanyInformation->favicon)}}">
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap" rel="stylesheet" />
    <!--css link-->
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/vendor.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('frontend/css/theme-73c64410.css')}}" /> -->
    <!-- fonts link -->
    <!-- <link rel="stylesheet" href="{{asset('frontend/fonts/fa-solid-900.woff2')}}" /> -->
    <!-- <link rel="stylesheet" href="{{asset('frontend/fonts/ionicons.ttf')}}" /> -->
    <!-- <link rel="stylesheet" href="{{asset('ionicons.ttf')}}" /> -->
    <!-- <link rel="stylesheet" href="{{asset('frontend/fonts/Simple-Line-Icons.woff2')}}" /> -->

</head>

<body>
@include('frontend.layout.header')







@yield('content')






@include('frontend.layout.footer')

<!--javascript link-->
<script src="{{asset('frontend/js/vendor.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/bottom-34bba09.js')}}" ></script>
<script src="{{ asset('frontend/js/axios.min.js') }}"></script>
</body>
</html>
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->
