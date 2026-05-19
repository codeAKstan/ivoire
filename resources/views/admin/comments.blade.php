<x-app-layout>
    <x-slot name="header">Community Discussion</x-slot>

    <div class="space-y-8">
        @if(session('success'))
            <div class="bg-emerald-50 border-l-4 border-[#18c596] p-6 rounded-xl flex items-center gap-4 animate-fadeIn">
                <div class="w-10 h-10 bg-[#18c596] rounded-full flex items-center justify-center text-white shadow-lg shadow-[#18c596]/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <div>
                    <p class="text-[#1b2559] font-bold text-sm">Success!</p>
                    <p class="text-gray-400 text-xs mt-0.5">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Comments Table -->
        <div class="bg-white rounded-[30px] shadow-sm border border-gray-50 overflow-hidden">
            <div class="p-8 flex items-center justify-between border-b border-gray-50">
                <h3 class="text-lg font-bold text-[#1b2559]">Recent Comments</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-[10px] font-bold uppercase tracking-widest text-gray-400 border-b border-gray-50">
                            <th class="px-8 py-6">Author</th>
                            <th class="px-8 py-6">Comment</th>
                            <th class="px-8 py-6">Publication</th>
                            <th class="px-8 py-6">Date</th>
                            <th class="px-8 py-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse($comments as $comment)
                        @php
                            $authorName = $comment->user_id ? $comment->user->name : $comment->guest_name;
                            $isAdmin = $comment->user_id && $comment->user->is_admin;
                        @endphp
                        <tr class="group hover:bg-[#f4f7fe]/50 transition-all">
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 {{ $isAdmin ? 'bg-[#1b2559]' : 'bg-[#18c596]/10' }} rounded-xl flex items-center justify-center {{ $isAdmin ? 'text-white' : 'text-[#18c596]' }} font-bold text-sm">
                                        {{ substr($authorName, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-[#1b2559]">{{ $authorName }}</p>
                                        @if($isAdmin)
                                            <span class="text-[8px] font-bold uppercase tracking-widest text-[#18c596]">Admin</span>
                                        @else
                                            <span class="text-[8px] font-bold uppercase tracking-widest text-gray-400">Contributor</span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-xs text-gray-500 leading-relaxed max-w-md line-clamp-2 italic">"{{ $comment->content }}"</p>
                            </td>
                            <td class="px-8 py-6">
                                <a href="{{ route('posts.show', $comment->post->slug) }}" target="_blank" class="text-xs font-medium text-[#1b2559] hover:text-[#18c596] transition-colors line-clamp-1">
                                    {{ $comment->post->title }}
                                </a>
                            </td>
                            <td class="px-8 py-6">
                                <span class="text-[10px] text-gray-400 font-medium uppercase tracking-widest">{{ $comment->created_at->format('M d, Y') }}</span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST" onsubmit="return confirm('Remove this comment permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-8 py-12 text-center text-gray-400 text-sm font-light italic">No comments found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
