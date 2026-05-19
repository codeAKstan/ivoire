<section class="relative h-screen w-full overflow-hidden flex items-center justify-center">
    <!-- Video Background -->
    <video 
        autoplay 
        muted 
        loop 
        playsinline 
        class="absolute top-0 left-0 w-full h-full object-cover z-0"
    >
        <source src="{{ asset('assets/video/herovideo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay -->
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-black/60 via-black/40 to-[#121212] z-10"></div>

    <!-- Content -->
    <div class="relative z-20 text-left px-6 lg:px-12 max-w-7xl mx-auto w-full">
        <div class="max-w-4xl">
            <div class="overflow-hidden mb-6">
                <span class="inline-block text-white/60 text-[10px] lg:text-[12px] font-bold tracking-[0.5em] uppercase animate-slide-up">
                    Excellence in Legal Practice
                </span>
            </div>
            
            <h1 class="text-white text-5xl lg:text-8xl font-black tracking-tighter leading-[0.9] mb-8 animate-fade-in-up" style="animation-delay: 0.2s;">
                DEFINING THE <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-white/40">FUTURE OF LAW.</span>
            </h1>

            <p class="text-white/60 text-lg lg:text-xl max-w-2xl font-medium leading-relaxed mb-12 animate-fade-in-up" style="animation-delay: 0.4s;">
                Africa’s complex regulatory landscape shouldn't slow you down. We operate your compliance function and bridge the gap between innovation and regulation. We provide timely, trustworthy & effective counsel to address your needs as they evolve within your business and personal life.
            </p>

            <div class="flex flex-col sm:flex-row items-start gap-6 mt-12 animate-fade-in-up" style="animation-delay: 0.6s;">
            <a href="#about" class="group px-10 py-4 bg-white text-black font-bold text-[12px] tracking-widest uppercase hover:bg-transparent hover:text-white border border-white transition-all duration-500 flex items-center space-x-4">
                <span>Our Philosophy</span>
                <svg class="w-4 h-4 transition-transform duration-500 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            
            <a href="https://calendly.com/ivoirelegal" target="_blank" class="px-10 py-4 border border-white/20 text-white font-bold text-[12px] tracking-widest uppercase hover:bg-white/5 transition-all duration-500">
                Book a Consultation
            </a>
        </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-20 opacity-40 hover:opacity-100 transition-opacity duration-500 cursor-pointer animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<style>
    @keyframes slideUp {
        from { transform: translateY(100%); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes fadeInUp {
        from { transform: translateY(100px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    .animate-slide-up {
        animation: slideUp 1s cubic-bezier(0.23, 1, 0.32, 1) both;
    }
    .animate-fade-in-up {
        opacity: 0;
        animation: fadeInUp 1.5s cubic-bezier(0.23, 1, 0.32, 1) forwards;
        will-change: transform, opacity;
    }
    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }
</style>
