<footer class="bg-[#151515] py-20 border-t border-white/5 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-24 mb-16">
            <!-- Logo & Description Section -->
            <div class="col-span-1">
                <a href="/" class="flex items-center space-x-3 group mb-6">
                    <img src="{{ asset('assets/img/ivoire-legal-logo-inline-dark.png') }}" alt="Ivoire Advisory Logo" class="h-9 w-auto object-contain transition-transform duration-500 group-hover:scale-105">
                </a>
                <p class="text-white/40 text-sm leading-relaxed max-w-xs font-light">
                    The legal and compliance partner for Africa's technology companies.
                </p>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-[#cda151] text-[10px] font-bold tracking-[0.25em] uppercase mb-8">Services</h4>
                <ul class="space-y-4">
                    <li><a href="/services" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Legal Assessment</a></li>
                    <li><a href="/services" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Embedded Counsel</a></li>
                    <li><a href="/services" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Compliance as a Service</a></li>
                    <li><a href="/services" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Licensing &amp; Regulatory</a></li>
                    <li><a href="/services" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Training &amp; Recruitment</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 class="text-[#cda151] text-[10px] font-bold tracking-[0.25em] uppercase mb-8">Company</h4>
                <ul class="space-y-4">
                    <li><a href="/about" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">About Us</a></li>
                    <li><a href="/industries" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Industries</a></li>
                    <li><a href="/resources" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Resources</a></li>
                    <li><a href="/careers" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Careers</a></li>
                </ul>
            </div>

            <!-- Connect -->
            <div>
                <h4 class="text-[#cda151] text-[10px] font-bold tracking-[0.25em] uppercase mb-8">Connect</h4>
                <ul class="space-y-4">
                    <li><a href="mailto:info@ivoirelegal.com" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">info@ivoirelegal.com</a></li>
                    <li><a href="https://calendly.com/ivoirelegal" target="_blank" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">Book a Consultation</a></li>
                    @php
                        $footerSocials = \App\Models\SocialAccount::where('is_active', true)->get();
                    @endphp
                    @foreach($footerSocials as $social)
                        <li>
                            <a href="{{ $social->link }}" target="_blank" class="text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light">
                                {{ $social->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Bottom Line -->
        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] text-white/30 font-medium tracking-wider">
            <div>
                &copy; {{ date('Y') }} Ivoire Advisory. All rights reserved. This website does not constitute legal advice.
            </div>
            <div>
                Lagos, Nigeria &bull; Serving clients across Africa
            </div>
        </div>
    </div>
</footer>


