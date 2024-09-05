<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    @if (!empty($meta))
        <x-seo::meta :meta="$meta" />
    @else
        <title> {{ $title . '-' . ' Admit Station' }} </title>
    @endif

    {{-- @include('components/layouts/seo') --}}
    <!-- CSS here -->
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>

<body>

    @if (Route::is('login') or Route::is('register'))
        @livewire('partials.layouts-menu')
    @elseif(Route::is('student*', 'institute*'))
        @livewire('partials.layouts-student-dashboard-menu')
    @else
        @livewire('partials.layouts-menu')
    @endif

    <main>
        {{ $slot }}
    </main>
    @livewire('partials.layouts-footer')

    <!-- JS here  -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/hover-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/tween-max.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @vite(['resources/js/app.js'])
    @livewireScripts
</body>

</html>
