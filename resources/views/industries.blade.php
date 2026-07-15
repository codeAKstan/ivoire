<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ivoire') }} | Industries &amp; Sector Expertise</title>
        
        <!-- Meta Tags for SEO -->
        <meta name="description" content="Sector expertise across Africa's technology landscape. We build legal infrastructure for fintech, healthtech, digital assets, SaaS, AI, and funded startups.">
        
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

        <style>
            [x-cloak] { display: none !important; }
            
            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            @keyframes pulse-slow {
                0%, 100% { transform: scale(1); opacity: 0.4; }
                50% { transform: scale(1.15); opacity: 0.8; }
            }
            
            .animate-fadeInUp {
                animation: fadeInUp 1s ease-out forwards;
            }
            .animate-fadeIn {
                animation: fadeIn 1s ease-out forwards;
            }
            .pulse-indicator {
                animation: pulse-slow 3s infinite ease-in-out;
            }
        </style>
    </head>
    <body class="bg-[#121212] text-white antialiased font-['Inter']">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section class="relative min-h-[85vh] flex flex-col items-center justify-center text-center px-6 overflow-hidden">
                <!-- Background Image with Dark Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('assets/img/building-2.webp') }}" alt="Technology Sectors Background" class="w-full h-full object-cover opacity-20 scale-105 blur-[2px]">
                    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/90 via-[#0a0a0a]/75 to-[#121212]"></div>
                </div>

                <!-- Hero Content -->
                <div class="relative z-10 max-w-5xl mx-auto pt-28">
                    <!-- Elegant Tagline Badge -->
                    <div class="flex items-center justify-center gap-4 mb-8 opacity-0 animate-fadeIn">
                        <div class="h-[0.5px] w-16 md:w-24 bg-white/40"></div>
                        <span class="text-[10px] md:text-xs font-bold tracking-[0.4em] uppercase text-[#cda151]">Sector Expertise</span>
                        <div class="h-[0.5px] w-16 md:w-24 bg-white/40"></div>
                    </div>

                    <!-- Heading -->
                    <h1 class="text-4xl md:text-6xl lg:text-7.5xl font-medium leading-[1.1] mb-8 tracking-tight opacity-0 animate-[fadeInUp_1s_ease-out_0.3s_forwards]" style="font-family: 'Playfair Display', serif;">
                        Expertise across Africa's <br>
                        <span class="italic text-[#cda151]">technology landscape.</span>
                    </h1>

                    <!-- Description -->
                    <p class="text-base md:text-lg text-white/70 max-w-3xl mx-auto mb-12 leading-relaxed opacity-0 animate-[fadeInUp_1s_ease-out_0.6s_forwards] font-light">
                        We operate at the frontier of the digital economy. Our model is built for fast-moving technology companies operating in Africa, whether you are entering highly regulated markets, scaling across borders, or both.
                    </p>

                    <!-- Scroll CTA -->
                    <div class="opacity-0 animate-[fadeInUp_1s_ease-out_0.9s_forwards]">
                        <a href="#sectors-grid" class="inline-flex flex-col items-center gap-2 group text-white/40 hover:text-white transition-colors duration-300">
                            <span class="text-[10px] uppercase tracking-widest font-bold">Explore Sectors</span>
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Decorative Gradient Fade -->
                <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#121212] to-transparent z-10"></div>
            </section>

            <!-- Sectors Section -->
            <section id="sectors-grid" class="relative py-32 px-6 bg-[#0a0a0a] overflow-hidden border-t border-white/5">
                <!-- Background Accent Glows -->
                <div class="absolute top-1/4 left-0 w-[500px] h-[500px] bg-[#cda151]/3 blur-[150px] rounded-full -ml-64 pointer-events-none"></div>
                <div class="absolute bottom-1/4 right-0 w-[500px] h-[500px] bg-[#cda151]/3 blur-[150px] rounded-full -mr-64 pointer-events-none"></div>

                <div class="max-w-7xl mx-auto relative z-10">
                    <!-- Section Header -->
                    <div class="mb-24 max-w-none">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="h-[1px] w-12 bg-[#cda151]"></div>
                            <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#cda151]">Industries Covered</span>
                        </div>
                        <h2 class="text-white text-4xl sm:text-5xl lg:text-6xl font-light tracking-tight mb-6" style="font-family: 'Playfair Display', serif;">
                            Built for <span class="text-[#cda151] italic font-serif">Frontier Innovators</span>
                        </h2>
                        <p class="text-white/50 text-base sm:text-lg leading-relaxed font-light">
                            Traditional advice doesn't solve technology-specific problems. We specialize in mapping out and building legal frameworks tailored to specific operational requirements.
                        </p>
                    </div>

                    <!-- Sectors 3-Column Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        
                        <!-- AI & Software Businesses -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px]">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">01</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">IP Intensive</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">AI &amp; Software</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Emerging legal and compliance questions around data usage, model IP frameworks, AI ethics governance, commercial agreements, and cross-border data structures.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['IP Frameworks', 'Data Policies', 'SaaS Contracts', 'NDPR'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Fintech & Payments -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px] lg:mt-0">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">02</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">High Complexity</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">Fintech &amp; Payments</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Navigating payment (PSP, PSSP, PSB) licensing and MFB approvals across CBN, FIRS, and SEC, with robust AML/KYC frameworks and investor-ready compliance packages.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['CBN Licences', 'AML/KYC', 'PSSP', 'FIRS', 'SHA'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Digital Assets & VASPs -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px] lg:mt-0">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">03</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">Emerging Frameworks</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">Digital Assets &amp; VASPs</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Securing SEC VASP registration, managing crypto-asset AML obligations, resolving CBN payment gateway guidelines, and advising on token structuring.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['SEC Registry', 'VASP', 'AML/CFT', 'Token Structuring'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- SaaS & Tech Platforms -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px]">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">04</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">Data-Heavy</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">SaaS &amp; Platforms</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Building data protection programs for NDPR compliance, drafting multi-jurisdictional terms of service, and managing data processing agreements (DPAs).
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['NDPR Compliance', 'DPAs', 'Terms of Service', 'SaaS Docs'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Funded Startups -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px]">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">05</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">Investor Ready</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">Funded Startups</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Legal structures passing institutional diligence: co-founder agreements, cap tables, SAFE notes, group holding companies, and Series round documentation packages.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['SHA', 'SAFE Notes', 'Cap Table', 'Holding Co', 'ESOP'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Healthtech -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px]">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">06</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">Sensitive Data</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">Healthtech</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Health data protection auditing, sector-specific licensing compliance (MDCN, PCN), medical platform agreements, and liabilities mitigation structure.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['Health Data Protection', 'PCN', 'Medical Platforms'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Insurtech -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px]">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">07</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">NAICOM Regulated</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">Insurtech</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                NAICOM licensing pathway navigation, drafting distribution partnership agreements, policy drafting, and digital insurance integration compliance.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['NAICOM', 'Policy Docs', 'Partner Contracts'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Agritech & Logistics -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px]">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">08</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">Supply Chain</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">Agritech &amp; Logistics</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Developing supply chain contract frameworks, marketplace agreement terms, payment provider integrations, and agricultural partnership agreements.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['Supply Contracts', 'Marketplace Terms', 'CBN Compliance'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- E-commerce & Marketplaces -->
                        <div class="group bg-[#121212]/80 hover:bg-[#121212] p-8 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 flex flex-col min-h-[380px]">
                            <div class="flex justify-between items-start mb-6">
                                <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">09</span>
                                <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">Multi-Party</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">E-commerce &amp; Marketplaces</h3>
                            <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300">
                                Formulating seller service level agreements, customer-protection policy compliance, refund terms, and payment settlement structures.
                            </p>
                            <div class="mt-auto pt-4 border-t border-white/5 flex flex-wrap gap-2">
                                @foreach(['Seller Agreements', 'Consumer Rights', 'Settlement Terms'] as $tag)
                                    <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Wide 10th Card: Foreign Market Entry -->
                        <div class="group bg-gradient-to-r from-[#121212] to-[#151515] hover:to-[#1a1a1a] p-10 rounded-2xl border border-white/5 hover:border-[#cda151]/30 shadow-sm hover:shadow-2xl hover:shadow-[#cda151]/5 transition-all duration-500 hover:-translate-y-1.5 lg:col-span-3 flex flex-col lg:flex-row lg:items-center justify-between gap-8 min-h-[250px] mt-4">
                            <div class="max-w-2xl">
                                <div class="flex items-center gap-4 mb-6">
                                    <span class="text-4xl font-serif italic text-[#cda151]/15 group-hover:text-[#cda151]/30 transition-colors duration-500">10</span>
                                    <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#cda151]/10">Pan-African</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-3 group-hover:text-[#cda151] transition-colors duration-300">Foreign Market Entry</h3>
                                <p class="text-white/40 group-hover:text-white/60 leading-relaxed font-light text-sm mb-6 transition-colors duration-300 max-w-xl">
                                    Assisting international technology scaleups entering Nigeria and African markets. We cover corporate structures, localized regulatory strategies, and engagement with regulators.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach(['Market Entry Strategy', 'Offshore Incorporation', 'Regulator Liaison', 'Local Directorship'] as $tag)
                                        <span class="bg-white/5 text-white/50 text-[9px] font-medium tracking-wide px-2.5 py-1 rounded-md border border-white/[0.03]">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Styled Interactive Icon/Visual -->
                            <div class="shrink-0 flex items-center justify-center relative w-full lg:w-64 h-32 lg:h-auto overflow-hidden">
                                <div class="absolute w-32 h-32 bg-[#cda151]/5 rounded-full blur-xl pulse-indicator"></div>
                                <div class="relative flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center font-bold text-xs hover:border-[#cda151]/50 hover:bg-[#cda151]/10 transition-colors text-[#cda151]">Global</div>
                                    <svg class="w-8 h-8 text-white/20 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                    <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center font-bold text-xs hover:border-[#cda151]/50 hover:bg-[#cda151]/10 transition-colors text-[#cda151]">Africa</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Pan-African Reach Section -->
            <section class="relative py-32 px-6 bg-[#121212] overflow-hidden border-t border-white/5">
                <!-- Background visual details -->
                <div class="absolute inset-0 bg-[radial-gradient(#ffffff/0.01_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
                
                <div class="max-w-7xl mx-auto relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                        
                        <!-- Left side content -->
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="h-[1px] w-12 bg-[#cda151]"></div>
                                <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#cda151]">Pan-African Reach</span>
                            </div>
                            <h2 class="text-white text-4xl sm:text-5xl lg:text-6xl font-light tracking-tight mb-8 leading-[1.1]" style="font-family: 'Playfair Display', serif;">
                                Nigerian expertise. <br>
                                <span class="text-[#cda151] italic font-serif">Continental reach.</span>
                            </h2>
                            <p class="text-white/60 text-base sm:text-lg leading-relaxed font-light mb-8 max-w-xl">
                                In addition to our Nigerian headquarters, Ivoire Legal maintains structured, trusted partner relationships across key African tech hubs. This enables single-point execution for cross-border expansion.
                            </p>
                            
                            <div class="space-y-4 max-w-md">
                                <div class="flex items-center gap-4 p-4 rounded-xl bg-[#0a0a0a]/50 border border-white/5">
                                    <div class="w-8 h-8 rounded-full bg-[#cda151]/10 flex items-center justify-center text-xs font-bold text-[#cda151]">HQ</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-white">Nigeria (Lagos)</h4>
                                        <p class="text-xs text-white/40">Full Service Headquarters &amp; Compliance Hub</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 p-4 rounded-xl bg-[#0a0a0a]/20 border border-white/5">
                                    <div class="w-8 h-8 rounded-full bg-[#cda151]/10 flex items-center justify-center text-xs font-bold text-[#cda151]">NET</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-white">Regional Hubs</h4>
                                        <p class="text-xs text-white/40">Active Partner Networks in Ghana, Kenya, South Africa, and Côte d'Ivoire</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right side interactive map/diagram -->
                        <div class="relative bg-[#0a0a0a] border border-white/5 rounded-3xl p-10 min-h-[420px] flex flex-col justify-between overflow-hidden shadow-2xl group/map">
                            <!-- Background Map Glow -->
                            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-white/[0.02] via-transparent to-transparent pointer-events-none"></div>

                            <!-- SVG Connections -->
                            <svg class="absolute inset-0 w-full h-full pointer-events-none z-0" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="line-grad-gh" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#cda151" stop-opacity="0.6"/>
                                        <stop offset="100%" stop-color="#cda151" stop-opacity="0.2"/>
                                    </linearGradient>
                                    <linearGradient id="line-grad-ke" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#cda151" stop-opacity="0.6"/>
                                        <stop offset="100%" stop-color="#cda151" stop-opacity="0.2"/>
                                    </linearGradient>
                                    <linearGradient id="line-grad-za" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#cda151" stop-opacity="0.6"/>
                                        <stop offset="100%" stop-color="#cda151" stop-opacity="0.2"/>
                                    </linearGradient>
                                </defs>
                                
                                <!-- Connection Lines (Lagos to Accra, Nairobi, Johannesburg) -->
                                <!-- HQ (50%, 40%) -> GH (30%, 35%) -->
                                <path d="M 190, 150 Q 140, 130 90, 160" fill="none" stroke="url(#line-grad-gh)" stroke-width="1.5" stroke-dasharray="4,4" class="group-hover/map:stroke-white/30 transition-all duration-700"/>
                                <!-- HQ (50%, 40%) -> KE (80%, 45%) -->
                                <path d="M 190, 150 Q 250, 160 300, 180" fill="none" stroke="url(#line-grad-ke)" stroke-width="1.5" stroke-dasharray="4,4" class="group-hover/map:stroke-white/30 transition-all duration-700"/>
                                <!-- HQ (50%, 40%) -> ZA (65%, 85%) -->
                                <path d="M 190, 150 Q 200, 240 210, 310" fill="none" stroke="url(#line-grad-za)" stroke-width="1.5" stroke-dasharray="4,4" class="group-hover/map:stroke-white/30 transition-all duration-700"/>
                            </svg>

                            <!-- Node Grid Layout -->
                            <div class="relative z-10 flex flex-col justify-between h-full space-y-12">
                                <div class="flex justify-between items-center border-b border-white/5 pb-4">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-white/30">Network Map</span>
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-[#cda151] flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#cda151] inline-block animate-ping"></span> Live Hubs
                                    </span>
                                </div>
                                
                                <!-- Map Mock Container -->
                                <div class="relative w-full h-64 shrink-0">
                                    
                                    <!-- HQ Node: Nigeria -->
                                    <div class="absolute left-1/2 top-1/4 -translate-x-1/2 -translate-y-1/2 z-10 group/node cursor-pointer">
                                        <div class="absolute -inset-4 rounded-full bg-[#cda151]/10 opacity-0 group-hover/node:opacity-100 transition-all duration-300 blur-sm scale-150"></div>
                                        <div class="w-6 h-6 rounded-full bg-[#cda151] flex items-center justify-center shadow-lg shadow-[#cda151]/30">
                                            <span class="w-2.5 h-2.5 rounded-full bg-white animate-pulse"></span>
                                        </div>
                                        <!-- Tooltip -->
                                        <div class="absolute left-1/2 -bottom-10 -translate-x-1/2 bg-white text-black text-[9px] font-black tracking-wider uppercase px-2.5 py-1 rounded shadow-md whitespace-nowrap opacity-100 transition-opacity">
                                            NG: Nigeria (HQ)
                                        </div>
                                    </div>

                                    <!-- Partner Node: Ghana -->
                                    <div class="absolute left-1/4 top-1/3 -translate-x-1/2 z-10 group/node cursor-pointer">
                                        <div class="absolute -inset-3 bg-[#cda151]/20 rounded-full blur-md opacity-30 pulse-indicator"></div>
                                        <div class="w-4 h-4 rounded-full bg-[#cda151] flex items-center justify-center">
                                            <span class="w-1.5 h-1.5 rounded-full bg-black"></span>
                                        </div>
                                        <!-- Tooltip -->
                                        <div class="absolute left-1/2 -bottom-10 -translate-x-1/2 bg-white/95 backdrop-blur text-black text-[9px] font-black tracking-wider uppercase px-2 py-0.5 rounded shadow opacity-0 group-hover/node:opacity-100 transition-opacity whitespace-nowrap z-20">
                                            GH: Ghana
                                        </div>
                                    </div>

                                    <!-- Partner Node: Kenya -->
                                    <div class="absolute right-1/4 top-1/2 z-10 group/node cursor-pointer">
                                        <div class="absolute -inset-3 bg-[#cda151]/20 rounded-full blur-md opacity-30 pulse-indicator"></div>
                                        <div class="w-4 h-4 rounded-full bg-[#cda151] flex items-center justify-center">
                                            <span class="w-1.5 h-1.5 rounded-full bg-black"></span>
                                        </div>
                                        <!-- Tooltip -->
                                        <div class="absolute left-1/2 -bottom-10 -translate-x-1/2 bg-white/95 backdrop-blur text-black text-[9px] font-black tracking-wider uppercase px-2 py-0.5 rounded shadow opacity-0 group-hover/node:opacity-100 transition-opacity whitespace-nowrap z-20">
                                            KE: Kenya
                                        </div>
                                    </div>

                                    <!-- Partner Node: South Africa -->
                                    <div class="absolute left-1/2 bottom-0 -translate-x-1/2 z-10 group/node cursor-pointer">
                                        <div class="absolute -inset-3 bg-[#cda151]/20 rounded-full blur-md opacity-30 pulse-indicator"></div>
                                        <div class="w-4 h-4 rounded-full bg-[#cda151] flex items-center justify-center">
                                            <span class="w-1.5 h-1.5 rounded-full bg-black"></span>
                                        </div>
                                        <!-- Tooltip -->
                                        <div class="absolute left-1/2 -bottom-10 -translate-x-1/2 bg-white/95 backdrop-blur text-black text-[9px] font-black tracking-wider uppercase px-2 py-0.5 rounded shadow opacity-0 group-hover/node:opacity-100 transition-opacity whitespace-nowrap z-20">
                                            ZA: South Africa
                                        </div>
                                    </div>

                                </div>

                                <!-- Cards List -->
                                <div class="grid grid-cols-4 gap-2 text-center relative z-10">
                                    @foreach([
                                        ['NG', 'Nigeria', 'HQ Office'],
                                        ['GH', 'Ghana', 'Partner'],
                                        ['KE', 'Kenya', 'Partner'],
                                        ['ZA', 'South Africa', 'Partner']
                                    ] as $item)
                                        <div class="p-2.5 rounded-xl bg-white/5 border border-white/[0.03] hover:border-white/10 hover:bg-white/10 transition-colors duration-300">
                                            <p class="text-xs font-bold text-white">{{ $item[0] }}</p>
                                            <p class="text-[8px] text-white/50 font-medium tracking-wide uppercase mt-0.5">{{ $item[1] }}</p>
                                            <p class="text-[7px] text-[#cda151]/60 font-bold uppercase tracking-widest mt-1">{{ $item[2] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Bottom Context Checkpoint -->
            <section class="relative py-24 px-6 bg-[#0a0a0a] overflow-hidden text-center border-t border-white/5">
                <div class="max-w-4xl mx-auto relative z-10">
                    <span class="text-[10px] font-bold tracking-[0.25em] text-[#cda151] uppercase block mb-4">
                        Not Sure You're A Fit?
                    </span>
                    <h2 class="text-white text-3xl sm:text-4xl font-light tracking-tight mb-6" style="font-family: 'Playfair Display', serif;">
                        If you're building with technology, <span class="italic text-[#cda151] font-serif">we're built for you.</span>
                    </h2>
                    <p class="text-white/50 text-sm leading-relaxed max-w-xl mx-auto mb-8 font-light">
                        Book a free 45-minute consultation. We'll tell you honestly whether we're the right fit, and what you need either way.
                    </p>
                    <a href="https://ivoirelegal.zohobookings.com/ivoirelegal" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-[#cda151] hover:bg-[#b88f40] text-black font-bold text-xs tracking-[0.15em] uppercase transition-all duration-300 rounded-[4px] shadow-lg group">
                        Book a consultation &rarr;
                    </a>
                </div>
            </section>

            <x-cta />
            <x-footer />
        </main>
    </body>
</html>
