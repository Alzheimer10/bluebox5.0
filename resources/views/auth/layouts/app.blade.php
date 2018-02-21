<!doctype html>
<html class="no-js" ang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> {{ config('app.name', 'Laravel') }} </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <!-- Theme initialization -->
        <link rel="stylesheet" id="theme-style" href="{{ asset('css/app-blue.css') }}">
    </head>
    <body>
        
        @yield('content')
        <!-- Reference block for JS -->
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>