<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ivoire') }} | Practice Areas</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.ico') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#121212] text-white antialiased">
        <x-header />

        <main class="min-h-[60vh] pt-32 pb-20">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <h1 class="text-6xl lg:text-8xl font-black tracking-tighter mb-8">Practice Areas</h1>
                <p class="text-xl text-white/60 max-w-2xl">Content coming soon...</p>
            </div>
        </main>

        <x-cta />
        <x-footer />
    </body>
</html>
