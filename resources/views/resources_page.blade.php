<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ivoire') }} | Resources</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#121212] text-white antialiased">
        <x-header />

        <main class="bg-white">
            <!-- Resources Hero -->
            <section class="relative pt-40 pb-24 px-6 overflow-hidden bg-[#fafafa]">
                <div class="max-w-7xl mx-auto relative z-10">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="h-[1px] w-12 bg-[#cda151]"></div>
                        <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#cda151]">Knowledge Hub</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-light text-[#1a365d] leading-tight mb-10 tracking-tight" style="font-family: 'Playfair Display', serif;">
                        Insights for the <span class="italic">Digital Economy.</span>
                    </h1>

                    <div class="max-w-2xl">
                        <p class="text-lg md:text-xl text-gray-500 font-light leading-relaxed mb-12">
                            Stay ahead of every regulatory change with Ivoire Legal's pan-African roundup, quarterly reports, and instant alerts for technology companies.
                        </p>
                    </div>

                    <!-- Category Filters -->
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="{{ route('resources') }}" class="px-8 py-3 rounded-xl text-[10px] font-bold uppercase tracking-widest transition-all {{ !request('category') ? 'bg-[#1a365d] text-white shadow-xl shadow-[#1a365d]/20' : 'bg-white text-gray-400 border border-gray-100 hover:border-[#1a365d]/20 hover:text-[#1a365d]' }}">
                            All Insights
                        </a>
                        @foreach(['Regulatory Alert', 'Insights', 'Toolkits', 'Case Studies'] as $cat)
                        <a href="{{ route('resources', ['category' => $cat]) }}" class="px-8 py-3 rounded-xl text-[10px] font-bold uppercase tracking-widest transition-all {{ request('category') == $cat ? 'bg-[#1a365d] text-white shadow-xl shadow-[#1a365d]/20' : 'bg-white text-gray-400 border border-gray-100 hover:border-[#1a365d]/20 hover:text-[#1a365d]' }}">
                            {{ $cat }}
                        </a>
                        @endforeach
                    </div>

                    
                </div>

                <!-- Decorative Pattern -->
                <div class="absolute top-0 right-0 w-1/3 h-full bg-[#cda151]/5 -skew-x-12 translate-x-1/2"></div>
            </section>

            <!-- Spacing for the overlapping newsletter card -->
            <div class="h-40 bg-white"></div>

            <!-- Existing Resources Component -->
            <x-resources />
        </main>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');
            
            /* Custom styles for light header on this page */
            #main-header {
                background: rgba(250, 250, 250, 0.8) !important;
                backdrop-blur: xl !important;
            }
            #main-header a, #main-header button {
                color: #1a365d !important;
                border-color: rgba(26, 54, 93, 0.1) !important;
            }
            #main-header img {
                filter: none !important;
            }
        </style>

        <x-cta />
        <x-footer />
    </body>
</html>
