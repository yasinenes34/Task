<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f1e4e4
        }

        .padding {
            padding: 3rem !important;
            margin-left: 200px
        }

        .card-img-top {
            height: 300px;
        }

        .card-no-border .card {
            border-color: #d7dfe3;
            border-radius: 4px;
            margin-bottom: 30px;
            -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 10rem
        }

        .pro-img {
            margin-top: -80px;
            margin-bottom: 20px
        }

        .little-profile .pro-img img {
            width: 128px;
            height: 128px;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 100%
        }

        html body .m-b-0 {
            margin-bottom: 0px
        }

        h3 {
            line-height: 30px;
            font-size: 21px
        }

        .btn-rounded.btn-md {
            padding: 12px 35px;
            font-size: 16px
        }

        html body .m-t-10 {
            margin-top: 10px
        }

        .btn-primary,
        .btn-primary.disabled {
            background: #7460ee;
            border: 1px solid #7460ee;
            -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            -webkit-transition: 0.2s ease-in;
            -o-transition: 0.2s ease-in;
            transition: 0.2s ease-in
        }

        .btn-rounded {
            border-radius: 60px;
            padding: 7px 18px
        }

        .m-t-20 {
            margin-top: 20px
        }

        .text-center {
            text-align: center !important
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #455a64;
            font-family: "Poppins", sans-serif;
            font-weight: 400
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'deneme') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
