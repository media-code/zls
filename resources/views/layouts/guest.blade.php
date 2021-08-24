<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="https://kit.fontawesome.com/f7b32824ee.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('layouts.guest-navigation')
        <div class="font-sans text-grey-900 antialiased">
            {{ $slot }}
        </div>
        @include('layouts.guest-footer')
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ_6PS7G-nbyHGZd9kcsRC6J-try7Cu1A"></script>
    </body>
</html>
