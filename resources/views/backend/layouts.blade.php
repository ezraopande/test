
    


<!DOCTYPE html>
<html lang="en">

<head>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $settings->name ?? config('app.name', 'Laravel') }}</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

   <!-- Load CSS files the Laravel way -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/bootstrap/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />

  </head>

  <body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">


      <div class="main-container">

      @include('backend.sidebar')


        <div class="app-container">

        @include('backend.header')

     
          <div class="app-hero-header d-flex align-items-start">


          </div>

 
          <div class="app-body">





          @yield('content')

           


          </div>
   

      
          <div class="app-footer">
            <span>&copy; {{ date('Y') }} {{ $settings->name ?? config('app.name', 'Laravel') }} | {{ old('tagline', $settings->tagline) }}</span>
          </div>
     

        </div>
     

      </div>
    

    </div>


        <!-- Load JS files the Laravel way -->
        <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

        <script src="{{ asset('admin/assets/vendor/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/apex/custom/common/sparkline.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/sales-report.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/visitors.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/sparkline.js') }}"></script>

        <!-- Custom JS files -->
        <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

 
  </body>


</html>