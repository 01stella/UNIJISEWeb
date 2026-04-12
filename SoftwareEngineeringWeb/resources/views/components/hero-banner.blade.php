@props([
    'subtitle' => 'Study Program',
    'title' => 'Software Engineering',
    'image' => 'style/images/home/UNIJIBanner.jpg',
    'breadcrumbParent' => null,
    'breadcrumbParentUrl' => '#',
    'breadcrumbActive' => 'Profile',
])

@php
    $heroImage = (str_starts_with($image, 'http://') || str_starts_with($image, 'https://') || str_starts_with($image, '//'))
        ? $image
        : asset($image);
@endphp

<div>
    <style>
        @keyframes hbPatternDrift {
            0% { background-position: 0 0; }
            100% { background-position: 110px 76px; }
        }

        @keyframes hbPatternPulse {
            0%, 100% { opacity: 0.24; transform: translate3d(0, 0, 0); }
            50% { opacity: 0.34; transform: translate3d(-8px, 6px, 0); }
        }

        .hb-micro-dots {
            background-image: radial-gradient(rgba(243, 200, 61, 0.35) 1px, transparent 1.4px);
            background-size: 22px 22px;
            animation: hbPatternDrift 28s linear infinite;
        }

        .hb-micro-mesh {
            background-image: linear-gradient(rgba(255, 255, 255, 0.07) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.07) 1px, transparent 1px);
            background-size: 42px 42px;
            animation: hbPatternDrift 40s linear infinite reverse, hbPatternPulse 10s ease-in-out infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .hb-micro-dots,
            .hb-micro-mesh {
                animation: none;
            }
        }
    </style>

    <div class="relative flex items-center justify-center min-h-[280px] lg:min-h-[380px] overflow-hidden bg-cover bg-center bg-no-repeat border-b-[8px] border-[#f3c83d]" style="background-image: url('{{ $heroImage }}');">
        <div class="absolute inset-0 z-10 bg-gradient-to-r from-[#2a0e11] via-[#2a0e11]/80 to-[#5B1E22]/60"></div>
        <div class="absolute inset-0 z-[14] pointer-events-none hb-micro-dots opacity-45"></div>
        <div class="absolute inset-0 z-[15] pointer-events-none hb-micro-mesh"></div>
        
        <div class="w-full max-w-[1140px] mx-auto px-6 lg:px-8 relative z-20">
            <div class="lg:pl-8">
                <p class="text-[16px] lg:text-[18px] text-[#f3c83d] tracking-[4px] uppercase font-bold mb-0">{{ $subtitle }}</p>
                <div class="w-[100px] h-[3px] bg-[#f3c83d] mt-4 mb-6 shadow-[0_0_15px_rgba(243,200,61,0.5)]"></div>
                <h1 class="text-[36px] lg:text-[52px] text-white font-bold tracking-[2px] lg:tracking-[4px] leading-tight m-0 drop-shadow-xl uppercase">{!! $title !!}</h1>
            </div>
        </div>
    </div>

    <div class="py-6 bg-white border-b border-gray-200 relative z-20 shadow-sm">
        <div class="w-full max-w-[1140px] mx-auto px-6 lg:px-8">
            <div class="text-[12px] md:text-[13px] text-gray-500 tracking-[1.5px] uppercase font-medium flex items-center gap-2">
                <a href="/home" class="hover:text-[#f3c83d] transition-colors duration-300">Home</a>
                @if(!empty($breadcrumbParent))
                    <span>/</span>
                    <a href="{{ $breadcrumbParentUrl }}" class="hover:text-[#f3c83d] transition-colors duration-300">{{ $breadcrumbParent }}</a>
                @endif
                <span>/</span>
                <span id="breadcrumb-page" class="text-[#5b0000] font-bold">{{ $breadcrumbActive }}</span>
            </div>
        </div>
    </div>
</div>