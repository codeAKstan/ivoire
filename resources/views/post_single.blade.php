<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $post->title }} | Ivoire Legal</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- AlpineJS CDN -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body class="bg-white text-[#121212] antialiased">
        <x-header />

        <main>
            <!-- Post Header -->
            <section class="relative pt-40 pb-24 px-6 bg-[#fafafa] overflow-hidden">
                <div class="max-w-4xl mx-auto relative z-10 text-center">
                    <div class="flex items-center justify-center gap-4 mb-8">
                        <div class="h-[1px] w-8 bg-[#cda151]"></div>
                        <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-[#cda151]">{{ $post->category }}</span>
                        <div class="h-[1px] w-8 bg-[#cda151]"></div>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-bold text-[#151515] leading-tight mb-8 tracking-tight" style="font-family: 'Playfair Display', serif;">
                        {{ $post->title }}
                    </h1>

                    <div class="flex items-center justify-center gap-6 text-xs text-gray-400 font-medium uppercase tracking-widest">
                        <span>By {{ $post->user->name }}</span>
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <span>{{ $post->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </section>

            <!-- Featured Image -->
            @if($post->image)
            <section class="px-6 -mt-12 mb-24">
                <div class="max-w-6xl mx-auto">
                    <div class="aspect-[21/9] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>
                </div>
            </section>
            @endif

            <!-- Content -->
            <article class="px-6 mb-32">
                <div class="max-w-3xl mx-auto">
                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed font-light">
                        {!! $post->content !!}
                    </div>

                    <!-- Social Share Placeholder -->
                    <div class="mt-16 pt-8 border-t border-gray-100 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Share:</span>
                            <div class="flex gap-4">
                                <a href="#" class="text-gray-400 hover:text-[#cda151] transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                                <a href="#" class="text-gray-400 hover:text-[#cda151] transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                                <a href="#" class="text-gray-400 hover:text-[#cda151] transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
                        </div>
                        <div class="text-[10px] font-bold uppercase tracking-widest text-gray-400">
                            Category: <span class="text-[#cda151]">{{ $post->category }}</span>
                        </div>
                    </div>
                </div>
            </article>

            {{-- 
            <!-- Comments Section -->
            <section class="bg-[#fafafa] py-24 px-6" id="comments">
                <div class="max-w-3xl mx-auto">
                    <div class="mb-16">
                        <h3 class="text-3xl font-bold text-[#151515] mb-4" style="font-family: 'Playfair Display', serif;">Discussion</h3>
                        <p class="text-gray-500 text-sm font-light uppercase tracking-widest">{{ $post->allComments->count() }} Comments</p>
                    </div>

                    <!-- Comment Form -->
                    <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-50 mb-20">
                        <h4 class="text-sm font-bold text-[#151515] mb-8 uppercase tracking-widest">Leave a Comment</h4>
                        <form action="{{ route('comments.store', $post) }}" method="POST" class="space-y-6">
                            @csrf
                            <input type="hidden" name="parent_id" id="parent_id_input" value="">
                            
                            <div id="replying-to" class="hidden flex items-center justify-between bg-blue-50 px-6 py-4 rounded-2xl mb-4 border border-blue-100">
                                <p class="text-xs text-blue-600 font-medium">Replying to <span id="reply-name" class="font-bold"></span></p>
                                <button type="button" onclick="cancelReply()" class="text-blue-400 hover:text-blue-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @guest
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Your Name</label>
                                    <input type="text" name="name" placeholder="e.g. John Doe" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium">
                                    @error('name') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                                </div>
                                @else
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Commenting as</label>
                                    <div class="px-6 py-4 rounded-2xl bg-gray-50 text-gray-400 text-sm font-medium">{{ auth()->user()->name }}</div>
                                </div>
                                @endguest
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Message</label>
                                <textarea name="content" rows="4" placeholder="Share your thoughts..." class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium leading-relaxed"></textarea>
                                @error('content') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-[#151515] hover:bg-[#151515] text-white px-10 py-4 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all shadow-xl shadow-[#151515]/20">
                                    Post Comment
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Comments List -->
                    <div class="space-y-12">
                        @forelse($post->comments as $comment)
                        @php
                            $commentName = $comment->user_id ? $comment->user->name : $comment->guest_name;
                        @endphp
                        <div class="space-y-8">
                            <div class="flex gap-6">
                                <div class="w-12 h-12 bg-[#cda151] rounded-2xl flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-[#cda151]/20 shrink-0">
                                    {{ substr($commentName, 0, 1) }}
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="text-sm font-bold text-[#151515]">{{ $commentName }}</h5>
                                        <span class="text-[10px] text-gray-400 font-medium uppercase tracking-widest">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-sm text-gray-500 leading-relaxed font-light mb-4">{{ $comment->content }}</p>
                                    <button onclick="setReply({{ $comment->id }}, '{{ $commentName }}')" class="text-[10px] font-bold text-[#cda151] uppercase tracking-widest hover:underline">Reply</button>
                                </div>
                            </div>

                            <!-- Replies -->
                            @if($comment->replies->count() > 0)
                            <div class="ml-16 space-y-8 border-l-2 border-gray-100 pl-8">
                                @foreach($comment->replies as $reply)
                                @php
                                    $replyName = $reply->user_id ? $reply->user->name : $reply->guest_name;
                                @endphp
                                <div class="flex gap-6">
                                    <div class="w-10 h-10 {{ $reply->user_id && $reply->user->is_admin ? 'bg-[#151515]' : 'bg-gray-200' }} rounded-xl flex items-center justify-center text-white font-bold text-sm shrink-0">
                                        {{ substr($replyName, 0, 1) }}
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center gap-2">
                                                <h5 class="text-xs font-bold text-[#151515]">{{ $replyName }}</h5>
                                                @if($reply->user_id && $reply->user->is_admin)
                                                    <span class="bg-[#cda151]/10 text-[#cda151] text-[8px] font-bold uppercase tracking-widest px-2 py-0.5 rounded-full">Admin</span>
                                                @endif
                                            </div>
                                            <span class="text-[10px] text-gray-400 font-medium uppercase tracking-widest">{{ $reply->created_at->diffForHumans() }}</span>
                                        </div>
                                        <p class="text-xs text-gray-500 leading-relaxed font-light">{{ $reply->content }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        @empty
                        <p class="text-center text-gray-400 text-sm font-light italic">No comments yet. Be the first to start the conversation!</p>
                        @endforelse
                    </div>
                </div>
            </section>
            --}}
        </main>

        <x-footer />

        {{--
        <script>
            function setReply(commentId, name) {
                document.getElementById('parent_id_input').value = commentId;
                document.getElementById('reply-name').innerText = name;
                document.getElementById('replying-to').classList.remove('hidden');
                document.querySelector('textarea[name="content"]').focus();
                
                // Scroll to form
                document.getElementById('comments').scrollIntoView({ behavior: 'smooth' });
            }

            function cancelReply() {
                document.getElementById('parent_id_input').value = '';
                document.getElementById('replying-to').classList.add('hidden');
            }
        </script>
        --}}
    </body>
</html>
