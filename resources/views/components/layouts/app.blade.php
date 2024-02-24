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
                    @livewire('partial.navbar')
                    <div class="page-wrapper mb-12">
                        @livewire('partial.header', [
                            'title' => $title ?? config('app.name'),
                        ])
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
            <div class="grid place-content-center h-screen">
                <div class="card">
                    <x-tabler-wash-dry-1 class="icon-24 self-center" />
                    {{ $slot }}
                </div>
            </div>
        @endguest
    </body>

</html>
