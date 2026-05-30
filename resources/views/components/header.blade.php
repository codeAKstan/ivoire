<header class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm" id="main-header">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-4 flex justify-between items-center transition-all duration-300" id="header-container">
        <!-- Logo Section -->
        <a href="/" class="flex items-center space-x-3 group">
            <div class="relative flex items-center space-x-3">
                <img src="{{ asset('assets/img/ivoire-legal-logo.png') }}" alt="Ivoire Advisory Logo" class="h-14 w-auto object-contain transition-transform duration-500 group-hover:scale-105">
            </div>
        </a>

        <!-- Center Navigation (Hidden on Mobile) -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="/services" class="text-sm font-medium text-gray-600 hover:text-[#cda151] transition-colors duration-300">Services</a>
            <a href="/industries" class="text-sm font-medium text-gray-600 hover:text-[#cda151] transition-colors duration-300">Industries</a>
            <a href="/resources" class="text-sm font-medium text-gray-600 hover:text-[#cda151] transition-colors duration-300">Resources</a>
            <a href="/about" class="text-sm font-medium text-gray-600 hover:text-[#cda151] transition-colors duration-300">About</a>
            <a href="/careers" class="text-sm font-medium text-gray-600 hover:text-[#cda151] transition-colors duration-300">Careers</a>
        </nav>

        <!-- Right Action (Hidden on Mobile) -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="/contact" class="text-sm font-medium text-gray-600 hover:text-[#cda151] transition-colors duration-300">Contact</a>
            <a href="https://calendly.com/ivoirelegal" target="_blank" class="px-5 py-2.5 bg-[#151515] hover:bg-[#cda151] text-white text-xs font-bold tracking-[0.1em] uppercase rounded-[4px] shadow-sm hover:shadow transition-all duration-300">
                Book a call
            </a>
        </div>

        <!-- Mobile Menu Trigger -->
        <div class="md:hidden flex items-center" x-data="{ mobileMenuOpen: false }">
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-[#151515] hover:text-[#cda151] transition-colors focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Mobile Dropdown Menu -->
            <div x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false" class="absolute top-full left-0 w-full bg-white border-b border-gray-100 shadow-lg py-6 px-6 flex flex-col space-y-4 z-50">
                <a href="/services" class="text-base font-medium text-gray-700 hover:text-[#cda151] transition-colors">Services</a>
                <a href="/industries" class="text-base font-medium text-gray-700 hover:text-[#cda151] transition-colors">Industries</a>
                <a href="/resources" class="text-base font-medium text-gray-700 hover:text-[#cda151] transition-colors">Resources</a>
                <a href="/about" class="text-base font-medium text-gray-700 hover:text-[#cda151] transition-colors">About</a>
                <a href="/careers" class="text-base font-medium text-gray-700 hover:text-[#cda151] transition-colors">Careers</a>
                <a href="/contact" class="text-base font-medium text-gray-700 hover:text-[#cda151] transition-colors pt-2 border-t border-gray-100">Contact</a>
                <a href="https://calendly.com/ivoirelegal" target="_blank" class="w-full text-center py-3 bg-[#151515] hover:bg-[#cda151] text-white text-sm font-bold tracking-wider uppercase rounded-[4px] transition-colors duration-300">
                    Book a call
                </a>
            </div>
        </div>
    </div>
</header>


