@props(['activePage' => 'home'])

<header class="bg-[#5B1E22] w-full z-50 sticky top-0 shadow-xl h-[80px]"
    x-data="{ 
        activeTab: '{{ $activePage }}',
        mobileMenuOpen: false
    }">
    <div class="container mx-auto px-6 h-full flex flex-row items-center justify-center">
        <div class="w-full max-w-[1250px] flex flex-row items-center justify-between">
            <a href="/" class="flex-shrink-0 flex items-center h-full no-underline">
                <span class="text-white font-bold text-xl tracking-widest uppercase">UNIJI Portal</span>
            </a>

            <div class="hidden lg:flex flex-row items-center h-full m-0 p-0 ml-auto mr-6">
                
                <a href="/home" 
                   :class="activeTab === 'home' ? 'bg-[#3A1316]' : 'hover:bg-[#3A1316]'"
                   class="h-full flex flex-row items-center px-4 text-white font-bold text-[12px] uppercase tracking-wider transition-colors no-underline">
                   Home
                </a>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#3A1316] transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        About <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#3A1316] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-4 gap-8">
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">General</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Study Program Profile</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Vision and Mission</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Program Objectives</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">People</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Head of Program Profile</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Lecturer Profiles</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Organizational Structure</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">Network</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Laboratory Facilities</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors no-underline">Industry & Academic Collaborations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#3A1316] transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Curriculum <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#3A1316] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-4 gap-8">
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">Academic Structure</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="#" class="hover:text-white no-underline">Curriculum Structure</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">List of Courses</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">Course Descriptions</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[#D4AF37] font-bold text-[11px] uppercase tracking-[3px] mb-4">Planning</h4>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="#" class="hover:text-white no-underline">Course Credit System</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">Semester Study Plan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#3A1316] transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Academic <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#3A1316] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-4 gap-8">
                            <div>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="#" class="hover:text-white no-underline">Academic Calendar</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">Academic Guidelines</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">Learning System</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                    <li><a href="#" class="hover:text-white no-underline">Internship Program</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">Thesis / Final Project</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">MBKM Program</a></li>
                                    <li><a href="#" class="hover:text-white no-underline">Academic Regulations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#3A1316] transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Research <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#3A1316] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-3 gap-8">
                            <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">Research Areas</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Research Groups</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Lecturer Publications</a></li>
                            </ul>
                            <ul class="space-y-3 text-white/70 text-[13px] list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">Conferences & Seminars</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Research Grants</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#3A1316] transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        News <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#3A1316] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-3 gap-8 text-white/70 text-[13px]">
                            <ul class="space-y-3 list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">Program News</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Seminars & Workshops</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Student Activities</a></li>
                            </ul>
                            <ul class="space-y-3 list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">IT Exhibitions</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Academic Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#3A1316] transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Students <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#3A1316] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-3 gap-8 text-white/70 text-[13px]">
                            <ul class="space-y-3 list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">Student Organizations</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Student Achievements</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Student Activities</a></li>
                            </ul>
                            <ul class="space-y-3 list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">Internship Programs</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Student Projects</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group h-full">
                    <button class="h-full px-4 text-white font-bold text-[12px] uppercase tracking-wider hover:bg-[#3A1316] transition-colors flex items-center gap-1 border-none bg-transparent cursor-pointer">
                        Alumni <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-[80px] left-0 w-full bg-[#3A1316] shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="max-w-[1140px] mx-auto p-10 grid grid-cols-3 gap-8 text-white/70 text-[13px]">
                            <ul class="space-y-3 list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">Alumni Database</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Alumni Testimonials</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Alumni Career Paths</a></li>
                            </ul>
                            <ul class="space-y-3 list-none p-0 m-0">
                                <li><a href="#" class="hover:text-white no-underline">Tracer Study Results</a></li>
                                <li><a href="#" class="hover:text-white no-underline">Alumni Network</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-row items-center flex-shrink-0">
                <button class="w-[42px] h-[42px] rounded-full bg-[#D4AF37] border-none flex items-center justify-center text-[#5B1E22] transition-transform hover:scale-105 shadow-md cursor-pointer m-0 p-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-white ml-4 bg-transparent border-none cursor-pointer">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </div>
</header>
