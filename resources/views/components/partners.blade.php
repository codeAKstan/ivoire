<section class="py-12 bg-[#FAF8F5] border-y border-gray-100 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center">
        <!-- Section Header -->
        <p class="text-[10px] font-bold tracking-[0.25em] text-gray-400 uppercase mb-8">
            Businesses that have trusted us
        </p>

        <!-- Horizontal Logo Strip -->
        <div class="relative overflow-hidden w-full">
            @php
                $activePartners = \App\Models\Partner::where('is_active', true)->get();
            @endphp

            <div class="flex space-x-16 items-center animate-marquee shrink-0">
                @if($activePartners->count() > 0)
                    <!-- Duplicate to ensure infinite loop -->
                    @for ($j = 0; $j < 3; $j++)
                        <div class="flex space-x-16 shrink-0 items-center">
                            @foreach($activePartners as $partner)
                                <div class="flex items-center space-x-2 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                    @if(Str::contains($partner->logo, 'partners/'))
                                        <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="h-8 w-auto object-contain max-w-[120px]">
                                    @else
                                        <!-- Fallback to styled text if logo missing/corrupt -->
                                        <span class="text-sm font-black tracking-wide text-gray-500">{{ $partner->name }}</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endfor
                @else
                    <!-- High-fidelity static fallback logos based on the mockups -->
                    @for ($j = 0; $j < 4; $j++)
                        <div class="flex space-x-16 shrink-0 items-center">
                            <!-- Blakskill -->
                            <div class="flex items-center space-x-2 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-base font-black tracking-tighter text-gray-800" style="font-family: 'Playfair Display', serif;">Blakskill</span>
                            </div>
                            <!-- Drug-IT -->
                            <div class="flex items-center space-x-2 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-base font-bold text-gray-800 tracking-tight">Drug-IT</span>
                            </div>
                            <!-- MATRIX-36 -->
                            <div class="flex items-center space-x-1 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-base font-black text-gray-850 tracking-widest uppercase">Matrix-36</span>
                            </div>
                            <!-- on.us -->
                            <div class="flex items-center space-x-1 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-base font-light text-gray-600">on.</span>
                                <span class="text-base font-black text-gray-800">us</span>
                            </div>
                            <!-- BudPay -->
                            <div class="flex items-center space-x-1 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-base font-black text-gray-900 tracking-tight">BudPay</span>
                            </div>
                            <!-- Paylode -->
                            <div class="flex items-center space-x-1 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-base font-semibold text-gray-850 tracking-tight">Paylode</span>
                            </div>
                            <!-- Conglex -->
                            <div class="flex items-center space-x-1 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-base font-bold text-gray-800 italic" style="font-family: 'Playfair Display', serif;">Conglex</span>
                            </div>
                            <!-- BRB Capital -->
                            <div class="flex items-center space-x-1 grayscale opacity-55 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                                <span class="text-xs font-bold tracking-widest uppercase text-gray-700">BRB Capital</span>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>

            <!-- Gradient Overlays for smooth scrolling edges -->
            <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-[#FAF8F5] to-transparent z-10 pointer-events-none"></div>
            <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-[#FAF8F5] to-transparent z-10 pointer-events-none"></div>
        </div>
    </div>
</section>

<style>
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-33.33%); }
    }
    .animate-marquee {
        display: flex;
        width: max-content;
        animation: marquee 35s linear infinite;
    }
    .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>

