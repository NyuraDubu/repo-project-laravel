@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://use.typekit.net/wwx2vqx.css">

<!doctype html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Site'))</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-dvh text-slate-900 antialiased">
        <header class="section-white bleed">
            <div class="container-page py-4">
            @yield('header')
            </div>
        </header>

        <main class="mx-auto">
            @yield('content')
        </main>

        <footer>
            <div class="container mx-auto px-4 py-6 text-sm text-slate-500">
                @yield('footer')
            </div>
        </footer>
        @stack('scripts')
    </body>
</html>
