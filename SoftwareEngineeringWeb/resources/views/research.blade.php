{{-- ========================================
    Research Page Layout & Styling
    ======================================== --}}
<x-layout>
  <x-header activePage="research" />

  {{-- Page-specific styles --}}
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #fdfbf7; }
    [x-cloak] { display: none !important; }
    
    /* Global Background Pattern */
    .bg-tech-pattern {
      background-image: radial-gradient(rgba(91, 0, 0, 0.08) 2px, transparent 2px);
      background-size: 40px 40px;
    }
  </style>

  {{-- ========================================
      Main Background Container
      ======================================== --}}
  <div class="bg-[#fdfbf7] min-h-screen">
    
    {{-- ========================================
        Hero Banner Section
        ======================================== --}}
    <x-hero-banner 
        image="/style/images/art/UNIJIBanner.jpg" 
        subtitle="Research & Conferences"
        title="Software<br>Engineering"
        breadcrumbActive="Research"
    />

    {{-- ========================================
        Tab Navigation Setup
        ======================================== --}}
    @php
        $researchTabs = [
            ['id' => 'btn-focus', 'label' => 'Focus Areas & Groups', 'active' => true],
            ['id' => 'btn-conferences', 'label' => 'Conferences & Seminars', 'active' => false],
        ];
    @endphp
    <x-sub-navbar :tabs="$researchTabs" />

    {{-- ========================================
        Main Content Area with Background Effects
        ======================================== --}}
    <main class="relative min-h-[800px] pb-24 overflow-hidden">
      <div class="absolute inset-0 bg-tech-pattern opacity-40 z-0 pointer-events-none"></div>
      <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-[#f3c83d]/10 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>

      {{-- ========================================
          TAB 1: Focus Areas & Research Groups
          ======================================== --}}
      <div id="panel-focus" class="tab-content-panel block pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          
          {{-- Core Research Areas Section --}}
          <div class="mb-24">
            <div class="mb-12 text-center md:text-left">
              <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Core Research Areas</h2>
              <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
              <p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Our faculty and students push the boundaries of modern computing across four primary domains of software engineering.</p>
            </div>

            {{-- Four Research Area Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              
              {{-- Card 1: Intelligent Systems --}}
              <div class="relative bg-white border border-gray-200 rounded-[24px] p-8 flex flex-col items-center text-center shadow-[0_5px_15px_rgba(0,0,0,0.03)] hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group overflow-hidden">
                <div class="absolute inset-0 pointer-events-none opacity-[0.03] group-hover:opacity-[0.06] transition-opacity duration-500" style="background-image: radial-gradient(#5b0000 2px, transparent 2px); background-size: 20px 20px;"></div>
                
                <div class="relative z-10 w-16 h-16 bg-blue-50 text-blue-600 rounded-[20px] flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="relative z-10 text-[#5b0000] font-bold text-[18px] mb-3">Intelligent Systems</h3>
                <p class="relative z-10 text-gray-500 text-[13px] leading-relaxed m-0">AI, Machine Learning, and Computer Vision</p>
              </div>
              
              {{-- Card 2: Cybersecurity --}}
              <div class="relative bg-white border border-gray-200 rounded-[24px] p-8 flex flex-col items-center text-center shadow-[0_5px_15px_rgba(0,0,0,0.03)] hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group overflow-hidden">
                <div class="absolute inset-0 pointer-events-none opacity-[0.03] group-hover:opacity-[0.06] transition-opacity duration-500" style="background-image: radial-gradient(#5b0000 2px, transparent 2px); background-size: 20px 20px;"></div>
                
                <div class="relative z-10 w-16 h-16 bg-red-50 text-red-600 rounded-[20px] flex items-center justify-center mb-6 group-hover:bg-red-600 group-hover:text-white transition-colors">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="relative z-10 text-[#5b0000] font-bold text-[18px] mb-3">Cybersecurity</h3>
                <p class="relative z-10 text-gray-500 text-[13px] leading-relaxed m-0">Cryptography, Network Security, and Penetration Testing</p>
              </div>

              {{-- Card 3: Cloud & Distributed Systems --}}
              <div class="relative bg-white border border-gray-200 rounded-[24px] p-8 flex flex-col items-center text-center shadow-[0_5px_15px_rgba(0,0,0,0.03)] hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group overflow-hidden">
                <div class="absolute inset-0 pointer-events-none opacity-[0.03] group-hover:opacity-[0.06] transition-opacity duration-500" style="background-image: radial-gradient(#5b0000 2px, transparent 2px); background-size: 20px 20px;"></div>
                
                <div class="relative z-10 w-16 h-16 bg-green-50 text-green-600 rounded-[20px] flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="relative z-10 text-[#5b0000] font-bold text-[18px] mb-3">Cloud & Distributed</h3>
                <p class="relative z-10 text-gray-500 text-[13px] leading-relaxed m-0">Microservices, Edge Computing, and IoT Networks</p>
              </div>

              {{-- Card 4: Software Architecture --}}
              <div class="relative bg-white border border-gray-200 rounded-[24px] p-8 flex flex-col items-center text-center shadow-[0_5px_15px_rgba(0,0,0,0.03)] hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group overflow-hidden">
                <div class="absolute inset-0 pointer-events-none opacity-[0.03] group-hover:opacity-[0.06] transition-opacity duration-500" style="background-image: radial-gradient(#5b0000 2px, transparent 2px); background-size: 20px 20px;"></div>
                
                <div class="relative z-10 w-16 h-16 bg-purple-50 text-purple-600 rounded-[20px] flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="relative z-10 text-[#5b0000] font-bold text-[18px] mb-3">Software Architecture</h3>
                <p class="relative z-10 text-gray-500 text-[13px] leading-relaxed m-0">Design Patterns, Agile Methods, and UI/UX</p>
              </div>
            </div>
          </div>

          {{-- Research Labs & Groups Section --}}
          <div>
            <div class="mb-12 text-center md:text-left">
              <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Research Labs & Groups</h2>
              <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
              <p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Join our specialized labs where theory meets practical application in state-of-the-art facilities.</p>
            </div>

            {{-- Lab Cards Container --}}
            <div class="space-y-8">
              
              {{-- Lab 1: Intelligent Systems & AI Lab (ISAL) --}}
              <div class="bg-white rounded-[32px] border border-gray-200 shadow-[0_15px_40px_rgba(0,0,0,0.04)] overflow-hidden flex flex-col lg:flex-row group hover:shadow-2xl transition-all duration-500">
                <div class="w-full lg:w-[45%] bg-gray-100 relative overflow-hidden min-h-[300px] lg:min-h-auto">
                   <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80" alt="Lab" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                   <div class="absolute inset-0 bg-[#5b0000]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                
                <div class="w-full lg:w-[55%] p-8 md:p-12 flex flex-col justify-center relative overflow-hidden">
                   <div class="absolute inset-0 pointer-events-none opacity-[0.03]" style="background-image: repeating-linear-gradient(45deg, #5b0000, #5b0000 1px, transparent 1px, transparent 16px);"></div>

                   <div class="relative z-10 flex items-center gap-3 mb-4">
                     <span class="px-3 py-1 bg-[#5b0000]/10 border border-[#5b0000]/20 text-[#5b0000] font-bold text-[11px] uppercase tracking-widest rounded-md">Research Group</span>
                   </div>
                   
                   <h3 class="relative z-10 text-[26px] text-[#5b0000] font-bold mb-4">Intelligent Systems & AI Lab (ISAL)</h3>
                   <p class="relative z-10 text-gray-600 text-[15px] leading-relaxed mb-8">Dedicated to developing algorithms that allow computers to learn from and make decisions based on data. The lab currently focuses on natural language processing for low-resource languages and computer vision for medical diagnostics.</p>
                   
                   <div class="relative z-10 flex flex-wrap gap-2 mb-8">
                      <span class="bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 px-4 py-1.5 rounded-full text-[12px] font-medium">Deep Learning</span>
                      <span class="bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 px-4 py-1.5 rounded-full text-[12px] font-medium">NLP</span>
                      <span class="bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 px-4 py-1.5 rounded-full text-[12px] font-medium">Generative AI</span>
                   </div>

                   <div class="relative z-10 flex items-center justify-between border-t border-gray-200 pt-6">
                     <div class="flex items-center gap-4">
                       <div class="w-14 h-14 rounded-full bg-gray-200 overflow-hidden border-2 border-[#f3c83d] shadow-md">
                         <img src="/style/images/art/kenny.png" alt="Director" class="w-full h-full object-cover">
                       </div>
                       <div>
                         <p class="text-[15px] font-bold text-[#5b0000] m-0 leading-tight">Dr. Nicholas Kenny</p>
                         <p class="text-[12px] text-gray-500 font-medium m-0 mt-1 uppercase tracking-wider">Lab Director</p>
                       </div>
                     </div>
                   </div>
                </div>
              </div>

              {{-- Lab 2: Secure Network Architecture Group --}}
              <div class="bg-white rounded-[32px] border border-gray-200 shadow-[0_15px_40px_rgba(0,0,0,0.04)] overflow-hidden flex flex-col lg:flex-row-reverse group hover:shadow-2xl transition-all duration-500">
                <div class="w-full lg:w-[45%] bg-gray-100 relative overflow-hidden min-h-[300px] lg:min-h-auto">
                   <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=800&q=80" alt="Lab" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                   <div class="absolute inset-0 bg-[#5b0000]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                
                <div class="w-full lg:w-[55%] p-8 md:p-12 flex flex-col justify-center relative overflow-hidden">
                   <div class="absolute inset-0 pointer-events-none opacity-[0.03]" style="background-image: repeating-linear-gradient(-45deg, #5b0000, #5b0000 1px, transparent 1px, transparent 16px);"></div>

                   <div class="relative z-10 flex items-center gap-3 mb-4">
                     <span class="px-3 py-1 bg-[#5b0000]/10 border border-[#5b0000]/20 text-[#5b0000] font-bold text-[11px] uppercase tracking-widest rounded-md">Research Group</span>
                   </div>
                   
                   <h3 class="relative z-10 text-[26px] text-[#5b0000] font-bold mb-4">Secure Network Architecture Group</h3>
                   <p class="relative z-10 text-gray-600 text-[15px] leading-relaxed mb-8">Investigating vulnerabilities in modern cloud infrastructure and developing next-generation encryption protocols. Partnered heavily with local fintech institutions to stress-test real-world banking systems.</p>
                   
                   <div class="relative z-10 flex flex-wrap gap-2 mb-8">
                      <span class="bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 px-4 py-1.5 rounded-full text-[12px] font-medium">Cryptography</span>
                      <span class="bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 px-4 py-1.5 rounded-full text-[12px] font-medium">Cloud Security</span>
                      <span class="bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 px-4 py-1.5 rounded-full text-[12px] font-medium">Pen-Testing</span>
                   </div>

                   <div class="relative z-10 flex items-center justify-between border-t border-gray-200 pt-6">
                     <div class="flex items-center gap-4">
                       <div class="w-14 h-14 rounded-full bg-gray-200 overflow-hidden border-2 border-[#f3c83d] shadow-md">
                         <img src="https://i.pravatar.cc/150?img=32" alt="Director" class="w-full h-full object-cover">
                       </div>
                       <div>
                         <p class="text-[15px] font-bold text-[#5b0000] m-0 leading-tight">Dr. Sarah Jenkins</p>
                         <p class="text-[12px] text-gray-500 font-medium m-0 mt-1 uppercase tracking-wider">Lab Director</p>
                       </div>
                     </div>
                   </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      {{-- ========================================
          TAB 2: Conferences & Seminars
          ======================================== --}}
      <div id="panel-conferences" class="tab-content-panel hidden pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          
          {{-- Featured Conference Section --}}
          <div class="mb-20">
            <div class="mb-12 text-center md:text-left">
              <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Featured Conference</h2>
              <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
            </div>

            {{-- Featured Conference Card --}}
            <div class="relative bg-gradient-to-br from-[#4a0d0d] to-[#2a0808] rounded-[32px] overflow-hidden shadow-[0_20px_50px_rgba(91,0,0,0.2)] border border-[#f3c83d]/20 group">
              <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('/style/images/research/IICD2026.jpg') }}" alt="IICD 2026 Conference" class="w-full h-full object-cover opacity-70 saturate-115 contrast-105 group-hover:scale-105 transition-transform duration-1000">
              </div>
              <div class="absolute inset-0 bg-gradient-to-r from-[#2a0808]/88 via-[#2a0808]/70 to-[#2a0808]/50"></div>

              <div class="relative z-10 p-10 md:p-16 max-w-3xl">
                <span class="inline-block bg-[#f3c83d] text-[#5b0000] font-bold px-4 py-1.5 rounded-full text-[11px] tracking-[2px] uppercase mb-6 shadow-md">31st March 2026</span>
                <h3 class="text-white text-[32px] md:text-[40px] font-bold leading-tight mb-4">UNIJI International Conference Day (IICD 2026)</h3>
                <p class="text-white/70 text-[16px] leading-relaxed mb-8 max-w-2xl">A valuable opportunity to hear directly from professionals representing international companies (AMD, Kiwoom Securities, JKTGO). The session will provide insights into current industry trends and future career opportunities.</p>
                
                <div class="flex flex-col sm:flex-row items-center gap-4">
                  <a href="#" class="w-full sm:w-auto text-center bg-white text-[#5b0000] px-8 py-4 rounded-full font-bold text-[13px] uppercase tracking-widest hover:bg-[#f3c83d] transition-colors shadow-lg no-underline">Read More</a>
                </div>
              </div>
            </div>
          </div>

          {{-- Recent Presentations Section --}}
          <div>
            <div class="mb-12 text-center md:text-left">
              <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Recent Presentations</h2>
              <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
              <p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Explore the latest research, journals, and conference papers published by our faculty and students.</p>
            </div>

            {{-- Presentations Container --}}
            <div class="bg-white border border-gray-200 rounded-[32px] p-6 md:p-12 shadow-[0_10px_30px_rgba(0,0,0,0.03)]">
              
              {{-- Presentation 1 --}}
              <div class="relative flex flex-col md:flex-row gap-6 md:gap-10 py-8 border-b border-gray-100 last:border-0 group overflow-hidden">
                 
                 <svg class="absolute -right-8 -bottom-8 w-40 h-40 text-gray-200 opacity-0 group-hover:opacity-[0.25] transition-all duration-700 pointer-events-none transform group-hover:scale-110 group-hover:-rotate-12" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>

                 <div class="relative z-10 w-[140px] shrink-0 md:border-r border-gray-100 md:pr-6">
                    <p class="text-[#f3c83d] font-bold text-[15px] uppercase tracking-widest m-0 mb-1">Mar 2026</p>
                    <p class="text-gray-400 text-[13px] font-medium m-0 flex items-center gap-1.5">
                       <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                       UNIJI, ID
                    </p>
                 </div>
                 <div class="relative z-10 flex-1">
                    <h4 class="text-[18px] md:text-[20px] text-[#5b0000] font-bold mb-3 group-hover:text-[#D4AF37] transition-colors cursor-pointer leading-tight">"Optimizing Face Recognition Attendance Systems in High-Density Campus Environments"</h4>
                    <p class="text-gray-600 text-[14px] leading-relaxed mb-4">Presented at the 14th IEEE International Conference on Smart Education. The paper explores the H1a hypothesis regarding user acceptance rates among university students.</p>
                    <div class="flex flex-wrap items-center justify-between gap-4">
                       <div class="flex items-center gap-2 text-[13px] text-gray-500 bg-gray-50 px-4 py-2 rounded-lg border border-gray-100">
                          <span class="font-medium text-gray-700">Dr. Nicholas Kenny</span>
                       </div>
                    </div>
                 </div>
              </div>

              {{-- Presentation 2 --}}
              <div class="relative flex flex-col md:flex-row gap-6 md:gap-10 py-8 border-b border-gray-100 last:border-0 group overflow-hidden">
                 
                 <svg class="absolute -right-8 -bottom-8 w-40 h-40 text-gray-200 opacity-0 group-hover:opacity-[0.25] transition-all duration-700 pointer-events-none transform group-hover:scale-110 group-hover:-rotate-12" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>

                 <div class="relative z-10 w-[140px] shrink-0 md:border-r border-gray-100 md:pr-6">
                    <p class="text-[#f3c83d] font-bold text-[15px] uppercase tracking-widest m-0 mb-1">April 2026</p>
                    <p class="text-gray-400 text-[13px] font-medium m-0 flex items-center gap-1.5">
                       <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                       UNIJI, ID
                    </p>
                 </div>
                 <div class="relative z-10 flex-1">
                    <h4 class="text-[18px] md:text-[20px] text-[#5b0000] font-bold mb-3 group-hover:text-[#D4AF37] transition-colors cursor-pointer leading-tight">"NIST Cybersecurity Framework 2.0: A Case Study on GitLab Infrastructure"</h4>
                    <p class="text-gray-600 text-[14px] leading-relaxed mb-4">A keynote seminar dissecting the cloud migration and compliance audit strategies for modern DevOps platforms, referencing GDPR and Indonesian privacy laws.</p>
                    <div class="flex flex-wrap items-center justify-between gap-4">
                       <div class="flex items-center gap-2 text-[13px] text-gray-500 bg-gray-50 px-4 py-2 rounded-lg border border-gray-100">
                          <span class="font-medium text-gray-700">Dr. Stella Putri</span>
                       </div>
                    </div>
                 </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </main>
  </div>

  <x-footer />

  {{-- ========================================
      Tab Navigation & URL Management Script
      ======================================== --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        {{-- Tab configuration mapping --}}
        const tabsInfo = [
            { btnId: 'btn-focus', panels: ['panel-focus'], title: 'Focus Areas & Groups', query: 'focus' },
            { btnId: 'btn-conferences', panels: ['panel-conferences'], title: 'Conferences & Seminars', query: 'conferences' }
        ];

        {{-- URL query parameter mapping --}}
        const tabQueryMap = {
            focus: 'btn-focus',
            conferences: 'btn-conferences',
            seminars: 'btn-conferences'
        };

        {{-- Get all tab elements --}}
        const allBtns = document.querySelectorAll('.tab-btn');
        const allPanels = document.querySelectorAll('.tab-content-panel');
        const breadcrumb = document.getElementById('breadcrumb-page');

        {{-- Attach click handlers to each tab button --}}
        tabsInfo.forEach(tab => {
            const btn = document.getElementById(tab.btnId);
            if (!btn) return;

            btn.addEventListener('click', function(e) {
                e.preventDefault();

                {{-- Remove active state from all tabs --}}
                allBtns.forEach(b => {
                    b.classList.remove('text-[#5b0000]', 'bg-[#5b0000]/5');
                    b.classList.add('border-transparent', 'text-gray-500', 'bg-transparent');
                });

                {{-- Hide all tab panels --}}
                allPanels.forEach(p => {
                    p.classList.remove('block');
                    p.classList.add('hidden');
                });

                {{-- Activate clicked tab --}}
                btn.classList.remove('text-gray-500', 'bg-transparent');
                btn.classList.add('text-[#5b0000]', 'bg-[#5b0000]/5');

                {{-- Show corresponding panel(s) --}}
                tab.panels.forEach(panelId => {
                    const panelToDisplay = document.getElementById(panelId);
                    if (panelToDisplay) {
                        panelToDisplay.classList.remove('hidden');
                        panelToDisplay.classList.add('block');
                    }
                });

                {{-- Update breadcrumb title --}}
                if (breadcrumb) breadcrumb.textContent = tab.title;

                {{-- Update URL query parameter --}}
                if (tab.query) {
                    const nextUrl = new URL(window.location.href);
                    nextUrl.searchParams.set('tab', tab.query);
                    window.history.replaceState({}, '', nextUrl.toString());
                }
            });
        });

        {{-- Handle URL-based tab switching on page load --}}
        const requestedTab = (new URLSearchParams(window.location.search).get('tab') || '').toLowerCase();
        const requestedBtnId = tabQueryMap[requestedTab];
        if (requestedBtnId) {
            const requestedBtn = document.getElementById(requestedBtnId);
            if (requestedBtn) requestedBtn.click();
        }
    });
  </script>
</x-layout>