<section class="relative py-32 overflow-hidden">
    <!-- Section Background -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/img/area.jpg') }}" alt="Practices Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#0a0a0a]/90"></div>
    </div>

    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#18c596]/5 blur-[120px] rounded-full -mr-64 -mt-64"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#18c596]/5 blur-[120px] rounded-full -ml-64 -mb-64"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
        <div class="mb-24 max-w-3xl">
            <div class="flex items-center gap-4 mb-6">
                <div class="h-[1px] w-12 bg-[#18c596]"></div>
                <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#18c596]">Practice Areas</span>
            </div>
            <h2 class="text-white text-5xl lg:text-7xl font-light tracking-tight mb-8" style="font-family: 'Playfair Display', serif;">
                Specialized Expertise for <span class="italic">Modern Business</span>
            </h2>
            <p class="text-white/60 text-lg md:text-xl font-light leading-relaxed">
                A single integrated service stream of embedded legal & compliance advisory, delivered across six specialized practice areas.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $displayServices = $services ?? \App\Models\Service::all();
            @endphp

            @foreach($displayServices as $index => $service)
            <div class="group bg-[#111111] p-10 rounded-2xl border border-white/5 hover:border-[#18c596]/30 transition-all duration-500 relative overflow-hidden flex flex-col min-h-[400px] 
                @if($index % 3 == 1) md:mt-12 lg:mt-0 @endif
                @if($index % 3 == 2) lg:mt-12 md:mt-0 @endif
                @if($index >= 3 && $index % 3 == 0) md:-mt-12 lg:mt-0 @endif">
                
                <span class="text-5xl font-serif italic text-white/5 mb-8 group-hover:text-[#18c596]/20 transition-colors duration-500">
                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                </span>
                
                <h3 class="text-white text-2xl font-medium mb-6 transition-colors duration-300">{{ $service->title }}</h3>
                
                <p class="text-white/50 group-hover:text-white/70 leading-relaxed transition-colors duration-300 mb-8 font-light">
                    {{ $service->description }}
                </p>
                
                <div class="mt-auto">
                    <a href="https://calendly.com/ivoirelegal" target="_blank" class="inline-flex items-center gap-2 text-[#18c596] text-sm font-bold uppercase tracking-widest group-hover:gap-4 transition-all duration-300">
                        Book a Consultation
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</section>
