<x-guest-layout>
    <div class="relative min-h-screen w-full flex items-center justify-center px-6 overflow-hidden bg-[#151515]">
        <!-- Background with Blur -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/hero.webp') }}" class="w-full h-full object-cover opacity-20 scale-110 blur-2xl" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-b from-[#151515]/80 via-[#151515]/90 to-[#151515]"></div>
        </div>

        <!-- Login Card -->
        <div class="relative z-10 w-full max-w-md animate-[fadeInUp_1s_ease-out_forwards]">
            <!-- Logo Area -->
            <div class="text-center mb-12">
                <a href="/">
                    <img src="{{ asset('assets/img/ivoire-legal-logo-inline-dark.png') }}" class="h-12 mx-auto object-contain mb-6" alt="Ivoire Advisory">
                </a>
                <h1 class="text-3xl font-light text-white tracking-tight" style="font-family: 'Playfair Display', serif;">
                    Welcome <span class="text-[#cda151] italic font-serif">Back</span>
                </h1>
                <p class="text-white/40 text-sm mt-2 font-light tracking-widest uppercase">Admin Portal</p>
            </div>

            <div class="bg-[#1a1a1a]/85 backdrop-blur-xl p-10 rounded-2xl border border-white/5 shadow-2xl">
                <x-validation-errors class="mb-6" />

                @session('status')
                    <div class="mb-6 font-medium text-sm text-[#cda151]">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('login') }}" class="space-y-8">
                    @csrf

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-[#cda151]/75">{{ __('Email') }}</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus class="w-full bg-white/5 border-white/10 text-white px-6 py-4 rounded-xl focus:ring-[#cda151] focus:border-[#cda151] transition-all font-light placeholder-white/10" placeholder="admin@ivoirelegal.com">
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-[#cda151]/75">{{ __('Password') }}</label>
                            @if (Route::has('password.request'))
                                <a class="text-[10px] uppercase tracking-widest text-white/40 hover:text-[#cda151] transition-colors" href="{{ route('password.request') }}">
                                    {{ __('Forgot?') }}
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password" required class="w-full bg-white/5 border-white/10 text-white px-6 py-4 rounded-xl focus:ring-[#cda151] focus:border-[#cda151] transition-all font-light placeholder-white/10" placeholder="••••••••">
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="rounded border-white/10 bg-white/5 text-[#cda151] focus:ring-[#cda151] focus:ring-offset-[#151515]">
                        <label for="remember_me" class="ms-3 text-xs text-white/40 font-light tracking-wide uppercase">{{ __('Keep me signed in') }}</label>
                    </div>

                    <button type="submit" class="w-full bg-[#cda151] hover:bg-[#b88f40] text-white font-bold py-5 rounded-[4px] uppercase tracking-[0.2em] text-xs transition-all duration-500 shadow-lg shadow-[#cda151]/10">
                        {{ __('Sign In') }}
                    </button>
                </form>
            </div>

            <div class="text-center mt-12">
                <a href="/" class="text-xs text-white/20 hover:text-white transition-colors tracking-widest uppercase flex items-center justify-center gap-2 group">
                    <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m7 7H21"></path></svg>
                    Back to website
                </a>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</x-guest-layout>
