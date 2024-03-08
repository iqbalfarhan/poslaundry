<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>

    <body>

        @auth
            <div class="drawer lg:drawer-open">
                <input type="checkbox" id="drawer" class="drawer-toggle">
                <div class="drawer-content">
                    @livewire('partial.navbar', [
                        'title' => $title ?? null,
                    ])
                    <div class="page-wrapper">
                        {{ $slot }}
                    </div>
                    @livewire('partial.footer')
                </div>
                <div class="drawer-side">
                    <label for="drawer" class="drawer-overlay"></label>
                    @livewire('partial.sidebar')
                </div>
            </div>
        @endauth

        @guest
            <div class="grid place-content-center min-h-screen bg-base-200">
                <div class="mockup-window bg-base-100 border-2">
                    <div class="card">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @endguest
    </body>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>
