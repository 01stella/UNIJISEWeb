<x-layout>
  <x-header activePage="about" />
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #fdfbf7; }
    
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
      subtitle="Study Program"
      title="Software<br>Engineering"
      image="style/images/art/UNIJIBanner.jpg"
      breadcrumbActive="Profile"
    />

    @php
      $tabs = [
        ['id' => 'btn-profile', 'label' => 'Profile', 'active' => true],
        ['id' => 'btn-vision', 'label' => 'Vision & Mission'],
        ['id' => 'btn-structural', 'label' => 'Structural'],
        ['id' => 'btn-lecturer', 'label' => 'Lecturers'],
        ['id' => 'btn-facilities', 'label' => 'Facilities'],
        ['id' => 'btn-academic', 'label' => 'Collaborations'],
      ];
    @endphp

    <x-sub-navbar :tabs="$tabs" />

    <div class="relative min-h-[600px] pb-24 overflow-hidden">
      <div class="absolute inset-0 bg-tech-pattern opacity-40 z-0 pointer-events-none"></div>
      <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-[#f3c83d]/10 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>
      <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-[#5b0000]/5 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>

      <div id="panel-profile" class="tab-content-panel block pt-16 lg:pt-20">
        <div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <div class="lg:col-span-7">
              <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">
                What is Software Engineering?
              </h2>
              <div class="w-[80px] h-[4px] bg-[#f3c83d] mb-8 rounded-full"></div>
              
              <div class="text-[16px] text-gray-700 leading-[1.9] space-y-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <p>ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <p>ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>

            <div class="lg:col-span-5">
              <div class="relative rounded-[32px] overflow-hidden border border-[#f3c83d]/20 shadow-[0_20px_50px_rgba(91,0,0,0.18)] group">
                <img src="{{ asset('style/images/art/aboutse.jpg') }}" alt="Software Engineering students" class="w-full min-h-[480px] lg:min-h-[560px] object-cover object-center group-hover:scale-[1.03] transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#2a0808]/70 via-[#2a0808]/20 to-transparent pointer-events-none"></div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div id="panel-why-choose" class="tab-content-panel block py-12 lg:py-20 relative z-10">
        <div class="w-full max-w-[1140px] mx-auto px-6">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5">
              <div class="aspect-square rounded-[32px] shadow-inner overflow-hidden border border-gray-300 bg-gray-100">
                <img src="{{ asset('style/images/art/aboutse2.png') }}" alt="Why choose software engineering" class="w-full h-full object-cover object-center">
              </div>
            </div>

            <div class="lg:col-span-7 lg:pl-6 max-w-2xl">
              <h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">
                Why Choose Software Engineering?
              </h2>
              <div class="w-[80px] h-[4px] bg-[#f3c83d] mb-8 rounded-full"></div>
              
              <div class="text-[16px] text-gray-700 leading-[1.9] space-y-6">
                <p class="font-medium text-gray-900">Muridnya OP semua, jago hackathon, dosennya gacorr maksimal :) Menang kompetisi terus tuh (di kampus) lmao wtf</p>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div id="panel-vision" class="tab-content-panel hidden pt-16 lg:pt-20 relative z-10">
      <div class="w-full max-w-[1140px] mx-auto px-6">
        
        <div class="bg-white border-y-[6px] border-[#f3c83d] rounded-3xl p-10 md:p-14 text-center shadow-[0_15px_40px_rgba(0,0,0,0.05)] mb-20 max-w-4xl mx-auto relative overflow-hidden">
          <svg class="absolute -top-6 -left-6 w-32 h-32 text-gray-100 -rotate-12 pointer-events-none" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
          <h2 class="text-[#5b0000] text-[28px] uppercase tracking-[4px] font-bold mb-6 relative z-10">Visi</h2>
          <p class="text-[18px] md:text-[20px] leading-relaxed text-gray-700 font-medium italic relative z-10 m-0">
            "Menjadi program studi yang unggul di tingkat internasional dalam bidang Rekayasa Perangkat Lunak, berfokus pada inovasi dan pengembangan teknologi perangkat lunak berkualitas tinggi yang adaptif terhadap kebutuhan industri dan masyarakat, serta didukung oleh kolaborasi multidisiplin untuk mendorong kemajuan teknologi informasi."
          </p>
        </div>

        <div class="max-w-[1000px] mx-auto">
          <h2 class="text-[#7b2424] text-[32px] uppercase tracking-[2px] font-bold text-center mb-16">Misi</h2>

          <div class="relative flex flex-col md:flex-row justify-between items-start gap-12 md:gap-5">
            <div class="hidden md:block absolute top-[45px] left-[10%] right-[10%] h-[6px] bg-gradient-to-r from-[#cba052] to-[#7b2424] z-0"></div>

            <div class="flex-1 text-center z-10 w-full">
              <div class="w-[90px] h-[90px] mx-auto mb-5 bg-white text-black rounded-full flex justify-center items-center text-[36px] font-bold shadow-md border-[5px] border-[#cba052] transition-transform hover:scale-110 duration-300">
                1
              </div>
              <p class="text-[14px] leading-[1.6] text-gray-600 m-0 px-2">
                Menyelenggarakan pendidikan berkualitas di bidang Rekayasa Perangkat Lunak yang berorientasi global guna mendukung pencapaian world class university.
              </p>
            </div>

            <div class="flex-1 text-center z-10 w-full">
              <div class="w-[90px] h-[90px] mx-auto mb-5 bg-white text-black rounded-full flex justify-center items-center text-[36px] font-bold shadow-md border-[5px] border-[#b57a41] transition-transform hover:scale-110 duration-300">
                2
              </div>
              <p class="text-[14px] leading-[1.6] text-gray-600 m-0 px-2">
                Mengembangkan penelitian dan inovasi di bidang Rekayasa Perangkat Lunak dengan mengadopsi teknologi mutakhir untuk menciptakan solusi digital yang berdampak positif bagi masyarakat.
              </p>
            </div>

            <div class="flex-1 text-center z-10 w-full">
              <div class="w-[90px] h-[90px] mx-auto mb-5 bg-white text-black rounded-full flex justify-center items-center text-[36px] font-bold shadow-md border-[5px] border-[#954f32] transition-transform hover:scale-110 duration-300">
                3
              </div>
              <p class="text-[14px] leading-[1.6] text-gray-600 m-0 px-2">
                Menciptakan ekosistem pembelajaran yang kolaboratif dan adaptif untuk membekali lulusan dengan keterampilan teknis, kreativitas, serta jiwa intrapreneur dan entrepreneur.
              </p>
            </div>

            <div class="flex-1 text-center z-10 w-full">
              <div class="w-[90px] h-[90px] mx-auto mb-5 bg-white text-black rounded-full flex justify-center items-center text-[36px] font-bold shadow-md border-[5px] border-[#7b2424] transition-transform hover:scale-110 duration-300">
                4
              </div>
              <p class="text-[14px] leading-[1.6] text-gray-600 m-0 px-2">
                Membangun kemitraan strategis dengan industri, komunitas teknologi, dan akademisi untuk memperkuat pengembangan pendidikan, riset, serta implementasi teknologi perangkat lunak.
              </p>
            </div>

          </div>
        </div>

        <div class="text-center mt-24 mb-10 flex flex-col items-center">
          <h2 class="text-[#5b0000] text-[28px] uppercase tracking-[4px] font-bold mb-4">
            Program Objectives
          </h2>
          <div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full"></div>
        </div>

        <div class="max-w-4xl mx-auto text-center text-[16px] text-gray-700 leading-[1.9] space-y-6 pb-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
          <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

      </div>
    </div>

      <div id="panel-structural" class="tab-content-panel hidden pt-16 lg:pt-20 text-center relative z-10">
        <div class="w-full max-w-[1140px] mx-auto px-6">
          <h2 class="text-[#5b0000] text-[28px] uppercase tracking-[4px] font-bold mb-8">UNIJI Structural Picture</h2>
          <div class="flex justify-center max-w-5xl mx-auto">
              <img src="{{ asset('style/images/art/Organisasi.png') }}" alt="Structural Organization" class="w-full h-auto object-cover rounded-[32px] shadow-2xl border-[6px] border-white">
          </div>
        </div>
      </div>

      <div id="panel-lecturer" class="tab-content-panel hidden pt-16 lg:pt-20 text-center relative z-10">
        <div class="w-full max-w-[1140px] mx-auto px-6">
          <div class="text-center mb-12">
            <h2 class="text-[#5b0000] text-[28px] uppercase tracking-[4px] font-bold mb-4">Our Faculty</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] mx-auto rounded-full"></div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
            @for ($i = 0; $i < 9; $i++)
            <div class="relative w-full bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group text-center">
                <div class="w-full aspect-[4/5] bg-gray-100 rounded-[16px] overflow-hidden mb-4">
                  <img src="{{ asset('style/images/art/kenny.png') }}" alt="Nicholas Kenny" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-bold text-[18px] text-[#5b0000] m-0">Nicholas Kenny</h3>
                <p class="text-[#f3c83d] font-bold text-[11px] tracking-[2px] uppercase mt-1">Head of UNIJI</p>
            </div>
            @endfor
          </div>
        </div>
      </div>

      <div id="panel-facilities" class="tab-content-panel hidden pt-16 lg:pt-20 text-center relative z-10">
        <div class="w-full max-w-[1140px] mx-auto px-6">
          <div class="text-center mb-12">
            <h2 class="text-[#5b0000] text-[28px] uppercase tracking-[4px] font-bold mb-4">Campus Facilities</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] mx-auto rounded-full"></div>
          </div>

          @php
            $facilities = [
              ['img' => 'ComputerLab.png', 'title' => 'Computer Lab', 'desc' => 'State-of-the-art computing'],
              ['img' => '3DPrinter.jpg', 'title' => '3D Printer', 'desc' => 'Printing 3D Design'],
              ['img' => 'Library.png', 'title' => 'Library', 'desc' => 'Digital and physical resources'],
              ['img' => 'IndiPods.png', 'title' => 'Individual Pods', 'desc' => 'Collaborative workspace'],
              ['img' => 'Auditorium.png', 'title' => 'Auditorium', 'desc' => 'Auditorium for Conference'],
              ['img' => 'MiniAuditorium.png', 'title' => 'Mini Auditorium', 'desc' => 'Mini Auditorium for Presentation']
            ];
          @endphp

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @foreach($facilities as $fac)
            <div class="relative w-full bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group text-left">
                <div class="w-full aspect-video bg-gray-100 rounded-[16px] overflow-hidden mb-5">
                  <img src="{{ asset('style/images/art/'.$fac['img']) }}" alt="{{ $fac['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="px-2 pb-2">
                  <h3 class="font-bold text-[20px] text-[#5b0000] mb-1">{{ $fac['title'] }}</h3>
                  <p class="text-gray-500 text-[14px] m-0">{{ $fac['desc'] }}</p>
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <div id="panel-academic" class="tab-content-panel hidden pt-16 lg:pt-20 relative z-10">
        <div class="w-full max-w-[1140px] mx-auto px-6">
          
          <div class="text-center mb-16">
            <h2 class="text-[#5b0000] text-[28px] uppercase tracking-[4px] font-bold mb-4">Academic Collaborations</h2>
            <div class="w-[80px] h-[4px] bg-[#f3c83d] mx-auto rounded-full"></div>
          </div>

          <div id="collaborations-container" class="space-y-24">
            
            <div class="collaboration-country">
              <h3 class="text-[#5b0000] text-[20px] font-bold uppercase tracking-[2px] mb-8 text-center">United States</h3>
              
              <div class="relative flex items-center justify-center max-w-4xl mx-auto">
                <button class="carousel-btn carousel-prev absolute -left-4 md:-left-12 z-20 w-10 h-10 rounded-full bg-white text-[#5b0000] flex items-center justify-center hover:bg-[#f3c83d] transition-colors duration-300 shadow-md border border-gray-200" aria-label="Previous university">
                  <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                </button>

                <div class="w-full max-w-[664px] mx-auto overflow-hidden">
                  <div class="carousel-track flex justify-start gap-8 transition-transform duration-500 ease-out" data-country="United States">
                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="Style/images/art/USF.png" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">University of San Francisco</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="Style/images/art/MonashUni.png" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">Monash University</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="Style/images/art/US - WMU.png" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">Western Michigan University</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="Style/images/art/UK-Durham.png" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">Durham University</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="https://via.placeholder.com/150?text=Stanford" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">Stanford University</p>
                    </div>
                  </div>
                </div>

                <button class="carousel-btn carousel-next absolute -right-4 md:-right-12 z-20 w-10 h-10 rounded-full bg-white text-[#5b0000] flex items-center justify-center hover:bg-[#f3c83d] transition-colors duration-300 shadow-md border border-gray-200" aria-label="Next university">
                  <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5L15.75 12l-7.5 7.5" /></svg>
                </button>
              </div>

              <div class="flex justify-center gap-2 mt-6">
                <div class="carousel-indicators flex gap-2" data-country="United States">
                  <button class="indicator w-2 h-2 rounded-full bg-[#f3c83d] transition-all duration-300" data-index="0"></button>
                  <button class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></button>
                  <button class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></button>
                </div>
              </div>
            </div>

            <div class="collaboration-country">
              <h3 class="text-[#5b0000] text-[20px] font-bold uppercase tracking-[2px] mb-8 text-center">Europe</h3>
              
              <div class="relative flex items-center justify-center max-w-4xl mx-auto">
                <button class="carousel-btn carousel-prev absolute -left-4 md:-left-12 z-20 w-10 h-10 rounded-full bg-white text-[#5b0000] flex items-center justify-center hover:bg-[#f3c83d] transition-colors duration-300 shadow-md border border-gray-200" aria-label="Previous university">
                  <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                </button>

                <div class="w-full max-w-[664px] mx-auto overflow-hidden">
                  <div class="carousel-track flex justify-start gap-8 transition-transform duration-500 ease-out" data-country="Europe">
                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="https://via.placeholder.com/150?text=Oxford" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">University of Oxford</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="https://via.placeholder.com/150?text=Cambridge" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">University of Cambridge</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="https://via.placeholder.com/150?text=ETH" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">ETH Zurich</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="https://via.placeholder.com/150?text=Imperial" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">Imperial College London</p>
                    </div>

                    <div class="carousel-item flex-shrink-0 w-[200px] flex flex-col items-center transform transition-all duration-500 opacity-60">
                      <div class="w-[160px] h-[160px] bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-100 p-4">
                        <img src="https://via.placeholder.com/150?text=TUM" class="w-full h-full object-contain">
                      </div>
                      <p class="text-[13px] text-gray-700 mt-4 text-center font-medium">Technical University of Munich</p>
                    </div>
                  </div>
                </div>

                <button class="carousel-btn carousel-next absolute -right-4 md:-right-12 z-20 w-10 h-10 rounded-full bg-white text-[#5b0000] flex items-center justify-center hover:bg-[#f3c83d] transition-colors duration-300 shadow-md border border-gray-200" aria-label="Next university">
                  <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5L15.75 12l-7.5 7.5" /></svg>
                </button>
              </div>

              <div class="flex justify-center gap-2 mt-6">
                <div class="carousel-indicators flex gap-2" data-country="Europe">
                  <button class="indicator w-2 h-2 rounded-full bg-[#f3c83d] transition-all duration-300" data-index="0"></button>
                  <button class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></button>
                  <button class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>

  <x-footer />

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const tabsInfo = [
        { btnId: 'btn-profile', panels: ['panel-profile', 'panel-why-choose'], title: 'Profile', query: 'profile' },
        { btnId: 'btn-vision', panels: ['panel-vision'], title: 'Vision & Mission', query: 'vision' },
        { btnId: 'btn-structural', panels: ['panel-structural'], title: 'Structural', query: 'structural' },
        { btnId: 'btn-lecturer', panels: ['panel-lecturer'], title: 'Lecturer Profile', query: 'lecturer' },
        { btnId: 'btn-facilities', panels: ['panel-facilities'], title: 'Facilities', query: 'facilities' },
        { btnId: 'btn-academic', panels: ['panel-academic'], title: 'Academic Collaborations', query: 'academic' }
      ];

      const tabQueryMap = {
        profile: 'btn-profile',
        vision: 'btn-vision',
        structural: 'btn-structural',
        lecturer: 'btn-lecturer',
        facilities: 'btn-facilities',
        academic: 'btn-academic'
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

          // 5. Update breadcrumb
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

      // Carousel Script (Kept Identical to protect your logic, updated visual classes)
      const carouselStates = new Map();
      const carouselItemWidth = 232; 

      document.querySelectorAll('.carousel-track').forEach(track => {
        const country = track.getAttribute('data-country');
        const items = track.querySelectorAll('.carousel-item');

        carouselStates.set(country, {
          currentIndex: 0,
          totalItems: items.length,
          itemsPerView: 3
        });
      });

      document.querySelectorAll('.carousel-btn').forEach(btn => {
        btn.addEventListener('click', function() {
          const isNext = this.classList.contains('carousel-next');
          const track = this.closest('.collaboration-country').querySelector('.carousel-track');
          const country = track.getAttribute('data-country');

          updateCarousel(country, isNext);
        });
      });

      document.querySelectorAll('.indicator').forEach(btn => {
        btn.addEventListener('click', function() {
          const indicatorsContainer = this.closest('.carousel-indicators');
          const country = indicatorsContainer.getAttribute('data-country');
          const index = parseInt(this.getAttribute('data-index'), 10);

          goToSlide(country, index);
        });
      });

      function updateCarousel(country, isNext) {
        const state = carouselStates.get(country);
        if (!state) return;
        const maxIndex = Math.max(0, state.totalItems - state.itemsPerView);
        if (isNext) {
          state.currentIndex = state.currentIndex >= maxIndex ? 0 : state.currentIndex + 1;
        } else {
          state.currentIndex = state.currentIndex <= 0 ? maxIndex : state.currentIndex - 1;
        }
        applyCarouselTransform(country);
        updateIndicators(country);
      }

      function goToSlide(country, index) {
        const state = carouselStates.get(country);
        if (!state) return;
        const maxIndex = Math.max(0, state.totalItems - state.itemsPerView);
        state.currentIndex = Math.min(Math.max(index, 0), maxIndex);
        applyCarouselTransform(country);
        updateIndicators(country);
      }

      function applyCarouselTransform(country) {
        const track = document.querySelector(`.carousel-track[data-country="${country}"]`);
        const state = carouselStates.get(country);
        if (!track || !state) return;

        const items = track.querySelectorAll('.carousel-item');
        track.style.transform = `translateX(${-state.currentIndex * carouselItemWidth}px)`;

        items.forEach((item, index) => {
          const card = item.querySelector('div');
          const name = item.querySelector('p');
          const isMiddle = index === state.currentIndex + 1;

          item.style.minHeight = '292px';
          name.style.minHeight = '56px';
          name.style.display = 'flex';
          name.style.alignItems = 'center';
          name.style.justifyContent = 'center';
          name.style.textAlign = 'center';
          name.style.padding = '0 8px';
          name.style.lineHeight = '1.35';

          item.classList.remove('scale-100', 'scale-105', 'opacity-60', 'opacity-100');
          card.classList.remove('w-[160px]', 'h-[160px]', 'w-[184px]', 'h-[184px]', 'shadow-sm', 'shadow-xl', 'border-gray-100', 'border-2', 'border-[#f3c83d]');
          name.classList.remove('text-[13px]', 'text-[14px]', 'text-gray-700', 'text-[#5b0000]', 'font-medium', 'font-bold');

          if (isMiddle) {
            item.classList.add('scale-100', 'opacity-100');
            item.style.zIndex = '10';
            card.classList.add('w-[184px]', 'h-[184px]', 'shadow-xl', 'border-2', 'border-[#f3c83d]');
            name.classList.add('text-[14px]', 'text-[#5b0000]', 'font-bold');
          } else {
            item.classList.add('scale-100', 'opacity-60');
            item.style.zIndex = '5';
            card.classList.add('w-[160px]', 'h-[160px]', 'shadow-sm', 'border-gray-100');
            name.classList.add('text-[13px]', 'text-gray-700', 'font-medium');
          }
        });
      }

      function updateIndicators(country) {
        const indicators = document.querySelectorAll(`.carousel-indicators[data-country="${country}"] .indicator`);
        const state = carouselStates.get(country);
        if (!state || !indicators.length) return;

        indicators.forEach((indicator, index) => {
          if (index === state.currentIndex) {
            indicator.classList.remove('bg-gray-300');
            indicator.classList.add('bg-[#f3c83d]');
          } else {
            indicator.classList.remove('bg-[#f3c83d]');
            indicator.classList.add('bg-gray-300');
          }
        });
      }

      function resetAllCarousels() {
        document.querySelectorAll('.carousel-track').forEach(track => {
          const country = track.getAttribute('data-country');
          const state = carouselStates.get(country);
          if (!state) return;
          state.currentIndex = 0;
          applyCarouselTransform(country);
          updateIndicators(country);
        });
      }

      const academicBtn = document.getElementById('btn-academic');
      if (academicBtn) {
        academicBtn.addEventListener('click', function() {
          resetAllCarousels();
        });
      }

      resetAllCarousels();
    });
  </script>

</x-layout>