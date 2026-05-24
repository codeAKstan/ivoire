<x-app-layout>
    <x-slot name="header">Partners</x-slot>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-[#cda151] p-6 mb-8 rounded-xl flex items-center gap-4 animate-fadeIn">
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
        <!-- Partners List -->
        <div class="lg:col-span-2 space-y-4">
            <div class="bg-white rounded-[30px] p-8 shadow-sm border border-gray-50">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-lg font-bold text-[#151515]">Current Partners</h3>
                    <span class="text-xs text-gray-400 font-medium tracking-widest uppercase">{{ $partners->count() }} Total</span>
                </div>

                <div class="space-y-6">
                    @forelse($partners as $partner)
                    <div class="flex items-center justify-between p-4 rounded-2xl hover:bg-[#FAF8F5] transition-all group">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-12 bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center p-2">
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="max-w-full max-h-full object-contain">
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold text-[#151515]">{{ $partner->name }}</span>
                                @if($partner->website)
                                    <a href="{{ $partner->website }}" target="_blank" class="text-[10px] text-[#cda151] hover:underline">{{ $partner->website }}</a>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ route('admin.partners.edit', $partner) }}" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this partner?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-12">
                        <p class="text-gray-400 text-sm font-light">No partners registered yet.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Add Partner Form -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-[30px] p-8 shadow-sm border border-gray-50 sticky top-8">
                <h3 class="text-lg font-bold text-[#151515] mb-8">Add New Partner</h3>
                
                <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Partner Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter name..." class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300">
                        @error('name') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Logo/Image</label>
                        <div class="flex items-center gap-4">
                            <label class="flex-1 flex items-center justify-center gap-2 bg-[#cda151] hover:bg-[#b88f40] text-white px-6 py-4 rounded-2xl cursor-pointer transition-all shadow-lg shadow-[#cda151]/20 group">
                                <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                                <span class="text-xs font-bold uppercase tracking-widest">Choose Logo</span>
                                <input type="file" name="logo" class="hidden">
                            </label>
                        </div>
                        @error('logo') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Website URL</label>
                        <input type="url" name="website" value="{{ old('website') }}" placeholder="https://..." class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300">
                        @error('website') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full bg-[#151515] hover:bg-[#151515] text-white font-bold py-5 rounded-2xl uppercase tracking-[0.2em] text-xs transition-all duration-500 shadow-xl shadow-[#151515]/20">
                        Register Partner
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
