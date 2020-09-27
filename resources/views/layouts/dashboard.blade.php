<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>User Dashboard</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">


        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased">
        @include('partials.dashboard.navigation.top')
        
        <div class='main'>
            @include('partials.dashboard.navigation.side')
            @yield('content')
        </div>

        @include('partials.dashboard.footer')
    </body>
</html>
