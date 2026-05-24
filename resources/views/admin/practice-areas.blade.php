<x-app-layout>
    <x-slot name="header">Practice Areas</x-slot>

    <div class="space-y-8">
        <!-- Practice Areas Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $iconPaths = [
                    'transaction' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                    'family' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                    'advisory' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944v18.056',
                    'advisory-1' => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z',
                    'advisory-2' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                    'dispute' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0l-3-9m3 0l3 1m0 0l-3 9a5.002 5.002 0 006.001 0l-3-9M6 10l3-9m3 9l3-9M6 10l3 9m3-9l3 9m-4-2L5 7a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2l-7 11z',
                    'media' => 'M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z',
                    'sports' => 'M12 22a10 10 0 100-20 10 10 0 000 20zm0-2a8 8 0 110-16 8 8 0 010 16zm-5-8a5 5 0 005 5V7a5 5 0 00-5 5z',
                    'tax' => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',
                    'technology' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
                    'real-estate' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                    'company' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'intellectual-property' => 'M9.663 17h4.674a1 1 0 01.992.883l.12 1.077a1 1 0 01-.992 1.11H9.54a1 1 0 01-.992-1.11l.12-1.077a1 1 0 01.992-.883zm3-14a6.5 6.5 0 00-6.225 8.415 2 2 0 01-.497 1.448l-1.135 1.135a1 1 0 00-.206.313c-.056.142-.087.294-.087.453V15a1 1 0 001 1h10a1 1 0 001-1v-1.136c0-.159-.031-.311-.087-.453a1 1 0 00-.206-.313l-1.135-1.135a2 2 0 01-.497-1.448A6.5 6.5 0 0012.663 3z',
                ];
            @endphp

            @foreach($services as $service)
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-50 flex flex-col items-center text-center group hover:border-[#cda151]/30 transition-all duration-500">
                <div class="w-20 h-20 bg-[#FAF8F5] rounded-[24px] flex items-center justify-center text-[#151515] mb-8 group-hover:bg-[#cda151] group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-xl group-hover:shadow-[#cda151]/20">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $iconPaths[$service->icon] ?? $iconPaths['advisory'] }}"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-[#151515] mb-4" style="font-family: 'Playfair Display', serif;">{{ $service->title }}</h4>
                <p class="text-gray-400 text-sm font-light leading-relaxed mb-8 line-clamp-3">
                    {{ $service->description }}
                </p>
                <div class="mt-auto w-full flex gap-3">
                    <a href="{{ route('admin.practices.edit', $service) }}" class="flex-1 bg-[#cda151] hover:bg-[#b88f40] text-white py-4 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all shadow-lg shadow-[#cda151]/10 flex items-center justify-center">
                        Edit Area
                    </a>
                    <form action="{{ route('admin.practices.destroy', $service) }}" method="POST" onsubmit="return confirm('Delete this practice area?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-14 h-14 bg-[#FAF8F5] hover:bg-red-50 text-gray-400 hover:text-red-500 rounded-2xl flex items-center justify-center transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach

            <!-- Add New Area Placeholder -->
            <a href="{{ route('admin.practices.create') }}" class="bg-white rounded-2xl p-10 border-2 border-dashed border-gray-100 flex flex-col items-center justify-center text-center group hover:border-[#cda151] transition-all duration-500">
                <div class="w-20 h-20 bg-gray-50 rounded-[24px] flex items-center justify-center text-gray-300 mb-8 group-hover:bg-[#cda151]/10 group-hover:text-[#cda151] transition-all duration-500">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-gray-300 mb-2" style="font-family: 'Playfair Display', serif;">Add New Area</h4>
                <p class="text-gray-200 text-sm font-light">Expand your legal services</p>
            </a>
        </div>
    </div>
</x-app-layout>
