<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ivoire') }} | Resources</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- AlpineJS CDN -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
                    
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-light text-[#151515] leading-tight mb-10 tracking-tight" style="font-family: 'Playfair Display', serif;">
                        Insights for the <span class="italic text-[#cda151]">Digital Economy.</span>
                    </h1>

                    <div class="max-w-2xl">
                        <p class="text-lg md:text-xl text-gray-500 font-light leading-relaxed mb-12">
                            Stay ahead of every regulatory change with Ivoire Legal's pan-African roundup, quarterly reports, and instant alerts for technology companies.
                        </p>
                    </div>

                    <!-- Category Filters -->
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="{{ route('resources') }}" class="px-8 py-3 rounded-xl text-[10px] font-bold uppercase tracking-widest transition-all {{ !request('category') ? 'bg-[#151515] text-white shadow-xl shadow-[#151515]/10' : 'bg-white text-gray-500 border border-gray-100 hover:border-[#cda151]/30 hover:text-[#cda151]' }}">
                            All Insights
                        </a>
                        @foreach(['Regulatory Alert', 'Insights', 'Toolkits', 'Case Studies'] as $cat)
                        <a href="{{ route('resources', ['category' => $cat]) }}" class="px-8 py-3 rounded-xl text-[10px] font-bold uppercase tracking-widest transition-all {{ request('category') == $cat ? 'bg-[#151515] text-white shadow-xl shadow-[#151515]/10' : 'bg-white text-gray-500 border border-gray-100 hover:border-[#cda151]/30 hover:text-[#cda151]' }}">
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
                backdrop-filter: blur(12px) !important;
            }
            #main-header a, #main-header button {
                color: #151515 !important;
            }
            #main-header a:hover, #main-header button:hover {
                color: #cda151 !important;
            }
            /* Exclude Book a Call button from the black text color override */
            #main-header a.bg-\[\#151515\] {
                color: #ffffff !important;
            }
            #main-header a.bg-\[\#151515\]:hover {
                color: #ffffff !important;
            }
            #main-header img {
                filter: none !important;
            }
        </style>

        <x-cta />
        <x-footer />
    </body>
</html>
