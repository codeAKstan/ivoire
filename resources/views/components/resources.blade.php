@php
    $displayPosts = isset($posts) ? $posts : \App\Models\Post::where('is_published', true)->latest()->take(3)->get();
@endphp

<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <!-- Header -->
        <div class="mb-16">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-[1px] bg-[#cda151]"></div>
                <h2 class="text-[#151515] text-4xl lg:text-5xl font-light tracking-tight" style="font-family: 'Playfair Display', serif;">Resources</h2>
            </div>
            <p class="text-gray-500 text-base sm:text-lg max-w-2xl leading-relaxed">
                We’re here to be helpful. That’s why we’ve posted public articles for clients and anyone else to leverage for their own unique purposes.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @forelse($displayPosts as $post)
            <!-- Card -->
            <div class="group relative h-[480px] overflow-hidden rounded-xl shadow-sm border border-gray-100">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                @else
                    <div class="absolute inset-0 bg-gray-50"></div>
                @endif
                <div class="absolute inset-0 bg-black/10 group-hover:bg-black/25 transition-all duration-500"></div>
                
                <!-- Content Overlay Card -->
                <div class="absolute bottom-4 left-4 right-4 bg-white p-6 border border-gray-100 shadow-xl translate-y-8 group-hover:translate-y-0 transition-transform duration-500 rounded-lg">
                    <div class="w-8 h-0.5 bg-[#cda151] mb-4"></div>
                    <h3 class="text-[#151515] text-lg font-bold mb-3 leading-tight line-clamp-2">
                        {{ $post->title }}
                    </h3>
                    <p class="text-gray-500 text-xs leading-relaxed mb-4 line-clamp-3 font-light">
                        {{ Str::limit(strip_tags($post->content), 100) }}
                    </p>
                    <a href="{{ route('posts.show', $post->slug) }}" class="inline-flex items-center text-[#cda151] text-xs font-bold tracking-wider uppercase group/link">
                        Read More 
                        <svg class="w-4 h-4 ml-1.5 transition-transform duration-300 group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-24 text-center border-2 border-dashed border-gray-100 rounded-2xl">
                <p class="text-gray-400 text-sm font-light uppercase tracking-widest">New publications coming soon.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

