<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ivoire') }} | Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">

        <style>
            [x-cloak] { display: none !important; }
            ::-webkit-scrollbar { width: 6px; }
            ::-webkit-scrollbar-track { background: #0a0a0a; }
            ::-webkit-scrollbar-thumb { background: #cda15133; border-radius: 10px; }
            ::-webkit-scrollbar-thumb:hover { background: #cda15155; }
        </style>
    </head>
    <body class="font-['Inter'] antialiased bg-[#FAF8F5] text-[#151515]">
        <x-banner />

        <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: window.innerWidth >= 768 }">
            <!-- Mobile Sidebar Backdrop Overlay -->
            <div 
                x-show="sidebarOpen" 
                x-cloak
                @click="sidebarOpen = false" 
                class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40 md:hidden transition-opacity duration-300"
            ></div>

            <!-- Sidebar -->
            <aside 
                class="bg-[#151515] text-white w-72 flex-shrink-0 transition-all duration-300 fixed md:relative h-screen md:h-auto z-50 overflow-y-auto"
                :class="sidebarOpen ? 'ml-0' : '-ml-72 md:ml-0 md:w-20'"
            >
                <!-- Sidebar Header -->
                <div class="p-8 flex items-center justify-between">
                    <div class="flex items-center gap-3" :class="!sidebarOpen && 'md:hidden'">
                        <img src="{{ asset('assets/img/ivoire-legal-logo-inline-dark.png') }}" class="h-8 w-auto object-contain" alt="Logo">
                    </div>
                    <button @click="sidebarOpen = !sidebarOpen" class="text-white/40 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>

                <!-- Navigation -->
                <nav class="px-4 py-4 space-y-8">
                    <!-- Main Section -->
                    <div>
                        <p class="px-4 text-[10px] font-bold uppercase tracking-[0.2em] text-white/30 mb-4" :class="!sidebarOpen && 'md:hidden'">Main</p>
                        <div class="space-y-1">
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('dashboard') ? 'bg-[#cda151] text-white shadow-lg shadow-[#cda151]/20' : 'text-white/60 hover:text-white hover:bg-white/5' }}">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                <span class="text-sm font-medium" :class="!sidebarOpen && 'md:hidden'">Dashboard</span>
                            </a>
                        </div>
                    </div>

                    <!-- General Section -->
                    <div>
                        <p class="px-4 text-[10px] font-bold uppercase tracking-[0.2em] text-white/30 mb-4" :class="!sidebarOpen && 'md:hidden'">General</p>
                        <div class="space-y-1">
                            <a href="{{ route('admin.practices') }}" class="flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('admin.practices') ? 'bg-[#cda151] text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }} transition-all group">
                                <div class="flex items-center gap-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                    <span class="text-sm font-medium" :class="!sidebarOpen && 'md:hidden'">Practice Areas</span>
                                </div>
                                <svg class="w-4 h-4 transition-transform group-hover:rotate-90" :class="!sidebarOpen && 'md:hidden'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                            <a href="{{ route('admin.partners') }}" class="flex items-center gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.partners') ? 'bg-[#cda151] text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }} transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                <span class="text-sm font-medium" :class="!sidebarOpen && 'md:hidden'">Partners</span>
                            </a>
                            <a href="{{ route('admin.news') }}" class="flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('admin.news') ? 'bg-[#cda151] text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }} transition-all group">
                                <div class="flex items-center gap-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM14 4v4h4"></path></svg>
                                    <span class="text-sm font-medium" :class="!sidebarOpen && 'md:hidden'">News & Publications</span>
                                </div>
                                <svg class="w-4 h-4 transition-transform group-hover:rotate-90" :class="!sidebarOpen && 'md:hidden'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                            <a href="{{ route('admin.comments') }}" class="flex items-center gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.comments') ? 'bg-[#cda151] text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }} transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                                <span class="text-sm font-medium" :class="!sidebarOpen && 'md:hidden'">Comments</span>
                            </a>
                        </div>
                    </div>

                    <!-- Settings Section -->
                    <div>
                        <p class="px-4 text-[10px] font-bold uppercase tracking-[0.2em] text-white/30 mb-4" :class="!sidebarOpen && 'md:hidden'">Settings</p>
                        <div class="space-y-1">
                            <a href="{{ route('admin.settings') }}" class="flex items-center gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.settings') ? 'bg-[#cda151] text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }} transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-sm font-medium" :class="!sidebarOpen && 'md:hidden'">Settings</span>
                            </a>
                        </div>
                    </div>
                </nav>

                <!-- Sidebar Footer -->
                <div class="absolute bottom-0 left-0 w-full p-6 border-t border-white/5 bg-[#151515]">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center gap-4 px-4 py-3 rounded-xl text-red-400 hover:bg-red-500/10 transition-all w-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4-4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span class="text-sm font-medium" :class="!sidebarOpen && 'md:hidden'">Logout</span>
                        </button>
                    </form>
                </div>
            </aside>

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
                <!-- Top Header -->
                <header class="bg-white/80 backdrop-blur-md h-20 flex items-center justify-between px-4 md:px-8 border-b border-gray-100 flex-shrink-0">
                    <div class="flex items-center gap-3 md:gap-4">
                        <!-- Sidebar Toggle Button -->
                        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-[#cda151] transition-colors p-2 rounded-xl hover:bg-gray-50 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>

                        <div>
                            <h2 class="text-lg md:text-xl font-bold text-[#151515]" style="font-family: 'Playfair Display', serif;">
                                {{ $header ?? 'Dashboard' }}
                              </h2>
                              <nav class="hidden sm:flex text-[10px] text-gray-400 uppercase tracking-widest mt-1">
                                  <a href="/" class="hover:text-[#cda151]">Home</a>
                                  <span class="mx-2">&raquo;</span>
                                  <span class="text-[#cda151] font-bold">{{ $header ?? 'Dashboard' }}</span>
                              </nav>
                          </div>
                      </div>
  
                      <div class="flex items-center gap-4 md:gap-6">
                          <!-- Search Bar -->
                          <div class="relative hidden lg:block">
                              <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                              </span>
                              <input type="text" class="bg-[#FAF8F5] border-none rounded-full pl-10 pr-4 py-2 text-xs w-64 focus:ring-1 focus:ring-[#cda151]" placeholder="Search...">
                          </div>
  
                          <!-- Icons -->
                          <div class="flex items-center gap-3 md:gap-4 text-gray-400">
                              <button class="hover:text-[#cda151] transition-colors"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg></button>
                              <button class="hover:text-[#cda151] transition-colors"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg></button>
                          </div>
  
                          <!-- User Profile -->
                          <div class="flex items-center gap-3 pl-4 md:pl-6 border-l border-gray-100">
                              <div class="text-right hidden sm:block">
                                  <p class="text-xs font-bold text-[#151515]">{{ Auth::user()->name }}</p>
                                  <p class="text-[10px] text-gray-400 uppercase tracking-widest">Administrator</p>
                              </div>
                              <div class="w-9 h-9 md:w-10 md:h-10 bg-gradient-to-tr from-[#cda151] to-[#151515] rounded-full flex-shrink-0 flex items-center justify-center text-white font-bold text-sm">
                                  {{ substr(Auth::user()->name, 0, 1) }}
                              </div>
                          </div>
                      </div>
                </header>

                <!-- Page Content -->
                <main class="flex-1 overflow-y-auto p-4 md:p-8">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>
