{{-- ========================================
    PHP Setup & Configuration
    ======================================== --}}
@php
    $campusAddress = 'Jl. Letjen S. Parman No.1AA, Taman Cattleya, Slipi, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480';
    $campusLatitude = -6.181307536942844;
    $campusLongitude = 106.79608086446154;
    $campusCoordinateQuery = $campusLatitude . ',' . $campusLongitude;
    $campusMapSearchUrl = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($campusCoordinateQuery);
    $googleMapsApiKey = config('services.google.maps_api_key');
@endphp

{{-- ========================================
    Main Footer Container
    ======================================== --}}
<footer id="contact" class="relative overflow-hidden bg-[#4A1E22] text-white/80 border-t-[8px] border-[#D4AF37]" x-data="{ openForm: false, openMap: false }">
    
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(212,175,55,0.1),transparent_50%)] pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative z-10 w-full max-w-[1250px] mx-auto px-6 lg:px-8 pt-16 pb-8">
        
        {{-- ========================================
            Main Content Grid (4 Sections)
            ======================================== --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16 items-stretch">
            
            {{-- Section 1: UNIJI Branding & Quick Actions --}}
            <div class="lg:col-span-4 flex flex-col justify-center gap-8 lg:min-h-[260px]">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-[#D4AF37] rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-[#5B1E22] font-black text-xl tracking-widest leading-none">U</span>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-[20px] tracking-widest leading-none uppercase m-0">UNIJI</h3>
                        <p class="text-[#D4AF37] font-semibold text-[11px] tracking-[2px] uppercase mt-1 m-0">Software Engineering</p>
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-3">
                    <button @click="openForm = true; openMap = false" class="inline-flex items-center gap-2 h-11 px-6 rounded-full bg-[#D4AF37] text-[#5B1E22] font-bold text-[12px] uppercase tracking-[1.5px] border-none cursor-pointer hover:bg-white hover:-translate-y-1 shadow-[0_10px_20px_rgba(212,175,55,0.2)] transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                        Open Contact Form
                    </button>
                    <button @click="openMap = true; openForm = false; $nextTick(() => window.initCampusMapModal && window.initCampusMapModal())" class="inline-flex items-center gap-2 h-11 px-6 rounded-full bg-[#D4AF37] text-[#5B1E22] font-bold text-[12px] uppercase tracking-[1.5px] border-none cursor-pointer hover:bg-white hover:-translate-y-1 shadow-[0_10px_20px_rgba(212,175,55,0.2)] transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 01.553-.894L9 2m0 18l6-2m-6 2V2m6 16l5.447 2.724A1 1 0 0021 19.382V8.618a1 1 0 00-.553-.894L15 5m0 13V5m0 0L9 2"></path></svg>
                        Campus Map Location
                    </button>
                </div>
            </div>

            {{-- Section 2: Academics Links --}}
            <div class="lg:col-span-2 lg:col-start-6">
                <h4 class="text-[#D4AF37] font-bold text-[14px] uppercase tracking-[2px] m-0 mb-7">Academics</h4>
                <ul class="space-y-3 m-0 p-0 list-none text-[14px] font-medium">
                    <li><a href="#" class="text-white/70 hover:text-white hover:translate-x-1 inline-block transition-all no-underline">Study Program</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white hover:translate-x-1 inline-block transition-all no-underline">Curriculum</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white hover:translate-x-1 inline-block transition-all no-underline">Academic Info</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white hover:translate-x-1 inline-block transition-all no-underline">Faculty Members</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white hover:translate-x-1 inline-block transition-all no-underline">Download Center</a></li>
                </ul>
            </div>

            {{-- Section 3: Contact Information --}}
            <div class="lg:col-span-3">
                <h4 class="text-[#D4AF37] font-bold text-[14px] uppercase tracking-[2px] m-0 mb-7">Contact Us</h4>
                <ul class="space-y-4 m-0 p-0 list-none text-[14px]">
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-[#D4AF37] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="text-white/70 leading-[1.6]">{{ $campusAddress }}</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-[#D4AF37] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:software.engineering@uniji.ac.id" class="text-white/70 hover:text-white transition-colors no-underline">software.engineering@uniji.ac.id</a>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-[#D4AF37] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="tel:+628111234567" class="text-white/70 hover:text-white transition-colors no-underline">+62 811-1916-7363</a>
                    </li>
                </ul>
            </div>

            {{-- Section 4: Newsletter Subscription --}}
            <div class="lg:col-span-2">
                <h4 class="text-[#D4AF37] font-bold text-[14px] uppercase tracking-[2px] m-0 mb-7">Stay Updated</h4>
                <p class="text-white/70 text-[13px] leading-[1.6] m-0 mb-5">Subscribe to our newsletter for the latest tech news and campus events.</p>
                <form @submit.prevent class="relative">
                    <input type="email" placeholder="Your email..." class="w-full h-11 bg-white/5 border border-white/20 rounded-lg px-4 text-sm text-white placeholder-white/40 focus:outline-none focus:border-[#D4AF37] transition-colors">
                    <button type="submit" class="absolute right-2 top-1.5 bottom-1.5 bg-[#D4AF37] text-[#5B1E22] rounded-md px-3 font-bold text-[11px] uppercase hover:bg-white transition-colors cursor-pointer">Join</button>
                </form>
            </div>

        </div>

        {{-- ========================================
            Footer Bottom: Copyright & Social Media
            ======================================== --}}
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-6">
            {{-- Copyright Text --}}
            <p class="text-white/50 text-[13px] m-0 text-center md:text-left">
                &copy; 2026 UNIJI School of Software Engineering. All rights reserved.
            </p>
            
            {{-- Social Media Links --}}
            <div class="flex items-center gap-4">
                <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-[#D4AF37] hover:text-[#5B1E22] hover:-translate-y-1 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" /></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-[#D4AF37] hover:text-[#5B1E22] hover:-translate-y-1 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-[#D4AF37] hover:text-[#5B1E22] hover:-translate-y-1 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.88z" /></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-[#D4AF37] hover:text-[#5B1E22] hover:-translate-y-1 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg>
                </a>
            </div>
        </div>
    </div>

    {{-- ========================================
        Contact Form Modal
        ======================================== --}}
    <div x-show="openForm" x-cloak class="fixed inset-0 z-[120]" role="dialog" aria-modal="true">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="openForm = false"></div>

        <div class="relative z-10 min-h-full flex items-center justify-center px-4 py-8">
            <div class="w-full max-w-[500px] rounded-3xl bg-white p-8 shadow-2xl text-gray-900" @click.stop>
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h5 class="m-0 text-[24px] font-bold text-[#5B1E22]">Send a Message</h5>
                        <p class="text-sm text-gray-500 mt-1 m-0">We'd love to hear from you.</p>
                    </div>
                    <button @click="openForm = false" class="w-10 h-10 rounded-full border-none bg-gray-100 text-gray-600 flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <form @submit.prevent class="space-y-4">
                    <input type="text" placeholder="Full Name" class="w-full h-12 rounded-xl border border-gray-200 px-4 text-[14px] text-gray-800 placeholder:text-gray-400 outline-none focus:border-[#D4AF37] focus:ring-1 focus:ring-[#D4AF37] transition-all bg-gray-50 focus:bg-white">
                    <input type="email" placeholder="Email Address" class="w-full h-12 rounded-xl border border-gray-200 px-4 text-[14px] text-gray-800 placeholder:text-gray-400 outline-none focus:border-[#D4AF37] focus:ring-1 focus:ring-[#D4AF37] transition-all bg-gray-50 focus:bg-white">
                    <input type="text" placeholder="Subject" class="w-full h-12 rounded-xl border border-gray-200 px-4 text-[14px] text-gray-800 placeholder:text-gray-400 outline-none focus:border-[#D4AF37] focus:ring-1 focus:ring-[#D4AF37] transition-all bg-gray-50 focus:bg-white">
                    <textarea rows="4" placeholder="Your Message..." class="w-full rounded-xl border border-gray-200 px-4 py-3 text-[14px] text-gray-800 placeholder:text-gray-400 outline-none focus:border-[#D4AF37] focus:ring-1 focus:ring-[#D4AF37] transition-all bg-gray-50 focus:bg-white resize-none"></textarea>

                    <div class="pt-4 flex items-center justify-end gap-3">
                        <button type="button" @click="openForm = false" class="h-11 px-6 rounded-full border border-gray-200 bg-white text-gray-600 font-semibold cursor-pointer hover:bg-gray-50 transition-colors">Cancel</button>
                        <button type="submit" class="h-11 px-8 rounded-full border-none bg-[#5B1E22] text-white font-bold tracking-wide cursor-pointer hover:bg-[#D4AF37] hover:text-[#5B1E22] transition-colors shadow-lg">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ========================================
        Campus Map Modal
        ======================================== --}}
    <div x-show="openMap" x-cloak class="fixed inset-0 z-[120]" role="dialog" aria-modal="true">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="openMap = false"></div>

        <div class="relative z-10 min-h-full flex items-center justify-center px-4 py-8">
            <div class="w-full max-w-[960px] rounded-3xl bg-white shadow-2xl text-gray-900 overflow-hidden" @click.stop>
                <div class="px-6 py-5 border-b border-gray-200 flex items-start justify-between gap-4">
                    <div>
                        <h5 class="m-0 text-[22px] font-bold text-[#5B1E22]">Campus Map Location</h5>
                        <p class="text-sm text-gray-600 mt-2 m-0">{{ $campusAddress }}</p>
                    </div>
                    <button @click="openMap = false" class="w-10 h-10 rounded-full border-none bg-gray-100 text-gray-600 flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <div class="relative h-[380px] md:h-[500px] bg-gray-100">
                    <div id="campus-map-canvas" class="w-full h-full" aria-label="UNIJI Campus Map"></div>
                    <div id="campus-map-status" class="hidden absolute inset-0 bg-gray-900/70 text-white text-sm items-center justify-center text-center px-6">
                        Loading campus map...
                    </div>
                </div>

                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex flex-wrap gap-3 justify-end">
                    <a href="{{ $campusMapSearchUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center h-10 px-5 rounded-full border-none bg-[#D4AF37] text-[#5B1E22] font-bold text-[11px] uppercase tracking-[1px] hover:bg-white hover:shadow transition-all no-underline">Open in Google Maps</a>
                    <button type="button" @click="openMap = false" class="h-10 px-5 rounded-full border border-gray-200 bg-white text-gray-600 font-semibold cursor-pointer hover:bg-gray-100 transition-colors">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- ========================================
        Google Maps Initialization Script
        ======================================== --}}
    <script>
        (() => {
            if (window.__unijiCampusMapBootstrapped) return;
            window.__unijiCampusMapBootstrapped = true;

            const campusAddress = @json($campusAddress);
            const campusSearchUrl = @json($campusMapSearchUrl);
            const mapsApiKey = @json($googleMapsApiKey);
            const campusCoordinates = @json(['lat' => $campusLatitude, 'lng' => $campusLongitude]);
            const defaultCenter = campusCoordinates;

            let mapsLoaderPromise = null;
            let map = null;
            let marker = null;
            let infoWindow = null;

            const statusEl = () => document.getElementById('campus-map-status');
            const mapEl = () => document.getElementById('campus-map-canvas');

            const showStatus = (message, isError = false) => {
                const el = statusEl();
                if (!el) return;
                el.textContent = message;
                el.classList.remove('hidden');
                el.classList.add('flex');
                el.classList.toggle('bg-red-900/80', isError);
                el.classList.toggle('bg-gray-900/70', !isError);
            };

            const hideStatus = () => {
                const el = statusEl();
                if (!el) return;
                el.classList.add('hidden');
                el.classList.remove('flex');
            };

            const loadGoogleMaps = () => {
                if (window.google && window.google.maps) return Promise.resolve();

                if (!mapsApiKey) {
                    return Promise.reject(new Error('GOOGLE_MAPS_API_KEY is missing. Please add it to your .env file.'));
                }

                if (mapsLoaderPromise) return mapsLoaderPromise;

                mapsLoaderPromise = new Promise((resolve, reject) => {
                    const script = document.createElement('script');
                    script.src = `https://maps.googleapis.com/maps/api/js?key=${encodeURIComponent(mapsApiKey)}`;
                    script.async = true;
                    script.defer = true;
                    script.onload = () => resolve();
                    script.onerror = () => reject(new Error('Unable to load Google Maps JavaScript API.'));
                    document.head.appendChild(script);
                });

                return mapsLoaderPromise;
            };

            const infoWindowHtml = (addressLabel) => `
                <div style="font-family:Poppins,sans-serif; max-width:260px; padding:2px 2px 0;">
                    <div style="font-weight:700; font-size:16px; color:#111827; margin-bottom:6px;">UNIJI</div>
                    <div style="font-weight:600; font-size:14px; color:#5B1E22; margin-bottom:6px;">University of Jakarta International</div>
                    <div style="font-size:13px; line-height:1.5; color:#4B5563; margin-bottom:8px;">${addressLabel}</div>
                    <a href="${campusSearchUrl}" target="_blank" rel="noopener noreferrer" style="display:inline-block; font-size:12px; font-weight:700; color:#5B1E22; text-decoration:none;">Open in Google Maps</a>
                </div>
            `;

            const ensureMap = () => {
                const element = mapEl();
                if (!element) return false;

                if (!map) {
                    map = new google.maps.Map(element, {
                        center: defaultCenter,
                        zoom: 17,
                        mapTypeControl: false,
                        streetViewControl: false,
                        fullscreenControl: true,
                    });

                    marker = new google.maps.Marker({
                        map,
                        position: defaultCenter,
                        title: 'UNIJI - University of Jakarta International',
                    });

                    infoWindow = new google.maps.InfoWindow({
                        content: infoWindowHtml(campusAddress),
                        maxWidth: 300,
                    });

                    marker.addListener('click', () => {
                        infoWindow.open({ map, anchor: marker, shouldFocus: false });
                    });
                }

                return true;
            };

            const placeCampusMarker = () => {
                if (!ensureMap()) return;

                const location = new google.maps.LatLng(campusCoordinates.lat, campusCoordinates.lng);
                marker.setPosition(location);
                map.setCenter(location);
                map.setZoom(18);
                infoWindow.setContent(infoWindowHtml(campusAddress));
                infoWindow.open({ map, anchor: marker, shouldFocus: false });

                // Shift camera so the info card naturally appears in the upper-left area.
                google.maps.event.addListenerOnce(map, 'idle', () => map.panBy(140, 120));
                hideStatus();
            };

            window.initCampusMapModal = async () => {
                if (!mapEl()) return;
                showStatus('Loading campus map...');

                try {
                    await loadGoogleMaps();
                    placeCampusMarker();
                } catch (error) {
                    const message = error instanceof Error ? error.message : 'Failed to load map.';
                    showStatus(`${message} Use "Open in Google Maps" for direct navigation.`, true);
                }
            };
        })();
    </script>
</footer>