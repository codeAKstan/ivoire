@php
    $displayPosts = isset($posts) ? $posts : \App\Models\Post::where('is_published', true)->latest()->take(3)->get();
@endphp

<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <!-- Header -->
        <div class="mb-16">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-1 bg-[#00c08b]"></div>
                <h2 class="text-[#1a365d] text-5xl lg:text-6xl font-bold tracking-tight">Resources</h2>
            </div>
            <p class="text-gray-500 text-lg max-w-2xl leading-relaxed">
                We’re here to be helpful. That’s why we’ve posted public articles for clients and anyone else to leverage for their own unique purposes.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @forelse($displayPosts as $post)
            <!-- Card -->
            <div class="group relative h-[500px] overflow-hidden rounded-sm shadow-lg">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                @else
                    <div class="absolute inset-0 bg-gray-200"></div>
                @endif
                <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-all duration-500"></div>
                
                <!-- Content Overlay Card -->
                <div class="absolute bottom-4 left-4 right-4 bg-white p-8 border border-gray-100 shadow-xl translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                    <div class="w-8 h-0.5 bg-[#00c08b] mb-4"></div>
                    <h3 class="text-[#1a365d] text-xl font-bold mb-4 leading-tight line-clamp-2">
                        {{ $post->title }}
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3 font-light">
                        {{ Str::limit(strip_tags($post->content), 120) }}
                    </p>
                    <a href="{{ route('posts.show', $post->slug) }}" class="inline-flex items-center text-[#00c08b] text-sm font-bold tracking-wider uppercase group/link">
                        Read More 
                        <svg class="w-8 h-4 ml-2 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-24 text-center border-2 border-dashed border-gray-50 rounded-3xl">
                <p class="text-gray-400 text-sm font-light uppercase tracking-widest">New publications coming soon.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

        <!-- Footer Button -->
        <!-- <div class="flex justify-center">
            <a href="/resources" class="px-12 py-4 bg-[#00c08b] text-white font-bold text-xs tracking-[0.3em] uppercase hover:bg-[#00a678] transition-all duration-300 rounded-sm">
                Full Collection
            </a>
        </div> -->
    </div>
</section>
