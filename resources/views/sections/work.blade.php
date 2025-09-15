@php
    $works = [
        ['title' => 'Kappa', 'img' => '/kappa.png', 'span' => 'lg:col-span-2'],
        ['title' => 'FC Nantes', 'img' => '/fcnantes.png', 'span' => 'lg:col-span-2'],
        ['title' => 'SF Paris', 'img' => '/sfparis.png', 'span' => 'lg:col-span-2'],
        ['title' => 'Bombers', 'img' => '/bombers.png', 'span' => 'lg:col-span-2'],
    ];
@endphp
<section id="work" class="section section-grey bleed">
    <div class="container-page">
        <h2 class="font-ivy h2 text-center">{{ __('work.title') }}</h2>
        <p class="text-center text-[24px] font-bold" style="color:#D2D2D2;">{{ __('work.subtitle') }}</p>

        <div id="workSlider" class="-mx-4 overflow-x-auto no-scrollbar scroll-smooth snap-x snap-mandatory sm:hidden my-6">
            <div class="px-4 flex gap-4">
                @foreach($works as $w)
                    @php
                        $colorImg = preg_replace('/\.png$/', '-color.png', $w['img'] ?? '');
                    @endphp
                    <a class="shrink-0 snap-center w-[calc(100vw-2rem)] max-w-[360px] relative rounded-2xl overflow-hidden group my-6">
                        <div class="relative w-full">
                            <img src="{{ $w['img'] }}" alt="{{ $w['title'] ?? '' }}" class="w-full aspect-[16/16] object-cover motion-safe:transition-transform motion-safe:duration-300 group-hover:scale-[1.02]" />
                            <img src="{{ $colorImg }}" alt="{{ $w['title'] ?? '' }}" class="absolute inset-0 w-full h-full object-cover opacity-0 motion-safe:transition-opacity motion-safe:duration-300 group-hover:opacity-100" onerror="this.style.display='none'" />
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="mt-10 hidden sm:grid gap-4 lg:gap-5 sm:grid-cols-2 auto-rows-[180px] md:auto-rows-[240px] lg:auto-rows-[300px]">
            @foreach($works as $w)
                @php
                    $tall = in_array($w['title'] ?? '', ['Kappa', 'SF Paris', 'Stade Français Paris', 'Stade Francais Paris']);
                    $colorImg = preg_replace('/\.png$/', '-color.png', $w['img'] ?? '');
                @endphp

                <a class="group relative overflow-hidden rounded-2xl {{ $tall ? 'sm:row-span-2 lg:row-span-2' : 'sm:row-span-1 lg:row-span-1' }}">
                    <img src="{{ $w['img'] }}" alt="{{ $w['title'] ?? '' }}" class="w-full h-full object-cover motion-safe:transition-transform motion-safe:duration-300 group-hover:scale-[1.02]" />
                    <img src="{{ $colorImg }}" alt="{{ $w['title'] ?? '' }}" class="absolute inset-0 w-full h-full object-cover opacity-0 motion-safe:transition-opacity motion-safe:duration-300 group-hover:opacity-100" onerror="this.style.display='none'" />
                </a>
            @endforeach
        </div>

        <div class="mt-8 text-center hidden sm:block">
            <a class="mt-auto my-8 sm:mt-10 inline-flex h-10 w-full items-center justify-center rounded-sm bg-black text-white text-[14px] font-semibold tracking-wide sm:h-9 sm:w-auto sm:px-8 sm:text-[14px] sm:rounded-sm sm:self-center">
                {{ __('common.see_more') }} <span class="ml-2">›</span>
            </a>
        </div>
    </div>
</section>
