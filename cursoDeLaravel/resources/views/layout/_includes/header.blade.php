<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS do bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        <!-- Materialize -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" rel="stylesheet"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


        <title>@yield('titulo')</title>

      </head>
<body>
    <header>

         <nav>
             <div class='container'>
                <div class="nav-wrapper">
                  <a href="{{route('site.home')}}" class="brand-logo">Learn Laravel</a>
                  <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="/">Home</a></li>
                      @if(Auth::guest()) <!--Retorna true se o utilizador não estiver logado no sistema  -->
                      <li><a href="{{route('site.login')}}">Login</a></li>
                      @else
                      <li><a href="{{route('admin.courses')}}">Courses</a></li>
                      <li><a href="#">{{Auth::user()->name}}</a></li>
                      <li><a href="{{route('site.login.loggout')}}">Loggout</a></li>
                      @endif

                  </ul>
                  <ul class="sidenav" id="mobile">
                      <li><a href="/">Home</a></li>
                      @if(Auth::guest()) <!--Retorna true se o utilizador não estiver logado no sistema  -->
                      <li><a href="{{route('site.login')}}">Login</a></li>
                      @else
                      <li><a href="{{route('admin.courses')}}">Courses</a></li>
                      <li><a href="#">{{Auth::user()->name}}</a></li>
                      <li><a href="{{route('site.login.loggout')}}">Loggout</a></li>
                      @endif
                </ul>
          </div>
       </div>
      </nav>
  </header>
