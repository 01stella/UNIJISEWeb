<x-layout>
  <x-header activePage="news" />

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #fdfbf7; }
    [x-cloak] { display: none !important; }
    
    /* Premium Tech Pattern Background */
    .bg-tech-pattern {
      background-image: radial-gradient(rgba(91, 0, 0, 0.08) 2px, transparent 2px);
      background-size: 40px 40px;
    }
  </style>

  <div class="bg-[#fdfbf7] min-h-screen">
    
    <x-hero-banner 
        image="style/images/art/UNIJIBanner.jpg" 
        subtitle="Stay Updated"
        title="News &<br>Events"
        breadcrumbParent="Community"
        breadcrumbActive="News"
    />

    @php
        $newsTabs = [
            ['id' => 'btn-news', 'label' => 'Latest News', 'active' => true],
            ['id' => 'btn-events', 'label' => 'Past Events & Exhibitions', 'active' => false],
        ];
    @endphp
    <x-sub-navbar :tabs="$newsTabs" />


    <main class="relative min-h-[800px] pb-24 overflow-hidden">
      <div class="absolute inset-0 bg-tech-pattern opacity-40 z-0 pointer-events-none"></div>
      <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-[#f3c83d]/10 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>

      <div id="panel-news" class="tab-content-panel block pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          
          <div class="mb-12 text-center md:text-left">
            <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Latest Announcements</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
            <p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Stay informed on the latest achievements, program updates, and tech community highlights from the Software Engineering department.</p>
          </div>

          <div class="mb-12 bg-white rounded-[32px] shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-gray-200 overflow-hidden flex flex-col lg:flex-row group hover:shadow-2xl transition-all duration-500">
            <div class="w-full lg:w-1/2 relative overflow-hidden min-h-[300px]">
               <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1000&q=80" alt="Team meeting" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>
            
            <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
               <div class="flex items-center gap-3 mb-4">
                 <span class="px-3 py-1 bg-[#5b0000] text-white font-bold text-[11px] uppercase tracking-widest rounded-md">Program Update</span>
                 <span class="text-gray-400 text-[13px] font-medium">October 15, 2026</span>
               </div>
               
               <h3 class="text-[24px] md:text-[28px] text-[#5b0000] font-bold mb-4 leading-tight group-hover:text-[#D4AF37] transition-colors cursor-pointer">UNIJI Software Engineering Program Achieves National Accreditation Excellence</h3>
               <p class="text-gray-600 text-[15px] leading-relaxed mb-8">Following a rigorous evaluation of our curriculum, faculty research output, and alumni success rates, the National Accreditation Board has awarded our program the highest possible rating, opening new doors for global partnerships.</p>
               
               <a href="#" class="inline-flex items-center gap-2 text-[#f3c83d] font-bold text-[13px] uppercase tracking-widest hover:text-[#5b0000] transition-colors w-max no-underline">
                  Read Full Article <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
               </a>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm overflow-hidden hover:shadow-[0_15px_40px_rgba(91,0,0,0.08)] hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-full aspect-[16/10] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-[#5b0000] font-bold text-[11px] uppercase tracking-wider">Achievement</div>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 text-[12px] font-medium mb-3">September 28, 2026</p>
                    <h4 class="text-[#5b0000] font-bold text-[18px] leading-tight mb-3 group-hover:text-[#D4AF37] transition-colors cursor-pointer">Student Team Wins 1st Place at National Cybersecurity Hackathon</h4>
                    <p class="text-gray-600 text-[14px] leading-relaxed mb-0 line-clamp-3">Our senior capstone team successfully defended against live penetration tests to secure the top spot at the annual national defense competition.</p>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm overflow-hidden hover:shadow-[0_15px_40px_rgba(91,0,0,0.08)] hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-full aspect-[16/10] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-[#5b0000] font-bold text-[11px] uppercase tracking-wider">Partnership</div>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 text-[12px] font-medium mb-3">September 15, 2026</p>
                    <h4 class="text-[#5b0000] font-bold text-[18px] leading-tight mb-3 group-hover:text-[#D4AF37] transition-colors cursor-pointer">New Cloud Computing Curriculum Designed with Industry Leaders</h4>
                    <p class="text-gray-600 text-[14px] leading-relaxed mb-0 line-clamp-3">We have officially partnered with major cloud providers to revamp our distributed systems courses, granting students access to enterprise-grade tools.</p>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm overflow-hidden hover:shadow-[0_15px_40px_rgba(91,0,0,0.08)] hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-full aspect-[16/10] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-[#5b0000] font-bold text-[11px] uppercase tracking-wider">Alumni</div>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 text-[12px] font-medium mb-3">August 30, 2026</p>
                    <h4 class="text-[#5b0000] font-bold text-[18px] leading-tight mb-3 group-hover:text-[#D4AF37] transition-colors cursor-pointer">Alumni Spotlight: Engineering Scalable Infrastructure at Global Fintechs</h4>
                    <p class="text-gray-600 text-[14px] leading-relaxed mb-0 line-clamp-3">Read about how our 2022 graduates are currently architecting systems that process millions of transactions per day in the modern financial sector.</p>
                </div>
            </div>
          </div>
          
          <div class="text-center mt-12">
            <button class="bg-transparent border-2 border-[#5b0000] text-[#5b0000] px-10 py-3.5 rounded-full font-bold text-[13px] uppercase tracking-widest hover:bg-[#5b0000] hover:text-white transition-all duration-300">Load More News</button>
          </div>

        </div>
      </div>

      <div id="panel-events" class="tab-content-panel hidden pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          
          <div class="mb-12 text-center md:text-left">
            <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Exhibition & Event Gallery</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
            <p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Take a look back at our most successful student showcases, technical workshops, and campus activities from past semesters.</p>
          </div>

          <div class="mb-20 relative bg-[#3A1316] rounded-[32px] overflow-hidden shadow-[0_20px_50px_rgba(91,0,0,0.2)] group">
            <div class="absolute right-0 top-0 w-full md:w-3/5 h-full bg-cover bg-center opacity-45 group-hover:scale-105 transition-transform duration-1000" style="background-image: url('{{ asset('style/images/newspage/itexhibition.png') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#3A1316] via-[#3A1316]/90 to-transparent"></div>

            <div class="relative z-10 p-8 md:p-14 flex flex-col md:flex-row items-center gap-10">
                <div class="flex-1 text-center md:text-left">
                    <span class="inline-block bg-[#f3c83d] text-[#5b0000] font-bold px-3 py-1 rounded-md text-[11px] tracking-[2px] uppercase mb-4 shadow-sm">2025 Major IT Exhibition</span>
                    <h3 class="text-white text-[28px] md:text-[36px] font-bold leading-tight mb-4">"Digital Dreams: Turning Ideas into Reality with Information Technology"</h3>
                    <p class="text-white/80 text-[15px] leading-relaxed mb-8 max-w-2xl">Last year's annual student showcase was a massive success, with over 500 attendees from the tech industry. Our final year Software Engineering students successfully demonstrated 32 working software prototypes, interactive games, and innovative IoT solutions.</p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                        <a href="#" class="w-full sm:w-auto text-center inline-block bg-white text-[#5b0000] px-8 py-3.5 rounded-full font-bold text-[13px] uppercase tracking-widest hover:bg-[#f3c83d] transition-colors shadow-lg no-underline">
                            View Photo Gallery
                        </a>
                        <button type="button" data-video-url="https://www.instagram.com/reel/DVhjh-3E3Cg/?igsh=bXRlYzJ3OGtiMm5i" class="watch-aftermovie-btn w-full sm:w-auto text-center inline-flex items-center justify-center gap-2 bg-transparent border border-white/30 text-white px-8 py-3.5 rounded-full font-bold text-[13px] uppercase tracking-widest hover:bg-white/10 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Watch Aftermovie
                        </button>
                    </div>
                </div>
            </div>
          </div>

          <div id="events-stack-list" class="space-y-16 lg:space-y-24">
            
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center group">
                <div class="w-full lg:w-1/2 relative overflow-hidden rounded-[24px] shadow-lg aspect-[4/3] lg:aspect-auto lg:h-[350px]">
                    <img src="/style/images/newspage/hackathon.jpg" alt="Hackathon" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md text-[#5b0000] px-4 py-2 rounded-lg text-[12px] font-bold tracking-widest uppercase shadow-md">Jul 2025</div>
                </div>
                <div class="w-full lg:w-1/2">
                    <span class="text-gray-400 text-[11px] font-bold uppercase tracking-widest mb-3 block">Student Activity Showcase</span>
                    <h4 class="text-[#5b0000] font-bold text-[24px] md:text-[28px] leading-tight mb-4 group-hover:text-[#D4AF37] transition-colors cursor-pointer">48-Hour Hackathon</h4>
                    <p class="text-gray-600 text-[15px] leading-relaxed mb-6">Over 50 teams competed to build sustainable tech solutions in just 48 hours. Supported by local tech startups, our students designed incredible prototypes ranging from carbon-tracking apps to smart-grid energy monitors. See the winning projects and the award ceremony highlights.</p>
                    <a href="#" class="text-[#5b0000] font-bold text-[13px] uppercase tracking-wider hover:text-[#f3c83d] transition-colors flex items-center gap-2 no-underline">
                        See The Winners & Gallery <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-16 items-center group">
                <div class="w-full lg:w-1/2 relative overflow-hidden rounded-[24px] shadow-lg aspect-[4/3] lg:aspect-auto lg:h-[350px]">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Guest Lecture" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-md text-[#5b0000] px-4 py-2 rounded-lg text-[12px] font-bold tracking-widest uppercase shadow-md">Dec 2025</div>
                </div>
                <div class="w-full lg:w-1/2">
                    <span class="text-gray-400 text-[11px] font-bold uppercase tracking-widest mb-3 block">Academic Event Recap</span>
                    <h4 class="text-[#5b0000] font-bold text-[24px] md:text-[28px] leading-tight mb-4 group-hover:text-[#D4AF37] transition-colors cursor-pointer">Guest Lecture: AWS Microservices</h4>
                    <p class="text-gray-600 text-[15px] leading-relaxed mb-6">A massive turnout for our deep dive into cloud architecture, hosted by a Lead Architect from Amazon Web Services. Students learned industry-standard practices for transitioning from monolithic legacy systems to highly scalable microservice architectures.</p>
                    <a href="#" class="text-[#5b0000] font-bold text-[13px] uppercase tracking-wider hover:text-[#f3c83d] transition-colors flex items-center gap-2 no-underline">
                        Read The Full Recap <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center group">
                <div class="w-full lg:w-1/2 relative overflow-hidden rounded-[24px] shadow-lg aspect-[4/3] lg:aspect-auto lg:h-[350px]">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80" alt="Bootcamp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md text-[#5b0000] px-4 py-2 rounded-lg text-[12px] font-bold tracking-widest uppercase shadow-md">Jan 2026</div>
                </div>
                <div class="w-full lg:w-1/2">
                    <span class="text-gray-400 text-[11px] font-bold uppercase tracking-widest mb-3 block">Student Activity Showcase</span>
                    <h4 class="text-[#5b0000] font-bold text-[24px] md:text-[28px] leading-tight mb-4 group-hover:text-[#D4AF37] transition-colors cursor-pointer">Winter React & Node.js Bootcamp</h4>
                    <p class="text-gray-600 text-[15px] leading-relaxed mb-6">Our Software Engineering Student Club hosted a phenomenal weekend intensive. Over 100 first and second-year students spent two days building full-stack web applications from scratch, guided by senior mentors and alumni.</p>
                    <a href="#" class="text-[#5b0000] font-bold text-[13px] uppercase tracking-wider hover:text-[#f3c83d] transition-colors flex items-center gap-2 no-underline">
                        View Event Photos <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

          </div>

                    <div class="text-center mt-20">
                        <button id="load-older-events-btn" class="bg-transparent border-2 border-[#5b0000] text-[#5b0000] px-10 py-3.5 rounded-full font-bold text-[13px] uppercase tracking-widest hover:bg-[#5b0000] hover:text-white transition-all duration-300 shadow-sm hover:shadow-md">Load Older Events</button>
          </div>

        </div>
      </div>

    </main>
  </div>

  <div id="aftermovie-modal" class="fixed inset-0 z-[9999] hidden items-start justify-center overflow-y-auto p-3 sm:p-4 bg-black/65 backdrop-blur-[2px]">
      <div class="relative w-[min(94vw,420px)] bg-white rounded-2xl overflow-hidden shadow-2xl flex flex-col border border-white/60 mt-6 sm:mt-0">
          <button type="button" id="close-aftermovie-modal" class="absolute top-3 right-3 z-10 w-9 h-9 rounded-full bg-white/90 text-[#5b0000] border-none cursor-pointer font-bold text-lg leading-none hover:bg-white">&times;</button>
          <div class="relative w-full aspect-[9/16] bg-white">
              <iframe
                  id="aftermovie-frame"
                  class="absolute inset-0 w-full h-full border-0 bg-white"
                  src=""
                  title="Aftermovie Video"
                  allow="autoplay; encrypted-media; picture-in-picture; fullscreen"
                  allowfullscreen>
              </iframe>
          </div>
          <div class="px-4 py-3 text-center text-gray-600 text-[13px] bg-white border-t border-gray-100 shrink-0">
              If the video does not load, <a id="aftermovie-open-link" href="#" target="_blank" rel="noopener noreferrer" class="text-[#5b0000] font-bold hover:text-[#f3c83d] transition-colors">open it on Instagram</a>.
          </div>
      </div>
  </div>

  <x-footer />

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabsInfo = [
            { btnId: 'btn-news', panels: ['panel-news'], title: 'Latest News', query: 'news' },
            { btnId: 'btn-events', panels: ['panel-events'], title: 'Past Events & Exhibitions', query: 'events' }
        ];

        const tabQueryMap = {
            news: 'btn-news',
            events: 'btn-events',
            exhibitions: 'btn-events'
        };

        const allBtns = document.querySelectorAll('.tab-btn');
        const allPanels = document.querySelectorAll('.tab-content-panel');
        const breadcrumb = document.getElementById('breadcrumb-page');

        tabsInfo.forEach(tab => {
            const btn = document.getElementById(tab.btnId);
            if (!btn) return;

            btn.addEventListener('click', function(e) {
                e.preventDefault();

                allBtns.forEach(b => {
                    b.classList.remove('text-[#5b0000]', 'bg-[#5b0000]/5');
                    b.classList.add('border-transparent', 'text-gray-500', 'bg-transparent');
                });

                allPanels.forEach(p => {
                    p.classList.remove('block');
                    p.classList.add('hidden');
                });

                btn.classList.remove('text-gray-500', 'bg-transparent');
                btn.classList.add('text-[#5b0000]', 'bg-[#5b0000]/5');

                tab.panels.forEach(panelId => {
                    const panelToDisplay = document.getElementById(panelId);
                    if (panelToDisplay) {
                        panelToDisplay.classList.remove('hidden');
                        panelToDisplay.classList.add('block');
                    }
                });

                if (breadcrumb) breadcrumb.textContent = tab.title;

                if (tab.query) {
                    const nextUrl = new URL(window.location.href);
                    nextUrl.searchParams.set('tab', tab.query);
                    window.history.replaceState({}, '', nextUrl.toString());
                }
            });
        });

        const requestedTab = (new URLSearchParams(window.location.search).get('tab') || '').toLowerCase();
        const requestedBtnId = tabQueryMap[requestedTab];
        if (requestedBtnId) {
            const requestedBtn = document.getElementById(requestedBtnId);
            if (requestedBtn) requestedBtn.click();
        }

        const aftermovieModal = document.getElementById('aftermovie-modal');
        const aftermovieFrame = document.getElementById('aftermovie-frame');
        const aftermovieOpenLink = document.getElementById('aftermovie-open-link');
        const closeAftermovieModalBtn = document.getElementById('close-aftermovie-modal');
        const aftermovieButtons = document.querySelectorAll('.watch-aftermovie-btn');
        const eventsStackList = document.getElementById('events-stack-list');
        const loadOlderEventsBtn = document.getElementById('load-older-events-btn');

        const olderEventsData = [
            {
                tag: 'Industry Visit',
                title: 'Data Center & Cybersecurity Lab Tour',
                description: 'Third-year students visited an enterprise data center to study network segmentation, disaster recovery systems, and incident response operations directly from security engineers.',
                date: 'Mar 2025',
                image: 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80',
                linkText: 'View Full Documentation',
                linkHref: '#'
            },
            {
                tag: 'Community Tech Service',
                title: 'Digital Literacy Program for Local Schools',
                description: 'Student volunteers organized workshops on online safety, coding basics, and productivity tools for middle school students as part of our annual social impact initiative.',
                date: 'Feb 2025',
                image: 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=900&q=80',
                linkText: 'Read Program Story',
                linkHref: '#'
            },
            {
                tag: 'Startup Collaboration',
                title: 'Product Sprint with Local Startup Founders',
                description: 'In a two-day sprint, students worked with startup mentors to prototype booking, analytics, and payment features, then pitched product iterations to industry judges.',
                date: 'Jan 2025',
                image: 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80',
                linkText: 'See Sprint Highlights',
                linkHref: '#'
            },
            {
                tag: 'Innovation Showcase',
                title: 'IoT Prototype Night: Smart Campus Systems',
                description: 'Teams demonstrated IoT prototypes including smart attendance gates, classroom environment sensors, and energy dashboards during the semester-end innovation showcase.',
                date: 'Dec 2024',
                image: 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=900&q=80',
                linkText: 'Explore Project Gallery',
                linkHref: '#'
            }
        ];

        const olderEventsBatchSize = 2;
        let nextOlderEventIndex = 0;

        function createOlderEventCard(eventItem, displayIndex) {
            const isReversed = displayIndex % 2 === 1;
            const wrapper = document.createElement('div');
            wrapper.className = `flex flex-col ${isReversed ? 'lg:flex-row-reverse' : 'lg:flex-row'} gap-8 lg:gap-16 items-center group`;
            wrapper.innerHTML = `
                <div class="w-full lg:w-1/2 relative overflow-hidden rounded-[24px] shadow-lg aspect-[4/3] lg:aspect-auto lg:h-[350px]">
                    <img src="${eventItem.image}" alt="${eventItem.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 ${isReversed ? 'left-4' : 'right-4'} bg-white/90 backdrop-blur-md text-[#5b0000] px-4 py-2 rounded-lg text-[12px] font-bold tracking-widest uppercase shadow-md">${eventItem.date}</div>
                </div>
                <div class="w-full lg:w-1/2">
                    <span class="text-gray-400 text-[11px] font-bold uppercase tracking-widest mb-3 block">${eventItem.tag}</span>
                    <h4 class="text-[#5b0000] font-bold text-[24px] md:text-[28px] leading-tight mb-4 group-hover:text-[#D4AF37] transition-colors cursor-pointer">${eventItem.title}</h4>
                    <p class="text-gray-600 text-[15px] leading-relaxed mb-6">${eventItem.description}</p>
                    <a href="${eventItem.linkHref}" class="text-[#5b0000] font-bold text-[13px] uppercase tracking-wider hover:text-[#f3c83d] transition-colors flex items-center gap-2 no-underline">
                        ${eventItem.linkText} <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            `;

            return wrapper;
        }

        function loadOlderEvents() {
            if (!eventsStackList || !loadOlderEventsBtn) return;

            const remaining = olderEventsData.length - nextOlderEventIndex;
            if (remaining <= 0) return;

            const initialCount = eventsStackList.children.length;
            const toLoad = Math.min(olderEventsBatchSize, remaining);

            for (let i = 0; i < toLoad; i += 1) {
                const sourceIndex = nextOlderEventIndex + i;
                const displayIndex = initialCount + i;
                const eventCard = createOlderEventCard(olderEventsData[sourceIndex], displayIndex);
                eventsStackList.appendChild(eventCard);
            }

            nextOlderEventIndex += toLoad;

            if (nextOlderEventIndex >= olderEventsData.length) {
                loadOlderEventsBtn.textContent = 'No More Events';
                loadOlderEventsBtn.disabled = true;
                loadOlderEventsBtn.classList.add('opacity-60', 'cursor-not-allowed', 'hover:bg-transparent', 'hover:text-[#5b0000]', 'hover:shadow-sm');
            }
        }

        function normalizeInstagramEmbedUrl(rawUrl) {
            if (!rawUrl) return '';

            try {
                const url = new URL(rawUrl);
                const host = url.hostname.toLowerCase();
                if (!host.includes('instagram.com')) return rawUrl;

                const pathParts = url.pathname.split('/').filter(Boolean);
                const typeIndex = pathParts.findIndex(part => ['reel', 'p', 'tv'].includes(part));

                if (typeIndex !== -1 && pathParts[typeIndex + 1]) {
                    const type = pathParts[typeIndex];
                    const id = pathParts[typeIndex + 1];
                    return `${url.protocol}//${url.hostname}/${type}/${id}/embed`;
                }

                return rawUrl;
            } catch {
                return rawUrl;
            }
        }

        function openAftermovieModal(videoUrl) {
            if (!aftermovieModal || !aftermovieFrame) return;

            const rawUrl = videoUrl || '';
            aftermovieModal.scrollTop = 0;
            aftermovieFrame.src = normalizeInstagramEmbedUrl(rawUrl);
            if (aftermovieOpenLink) aftermovieOpenLink.href = rawUrl || '#';
            aftermovieModal.classList.remove('hidden');
            aftermovieModal.classList.add('flex');
            // Ensure the modal always opens from the top even after prior scrolling.
            requestAnimationFrame(() => {
                aftermovieModal.scrollTop = 0;
            });
            document.body.classList.add('overflow-hidden');
        }

        function closeAftermovieModal() {
            if (!aftermovieModal || !aftermovieFrame) return;

            aftermovieFrame.src = '';
            aftermovieModal.classList.add('hidden');
            aftermovieModal.classList.remove('flex');
            document.body.classList.remove('overflow-hidden');
        }

        aftermovieButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                openAftermovieModal(this.getAttribute('data-video-url'));
            });
        });

        if (loadOlderEventsBtn) {
            loadOlderEventsBtn.addEventListener('click', loadOlderEvents);
        }

        if (closeAftermovieModalBtn) {
            closeAftermovieModalBtn.addEventListener('click', closeAftermovieModal);
        }

        if (aftermovieModal) {
            aftermovieModal.addEventListener('click', function(e) {
                if (e.target === aftermovieModal) closeAftermovieModal();
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeAftermovieModal();
        });
    });
  </script>
</x-layout>