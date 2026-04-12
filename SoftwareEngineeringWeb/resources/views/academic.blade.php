<x-layout>
	<x-header activePage="academic" />

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

	{{-- ===================== HERO BANNER ===================== --}}
	<x-hero-banner
		subtitle="Academic Information"
		title="Software<br>Engineering"
		image="https://picsum.photos/seed/uniji-academic/1600/700"
		breadcrumbActive="Academic Information"
	/>

	@php
		$academicTabs = [
			['id' => 'btn-guidelines', 'label' => 'Guidelines & Regulations', 'active' => true],
			['id' => 'btn-learning', 'label' => 'Learning & Calendar', 'active' => false],
			['id' => 'btn-downloads', 'label' => 'Download Center', 'active' => false],
		];
	@endphp

	{{-- ===================== SUB NAVIGATION TABS ===================== --}}
	<x-sub-navbar :tabs="$academicTabs" />

	<main class="relative pb-24 overflow-hidden">
		
		<div class="absolute inset-0 bg-tech-pattern opacity-40 z-0 pointer-events-none"></div>
		<div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-[#f3c83d]/10 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>
		<div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-[#5b0000]/5 to-transparent rounded-full blur-3xl z-0 pointer-events-none"></div>

		{{-- ===================== GUIDELINES PANEL ===================== --}}
		<div id="panel-guidelines" class="tab-content-panel block pt-12 lg:pt-16">
			<div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
				
				<div class="mb-12 text-center md:text-left">
					<h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Academic Policies</h2>
					<div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
					<p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Essential guidelines and regulations every Software Engineering student must follow to ensure academic integrity and success.</p>
				</div>

				<div class="space-y-4 max-w-[900px] mx-auto md:mx-0" x-data="{ openGrading: true, openAttendance: false, openGraduation: false }">
					
					<div :class="openGrading ? 'ring-1 ring-[#f3c83d]/40 shadow-[0_12px_28px_rgba(91,0,0,0.08)] -translate-y-0.5' : ''" class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_5px_15px_rgba(0,0,0,0.03)] transition-all duration-300">
						<button @click="openGrading = !openGrading" class="w-full px-6 py-5 flex items-center justify-between bg-white hover:bg-gray-50 transition-colors border-none cursor-pointer group">
							<h4 class="font-bold text-[15px] md:text-[16px] text-[#5b0000] m-0">Grading & Evaluation System</h4>
							<svg class="w-5 h-5 transition-all duration-300" :class="openGrading ? 'rotate-180 scale-110 text-[#5b0000]' : 'text-[#f3c83d]'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
						</button>
						<div x-cloak :class="openGrading ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'" class="grid transition-[grid-template-rows,opacity] duration-300 ease-in-out">
							<div class="overflow-hidden">
								<div class="px-6 pb-6 pt-2 text-[14px] text-gray-600 leading-[1.8] border-t border-gray-100 bg-gray-50/50 transform-gpu">
								<p class="m-0 mb-3 font-medium text-gray-700">Sistem penilaian di UNIJI mencakup aspek proses dan hasil belajar yang terintegrasi dalam kurikulum.</p>
								<p class="m-0 mb-3 font-medium text-gray-700"><span class="text-[#5b0000] font-bold">Komponen Penilaian:</span> Mencakup partisipasi aktif, kedisiplinan, kemampuan aplikasi pengetahuan (proses), serta ujian, tugas, dan proyek (hasil akhir).</p>
								<p class="m-0 mb-2 font-medium text-gray-700"><span class="text-[#5b0000] font-bold">Skala Penilaian:</span> Menggunakan angka 0-100 dengan konversi ke huruf sebagai berikut:</p>

								<ul class="list-disc pl-5 mt-0 mb-3 space-y-1 font-medium text-gray-700">
									<li>A: Sangat Baik</li>
									<li>B: Baik</li>
									<li>C: Cukup</li>
									<li>D: Kurang</li>
									<li>E: Sangat Kurang</li>
								</ul>

								<p class="m-0 mb-3 font-medium text-gray-700"><span class="text-[#5b0000] font-bold">Nilai F:</span> Diberikan jika penilaian belum lengkap pada akhir semester (khusus untuk skripsi, magang, atau KKN) dan harus diselesaikan pada semester berikutnya.</p>
								<p class="m-0 mb-3 font-medium text-gray-700"><span class="text-[#5b0000] font-bold">Prinsip Penilaian:</span> Edukatif, otentik, objektif, akuntabel, dan transparan.</p>
								<p class="m-0 font-medium text-gray-700"><span class="text-[#5b0000] font-bold">Perbaikan Nilai:</span> Dapat dilakukan melalui pengulangan mata kuliah (nilai tertinggi yang diambil) atau proses remedial sebelum semester berakhir.</p>
								</div>
							</div>
						</div>
					</div>

					<div :class="openAttendance ? 'ring-1 ring-[#f3c83d]/40 shadow-[0_12px_28px_rgba(91,0,0,0.08)] -translate-y-0.5' : ''" class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_5px_15px_rgba(0,0,0,0.03)] transition-all duration-300">
						<button @click="openAttendance = !openAttendance" class="w-full px-6 py-5 flex items-center justify-between bg-white hover:bg-gray-50 transition-colors border-none cursor-pointer group">
							<h4 class="font-bold text-[15px] md:text-[16px] text-[#5b0000] m-0">Attendance Requirements</h4>
							<svg class="w-5 h-5 transition-all duration-300" :class="openAttendance ? 'rotate-180 scale-110 text-[#5b0000]' : 'text-[#f3c83d]'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
						</button>
						<div x-cloak :class="openAttendance ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'" class="grid transition-[grid-template-rows,opacity] duration-300 ease-in-out">
							<div class="overflow-hidden">
								<div class="px-6 pb-6 pt-2 text-[14px] text-gray-600 leading-[1.8] border-t border-gray-100 bg-gray-50/50 transform-gpu">
								<ul class="list-disc pl-5 space-y-2 font-medium text-gray-700">
									<li>Kehadiran merupakan salah satu syarat utama bagi mahasiswa untuk dapat mengikuti evaluasi hasil belajar.</li>
									<li><span class="text-[#5b0000]">Batas Minimal:</span> Mahasiswa wajib memiliki minimal 80% kehadiran dalam perkuliahan untuk dapat mengikuti proses remedial pada akhir perkuliahan.</li>
									<li><span class="text-[#5b0000]">Penilaian Susulan:</span> Mahasiswa yang tidak hadir saat ujian atau tugas hanya diizinkan mengikuti penilaian susulan jika memiliki surat keterangan resmi (rawat inap, duka keluarga inti, atau surat tugas universitas).</li>
								</ul>
								</div>
							</div>
						</div>
					</div>

					<div :class="openGraduation ? 'ring-1 ring-[#f3c83d]/40 shadow-[0_12px_28px_rgba(91,0,0,0.08)] -translate-y-0.5' : ''" class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_5px_15px_rgba(0,0,0,0.03)] transition-all duration-300">
						<button @click="openGraduation = !openGraduation" class="w-full px-6 py-5 flex items-center justify-between bg-white hover:bg-gray-50 transition-colors border-none cursor-pointer group">
							<h4 class="font-bold text-[15px] md:text-[16px] text-[#5b0000] m-0">Graduation Requirements</h4>
							<svg class="w-5 h-5 transition-all duration-300" :class="openGraduation ? 'rotate-180 scale-110 text-[#5b0000]' : 'text-[#f3c83d]'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
						</button>
						<div x-cloak :class="openGraduation ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'" class="grid transition-[grid-template-rows,opacity] duration-300 ease-in-out">
							<div class="overflow-hidden">
								<div class="px-6 pb-6 pt-2 text-[14px] text-gray-600 leading-[1.8] border-t border-gray-100 bg-gray-50/50 transform-gpu">
								<p class="m-0 mb-3 font-medium text-gray-700">Mahasiswa dinyatakan lulus jika memenuhi kriteria berikut:</p>
								<ul class="list-disc pl-5 mt-0 space-y-2 font-medium text-gray-700">
									<li><span class="text-[#5b0000]">Penyelesaian Kredit:</span> Mengumpulkan jumlah SKS minimum yang dipersyaratkan oleh program studi dalam batas masa studi yang ditentukan.</li>
									<li><span class="text-[#5b0000]">Indeks Prestasi Kumulatif (IPK):</span> Program Sarjana (S1): IPK minimal 2,00.</li>
									<li><span class="text-[#5b0000]">Nilai Minimum:</span> Tidak boleh ada nilai E. Nilai D tidak boleh melebihi 10% dari total SKS minimal.</li>
									<li><span class="text-[#5b0000]">Tugas Akhir:</span> Lulus ujian skripsi/tugas akhir dan telah menyelesaikan seluruh perbaikan naskah.</li>
									<li><span class="text-[#5b0000]">Kompetensi Tambahan:</span> Lulus kompetensi lain yang dipersyaratkan, seperti skor Bahasa Inggris (TOEFL/IELTS) sesuai ketentuan prodi.</li>
									<li><span class="text-[#5b0000]">Administrasi dan Keuangan:</span> Melunasi seluruh biaya pendidikan (UKT) dan memenuhi persyaratan administrasi universitas.</li>
									<li><span class="text-[#5b0000]">Integritas:</span> Naskah tugas akhir harus melalui pemeriksaan plagiarisme (Turnitin/Ithenticate) dengan tingkat kemiripan maksimal 20% untuk skripsi.</li>
								</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- ===================== LEARNING & CALENDAR PANEL ===================== --}}
		<div id="panel-learning" class="tab-content-panel hidden pt-12 lg:pt-16">
			<div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
				
				<div class="mb-16">
					<div class="mb-12 text-center md:text-left">
						<h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Our Learning Approach</h2>
						<div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
						<p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Discover how we bridge the gap between theoretical computer science and real-world software engineering.</p>
					</div>

					<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
						<div class="bg-white p-8 rounded-[24px] border border-gray-100 shadow-[0_5px_15px_rgba(0,0,0,0.03)] text-center hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
							<div class="w-16 h-16 bg-[#5b0000]/10 text-[#5b0000] rounded-full flex items-center justify-center mx-auto mb-6">
								<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
							</div>
							<h3 class="text-[#5b0000] font-bold text-[18px] mb-3 uppercase">Project-Based</h3>
							<p class="text-gray-600 text-[14px] leading-[1.6] m-0">Move beyond theory. Build real-world applications and systems in every core subject starting from semester one.</p>
						</div>

						<div class="bg-white p-8 rounded-[24px] border border-gray-100 shadow-[0_5px_15px_rgba(0,0,0,0.03)] text-center hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
							<div class="w-16 h-16 bg-[#5b0000]/10 text-[#5b0000] rounded-full flex items-center justify-center mx-auto mb-6">
								<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
							</div>
							<h3 class="text-[#5b0000] font-bold text-[18px] mb-3 uppercase">Hybrid Delivery</h3>
							<p class="text-gray-600 text-[14px] leading-[1.6] m-0">A flexible mix of intensive in-person lab sessions and convenient online theoretical lectures.</p>
						</div>

						<div class="bg-white p-8 rounded-[24px] border border-gray-100 shadow-[0_5px_15px_rgba(0,0,0,0.03)] text-center hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
							<div class="w-16 h-16 bg-[#5b0000]/10 text-[#5b0000] rounded-full flex items-center justify-center mx-auto mb-6">
								<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
							</div>
							<h3 class="text-[#5b0000] font-bold text-[18px] mb-3 uppercase">Industry Mentorship</h3>
							<p class="text-gray-600 text-[14px] leading-[1.6] m-0">Learn directly from visiting professionals from top tech companies through our integrated MBKM programs.</p>
						</div>
					</div>
				</div>

				<div class="mb-20 bg-[#3A1316] rounded-[32px] p-8 md:p-12 flex flex-col lg:flex-row items-center justify-between gap-8 shadow-[0_20px_40px_rgba(91,0,0,0.15)] relative overflow-hidden group">
					<div class="absolute inset-0 z-0 pointer-events-none">
						<img src="{{ asset('style/images/academicinformation/lmsphoto.png') }}" alt="Learning portal background" class="w-full h-full object-cover opacity-40 brightness-110 group-hover:scale-105 transition-transform duration-700">
					</div>
					<div class="absolute inset-0 z-0 bg-gradient-to-r from-[#4a1418]/90 via-[#5b0000]/80 to-[#2e4f67]/75 pointer-events-none"></div>
					<div class="absolute right-0 top-0 w-64 h-64 bg-[#f3c83d]/10 rounded-full blur-[50px] group-hover:bg-[#f3c83d]/20 transition-colors duration-700"></div>

					<div class="relative z-10 max-w-2xl text-center lg:text-left">
						<div class="flex flex-col lg:flex-row items-center gap-5 mb-4">
							<div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shrink-0 shadow-lg">
								<svg class="w-8 h-8 text-[#5b0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
							</div>
							<h3 class="text-white text-[24px] md:text-[28px] font-bold m-0 tracking-wide uppercase">UNIJI Learning Portal</h3>
						</div>
						<p class="text-white/80 text-[15px] leading-relaxed m-0">
							All our Project-Based and Hybrid courses are fully integrated with our Moodle-powered LMS. Access your course materials, submit assignments, and track your grades securely in one place.
						</p>
					</div>

					<div class="relative z-10 shrink-0">
						<a href="https://lms.jic.ac.id/login/index.php" target="_blank" class="inline-flex items-center gap-3 bg-[#f3c83d] text-[#5b0000] px-8 py-4 rounded-full font-bold text-[14px] uppercase tracking-widest hover:bg-white hover:-translate-y-1 transition-all duration-300 shadow-[0_10px_20px_rgba(0,0,0,0.2)] no-underline">
							Access Learning Management System (LMS)
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
						</a>
					</div>
				</div>

				<div class="mb-8">
					<div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-8">
						<div>
							<h2 class="text-[24px] md:text-[28px] text-[#5b0000] font-bold tracking-[1.5px] mb-3 uppercase text-center md:text-left">Academic Calendar</h2>
							<div class="w-[60px] h-[3px] bg-[#f3c83d] rounded-full mx-auto md:mx-0"></div>
						</div>
						<span class="bg-[#5b0000] text-[#f3c83d] font-bold px-5 py-2 rounded-full text-[13px] tracking-widest uppercase shadow-md">Even Semester 2026</span>
					</div>

					<div class="bg-white rounded-[24px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] border border-gray-200 overflow-hidden flex flex-col items-center justify-center p-6 md:p-10 relative">
                        <div class="absolute inset-0 opacity-[0.02] pointer-events-none" style="background-image: linear-gradient(#5b0000 1px, transparent 1px), linear-gradient(90deg, #5b0000 1px, transparent 1px); background-size: 20px 20px;"></div>
                        
						<div class="relative z-10 w-full max-w-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-500 rounded-xl">
						    <img src="{{ asset('style/images/academicinformation/tentativecalender.png') }}" alt="Academic Calendar 2026" class="w-full h-auto rounded-xl shadow-md border border-gray-100 object-contain">
                        </div>
                        
                        <p class="text-gray-400 text-[12px] uppercase tracking-widest mt-6 mb-0 relative z-10">Official Schedule • Subject to Change</p>
					</div>
				</div>

			</div>
		</div>

		{{-- ===================== DOWNLOAD CENTER PANEL ===================== --}}
		<div id="panel-downloads" class="tab-content-panel hidden pt-12 lg:pt-16">
			<div class="w-full max-w-[1140px] mx-auto px-6 relative z-10">
				
				<div class="mb-12 text-center md:text-left">
					<h2 class="text-[28px] md:text-[34px] text-[#5b0000] font-bold tracking-[2px] mb-4 uppercase leading-tight">Download Center</h2>
					<div class="w-[80px] h-[4px] bg-[#f3c83d] rounded-full mb-6 mx-auto md:mx-0"></div>
					<p class="text-gray-600 max-w-2xl text-[15px] leading-relaxed mx-auto md:mx-0">Quickly access and download important academic documents, templates, and official program forms.</p>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
					<a href="#" class="bg-white border border-gray-200 rounded-2xl p-6 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(91,0,0,0.08)] hover:-translate-y-1 transition-all duration-300 no-underline group">
						<div class="flex items-center gap-4">
							<div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center group-hover:bg-red-600 group-hover:text-white transition-colors">
								<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
							</div>
							<div>
								<h4 class="text-[#5b0000] font-bold text-[14px] m-0">Student Handbook</h4>
								<p class="text-gray-500 text-[11px] font-medium m-0 mt-1 uppercase tracking-wider">PDF • 2.4 MB</p>
							</div>
						</div>
						<svg class="w-5 h-5 text-gray-400 group-hover:text-[#f3c83d] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
					</a>

					<a href="#" class="bg-white border border-gray-200 rounded-2xl p-6 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(91,0,0,0.08)] hover:-translate-y-1 transition-all duration-300 no-underline group">
						<div class="flex items-center gap-4">
							<div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
								<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
							</div>
							<div>
								<h4 class="text-[#5b0000] font-bold text-[14px] m-0">Academic Guidelines & Standards</h4>
								<p class="text-gray-500 text-[11px] font-medium m-0 mt-1 uppercase tracking-wider">DOCX • 1.1 MB</p>
							</div>
						</div>
						<svg class="w-5 h-5 text-gray-400 group-hover:text-[#f3c83d] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
					</a>

					<a href="#" class="bg-white border border-gray-200 rounded-2xl p-6 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(91,0,0,0.08)] hover:-translate-y-1 transition-all duration-300 no-underline group">
						<div class="flex items-center gap-4">
							<div class="w-12 h-12 bg-green-50 text-green-600 rounded-xl flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
								<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
							</div>
							<div>
								<h4 class="text-[#5b0000] font-bold text-[14px] m-0">Curriculum</h4>
								<p class="text-gray-500 text-[11px] font-medium m-0 mt-1 uppercase tracking-wider">PDF • 0.8 MB</p>
							</div>
						</div>
						<svg class="w-5 h-5 text-gray-400 group-hover:text-[#f3c83d] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
					</a>
				</div>
			</div>
		</div>

	</main>
	</div>

	<x-footer />

	{{-- ===================== PAGE SCRIPT: TAB SWITCHING ===================== --}}
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Tab setup for panel visibility and URL sync.
			const tabsInfo = [
				{ btnId: 'btn-guidelines', panels: ['panel-guidelines'], title: 'Guidelines & Regulations', query: 'guidelines' },
				{ btnId: 'btn-learning', panels: ['panel-learning'], title: 'Learning & Calendar', query: 'learning' },
				{ btnId: 'btn-downloads', panels: ['panel-downloads'], title: 'Download Center', query: 'downloads' },
			];

			const tabQueryMap = {
				guidelines: 'btn-guidelines',
				guideline: 'btn-guidelines',
				regulations: 'btn-guidelines',
				learning: 'btn-learning',
				calendar: 'btn-learning',
				downloads: 'btn-downloads',
				download: 'btn-downloads',
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
		});
	</script>
</x-layout>