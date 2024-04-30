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
        <div class="w-[15%] h-full">
            @include('layouts.home.game-home-nav-desktop')
        </div>
        <div class="w-[85%] pl-10  border-l border-slate-200 flex flex-col gap-20">

            {{-- Featured Games --}}
            <div>
                <div class="flex justify-between items-center">
                    <div>
                        <x-heading>Featured</x-heading>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="featuredGames-prev"><x-arrow-next></x-arrow-next></div>
                            <div class="featuredGames-next"><x-arrow-prev></x-arrow-prev></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swiper featuredGames">
                        <div class="swiper-wrapper mt-5">
                            @foreach ($isFeatured as $isFeatured)
                                <div class="swiper-slide hover:-translate-y-2 ease-in-out duration-300">
                                    <div class="flex flex-col">
                                        <img src="{{ url('storage/'. $isFeatured->image_horizontal) }}" alt="" class="rounded-xl swiper-img">
                                        <div class="flex mt-4 gap-4">
                                            <div>
                                                <div class="overflow-hidden rounded-md p-1 border border-slate-200">
                                                    <img src="{{ url('storage/'. $isFeatured->image_square) }}" alt="" class="!w-[120px] rounded-md">
                                                </div>
                                            </div>
                                            <div class="text-left">
                                                <x-heading class="!text-xl !mb-1">{{ $isFeatured->title }}</x-heading>
                                                @if($isFeatured->description != null)
                                                    <x-sub-heading class="!mb-3 !text-sm">{{ strip_tags(Str::words($isFeatured->description, 15, '...')) }}</x-sub-heading>
                                                @endif
                                                <x-primary-button class="!text-sm">Read more</x-primary-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>

            {{-- Hot Games --}}
            <div>
                <div class="flex justify-between items-center">
                    <div>
                        <x-heading>Hot Games</x-heading>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="hotGames-prev"><x-arrow-next></x-arrow-next></div>
                            <div class="hotGames-next"><x-arrow-prev></x-arrow-prev></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swiper hotGames">
                        <div class="swiper-wrapper my-5">
                            @foreach ($hotGames as $hotGame)
                                <div class="swiper-slide hover:-translate-y-2 ease-in-out duration-300 hover:shadow-xl">
                                    <div class="flex flex-col">
                                        <div class="relative  rounded-xl overflow-hidden bg-amber-100">
                                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-amber-500">
                                                <x-heading class="!text-base !text-white mt-2">{{ $hotGame->title }}</x-heading>
                                            </div>
                                            <div class="border border-amber-100 p-1 rounded-xl overflow-hidden ">
                                                <img src="{{ url('storage/'. $hotGame->image_vertical) }}" alt="" class="swiper-img rounded-xl">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


             {{-- New Games --}}
            <div>
                <div class="flex justify-between items-center">
                    <div>
                        <x-heading>New Games</x-heading>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="newGames-prev"><x-arrow-next></x-arrow-next></div>
                            <div class="newGames-next"><x-arrow-prev></x-arrow-prev></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swiper newGames">
                        <div class="swiper-wrapper my-5">
                            @foreach ($newGames as $newGame)
                                <div class="swiper-slide hover:-translate-y-2 ease-in-out duration-300 hover:shadow-xl">
                                    <div class="flex flex-col">
                                        <div class="relative rounded-xl overflow-hidden bg-amber-100">
                                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-amber-500">
                                                <x-heading class="!text-base !text-white mt-2">{{ $newGame->title }}</x-heading>
                                            </div>
                                            <div class="border border-amber-100 p-1 rounded-xl overflow-hidden ">
                                                <img src="{{ url('storage/'. $newGame->image_square) }}" alt="" class="swiper-img rounded-xl">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            {{-- Highest RTP Games --}}
            <div>
                <div class="flex justify-between items-center">
                    <div>
                        <x-heading>Highest RTP Games</x-heading>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="rtpGames-prev"><x-arrow-next></x-arrow-next></div>
                            <div class="rtpGames-next"><x-arrow-prev></x-arrow-prev></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swiper rtpGames">
                        <div class="swiper-wrapper my-5">
                            @foreach ($rtpGames as $rtpGame)
                            <div class="swiper-slide hover:-translate-y-2 ease-in-out duration-300">
                                <div class="flex flex-col">
                                    <img src="{{ url('storage/'. $rtpGame->image_horizontal) }}" alt="" class="rounded-xl swiper-img">
                                    <div class="flex mt-4 gap-4">
                                        <div>
                                            <div class="overflow-hidden rounded-md p-1 border border-slate-200">
                                                <img src="{{ url('storage/'. $rtpGame->image_square) }}" alt="" class="!w-[120px] rounded-md">
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <x-heading class="!text-xl !mb-1">{{ $rtpGame->title }}</x-heading>
                                            @if($rtpGame->description != null)
                                                <x-sub-heading class="!mb-3 !text-sm">{{ strip_tags(Str::words($rtpGame->description, 15, '...')) }}</x-sub-heading>
                                            @endif
                                            <div class="flex flex-col">
                                                <div class="flex">
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $rtpGame->volatility }}</x-heading>
                                                            <x-sub-heading class="!text-xs">VOLATILITY</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $rtpGame->rtp }}</x-heading>
                                                            <x-sub-heading class="!text-xs">RTP</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $rtpGame->maximum_win }}</x-heading>
                                                            <x-sub-heading class="!text-xs">MAXIMUM WIN</x-sub-heading>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $rtpGame->provider->title }}</x-heading>
                                                            <x-sub-heading class="!text-xs">PROVIDER</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $rtpGame->region }}</x-heading>
                                                            <x-sub-heading class="!text-xs">REGION</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ \Carbon\Carbon::parse($rtpGame->released_date)->format('m/d/Y') }}</x-heading>
                                                            <x-sub-heading class="!text-xs">RELEASED DATE</x-sub-heading>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <x-primary-button class="!text-sm">Read more</x-primary-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

