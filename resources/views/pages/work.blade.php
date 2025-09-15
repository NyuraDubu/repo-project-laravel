@extends('layouts.page')

@section('content')
<section class="section section-grey">
    <div class="container-page grid gap-10 lg:grid-cols-2 items-start">
        <div class="order-2 lg:order-1">
            <span class="inline-flex h-auto items-center rounded-sm border border-black px-6 text-[20px] py-3 px-12 leading-[1.05] tracking-[-0.01em] text-black font-bold mb-8">
                2025
            </span>

            <h1 class="font-ivy font-semibold text-[40px] lg:text-[48px] leading-[1.05] tracking-[-0.01em] my-6">
                Kappa
            </h1>

            <p class="text-[16px] leading-7 text-slate-600 max-w-[60ch] my-12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus ex
                sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus quis
                convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus
                fringilla lacus nec metus bibendum egestas.
            </p>

            <div class="my-8 flex flex-wrap gap-4">
                <a href="#projects" class="btn btn-dark text-[14px] font-semibold rounded-sm">
                    {{ __('hero.cta') }} <span class="ml-2">›</span>
                </a>

                <a href="#" class="btn font-medium border rounded-sm border-black text-slate-900 hover:bg-slate-50 font-semibold">
                    {{ __('common.linkedin_label') }} <span class="ml-2">›</span>
                </a>
            </div>

            <div class="mt-12 h-px w-full bg-black"></div>

            <div class="mt-12 grid grid-cols-3 gap-10 lg:gap-20">
                <div>
                    <div class="font-ivy font-semibold leading-none text-[44px] md:text-[56px] lg:text-[64px]">
                        30%
                    </div>
                    <div class="mt-2 text-[16px] leading-5 text-slate-500">
                        Lorem ipsum dolor<br>sit amet
                    </div>
                </div>

                <div>
                    <div class="font-ivy font-semibold leading-none text-[44px] md:text-[56px] lg:text-[64px]">
                        20+
                    </div>
                    <div class="mt-2 text-[16px] leading-5 text-slate-500">
                        Lorem ipsum dolor<br>sit amet
                    </div>
                </div>

                <div>
                    <div class="font-ivy font-semibold leading-none text-[44px] md:text-[56px] lg:text-[64px]">
                        500
                    </div>
                    <div class="mt-2 text-[16px] leading-5 text-slate-500">
                        Lorem ipsum dolor<br>sit amet
                    </div>
                </div>
            </div>
        </div>

        <div class="order-1 lg:order-2 lg:h-full">
            <img
                src="{{ asset('work-page.png') }}"
                alt="Kappa – projet"
                class="w-full aspect-square lg:aspect-auto lg:h-full object-cover rounded-2xl"
            >
        </div>
    </div>
</section>

	@php
		$projects = [
			[
				'img'   => asset('work-1.png'),
				'link'  => '#',
			],
			[
				'img'   => asset('work-2.png'),
				'link'  => '#',
			],
			[
				'img'   => asset('work-3.png'),
				'link'  => '#',
			],
			[
				'img'   => asset('work-4.png'),
				'link'  => '#',
			],
            [
				'img'   => asset('work-4.png'),
				'link'  => '#',
			],
            [
				'img'   => asset('work-4.png'),
				'link'  => '#',
			],
		];
		$other = [
            [
                'img'   => asset('work-1.png'),
                'link'  => '#',
            ],
            [
                'img'   => asset('work-5.png'),
                'link'  => '#',
            ],
            [
                'img'   => asset('work-6.png'),
                'link'  => '#',
            ],
            [
                'img'   => asset('work-7.png'),
                'link'  => '#',
            ],
		];
	@endphp

	<section id="projects" class="section section-white">
		<div class="container-page relative projects-carousel">
			<h2 class="font-ivy h2 text-center">Tous les projets</h2>
			<p class="muted text-center mt-1">Sélectionner un projet</p>

			<div class="mt-6 -mx-4 sm:mx-0">
				<div
					 class="px-4 sm:px-0 flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory carousel-track"
					 style="scrollbar-width: none; -ms-overflow-style: none;"
					 onscroll="this.dataset.scrolling='1'">
					@foreach($projects as $p)
						<a href="{{ $p['link'] }}" class="group shrink-0 snap-center w-[calc(100vw-2rem)] max-w-[320px] sm:w-[280px] sm:max-w-none">
							<img src="{{ $p['img'] }}"
								 class="w-full aspect-[4/5] object-cover rounded-2xl ring-1 ring-black/5 transition-transform duration-300 group-hover:scale-[1.02]">
							<div class="mt-3 text-sm font-semibold text-center"></div>
						</a>
					@endforeach
				</div>
			</div>

			<div class="mt-4 flex items-center gap-2 pl-4 sm:pl-0 justify-start">
				@for($i=0; $i<count($projects); $i++)
					<span class="h-2 w-2 rounded-full bg-slate-300" data-dot></span>
				@endfor
			</div>

			<div class="mt-6 flex justify-end gap-3">
				<button type="button" aria-label="Précédent"
						class="carousel-prev h-10 w-10 inline-flex items-center justify-center rounded-full border border-slate-300 text-slate-600 hover:bg-slate-50">←</button>
				<button type="button" aria-label="Suivant"
						class="carousel-next h-10 w-10 inline-flex items-center justify-center rounded-full border border-slate-300 text-slate-600 hover:bg-slate-50">→</button>
			</div>
		</div>
	</section>

	<section id="other" class="section section-grey">
        <div class="container-page relative projects-carousel">
			<h2 class="font-ivy h2 text-center">Kappa x SFP</h2>
			<p class="muted text-center mt-1">Création d’une collection Street Summer & réalisation d’un shooting</p>

            <div class="mt-6 -mx-4 sm:mx-0">
                <div class="px-4 sm:px-0 flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory carousel-track"
                     style="scrollbar-width: none; -ms-overflow-style: none;"
                     onscroll="this.dataset.scrolling='1'">
                    @foreach($other as $o)
						<a href="{{ $o['link'] }}" class="group shrink-0 snap-center w-[calc(100vw-2rem)] max-w-[320px] sm:w-[280px] sm:max-w-none">
                            <img src="{{ $o['img'] }}"
								 class="w-full aspect-[4/5] object-cover rounded-2xl ring-1 ring-black/5 transition-transform duration-300 group-hover:scale-[1.02]">
                            <div class="mt-3 text-sm font-semibold text-center"></div>
                        </a>
                    @endforeach
                </div>
            </div>

			<div class="mt-4 flex items-center gap-2 pl-4 sm:pl-0 justify-start">
                @for($i=0; $i<count($other); $i++)
                    <span class="h-2 w-2 rounded-full bg-slate-300" data-dot></span>
                @endfor
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button type="button" aria-label="Précédent"
                        class="carousel-prev h-10 w-10 inline-flex items-center justify-center rounded-full border border-slate-300 text-slate-600 hover:bg-slate-50">←</button>
                <button type="button" aria-label="Suivant"
                        class="carousel-next h-10 w-10 inline-flex items-center justify-center rounded-full border border-slate-300 text-slate-600 hover:bg-slate-50">→</button>
            </div>
        </div>
    </section>

	<section id="work" class="section section-white">
		<div class="container-page">
			<h2 class="font-ivy h2 text-center">{{ __('work.title') }}</h2>
			<p class="text-center text-[24px] font-bold" style="color:#D2D2D2;">{{ __('work.subtitle') }}</p>

			<div class="mt-8 grid gap-4 lg:gap-5 sm:grid-cols-2 auto-rows-[200px] md:auto-rows-[260px] lg:auto-rows-[320px]">
			   <a class="group relative overflow-hidden rounded-2xl sm:row-span-2">
				  <img src="{{ asset('sfparis.png') }}" alt="Stade Français Paris"
					  class="w-full h-full object-cover motion-safe:transition-transform motion-safe:duration-300 group-hover:scale-[1.02] grayscale" />
				  <img src="{{ asset('sfparis-color.png') }}" alt="Stade Français Paris"
					  class="absolute inset-0 w-full h-full object-cover opacity-0 motion-safe:transition-opacity motion-safe:duration-300 group-hover:opacity-100"
					  onerror="this.style.display='none'" />
				</a>

			   <a class="group relative overflow-hidden rounded-2xl sm:row-span-1">
				  <img src="{{ asset('fcnantes.png') }}" alt="FC Nantes"
					  class="w-full h-full object-cover motion-safe:transition-transform motion-safe:duration-300 group-hover:scale-[1.02] grayscale" />
				  <img src="{{ asset('fcnantes-color.png') }}" alt="FC Nantes"
					  class="absolute inset-0 w-full h-full object-cover opacity-0 motion-safe:transition-opacity motion-safe:duration-300 group-hover:opacity-100"
					  onerror="this.style.display='none'" />
				</a>

			   <a class="group relative overflow-hidden rounded-2xl sm:row-span-1">
				  <img src="{{ asset('bombers.png') }}" alt="Bombers"
					  class="w-full h-full object-cover motion-safe:transition-transform motion-safe:duration-300 group-hover:scale-[1.02] grayscale" />
				  <img src="{{ asset('bombers-color.png') }}" alt="Bombers"
					  class="absolute inset-0 w-full h-full object-cover opacity-0 motion-safe:transition-opacity motion-safe:duration-300 group-hover:opacity-100"
					  onerror="this.style.display='none'" />
				</a>
			</div>

			<div class="mt-8 text-center">
				<a class="mt-auto my-8 sm:mt-10 inline-flex h-10 w-full items-center justify-center rounded-md bg-black text-white text-[15px] font-medium tracking-wide sm:h-9 sm:w-auto sm:px-8 sm:text-[14px] sm:rounded-md sm:self-center">
					{{ __('common.see_more') }} <span class="ml-2">›</span>
				</a>
			</div>
		</div>
	</section>
@endsection

@section('footer')
    <div class="text-black">
        @include('sections.cta')
    </div>
	@parent
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
	document.querySelectorAll('.projects-carousel').forEach(container => {
		const track = container.querySelector('.carousel-track');
		const items = Array.from(track.querySelectorAll('a'));
		const prev = container.querySelector('.carousel-prev');
		const next = container.querySelector('.carousel-next');
		const dots = Array.from(container.querySelectorAll('[data-dot]'));

		const gap = parseInt(getComputedStyle(track).columnGap || getComputedStyle(track).gap || '16', 10);
		const itemWidth = () => (items[0]?.getBoundingClientRect().width || 300) + gap;

		const clamp = (n, min, max) => Math.max(min, Math.min(max, n));
		const indexFromScroll = () => Math.round(track.scrollLeft / itemWidth());

		const updateDots = () => {
			const i = clamp(indexFromScroll(), 0, items.length - 1);
			dots.forEach((d, idx) => {
				d.style.backgroundColor = idx === i ? '#111827' : '#CBD5E1';
				d.style.width = d.style.height = '8px';
				d.style.transition = 'background-color .2s';
			});
		};

		const scrollToIndex = (i) => {
			const x = clamp(i, 0, items.length - 1) * itemWidth();
			track.scrollTo({ left: x, behavior: 'smooth' });
		};

		prev?.addEventListener('click', () => scrollToIndex(indexFromScroll() - 1));
		next?.addEventListener('click', () => scrollToIndex(indexFromScroll() + 1));
		track.addEventListener('scroll', () => { requestAnimationFrame(updateDots); });
		window.addEventListener('resize', updateDots);
		updateDots();
	});
});
</script>
@endpush
