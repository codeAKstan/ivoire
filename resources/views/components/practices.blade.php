<section class="relative py-28 bg-[#FAF8F5] overflow-hidden border-b border-gray-100">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#cda151]/3 blur-[120px] rounded-full -mr-64 -mt-64"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#cda151]/3 blur-[120px] rounded-full -ml-64 -mb-64"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
        <div class="mb-20 max-w-none">
            <div class="flex items-center gap-4 mb-4">
                <div class="h-[1px] w-12 bg-[#cda151]"></div>
                <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#cda151]">Practice Areas</span>
            </div>
            <h2 class="text-[#151515] text-4xl sm:text-5xl lg:text-6xl font-light tracking-tight mb-6" style="font-family: 'Playfair Display', serif;">
                Specialized Expertise for <span class="text-[#cda151] italic font-serif">Modern Business</span>
            </h2>
            <p class="text-gray-500 text-base sm:text-lg leading-relaxed">
                A single integrated service stream of embedded legal &amp; compliance advisory, delivered across specialized practice areas.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $displayServices = $services ?? \App\Models\Service::all();
            @endphp

            @foreach($displayServices as $index => $service)
            <div class="group bg-white p-8 rounded-xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-[#cda151]/30 transition-all duration-500 relative overflow-hidden flex flex-col min-h-[380px] 
                @if($index % 3 == 1) md:mt-8 lg:mt-0 @endif
                @if($index % 3 == 2) lg:mt-8 md:mt-0 @endif
                @if($index >= 3 && $index % 3 == 0) md:-mt-8 lg:mt-0 @endif">
                
                <span class="text-4xl font-serif italic text-[#cda151]/10 mb-6 group-hover:text-[#cda151]/30 transition-colors duration-500 block">
                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                </span>
                
                <h3 class="text-[#151515] text-xl font-bold mb-4 transition-colors duration-300">{{ $service->title }}</h3>
                
                <p class="text-gray-500 group-hover:text-gray-700 leading-relaxed transition-colors duration-300 mb-6 font-light text-sm">
                    {{ $service->description }}
                </p>
                
                <div class="mt-auto">
                    <a href="https://ivoirelegal.zohobookings.com/ivoirelegal" target="_blank" class="inline-flex items-center gap-2 text-[#cda151] text-xs font-bold uppercase tracking-widest group-hover:gap-3 transition-all duration-300">
                        Book a Consultation
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

