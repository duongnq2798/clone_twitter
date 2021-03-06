<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Twitter</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>
        body{
            background-color: rgb(21, 32, 43);
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div id="app">
        <section class="px-8 py-4">
            <header class="container mx-auto">  
                <h1>
                    <img style="width: 60px;height:60px" src="/images/logo.png" alt="Twitter">
                </h1>
            </header>
        </section>
 
        <div class="flex lg:justify-between px-8 ">
            <div class="lg:w-32 ">
                @include('_sidebar-link')
            </div>
            <div class="flex-none sm:flex-1 md:flex-auto lg:flex-initial xl:flex-1 lg:mx-10">
               @yield('content')
            </div>
            <div class="lg:w-1/6">
                @include('_friend-list')
            </div>
        </div>

        <section class="px-8">
            <main class="container mx-auto">
                {{-- @yield('content') --}}
            </main>
        </section>
    </div>
</body>
</html>
