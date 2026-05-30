<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ivoire') }} | Contact Us</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- AlpineJS CDN -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="bg-[#121212] text-white antialiased">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section class="relative min-h-[60vh] flex flex-col items-center justify-center text-center px-6 overflow-hidden">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('assets/img/contact.webp') }}" alt="Contact Hero" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/90 via-[#0a0a0a]/70 to-[#0a0a0a]"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10 max-w-5xl mx-auto pt-20">
                    <div class="flex items-center justify-center gap-4 mb-8 opacity-0 animate-[fadeIn_1s_ease-out_forwards]">
                        <div class="h-[0.5px] w-12 md:w-20 bg-[#cda151]/50"></div>
                        <span class="text-[10px] md:text-xs font-bold tracking-[0.4em] uppercase text-[#cda151]">Connect</span>
                        <div class="h-[0.5px] w-12 md:w-20 bg-[#cda151]/50"></div>
                    </div>

                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-light leading-tight mb-8 tracking-tight opacity-0 animate-[fadeInUp_1s_ease-out_0.3s_forwards]" style="font-family: 'Playfair Display', serif;">
                        Let's build your <span class="italic text-[#cda151]">legal infrastructure.</span>
                    </h1>

                    <p class="text-base md:text-lg text-white/60 max-w-3xl mx-auto mb-10 leading-relaxed font-light opacity-0 animate-[fadeInUp_1s_ease-out_0.6s_forwards]">
                        Book a free 45-minute consultation. No commitment, no intake forms. We'll listen and tell you exactly what you need.
                    </p>
                </div>

                <!-- Decorative elements -->
                <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0a0a0a] to-transparent z-10"></div>
            </section>

            <!-- Contact Section -->
            <section class="py-24 px-6 bg-[#0a0a0a]">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                        <!-- Left: Info -->
                        <div class="space-y-12">
                            <div>
                                <h2 class="text-3xl md:text-4xl font-light text-white mb-8" style="font-family: 'Playfair Display', serif;">Direct <span class="italic text-[#cda151]">Channels</span></h2>
                                <p class="text-white/50 font-light leading-relaxed mb-12 max-w-md">
                                    Whether you're scaling fast or just getting started, our team is ready to embed within your operations.
                                </p>
                            </div>

                            <div class="space-y-8">
                                <div class="flex items-start gap-6 group">
                                    <div class="w-12 h-12 bg-[#111111] border border-white/5 flex items-center justify-center rounded-xl group-hover:border-[#cda151]/50 transition-all duration-500">
                                        <svg class="w-5 h-5 text-[#cda151]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest mb-1">Email Us</p>
                                        <a href="mailto:info@ivoirelegal.com" class="text-white text-lg hover:text-[#cda151] transition-colors">info@ivoirelegal.com</a>
                                    </div>
                                </div>

                                <div class="flex items-start gap-6 group">
                                    <div class="w-12 h-12 bg-[#111111] border border-white/5 flex items-center justify-center rounded-xl group-hover:border-[#cda151]/50 transition-all duration-500">
                                        <svg class="w-5 h-5 text-[#cda151]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest mb-1">Call Us</p>
                                        <a href="tel:+2348060663685" class="text-white text-lg hover:text-[#cda151] transition-colors">+234 806 066 3685</a>
                                    </div>
                                </div>

                                <div class="flex items-start gap-6 group">
                                    <div class="w-12 h-12 bg-[#111111] border border-white/5 flex items-center justify-center rounded-xl group-hover:border-[#cda151]/50 transition-all duration-500">
                                        <svg class="w-5 h-5 text-[#cda151]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest mb-1">Our Office</p>
                                        <p class="text-white text-lg leading-relaxed">Plot 1A, Kunle Ogunba Street,<br>Lekki Phase 1, Lagos State</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Action -->
                        <div class="flex flex-col justify-center items-center lg:items-start space-y-10">
                            <div class="bg-[#111111] p-12 md:p-16 rounded-[40px] border border-white/5 shadow-2xl w-full text-center lg:text-left">
                                <h3 class="text-2xl md:text-3xl font-light text-white mb-6" style="font-family: 'Playfair Display', serif;">Ready to <span class="italic text-[#cda151]">Start?</span></h3>
                                <p class="text-white/50 font-light leading-relaxed mb-10 max-w-md mx-auto lg:mx-0">
                                    Skip the intake forms. Pick a time that works for you and let's discuss your roadmap directly.
                                </p>
                                <a href="https://calendly.com/ivoirelegal" target="_blank" class="inline-flex items-center justify-center gap-3 bg-[#cda151] hover:bg-[#b88f40] text-black font-bold px-10 py-5 rounded-xl uppercase tracking-[0.2em] text-xs transition-all duration-500 shadow-lg shadow-[#cda151]/20 group">
                                    Book a Consultation
                                    <svg class="w-5 h-5 transition-transform duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>

                    
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');

            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        </style>

        <x-cta />
        <x-footer />
    </body>
</html>
