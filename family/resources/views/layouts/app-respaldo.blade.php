<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Default') | Panel de administración</title>
    <link rel="stylesheet" type="text/css" href="{{  asset('css/app.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/stylesheets.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/font-awesome.min.css') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('ADMIN', 'ADMIN') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    @if (Auth::user()->type == 'admin')
                        <ul class="nav navbar-nav">
                            <li><a href="{{ URL::to('users') }}">Usuarios</a></li>
                            <li><a href="{{ URL::to('families') }}">Familias</a></li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav">
                            <li><a href="{{ URL::to('users') }}">Perfil</a></li>
                            <li><a href="{{ URL::to('users') }}">Mi Familia</a></li>
                        </ul>

                    @endif


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                @if( Auth::user()->avatar_file_name == null or  !Auth::user()->avatar_file_name)
                                    @if(Auth::user()->sex == 'Masculino')
                                        <img src="{{asset('images/default-avatars/man1.svg')}}">  
                                    @else 
                                        <img src="{{asset('images/default-avatars/girl.svg')}}"> 
                                    @endif  
                                @endif  
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <aside class="options-perfil">
             <ul class="list-aside-informative">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                @else
                    <li class="dropdown">
                          @if( Auth::user()->avatar_file_name == null or  !Auth::user()->avatar_file_name)
                                @if(Auth::user()->sex == 'Masculino')
                                    <img src="{{asset('images/default-avatars/man1.svg')}}">  
                                @else 
                                    <img src="{{asset('images/default-avatars/girl.svg')}}"> 
                                @endif  
                            @endif  
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </aside>
      


        <section class="section-principal-all">
            <div class="container">
                 @include('flash::message') 
                 @yield('content')
            </div>
        </section>


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
