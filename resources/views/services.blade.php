<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ivoire') }} | Services</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#121212] text-white antialiased">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section class="relative min-h-[70vh] flex flex-col items-center justify-center text-center px-6 overflow-hidden">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('assets/img/consult.webp') }}" alt="Services Hero" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/90 via-[#0a0a0a]/70 to-[#0a0a0a]"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10 max-w-5xl mx-auto pt-20">
                    <div class="flex items-center justify-center gap-4 mb-8 opacity-0 animate-[fadeIn_1s_ease-out_forwards]">
                        <div class="h-[0.5px] w-12 md:w-20 bg-[#cda151]/50"></div>
                        <span class="text-[10px] md:text-xs font-bold tracking-[0.4em] uppercase text-[#cda151]">Our Expertise</span>
                        <div class="h-[0.5px] w-12 md:w-20 bg-[#cda151]/50"></div>
                    </div>

                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-light leading-tight mb-8 tracking-tight opacity-0 animate-[fadeInUp_1s_ease-out_0.3s_forwards]" style="font-family: 'Playfair Display', serif;">
                        Everything your technology business needs to <span class="italic text-[#cda151]">operate legally.</span>
                    </h1>

                    <p class="text-base md:text-lg text-white/60 max-w-3xl mx-auto mb-10 leading-relaxed font-light opacity-0 animate-[fadeInUp_1s_ease-out_0.6s_forwards]">
                        A single integrated service stream of Embedded Legal & Compliance Advisory, delivered across six practice areas, all under one retainer. Built for technology companies at every stage.
                    </p>
                </div>

                <!-- Decorative elements -->
                <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0a0a0a] to-transparent z-10"></div>
            </section>

            <!-- Practice Areas Grid -->
            <x-practices :services="$services" />
        </main>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
        </style>

        <x-cta />
        <x-footer />
    </body>
</html>
