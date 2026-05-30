<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ivoire') }} | About Us</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- AlpineJS CDN -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="bg-[#121212] text-white antialiased">
        <x-header />

        <main>
            <section class="relative min-h-[90vh] flex flex-col items-center justify-center text-center px-6 overflow-hidden">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('assets/img/hero.webp') }}" alt="Hero Background" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/80 via-[#0a0a0a]/60 to-[#121212]"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10 max-w-5xl mx-auto pt-20">
                    <div class="flex items-center justify-center gap-4 mb-8 opacity-0 animate-[fadeIn_1s_ease-out_forwards]">
                        <div class="h-[0.5px] w-16 md:w-24 bg-white/40"></div>
                        <span class="text-[10px] md:text-xs font-bold tracking-[0.4em] uppercase text-white">Who We Are</span>
                        <div class="h-[0.5px] w-16 md:w-24 bg-white/40"></div>
                    </div>

                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-medium leading-tight mb-8 tracking-tight opacity-0 animate-[fadeInUp_1s_ease-out_0.3s_forwards]" style="font-family: 'Playfair Display', serif;">
                        The legal and compliance partner for Africa's <span class="italic text-[#cda151]">technology companies.</span>
                    </h2>

                    <p class="text-base md:text-lg text-white/70 max-w-3xl mx-auto mb-10 leading-relaxed opacity-0 animate-[fadeInUp_1s_ease-out_0.6s_forwards]">
                        Ivoire Legal is a Nigeria-based embedded legal and compliance firm. We don't advise from the outside; we operate as your in-house legal department, embedded in your team, executing the work that lets you build, scale, and raise.
                    </p>

                    <div class="opacity-0 animate-[fadeInUp_1s_ease-out_0.9s_forwards]">
                        <a href="/contact" class="inline-flex items-center gap-2 bg-[#cda151] hover:bg-[#b88f40] text-white px-8 py-4 text-xs font-bold uppercase tracking-widest transition-all duration-300">
                            Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#121212] to-transparent z-10"></div>
            </section>

            <section class="relative py-32 px-6 overflow-hidden">
                <!-- Section Background -->
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('assets/img/how.jpg') }}" alt="Operation Background" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-[#0a0a0a]/95"></div>
                </div>

                <div class="relative z-10 max-w-7xl mx-auto">
                    <div class="text-center mb-20">
                        <h2 class="text-4xl md:text-6xl font-light mb-6 tracking-tight" style="font-family: 'Playfair Display', serif;">How we <span class="italic text-[#cda151]">operate</span></h2>
                        <div class="h-[1px] w-24 bg-[#cda151]/50 mx-auto"></div>
                    </div>

                    <!-- Premium 4-Column Rectangular Card Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        
                        <!-- Item 1: Execution -->
                        <div class="group relative bg-[#111111] border border-white/5 hover:border-[#cda151]/30 p-10 rounded-[32px] transition-all duration-500 hover:-translate-y-2 shadow-2xl flex flex-col justify-between min-h-[320px]">
                            <!-- Ambient Glow on hover -->
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#cda151]/0 via-[#cda151]/0 to-[#cda151]/5 rounded-[32px] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <div class="relative z-10">
                                <div class="flex justify-between items-start mb-8">
                                    <span class="text-xs font-bold tracking-[0.2em] text-[#cda151]/60 uppercase">01</span>
                                    <div class="w-8 h-[1px] bg-[#cda151] opacity-40 group-hover:opacity-100 group-hover:w-16 transition-all duration-500"></div>
                                </div>
                                
                                <h3 class="text-2xl font-light text-white mb-4" style="font-family: 'Playfair Display', serif;">Execution</h3>
                                <p class="text-sm text-white/50 leading-relaxed font-light">
                                    We don't just tell you what to do. We do it. Every engagement produces implemented systems, not just memos.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2: Proactive -->
                        <div class="group relative bg-[#111111] border border-white/5 hover:border-[#cda151]/30 p-10 rounded-[32px] transition-all duration-500 hover:-translate-y-2 shadow-2xl flex flex-col justify-between min-h-[320px]">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#cda151]/0 via-[#cda151]/0 to-[#cda151]/5 rounded-[32px] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <div class="relative z-10">
                                <div class="flex justify-between items-start mb-8">
                                    <span class="text-xs font-bold tracking-[0.2em] text-[#cda151]/60 uppercase">02</span>
                                    <div class="w-8 h-[1px] bg-[#cda151] opacity-40 group-hover:opacity-100 group-hover:w-16 transition-all duration-500"></div>
                                </div>
                                
                                <h3 class="text-2xl font-light text-white mb-4" style="font-family: 'Playfair Display', serif;">Proactive</h3>
                                <p class="text-sm text-white/50 leading-relaxed font-light">
                                    We monitor regulatory changes and flag issues before they become problems. Clients shouldn't have to ask.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3: Commercial -->
                        <div class="group relative bg-[#111111] border border-white/5 hover:border-[#cda151]/30 p-10 rounded-[32px] transition-all duration-500 hover:-translate-y-2 shadow-2xl flex flex-col justify-between min-h-[320px]">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#cda151]/0 via-[#cda151]/0 to-[#cda151]/5 rounded-[32px] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <div class="relative z-10">
                                <div class="flex justify-between items-start mb-8">
                                    <span class="text-xs font-bold tracking-[0.2em] text-[#cda151]/60 uppercase">03</span>
                                    <div class="w-8 h-[1px] bg-[#cda151] opacity-40 group-hover:opacity-100 group-hover:w-16 transition-all duration-500"></div>
                                </div>
                                
                                <h3 class="text-2xl font-light text-white mb-4" style="font-family: 'Playfair Display', serif;">Commercial</h3>
                                <p class="text-sm text-white/50 leading-relaxed font-light">
                                    We understand your model, investors, and market, so our work supports growth, not just compliance.
                                </p>
                            </div>
                        </div>

                        <!-- Item 4: Quality -->
                        <div class="group relative bg-[#111111] border border-white/5 hover:border-[#cda151]/30 p-10 rounded-[32px] transition-all duration-500 hover:-translate-y-2 shadow-2xl flex flex-col justify-between min-h-[320px]">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#cda151]/0 via-[#cda151]/0 to-[#cda151]/5 rounded-[32px] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <div class="relative z-10">
                                <div class="flex justify-between items-start mb-8">
                                    <span class="text-xs font-bold tracking-[0.2em] text-[#cda151]/60 uppercase">04</span>
                                    <div class="w-8 h-[1px] bg-[#cda151] opacity-40 group-hover:opacity-100 group-hover:w-16 transition-all duration-500"></div>
                                </div>
                                
                                <h3 class="text-2xl font-light text-white mb-4" style="font-family: 'Playfair Display', serif;">Quality</h3>
                                <p class="text-sm text-white/50 leading-relaxed font-light">
                                    All work is supervised by senior counsel and follows standardised workflows for consistent, quality output.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
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

            .animate-fadeInUp {
                animation: fadeInUp 1s ease-out forwards;
            }
        </style>

        <x-cta />
        <x-footer />
    </body>
</html>
