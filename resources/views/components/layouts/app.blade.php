<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    @if (seo()->getTitle())
        <x-seo::meta />
    @else
        <title> {{ $title }} </title>
    @endif

    {{-- @include('components/layouts/seo') --}}
    <!-- CSS here -->
    @vite(['resources/css/app.css'])

    @stack('styles')
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

    <div class="menu-container">
        <div class="menu-box">
            <div class="menu-icons">
                <!-- Home -->
                <div class="menu-item move-left {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}" wire:navigate>
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <!-- Institute List -->
                <div class="menu-item move-left {{ request()->is('institute-list') ? 'active' : '' }}">
                    <a href="{{ url('institute-list') }}" wire:navigate>
                        <i class="fa-solid fa-graduation-cap"></i>
                    </a>
                </div>
                <!-- Campus -->
                <div class="menu-item move-right {{ request()->is('login') ? 'active' : '' }}">
                    <a href="{{ url('login') }}" wire:navigate>
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
                <!-- Blog -->
                <div class="menu-item move-right {{ request()->is('blog') ? 'active' : '' }}">
                    <a href="{{ url('blog') }}" wire:navigate>
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>




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

    @stack('scripts')

    @vite(['resources/js/app.js'])

    <script>
        document.addEventListener('livewire:navigate', (event) => {
            history.pushState({}, '', event.detail.url);
        });


        const button = document.querySelector(".main-circle");
        const circles = document.querySelectorAll(".circles");
        const cross = document.querySelector(".cross");
        const crossbg = document.querySelector(".bg");
        const menuIcons = document.querySelectorAll(".menu-icons svg");

        button.addEventListener("click", function() {
            cross.classList.toggle("show");
            crossbg.classList.toggle("show");
            circles.forEach((element) => {
                element.classList.toggle("show");
            });
            menuIcons.forEach((element) => {
                element.classList.toggle("colorchange");
            });
        });
    </script>
    @livewireScripts
</body>

</html>
