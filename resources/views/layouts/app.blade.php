<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
                        <div class="sidebar-sticky pt-3">
                            <div class="d-flex">  
                                <h3 class="font-weight-bold text-warning py-1 px-1">REKRUITMENT</h3>
                            </div>
                        <ul class="nav flex-column py-4">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link text-dark">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pengguna')}}" class="nav-link text-dark">Pengguna</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('bagian')}}" class="nav-link text-dark">Bagian</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pelamar')}}" class="nav-link text-dark">Pelamar</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('penerimaan')}}" class="nav-link text-dark">Penerimaan</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-dark">Laporan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                    <div class="col-md-8">
                        <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
