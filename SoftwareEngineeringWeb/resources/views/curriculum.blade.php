<x-layout>
  <x-header activePage="curriculum" />

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #fdfbf7; }
    [x-cloak] { display: none !important; }
    
    /* Premium Tech Pattern Background */
    .bg-tech-pattern {
      background-image: radial-gradient(rgba(91, 0, 0, 0.08) 2px, transparent 2px);
      background-size: 40px 40px;
    }
    
    /* Hide scrollbar for the horizontal nav menus */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    /* Buffer for sticky header so scroll doesn't hide content */
    html { scroll-padding-top: 150px; scroll-behavior: smooth; }
  </style>

  <div class="bg-[#fdfbf7] min-h-screen">
    
    <x-hero-banner 
        image="style/images/art/UNIJIBanner.jpg" 
        subtitle="Academic Program"
        title="Software<br>Curriculum"
      breadcrumbActive="Curriculum Structure"
    />

    @php
        $curriculumTabs = [
            ['id' => 'btn-structure', 'label' => 'Structure', 'active' => true],
            ['id' => 'btn-courses', 'label' => 'Course List', 'active' => false],
            ['id' => 'btn-descriptions', 'label' => 'Descriptions', 'active' => false],
            ['id' => 'btn-credits', 'label' => 'Credit System', 'active' => false],
        ];
    @endphp
    <x-sub-navbar :tabs="$curriculumTabs" />


    <div class="relative min-h-[800px] pb-24 overflow-hidden">
      <div class="absolute inset-0 bg-tech-pattern opacity-40 z-0 pointer-events-none"></div>
      <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-[#f3c83d]/10 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>
      <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-[#5b0000]/5 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>

      <div id="panel-structure" class="tab-content-panel block pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          <div class="text-center mb-10">
            <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Curriculum Structure</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] mx-auto rounded-full mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto text-[15px] leading-relaxed">A visual representation of your 4-year journey from foundational computer science principles to advanced software engineering architecture.</p>
          </div>

          <div class="bg-white border border-gray-200 shadow-[0_15px_40px_rgba(0,0,0,0.05)] rounded-[32px] p-8 md:p-12 flex flex-col items-center justify-center min-h-[500px] relative overflow-hidden group">
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#5b0000 1px, transparent 1px), linear-gradient(90deg, #5b0000 1px, transparent 1px); background-size: 40px 40px;"></div>
            
            <div class="w-24 h-24 bg-[#5b0000]/5 text-[#5b0000] rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500 border border-[#5b0000]/10">
               <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
            </div>
            <h3 class="text-[#5b0000] font-bold text-xl uppercase tracking-widest mb-2 z-10">Structure Diagram</h3>
            <p class="text-gray-500 text-sm z-10 text-center">Place your exported flowchart image here.<br> Suggested ratio: 16:9</p>
          </div>
        </div>
      </div>

      <div id="panel-courses" class="tab-content-panel hidden pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          <div class="mb-12 text-center md:text-left">
            <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Semester Study Plan</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 1</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">20 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Algorithms & Prog.</span> <span class="font-bold text-[#5b0000]">4</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Discrete Math</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Intro to IT</span> <span class="font-bold text-[#5b0000]">2</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>English for Academic</span> <span class="font-bold text-[#5b0000]">2</span></li>
                   <li class="flex justify-between pb-1"><span>Calculus I</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 2</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">21 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Data Structures</span> <span class="font-bold text-[#5b0000]">4</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Database Systems</span> <span class="font-bold text-[#5b0000]">4</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Object Oriented Prog.</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Calculus II</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Civic Education</span> <span class="font-bold text-[#5b0000]">2</span></li>
                 </ul>
              </div>
            </div>

            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 3</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">20 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Web Development</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Req. Eng.</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Computer Networks</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Operating Systems</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>UI/UX Design</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 4</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">19 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Architecture</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Mobile Development</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Artificial Intelligence</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Testing</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Elective Course 1</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div id="panel-descriptions" class="tab-content-panel hidden pt-12 lg:pt-16">
        <div class="w-full max-w-[900px] mx-auto px-6 relative z-10">
          <div class="mb-10 text-center">
            <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Course Descriptions</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] mx-auto rounded-full mb-6"></div>
          </div>

          <div class="space-y-4" x-data="{ activeAccordion: null }">
            
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_5px_15px_rgba(0,0,0,0.03)]">
               <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="w-full px-6 py-5 flex items-center justify-between bg-white hover:bg-gray-50 transition-colors border-none cursor-pointer">
                  <div class="flex items-center gap-4 text-left">
                     <span class="bg-[#5b0000]/10 text-[#5b0000] font-bold px-3 py-1 rounded text-[11px] tracking-widest border border-[#5b0000]/10">SE101</span>
                     <h4 class="font-bold text-[15px] md:text-[16px] text-gray-800 m-0">Algorithms & Programming</h4>
                  </div>
                  <svg class="w-5 h-5 text-gray-400 transition-transform duration-300" :class="activeAccordion === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
               </button>
               <div x-show="activeAccordion === 1" x-collapse x-cloak>
                  <div class="px-6 pb-6 pt-2 text-[14px] text-gray-600 leading-[1.8] border-t border-gray-100 bg-gray-50/50">
                     <p class="m-0">This foundational course introduces students to computational thinking, problem-solving techniques, and the basics of programming. Students will learn how to design algorithms using flowcharts and pseudocode, and implement them using a modern programming language (such as Python or Java). Topics include data types, control structures, loops, functions, and basic file I/O operations.</p>
                     <div class="mt-5 flex gap-3">
                        <span class="bg-white border border-gray-200 px-3 py-1.5 rounded-lg text-[11px] font-bold text-[#5b0000] tracking-wide uppercase">Credits: 4 SKS</span>
                        <span class="bg-white border border-gray-200 px-3 py-1.5 rounded-lg text-[11px] font-bold text-gray-500 tracking-wide uppercase">Prerequisite: None</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_5px_15px_rgba(0,0,0,0.03)]">
               <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="w-full px-6 py-5 flex items-center justify-between bg-white hover:bg-gray-50 transition-colors border-none cursor-pointer">
                  <div class="flex items-center gap-4 text-left">
                     <span class="bg-[#5b0000]/10 text-[#5b0000] font-bold px-3 py-1 rounded text-[11px] tracking-widest border border-[#5b0000]/10">SE201</span>
                     <h4 class="font-bold text-[15px] md:text-[16px] text-gray-800 m-0">Data Structures</h4>
                  </div>
                  <svg class="w-5 h-5 text-gray-400 transition-transform duration-300" :class="activeAccordion === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
               </button>
               <div x-show="activeAccordion === 2" x-collapse x-cloak>
                  <div class="px-6 pb-6 pt-2 text-[14px] text-gray-600 leading-[1.8] border-t border-gray-100 bg-gray-50/50">
                     <p class="m-0">An in-depth study of how data is organized, stored, and manipulated efficiently. The course covers linear and non-linear data structures including arrays, linked lists, stacks, queues, trees, and graphs. Students will analyze the time and space complexity (Big O notation) of various algorithms associated with these data structures, particularly searching and sorting algorithms.</p>
                     <div class="mt-5 flex gap-3">
                        <span class="bg-white border border-gray-200 px-3 py-1.5 rounded-lg text-[11px] font-bold text-[#5b0000] tracking-wide uppercase">Credits: 4 SKS</span>
                        <span class="bg-white border border-gray-200 px-3 py-1.5 rounded-lg text-[11px] font-bold text-gray-500 tracking-wide uppercase">Prerequisite: SE101</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_5px_15px_rgba(0,0,0,0.03)]">
               <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="w-full px-6 py-5 flex items-center justify-between bg-white hover:bg-gray-50 transition-colors border-none cursor-pointer">
                  <div class="flex items-center gap-4 text-left">
                     <span class="bg-[#5b0000]/10 text-[#5b0000] font-bold px-3 py-1 rounded text-[11px] tracking-widest border border-[#5b0000]/10">SE304</span>
                     <h4 class="font-bold text-[15px] md:text-[16px] text-gray-800 m-0">Software Architecture</h4>
                  </div>
                  <svg class="w-5 h-5 text-gray-400 transition-transform duration-300" :class="activeAccordion === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
               </button>
               <div x-show="activeAccordion === 3" x-collapse x-cloak>
                  <div class="px-6 pb-6 pt-2 text-[14px] text-gray-600 leading-[1.8] border-t border-gray-100 bg-gray-50/50">
                     <p class="m-0">This advanced course focuses on high-level system design. Students will learn various architectural patterns (e.g., MVC, Microservices, Event-Driven, Client-Server) and understand how to make design decisions that affect scalability, reliability, and security. The course includes practical projects where students architect backend systems and deploy them using cloud technologies.</p>
                     <div class="mt-5 flex gap-3">
                        <span class="bg-white border border-gray-200 px-3 py-1.5 rounded-lg text-[11px] font-bold text-[#5b0000] tracking-wide uppercase">Credits: 3 SKS</span>
                        <span class="bg-white border border-gray-200 px-3 py-1.5 rounded-lg text-[11px] font-bold text-gray-500 tracking-wide uppercase">Prereq: SE201, SE205</span>
                     </div>
                  </div>
               </div>
            </div>

          </div>
        </div>
      </div>

      <div id="panel-credits" class="tab-content-panel hidden pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          <div class="mb-10 text-center">
            <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Course Credit System</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] mx-auto rounded-full mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto text-[15px] leading-relaxed">To graduate with a Bachelor's degree in Software Engineering, students must complete a total of 144 SKS (Sistem Kredit Semester) distributed across the following categories.</p>
          </div>

          <div class="bg-white rounded-[24px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse min-w-[700px]">
                <thead>
                  <tr class="bg-[#3A1316] text-white">
                    <th class="py-5 px-8 font-bold uppercase tracking-widest text-[12px] border-b-[4px] border-[#D4AF37]">Component Category</th>
                    <th class="py-5 px-8 font-bold uppercase tracking-widest text-[12px] border-b-[4px] border-[#D4AF37] text-center">Required SKS</th>
                    <th class="py-5 px-8 font-bold uppercase tracking-widest text-[12px] border-b-[4px] border-[#D4AF37] text-center">Percentage</th>
                  </tr>
                </thead>
                <tbody class="text-[14px] text-gray-700 font-medium">
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#5b0000] shadow-[0_0_8px_#5b0000]"></span> University Compulsory Courses</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">14</td>
                    <td class="py-5 px-8 text-center text-gray-500">10%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#f3c83d] shadow-[0_0_8px_#f3c83d]"></span> Faculty Core Courses</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">24</td>
                    <td class="py-5 px-8 text-center text-gray-500">17%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#5b0000] shadow-[0_0_8px_#5b0000]"></span> Software Engineering Core</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">78</td>
                    <td class="py-5 px-8 text-center text-gray-500">54%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-gray-400"></span> Elective Specializations</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">18</td>
                    <td class="py-5 px-8 text-center text-gray-500">12%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#D4AF37] shadow-[0_0_8px_#D4AF37]"></span> Final Project / Thesis</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">6</td>
                    <td class="py-5 px-8 text-center text-gray-500">4%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#D4AF37] shadow-[0_0_8px_#D4AF37]"></span> Internship / Practical Work</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">4</td>
                    <td class="py-5 px-8 text-center text-gray-500">3%</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="bg-[#fdfbf7] text-[#5b0000] border-t-2 border-gray-200">
                    <td class="py-6 px-8 font-bold uppercase tracking-widest text-right text-[13px]">Total Minimum Requirement</td>
                    <td class="py-6 px-8 text-center font-black text-[22px]">144</td>
                    <td class="py-6 px-8 text-center font-bold text-[16px]">100%</td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <x-footer />

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Configuration for Curriculum Tabs
      const tabsInfo = [
        { btnId: 'btn-structure', panels: ['panel-structure'], title: 'Curriculum Structure', query: 'structure' },
        { btnId: 'btn-courses', panels: ['panel-courses'], title: 'Course List', query: 'courses' },
        { btnId: 'btn-descriptions', panels: ['panel-descriptions'], title: 'Descriptions', query: 'descriptions' },
        { btnId: 'btn-credits', panels: ['panel-credits'], title: 'Credit System', query: 'credits' }
      ];

      const tabQueryMap = {
        structure: 'btn-structure',
        courses: 'btn-courses',
        courselist: 'btn-courses',
        descriptions: 'btn-descriptions',
        description: 'btn-descriptions',
        credits: 'btn-credits',
        creditsystem: 'btn-credits'
      };

      const allBtns = document.querySelectorAll('.tab-btn');
      const allPanels = document.querySelectorAll('.tab-content-panel');
      const breadcrumb = document.getElementById('breadcrumb-page');

      tabsInfo.forEach(tab => {
        const btn = document.getElementById(tab.btnId);
        if (!btn) return;

        btn.addEventListener('click', function(e) {
          e.preventDefault();

          // 1. Reset all buttons to the inactive style
          allBtns.forEach(b => {
            b.classList.remove('text-[#5b0000]', 'bg-[#5b0000]/5');
            b.classList.add('border-transparent', 'text-gray-500', 'bg-transparent');
          });

          // 2. Hide all panels
          allPanels.forEach(p => {
            p.classList.remove('block');
            p.classList.add('hidden');
          });

          // 3. Highlight active button
          btn.classList.remove('text-gray-500', 'bg-transparent');
          btn.classList.add('text-[#5b0000]', 'bg-[#5b0000]/5');

          // 4. Show related panels
          tab.panels.forEach(panelId => {
            const panelToDisplay = document.getElementById(panelId);
            if (panelToDisplay) {
              panelToDisplay.classList.remove('hidden');
              panelToDisplay.classList.add('block');
            }
          });

          // 5. Update breadcrumb text
          if (breadcrumb) breadcrumb.textContent = tab.title;

          // 6. Keep URL tab query in sync with active tab
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
    });
  </script>

</x-layout>