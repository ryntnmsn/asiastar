<div class="h-full">
    @if(count($gameBanners) != null)
        <!-- Game Banners -->
        <div class="swiper gameBanner">
            <div class="swiper-wrapper">
                @foreach ($gameBanners as $gameBanner)
                <div class="swiper-slide">
                    <div class="h-[380px] md:h-[480px] w-full bg-cover bg-no-repeat bg-center" style="background-image:url('{{ url('storage/'. $gameBanner->image) }}')"></div>
                </div>
            @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle>
                </svg>
                <span></span>
            </div>
        </div>
    @endif

    <div class="flex flex-row max-w-[1280px] w-full h-full mx-auto mt-20">
        <div class="w-[15%] h-full border-r border-slate-200">
            @include('layouts.home.game-home-nav-desktop')
        </div>
        <div class="w-[85%] pl-10">
            <x-heading>Featured</x-heading>
            <div>
                <div class="swiper gameBanner">
                    <div class="swiper-wrapper">
                        @foreach ($isFeatured as $isFeatured)
                        <div class="swiper-slide">
                            <img src="{{ url('storage/'. $isFeatured->image_horizontal) }}" alt="">
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

