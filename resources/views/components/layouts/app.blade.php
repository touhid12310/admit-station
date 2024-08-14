<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
         <!-- CSS here -->
         @vite([
               'resources/assets/css/bootstrap.css',
               'resources/assets/css/animate.css',
               'resources/assets/css/slick.css',
               'resources/assets/css/swiper-bundle.css',
               'resources/assets/css/hover-reveal.css',
               'resources/assets/css/magnific-popup.css',
               'resources/assets/css/font-awesome-pro.css',
               'resources/assets/css/spacing.css',
               'resources/assets/css/main.css',
         ])
         @livewireStyles
    </head>
   <body>
      @if (Route::has('login'))
         @auth
            @livewire('partials.layouts-dashboard-menu')
         @else
            @livewire('partials.layouts-head')
            @livewire('partials.layouts-menu')
         @endauth
         
            <main>
               {{ $slot }}
            </main>
         @livewire('partials.layouts-footer')
      @endif
      
      <!-- JS here  -->
      @vite([
         'resources/assets/js/vendor/jquery.js',
         'resources/assets/js/vendor/waypoints.js',
         'resources/assets/js/bootstrap-bundle.js',
         'resources/assets/js/swiper-bundle.js',
         'resources/assets/js/slick.js',
         'resources/assets/js/magnific-popup.js',
         'resources/assets/js/nice-select.js',
         'resources/assets/js/purecounter.js',
         'resources/assets/js/wow.js',
         'resources/assets/js/isotope-pkgd.js',
         'resources/assets/js/hover-reveal.js',
         'resources/assets/js/flatpickr.js',
         'resources/assets/js/tween-max.js',
         'resources/assets/js/imagesloaded-pkgd.js',
         'resources/assets/js/ajax-form.js',
         'resources/assets/js/main.js',
      ])
      @livewireScripts
   </body>
</html>
