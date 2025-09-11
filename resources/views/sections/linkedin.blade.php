<section class="section section-grey bleed">
    <div class="container-page">
        <h2 class="font-ivy h2 text-center">{{ __('linkedin.title') }}</h2>

        @php
            $posts = [
                'Merchandising sportif' => [
                    "title" => __('linkedin.posts.0.title'),
                    "description" => __('linkedin.posts.0.description'),
                    "image" => asset('sochaux.png'),
                    "link"  => "#",
                ],
                'E-commerce & Retail' => [
                    "title" => __('linkedin.posts.1.title'),
                    "description" => __('linkedin.posts.1.description'),
                    "image" => asset('essec.png'),
                    "link"  => "#",
                ],
                'Design produit & développement' => [
                    "title" => __('linkedin.posts.2.title'),
                    "description" => __('linkedin.posts.2.description'),
                    "image" => asset('nantes.png'),
                    "link"  => "#",
                ],
            ];
        @endphp

        {{-- Mobile: carrousel horizontal / Desktop: grid --}}
        <div class="-mx-4 overflow-x-auto scroll-smooth snap-x snap-mandatory sm:mx-0 sm:overflow-visible my-8">
            <div class="px-4 flex gap-6 sm:px-0 sm:grid sm:grid-cols-3 sm:gap-10 lg:gap-12">
                @foreach($posts as $post)
                    <article class="shrink-0 snap-center w-[calc(100vw-2rem)] max-w-[360px] sm:w-auto sm:max-w-none">
                        <div class="flex h-full flex-col rounded-2xl">
                            <img
                                src="{{ $post['image'] }}"
                                alt="Post LinkedIn {{ $post['title'] }}"
                                class="w-full aspect-square object-cover rounded-2xl shadow"
                            />

                            <div class="mt-6 sm:mt-8 flex flex-col grow">
                                <!-- Titre: max 2 lignes + un peu plus d’espace réservé -->
                                <h3 class="text-[24px] font-semibold leading-snug line-clamp-2 min-h-[3.75rem] sm:min-h-[4rem]">
                                    {{ $post['title'] }}
                                </h3>

                                <!-- Extrait: marge + interligne plus confort -->
                                <p class="mt-3 sm:mt-4 text-[14px] leading-4 text-[#848484] line-clamp-3 min-h-[4.25rem]">
                                    {{ $post['description'] }}
                                </p>

                                <!-- CTA: plus d’air en haut, compact et à gauche en desktop -->
                                <a href="{{ $post['link'] }}"
                                   class="mt-auto my-8 sm:mt-10 inline-flex
                                          h-10 w-full items-center justify-center rounded-md
                                          bg-black text-white text-[15px] font-medium tracking-wide
                                          sm:h-9 sm:w-auto sm:px-8 sm:text-[14px] sm:rounded-md sm:self-center">
                                    {{ __('linkedin.see_more') }} <span class="ml-2">›</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
