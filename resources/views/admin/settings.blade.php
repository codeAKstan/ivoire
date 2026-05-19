<x-app-layout>
    <x-slot name="header">Settings</x-slot>

    <div class="max-w-4xl" x-data="{ tab: 'profile', showAddForm: false }">
        <!-- Tab Navigation -->
        <div class="flex items-center gap-8 mb-8 border-b border-gray-100 px-2">
            <button 
                @click="tab = 'profile'" 
                :class="tab === 'profile' ? 'border-[#18c596] text-[#1b2559]' : 'border-transparent text-gray-400 hover:text-gray-600'"
                class="pb-4 px-2 border-b-2 font-bold text-xs uppercase tracking-widest transition-all"
            >
                Profile & Security
            </button>
            <button 
                @click="tab = 'social'" 
                :class="tab === 'social' ? 'border-[#18c596] text-[#1b2559]' : 'border-transparent text-gray-400 hover:text-gray-600'"
                class="pb-4 px-2 border-b-2 font-bold text-xs uppercase tracking-widest transition-all"
            >
                Social Accounts
            </button>
        </div>

        <div class="bg-white rounded-[40px] shadow-sm border border-gray-50 overflow-hidden">
            @if (session('status') == 'password-updated')
                <div class="bg-[#18c596]/10 border-l-4 border-[#18c596] p-6 m-10 mb-0 rounded-xl flex items-center gap-4 animate-fadeIn">
                    <div class="w-10 h-10 bg-[#18c596] rounded-full flex items-center justify-center text-white shadow-lg shadow-[#18c596]/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-[#1b2559] font-bold text-sm">Password Updated!</p>
                        <p class="text-gray-400 text-xs mt-0.5">Your security credentials have been refreshed successfully.</p>
                    </div>
                </div>
            @endif

            @if (session('status') == 'social-updated')
                <div class="bg-[#18c596]/10 border-l-4 border-[#18c596] p-6 m-10 mb-0 rounded-xl flex items-center gap-4 animate-fadeIn">
                    <div class="w-10 h-10 bg-[#18c596] rounded-full flex items-center justify-center text-white shadow-lg shadow-[#18c596]/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-[#1b2559] font-bold text-sm">Socials Updated!</p>
                        <p class="text-gray-400 text-xs mt-0.5">Your social media links have been updated successfully.</p>
                    </div>
                </div>
            @endif

            <!-- Profile Tab Content -->
            <div x-show="tab === 'profile'" x-cloak class="animate-fadeIn">
                <div class="p-10 border-b border-gray-50">
                    <h3 class="text-xl font-bold text-[#1b2559]" style="font-family: 'Playfair Display', serif;">Account Settings</h3>
                    <p class="text-gray-400 text-sm font-light mt-1">Manage your administrator profile and security preferences.</p>
                </div>

                <div class="p-10 space-y-10">
                    <!-- Profile Section -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h4 class="text-sm font-bold text-[#1b2559] uppercase tracking-widest">Admin Profile</h4>
                            <p class="text-xs text-gray-400 mt-2 font-light">Public information about your account.</p>
                        </div>
                        <div class="md:col-span-2 space-y-6">
                            <div class="flex items-center gap-6 mb-8">
                                <div class="w-20 h-20 bg-gradient-to-tr from-[#18c596] to-[#0b1437] rounded-3xl flex items-center justify-center text-white font-bold text-2xl shadow-xl shadow-[#18c596]/20">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <button class="bg-[#f4f7fe] hover:bg-gray-100 text-[#1b2559] px-6 py-3 rounded-xl text-xs font-bold uppercase tracking-widest transition-all">
                                    Change Photo
                                </button>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Full Name</label>
                                    <input type="text" value="{{ Auth::user()->name }}" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Email Address</label>
                                    <input type="email" value="{{ Auth::user()->email }}" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-50">

                    <!-- Password Section -->
                    <form method="POST" action="{{ route('user-password.update') }}" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @csrf
                        @method('PUT')
                        <div>
                            <h4 class="text-sm font-bold text-[#1b2559] uppercase tracking-widest">Security</h4>
                            <p class="text-xs text-gray-400 mt-2 font-light">Update your password to stay secure.</p>
                        </div>
                        <div class="md:col-span-2 space-y-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Current Password</label>
                                <input type="password" name="current_password" placeholder="••••••••" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium @error('current_password', 'updatePassword') ring-1 ring-red-500 @enderror">
                                @error('current_password', 'updatePassword')
                                    <p class="text-[10px] text-red-500 font-bold uppercase tracking-widest mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">New Password</label>
                                    <input type="password" name="password" placeholder="••••••••" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium @error('password', 'updatePassword') ring-1 ring-red-500 @enderror">
                                    @error('password', 'updatePassword')
                                        <p class="text-[10px] text-red-500 font-bold uppercase tracking-widest mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Confirm Password</label>
                                    <input type="password" name="password_confirmation" placeholder="••••••••" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                </div>
                            </div>

                            <div class="flex justify-end pt-4">
                                <button type="submit" class="bg-[#18c596] hover:bg-[#15b085] text-white px-10 py-5 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all shadow-xl shadow-[#18c596]/20">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="p-10 bg-gray-50/50 border-t border-gray-50 flex justify-end">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Profile updates coming soon</p>
                </div>
            </div>

            <!-- Social Accounts Tab Content -->
            <div x-show="tab === 'social'" x-cloak class="animate-fadeIn">
                <div class="p-10 border-b border-gray-50 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-[#1b2559]" style="font-family: 'Playfair Display', serif;">Social Accounts</h3>
                        <p class="text-gray-400 text-sm font-light mt-1">Configure your official social media presence.</p>
                    </div>
                    <button @click="showAddForm = !showAddForm" class="bg-[#5e72e4] hover:bg-[#4a5cd1] text-white px-8 py-4 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all flex items-center gap-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        <span x-text="showAddForm ? 'Cancel' : 'Add New Socials'"></span>
                    </button>
                </div>

                <div class="p-10 space-y-12">
                    <!-- Add New Form -->
                    <div x-show="showAddForm" x-collapse class="bg-[#f4f7fe] p-8 rounded-[30px] border border-gray-100 mb-12" x-data="{ selectedPlatform: '' }">
                        <h4 class="text-sm font-bold text-[#1b2559] mb-6 uppercase tracking-widest">New Social Account</h4>
                        <form action="{{ route('admin.settings.social.store') }}" method="POST" class="space-y-8">
                            @csrf
                            <!-- Platform Selection -->
                            <div class="space-y-4">
                                <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Select Platform</label>
                                <div class="grid grid-cols-3 gap-4">
                                    <template x-for="p in ['instagram', 'facebook', 'linkedin']">
                                        <div 
                                            @click="selectedPlatform = p"
                                            :class="selectedPlatform === p ? 'border-[#18c596] bg-white' : 'border-transparent bg-white/50 hover:bg-white'"
                                            class="p-6 rounded-2xl border-2 cursor-pointer transition-all flex flex-col items-center gap-2 group"
                                        >
                                            <img :src="'/assets/img/logo/' + p + '.png'" :alt="p" class="w-8 h-8 object-contain transition-transform group-hover:scale-110">
                                            <span class="text-[8px] font-bold uppercase tracking-widest text-gray-400" x-text="p"></span>
                                        </div>
                                    </template>
                                </div>
                                <input type="hidden" name="platform" x-model="selectedPlatform">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Display Name</label>
                                    <input type="text" name="name" placeholder="e.g. Ivoire Legal" class="w-full bg-white border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Profile Link</label>
                                    <input type="url" name="link" placeholder="https://..." class="w-full bg-white border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-[#18c596] text-white px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-widest hover:bg-[#15b085] transition-all shadow-lg shadow-[#18c596]/20">Save Platform</button>
                            </div>
                        </form>
                    </div>

                    @foreach($socials as $social)
                    <div class="space-y-6" x-data="{ selectedPlatform: '{{ $social->platform }}' }">
                        <div class="flex items-center justify-between">
                            <p class="text-xs font-bold text-gray-300 uppercase tracking-[0.2em]">{{ $social->name }}</p>
                            @if($social->platform)
                                <img src="/assets/img/logo/{{ $social->platform }}.png" alt="" class="w-6 h-6 object-contain">
                            @endif
                        </div>
                        
                        <form action="{{ route('admin.settings.social.update', $social) }}" method="POST" class="space-y-8">
                            @csrf
                            @method('PUT')
                            
                            <!-- Platform Selection (Edit) -->
                            <div class="space-y-4">
                                <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Update Platform</label>
                                <div class="grid grid-cols-3 gap-4">
                                    <template x-for="p in ['instagram', 'facebook', 'linkedin']">
                                        <div 
                                            @click="selectedPlatform = p"
                                            :class="selectedPlatform === p ? 'border-[#18c596] bg-[#f4f7fe]' : 'border-transparent bg-gray-50 hover:bg-gray-100'"
                                            class="p-4 rounded-xl border-2 cursor-pointer transition-all flex flex-col items-center gap-2 group"
                                        >
                                            <img :src="'/assets/img/logo/' + p + '.png'" :alt="p" class="w-6 h-6 object-contain transition-transform group-hover:scale-110">
                                        </div>
                                    </template>
                                </div>
                                <input type="hidden" name="platform" x-model="selectedPlatform">
                            </div>

                            <div class="grid grid-cols-1 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Display Name</label>
                                    <input type="text" name="name" value="{{ $social->name }}" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Link</label>
                                    <input type="url" name="link" value="{{ $social->link }}" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Status</label>
                                    <select name="status" class="w-full bg-[#f4f7fe] border-none text-[#1b2559] px-6 py-4 rounded-2xl focus:ring-1 focus:ring-[#18c596] transition-all text-sm font-medium">
                                        <option value="activated" {{ $social->is_active ? 'selected' : '' }}>Activated</option>
                                        <option value="deactivated" {{ !$social->is_active ? 'selected' : '' }}>Deactivated</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex justify-center pt-2">
                                <button type="submit" class="px-10 py-3 border border-purple-200 text-purple-600 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-purple-50 transition-all">Update {{ $social->name }}</button>
                            </div>
                        </form>
                        <hr class="border-gray-50 mt-8">
                    </div>
                    @endforeach

                    @if($socials->isEmpty())
                        <div class="text-center py-12">
                            <p class="text-gray-400 text-sm font-light">No social accounts configured yet.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <style>
        .animate-fadeIn {
            animation: fadeIn 0.4s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</x-app-layout>
