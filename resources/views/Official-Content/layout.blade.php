<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>TimberTrack</title>

    <!-- Fonts -->
    @yield('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="{{asset('css/content.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>

    <div id="header">
    </div>

    <div id="companyName">
        <a href="{{ url('') }}"> <img src="{{ asset('img/logo.png') }}"
                style="height:80%; position: absolute; left:3%; top:5%;" />
        </a>
        <h1 style="color:white; margin-top:5%; margin-left:24%; font-size: 30px;"> TIMBERTRACK </h1>
    </div>

    <div id="menu">
        <div id="stock">
            <i class="fa fa-cube" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ url('/Stock') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                STOCK </a>
        </div>

        <div id="progress">
            <i class="fa fa-tasks" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ url('/Progress') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                PROGRESS </a>
        </div>

        <div id="dashboard">
            <i class="fa fa-columns" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ url('/Dashboard') }}"
                style="font-size: 30px; color:white; margin-left:4%; text-decoration:none"> DASHBOARD </a>
        </div>

        <div id="resupply">
            <i class="fa fa-cubes" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ url('/Resupply') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                RESUPPLY </a>
        </div>
        @auth
        <div id="resupply">
            <i class="fa fa-cubes" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ route('logout') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                {{ auth()->user()->username}} </a>
        </div>
        @endauth
    </div>

    <div id="container">
        @yield('body')
    </div>

        @yield('script')


</body>

</html>
