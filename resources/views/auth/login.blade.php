<x-guest-layout>
    <div class="relative min-h-screen w-full flex items-center justify-center px-6 overflow-hidden">
        <!-- Background with Blur -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/hero.webp') }}" class="w-full h-full object-cover opacity-20 scale-110 blur-2xl" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/80 via-[#0a0a0a]/90 to-[#0a0a0a]"></div>
        </div>

        <!-- Login Card -->
        <div class="relative z-10 w-full max-w-md animate-[fadeInUp_1s_ease-out_forwards]">
            <!-- Logo Area -->
            <div class="text-center mb-12">
                <a href="/">
                    <img src="{{ asset('assets/img/logo.webp') }}" class="h-12 mx-auto brightness-0 invert mb-6" alt="Ivoire Legal">
                </a>
                <h1 class="text-3xl font-light text-white tracking-tight" style="font-family: 'Playfair Display', serif;">
                    Welcome <span class="italic text-[#18c596]">Back</span>
                </h1>
                <p class="text-white/40 text-sm mt-2 font-light tracking-widest uppercase">Admin Portal</p>
            </div>

            <div class="bg-[#111111]/80 backdrop-blur-xl p-10 rounded-[40px] border border-white/5 shadow-2xl">
                <x-validation-errors class="mb-6" />

                @session('status')
                    <div class="mb-6 font-medium text-sm text-[#18c596]">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('login') }}" class="space-y-8">
                    @csrf

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-[#18c596]/70">{{ __('Email') }}</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus class="w-full bg-white/5 border-white/10 text-white px-6 py-4 rounded-2xl focus:ring-[#18c596] focus:border-[#18c596] transition-all font-light placeholder-white/10" placeholder="admin@ivoirelegal.com">
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-[#18c596]/70">{{ __('Password') }}</label>
                            @if (Route::has('password.request'))
                                <a class="text-[10px] uppercase tracking-widest text-white/40 hover:text-[#18c596] transition-colors" href="{{ route('password.request') }}">
                                    {{ __('Forgot?') }}
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password" required class="w-full bg-white/5 border-white/10 text-white px-6 py-4 rounded-2xl focus:ring-[#18c596] focus:border-[#18c596] transition-all font-light placeholder-white/10" placeholder="••••••••">
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="rounded border-white/10 bg-white/5 text-[#18c596] focus:ring-[#18c596] focus:ring-offset-[#0a0a0a]">
                        <label for="remember_me" class="ms-3 text-xs text-white/40 font-light tracking-wide uppercase">{{ __('Keep me signed in') }}</label>
                    </div>

                    <button type="submit" class="w-full bg-[#18c596] hover:bg-[#15b085] text-black font-bold py-5 rounded-2xl uppercase tracking-[0.2em] text-xs transition-all duration-500 shadow-lg shadow-[#18c596]/10">
                        {{ __('Sign In') }}
                    </button>
                </form>
            </div>

            <div class="text-center mt-12">
                <a href="/" class="text-xs text-white/20 hover:text-white transition-colors tracking-widest uppercase flex items-center justify-center gap-2 group">
                    <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l(7-7m7 7H21"></path></svg>
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
