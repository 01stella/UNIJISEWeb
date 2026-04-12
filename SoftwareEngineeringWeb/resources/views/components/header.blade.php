@props(['activePage' => 'home'])

<header class="bg-[#4A1E22] w-full z-50 sticky top-0 shadow-xl h-[80px]"
    x-data="{ 
        activeTab: '{{ $activePage }}',
        mobileMenuOpen: false
    }">
    <div class="container mx-auto px-6 h-full flex flex-row items-center justify-center">
        <div class="w-full max-w-[1250px] flex flex-row items-center justify-between">
            <a href="/" class="flex-shrink-0 flex items-center h-full no-underline">
                <span class="inline-flex items-center justify-center bg-white/95 rounded-xl px-3 py-2 shadow-[0_10px_24px_rgba(0,0,0,0.28)] ring-1 ring-[#D4AF37]/60 transition-transform duration-300 hover:scale-[1.03]">
                    <img src="{{ asset('style/images/unijilogo.png') }}" alt="UNIJI" class="h-[38px] lg:h-[44px] w-auto block">
                </span>
            </a>

            <div class="hidden lg:flex flex-row items-center h-full m-0 p-0 ml-auto mr-6">
                
                     <a href="/home" 
                         :class="activeTab === 'home' ? 'bg-[#210a0d]' : 'hover:bg-[#210a0d]/90'"
                   class="h-full flex flex-row items-center px-4 text-white font-bold text-[12px] uppercase tracking-wider transition-colors no-underline">
                   Home
                </a>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#210a0d]/90 transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        About <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#4A1E22] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-4 gap-8">
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">General</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="/home/about?tab=profile" class="hover:text-white transition-colors no-underline">Study Program Profile</a></li>
                                    <li><a href="/home/about?tab=vision" class="hover:text-white transition-colors no-underline">Vision and Mission</a></li>
                                    <li><a href="/home/about?tab=vision" class="hover:text-white transition-colors no-underline">Program Objectives</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">People</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="/home/about?tab=lecturer" class="hover:text-white transition-colors no-underline">Head of Program Profile</a></li>
                                    <li><a href="/home/about?tab=lecturer" class="hover:text-white transition-colors no-underline">Lecturer Profiles</a></li>
                                    <li><a href="/home/about?tab=structural" class="hover:text-white transition-colors no-underline">Organizational Structure</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">Network</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="/home/about?tab=facilities" class="hover:text-white transition-colors no-underline">Laboratory Facilities</a></li>
                                    <li><a href="/home/about?tab=academic" class="hover:text-white transition-colors no-underline">Industry & Academic Collaborations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#210a0d]/90 transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Curriculum <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#4A1E22] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-4 gap-8">
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">Academic Structure</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="/home/curriculum?tab=structure" class="hover:text-white no-underline">Curriculum Structure</a></li>
                                    <li><a href="/home/curriculum?tab=courses" class="hover:text-white no-underline">List of Courses</a></li>
                                    <li><a href="/home/curriculum?tab=descriptions" class="hover:text-white no-underline">Course Descriptions</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">Planning</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="/home/curriculum?tab=credits" class="hover:text-white no-underline">Course Credit System</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#210a0d]/90 transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Academic <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#4A1E22] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10">
                            <ul class="grid grid-cols-3 gap-6 text-white/70 text-[13px] list-none p-0 m-0">
                                <li><a href="/home/academic?tab=guidelines" class="hover:text-white no-underline">Guidelines & Regulations</a></li>
                                <li><a href="/home/academic?tab=learning" class="hover:text-white no-underline">Learning & Calendar</a></li>
                                <li><a href="/home/academic?tab=downloads" class="hover:text-white no-underline">Download Center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#210a0d]/90 transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Research <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#4A1E22] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10">
                            <ul class="grid grid-cols-2 gap-6 text-white/70 text-[13px] list-none p-0 m-0">
                                <li><a href="/home/research?tab=focus" class="hover:text-white no-underline">Focus Areas & Groups</a></li>
                                <li><a href="/home/research?tab=conferences" class="hover:text-white no-underline">Conferences & Seminars</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#210a0d]/90 transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        News <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#4A1E22] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10">
                            <ul class="grid grid-cols-2 gap-6 text-white/70 text-[13px] list-none p-0 m-0">
                                <li><a href="/home/news?tab=news" class="hover:text-white no-underline">Latest News</a></li>
                                <li><a href="/home/news?tab=events" class="hover:text-white no-underline">Campus Events & Exhibitions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a href="/home#students"
                   class="h-full flex flex-row items-center px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#210a0d]/90 transition-colors no-underline">
                   Students
                </a>

                <a href="/home#alumni"
                   class="h-full flex flex-row items-center px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#210a0d]/90 transition-colors no-underline">
                   Alumni
                </a>

            </div>

            
        </div>
    </div>
</header>
