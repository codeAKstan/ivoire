<x-app-layout>
    <x-slot name="header">Client Stories</x-slot>

    @if(session('success'))
        <div class="bg-[#cda151]/10 border-l-4 border-[#cda151] p-6 mb-8 rounded-xl flex items-center gap-4 animate-fadeIn">
            <div class="w-10 h-10 bg-[#cda151] rounded-full flex items-center justify-center text-white shadow-lg shadow-[#cda151]/20">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <div>
                <p class="text-[#151515] font-bold text-sm">Success!</p>
                <p class="text-gray-400 text-xs mt-0.5">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Testimonials List -->
        <div class="lg:col-span-2 space-y-4">
            <div class="bg-white rounded-[30px] p-8 shadow-sm border border-gray-50">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-lg font-bold text-[#151515]">Current Client Stories</h3>
                    <span class="text-xs text-gray-400 font-medium tracking-widest uppercase">{{ $testimonials->count() }} Total</span>
                </div>

                <div class="space-y-6">
                    @forelse($testimonials as $testimonial)
                    <div class="flex flex-col p-6 rounded-2xl hover:bg-[#FAF8F5] border border-transparent hover:border-gray-100 transition-all group relative">
                        <div class="flex items-start justify-between">
                            <div class="space-y-4 pr-12">
                                <div>
                                    <span class="text-4xl font-serif text-[#cda151]/30 leading-none block -mt-2">&ldquo;</span>
                                    <p class="text-gray-600 text-xs leading-relaxed font-light italic -mt-2">
                                        {{ $testimonial->quote }}
                                    </p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-bold text-[#151515]">{{ $testimonial->author_name }}</span>
                                        @if($testimonial->author_title)
                                            <span class="text-[10px] text-gray-400 font-medium">{{ $testimonial->author_title }}</span>
                                        @endif
                                    </div>
                                    <span class="text-[8px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider {{ $testimonial->is_active ? 'bg-emerald-50 text-emerald-600 border border-emerald-100' : 'bg-rose-50 text-rose-600 border border-rose-100' }}">
                                        {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                    <span class="text-[8px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider bg-gray-50 text-gray-500 border border-gray-100">
                                        Order: {{ $testimonial->order }}
                                    </span>
                                </div>
                            </div>
                            <div class="absolute right-6 top-6 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-12">
                        <p class="text-gray-400 text-sm font-light">No client stories registered yet.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Add Testimonial Form -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-[30px] p-8 shadow-sm border border-gray-50 sticky top-8">
                <h3 class="text-lg font-bold text-[#151515] mb-8">Add Client Story</h3>
                
                <form action="{{ route('admin.testimonials.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Author Name</label>
                        <input type="text" name="author_name" value="{{ old('author_name') }}" placeholder="e.g. Babatope Adewoye" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300">
                        @error('author_name') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Author Title / Company</label>
                        <input type="text" name="author_title" value="{{ old('author_title') }}" placeholder="e.g. CEO, Conglex Technologies" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300">
                        @error('author_title') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Display Order</label>
                        <input type="number" name="order" value="{{ old('order', 0) }}" placeholder="e.g. 1" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300">
                        @error('order') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Testimonial Quote</label>
                        <textarea name="quote" rows="5" placeholder="Enter quote text..." class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300 leading-relaxed">{{ old('quote') }}</textarea>
                        @error('quote') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full bg-[#151515] hover:bg-[#cda151] hover:text-white text-white font-bold py-5 rounded-2xl uppercase tracking-[0.2em] text-xs transition-all duration-500 shadow-xl shadow-[#151515]/20">
                        Add Client Story
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
