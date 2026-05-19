<x-app-layout>
    <x-slot name="header">Edit Partner: {{ $partner->name }}</x-slot>

    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-[40px] p-10 shadow-sm border border-gray-50">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h3 class="text-2xl font-bold text-[#1b2559]" style="font-family: 'Playfair Display', serif;">Edit Partner</h3>
                    <p class="text-gray-400 text-sm font-light mt-1">Update information for {{ $partner->name }}.</p>
                </div>
                <a href="{{ route('admin.partners') }}" class="text-[#18c596] text-xs font-bold uppercase tracking-widest hover:underline flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to List
                </a>
            </div>

            <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <!-- Partner Name -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Partner Name</label>
                        <input type="text" name="name" value="{{ old('name', $partner->name) }}" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                        @error('name') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Current Logo & Upload -->
                    <div class="space-y-4">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Partner Logo</label>
                        <div class="flex items-center gap-6 p-6 bg-gray-50 rounded-3xl border border-gray-100">
                            <div class="w-20 h-20 bg-white rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center p-3">
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="max-w-full max-h-full object-contain">
                            </div>
                            <div class="flex-1">
                                <p class="text-xs font-semibold text-[#1b2559] mb-1">Current Logo</p>
                                <p class="text-[10px] text-gray-400 uppercase tracking-widest">Upload a new one to replace it</p>
                            </div>
                        </div>
                        <label class="flex items-center justify-center gap-2 bg-white border-2 border-dashed border-gray-200 hover:border-[#18c596] text-gray-400 hover:text-[#18c596] px-6 py-6 rounded-2xl cursor-pointer transition-all group">
                            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <span class="text-xs font-bold uppercase tracking-widest">Upload New Logo</span>
                            <input type="file" name="logo" class="hidden">
                        </label>
                        @error('logo') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Website URL -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Website URL</label>
                        <input type="url" name="website" value="{{ old('website', $partner->website) }}" placeholder="https://..." class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                        @error('website') <p class="text-red-500 text-[10px] font-bold uppercase mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Status -->
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Status</label>
                        <select name="is_active" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                            <option value="1" {{ $partner->is_active ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$partner->is_active ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end pt-6">
                    <button type="submit" class="bg-[#1b2559] hover:bg-[#0b1437] text-white px-12 py-5 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all shadow-xl shadow-[#0b1437]/20">
                        Update Partner Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
