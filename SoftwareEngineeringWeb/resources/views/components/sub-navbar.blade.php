@props([
    'tabs' => []
])

<div class="w-full bg-white/40 top-[80px] z-40 mt-4 py-6">
    <div class="max-w-[1140px] mx-auto px-6 lg:px-8 flex justify-center">
        
        <div class="bg-white/90 backdrop-blur-md border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.08)] rounded-full px-8 flex items-center gap-2 md:gap-8 overflow-x-auto no-scrollbar">
            
            @foreach($tabs as $tab)
                <button id="{{ $tab['id'] }}" 
                    class="tab-btn py-5 px-4 rounded-full border-b-[3px] border-transparent font-bold text-[13px] tracking-[1px] uppercase transition-all duration-300 whitespace-nowrap
                    {{ !empty($tab['active']) ? 'bg-[#5b0000]/5 text-[#5b0000]' : 'bg-transparent text-gray-500 hover:text-[#5b0000] hover:bg-[#5b0000]/5' }}">
                    {{ $tab['label'] }}
                </button>
            @endforeach

        </div>
    </div>
</div>