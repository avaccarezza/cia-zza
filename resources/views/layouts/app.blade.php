<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('../css/styles.css') }}">

    <link rel="icon" href="ruta/al/tu-icono.png" type="image/png">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset("img/utilities/logo.png")}}" alt="Logo-ynotangenio">   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Center Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ url('/') }}"><strong>{{ __('Guido') }}</strong></a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('artistic_projects.index') }}"><strong>{{ __('messages.Artistic-projects') }}</strong></a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('educational_projects.index') }}"><strong>{{ __('messages.Educational-projects') }}</strong></a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ url('/') }}"><strong>{{ __('messages.Contact') }}</strong></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ms-auto">   
                        <li class="nav-item">                    
                           {{-- <label for="language">Seleccionar idioma:</label>--}}
                            <select class="form-control mr-2" name="language" id="language" onchange="this.form.submit()" style="cursor: pointer;">
                                <option value="es" {{ App::getLocale() === 'es' ? 'selected' : '' }}>Español</option>
                                <option value="fr" {{ App::getLocale() === 'fr' ? 'selected' : '' }}>Français</option>
                                <option value="en" {{ App::getLocale() === 'en' ? 'selected' : '' }}>English</option>
                            </select>
                        </li>
                    <!-- Authentication Links -->
                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest--}}
                    </ul>
                </div>
            </div>
        </nav>

        <main class="d-flex flex-column min-vh-100">
            @yield('content')
        </main>
        <footer class="mt-auto">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset("img/utilities/logo.png") }}" alt="Logo-ynotangenio">   
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Center Of Navbar -->
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('https://www.facebook.com/ynotangenio/') }}" target="_blank"><img src="{{ asset("img/utilities/facebook.png") }}" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('https://www.instagram.com/guido.zza/') }}" target="_blank"><img src="{{ asset("img/utilities/instagram.png") }}" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('https://vimeo.com/user16868668') }}" target="_blank"><img src="{{ asset("img/utilities/vimeo.png") }}" alt=""></a>
                            </li>
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                       <ul class="navbar-nav ms-auto">   
                            
                        <!-- Authentication Links -->
                         @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Admin') }}</a>
                                </li>
                            @endif 
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('panel') }}">{{ __('Panel') }}</a>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </footer>
    </div>
</body>
</html>