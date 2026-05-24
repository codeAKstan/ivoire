<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Ivoire') }} | Embedded Legal &amp; Compliance Advisory</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">

        <!-- AlpineJS CDN -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FAF8F5] text-[#151515] font-['Inter'] antialiased">
        <x-header />

        <main>
            <x-hero />
            <x-partners />
            <x-why-embedded />
            <x-how-we-work />
            <x-practices />
            <x-pricing />
            <x-client-stories />
            <x-resources />
            <x-cta />
            <x-footer />
        </main>
    </body>
</html>

