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

    /* Course list color coding by component category */
    .course-item {
      border-radius: 10px;
      padding: 10px 12px !important;
      border: 1px solid #e5e7eb;
    }
    .course-item > span:first-child {
      color: #374151;
    }
    .course-item > span:first-child::before {
      display: none;
    }
    .course-item > span:last-child {
      color: #111827;
      font-weight: 700;
    }

    .course-university,
    .course-mbkm,
    .course-finalyear {
      background: rgba(91, 0, 0, 0.08);
      border-color: rgba(91, 0, 0, 0.22);
    }
    .course-it {
      background: rgba(243, 200, 61, 0.2);
      border-color: rgba(243, 200, 61, 0.45);
    }
    .course-software {
      background: rgba(47, 158, 197, 0.12);
      border-color: rgba(47, 158, 197, 0.35);
    }
    .course-specialization {
      background: rgba(124, 133, 150, 0.14);
      border-color: rgba(124, 133, 150, 0.35);
    }
  </style>

  <div class="bg-[#fdfbf7] min-h-screen">
    
    <x-hero-banner 
        image="style/images/art/UNIJIBanner.jpg" 
        subtitle="Curriculum Overview"
        title="Software<br>Engineering"
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
            <p class="text-gray-600 max-w-2xl mx-auto text-[15px] leading-relaxed">A visual representation of your 3-year journey from foundational computer science principles to advanced software engineering architecture.</p>
          </div>

          <!-- Diagram B.1 -->
          <div class="bg-white border border-gray-200 shadow-[0_15px_40px_rgba(0,0,0,0.05)] rounded-[32px] p-8 md:p-12 relative overflow-hidden mb-12">
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#5b0000 1px, transparent 1px), linear-gradient(90deg, #5b0000 1px, transparent 1px); background-size: 40px 40px;"></div>
            
            <div class="relative z-10">
              <!-- Image B.1 -->
              <div class="flex flex-col items-center justify-center mb-8">
                <img src="/style/images/art/GambarB1.png" alt="Model Evaluasi Dikrepansi Provus" class="max-w-full h-auto rounded-2xl shadow-lg" />
              </div>

              <!-- Title and Caption -->
              <div class="text-center mb-6">
                <h4 class="text-[#5b0000] font-bold text-[16px] md:text-[18px] mb-2 tracking-wide">Gambar B.1 Model Evaluasi Dikrepansi Provus</h4>
                <p class="text-gray-600 text-[13px]">Sumber: Panduan Penyusunan Kurikulum Dikti (2020)</p>
              </div>

              <!-- Legend/Explanation -->
              <div class="bg-gray-50 rounded-2xl border border-gray-200 p-6 md:p-8">
                <h5 class="text-[#5b0000] font-bold text-[14px] uppercase tracking-widest mb-6">Keterangan:</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-[13px] text-gray-700">
                  <div class="flex gap-3"><span class="font-bold text-[#5b0000] min-w-fit">S:</span><span>Standard</span></div>
                  <div class="flex gap-3"><span class="font-bold text-[#5b0000] min-w-fit">P:</span><span>Performance</span></div>
                  <div class="flex gap-3"><span class="font-bold text-[#5b0000] min-w-fit">C:</span><span>Comparison</span></div>
                  <div class="flex gap-3"><span class="font-bold text-[#5b0000] min-w-fit">D:</span><span>Discrepancy (between standard and performance)</span></div>
                  <div class="flex gap-3"><span class="font-bold text-[#5b0000] min-w-fit">T:</span><span>Terminate Program</span></div>
                  <div class="flex gap-3"><span class="font-bold text-[#5b0000] min-w-fit">R:</span><span>Recycle Program</span></div>
                  <div class="flex gap-3"><span class="font-bold text-[#5b0000] min-w-fit">M:</span><span>Modify Of Change (standard or performance)</span></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Diagram B.2 -->
          <div class="bg-white border border-gray-200 shadow-[0_15px_40px_rgba(0,0,0,0.05)] rounded-[32px] p-8 md:p-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#5b0000 1px, transparent 1px), linear-gradient(90deg, #5b0000 1px, transparent 1px); background-size: 40px 40px;"></div>
            
            <div class="relative z-10">
              <!-- Image B.2 -->
              <div class="flex flex-col items-center justify-center mb-8">
                <img src="/style/images/art/GambarB2.png" alt="Penjelasan Model Evaluasi Dikrepansi Provus" class="max-w-full h-auto rounded-2xl shadow-lg" />
              </div>

              <!-- Title and Caption -->
              <div class="text-center">
                <h4 class="text-[#5b0000] font-bold text-[16px] md:text-[18px] mb-2 tracking-wide">Gambar B.2 Penjelasan Model Evaluasi Dikrepansi Provus</h4>
                <p class="text-gray-600 text-[13px]">Sumber: Panduan Penyusunan Kurikulum Dikti (2020)</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="panel-courses" class="tab-content-panel hidden pt-12 lg:pt-16">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          <div class="mb-12 text-center md:text-left">
            <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Semester Study Plan</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
          </div>

          <div class="space-y-12">
            <div>
              <div class="flex items-center gap-4 mb-6">
                <div class="flex-1 h-px bg-[#5b0000]/40"></div>
                <h3 class="text-[#5b0000] font-bold text-[18px] uppercase tracking-widest whitespace-nowrap">Year 1 (48 SKS)</h3>
                <div class="flex-1 h-px bg-[#5b0000]/40"></div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Semester 1A -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 1A</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">11 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Religions of the World</span> <span class="font-bold text-[#5b0000]">2</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Introduction to Computing</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Applied Mathematics</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Academic Writing in English</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 1B -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 1B</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">9 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Database Systems</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Programming Fundamentals</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Computer Networks</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 2A -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 2A</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">11 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Statistics</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Indonesian Way of Life/Pancasila</span> <span class="font-bold text-[#5b0000]">2</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Object Oriented Programming</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Computer Architecture</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 2B -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 2B</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">8 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Discrete Structure</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Data Structures & Algorithms</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Design Thinking & Innovation</span> <span class="font-bold text-[#5b0000]">2</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 3 -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 3</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">9 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Intro to Business World</span> <span class="font-bold text-[#5b0000]">0</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Business Communication</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Engineering</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Software Project Management</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

              </div>
            </div>

            <div>
              <div class="flex items-center gap-4 mb-6">
                <div class="flex-1 h-px bg-[#5b0000]/40"></div>
                <h3 class="text-[#5b0000] font-bold text-[18px] uppercase tracking-widest whitespace-nowrap">Year 2 (53 SKS)</h3>
                <div class="flex-1 h-px bg-[#5b0000]/40"></div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Semester 4A -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 4A</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">12 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Research Methodology & Journal Reading</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Requirements Engineering</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Quality</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Security Policy & Management</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 4B -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 4B</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">11 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Applied Indonesian Language</span> <span class="font-bold text-[#5b0000]">2</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Engineering: Architecture & Design</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>3D Fundamentals</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Operating Systems</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 5A -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 5A</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">11 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Civics</span> <span class="font-bold text-[#5b0000]">2</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Construction and Development</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Software Testing</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Information Security</span> <span class="font-bold text-[#5b0000]">3</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 5B -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 5B</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">11 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Specialization Course 1</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Specialization Course 2</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Specialization Course 3</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Specialization Course 4</span> <span class="font-bold text-[#5b0000]">2</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 6 -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 6</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">8 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Innovation and Entrepreneurship Boot Camp</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Good Corporate Governance and Anti Corruption</span> <span class="font-bold text-[#5b0000]">3</span></li>
                   <li class="flex justify-between pb-1"><span>Specialization Course</span> <span class="font-bold text-[#5b0000]">2</span></li>
                 </ul>
              </div>
            </div>

              </div>
            </div>

            <div>
              <div class="flex items-center gap-4 mb-6">
                <div class="flex-1 h-px bg-[#5b0000]/40"></div>
                <h3 class="text-[#5b0000] font-bold text-[18px] uppercase tracking-widest whitespace-nowrap">Year 3 (43 SKS + Extension)</h3>
                <div class="flex-1 h-px bg-[#5b0000]/40"></div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Semester 7 -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 7</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">22 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>MBKM Program I</span> <span class="font-bold text-[#5b0000]">20</span></li>
                   <li class="flex justify-between pb-1"><span>Reporting and Consulting</span> <span class="font-bold text-[#5b0000]">2</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 8 -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 8</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">21 SKS</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>MBKM Program II</span> <span class="font-bold text-[#5b0000]">15</span></li>
                   <li class="flex justify-between pb-1"><span>Final Year Project Qualification</span> <span class="font-bold text-[#5b0000]">6</span></li>
                 </ul>
              </div>
            </div>

            <!-- Semester 9 -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
              <div class="bg-[#3A1316] px-5 py-4 border-b-[4px] border-[#D4AF37] flex justify-between items-center">
                 <h4 class="text-white font-bold text-[14px] uppercase tracking-widest m-0">Semester 9</h4>
                 <span class="bg-white/10 text-white text-[10px] px-2.5 py-1 rounded font-bold tracking-wider border border-white/20">Extension</span>
              </div>
              <div class="p-6">
                 <ul class="space-y-4 text-[13px] text-gray-600 m-0 p-0 list-none">
                   <li class="flex justify-between border-b border-gray-100 pb-3"><span>Other Certification / Class Retake</span> <span class="font-bold text-[#5b0000]">-</span></li>
                   <li class="flex justify-between pb-1"><span>Thesis / Prototype / Capstone / Other</span> <span class="font-bold text-[#5b0000]">-</span></li>
                 </ul>
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="panel-descriptions" class="tab-content-panel hidden pt-12 lg:pt-16">
        <div class="w-full max-w-[1100px] mx-auto px-6 relative z-10" x-data="{ activeSpec: 'SE201' }">
          
          <div class="mb-12 text-center md:text-left flex flex-col md:flex-row justify-between items-end gap-6">
            <div>
              <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Course Specializations</h2>
              <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mx-auto md:mx-0"></div>
            </div>
            <p class="text-gray-500 max-w-sm text-[14px] md:text-right">Select a specialized track below to view core focus areas, career paths, and prerequisite requirements.</p>
          </div>

          @php
              // Define all your specializations here to keep the HTML clean
              $specializations = [
                  'GMEG' => [
                      'title' => 'Game Engineering',
                      'desc' => 'This foundational course introduces students to computational thinking, problem-solving techniques, and the basics of programming. Students will learn how to design algorithms using flowcharts and pseudocode, and implement them using a modern programming language. Topics include data types, control structures, loops, functions, and basic file I/O operations.',
                      'credits' => '13 CP',
                      'subjects' => [
                      ['name' => 'GMEG2501 - Game Design and Development', 'desc' => '3 CP'],
                      ['name' => 'GMEG2502 - Game Engines', 'desc' => '3 CP'],
                      ['name' => 'GMEG2503 - 2D and 3D Graphics Programming', 'desc' => '3 CP'],
                      ['name' => 'GMEG2504 - Artificial Intelligence in Games', 'desc' => '2 CP'],
                      ['name' => 'GMEG2601 - Sound Design and Music for Games', 'desc' => '2 CP']
                      ]
                  ],
                  'WMAD' => [
                      'title' => 'Web & Mobile Development',
                      'desc' => 'An in-depth study of how data is organized, stored, and manipulated efficiently. The course covers linear and non-linear data structures including arrays, linked lists, stacks, queues, trees, and graphs. Students will analyze the time and space complexity (Big O notation) of various algorithms associated with these data structures, particularly searching and sorting algorithms.',
                      'credits' => '13 CP',
                      'subjects' => [
                      ['name' => 'WMAD2501 - Advanced Full-Stack Development', 'desc' => '3 CP'],
                      ['name' => 'WMAD2502 - Progressive Web Applications', 'desc' => '3 CP'],
                      ['name' => 'WMAD2503 - Mobile Application Performance Optimization', 'desc' => '3 CP'],
                      ['name' => 'WMAD2504 - Cloud-Native Application Development', 'desc' => '2 CP'],
                      ['name' => 'WMAD2601 - Security in Web and Mobile Applications', 'desc' => '2 CP']
                      ]
                  ],
                  'BCTL' => [
                      'title' => 'Blockchain Technology',
                      'desc' => 'This advanced course focuses on high-level system design and decentralized architecture. Students will learn various patterns and understand how to make design decisions that affect scalability, reliability, and security within Web3. The course includes practical projects where students architect decentralized applications and deploy them using modern networks.',
                      'credits' => '13 CP',
                      'subjects' => [
                      ['name' => 'BCTL2501 - Blockchain Technology & Smart Contract Programming', 'desc' => '3 CP'],
                      ['name' => 'BCTL2502 - Cryptography and Security in Blockchain', 'desc' => '3 CP'],
                      ['name' => 'BCTL2503 - Programming Language for Blockchain Technology', 'desc' => '3 CP'],
                      ['name' => 'BCTL2504 - Blockchain Applications and Use Cases', 'desc' => '2 CP'],
                      ['name' => 'BCTL2601 - Software Development Tools for Blockchain Technology', 'desc' => '2 CP']
                      ]
                  ]
              ];
          @endphp

          <div class="flex flex-col md:flex-row gap-8 lg:gap-12 relative">
            
            <div class="md:w-1/3 flex flex-col gap-3 relative z-10">
              <div class="hidden md:block absolute right-[-20px] lg:right-[-24px] top-4 bottom-4 w-px bg-gradient-to-b from-transparent via-gray-300 to-transparent"></div>

              @foreach($specializations as $code => $spec)
              <button @click="activeSpec = '{{ $code }}'" 
                      :class="activeSpec === '{{ $code }}' ? 'bg-[#5b0000] text-white shadow-[0_8px_20px_rgba(91,0,0,0.2)] md:translate-x-4 border-transparent' : 'bg-white text-gray-600 hover:bg-gray-50 border border-gray-200'"
                      class="relative text-left px-6 py-5 rounded-2xl transition-all duration-300 flex flex-col gap-2 group cursor-pointer border">
                 <div class="flex items-center gap-3">
                   <span :class="activeSpec === '{{ $code }}' ? 'bg-white/20 text-white' : 'bg-[#5b0000]/10 text-[#5b0000]'" class="px-2.5 py-1 rounded text-[10px] font-bold tracking-widest transition-colors">{{ $code }}</span>
                 </div>
                 <span class="font-bold text-[16px] md:text-[18px]">{{ $spec['title'] }}</span>
              </button>
              @endforeach
            </div>

            <div class="md:w-2/3">
               <div class="bg-white rounded-[24px] p-8 md:p-10 shadow-[0_15px_50px_rgba(0,0,0,0.05)] border border-gray-100 min-h-[450px] relative overflow-hidden">
                  
                  <div class="absolute -top-12 -right-12 w-48 h-48 bg-gradient-to-bl from-[#f3c83d]/20 to-transparent rounded-full blur-2xl pointer-events-none"></div>

                  @foreach($specializations as $code => $spec)
                  <div x-show="activeSpec === '{{ $code }}'" 
                       x-cloak
                       x-transition:enter="transition ease-out duration-400 delay-100" 
                       x-transition:enter-start="opacity-0 translate-y-4" 
                       x-transition:enter-end="opacity-100 translate-y-0" 
                       class="relative z-10">
                     
                     <h3 class="text-[24px] font-bold text-gray-900 mb-4">{{ $spec['title'] }}</h3>
                     <p class="text-[15px] text-gray-600 leading-relaxed mb-8">{{ $spec['desc'] }}</p>
                     
                     <div class="flex flex-wrap gap-3 mb-8 pb-8 border-b border-gray-100">
                        <span class="bg-[#fdfbf7] border border-[#f3c83d]/50 px-4 py-2 rounded-lg text-[12px] font-bold text-[#5b0000] uppercase tracking-wide flex items-center gap-2">
                          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                          Total Credits: {{ $spec['credits'] }}
                        </span>
                     </div>

                     <h4 class="font-bold text-[14px] uppercase tracking-widest text-gray-400 mb-4">Core Track Subjects</h4>
                     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($spec['subjects'] as $subject)
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                           <h5 class="font-bold text-gray-800 text-[14px] mb-1">{{ $subject['name'] }}</h5>
                           <p class="text-[12px] text-gray-500">{{ $subject['desc'] }}</p>
                        </div>
                        @endforeach
                     </div>
                  </div>
                  @endforeach

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
            <p class="text-gray-600 max-w-2xl mx-auto text-[15px] leading-relaxed">To graduate with a Bachelor's degree in Software Engineering, students must complete a total of 144 credit points distributed across the following categories.</p>
            <div class="mt-6 flex flex-wrap justify-center gap-3 text-[11px] uppercase tracking-wide font-bold">
              <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-gray-700"><span class="w-2 h-2 rounded-full bg-[#5b0000]"></span>University / MBKM / Final Year</span>
              <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-gray-700"><span class="w-2 h-2 rounded-full bg-[#f3c83d]"></span>IT Course</span>
              <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-gray-700"><span class="w-2 h-2 rounded-full bg-[#2f9ec5]"></span>Software Engineering Course</span>
              <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-gray-700"><span class="w-2 h-2 rounded-full bg-[#7c8596]"></span>Specialization Course</span>
            </div>
          </div>

          <div class="bg-white rounded-[24px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse min-w-[700px]">
                <thead>
                  <tr class="bg-[#3A1316] text-white">
                    <th class="py-5 px-8 font-bold uppercase tracking-widest text-[12px] border-b-[4px] border-[#D4AF37]">Component Category</th>
                    <th class="py-5 px-8 font-bold uppercase tracking-widest text-[12px] border-b-[4px] border-[#D4AF37] text-center">Total Credit Points</th>
                    <th class="py-5 px-8 font-bold uppercase tracking-widest text-[12px] border-b-[4px] border-[#D4AF37] text-center">Percentage</th>
                  </tr>
                </thead>
                <tbody class="text-[14px] text-gray-700 font-medium">
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#5b0000] shadow-[0_0_8px_#5b0000]"></span> University Course</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">34</td>
                    <td class="py-5 px-8 text-center text-gray-500">24%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#f3c83d] shadow-[0_0_8px_#f3c83d]"></span> IT Course</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">21</td>
                    <td class="py-5 px-8 text-center text-gray-500">15%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#2f9ec5] shadow-[0_0_8px_#2f9ec5]"></span> Software Engineering Course</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">33</td>
                    <td class="py-5 px-8 text-center text-gray-500">23%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#7c8596] shadow-[0_0_8px_#7c8596]"></span> Specialization Course</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">13</td>
                    <td class="py-5 px-8 text-center text-gray-500">9%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#5b0000] shadow-[0_0_8px_#5b0000]"></span> MBKM Program</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">35</td>
                    <td class="py-5 px-8 text-center text-gray-500">24%</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-5 px-8 flex items-center gap-4"><span class="w-2 h-2 rounded-full bg-[#5b0000] shadow-[0_0_8px_#5b0000]"></span> Final Year Project</td>
                    <td class="py-5 px-8 text-center text-[#5b0000] font-bold">8</td>
                    <td class="py-5 px-8 text-center text-gray-500">6%</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="bg-[#fdfbf7] text-[#5b0000] border-t-2 border-gray-200">
                    <td class="py-6 px-8 font-bold uppercase tracking-widest text-right text-[13px]">Total Credit Points</td>
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

      // Align course subject colors with component color coding.
      const courseCategoryMap = {
        university: new Set([
          'Religions of the World',
          'Introduction to Computing',
          'Applied Mathematics',
          'Academic Writing in English',
          'Statistics',
          'Indonesian Way of Life/Pancasila',
          'Design Thinking & Innovation',
          'Intro to Business World',
          'Business Communication',
          'Research Methodology & Journal Reading',
          'Applied Indonesian Language',
          'Civics',
          'Innovation and Entrepreneurship Boot Camp',
          'Good Corporate Governance and Anti Corruption'
        ]),
        it: new Set([
          'Database Systems',
          'Programming Fundamentals',
          'Computer Networks',
          'Object Oriented Programming',
          'Computer Architecture',
          'Discrete Structure',
          'Data Structures & Algorithms'
        ]),
        software: new Set([
          'Software Engineering',
          'Software Project Management',
          'Software Requirements Engineering',
          'Software Quality',
          'Security Policy & Management',
          'Software Engineering: Architecture & Design',
          '3D Fundamentals',
          'Operating Systems',
          'Software Construction and Development',
          'Software Testing',
          'Information Security'
        ]),
        specialization: new Set([
          'Specialization Course 1',
          'Specialization Course 2',
          'Specialization Course 3',
          'Specialization Course 4',
          'Specialization Course'
        ]),
        mbkm: new Set([
          'MBKM Program I',
          'Reporting and Consulting',
          'MBKM Program II'
        ]),
        finalyear: new Set([
          'Final Year Project Qualification',
          'Thesis / Prototype / Capstone / Other'
        ])
      };

      const getCourseCategory = (subjectName) => {
        const name = subjectName.trim();
        if (courseCategoryMap.university.has(name)) return 'university';
        if (courseCategoryMap.it.has(name)) return 'it';
        if (courseCategoryMap.software.has(name)) return 'software';
        if (courseCategoryMap.specialization.has(name)) return 'specialization';
        if (courseCategoryMap.mbkm.has(name)) return 'mbkm';
        if (courseCategoryMap.finalyear.has(name)) return 'finalyear';
        return null;
      };

      document.querySelectorAll('#panel-courses li').forEach((li) => {
        const subjectEl = li.querySelector('span:first-child');
        if (!subjectEl) return;

        li.classList.add('course-item');
        const category = getCourseCategory(subjectEl.textContent || '');
        if (category) li.classList.add(`course-${category}`);
      });

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