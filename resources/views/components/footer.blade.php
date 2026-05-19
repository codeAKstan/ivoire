<footer class="bg-white py-20 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-24 mb-16">
            <!-- Logo Section -->
            <div class="col-span-1 lg:col-span-1">
                <a href="/" class="flex items-center space-x-3 group mb-8">
                    <img src="{{ asset('assets/img/logo.webp') }}" alt="Ivoire Legal Logo" class="h-12 w-auto object-contain transition-all duration-500 group-hover:scale-110">
                </a>
                
                @php
                    $footerSocials = \App\Models\SocialAccount::where('is_active', true)->get();
                @endphp
                
                @if($footerSocials->isNotEmpty())
                <div class="flex flex-wrap gap-6 mt-8 items-center">
                    @foreach($footerSocials as $social)
                    <a href="{{ $social->link }}" target="_blank" class="group transition-all duration-300" title="{{ $social->name }}">
                        @if($social->platform)
                            <img src="{{ asset('assets/img/logo/' . $social->platform . '.png') }}" alt="{{ $social->name }}" class="h-5 w-auto object-contain opacity-40 group-hover:opacity-100 group-hover:scale-110 transition-all">
                        @else
                            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-300 hover:text-[#00c08b] transition-all">{{ $social->name }}</span>
                        @endif
                    </a>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- How We Can Help -->
            <div>
                <h4 class="text-[#1a365d] text-lg font-bold mb-8">How We Can Help</h4>
                <ul class="space-y-4">
                    <li><a href="/services" class="text-gray-500 hover:text-[#1a365d] transition-colors duration-300 text-sm">Legal & Compliance</a></li>
                    <li><a href="/services" class="text-gray-500 hover:text-[#1a365d] transition-colors duration-300 text-sm">Structuring & Governance</a></li>
                    <li><a href="/services" class="text-gray-500 hover:text-[#1a365d] transition-colors duration-300 text-sm">Regulatory Navigation</a></li>
                    <li><a href="/services" class="text-gray-500 hover:text-[#1a365d] transition-colors duration-300 text-sm">Contracts & Employment</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 class="text-[#1a365d] text-lg font-bold mb-8">Company</h4>
                <ul class="space-y-4">
                    <li><a href="/about" class="text-gray-500 hover:text-[#1a365d] transition-colors duration-300 text-sm">About Us</a></li>
                    <li><a href="/contact" class="text-gray-500 hover:text-[#1a365d] transition-colors duration-300 text-sm">Contact</a></li>
                </ul>
            </div>

            <!-- Get In Touch -->
            <div>
                <h4 class="text-[#1a365d] text-lg font-bold mb-8">Get In Touch</h4>
                <ul class="space-y-6">
                    <li class="flex items-start space-x-4">
                        <svg class="w-5 h-5 text-[#00c08b] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-gray-500 text-sm">+234 806 066 3685</span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <svg class="w-5 h-5 text-[#00c08b] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-gray-500 text-sm">info@ivoirelegal.com</span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <svg class="w-5 h-5 text-[#00c08b] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-gray-500 text-sm leading-relaxed">
                            Plot 1A, Kunle Ogunba Street,<br>
                            Lekki Phase 1, Lagos State
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Line -->
        <div class="pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-400 font-medium tracking-widest uppercase">
            <div>
                &copy; {{ date('Y') }} Ivoire Legal. All rights reserved.
            </div>
            <div>
                designed by <a href="https://wa.me/2348052923367" target="_blank" class="text-[#00c08b] hover:underline transition-all">codeAKstan</a>
            </div>
        </div>
    </div>
</footer>
