<x-app-layout>
    <div class="space-y-8">
        <!-- Dashboard Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-[#151515]" style="font-family: 'Playfair Display', serif;">
                    Dashboard <span class="italic text-[#cda151]">Overview</span>
                </h1>
                <p class="text-gray-400 text-sm font-light mt-1">Quick metrics for your digital legal ecosystem.</p>
            </div>
            <div class="bg-white px-6 py-3 rounded-2xl shadow-sm border border-gray-50 flex items-center gap-3">
                <div class="w-2 h-2 bg-[#cda151] rounded-full animate-pulse"></div>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">System Live</span>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Partners Card -->
            <a href="{{ route('admin.partners') }}" class="bg-white p-8 rounded-2xl shadow-sm border border-gray-50 flex items-center justify-between group hover:border-[#cda151]/30 transition-all duration-500">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-2">Total Partners</p>
                    <h4 class="text-4xl font-bold text-[#151515]">{{ str_pad($partnersCount, 2, '0', STR_PAD_LEFT) }}</h4>
                    <p class="text-[10px] text-[#cda151] font-bold mt-2 uppercase tracking-widest">Active Accounts</p>
                </div>
                <div class="w-16 h-16 bg-[#FAF8F5] rounded-3xl flex items-center justify-center text-[#151515] group-hover:bg-[#cda151] group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-xl group-hover:shadow-[#cda151]/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
            </a>

            <!-- Publications Card -->
            <a href="{{ route('admin.news') }}" class="bg-white p-8 rounded-2xl shadow-sm border border-gray-50 flex items-center justify-between group hover:border-[#cda151]/30 transition-all duration-500">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-2">Publications</p>
                    <h4 class="text-4xl font-bold text-[#151515]">{{ str_pad($postsCount, 2, '0', STR_PAD_LEFT) }}</h4>
                    <p class="text-[10px] text-blue-500 font-bold mt-2 uppercase tracking-widest">Insights Hub</p>
                </div>
                <div class="w-16 h-16 bg-[#FAF8F5] rounded-3xl flex items-center justify-center text-[#151515] group-hover:bg-[#cda151] group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-xl group-hover:shadow-[#cda151]/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM14 4v4h4"></path></svg>
                </div>
            </a>

            <!-- Services Card -->
            <a href="{{ route('admin.practices') }}" class="bg-white p-8 rounded-2xl shadow-sm border border-gray-50 flex items-center justify-between group hover:border-[#cda151]/30 transition-all duration-500">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-2">Practice Areas</p>
                    <h4 class="text-4xl font-bold text-[#151515]">{{ str_pad($servicesCount, 2, '0', STR_PAD_LEFT) }}</h4>
                    <p class="text-[10px] text-purple-500 font-bold mt-2 uppercase tracking-widest">Core Disciplines</p>
                </div>
                <div class="w-16 h-16 bg-[#FAF8F5] rounded-3xl flex items-center justify-center text-[#151515] group-hover:bg-[#cda151] group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-xl group-hover:shadow-[#cda151]/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activity / Latest Comments (Spanning Full Width) -->
            <div class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-gray-50 overflow-hidden">
                <div class="p-8 border-b border-gray-50 flex items-center justify-between">
                    <h3 class="text-lg font-bold text-[#151515]">Recent Activity</h3>
                    <a href="{{ route('admin.comments') }}" class="text-[10px] font-bold uppercase tracking-widest text-[#cda151] hover:underline">View All</a>
                </div>
                <div class="divide-y divide-gray-50">
                    @forelse($latestComments as $comment)
                    @php
                        $authorName = $comment->user_id ? $comment->user->name : $comment->guest_name;
                        $isAdmin = $comment->user_id && $comment->user->is_admin;
                    @endphp
                    <div class="p-6 flex items-start gap-4 group hover:bg-[#FAF8F5]/50 transition-all">
                        <div class="w-12 h-12 {{ $isAdmin ? 'bg-[#151515]' : 'bg-[#cda151]/10' }} rounded-2xl flex items-center justify-center {{ $isAdmin ? 'text-white' : 'text-[#cda151]' }} font-bold text-sm flex-shrink-0">
                            {{ substr($authorName, 0, 1) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between mb-1">
                                <h5 class="text-sm font-bold text-[#151515] truncate">{{ $authorName }}</h5>
                                <span class="text-[8px] font-bold uppercase tracking-widest text-gray-300">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-xs text-gray-400 line-clamp-1 italic mb-2">"{{ $comment->content }}"</p>
                            <div class="flex items-center gap-3">
                                <span class="text-[8px] font-bold uppercase tracking-widest px-2 py-1 bg-gray-50 text-gray-400 rounded-md">Post: {{ $comment->post->title }}</span>
                                @if($isAdmin)
                                    <span class="text-[8px] font-bold uppercase tracking-widest px-2 py-1 bg-[#cda151]/10 text-[#cda151] rounded-md">Official Reply</span>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('admin.comments') }}" class="opacity-0 group-hover:opacity-100 p-2 text-gray-400 hover:text-[#cda151] transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                        </a>
                    </div>
                    @empty
                    <div class="p-12 text-center text-gray-400 text-sm font-light italic">No recent activity.</div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Secondary Info Section -->
        <div class="bg-[#151515] rounded-2xl p-12 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-96 h-96 bg-[#cda151]/10 rounded-full blur-3xl -mr-20 -mt-20 transition-all duration-700 group-hover:bg-[#cda151]/20"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2" style="font-family: 'Playfair Display', serif;">Platform <span class="italic text-[#cda151]">Insights</span></h3>
                    <p class="text-white/40 text-sm font-light max-w-md leading-relaxed">
                        Track your brand's growth and legal impact. Use the modules above to update your public profile and keep your audience informed.
                    </p>
                </div>
                <div class="flex gap-4">
                    <a href="{{ route('admin.practices.create') }}" class="bg-white text-black px-8 py-4 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-[#cda151] hover:text-white transition-all duration-500 shadow-xl shadow-black/20">
                        Add New Service
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
