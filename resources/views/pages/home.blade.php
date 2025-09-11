@extends('layouts.app')

@section('title', __('nav.home'))

@section('header')
    <div class="py-4 flex justify-between items-start">
        <!-- Identité -->
        <div class="text-sm leading-tight">
            <div class="uppercase font-bold tracking-wide text-[20px]">{{ __('nav.name') }}</div>
            <div class="text-[16px] leading-[17.28px]">{{ __('nav.role') }}</div>
        </div>

        <!-- Nav desktop -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="{{ url('/') }}" class="text-xs tracking-wide text-[#B2B2B2] font-bold hover:text-black transition">{{ __('nav.home') }}</a>
            <a href="#work" class="text-xs tracking-wide text-[#B2B2B2] font-bold hover:text-black transition">{{ __('nav.work') }}</a>

            <!-- FR / EN switch -->
            @php($locale = app()->getLocale())
            <div class="ml-4 flex items-center gap-3 select-none">
            <a href="{{ route('lang.switch', ['locale' => 'fr']) }}"
                class="text-xs font-bold {{ $locale==='fr' ? 'text-black' : 'text-[#BDBDBD]' }}">
                {{ __('nav.fr') }}
            </a>

            <a href="{{ route('lang.switch', ['locale' => $locale==='fr' ? 'en' : 'fr']) }}"
                role="switch"
                aria-checked="{{ $locale==='en' ? 'true' : 'false' }}"
                aria-label="{{ __('nav.open_menu') }}"
                class="relative inline-flex h-7 w-12 items-center rounded-full border border-[#CFCFCF] bg-white hover:border-[#BDBDBD] transition">
                <!-- pastille -->
                <span class="pointer-events-none absolute top-1/2 -translate-y-1/2 rounded-full bg-[#BDBDBD]
                            h-[18px] w-[18px] transition-all duration-200
                            {{ $locale==='fr' ? 'left-1.5' : 'right-1.5' }}">
                </span>
            </a>

            <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                class="text-xs font-bold {{ $locale==='en' ? 'text-black' : 'text-[#BDBDBD]' }}">
                {{ __('nav.en') }}
            </a>
            </div>

        </nav>

        <!-- Burger mobile -->
    <button id="menuToggle"
                class="md:hidden h-12 w-12 inline-flex items-center justify-center text-2xl"
        aria-label="{{ __('nav.open_menu') }}"
                aria-controls="mobileMenu"
                aria-expanded="false">
            ≡
        </button>
    </div>

    <!-- Mobile menu (overlay) -->
    <div id="mobileMenu" class="fixed inset-0 z-[60] hidden md:hidden">
        <!-- clic pour fermer -->
    <button id="menuBackdrop" class="absolute inset-0 bg-black/40" aria-label="{{ __('nav.close_menu') }}"></button>

        <!-- panneau -->
        <nav class="absolute right-0 top-0 h-full w-80 max-w-[85%] bg-white p-6 shadow-xl flex flex-col">
            <div class="flex items-center justify-between">
                <span class="uppercase font-bold tracking-wide">{{ __('nav.menu') }}</span>
                <button id="menuClose" class="h-10 w-10 inline-flex items-center justify-center text-2xl" aria-label="{{ __('nav.close') }}">
                    ×
                </button>
            </div>

            <ul class="mt-6 space-y-4 text-sm">
                <li><a href="{{ url('/') }}" class="block py-2 font-semibold">{{ __('nav.home') }}</a></li>
                <li><a href="#work" class="block py-2 font-semibold">{{ __('nav.work') }}</a></li>
            </ul>

            <nav class="hidden md:flex items-center gap-4">
                <a href="{{ route('lang.switch', ['locale' => 'fr']) }}"
                    class="{{ app()->getLocale()==='fr' ? 'font-bold text-black' : 'text-[#B2B2B2]' }}">
                    {{ __('nav.fr') }}
                </a>
                <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                    class="{{ app()->getLocale()==='en' ? 'font-bold text-black' : 'text-[#B2B2B2]' }}">
                    {{ __('nav.en') }}
                </a>
            </nav>
        </nav>
    </div>
@endsection


@section('content')
    @include('sections.hero')
    @include('sections.linkedin')
    @include('sections.expertises')
    @include('sections.work')
    @include('sections.cta')
@endsection

@section('footer')
    <footer class="section-white">
        <div class="container-page py-8 sm:py-10
                    grid gap-6 grid-cols-1 sm:grid-cols-[auto_1fr_auto] items-center">

            {{-- Bouton LinkedIn : en premier sur mobile, centré en desktop --}}
            <a href="#"
               target="_blank" rel="noopener"
               class="order-1 sm:order-2 btn btn-outline font-medium
                      w-full sm:w-auto border border-black rounded-sm text-center
                      mx-auto sm:mx-0 sm:justify-self-center text-black">
                {{ __('common.linkedin_label') }} <span class="ml-2">›</span>
            </a>

            {{-- Infos : toujours aligné à gauche --}}
            <div class="mt-5 order-2 sm:order-1 text-left text-[11px] leading-4 text-[#ACACAC]">
                © {{ date('Y') }}<br>
                DESIGN BY<br>
                DEV BY
            </div>

            {{-- Back to top : fixe en bas à droite sur mobile, à droite dans la grille en desktop --}}
                <a href="#top"
                    aria-label="{{ __('common.back_to_top') }}"
               class="order-3 sm:order-3 group inline-flex h-16 w-16 items-center justify-center
                      rounded-full border-2 border-black text-black transition hover:bg-black hover:text-white
                      fixed bottom-6 right-6 z-50 sm:static sm:justify-self-end"
               onclick="event.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' });">
                <svg viewBox="0 0 24 24" class="h-6 w-6 transition-transform group-hover:-translate-y-0.5"
                     fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 19V5" stroke-linecap="round" />
                    <path d="M6 11l6-6 6 6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>

        </div>
    </footer>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('menuToggle');
            const menu = document.getElementById('mobileMenu');
            const closeBtn = document.getElementById('menuClose');
            const backdrop = document.getElementById('menuBackdrop');

            const openMenu = () => {
                menu.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
                btn?.setAttribute('aria-expanded', 'true');
            };
            const closeMenu = () => {
                menu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                btn?.setAttribute('aria-expanded', 'false');
            };

            btn?.addEventListener('click', (e) => {
                e.preventDefault();
                menu.classList.contains('hidden') ? openMenu() : closeMenu();
            });
            closeBtn?.addEventListener('click', closeMenu);
            backdrop?.addEventListener('click', closeMenu);
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeMenu();
            });
            // fermer quand on clique un lien
            menu?.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
        });
    </script>
@endpush
