<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ivoire') }} | Careers</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <style>
            [x-cloak] { display: none !important; }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        </style>
    </head>
    <body class="bg-[#FAF8F5] text-[#151515] font-['Inter'] antialiased">
        <x-header />

        <main>
            <!-- Hero Section -->
            <section class="relative min-h-[75vh] bg-[#151515] text-white flex items-center justify-center overflow-hidden pt-28 px-6 border-b border-white/5">
                <!-- Glowing Accents -->
                <div class="absolute top-1/4 right-0 w-[500px] h-[500px] bg-[#cda151]/5 blur-[150px] rounded-full translate-x-1/2 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#cda151]/3 blur-[150px] rounded-full -translate-x-1/2 pointer-events-none"></div>

                <div class="relative z-10 max-w-5xl mx-auto text-center py-20">
                    <div class="inline-flex items-center space-x-4 mb-6 animate-[fadeIn_1s_ease-out_forwards]">
                        <div class="w-12 h-[0.5px] bg-[#cda151]/50"></div>
                        <span class="text-[10px] md:text-xs font-bold tracking-[0.4em] uppercase text-[#cda151]">Work With Us</span>
                        <div class="w-12 h-[0.5px] bg-[#cda151]/50"></div>
                    </div>

                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-light tracking-tight leading-[1.1] mb-8 animate-[fadeInUp_1s_ease-out_0.3s_forwards]" style="font-family: 'Playfair Display', serif;">
                        Shape the future of <br>
                        <span class="text-[#cda151] italic font-serif">legal infrastructure</span> in Africa.
                    </h1>

                    <p class="text-base md:text-lg text-white/60 max-w-3xl mx-auto mb-10 leading-relaxed font-light animate-[fadeInUp_1s_ease-out_0.6s_forwards]">
                        We are building a new model for legal and compliance advisory. No billable hours, no silos—just deep, operations-driven integration with the continent's most innovative technology companies.
                    </p>

                    <div class="animate-[fadeInUp_1s_ease-out_0.9s_forwards]">
                        <a href="#roles" class="inline-flex items-center justify-center px-8 py-4 bg-[#cda151] hover:bg-[#b88f40] text-black font-bold text-xs tracking-[0.15em] uppercase transition-all duration-300 rounded-[4px] shadow-lg">
                            Explore Open Roles
                        </a>
                    </div>
                </div>
            </section>

            <!-- Culture / Why Ivoire Legal Section -->
            <section class="py-28 bg-[#FAF8F5] relative overflow-hidden border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
                    <!-- Heading -->
                    <div class="max-w-none mb-20">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="h-[1px] w-12 bg-[#cda151]"></div>
                            <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#cda151]">Our Culture</span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-light text-[#151515] tracking-tight leading-tight" style="font-family: 'Playfair Display', serif;">
                            How we operate differently from <span class="italic text-[#cda151] font-serif">traditional firms.</span>
                        </h2>
                    </div>

                    <!-- Culture Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card 1 -->
                        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:border-[#cda151]/20 transition-all duration-300">
                            <div class="w-12 h-12 rounded-lg bg-[#cda151]/10 flex items-center justify-center text-[#cda151] font-serif italic text-lg font-bold mb-6">01</div>
                            <h3 class="text-[#151515] text-lg font-bold mb-3">No Billable Hours</h3>
                            <p class="text-gray-500 text-sm leading-relaxed font-light">
                                We measure impact, not increments. By working on a fixed monthly retainer model, we align our success with our clients' business goals, rather than tracking minutes.
                            </p>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:border-[#cda151]/20 transition-all duration-300">
                            <div class="w-12 h-12 rounded-lg bg-[#cda151]/10 flex items-center justify-center text-[#cda151] font-serif italic text-lg font-bold mb-6">02</div>
                            <h3 class="text-[#151515] text-lg font-bold mb-3">Embedded Operations</h3>
                            <p class="text-gray-500 text-sm leading-relaxed font-light">
                                You don't advise from an ivory tower. You are paired with fast-growing startups, sitting in on their product, compliance, and engineering discussions to build real systems.
                            </p>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:border-[#cda151]/20 transition-all duration-300">
                            <div class="w-12 h-12 rounded-lg bg-[#cda151]/10 flex items-center justify-center text-[#cda151] font-serif italic text-lg font-bold mb-6">03</div>
                            <h3 class="text-[#151515] text-lg font-bold mb-3">Rapid Exposure</h3>
                            <p class="text-gray-500 text-sm leading-relaxed font-light">
                                Get direct exposure to fintech licensing, regulatory sandboxes, data compliance programs, and cross-border expansions across multiple jurisdictions in Africa.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits Banner -->
            <section class="py-20 bg-[#151515] text-white overflow-hidden relative border-b border-white/5">
                <div class="absolute inset-0 bg-radial-gradient from-[#cda151]/3 via-transparent to-transparent pointer-events-none"></div>
                <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <span class="text-[#cda151] text-xs font-bold tracking-widest uppercase mb-4 block">Team Benefits</span>
                            <h2 class="text-3xl md:text-4xl font-light mb-6" style="font-family: 'Playfair Display', serif;">
                                Designed for growth, built for <span class="italic text-[#cda151] font-serif">well-being.</span>
                            </h2>
                            <p class="text-white/60 font-light text-sm md:text-base leading-relaxed mb-8">
                                We believe in providing our team with the resources, autonomy, and environment required to perform at their absolute best.
                            </p>
                            <div class="grid grid-cols-2 gap-6">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-[#cda151]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span class="text-sm font-medium text-white/80">Remote-First / Hybrid</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-[#cda151]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span class="text-sm font-medium text-white/80">Premium Medical Cover</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-[#cda151]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span class="text-sm font-medium text-white/80">Continuous Learning</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-[#cda151]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span class="text-sm font-medium text-white/80">Competitive Pay &amp; Equity</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex justify-center lg:justify-end">
                            <div class="relative w-full max-w-md bg-white/5 border border-white/10 p-8 rounded-2xl backdrop-blur-md">
                                <div class="absolute -top-4 -left-4 w-12 h-12 bg-[#cda151]/10 rounded-xl flex items-center justify-center text-[#cda151]">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                                </div>
                                <h3 class="text-lg font-bold mb-4 mt-2">Professional Growth</h3>
                                <p class="text-white/60 text-sm leading-relaxed font-light mb-6">
                                    "Ivoire Legal provides the structure and autonomy to grow at twice the pace of traditional firms. We work closely with founders to turn legal questions into business infrastructure."
                                </p>
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center font-bold text-xs text-[#cda151]">EA</div>
                                    <div>
                                        <div class="text-xs font-bold">Emeka Ani</div>
                                        <div class="text-[10px] text-white/40">Embedded Legal Associate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Open Roles Section -->
            <section id="roles" class="py-28 bg-[#FAF8F5] relative overflow-hidden" x-data="{ openRole: null }">
                <div class="max-w-5xl mx-auto px-6 relative z-10">
                    <!-- Heading -->
                    <div class="text-center max-w-2xl mx-auto mb-20">
                        <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#cda151] block mb-4">Openings</span>
                        <h2 class="text-3xl md:text-5xl font-light text-[#151515] tracking-tight leading-tight" style="font-family: 'Playfair Display', serif;">
                            We're looking for <br><span class="italic text-[#cda151] font-serif">builders.</span>
                        </h2>
                    </div>

                    <!-- Roles List -->
                    <div class="space-y-6">
                        <!-- Role 1 -->
                        <div class="bg-white rounded-2xl border border-gray-150 shadow-sm overflow-hidden transition-all duration-300">
                            <div class="p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 cursor-pointer" @click="openRole === 1 ? openRole = null : openRole = 1">
                                <div>
                                    <span class="bg-[#cda151]/10 text-[#cda151] text-[9px] font-bold uppercase tracking-wider px-3 py-1 rounded-full border border-[#cda151]/10 mb-3 inline-block">Legal Operations</span>
                                    <h3 class="text-xl font-bold text-[#151515]">Embedded Legal Associate</h3>
                                    <p class="text-gray-400 text-xs mt-1">Lagos, Nigeria / Hybrid Remote</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-[#cda151] text-xs font-bold tracking-wider uppercase group-hover:underline">View details</span>
                                    <svg class="w-5 h-5 text-[#cda151] transition-transform duration-300" :class="openRole === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </div>
                            <!-- Dropdown Details -->
                            <div x-show="openRole === 1" x-cloak x-collapse class="border-t border-gray-100 bg-[#FAF8F5]/50 p-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">The Role</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed font-light mb-4">
                                            As an Embedded Legal Associate, you will be assigned directly to our fast-growing startup clients. You will serve as their primary legal contact, helping draft platform documentation, reviewing supplier agreements, and handling company secretarial and governance structures under the mentorship of our senior counsel.
                                        </p>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">Key Responsibilities</h4>
                                        <ul class="space-y-2 text-gray-600 text-sm font-light list-disc list-inside">
                                            <li>Draft and structure SaaS, service, partnership, and employment contracts.</li>
                                            <li>Manage corporate governance, board resolutions, and cap table updates.</li>
                                            <li>Interface directly with clients' product and operations leads to identify legal requirements.</li>
                                            <li>Handle corporate filings and compliance logs.</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">Who you are</h4>
                                        <ul class="space-y-2 text-gray-600 text-sm font-light list-disc list-inside mb-6">
                                            <li>Admitted to the Nigerian Bar with 2–5 years of post-qualification experience.</li>
                                            <li>Prior experience in tech startups, VC firms, or top-tier corporate law practices.</li>
                                            <li>Strong communication skills and comfortable using modern workspaces (Slack, Notion, Jira).</li>
                                            <li>Obsessively detailed, analytical, and execution-oriented.</li>
                                        </ul>
                                        <a href="#apply" @click="document.getElementById('role-input').value = 'Embedded Legal Associate'" class="inline-flex items-center justify-center px-6 py-3 bg-[#151515] hover:bg-[#cda151] text-white hover:text-black font-bold text-xs tracking-[0.1em] uppercase transition-all duration-300 rounded-[4px]">
                                            Apply for this position
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Role 2 -->
                        <div class="bg-white rounded-2xl border border-gray-150 shadow-sm overflow-hidden transition-all duration-300">
                            <div class="p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 cursor-pointer" @click="openRole === 2 ? openRole = null : openRole = 2">
                                <div>
                                    <span class="bg-[#cda151]/10 text-[#cda151] text-[9px] font-bold uppercase tracking-wider px-3 py-1 rounded-full border border-[#cda151]/10 mb-3 inline-block">Compliance</span>
                                    <h3 class="text-xl font-bold text-[#151515]">Senior Fintech Compliance Lead</h3>
                                    <p class="text-gray-400 text-xs mt-1">Lagos, Nigeria / Hybrid</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-[#cda151] text-xs font-bold tracking-wider uppercase">View details</span>
                                    <svg class="w-5 h-5 text-[#cda151] transition-transform duration-300" :class="openRole === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </div>
                            <!-- Dropdown Details -->
                            <div x-show="openRole === 2" x-cloak x-collapse class="border-t border-gray-100 bg-[#FAF8F5]/50 p-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">The Role</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed font-light mb-4">
                                            You will lead the compliance advisory function for our fintech and payment clients. You will design and audit robust AML/KYC frameworks, oversee licensing applications (PSSP, PSP, MFB) with the CBN, and manage ongoing correspondence and regulatory filing systems.
                                        </p>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">Key Responsibilities</h4>
                                        <ul class="space-y-2 text-gray-600 text-sm font-light list-disc list-inside">
                                            <li>Oversee CBN, SEC, and NAICOM license filings and audits.</li>
                                            <li>Develop and audit AML/CFT manuals and onboarding flows.</li>
                                            <li>Ensure data privacy NDPR compliance and lead security auditing.</li>
                                            <li>Advise on emerging regulations for digital assets and virtual assets.</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">Who you are</h4>
                                        <ul class="space-y-2 text-gray-600 text-sm font-light list-disc list-inside mb-6">
                                            <li>4+ years experience in compliance within fintech, commercial banking, or payment operators.</li>
                                            <li>In-depth familiarity with CBN regulations, AML/KYC policies, and SEC rules.</li>
                                            <li>Compliance certifications (ACAMS, etc.) are highly preferred.</li>
                                            <li>Detail-oriented leader capable of managing multiple regulatory projects.</li>
                                        </ul>
                                        <a href="#apply" @click="document.getElementById('role-input').value = 'Senior Fintech Compliance Lead'" class="inline-flex items-center justify-center px-6 py-3 bg-[#151515] hover:bg-[#cda151] text-white hover:text-black font-bold text-xs tracking-[0.1em] uppercase transition-all duration-300 rounded-[4px]">
                                            Apply for this position
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Role 3 -->
                        <div class="bg-white rounded-2xl border border-gray-150 shadow-sm overflow-hidden transition-all duration-300">
                            <div class="p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 cursor-pointer" @click="openRole === 3 ? openRole = null : openRole = 3">
                                <div>
                                    <span class="bg-[#cda151]/10 text-[#cda151] text-[9px] font-bold uppercase tracking-wider px-3 py-1 rounded-full border border-[#cda151]/10 mb-3 inline-block">Product Advisory</span>
                                    <h3 class="text-xl font-bold text-[#151515]">Product &amp; IP Counsel</h3>
                                    <p class="text-gray-400 text-xs mt-1">Remote (Africa)</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-[#cda151] text-xs font-bold tracking-wider uppercase">View details</span>
                                    <svg class="w-5 h-5 text-[#cda151] transition-transform duration-300" :class="openRole === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </div>
                            <!-- Dropdown Details -->
                            <div x-show="openRole === 3" x-cloak x-collapse class="border-t border-gray-100 bg-[#FAF8F5]/50 p-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">The Role</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed font-light mb-4">
                                            You will work directly with our AI, SaaS, and healthtech clients to structure product terms, intellectual property, data sharing protocols, and cross-border commercial transactions. You will act as their core product legal advisor.
                                        </p>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">Key Responsibilities</h4>
                                        <ul class="space-y-2 text-gray-600 text-sm font-light list-disc list-inside">
                                            <li>Draft user terms, developer APIs, data processing agreements (DPAs), and SLA terms.</li>
                                            <li>Advise on open-source licensing, proprietary code, and AI training data usage rights.</li>
                                            <li>Manage intellectual property transfer, protection, and cross-border licensing.</li>
                                            <li>Advise on regional data sovereignty rules.</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-[#151515] font-bold text-sm uppercase tracking-wider mb-3">Who you are</h4>
                                        <ul class="space-y-2 text-gray-600 text-sm font-light list-disc list-inside mb-6">
                                            <li>3+ years post-qualification legal experience.</li>
                                            <li>Strong background in tech transactions, IP law, open source, or software licensing.</li>
                                            <li>Familiarity with regional regulations (NDPR, GDPR) and technology frameworks.</li>
                                            <li>Clear communicator who translates legal risks into actionable product decisions.</li>
                                        </ul>
                                        <a href="#apply" @click="document.getElementById('role-input').value = 'Product & IP Counsel'" class="inline-flex items-center justify-center px-6 py-3 bg-[#151515] hover:bg-[#cda151] text-white hover:text-black font-bold text-xs tracking-[0.1em] uppercase transition-all duration-300 rounded-[4px]">
                                            Apply for this position
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Application Form Section -->
            <section id="apply" class="py-28 bg-[#151515] text-white relative overflow-hidden border-t border-white/5">
                <div class="absolute inset-0 bg-radial-gradient from-[#cda151]/5 via-transparent to-transparent pointer-events-none"></div>
                <div class="max-w-3xl mx-auto px-6 relative z-10">
                    <div class="text-center mb-16">
                        <span class="text-[#cda151] text-xs font-bold tracking-widest uppercase mb-4 block">Application Form</span>
                        <h2 class="text-3xl md:text-5xl font-light mb-6" style="font-family: 'Playfair Display', serif;">
                            Begin your <span class="italic text-[#cda151] font-serif">journey.</span>
                        </h2>
                        <p class="text-white/60 font-light text-sm max-w-xl mx-auto">
                            Submit your application below. Even if your profile doesn't fit the roles above, feel free to send a speculative application.
                        </p>
                    </div>

                    <!-- Application Form Card -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 md:p-12 backdrop-blur-md">
                        @if(session('success'))
                            <div class="bg-[#cda151]/10 border border-[#cda151]/30 rounded-xl p-6 text-center mb-8">
                                <span class="text-4xl block mb-2">🎉</span>
                                <h3 class="text-lg font-bold text-[#cda151] mb-2">Application Submitted</h3>
                                <p class="text-white/60 text-xs font-light">{{ session('success') }}</p>
                            </div>
                        @endif

                        <form action="{{ route('careers.apply') }}" method="POST" class="space-y-6">
                            @csrf
                            <input type="hidden" name="type" value="job_application">
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-bold uppercase tracking-wider text-white/50 mb-2">Full Name</label>
                                    <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm focus:border-[#cda151] focus:ring-1 focus:ring-[#cda151] outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold uppercase tracking-wider text-white/50 mb-2">Email Address</label>
                                    <input type="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm focus:border-[#cda151] focus:ring-1 focus:ring-[#cda151] outline-none transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-bold uppercase tracking-wider text-white/50 mb-2">Position of Interest</label>
                                    <input type="text" id="role-input" name="role" placeholder="e.g. Embedded Legal Associate" required class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm focus:border-[#cda151] focus:ring-1 focus:ring-[#cda151] outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold uppercase tracking-wider text-white/50 mb-2">LinkedIn Profile URL</label>
                                    <input type="url" name="linkedin" placeholder="https://linkedin.com/in/..." class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm focus:border-[#cda151] focus:ring-1 focus:ring-[#cda151] outline-none transition-all">
                                </div>
                            </div>

                            <div>
                                    <label class="block text-[10px] font-bold uppercase tracking-wider text-white/50 mb-2">Link to Resume / CV (Google Drive, Dropbox, etc.)</label>
                                    <input type="url" name="resume_url" placeholder="https://..." required class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm focus:border-[#cda151] focus:ring-1 focus:ring-[#cda151] outline-none transition-all">
                                </div>

                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-white/50 mb-2">Tell us why you want to build with Ivoire Legal</label>
                                <textarea name="message" rows="5" required class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm focus:border-[#cda151] focus:ring-1 focus:ring-[#cda151] outline-none transition-all leading-relaxed"></textarea>
                            </div>

                            <div class="pt-4">
                                <button type="submit" class="w-full inline-flex items-center justify-center px-8 py-4 bg-[#cda151] hover:bg-[#b88f40] text-black font-bold text-xs tracking-[0.15em] uppercase transition-all duration-300 rounded-[4px] shadow-lg">
                                    Submit Application
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <x-footer />
    </body>
</html>
