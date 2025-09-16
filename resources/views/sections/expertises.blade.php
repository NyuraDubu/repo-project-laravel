<section class="section section-white bleed">
    <div class="container-page">
        <h2 class="font-ivy h2 text-center">{{ __('expertise.title') }}</h2>
        <p class="text-grey text-center mt-4 text-[14px]">
            {{ __('expertise.subtitle') }}
        </p>

        @php
            $expertises = [
                __('expertise.groups.0.title') => [
                    __('expertise.groups.0.items.0'),
                    __('expertise.groups.0.items.1'),
                    __('expertise.groups.0.items.2'),
                    __('expertise.groups.0.items.3'),
                ],
                __('expertise.groups.1.title') => [
                    __('expertise.groups.1.items.0'),
                    __('expertise.groups.1.items.1'),
                    __('expertise.groups.1.items.2'),
                    __('expertise.groups.1.items.3'),
                ],
                __('expertise.groups.2.title') => [
                    __('expertise.groups.2.items.0'),
                    __('expertise.groups.2.items.1'),
                    __('expertise.groups.2.items.2'),
                ],
                __('expertise.groups.3.title') => [
                    __('expertise.groups.3.items.0'),
                    __('expertise.groups.3.items.1'),
                    __('expertise.groups.3.items.2'),
                    __('expertise.groups.3.items.3'),
                ],
            ];
        @endphp

        {{-- Slider mobile --}}
        <div class="sm:hidden my-8 -mx-4 overflow-x-auto no-scrollbar scroll-smooth snap-x snap-mandatory">
            <div class="px-4 flex gap-5">
                @foreach($expertises as $title => $items)
                    <article class="shrink-0 snap-center w-[calc(100vw-2rem)] max-w-[420px]">
                        <div class="rounded-2xl bg-[#D9D9D9] p-4">
                            <div class="rounded-xl p-6 min-h-[300px] flex flex-col items-center justify-center">
                                <h3 class="font-ivy text-center text-[22px] leading-tight text-[#6F6F6F] font-regular">
                                    {{ $title }}
                                </h3>
                                <ul class="mt-4 space-y-2 text-[15px] leading-6 text-[#6F6F6F] list-disc pl-5 text-left self-center max-w-[42ch]">
                                    @foreach($items as $li)
                                        <li>{{ $li }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="hidden sm:grid mt-12 gap-10 sm:grid-cols-2">
            @foreach($expertises as $title => $items)
                <article class="rounded-2xl bg-[#D9D9D9] p-5 lg:p-6">
                    <div class="rounded-2xl p-8 lg:p-10 min-h-[360px] flex flex-col items-center justify-center">
                        <h3 class="font-ivy text-center text-[28px] lg:text-[32px] leading-tight text-[#6F6F6F] font-regular">
                            {{ $title }}
                        </h3>
                        <ul class="mt-6 space-y-2 text-[16px] lg:text-[18px] leading-6 text-[#6F6F6F] list-disc pl-6 text-left self-center max-w-[46ch]">
                            @foreach($items as $li)
                                <li>{{ $li }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
