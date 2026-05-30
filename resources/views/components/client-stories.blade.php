<section class="py-24 bg-[#FAF8F5] relative overflow-hidden border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
        <!-- Header -->
        <div class="max-w-3xl mb-16">
            <span class="text-[10px] font-bold tracking-[0.25em] text-[#cda151] uppercase block mb-4">
                Client Stories
            </span>
            <h2 class="text-[#151515] text-4xl sm:text-5xl lg:text-6xl font-light tracking-tight mb-6 leading-tight" style="font-family: 'Playfair Display', serif;">
                What technology founders <br>say about working <span class="text-[#cda151] italic font-serif">with us.</span>
            </h2>
        </div>

        @php
            $activeTestimonials = \App\Models\Testimonial::where('is_active', true)->orderBy('order', 'asc')->get();
        @endphp

        <!-- Testimonial Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($activeTestimonials as $testimonial)
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300">
                    <div>
                        <!-- Quotation Icon -->
                        <span class="text-6xl font-serif text-[#cda151]/20 leading-none block -mt-4 mb-2">&ldquo;</span>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-light italic">
                            {{ $testimonial->quote }}
                        </p>
                    </div>
                    <div class="pt-6 border-t border-gray-50">
                        <h4 class="text-[#151515] text-sm font-bold">{{ $testimonial->author_name }}</h4>
                        @if($testimonial->author_title)
                            <p class="text-gray-400 text-xs mt-0.5">{{ $testimonial->author_title }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
