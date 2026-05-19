<x-app-layout>
    <x-slot name="header">Create Publication</x-slot>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-[40px] p-10 shadow-sm border border-gray-50">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h3 class="text-2xl font-bold text-[#1b2559]" style="font-family: 'Playfair Display', serif;">New Publication</h3>
                    <p class="text-gray-400 text-sm font-light mt-1">Draft your next industry insight or regulatory alert.</p>
                </div>
                <a href="{{ route('admin.news') }}" class="text-[#18c596] text-xs font-bold uppercase tracking-widest hover:underline flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to List
                </a>
            </div>

            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <!-- Title -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Post Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter title..." class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                            @error('title') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Category -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Category</label>
                            <select name="category" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                <option value="Regulatory Alert">Regulatory Alert</option>
                                <option value="Insights">Insights</option>
                                <option value="Toolkits">Toolkits</option>
                                <option value="Case Studies">Case Studies</option>
                            </select>
                            @error('category') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="space-y-6">
                        <!-- Featured Image -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Featured Image</label>
                            <label class="flex flex-col items-center justify-center w-full h-[140px] bg-[#f4f7fe] border-2 border-dashed border-gray-200 rounded-3xl cursor-pointer hover:bg-gray-100 transition-all group">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-3 text-gray-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Upload Image</p>
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
                    <textarea name="content" rows="12" placeholder="Write your publication here..." class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-8 py-6 rounded-[30px] focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium leading-relaxed">{{ old('content') }}</textarea>
                    @error('content') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-[#1b2559] hover:bg-[#0b1437] text-white px-12 py-5 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all shadow-xl shadow-[#0b1437]/20">
                        Publish Publication
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
