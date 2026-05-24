<x-app-layout>
    <x-slot name="header">News & Publications</x-slot>

    <div class="space-y-8">
        <!-- Stats Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-8 rounded-[30px] shadow-sm border border-gray-50 flex items-center justify-between">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Total Posts</p>
                    <h4 class="text-3xl font-bold text-[#151515]">{{ $posts->count() }}</h4>
                </div>
                <div class="w-12 h-12 bg-[#cda151]/10 rounded-2xl flex items-center justify-center text-[#cda151]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path></svg>
                </div>
            </div>
            <div class="bg-white p-8 rounded-[30px] shadow-sm border border-gray-50 flex items-center justify-between">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Published</p>
                    <h4 class="text-3xl font-bold text-[#151515]">{{ $posts->where('is_published', true)->count() }}</h4>
                </div>
                <div class="w-12 h-12 bg-blue-500/10 rounded-2xl flex items-center justify-center text-blue-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <div class="bg-white p-8 rounded-[30px] shadow-sm border border-gray-50 flex items-center justify-between">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Total Comments</p>
                    <h4 class="text-3xl font-bold text-[#151515]">{{ \App\Models\Comment::count() }}</h4>
                </div>
                <div class="w-12 h-12 bg-purple-500/10 rounded-2xl flex items-center justify-center text-purple-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-emerald-50 border-l-4 border-[#cda151] p-6 rounded-xl flex items-center gap-4 animate-fadeIn">
                <div class="w-10 h-10 bg-[#cda151] rounded-full flex items-center justify-center text-white shadow-lg shadow-[#cda151]/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div>
                    <p class="text-[#151515] font-bold text-sm">Success!</p>
                    <p class="text-gray-400 text-xs mt-0.5">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Blog Table -->
        <div class="bg-white rounded-[30px] shadow-sm border border-gray-50 overflow-hidden">
            <div class="p-8 flex items-center justify-between border-b border-gray-50">
                <h3 class="text-lg font-bold text-[#151515]">All Publications</h3>
                <a href="{{ route('admin.news.create') }}" class="bg-[#cda151] hover:bg-[#b88f40] text-white px-6 py-3 rounded-xl text-xs font-bold uppercase tracking-widest transition-all shadow-lg shadow-[#cda151]/20">
                    Create New Post
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-[10px] font-bold uppercase tracking-widest text-gray-400 border-b border-gray-50">
                            <th class="px-8 py-6">Image</th>
                            <th class="px-8 py-6">Title</th>
                            <th class="px-8 py-6">Category</th>
                            <th class="px-8 py-6">Status</th>
                            <th class="px-8 py-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach($posts as $post)
                        <tr class="group hover:bg-[#FAF8F5]/50 transition-all">
                            <td class="px-8 py-6">
                                <div class="w-16 h-12 bg-gray-100 rounded-lg overflow-hidden">
                                    @if($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-[8px] font-bold text-gray-300">NO IMAGE</div>
                                    @endif
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm font-semibold text-[#151515] mb-1">{{ $post->title }}</p>
                                <p class="text-[10px] text-gray-400 font-medium tracking-widest uppercase">{{ $post->created_at->format('M Y') }}</p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="text-xs font-medium text-gray-500">{{ $post->category }}</span>
                            </td>
                            <td class="px-8 py-6">
                                <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest {{ $post->is_published ? 'bg-green-100 text-green-600' : 'bg-yellow-100 text-yellow-600' }}">
                                    {{ $post->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.news.edit', $post) }}" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </a>
                                    <form action="{{ route('admin.news.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        @if($posts->isEmpty())
                            <tr>
                                <td colspan="5" class="px-8 py-12 text-center text-gray-400 text-sm font-light italic">No publications yet. Click 'Create New Post' to start.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            
            <div class="p-8 border-t border-gray-50 flex items-center justify-between">
                <p class="text-xs text-gray-400">Showing 1 to 3 of 24 publications</p>
                <div class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-gray-100 rounded-lg text-xs font-bold text-gray-400 hover:bg-gray-50 transition-all">Prev</button>
                    <button class="px-4 py-2 bg-[#cda151] rounded-lg text-xs font-bold text-white shadow-lg shadow-[#cda151]/10">1</button>
                    <button class="px-4 py-2 border border-gray-100 rounded-lg text-xs font-bold text-gray-400 hover:bg-gray-50 transition-all">Next</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
