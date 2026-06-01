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
                    <li>
                        <a href="mailto:info@ivoirelegal.com" class="flex items-center gap-3 text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light group">
                            <svg class="w-4 h-4 fill-current text-white/40 group-hover:text-[#cda151] transition-colors duration-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            <span>info@ivoirelegal.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://calendly.com/ivoirelegal" target="_blank" class="flex items-center gap-3 text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light group">
                            <svg class="w-4 h-4 fill-current text-white/40 group-hover:text-[#cda151] transition-colors duration-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>
                            </svg>
                            <span>Book a Consultation</span>
                        </a>
                    </li>
                    @php
                        $footerSocials = \App\Models\SocialAccount::where('is_active', true)->get();
                    @endphp
                    @foreach($footerSocials as $social)
                        <li>
                            <a href="{{ $social->link }}" target="_blank" class="flex items-center gap-3 text-white/40 hover:text-[#cda151] transition-colors duration-300 text-sm font-light group">
                                @if(strtolower($social->platform) === 'instagram')
                                    <svg class="w-4 h-4 fill-current text-white/40 group-hover:text-[#cda151] transition-colors duration-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                    </svg>
                                @elseif(strtolower($social->platform) === 'facebook')
                                    <svg class="w-4 h-4 fill-current text-white/40 group-hover:text-[#cda151] transition-colors duration-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                @elseif(strtolower($social->platform) === 'linkedin')
                                    <svg class="w-4 h-4 fill-current text-white/40 group-hover:text-[#cda151] transition-colors duration-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                @elseif($social->platform)
                                    <img src="{{ asset('assets/img/logo/' . $social->platform . '.png') }}" alt="" class="w-4 h-4 object-contain opacity-40 group-hover:opacity-100 transition-opacity duration-300 brightness-0 invert">
                                @endif
                                <span>{{ $social->name }}</span>
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


