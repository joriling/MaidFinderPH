<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/mycss.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/materialize.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('public/semantic/assets/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/page.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('public/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/home-style.css')}}" />
    <link rel="icon" href="{{ asset('public/images/icon2.png') }}">
@section('css')
    @show
    @section('title')
        <title>MaidFinderPH</title>
    @show
</head>
<body class="grey lighten-5">
@include('home.header')
    @yield('content')
@include('shared.footer')

<!--  Scripts-->
<script src="{{ asset('public/material/js/jquery.js') }}"></script>
<script src="{{ asset('public/material/js/jquery.js') }}"></script>
<script src="{{ asset('public/material/js/materialize.min.js') }}" ></script>
<script>
    $(document).ready(function() {
        $(".button-collapse").sideNav();
        $('select').material_select();
        $('.parallax').parallax();
        //$('.fixed-section').pushpin({ top: $('.fixed-section').offset().top });
    });
</script>
@section('js')
@show
</body>
</html>

</body>
</html>
