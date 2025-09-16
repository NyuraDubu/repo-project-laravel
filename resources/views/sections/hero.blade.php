<section class="section section-white bleed">
    <div class="container-page grid gap-8 lg:grid-cols-2 lg:items-stretch">
        <div class="order-1 lg:order-2 lg:h-full relative overflow-hidden">
            <img src="{{ asset('photo.png') }}" alt=""
             class="w-full aspect-square lg:aspect-auto lg:h-full object-cover rounded-2xl rise-on-load">
        </div>

        <style>
            @keyframes riseUp {
            from { transform: translateY(100%); opacity: 0; }
            to   { transform: translateY(0); opacity: 1; }
            }
            .rise-on-load {
            animation: riseUp 900ms cubic-bezier(.22,.61,.36,1) .2s forwards;
            will-change: transform, opacity;
            }
            @media (prefers-reduced-motion: reduce) {
            .rise-on-load { animation: none; transform: none; opacity: 1; }
            }
        </style>

        <div class="order-2 lg:order-1 flex flex-col lg:pt-16 xl:pt-24">
            <h1 class="font-ivy font-semibold text-[36px] lg:text-[56px] leading-[1.05] tracking-[-0.01em]">
                {{ __('hero.title') }}
            </h1>

            <p class="mt-1 font-['Helvetica Neue'] font-bold text-[24px] leading-none text-[#C7C7C7] lg:text-[40px]">
                {{ __('hero.subtitle') }}
            </p>

            <div class="m-7 lg:hidden">
                <img src="{{ asset('sponsor.png') }}" alt="Sponsor" class="w-full object-contain">
            </div>

            <div class="mt-6 lg:mt-10 text-sm lg:text-[15px] lg:leading-6">
                <p class="font-bold text-[20px] lg:text-[24px]">{{ __('hero.vision_title') }}</p>
                <p class="lg:text-[16px] mt-4">{{ __('hero.vision_text') }}</p>
            </div>

            <div class="my-6">
                <a href="#work"
                     class="mt-auto my-8 sm:mt-10 inline-flex h-10 w-full items-center justify-center rounded-sm
                                    bg-black text-white text-[14px] font-semibold tracking-wide
                                    sm:h-9 sm:w-auto sm:px-8 sm:text-[14px] sm:rounded-sm sm:self-center">
                    {{ __('hero.cta') }} <span class="ml-2 ">›</span>
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-8 mt-auto lg:pb-2">
                <span class="text-lg">{!! __('hero.trusted_by_html') !!}</span>
                <img src="{{ asset('sponsor.png') }}" alt="Logos" class="h-14 object-contain">
            </div>
        </div>
    </div>
</section>
