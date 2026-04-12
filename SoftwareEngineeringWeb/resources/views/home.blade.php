<x-layout>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.min.js"></script>

    <style>
      /* Prevents the 'flash' of all content before Alpine loads */
      [x-cloak] { display: none !important; }
      
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

      html { 
        scroll-behavior: smooth; 
        font-family: 'Poppins', sans-serif;
      }
      
      body { font-family: 'Poppins', sans-serif; }

      /* Buffer for sticky header */
      section[id], div[id] { scroll-margin-top: 80px; }

      /* STRICT MAROON GRADIENT */
      .maroon-gradient-base {
          background-color: #5B1E22;
          background-image: radial-gradient(50% 50% at 50% 0%, #843339 0%, transparent 100%);
      }

      /* Unified Glass Card */
      .glass-card {
          background: rgba(255, 255, 255, 0.08);
          backdrop-filter: blur(12px);
          border: 1px solid rgba(255, 255, 255, 0.15);
          transition: all 0.4s ease;
      }
      .glass-card:hover {
          transform: translateY(-8px);
          border-color: rgba(212, 175, 55, 0.4);
          background: rgba(255, 255, 255, 0.12);
      }
      /* The Infinite Slide Animation */
      @keyframes marquee {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-50%); }
      }
      .animate-marquee {
        display: flex;
        width: max-content;
        animation: marquee 38s linear infinite;
      }
      /* Optional: Pause the slider when the user hovers over it */
      .animate-marquee:hover {
        animation-play-state: paused;
      }

      /* Welcome section motion effects */
      @keyframes welcomeFloat {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-12px) rotate(-1deg); }
      }

      @keyframes welcomeOrbit {
        0%, 100% { transform: translate(0px, 0px) scale(1); }
        50% { transform: translate(4px, -10px) scale(1.08); }
      }

      @keyframes welcomeGlow {
        0%, 100% {
          box-shadow: 0 20px 45px rgba(0, 0, 0, 0.14);
          border-color: rgba(212, 175, 55, 0.65);
        }
        50% {
          box-shadow: 0 30px 65px rgba(212, 175, 55, 0.28);
          border-color: rgba(212, 175, 55, 0.95);
        }
      }

      @keyframes welcomeCardGlow {
        0%, 100% { box-shadow: 0 30px 60px rgba(0,0,0,0.05); }
        50% { box-shadow: 0 34px 75px rgba(91,30,34,0.14); }
      }

      @keyframes welcomeSweep {
        0% { transform: translateX(-130%); }
        100% { transform: translateX(130%); }
      }

      @keyframes welcomeCodeDrift {
        0%, 100% { transform: translateY(0px); opacity: 0.85; }
        50% { transform: translateY(-10px); opacity: 1; }
      }

      .welcome-float {
        animation: welcomeFloat 6s ease-in-out infinite;
      }

      .welcome-dot-orb {
        animation: welcomeOrbit 5.8s ease-in-out infinite;
      }

      .welcome-frame-glow {
        animation: welcomeGlow 3.8s ease-in-out infinite;
      }

      .welcome-card-glow {
        animation: welcomeCardGlow 5.2s ease-in-out infinite;
      }

      .welcome-scan {
        position: relative;
        overflow: hidden;
      }

      .welcome-scan::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: linear-gradient(110deg, transparent 32%, rgba(212, 175, 55, 0.34) 50%, transparent 68%);
        transform: translateX(-130%);
        animation: welcomeSweep 4.8s ease-in-out infinite;
      }

      .welcome-code-drift {
        animation: welcomeCodeDrift 6s ease-in-out infinite;
      }

      /* Tiny moving pattern layers for Home page sections */
      @keyframes microPatternDrift {
        0% { background-position: 0 0; }
        100% { background-position: 120px 80px; }
      }

      @keyframes microPatternPulse {
        0%, 100% { opacity: 0.24; transform: translate3d(0, 0, 0); }
        50% { opacity: 0.34; transform: translate3d(-10px, 8px, 0); }
      }

      .micro-pattern-dots {
        background-image: radial-gradient(rgba(212, 175, 55, 0.34) 1px, transparent 1.4px);
        background-size: 22px 22px;
        animation: microPatternDrift 30s linear infinite;
      }

      .micro-pattern-mesh {
        background-image: linear-gradient(rgba(255, 255, 255, 0.07) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.07) 1px, transparent 1px);
        background-size: 44px 44px;
        animation: microPatternDrift 42s linear infinite reverse, microPatternPulse 11s ease-in-out infinite;
      }

      @media (prefers-reduced-motion: reduce) {
        .micro-pattern-dots,
        .micro-pattern-mesh {
          animation: none;
        }
      }
    </style>

    {{-- ===================== STICKY HEADER & NAVIGATION ===================== --}}
    <header class="overflow-hidden bg-[#4A1E22] w-full z-50 sticky top-0 shadow-xl h-[80px]"
      x-data="{
        activeTab: 'home',
        sections: ['home', 'program', 'welcome', 'students', 'alumni', 'news'],
        init() {
          this.updateFromHash();
          window.addEventListener('hashchange', () => this.updateFromHash());

          const observer = new IntersectionObserver((entries) => {
            const visible = entries
              .filter((entry) => entry.isIntersecting)
              .sort((a, b) => b.intersectionRatio - a.intersectionRatio);

            if (visible.length > 0) {
              this.activeTab = visible[0].target.id;
            }
          }, {
            rootMargin: '-40% 0px -45% 0px',
            threshold: [0.2, 0.4, 0.6],
          });

          this.sections.forEach((id) => {
            const el = document.getElementById(id);
            if (el) observer.observe(el);
          });
        },
        updateFromHash() {
          const hash = (window.location.hash || '#home').replace('#', '');
          if (this.sections.includes(hash)) this.activeTab = hash;
        },
        setActive(id) {
          this.activeTab = id;
        },
      }">
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(212,175,55,0.14),transparent_52%)] pointer-events-none"></div>
      <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 60px 60px;"></div>

      <div class="relative z-10 container mx-auto px-6 h-full flex flex-row items-center justify-center">
        <div class="w-full max-w-[1150px] flex flex-row items-center justify-between">
            <a href="#home" class="flex-shrink-0 flex items-center h-full no-underline">
              <span class="inline-flex items-center justify-center bg-white/95 rounded-xl px-3 py-2 shadow-[0_10px_24px_rgba(0,0,0,0.28)] ring-1 ring-[#D4AF37]/60 transition-transform duration-300 hover:scale-[1.03]">
                <img src="{{ asset('style/images/unijilogo.png') }}" alt="UNIJI" class="h-[38px] lg:h-[44px] w-auto block">
              </span>
            </a>

            <div class="hidden lg:flex flex-row items-center h-full m-0 p-0 ml-auto mr-6">
              <a href="#home" @click="setActive('home')" :class="activeTab === 'home' ? 'bg-[#210a0d]' : 'hover:bg-[#210a0d]/90'" class="h-full flex flex-row items-center px-4 xl:px-6 text-white font-bold text-[15px] transition-colors no-underline tracking-wide m-0">Home</a>
              <a href="#program" @click="setActive('program')" :class="activeTab === 'program' ? 'bg-[#210a0d]' : 'hover:bg-[#210a0d]/90'" class="h-full flex flex-row items-center px-4 xl:px-6 text-white font-bold text-[15px] transition-colors no-underline tracking-wide m-0">
                Program
              </a>
              <a href="#welcome" @click="setActive('welcome')" :class="activeTab === 'welcome' ? 'bg-[#210a0d]' : 'hover:bg-[#210a0d]/90'" class="h-full flex flex-row items-center px-4 xl:px-6 text-white font-bold text-[15px] transition-colors no-underline tracking-wide m-0">Welcome</a>
              <a href="#students" @click="setActive('students')" :class="activeTab === 'students' ? 'bg-[#210a0d]' : 'hover:bg-[#210a0d]/90'" class="h-full flex flex-row items-center px-4 xl:px-6 text-white font-bold text-[15px] transition-colors no-underline tracking-wide m-0">Students</a>
              <a href="#alumni" @click="setActive('alumni')" :class="activeTab === 'alumni' ? 'bg-[#210a0d]' : 'hover:bg-[#210a0d]/90'" class="h-full flex flex-row items-center px-4 xl:px-6 text-white font-bold text-[15px] transition-colors no-underline tracking-wide m-0">Alumni</a>
              <a href="#news" @click="setActive('news')" :class="activeTab === 'news' ? 'bg-[#210a0d]' : 'hover:bg-[#210a0d]/90'" class="h-full flex flex-row items-center px-4 xl:px-6 text-white font-bold text-[15px] transition-colors no-underline tracking-wide m-0">News</a>
            </div>

        </div>
      </div>
    </header>

    {{-- ===================== HOME HERO SECTION ===================== --}}
    <section id="home" class="relative bg-cover bg-center bg-no-repeat w-full pt-[80px] pb-[60px] lg:pt-[100px] lg:pb-[70px] flex items-center justify-center min-h-[380px]" style="background-image: url('{{ asset('style/images/home/UNIJIBanner.jpg') }}')">
      
      <div class="absolute inset-0 bg-gradient-to-b from-[#2a0e11]/40 via-[#2a0e11]/80 to-[#5B1E22] z-0"></div>
      <div class="absolute inset-0 z-[1] pointer-events-none micro-pattern-dots opacity-45"></div>
      <div class="absolute inset-0 z-[2] pointer-events-none micro-pattern-mesh"></div>
      
      <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] z-20 shadow-[0_0_15px_rgba(200,179,125,0.3)]"></div>
      
      <div class="container mx-auto px-5 relative z-10 flex justify-center max-w-[1150px]">
        <h1 x-data="{ shown: false }" x-intersect.once="shown = true" 
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
            class="-mt-5 md:-mt-7 lg:-mt-17 transition-all duration-[1200ms] ease-out delay-300 font-bold text-[24px] md:text-[34px] lg:text-[44px] text-center uppercase max-w-[950px] leading-[1.2] tracking-[2.88px] lg:tracking-[4.8px] bg-clip-text text-transparent bg-gradient-to-b from-[#FFF] via-[#F3C83D] to-[#B5952A]" 
            style="filter: drop-shadow(0px 8px 12px rgba(42, 14, 17, 0.8)) drop-shadow(0px 2px 4px rgba(42, 14, 17, 0.5));">
          WELCOME TO THE SCHOOL OF <br/> SOFTWARE ENGINEERING
        </h1>
      </div>
    </section>

    {{-- ===================== PROGRAM OVERVIEW SECTION ===================== --}}
    <div id="program" class="relative flow-root pb-24 maroon-gradient-base">
        <div class="absolute inset-0 z-0 opacity-[0.04] pointer-events-none" style="background-image: linear-gradient(#ffffff 0.5px, transparent 0.5px), linear-gradient(90deg, #ffffff 0.5px, transparent 0.5px); background-size: 50px 50px;"></div>

        <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] -translate-y-1/2 z-10 shadow-[0_0_15px_rgba(200,179,125,0.3)]"></div>

        <div class="relative z-20 w-full max-w-[1150px] mx-auto px-6 -mt-[52px] lg:-mt-[64px]">
          <div class="flex items-center justify-center gap-[16px] lg:gap-[30px] flex-wrap w-full">
              
                <div x-data="{ shown: false, count: 0, target: 200, animate(){ const start = performance.now(); const duration = 2000; const tick = (now) => { const progress = Math.min((now - start) / duration, 1); this.count = this.target * progress; if (progress < 1) requestAnimationFrame(tick); }; requestAnimationFrame(tick); } }" x-intersect.once="shown = true; animate()" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                   class="relative bg-[#2a0e11] border border-[#D4AF37]/20 border-t-[4px] border-t-[#D4AF37] rounded-[24px] py-[22px] px-[30px] min-w-[132px] md:min-w-[160px] lg:min-w-[182px] text-center shadow-[0_20px_40px_rgba(0,0,0,0.6)] hover:-translate-y-2 transition-all duration-1000 group overflow-hidden ease-out delay-[100ms]">
                <div class="absolute inset-0 bg-gradient-to-b from-[#D4AF37]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                  <p class="font-semibold text-[12px] lg:text-[13px] text-white/90 uppercase tracking-[2.6px] mb-1.5 relative z-10">Students</p>
                  <p x-text="Math.round(count).toLocaleString('en-US')" class="font-bold text-[37px] lg:text-[46px] text-[#D4AF37] leading-none m-0 relative z-10 drop-shadow-[0_0_20px_rgba(212,175,55,0.3)] group-hover:scale-110 transition-transform duration-500">200</p>
              </div>

                <div x-data="{ shown: false, count: 0, target: 20, animate(){ const start = performance.now(); const duration = 1900; const tick = (now) => { const progress = Math.min((now - start) / duration, 1); this.count = this.target * progress; if (progress < 1) requestAnimationFrame(tick); }; requestAnimationFrame(tick); } }" x-intersect.once="shown = true; animate()" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                   class="relative bg-[#2a0e11] border border-[#D4AF37]/20 border-t-[4px] border-t-[#D4AF37] rounded-[24px] py-[22px] px-[30px] min-w-[132px] md:min-w-[160px] lg:min-w-[182px] text-center shadow-[0_20px_40px_rgba(0,0,0,0.6)] hover:-translate-y-2 transition-all duration-1000 group overflow-hidden ease-out delay-[200ms]">
                <div class="absolute inset-0 bg-gradient-to-b from-[#D4AF37]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                  <p class="font-semibold text-[12px] lg:text-[13px] text-white/90 uppercase tracking-[2.6px] mb-1.5 relative z-10">Lecturers</p>
                  <p x-text="Math.round(count).toLocaleString('en-US')" class="font-bold text-[37px] lg:text-[46px] text-[#D4AF37] leading-none m-0 relative z-10 drop-shadow-[0_0_20px_rgba(212,175,55,0.3)] group-hover:scale-110 transition-transform duration-500">20</p>
              </div>

                <div x-data="{ shown: false, count: 0, target: 1300, animate(){ const start = performance.now(); const duration = 2400; const tick = (now) => { const progress = Math.min((now - start) / duration, 1); this.count = this.target * progress; if (progress < 1) requestAnimationFrame(tick); }; requestAnimationFrame(tick); } }" x-intersect.once="shown = true; animate()" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                   class="relative bg-[#2a0e11] border border-[#D4AF37]/20 border-t-[4px] border-t-[#D4AF37] rounded-[24px] py-[22px] px-[30px] min-w-[132px] md:min-w-[160px] lg:min-w-[182px] text-center shadow-[0_20px_40px_rgba(0,0,0,0.6)] hover:-translate-y-2 transition-all duration-1000 group overflow-hidden ease-out delay-[300ms]">
                <div class="absolute inset-0 bg-gradient-to-b from-[#D4AF37]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                  <p class="font-semibold text-[12px] lg:text-[13px] text-white/90 uppercase tracking-[2.6px] mb-1.5 relative z-10">Alumni</p>
                  <p x-text="Math.round(count).toLocaleString('en-US')" class="font-bold text-[37px] lg:text-[46px] text-[#D4AF37] leading-none m-0 relative z-10 drop-shadow-[0_0_20px_rgba(212,175,55,0.3)] group-hover:scale-110 transition-transform duration-500">1,300</p>
              </div>
              
            </div>
        </div>

        <section class="relative pt-[60px] lg:pt-[80px] pb-[30px] overflow-hidden opacity-95">
          <div class="container mx-auto px-6 max-w-[1150px] relative z-10">
            
            <div x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100 relative overflow-hidden bg-gradient-to-br from-[#8A353B] via-[#70282D] to-[#4A171A] border border-white/20 border-l-[6px] lg:border-l-[8px] border-l-[#f3c83d] rounded-[20px] lg:rounded-[30px] p-[25px] lg:px-[40px] lg:py-[35px] shadow-[0_16px_35px_rgba(0,0,0,0.35)] mb-[40px] lg:mb-[60px] hover:-translate-y-1 hover:shadow-[0_24px_45px_rgba(0,0,0,0.4)]">
              <div class="absolute -top-16 -right-8 w-[220px] h-[220px] rounded-full bg-[#D4AF37]/18 blur-3xl pointer-events-none"></div>
              <div class="absolute -bottom-20 -left-12 w-[240px] h-[240px] rounded-full bg-[#ffffff]/8 blur-3xl pointer-events-none"></div>
              <div class="absolute inset-0 opacity-[0.08] pointer-events-none" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 32px 32px;"></div>

              <div class="relative z-10">
                <div class="flex flex-wrap items-center gap-3 mb-4">
                  <span class="inline-flex items-center bg-[#f3c83d]/25 rounded-full px-4 py-1.5 text-[#f3c83d] font-semibold text-[11px] tracking-[1.5px] uppercase">S1 Program</span>
                </div>

                <h2 class="font-semibold text-[24px] lg:text-[32px] text-white mb-4 uppercase tracking-wide leading-tight">Software Engineering</h2>

                <p class="font-normal text-[13px] lg:text-[14px] text-white/90 leading-[1.75] mb-5 max-w-[820px]">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <a href="/home/about" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-[#D4AF37] text-[#5B1E22] font-bold text-[13px] uppercase tracking-[1px] px-5 py-2.5 rounded-full no-underline transition-all duration-300 hover:bg-[#f3c83d] hover:-translate-y-0.5 hover:shadow-[0_8px_18px_rgba(212,175,55,0.35)]">
                  Explore Program
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M5 12h14m-6-6l6 6-6 6"></path></svg>
                </a>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px] lg:gap-[40px]">
              
              <a href="/home/about" target="_blank" rel="noopener noreferrer" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-200 relative rounded-[24px] border border-white/10 overflow-hidden h-[160px] lg:h-[190px] flex items-center justify-center flex-col cursor-pointer hover:-translate-y-2 shadow-[0_15px_30px_rgba(0,0,0,0.3)] hover:shadow-[0_25px_50px_rgba(212,175,55,0.15)] group no-underline bg-[#3A1316]">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-40 group-hover:opacity-50 z-0" style="background-image: url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&h=400&fit=crop')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#1a080a] via-[#5B1E22]/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500 z-10"></div>
                <div class="relative z-20 flex flex-col items-center gap-4">
                  <div class="w-14 h-14 rounded-full bg-white/5 backdrop-blur-md flex items-center justify-center border border-white/20 group-hover:border-[#D4AF37] group-hover:bg-[#D4AF37]/20 transition-all duration-500 group-hover:scale-110">
                    <svg class="w-6 h-6 text-white group-hover:text-[#D4AF37] transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                  </div>
                  <p class="text-white text-[18px] lg:text-[20px] font-semibold tracking-wide capitalize m-0 group-hover:text-[#D4AF37] transition-colors duration-500">Study Program</p>
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[4px] bg-[#D4AF37] translate-y-full group-hover:translate-y-0 transition-transform duration-500 z-20"></div>
              </a>
     
              <a href="/home/curriculum" target="_blank" rel="noopener noreferrer" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-300 relative rounded-[24px] border border-white/10 overflow-hidden h-[160px] lg:h-[190px] flex items-center justify-center flex-col cursor-pointer hover:-translate-y-2 shadow-[0_15px_30px_rgba(0,0,0,0.3)] hover:shadow-[0_25px_50px_rgba(212,175,55,0.15)] group bg-[#3A1316] no-underline">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-40 group-hover:opacity-50 z-0" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#1a080a] via-[#5B1E22]/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500 z-10"></div>
                <div class="relative z-20 flex flex-col items-center gap-4">
                  <div class="w-14 h-14 rounded-full bg-white/5 backdrop-blur-md flex items-center justify-center border border-white/20 group-hover:border-[#D4AF37] group-hover:bg-[#D4AF37]/20 transition-all duration-500 group-hover:scale-110">
                    <svg class="w-7 h-7 text-white group-hover:text-[#D4AF37] transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                  </div>
                  <p class="text-white text-[18px] lg:text-[20px] font-semibold tracking-wide capitalize m-0 group-hover:text-[#D4AF37] transition-colors duration-500">Curriculum</p>
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[4px] bg-[#D4AF37] translate-y-full group-hover:translate-y-0 transition-transform duration-500 z-20"></div>
              </a>
     
              <a href="/academic" target="_blank" rel="noopener noreferrer" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-400 relative rounded-[24px] border border-white/10 overflow-hidden h-[160px] lg:h-[190px] flex items-center justify-center flex-col cursor-pointer hover:-translate-y-2 shadow-[0_15px_30px_rgba(0,0,0,0.3)] hover:shadow-[0_25px_50px_rgba(212,175,55,0.15)] group bg-[#3A1316] no-underline">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-40 group-hover:opacity-50 z-0" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#1a080a] via-[#5B1E22]/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500 z-10"></div>
                <div class="relative z-20 flex flex-col items-center gap-4">
                  <div class="w-14 h-14 rounded-full bg-white/5 backdrop-blur-md flex items-center justify-center border border-white/20 group-hover:border-[#D4AF37] group-hover:bg-[#D4AF37]/20 transition-all duration-500 group-hover:scale-110">
                    <svg class="w-7 h-7 text-white group-hover:text-[#D4AF37] transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </div>
                  <p class="text-white text-[18px] lg:text-[20px] font-semibold tracking-wide capitalize m-0 group-hover:text-[#D4AF37] transition-colors duration-500">Academic Information</p>
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[4px] bg-[#D4AF37] translate-y-full group-hover:translate-y-0 transition-transform duration-500 z-20"></div>
              </a>
     
              <a href="/home/research" target="_blank" rel="noopener noreferrer" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-[500ms] relative rounded-[24px] border border-white/10 overflow-hidden h-[160px] lg:h-[190px] flex items-center justify-center flex-col cursor-pointer hover:-translate-y-2 shadow-[0_15px_30px_rgba(0,0,0,0.3)] hover:shadow-[0_25px_50px_rgba(212,175,55,0.15)] group bg-[#3A1316] no-underline">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-40 group-hover:opacity-50 z-0" style="background-image: url('https://tse4.mm.bing.net/th/id/OIP.4qX28pXueEQUc_hfQ2wyZQHaE7?w=626&h=417&rs=1&pid=ImgDetMain&o=7&rm=3')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#1a080a] via-[#5B1E22]/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500 z-10"></div>
                <div class="relative z-20 flex flex-col items-center gap-4">
                  <div class="w-14 h-14 rounded-full bg-white/5 backdrop-blur-md flex items-center justify-center border border-white/20 group-hover:border-[#D4AF37] group-hover:bg-[#D4AF37]/20 transition-all duration-500 group-hover:scale-110">
                    <svg class="w-7 h-7 text-white group-hover:text-[#D4AF37] transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                  </div>
                  <p class="text-white text-[18px] lg:text-[20px] font-semibold tracking-wide capitalize m-0 group-hover:text-[#D4AF37] transition-colors duration-500">Research & Publications</p>
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[4px] bg-[#D4AF37] translate-y-full group-hover:translate-y-0 transition-transform duration-500 z-20"></div>
              </a>

            </div>
        </section>
    </div>

      {{-- ===================== HEAD OF PROGRAM WELCOME SECTION ===================== --}}
    <section id="welcome" class="relative overflow-hidden" style="background: radial-gradient(circle at center, #ffffff 0%, #fff6f0 100%);">
      <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] z-30 shadow-[0_0_15px_rgba(200,179,125,0.4)]"></div>
      <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#5B1E22 1px, transparent 1px), linear-gradient(90deg, #5B1E22 1px, transparent 1px); background-size: 50px 50px;"></div>
      <div class="absolute inset-0 z-[1] pointer-events-none micro-pattern-dots opacity-35"></div>
      <div class="absolute inset-0 z-[2] pointer-events-none micro-pattern-mesh opacity-40"></div>

      <div class="absolute top-[80%] left-10 text-[#D4AF37]/28 font-mono text-[13px] leading-6 select-none pointer-events-none hidden xl:block welcome-code-drift z-0 drop-shadow-[0_0_8px_rgba(212,175,55,0.18)]">
            while(project.isNotPerfect()) {<br>&nbsp;&nbsp;mrlaw();<br>&nbsp;&nbsp;is();<br>&nbsp;&nbsp;cool();<br>}
          </div>
      <div class="container mx-auto px-6 pt-[100px] pb-[130px] relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20 max-w-[1150px] mx-auto w-full">
          <div class="w-full lg:w-5/12" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100">
            <div class="relative w-[300px] mx-auto lg:ml-0 lg:mr-auto lg:-ml-6 welcome-float welcome-scan">
              <div class="absolute -top-8 -left-8 w-40 h-40 opacity-30 z-0" style="background-image: radial-gradient(#D4AF37 2px, transparent 2px); background-size: 16px 16px;"></div>
              <div class="absolute -bottom-5 -right-4 w-5 h-5 rounded-full bg-[#D4AF37]/80 shadow-[0_0_14px_rgba(212,175,55,0.5)] z-20 welcome-dot-orb"></div>
              <div class="absolute inset-0 border-2 border-[#D4AF37] translate-x-5 translate-y-5 rounded-3xl z-0 welcome-frame-glow"></div>
              <img src="{{ asset('style/images/home/mrlawtemp.jpeg') }}" alt="Head of Program" class="relative z-10 w-full h-[400px] object-cover rounded-3xl shadow-2xl block border-[6px] border-white">
            </div>
          </div>
          
          <div class="w-full lg:w-7/12" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-300">
            <div class="bg-white/70 backdrop-blur-md rounded-[40px] p-10 lg:p-14 shadow-[0_30px_60px_rgba(0,0,0,0.05)] border border-white relative overflow-hidden welcome-card-glow">
              <div :class="shown ? 'opacity-10 translate-y-0' : 'opacity-0 translate-y-6'" class="absolute -top-4 right-4 text-[180px] text-[#D4AF37] font-serif leading-none pointer-events-none transition-all duration-700 delay-100">"</div>
              <h2 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'" class="font-bold text-[#5B1E22] text-[32px] lg:text-[42px] mb-6 leading-tight uppercase tracking-tight relative z-10 transition-all duration-700 delay-150">
                Welcome Message from <br><span class="text-[#D4AF37]">Head of Program</span>
              </h2>
              <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'" class="w-20 h-1.5 bg-[#D4AF37] mb-10 relative z-10 shadow-sm transition-all duration-700 delay-250"></div>
              <p :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'" class="text-[16px] lg:text-[18px] text-[#1a1a1a]/70 leading-relaxed font-medium italic relative z-10 mb-12 transition-all duration-700 delay-300">
                "We are building the architects of the future. Our curriculum is not just about code; it's about solving the complex problems of humanity through elegant software solutions."
              </p>
              <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'" class="relative z-10 flex items-center gap-5 transition-all duration-700 delay-400">
                <div class="w-[3px] h-[40px] bg-[#D4AF37]"></div>
                <div>
                  <p class="font-bold text-[18px] text-[#5B1E22] m-0">Lawrence Adi Supriyono M.Pd</p>
                  <p class="text-[#D4AF37] text-[11px] font-bold uppercase tracking-[2px] mt-1 m-0">Head of Software Engineering</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    {{-- ===================== SPECIALIZATION SECTION ===================== --}}
    <section id="specialization" class="relative overflow-hidden py-[80px] bg-[#5B1E22]">
      <div class="absolute top-0 left-0 w-full h-full pointer-events-none" style="background: radial-gradient(50% 50% at 50% 0%, #843339 0%, transparent 100%);"></div>
      <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] z-20 shadow-[0_0_15px_rgba(200,179,125,0.3)]"></div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-[1150px] mx-auto w-full">
            <div class="text-center mb-24" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100">
              <p class="font-sans text-[#D4AF37] font-semibold text-[20px] mb-4">Choose Your Path</p>
              <h2 class="font-sans font-bold text-white text-[40px] lg:text-[46px] leading-tight uppercase tracking-tight">Specializations</h2>
              <div class="w-12 h-[3px] bg-[#D4AF37] mx-auto mt-6 shadow-[0_0_10px_rgba(212,175,55,0.3)]"></div>
            </div>

            <div class="flex flex-col md:flex-row items-end justify-center gap-10 lg:gap-14 w-full">
              
              <div class="relative group flex-1 hover:scale-[1.06] transition-transform duration-500" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-200">
                <a href="/home/curriculum?tab=descriptions" target="_blank" rel="noopener noreferrer" class="block no-underline">
                  <div class="aspect-[3/4] rounded-3xl overflow-hidden relative cursor-pointer" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=500&q=80" class="absolute inset-0 w-full h-full object-cover opacity-45 filter group-hover:opacity-85 group-hover:scale-[1.18] group-hover:saturate-150 group-hover:brightness-110 group-hover:contrast-125 transition-all duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#3A1316] via-[#3A1316]/50 to-transparent opacity-95 group-hover:opacity-70 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 p-8 w-full z-20">
                      <span class="font-sans text-white/10 text-7xl absolute top-4 right-6 font-bold">01</span>
                      <h3 class="font-sans font-bold text-white text-[24px] mb-2 uppercase">Game Engineering</h3>
                      <p class="font-sans text-[#D4AF37] text-[12px] font-bold uppercase tracking-wider">Explore &rarr;</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="relative group flex-1 hover:scale-[1.06] transition-transform duration-500" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-300">
                <a href="/home/curriculum?tab=descriptions" target="_blank" rel="noopener noreferrer" class="block no-underline">
                  <div class="aspect-[3/4] rounded-3xl overflow-hidden relative backdrop-blur-sm cursor-pointer" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(212,175,55,0.3); box-shadow: 0 0 50px rgba(212,175,55,0.15);">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=500&q=80" class="absolute inset-0 w-full h-full object-cover opacity-65 filter group-hover:opacity-95 group-hover:scale-[1.18] group-hover:saturate-150 group-hover:brightness-110 group-hover:contrast-125 transition-all duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#5B1E22] via-[#5B1E22]/60 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 p-8 w-full z-20 backdrop-blur-sm bg-black/20">
                      <span class="font-sans text-white/10 text-7xl absolute top-4 right-6 font-bold">02</span>
                      <h3 class="font-sans font-bold text-white text-[26px] mb-2 uppercase">Web & Mobile</h3>
                      <p class="font-sans text-[#D4AF37] text-[12px] font-bold uppercase tracking-wider">Explore &rarr;</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="relative group flex-1 hover:scale-[1.06] transition-transform duration-500" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-400">
                <a href="/home/curriculum?tab=descriptions" target="_blank" rel="noopener noreferrer" class="block no-underline">
                  <div class="aspect-[3/4] rounded-3xl overflow-hidden relative cursor-pointer" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);">
                    <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?auto=format&fit=crop&w=500&q=80" class="absolute inset-0 w-full h-full object-cover opacity-45 filter group-hover:opacity-85 group-hover:scale-[1.18] group-hover:saturate-150 group-hover:brightness-110 group-hover:contrast-125 transition-all duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#3A1316] via-[#3A1316]/50 to-transparent opacity-95 group-hover:opacity-70 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 p-8 w-full z-20">
                      <span class="font-sans text-white/10 text-7xl absolute top-4 right-6 font-bold">03</span>
                      <h3 class="font-sans font-bold text-white text-[24px] mb-2 uppercase">Blockchain</h3>
                      <p class="font-sans text-[#D4AF37] text-[12px] font-bold uppercase tracking-wider">Explore &rarr;</p>
                    </div>
                  </div>
                </a>
              </div>

            </div>
        </div>
      </div>
    </section>

    {{-- ===================== ALL ABOUT STUDENTS (Wider Cards) ===================== --}}
    @php
      $studentTabsData = $studentHighlights ?? [
        'orgs' => collect(),
        'achieve' => collect(),
        'acts' => collect(),
        'projs' => collect(),
      ];

      $studentOrganizations = $studentTabsData['orgs'] ?? collect();
      $studentAchievements = $studentTabsData['achieve'] ?? collect();
      $studentActivities = $studentTabsData['acts'] ?? collect();
      $studentProjects = $studentTabsData['projs'] ?? collect();

      $organizationsByPage = $studentOrganizations
        ->groupBy(fn ($item) => $item->page_number ?: 1)
        ->sortKeys();
      $organizationPages = $organizationsByPage->keys()->values();
      $firstOrganizationPage = $organizationPages->first() ?? 1;

      $studentImage = function (?string $path, string $fallback) {
        if (!$path) {
          return $fallback;
        }

        return (str_starts_with($path, 'http://') || str_starts_with($path, 'https://'))
          ? $path
          : asset(ltrim($path, '/'));
      };
    @endphp

    <section id="students" class="py-[80px] relative overflow-hidden" style="background: radial-gradient(circle at 30% 30%, #ffffff 0%, #fff6f0 100%);" x-data="{ activeTab: 'orgs' }">
      <div class="absolute inset-0 z-0 opacity-[0.04] pointer-events-none" style="background-image: linear-gradient(#5B1E22 1px, transparent 1px), linear-gradient(90deg, #5B1E22 1px, transparent 1px); background-size: 60px 60px;"></div>
      <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] z-20 shadow-[0_0_15px_rgba(200,179,125,0.25)]"></div>

      <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-[1150px] mx-auto w-full">
            
            <div class="text-center mb-16" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100">
              <p class="font-bold text-[#D4AF37] text-[11px] tracking-[4px] uppercase mb-4">Student Life</p>
              <h2 class="text-[#5B1E22] font-bold text-[36px] lg:text-[46px] leading-tight uppercase tracking-tight">
                All about <span class="text-[#D4AF37]">Students</span>
              </h2>
              <div class="w-24 h-1.5 bg-[#D4AF37] mx-auto mt-6 shadow-[0_0_15px_rgba(212,175,55,0.2)]"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
              
              <div class="lg:col-span-3" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-200">
                <div class="flex flex-col gap-3">
                  @php
                    $tabs = [
                      ['orgs', 'Student Organizations'],
                      ['achieve', 'Student Achievements'],
                      ['acts', 'Student Activities'],
                      ['projs', 'Student Projects']
                    ];
                  @endphp

                  @foreach($tabs as $tab)
                    <button 
                      @click="activeTab = '{{ $tab[0] }}'"
                      :class="activeTab === '{{ $tab[0] }}' ? 'bg-white shadow-xl translate-x-3 border-[#5B1E22] text-[#5B1E22]' : 'bg-white/40 border-black/5 text-[#5B1E22]/50 hover:bg-white/80'"
                      class="w-full text-left px-6 py-4 rounded-2xl transition-all duration-500 font-bold tracking-wide uppercase text-[11px] border-2 cursor-pointer flex justify-between items-center group">
                      {{ $tab[1] }}
                      <span class="w-2 h-2 rounded-full bg-[#D4AF37] shadow-[0_0_8px_#D4AF37] opacity-0 group-hover:opacity-100 transition-opacity" :class="activeTab === '{{ $tab[0] }}' && 'opacity-100 scale-125'"></span>
                    </button>
                  @endforeach
                </div>
              </div>

              <div class="lg:col-span-9" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-300">
                <div class="bg-white/50 rounded-[40px] p-6 lg:p-8 backdrop-blur-xl border border-white shadow-[0_40px_80px_rgba(0,0,0,0.06)] min-h-[450px]">
                  
                  <div x-show="activeTab === 'orgs'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-cloak>
                    @if ($organizationPages->isNotEmpty())
                      <div x-data="{ orgPage: {{ $firstOrganizationPage }} }" class="relative">
                        @foreach ($organizationPages as $pageNumber)
                          <div x-show="orgPage === {{ $pageNumber }}" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 -translate-y-8" class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-5 absolute top-0 left-0 w-full" :class="orgPage === {{ $pageNumber }} ? 'relative' : 'absolute pointer-events-none'" x-cloak>
                            @foreach ($organizationsByPage->get($pageNumber, collect()) as $org)
                              <div x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'" class="bg-white p-3.5 rounded-[20px] shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-black/5 hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(0,0,0,0.08)] transition-all duration-500 ease-out cursor-pointer group">
                                <div class="w-full h-[130px] rounded-[12px] overflow-hidden mb-3 relative bg-gray-100">
                                  <img src="{{ $studentImage($org->image_url, asset('style/images/home/danceclub.jpg')) }}" alt="{{ $org->title }}" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-500">
                                </div>
                                <div class="px-2 pb-1">
                                  <span class="bg-[#5B1E22] text-white text-[10px] font-medium px-3 py-1 rounded-full uppercase tracking-wider mb-1.5 inline-block">{{ $org->badge ?: 'Student Club' }}</span>
                                  <h4 class="font-bold text-[#5B1E22] text-[17px] leading-tight m-0">{{ $org->title }}</h4>
                                </div>
                              </div>
                            @endforeach
                          </div>
                        @endforeach

                        @if ($organizationPages->count() > 1)
                          <div class="flex justify-center items-center gap-4 mt-6 pt-2 w-full">
                            @foreach ($organizationPages as $pageNumber)
                              <button @click="orgPage = {{ $pageNumber }}" :class="orgPage === {{ $pageNumber }} ? 'bg-[#5B1E22] w-8' : 'bg-black/10 hover:bg-black/20 w-3'" class="h-3 rounded-full transition-all duration-300" aria-label="Page {{ $pageNumber }}"></button>
                            @endforeach
                          </div>
                        @endif
                      </div>
                    @else
                      <p class="text-center text-gray-500 m-0">No student organization data found yet.</p>
                    @endif
                  </div>

                    <div x-show="activeTab === 'achieve'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-cloak>
                    @if ($studentAchievements->isNotEmpty())
                      <div class="flex flex-col gap-6 max-w-4xl mx-auto">
                      @foreach ($studentAchievements as $achievement)
                        <div x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'" class="group relative w-full rounded-[20px] border border-black/5 bg-white shadow-sm transition-all duration-500 ease-in-out hover:-translate-y-1 hover:bg-[#5B1E22] hover:shadow-2xl flex flex-col cursor-pointer overflow-hidden">
                        <div class="absolute inset-0 w-full h-full z-0">
                          <img src="{{ $studentImage($achievement->image_url, 'https://images.unsplash.com/photo-1542626991-cbc4e32524cc?auto=format&fit=crop&w=800&q=80') }}" alt="Achievement Image" class="w-full h-full object-cover">
                          <div class="absolute inset-0 bg-white/80 group-hover:bg-[#5B1E22]/90 transition-colors duration-500"></div>
                        </div>

                        <div class="relative z-10 flex flex-col p-6 group-hover:p-8 transition-all duration-500">
                          <div class="flex items-center justify-between gap-4 mb-4">
                          <div>
                            <span class="bg-[#5B1E22] group-hover:bg-white/20 text-white text-[10px] font-medium px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block transition-colors">{{ $achievement->badge ?: 'Student Achievement' }}</span>
                            <h4 class="font-bold text-[#5B1E22] group-hover:text-white text-[18px] lg:text-[20px] leading-tight m-0 transition-colors">{{ $achievement->title }}</h4>
                          </div>
                          <div class="w-10 h-10 bg-[#5B1E22]/5 rounded-xl flex items-center justify-center group-hover:bg-[#5B1E22] transition-colors flex-shrink-0">
                            <svg class="w-7 h-7 text-[#5B1E22] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                          </div>
                          </div>

                          <div class="overflow-hidden max-h-0 group-hover:max-h-[300px] transition-all duration-500 ease-in-out mt-0 group-hover:mt-6">
                          <p class="text-black/60 group-hover:text-white/80 text-[14px] leading-relaxed m-0 border-t border-black/5 group-hover:border-white/10 pt-4">
                            {{ $achievement->description }}
                          </p>
                          </div>
                        </div>
                        </div>
                      @endforeach
                      </div>
                    @else
                      <p class="text-center text-gray-500 m-0">No student achievement data found yet.</p>
                    @endif
                    </div>

                  <div x-show="activeTab === 'acts'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-cloak>
                    @if ($studentActivities->isNotEmpty())
                      <div class="flex flex-col gap-5 max-w-4xl mx-auto">
                        @foreach ($studentActivities as $activity)
                          <div x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'" class="group relative w-full rounded-[22px] border border-black/5 bg-white shadow-sm overflow-hidden transition-all duration-500 ease-out hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(0,0,0,0.08)]">
                            <div class="grid grid-cols-1 md:grid-cols-[240px_minmax(0,1fr)]">
                              <div class="relative h-[170px] md:h-full overflow-hidden">
                                <img src="{{ $studentImage($activity->image_url, asset('style/images/newspage/hackathon.jpg')) }}" alt="{{ $activity->title }}" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-500">
                              </div>
                              <div class="p-5 md:p-6">
                                <span class="inline-flex items-center bg-[#5B1E22] text-white text-[10px] font-medium px-3 py-1 rounded-full uppercase tracking-wider">{{ $activity->badge ?: 'Student Activity' }}</span>
                                <h4 class="font-bold text-[#5B1E22] text-[20px] leading-tight mt-3 mb-2">{{ $activity->title }}</h4>
                                <p class="text-black/60 text-[14px] leading-relaxed m-0">{{ $activity->description }}</p>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    @else
                      <p class="text-center text-gray-500 m-0">No student activity data found yet.</p>
                    @endif
                  </div>

                  <div x-show="activeTab === 'projs'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-cloak>
                    @if ($studentProjects->isNotEmpty())
                      <div class="flex flex-col gap-5 max-w-4xl mx-auto">
                        @foreach ($studentProjects as $project)
                          <div x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'" class="group relative w-full rounded-[22px] border border-black/5 bg-white shadow-sm overflow-hidden transition-all duration-500 ease-out hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(0,0,0,0.08)]">
                            <div class="p-5 md:p-6">
                              <div class="flex flex-wrap items-center gap-3 mb-3">
                                <span class="inline-flex items-center bg-[#5B1E22] text-white text-[10px] font-medium px-3 py-1 rounded-full uppercase tracking-wider">{{ $project->badge ?: 'Student Project' }}</span>
                                <span class="text-gray-500 text-[12px] font-semibold uppercase tracking-wide">{{ $project->meta_label ?: 'Date TBA' }}</span>
                              </div>
                              <h4 class="font-bold text-[#5B1E22] text-[20px] leading-tight mb-2">{{ $project->title }}</h4>
                              <p class="text-black/60 text-[14px] leading-relaxed m-0 mb-4">{{ $project->description }}</p>
                              <div class="inline-flex items-center gap-2 text-[13px] text-gray-600 bg-gray-50 px-4 py-2 rounded-lg border border-gray-100">
                                <span class="font-semibold text-gray-700">{{ $project->secondary_meta ?: 'Advisor TBA' }}</span>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    @else
                      <p class="text-center text-gray-500 m-0">No student project data found yet.</p>
                    @endif
                  </div>

                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    {{-- ===================== ALUMNI SECTION ===================== --}}
    <section id="alumni" class="py-[40px] lg:py-[40px] relative overflow-hidden maroon-gradient-base">
      <div class="absolute inset-0 z-0 opacity-[0.04] pointer-events-none" style="background-image: linear-gradient(#ffffff 0.5px, transparent 0.5px), linear-gradient(90deg, #ffffff 0.5px, transparent 0.5px); background-size: 50px 50px;"></div>
      <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] z-20 shadow-[0_0_15px_rgba(200,179,125,0.3)]"></div>

      <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-[1150px] mx-auto w-full">
            <div class="text-center mb-10" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100">
              <p class="font-bold text-[#D4AF37] text-[11px] tracking-[4px] uppercase mb-2">Our Legacy</p>
              <h2 class="text-[32px] md:text-[38px] font-bold text-white uppercase tracking-tight">
                Our <span class="text-[#D4AF37]">Alumni</span>
              </h2>
              <div class="w-20 h-1.5 bg-[#D4AF37] mx-auto mt-4 shadow-[0_0_15px_rgba(212,175,55,0.3)]"></div>
            </div>

            <div class="border-y border-white/20 py-[25px] mb-[40px] lg:mb-[50px]" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-200">
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-0">
                <div class="text-center md:border-r border-white/20" x-data="{ count: 0, target: 1000, animate(){ const start = performance.now(); const duration = 2000; const tick = (now) => { const progress = Math.min((now - start) / duration, 1); this.count = this.target * progress; if (progress < 1) requestAnimationFrame(tick); }; requestAnimationFrame(tick); } }" x-intersect.once="animate()">
                  <h3 x-text="`${Math.round(count).toLocaleString('en-US')}+`" class="font-bold text-[32px] lg:text-[40px] text-[#D4AF37] leading-none mb-1">1,000+</h3>
                  <p class="text-white font-bold text-[11px] tracking-[2px] uppercase opacity-100 m-0">Total Alumni</p>
                </div>
                <div class="text-center md:border-r border-white/20" x-data="{ count: 0, target: 80, animate(){ const start = performance.now(); const duration = 1700; const tick = (now) => { const progress = Math.min((now - start) / duration, 1); this.count = this.target * progress; if (progress < 1) requestAnimationFrame(tick); }; requestAnimationFrame(tick); } }" x-intersect.once="animate()">
                  <h3 x-text="`${Math.round(count)}%`" class="font-bold text-[32px] lg:text-[40px] text-[#D4AF37] leading-none mb-1">80%</h3>
                  <p class="text-white font-bold text-[11px] tracking-[2px] uppercase opacity-100 m-0">Employed < 6mo</p>
                </div>
                <div class="text-center" x-data="{ count: 0, target: 6, animate(){ const start = performance.now(); const duration = 1400; const tick = (now) => { const progress = Math.min((now - start) / duration, 1); this.count = this.target * progress; if (progress < 1) requestAnimationFrame(tick); }; requestAnimationFrame(tick); } }" x-intersect.once="animate()">
                  <h3 x-text="Math.round(count)" class="font-bold text-[32px] lg:text-[40px] text-[#D4AF37] leading-none mb-1">6</h3>
                  <p class="text-white font-bold text-[11px] tracking-[2px] uppercase opacity-100 m-0">Countries Reach</p>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-300">
              <div class="glass-card rounded-3xl p-6 lg:p-8 flex flex-col transition-all duration-[1200ms] ease-out delay-100" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
                <h4 class="text-[#D4AF37] font-bold text-[14px] tracking-[3px] uppercase text-center mb-6">Testimonials</h4>
                <div class="space-y-6">
                  <div class="relative pl-6 border-l-2 border-[#D4AF37]/40">
                    <p class="text-white text-[14px] italic leading-relaxed mb-3 font-medium">
                      "This campus has wonderful IT facilities that helped me in my research! The curriculum is very industry-focused."
                    </p>
                    <div class="flex items-center gap-3">
                      <div class="w-8 h-8 bg-[#D4AF37] rounded-full flex items-center justify-center text-[#5B1E22] font-bold text-xs">JD</div>
                      <div>
                        <p class="text-white font-bold text-[13px] m-0">Jane Doe</p>
                        <p class="text-white font-medium text-[10px] m-0 uppercase tracking-widest opacity-80">Google SE, 2022</p>
                      </div>
                    </div>
                  </div>
                  <div class="relative pl-6 border-l-2 border-[#D4AF37]/40">
                    <p class="text-white text-[14px] italic leading-relaxed mb-3 font-medium">
                      "The learning environment here is top-notch. I felt fully prepared for my career at Microsoft."
                    </p>
                    <div class="flex items-center gap-3">
                      <div class="w-8 h-8 bg-[#D4AF37] rounded-full flex items-center justify-center text-[#5B1E22] font-bold text-xs">ZA</div>
                      <div>
                        <p class="text-white font-bold text-[13px] m-0">Zhang et al.</p>
                        <p class="text-white font-medium text-[10px] m-0 uppercase tracking-widest opacity-80">Microsoft SE, 2022</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="glass-card rounded-3xl p-6 lg:p-8 flex flex-col transition-all duration-[1200ms] ease-out delay-200" x-data="{ shown: false, seWidth: 0, devWidth: 0, animate(){ const start = performance.now(); const duration = 1600; const tick = (now) => { const progress = Math.min((now - start) / duration, 1); this.seWidth = 35 * progress; this.devWidth = 60 * progress; if (progress < 1) requestAnimationFrame(tick); }; requestAnimationFrame(tick); } }" x-intersect.once="shown = true; animate()" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
                <h4 class="text-[#D4AF37] font-bold text-[14px] tracking-[3px] uppercase text-center mb-6">Career Paths</h4>
                <div class="space-y-6">
                  <div>
                    <div class="flex justify-between items-center mb-2">
                      <span class="text-white text-[13px] font-bold tracking-wide uppercase">Software Engineer</span>
                      <span x-text="`${Math.round(seWidth)}%`" class="text-[#D4AF37] font-bold text-[14px]">35%</span>
                    </div>
                    <div class="h-1.5 w-full bg-white/20 rounded-full overflow-hidden">
                      <div class="h-full bg-[#D4AF37] rounded-full shadow-[0_0_10px_rgba(212,175,55,0.4)]" :style="`width: ${seWidth}%`"></div>
                    </div>
                  </div>
                  <div>
                    <div class="flex justify-between items-center mb-2">
                      <span class="text-white text-[13px] font-bold tracking-wide uppercase">Frontend/Backend Dev</span>
                      <span x-text="`${Math.round(devWidth)}%`" class="text-[#D4AF37] font-bold text-[14px]">60%</span>
                    </div>
                    <div class="h-1.5 w-full bg-white/20 rounded-full overflow-hidden">
                      <div class="h-full bg-[#D4AF37] rounded-full shadow-[0_0_10px_rgba(212,175,55,0.4)]" :style="`width: ${devWidth}%`"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="glass-card rounded-3xl p-6 lg:p-8 flex flex-col transition-all duration-[1200ms] ease-out delay-300" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
                <h4 class="text-[#D4AF37] font-bold text-[14px] tracking-[3px] uppercase text-center mb-6">Alumni Network</h4>
                <div class="grid grid-cols-1 gap-3">
                  {{-- Dummy alumni partners showcase --}}
                  <div class="h-16 bg-white/10 rounded-xl border border-white/20 hover:bg-white/20 transition-colors px-4 flex items-center justify-between opacity-100">
                    <span class="text-white text-[12px] font-bold tracking-[1.2px] uppercase">NexaSoft Labs</span>
                    <span class="text-[#D4AF37] text-[11px] font-semibold uppercase tracking-[1px]">12 Alumni</span>
                  </div>
                  <div class="h-16 bg-white/10 rounded-xl border border-white/20 hover:bg-white/20 transition-colors px-4 flex items-center justify-between opacity-100">
                    <span class="text-white text-[12px] font-bold tracking-[1.2px] uppercase">CloudMint Tech</span>
                    <span class="text-[#D4AF37] text-[11px] font-semibold uppercase tracking-[1px]">8 Alumni</span>
                  </div>
                  <div class="h-16 bg-white/10 rounded-xl border border-white/20 hover:bg-white/20 transition-colors px-4 flex items-center justify-between opacity-100">
                    <span class="text-white text-[12px] font-bold tracking-[1.2px] uppercase">ByteForge Studio</span>
                    <span class="text-[#D4AF37] text-[11px] font-semibold uppercase tracking-[1px]">6 Alumni</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    {{-- ===================== NEWS SECTION ===================== --}}
    <section id="news" class="py-[80px] lg:py-[100px] bg-[#fff6f0] relative overflow-hidden" style="background-image: radial-gradient(circle at 10% 15%, rgba(91,30,34,0.08) 0%, transparent 38%), radial-gradient(circle at 85% 85%, rgba(200,179,125,0.2) 0%, transparent 42%);">
      <div class="absolute inset-0 z-0 opacity-[0.04] pointer-events-none" style="background-image: linear-gradient(#5B1E22 1px, transparent 1px), linear-gradient(90deg, #5B1E22 1px, transparent 1px); background-size: 60px 60px;"></div>
      <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] z-20 shadow-[0_0_15px_rgba(200,179,125,0.25)]"></div>

      <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-[1150px] mx-auto w-full">

            <div class="mb-[50px] lg:mb-[60px] text-center" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100">
              <p class="font-bold text-[#D4AF37] text-[11px] tracking-[4px] uppercase mb-3">Campus Stories</p>
              <h2 class="text-[#5B1E22] font-bold text-[30px] lg:text-[40px] uppercase tracking-tight mb-3">Recent <span class="text-[#D4AF37]">News</span></h2>
              <div class="w-[90px] h-[3px] bg-[#C8B37D] mx-auto shadow-[0_0_12px_rgba(200,179,125,0.25)]"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-stretch">

              <div class="lg:col-span-7 h-full" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-200">
                <a href="#" class="block bg-white/80 border border-[#5B1E22]/10 rounded-[28px] p-[18px] lg:p-[20px] shadow-[0_16px_40px_rgba(0,0,0,0.1)] transition-all duration-500 hover:-translate-y-[6px] hover:border-[#5B1E22]/30 hover:shadow-[0_24px_50px_rgba(91,30,34,0.16)] group no-underline h-full backdrop-blur-sm">
                  <div class="relative w-full h-[250px] sm:h-[320px] rounded-[18px] overflow-hidden mb-[20px]">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-[1.06] z-0" style="background-image: url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1000&q=80');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#2a0e11] via-[#5B1E22]/70 to-transparent z-10"></div>
                    <span class="absolute top-4 left-4 z-20 bg-[#D4AF37] text-[#5B1E22] text-[10px] font-bold px-[12px] py-[5px] rounded-full uppercase tracking-[1px]">Featured</span>
                  </div>
                  <div class="px-1">
                    <p class="text-[#D4AF37] text-[12px] font-semibold uppercase tracking-[2px] mb-2">12 March 2700</p>
                    <h3 class="text-[#5B1E22] text-[21px] lg:text-[24px] font-semibold mb-2 leading-tight group-hover:text-[#D4AF37] transition-colors duration-300">Uniji's Better Outing</h3>
                    <p class="text-[#5B1E22]/70 text-[14px] leading-relaxed m-0">A closer look at this year's flagship campus event, featuring student showcases, collaborative tech exhibits, and a stronger alumni-industry connection.</p>
                  </div>
                </a>
              </div>

              <div class="lg:col-span-5 flex flex-col gap-5 justify-between" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-300">

                <a href="#" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="relative w-full h-[110px] rounded-[24px] overflow-hidden border border-[#5B1E22]/10 shadow-[0_12px_24px_rgba(91,30,34,0.12)] group no-underline block transition-all duration-[1200ms] ease-out delay-100">
                  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80');"></div>
                  <div class="absolute inset-0 bg-white/25 z-10"></div>
                  <div class="absolute inset-0 bg-[#5B1E22]/88 backdrop-blur-[4px] flex items-center justify-end pr-[26px] translate-x-[101%] group-hover:translate-x-0 transition-transform duration-500 ease-[cubic-bezier(0.165,0.84,0.44,1)] z-20">
                    <div class="text-right translate-x-[20px] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-400 delay-150">
                      <p class="text-[#D4AF37] text-[11px] font-semibold uppercase tracking-[1.5px] mb-1">Seminar</p>
                      <h4 class="text-white text-[16px] lg:text-[17px] font-semibold m-0">Tech Seminar 2026</h4>
                      <span class="text-[#D4AF37] text-[12px] font-medium">Read full article &rarr;</span>
                    </div>
                  </div>
                </a>

                <a href="#" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="relative w-full h-[110px] rounded-[24px] overflow-hidden border border-[#5B1E22]/10 shadow-[0_12px_24px_rgba(91,30,34,0.12)] group no-underline block transition-all duration-[1200ms] ease-out delay-200">
                  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=80');"></div>
                  <div class="absolute inset-0 bg-white/25 z-10"></div>
                  <div class="absolute inset-0 bg-[#5B1E22]/88 backdrop-blur-[4px] flex items-center justify-end pr-[26px] translate-x-[101%] group-hover:translate-x-0 transition-transform duration-500 ease-[cubic-bezier(0.165,0.84,0.44,1)] z-20">
                    <div class="text-right translate-x-[20px] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-400 delay-150">
                      <p class="text-[#D4AF37] text-[11px] font-semibold uppercase tracking-[1.5px] mb-1">Community</p>
                      <h4 class="text-white text-[16px] lg:text-[17px] font-semibold m-0">Alumni Gathering</h4>
                      <span class="text-[#D4AF37] text-[12px] font-medium">Read full article &rarr;</span>
                    </div>
                  </div>
                </a>

                <a href="#" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="relative w-full h-[110px] rounded-[24px] overflow-hidden border border-[#5B1E22]/10 shadow-[0_12px_24px_rgba(91,30,34,0.12)] group no-underline block transition-all duration-[1200ms] ease-out delay-300">
                  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80');"></div>
                  <div class="absolute inset-0 bg-white/25 z-10"></div>
                  <div class="absolute inset-0 bg-[#5B1E22]/88 backdrop-blur-[4px] flex items-center justify-end pr-[26px] translate-x-[101%] group-hover:translate-x-0 transition-transform duration-500 ease-[cubic-bezier(0.165,0.84,0.44,1)] z-20">
                    <div class="text-right translate-x-[20px] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-400 delay-150">
                      <p class="text-[#D4AF37] text-[11px] font-semibold uppercase tracking-[1.5px] mb-1">Achievement</p>
                      <h4 class="text-white text-[16px] lg:text-[17px] font-semibold m-0">IEEEyesist12 Winner</h4>
                      <span class="text-[#D4AF37] text-[12px] font-medium">Read full article &rarr;</span>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="mt-[40px] lg:mt-[50px] text-center" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-400">
              <a href="{{ url('/home/news') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-[8px] bg-[#5B1E22] text-white font-bold text-[14px] lg:text-[15px] px-[30px] lg:px-[35px] py-[10px] lg:py-[12px] rounded-full border border-[#5B1E22] no-underline transition-all duration-300 hover:bg-[#D4AF37] hover:border-[#D4AF37] hover:text-[#5B1E22] hover:-translate-y-[2px] hover:shadow-[0_8px_18px_rgba(91,30,34,0.2)]">
                Read more
                <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </a>
            </div>

        </div>
      </div>
    </section>

    {{-- ===================== EVENTS TIMELINE SECTION ===================== --}}
    <section id="events" class="py-[80px] lg:py-[100px] relative overflow-hidden maroon-gradient-base border-b-8 border-[#D4AF37]">
      <div class="absolute inset-0 z-0 opacity-[0.04] pointer-events-none" style="background-image: linear-gradient(#ffffff 0.5px, transparent 0.5px), linear-gradient(90deg, #ffffff 0.5px, transparent 0.5px); background-size: 50px 50px;"></div>
      <div class="absolute top-0 left-0 w-full h-[9px] bg-[#C8B37D] z-20 shadow-[0_0_15px_rgba(200,179,125,0.3)]"></div>

      <div class="container mx-auto px-6 relative z-10 max-w-[1150px]">
        
        <div class="text-center mb-20" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100">
          <p class="font-bold text-[#D4AF37] text-[11px] tracking-[4px] uppercase mb-4">Mark Your Calendar</p>
          <h2 class="text-white font-bold text-[32px] md:text-[38px] mb-4 uppercase tracking-tight">Upcoming Events</h2>
          <div class="w-20 h-1.5 bg-[#D4AF37] mx-auto shadow-[0_0_15px_rgba(212,175,55,0.3)]"></div>
        </div>

        <div class="max-w-[980px] mx-auto bg-white/5 border border-white/15 rounded-[28px] p-6 lg:p-10 backdrop-blur-md shadow-[0_20px_45px_rgba(0,0,0,0.2)]" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-200">
          @php
            $displayUpcomingEvents = ($upcomingEvents ?? collect())->take(4)->values();
          @endphp

          @if ($displayUpcomingEvents->isNotEmpty())
            <div class="relative max-w-[900px] mx-auto">
              <div class="absolute left-[39px] md:left-1/2 md:-ml-[1.5px] top-0 bottom-0 w-[3px] bg-gradient-to-b from-[#D4AF37] via-[#D4AF37]/30 to-transparent z-0 shadow-[0_0_15px_rgba(212,175,55,0.5)]"></div>

              <div class="space-y-12 lg:space-y-16 relative z-10">
              @foreach ($displayUpcomingEvents as $index => $event)
                @php
                  $isLeftDesktopLabel = $index % 2 === 0;
                  $eventDay = $event->event_date ? $event->event_date->format('d') : '--';
                  $eventMonth = $event->event_date ? strtoupper($event->event_date->format('M')) : 'TBD';
                  $eventDateLabel = $event->event_date ? $event->event_date->format('d M Y') : 'Date TBA';
                  $startTimeLabel = $event->start_time ? date('h:i A', strtotime($event->start_time)) : null;
                  $endTimeLabel = $event->end_time ? date('h:i A', strtotime($event->end_time)) : null;
                  $eventTimeLabel = $startTimeLabel && $endTimeLabel
                    ? $startTimeLabel . ' - ' . $endTimeLabel
                    : ($startTimeLabel ?? 'Time TBA');
                @endphp

                <div x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="flex flex-col md:flex-row items-start md:items-center justify-between group transition-all duration-[1200ms] ease-out">
                  @if ($isLeftDesktopLabel)
                    <div class="hidden md:block w-5/12 text-right pr-10">
                      <p class="text-[#D4AF37] font-bold text-[13px] tracking-widest uppercase mb-1">{{ $eventDateLabel }}</p>
                      <h4 class="text-white text-[20px] font-semibold">{{ $event->title }}</h4>
                    </div>
                  @else
                    <div class="w-full md:w-5/12 pl-24 md:pl-0 md:pr-10 mt-[-65px] md:mt-0 order-3 md:order-1 md:text-right">
                      <div class="bg-white/5 border border-white/10 rounded-[20px] p-6 hover:bg-white/10 hover:border-[#D4AF37]/50 transition-all backdrop-blur-md shadow-[0_10px_30px_rgba(0,0,0,0.1)] group-hover:-translate-y-1 duration-500 cursor-pointer">
                        <div class="md:hidden mb-3">
                          <p class="text-[#D4AF37] font-bold text-[11px] tracking-widest uppercase mb-1">{{ $eventDateLabel }}</p>
                          <h4 class="text-white text-[18px] font-semibold leading-tight">{{ $event->title }}</h4>
                        </div>
                        <div class="space-y-2">
                          <p class="text-white/80 text-[14px] m-0 flex md:justify-end items-center gap-2 font-medium">
                            <svg class="w-4 h-4 text-[#D4AF37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            {{ $event->location ?: 'Location TBA' }}
                          </p>
                          <p class="text-white/80 text-[14px] m-0 flex md:justify-end items-center gap-2 font-medium">
                            <svg class="w-4 h-4 text-[#D4AF37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{ $eventTimeLabel }}
                          </p>
                        </div>
                      </div>
                    </div>
                  @endif

                  <div class="w-[80px] h-[80px] rounded-full bg-[#3A1316] border-[4px] border-[#5B1E22] group-hover:border-[#D4AF37] flex flex-col items-center justify-center shrink-0 shadow-[0_0_25px_rgba(0,0,0,0.4)] transition-all duration-500 z-10 relative md:mx-auto {{ $isLeftDesktopLabel ? '' : 'order-2' }} group-hover:scale-110">
                    <span class="text-white group-hover:text-[#D4AF37] font-bold text-[26px] leading-none transition-colors">{{ $eventDay }}</span>
                    <span class="text-white/50 text-[10px] font-bold uppercase tracking-widest mt-1">{{ $eventMonth }}</span>
                  </div>

                  @if ($isLeftDesktopLabel)
                    <div class="w-full md:w-5/12 pl-24 md:pl-10 mt-[-65px] md:mt-0">
                      <div class="bg-white/5 border border-white/10 rounded-[20px] p-6 hover:bg-white/10 hover:border-[#D4AF37]/50 transition-all backdrop-blur-md shadow-[0_10px_30px_rgba(0,0,0,0.1)] group-hover:-translate-y-1 duration-500 cursor-pointer">
                        <div class="md:hidden mb-3">
                          <p class="text-[#D4AF37] font-bold text-[11px] tracking-widest uppercase mb-1">{{ $eventDateLabel }}</p>
                          <h4 class="text-white text-[18px] font-semibold leading-tight">{{ $event->title }}</h4>
                        </div>
                        <div class="space-y-2">
                          <p class="text-white/80 text-[14px] m-0 flex items-center gap-2 font-medium">
                            <svg class="w-4 h-4 text-[#D4AF37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            {{ $event->location ?: 'Location TBA' }}
                          </p>
                          <p class="text-white/80 text-[14px] m-0 flex items-center gap-2 font-medium">
                            <svg class="w-4 h-4 text-[#D4AF37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{ $eventTimeLabel }}
                          </p>
                        </div>
                      </div>
                    </div>
                  @else
                    <div class="hidden md:block w-5/12 text-left pl-10 order-1 md:order-3">
                      <p class="text-[#D4AF37] font-bold text-[13px] tracking-widest uppercase mb-1">{{ $eventDateLabel }}</p>
                      <h4 class="text-white text-[20px] font-semibold">{{ $event->title }}</h4>
                    </div>
                  @endif
                </div>
              @endforeach
              </div>
            </div>
          @else
            <p class="text-white/80 text-center text-[15px] m-0">No upcoming events yet. Add records to the events table to populate this section.</p>
          @endif
        </div>
      </div>
    </section>

    {{-- ===================== COLLABORATIONS MARQUEE SECTION ===================== --}}
    <section id="collaborations" class="relative py-[100px] lg:py-[150px] bg-fixed bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1920&q=80');">
      
      <div class="absolute inset-0 bg-[#3A1316]/90 z-0"></div>
      <div class="absolute inset-0 z-0 opacity-[0.1]" style="background-image: radial-gradient(#D4AF37 1.5px, transparent 1.5px); background-size: 30px 30px;"></div>

      <div class="container mx-auto relative z-10 w-full overflow-hidden">
        
        <div class="text-center mb-16 max-w-[1150px] mx-auto px-6" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'" class="transition-all duration-[1200ms] ease-out delay-100">
          <p class="font-bold text-[#D4AF37] text-[12px] tracking-[4px] uppercase mb-4">Global Network</p>
          <h2 class="text-white font-bold text-[36px] md:text-[44px] mb-6 uppercase tracking-tight">Academic Collaborations</h2>
          <div class="w-24 h-1.5 bg-[#D4AF37] mx-auto shadow-[0_0_15px_rgba(212,175,55,0.3)]"></div>
          <p class="text-white/70 mt-8 max-w-2xl mx-auto text-[15px] lg:text-[16px] leading-relaxed">
            Partnering with top-tier universities and industry leaders worldwide to provide our students with world-class exchange programs, joint research, and dual-degree opportunities.
          </p>
        </div>

        <div class="relative w-full overflow-hidden mt-16 lg:mt-24 group transition-all duration-[1200ms] ease-out delay-300" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
          <div class="absolute left-6 right-6 md:left-10 md:right-10 top-1/2 -translate-y-1/2 h-[110px] md:h-[145px] bg-gradient-to-r from-white/10 via-white/18 to-white/10 border border-[#D4AF37]/30 rounded-3xl shadow-[0_24px_45px_rgba(0,0,0,0.28)] backdrop-blur-md z-10 pointer-events-none"></div>
          
          <div class="absolute left-0 top-0 bottom-0 w-32 md:w-56 bg-gradient-to-r from-[#3A1316] to-transparent z-30 pointer-events-none"></div>
          <div class="absolute right-0 top-0 bottom-0 w-32 md:w-56 bg-gradient-to-l from-[#3A1316] to-transparent z-30 pointer-events-none"></div>

          <div class="animate-marquee relative z-20 flex items-center gap-20 md:gap-32 lg:gap-40 pl-20 md:pl-32 lg:pl-40">
            @php
              $collaborationLogos = [
               '/style/images/collaboration/UK-Birmingham.png',
               '/style/images/collaboration/UK-Durham.png',
               '/style/images/collaboration/UK-Liverpool.png',
               '/style/images/collaboration/UK-Newcastle.jpg',
               '/style/images/collaboration/USF.png',
               '/style/images/collaboration/US - WMU.png',
               '/style/images/collaboration/CN-XJTLU.png',
               '/style/images/collaboration/MonashUni.png',
               '/style/images/collaboration/Aus - MonColl.png',
              ];
              $marqueeLogos = array_merge($collaborationLogos, $collaborationLogos);
            @endphp

            @foreach($marqueeLogos as $logo)
              <div class="flex items-center justify-center shrink-0 opacity-100 hover:-translate-y-1 hover:scale-105 transition-all duration-300 cursor-pointer">
               <div class="relative w-[150px] h-[90px] md:w-[220px] md:h-[120px] flex items-center justify-center">
                <div class="absolute w-[120%] h-[70%] bg-white/35 rounded-full blur-2xl"></div>
                <img src="{{ $logo }}" alt="Collaboration university logo" class="relative z-10 max-w-full max-h-full object-contain drop-shadow-[0_10px_20px_rgba(0,0,0,0.28)]">
               </div>
              </div>
            @endforeach

          </div>
        </div>
      </div>
    </section>

    {{-- ===================== GLOBAL FOOTER COMPONENT ===================== --}}
    <x-footer />
</x-layout>