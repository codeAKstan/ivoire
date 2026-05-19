<section class="py-24 bg-white border-t border-gray-100 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="max-w-xl">
                <h2 class="text-[#121212] text-4xl lg:text-5xl font-black tracking-tighter leading-tight mb-8">
                    Our Trusted <br>
                    <span class="text-gray-300">Partners.</span>
                </h2>
                <p class="text-gray-500 text-lg leading-relaxed mb-10">
                    Ivoire Legal provides expert counsel to navigate the complexities of African regulatory landscapes. We operate as your dedicated compliance function, ensuring your business stays ahead of evolution while maintaining the highest standards of integrity and excellence.
                </p>
                <div class="flex items-center space-x-4 group cursor-pointer">
                    <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-gray-400 group-hover:text-[#121212] transition-colors duration-300">View All Partners</span>
                    <div class="w-12 h-px bg-gray-200 group-hover:w-20 group-hover:bg-[#121212] transition-all duration-500"></div>
                </div>
            </div>

            <!-- Right Content: Infinite Marquee -->
            <div class="relative overflow-hidden">
                @php
                    $activePartners = \App\Models\Partner::where('is_active', true)->get();
                    if($activePartners->count() > 0) {
                        $half = ceil($activePartners->count() / 2);
                        $row1 = $activePartners->take($half);
                        $row2 = $activePartners->slice($half);
                        if($row2->isEmpty()) $row2 = $row1; // Duplicate if only 1 row worth of partners
                    } else {
                        $row1 = $row2 = collect();
                    }
                @endphp

                @if($activePartners->isNotEmpty())
                <!-- Row 1: Left to Right -->
                <div class="flex space-x-12 animate-marquee mb-12">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="flex space-x-12 shrink-0 items-center">
                            @foreach($row1 as $partner)
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="h-10 lg:h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                            @endforeach
                        </div>
                    @endfor
                </div>

                <!-- Row 2: Right to Left -->
                <div class="flex space-x-12 animate-marquee-reverse">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="flex space-x-12 shrink-0 items-center">
                            @foreach($row2 as $partner)
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="h-10 lg:h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                            @endforeach
                        </div>
                    @endfor
                </div>
                @else
                <div class="flex items-center justify-center py-12 border-2 border-dashed border-gray-100 rounded-3xl">
                    <p class="text-gray-300 text-sm font-medium uppercase tracking-widest">Growing our network...</p>
                </div>
                @endif

                <!-- Gradient Overlays for smooth edges -->
                <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white to-transparent z-10"></div>
                <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white to-transparent z-10"></div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    @keyframes marqueeReverse {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }
    .animate-marquee {
        animation: marquee 30s linear infinite;
    }
    .animate-marquee-reverse {
        animation: marqueeReverse 30s linear infinite;
    }
    /* Stop animation on hover */
    .animate-marquee:hover, .animate-marquee-reverse:hover {
        animation-play-state: paused;
    }
</style>
