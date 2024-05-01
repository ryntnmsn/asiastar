<div  class="h-full">
    @if(count($gameBanners) != null)
        <!-- Game Banners -->
        <div wire:ignore class="swiper gameBanner">
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
        @if(count($isFeatured) == null && count($hotGames) == null && count($newGames) == null && count($rtpGames) == null)
            <div class="flex justify-center items-center w-full text-slate-700">@lang('No games available')</div>
        @else
            <div class="w-[15%] h-full">
                <div>
                    @include('layouts.home.game-home-nav-desktop')
                </div>
            </div>
            <div class="w-[85%] pl-10  border-l border-slate-200 flex flex-col gap-20">

                {{-- Featured Games --}}
                @if(count($isFeatured) != null)
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
                                        <div class="swiper-slide box-container hover:-translate-y-2 ease-in-out duration-300">
                                            <div class="flex flex-col">
                                                <div class="relative rounded-xl overflow-hidden">
                                                    <img src="{{ url('storage/'. $isFeatured->image_horizontal) }}" alt="{{ $isFeatured->title }}" class="rounded-xl swiper-img" loading="lazy">
                                                </div>
                                                <div class="flex mt-4 gap-4">
                                                    <div class="blur-load">
                                                        <div class="overflow-hidden rounded-md p-1 border border-slate-200">
                                                            <img src="{{ url('storage/'. $isFeatured->image_square) }}" alt="{{ $isFeatured->title }}" class="!w-[120px] rounded-md" loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="text-left">
                                                        <x-heading class="text-md !mb-1">{{ $isFeatured->title }}</x-heading>
                                                        @if($isFeatured->description != null)
                                                            <x-sub-heading class="!mb-3 !text-sm">{{ strip_tags(Str::words($isFeatured->description, 15, '...')) }}</x-sub-heading>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Hot Games --}}
                @if(count($hotGames) != null)
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
                                        <div class="swiper-slide border border-slate-200 p-1 box-container cursor-pointer group rounded-xl overflow-hidden hover:-translate-y-2 ease-in-out duration-300">

                                            <div class="relative">
                                                <div class="button-details rounded-xl">
                                                    <div class="w-full h-full flex items-center justify-center">
                                                        <span>@lang('View more')</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col">
                                                    <div class="relative rounded-xl overflow-hidden">
                                                        <div class="rounded-xl overflow-hidden relative">
                                                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-amber-600">
                                                                <x-heading class="!text-base !text-white mt-2">{{ $hotGame->title }}</x-heading>
                                                            </div>
                                                            <img src="{{ url('storage/'. $hotGame->image_vertical) }}" alt="{{ $hotGame->title }}" class="swiper-img rounded-xl group-hover:scale-[1.1] group-hover:object-cover duration-300 ease-in-out" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


                {{-- New Games --}}
                @if(count($newGames) != null)
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
                                        <div class="swiper-slide cursor-pointer box-container group rounded-xl overflow-hidden hover:-translate-y-2 ease-in-out duration-300 hover:shadow-xl border border-slate-200 p-1">

                                            <div class="relative">
                                                <div class="button-details rounded-xl">
                                                    <div class="w-full h-full flex items-center justify-center">
                                                        <span>@lang('View more')</span>
                                                    </div>
                                                </div>

                                                <div class="flex flex-col">
                                                    <div class="relative rounded-xl overflow-hidden">
                                                        <div class="rounded-xl overflow-hidden relative">
                                                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-amber-600">
                                                                <x-heading class="!text-base !text-white mt-2">{{ $newGame->title }}</x-heading>
                                                            </div>
                                                            <img src="{{ url('storage/'. $newGame->image_square) }}" alt="{{ $newGame->title }}" class="swiper-img rounded-xl group-hover:scale-[1.1] group-hover:object-cover duration-300 ease-in-out" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


                {{-- Highest RTP Games --}}
                @if(count($rtpGames) != null)
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
                                    <div class="swiper-slide box-container hover:-translate-y-2 ease-in-out duration-300 rounded-xl overflow-hidden cursor-pointer group border border-slate-200 p-[3px]">
                                        <div class="relative rounded-xl">

                                            <div class="button-details rounded-xl">
                                                <div class="w-full h-1/2 flex items-center justify-center">
                                                    <span>@lang('View more')</span>
                                                </div>
                                            </div>

                                            <div class="m-4 rounded-xl flex mt-4 gap-4 py-4 px-4 absolute bottom-0 left-0 right-0 z-[999] bg-white/[.70] backdrop-blur-md">
                                                <div class="text-left">
                                                    <div class="flex gap-2">
                                                        <div>
                                                            <div class="overflow-hidden rounded-md p-[2px] bg-slate-50">
                                                                <img src="{{ url('storage/'. $rtpGame->image_square) }}" alt="{{ $rtpGame->title }}" class="!w-[80px] rounded-md" loading="lazy">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <x-heading class="text-[16px] !mb-0 text-slate-800">{{ $rtpGame->title }}</x-heading>
                                                            @if($rtpGame->description != null)
                                                                <x-sub-heading class="!mb-3 text-slate-600">{{ strip_tags(Str::words($rtpGame->description, 10, '...')) }}</x-sub-heading>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="flex">
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-heading class="!text-sm !mb-0 uppercase">{{ $rtpGame->volatility }}</x-heading>
                                                                    <x-sub-heading class="text-slate-500 capitalize">Volatility</x-sub-heading>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-heading class="!text-sm !mb-0 uppercase">{{ $rtpGame->rtp }}</x-heading>
                                                                    <x-sub-heading class="text-slate-500 capitalize">RTP</x-sub-heading>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-heading class="!text-sm !mb-0 uppercase">{{ $rtpGame->maximum_win }}</x-heading>
                                                                    <x-sub-heading class="text-slate-500 capitalize">Maximum win</x-sub-heading>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-heading class="!text-sm !mb-0 uppercase">{{ $rtpGame->provider->title }}</x-heading>
                                                                    <x-sub-heading class="text-slate-500 capitalize">Provider</x-sub-heading>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-heading class="!text-sm !mb-0 uppercase">{{ $rtpGame->region }}</x-heading>
                                                                    <x-sub-heading class="text-slate-500 capitalize">Region</x-sub-heading>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-heading class="!text-sm !mb-0 uppercase">{{ \Carbon\Carbon::parse($rtpGame->released_date)->format('m/d/Y') }}</x-heading>
                                                                    <x-sub-heading class="text-slate-500 capitalize">Released date</x-sub-heading>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative rounded-xl overflow-hidden">
                                                <div>
                                                    <img src="{{ url('storage/'. $rtpGame->image_vertical) }}" alt="{{ $rtpGame->title }}" class="rounded-xl swiper-img group-hover:scale-[1.1] group-hover:object-cover duration-300 ease-in-out" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    @endif

</div>

