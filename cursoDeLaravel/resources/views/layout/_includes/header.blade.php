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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <title>@yield('titulo')</title>

      </head>
<body>
    <header>

         <nav>
             <div class='container'>
                <div class="nav-wrapper">
                  <a href="#!" class="brand-logo">Learn Laravel</a>
                  <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('admin.courses')}}">Courses</a></li>

                  </ul>
                </div>
             </div>
            </nav>

              <ul class="sidenav" id="mobile">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('admin.courses')}}">Courses</a></li>
               </ul>

    </header>
