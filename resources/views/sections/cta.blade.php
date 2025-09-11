<section class="section section-white bleed">
  <div class="container-page text-center">
    {{-- Titre : tailles responsives + line-height serré comme la maquette --}}
    <h2 class="font-ivy leading-[1.05] text-[40px] sm:text-[64px] lg:text-[96px]">
      {{ __('cta.title') }}
    </h2>

    {{-- Ligne contact : plus d’espace sous le titre + jamais de retour à la ligne --}}
    <div
      class="mt-8 sm:mt-10 lg:mt-14
             flex flex-nowrap items-center justify-center gap-4 lg:gap-16
             text-[#ACACAC] text-[16px] sm:text-[20px] lg:text-[24px] leading-none">
      <a href="tel:{{ __('cta.phone_raw') }}" class="hover:text-slate-700 whitespace-nowrap">
        {{ __('cta.phone_display') }}
      </a>
      <a href="mailto:{{ __('cta.email') }}" class="hover:text-slate-700 whitespace-nowrap">
        {{ __('cta.email') }}
      </a>
    </div>
  </div>
</section>
