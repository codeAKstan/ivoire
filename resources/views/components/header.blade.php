<header class="fixed top-0 left-0 w-full z-50 transition-all duration-500 border-b border-transparent" id="main-header">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-6 flex justify-between items-center transition-all duration-500" id="header-container">
        <!-- Logo Section -->
        <a href="/" class="flex items-center space-x-4 group">
            <div class="relative">
                <img src="{{ asset('assets/img/logo.webp') }}" alt="Ivoire Legal Logo" class="h-10 w-auto object-contain transition-all duration-500 group-hover:scale-110 brightness-0 invert">
                <div class="absolute -inset-2 bg-white/5 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
        </a>

        <!-- Navigation / Menu Section -->
        <div class="flex items-center space-x-10 relative group">
            <button class="px-6 py-2.5 border border-white/20 text-white text-[12px] font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-black transition-all duration-700 flex items-center space-x-4 group-hover:bg-white group-hover:text-black overflow-hidden relative z-50">
                <span class="relative z-10">Menu</span>
                <span class="text-xl leading-none relative z-10 transition-transform duration-500 group-hover:rotate-45">+</span>
                <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdown-menu" class="absolute top-full right-0 mt-2 w-72 bg-transparent backdrop-blur-3xl border border-white/10 opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-500 overflow-hidden shadow-2xl">
                <div class="flex flex-col py-2">
                    <a href="/about" class="px-8 py-4 text-white/70 hover:text-white hover:bg-white/5 text-[11px] font-bold tracking-[0.3em] uppercase border-b border-white/5 transition-all duration-300">
                        About Us
                    </a>
                    <a href="/services" class="px-8 py-4 text-white/70 hover:text-white hover:bg-white/5 text-[11px] font-bold tracking-[0.3em] uppercase border-b border-white/5 transition-all duration-300">
                        Practice Areas
                    </a>
                    <a href="/resources" class="px-8 py-4 text-white/70 hover:text-white hover:bg-white/5 text-[11px] font-bold tracking-[0.3em] uppercase border-b border-white/5 transition-all duration-300">
                        Resources
                    </a>
                    <a href="/contact" class="px-8 py-4 text-white/70 hover:text-white hover:bg-white/5 text-[11px] font-bold tracking-[0.3em] uppercase border-b border-white/5 transition-all duration-300">
                        Contact Us
                    </a>
                    <a href="https://calendly.com/ivoirelegal" target="_blank" class="px-8 py-5 text-white bg-white/10 hover:bg-white hover:text-black text-[11px] font-black tracking-[0.3em] uppercase transition-all duration-500 flex items-center justify-between group/link">
                        <span>Schedule Call</span>
                        <svg class="w-4 h-4 transition-transform duration-500 group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    window.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        const container = document.getElementById('header-container');
        const dropdown = document.getElementById('dropdown-menu');
        
        if (window.scrollY > 80) {
            header.classList.add('bg-[#121212]/90', 'backdrop-blur-xl', 'border-white/5');
            header.classList.remove('border-transparent');
            container.classList.add('py-4');
            container.classList.remove('py-6');
            
            // Scrolled Dropdown Style
            dropdown.classList.add('bg-[#121212]');
            dropdown.classList.remove('bg-transparent');
        } else {
            header.classList.remove('bg-[#121212]/90', 'backdrop-blur-xl', 'border-white/5');
            header.classList.add('border-transparent');
            container.classList.add('py-6');
            container.classList.remove('py-4');
            
            // Default Dropdown Style
            dropdown.classList.remove('bg-[#121212]');
            dropdown.classList.add('bg-transparent');
        }
    });
</script>

