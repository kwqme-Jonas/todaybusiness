<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'Businesstodaygh')}}</title>

        <!-- Scripts -->
        <link rel="stylesheet" href="/css/main.css">

        <!-- icon -->
        <link rel="icon" href="/Favicon.ico">
        
    </head>
    <body class=" bg-gray-100">
        @include('inc.navbar')
        @yield('content')
        @include('inc.footer')
    </body>
</html>
