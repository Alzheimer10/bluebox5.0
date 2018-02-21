<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <meta name="description" content="">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
  <!-- Theme initialization -->
  <link rel="stylesheet" id="theme-style" href="{{ asset('css/app-blue.css') }}">
</head>
<body>

  <div class="main-wrapper">

      <div class="app" id="app">          
          <!-- header -->
          @include('bluebox.layouts.components.navbar')
          <!-- header-END -->
          
          <!-- sidebar -->
          @include('bluebox.layouts.components.sider')
          <!-- sidebar-END -->

          <article class="content dashboard-page">
              <!-- Content -->
                @yield('content')
              <!-- Content-END -->
          </article> 
          
          <!-- sidebar -->
          @include('bluebox.layouts.components.footer')
          <!-- sidebar-END -->
      </div>

  </div>
  
  <!-- Scripts -->
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
