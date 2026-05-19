<x-app-layout>
    <x-slot name="header">Edit Publication: {{ $post->title }}</x-slot>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-[40px] p-10 shadow-sm border border-gray-50">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h3 class="text-2xl font-bold text-[#1b2559]" style="font-family: 'Playfair Display', serif;">Edit Publication</h3>
                    <p class="text-gray-400 text-sm font-light mt-1">Update your industry insight or regulatory alert.</p>
                </div>
                <a href="{{ route('admin.news') }}" class="text-[#18c596] text-xs font-bold uppercase tracking-widest hover:underline flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to List
                </a>
            </div>

            <form action="{{ route('admin.news.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <!-- Title -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Post Title</label>
                            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                            @error('title') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Category -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Category</label>
                            <select name="category" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                <option value="Regulatory Alert" {{ $post->category == 'Regulatory Alert' ? 'selected' : '' }}>Regulatory Alert</option>
                                <option value="Insights" {{ $post->category == 'Insights' ? 'selected' : '' }}>Insights</option>
                                <option value="Toolkits" {{ $post->category == 'Toolkits' ? 'selected' : '' }}>Toolkits</option>
                                <option value="Case Studies" {{ $post->category == 'Case Studies' ? 'selected' : '' }}>Case Studies</option>
                            </select>
                            @error('category') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="space-y-6">
                        <!-- Current Image & Upload -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Featured Image</label>
                            @if($post->image)
                            <div class="mb-4 relative group w-full h-[100px] rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                                <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all text-white text-[8px] font-bold uppercase tracking-widest">Current Image</div>
                            </div>
                            @endif
                            <label class="flex flex-col items-center justify-center w-full h-[100px] bg-[#f4f7fe] border-2 border-dashed border-gray-200 rounded-3xl cursor-pointer hover:bg-gray-100 transition-all group">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-6 h-6 mb-2 text-gray-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <p class="text-[8px] font-bold uppercase tracking-widest text-gray-400">Replace Image</p>
                                </div>
                                <input type="file" name="image" class="hidden" />
                            </label>
                            @error('image') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Content</label>
                    <textarea name="content" rows="15" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-8 py-6 rounded-[30px] focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium leading-relaxed">{{ old('content', $post->content) }}</textarea>
                    @error('content') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-[#1b2559] hover:bg-[#0b1437] text-white px-12 py-5 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all shadow-xl shadow-[#0b1437]/20">
                        Update Publication
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
