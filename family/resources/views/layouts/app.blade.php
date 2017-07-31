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
        <nav class="navbar navbar-default navbar-static-top nav-perzonalice-all">
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
                    @if(Auth::user())
                        @if (Auth::user()->type == 'admin')
                            <ul class="nav navbar-nav">
                                <li><a href="{{ URL::to('users') }}">Usuarios</a></li>
                                <li><a href="{{ URL::to('families') }}">Familias</a></li>
                            </ul>
                        @else
                            <ul class="nav navbar-nav">
                                <li><a href="{{ URL::to('users') }}">Informaciónes</a></li>
                               
                            </ul>

                        @endif
                    @endif


                 
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
                    <div class="top-avatar-main">
                        <div class="box-img-av">

                              @if( Auth::user()->avatar_file_name == null or  !Auth::user()->avatar_file_name)

                                    @if(Auth::user()->sex == 'Masculino')
                                        <img src="{{asset('images/default-avatars/man1.svg')}}" class="img-responsive" alt="" />  
                                    @else 
                                        <img src="{{asset('images/default-avatars/girl.svg')}}" class="img-responsive" alt="" /> 
                                    @endif  

                              @else

                                    <img src="{{ asset(Auth::user()->avatar->url('medium')) }}" class="img-responsive">
                             
                              @endif  

                        </div>

                          <h3>{{ Auth::user()->name }}</h3>
                          
                    </div>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li>    

                        <a href="{{ route('users.edit', Auth::user()->id) }}">Mi perfil</a>
                    </li>
                    <li>
                        <a href="{{ route('families.editFamily', Auth::user()->id) }}">Mi Familia</a>

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
