<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('../css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/lightgallery.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('../fontawesome/css/all.min.css') }}">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />


    <link rel="icon" href="{{ asset('img/utilities/logo.ico') }}" type="image/png">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ URL::asset('../fonts/lg.ttf') }}" rel="stylesheet">
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('../js/lightgallery.umd.js') }} "></script>
    <script src="{{ asset('../js/scripts.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top" style="min-height: 100px;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/utilities/logo.png') }}" alt="Logo-ynotangenio">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-3">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                                href="{{ url('/') }}#guido-section"><strong>{{ __('Guido') }}</strong></a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link {{ Request::url() == route('artistic_projects.index') ? 'active' : '' }}"
                                href="{{ route('artistic_projects.index') }}"><strong>{{ __('Artistic projects') }}</strong></a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link {{ Request::url() == route('educational_projects.index') ? 'active' : '' }}"
                                href="{{ route('educational_projects.index') }}"><strong>{{ __('Educational projects') }}</strong></a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link {{ Request::url() == route('contact.form') ? 'active' : '' }}"
                                href="{{ route('contact.form') }}"><strong>{{ __('Contact') }}</strong></a>
                        </li>
                        <li class="nav-item px-3">
                            @include('components.select-lang')
                        </lI>
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
                    <a class="navbar-brand d-none d-sm-block" href="{{ url('/') }}">
                        <img src="{{ asset('img/utilities/logo.png') }}" alt="Logo-ynotangenio">
                    </a>


                    <ul class="nav mx-auto justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('https://www.facebook.com/ynotangenio/') }}"
                                target="_blank"><img src="{{ asset('img/utilities/facebook.png') }}"
                                    alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('https://www.instagram.com/guido.zza/') }}"
                                target="_blank"><img src="{{ asset('img/utilities/instagram.png') }}"
                                    alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('https://vimeo.com/user16868668') }}" target="_blank"><img
                                    src="{{ asset('img/utilities/vimeo.png') }}" alt=""></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav justify-content-center align-items-center">

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark d-none d-sm-block"
                                        href="{{ route('login') }}">{{ __('Admin') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark d-none d-sm-block"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark d-none d-sm-block" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark d-none d-sm-block"
                                    href="{{ route('panel') }}">{{ __('Panel') }}</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </footer>
    </div>
</body>

</html>
