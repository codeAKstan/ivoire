<x-app-layout>
    <x-slot name="header">Edit Client Story: {{ $testimonial->author_name }}</x-slot>

    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-50">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h3 class="text-2xl font-bold text-[#151515]" style="font-family: 'Playfair Display', serif;">Edit Client Story</h3>
                    <p class="text-gray-400 text-sm font-light mt-1">Update details for this client testimonial.</p>
                </div>
                <a href="{{ route('admin.testimonials') }}" class="text-[#cda151] text-xs font-bold uppercase tracking-widest hover:underline flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to List
                </a>
            </div>

            <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <!-- Author Name -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Author Name</label>
                        <input type="text" name="author_name" value="{{ old('author_name', $testimonial->author_name) }}" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium">
                        @error('author_name') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Author Title / Company -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Author Title / Company</label>
                        <input type="text" name="author_title" value="{{ old('author_title', $testimonial->author_title) }}" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium">
                        @error('author_title') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Order -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Display Order</label>
                        <input type="number" name="order" value="{{ old('order', $testimonial->order) }}" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium">
                        @error('order') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Status -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Status</label>
                        <select name="is_active" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium">
                            <option value="1" {{ $testimonial->is_active ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$testimonial->is_active ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('is_active') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Quote -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Testimonial Quote</label>
                        <textarea name="quote" rows="6" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium leading-relaxed">{{ old('quote', $testimonial->quote) }}</textarea>
                        @error('quote') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="flex justify-end pt-6">
                    <button type="submit" class="bg-[#151515] hover:bg-[#cda151] hover:text-white text-white px-12 py-5 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all shadow-xl shadow-[#151515]/20">
                        Update Client Story
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
