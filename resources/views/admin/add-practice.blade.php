<x-app-layout>
    <x-slot name="header">Add Service</x-slot>

    <form action="{{ route('admin.practices.store') }}" method="POST" class="max-w-5xl space-y-8 pb-20">
        @csrf
        <!-- Image Upload Card -->
        <div class="bg-white rounded-[30px] p-8 shadow-sm border border-gray-50 overflow-hidden">
            <h3 class="text-sm font-bold text-[#151515] mb-6">Upload Service Image <span class="text-gray-300 font-normal ml-2">(Image must be below 5MB)</span></h3>
            
            <div class="flex items-center gap-4">
                <label class="flex-1 flex items-center justify-center gap-2 bg-[#5e72e4] hover:bg-[#4a5cd1] text-white px-8 py-4 rounded-2xl cursor-pointer transition-all shadow-lg shadow-[#5e72e4]/20 group">
                    <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    <span class="text-xs font-bold uppercase tracking-widest">Choose file</span>
                    <input type="file" name="image" class="hidden">
                </label>
                <div class="flex-[3] bg-[#FAF8F5] rounded-2xl px-6 py-4 text-gray-400 text-sm font-light">
                    No file chosen
                </div>
            </div>
            @error('image')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Icon Selection Card -->
        <div class="bg-white rounded-[30px] p-8 shadow-sm border border-gray-50 overflow-hidden" x-data="{ selectedIcon: '{{ old('icon', '') }}' }">
            <h3 class="text-sm font-bold text-[#151515] mb-8">Select Practice Icon</h3>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                    $icons = [
                        ['id' => 'transaction', 'label' => 'transaction', 'path' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['id' => 'family', 'label' => 'family', 'path' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'],
                        ['id' => 'advisory', 'label' => 'advisory', 'path' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944v18.056'],
                        ['id' => 'advisory-1', 'label' => 'advisory-1', 'path' => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z'],
                        ['id' => 'advisory-2', 'label' => 'advisory-2', 'path' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                        ['id' => 'dispute', 'label' => 'dispute', 'path' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0l-3-9m3 0l3 1m0 0l-3 9a5.002 5.002 0 006.001 0l-3-9M6 10l3-9m3 9l3-9M6 10l3 9m3-9l3 9m-4-2L5 7a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2l-7 11z'],
                        ['id' => 'media', 'label' => 'media', 'path' => 'M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z'],
                        ['id' => 'sports', 'label' => 'sports', 'path' => 'M12 22a10 10 0 100-20 10 10 0 000 20zm0-2a8 8 0 110-16 8 8 0 010 16zm-5-8a5 5 0 005 5V7a5 5 0 00-5 5z'],
                        ['id' => 'tax', 'label' => 'tax', 'path' => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z'],
                        ['id' => 'technology', 'label' => 'technology', 'path' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
                        ['id' => 'real-estate', 'label' => 'real-estate', 'path' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                        ['id' => 'company', 'label' => 'company', 'path' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                        ['id' => 'intellectual-property', 'label' => 'intellectual-property', 'path' => 'M9.663 17h4.674a1 1 0 01.992.883l.12 1.077a1 1 0 01-.992 1.11H9.54a1 1 0 01-.992-1.11l.12-1.077a1 1 0 01.992-.883zm3-14a6.5 6.5 0 00-6.225 8.415 2 2 0 01-.497 1.448l-1.135 1.135a1 1 0 00-.206.313c-.056.142-.087.294-.087.453V15a1 1 0 001 1h10a1 1 0 001-1v-1.136c0-.159-.031-.311-.087-.453a1 1 0 00-.206-.313l-1.135-1.135a2 2 0 01-.497-1.448A6.5 6.5 0 0012.663 3z'],
                    ];
                @endphp

                @foreach($icons as $icon)
                <div 
                    @click="selectedIcon = '{{ $icon['id'] }}'"
                    :class="selectedIcon === '{{ $icon['id'] }}' ? 'border-[#151515] bg-[#FAF8F5]' : 'border-gray-50 bg-white hover:border-gray-200'"
                    class="p-6 rounded-[24px] border shadow-sm flex flex-col items-center gap-3 cursor-pointer transition-all group"
                >
                    <div class="w-10 h-10 flex items-center justify-center text-[#151515] transition-transform group-hover:scale-110">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icon['path'] }}"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ $icon['label'] }}</span>
                </div>
                @endforeach
            </div>
            <input type="hidden" name="icon" x-model="selectedIcon">
            @error('icon')
                <p class="text-red-500 text-xs mt-4">{{ $message }}</p>
            @enderror
        </div>

        <!-- Details Card -->
        <div class="bg-white rounded-[30px] p-8 shadow-sm border border-gray-50 overflow-hidden space-y-8">
            <div class="space-y-2">
                <label class="text-sm font-bold text-[#151515]">Title/Name of Service</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Title/Name of Service" class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label class="text-sm font-bold text-[#151515]">Description</label>
                <textarea name="description" rows="6" placeholder="Describe the service..." class="w-full bg-[#FAF8F5] border-none text-[#151515] px-6 py-4 rounded-3xl focus:ring-1 focus:ring-[#cda151] transition-all text-sm font-medium placeholder-gray-300 resize-none">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex justify-end pt-4">
            <button type="submit" class="bg-[#cda151] hover:bg-[#b88f40] text-white px-12 py-5 rounded-2xl font-bold text-sm tracking-widest uppercase transition-all duration-500 shadow-xl shadow-[#cda151]/20">
                Register Service
            </button>
        </div>
    </form>
</x-app-layout>
