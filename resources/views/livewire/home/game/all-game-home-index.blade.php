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
            <div>
                @include('layouts.home.game-home-nav-desktop')
            </div>
        </div>
        <div class="w-[85%] pl-10  border-l border-slate-200 flex flex-col gap-20">
        {{-- Games --}}
        @if(count($games) != null)
        <div>
            <div class="flex">
                <div>
                    <x-heading>Highest RTP Games</x-heading>
                </div>
            </div>
            <div>
                <div>
                    <div class="my-5 grid grid-cols-3 gap-5">
                        @foreach ($games as $game)
                            <div class="swiper-slide box-container hover:-translate-y-2 ease-in-out duration-300 rounded-xl cursor-pointer">
                                <div class="flex flex-col">
                                    <div class="relative rounded-xl overflow-hidden">
                                        <div class="button-view">
                                            <span class="bg-amber-500 px-4 py-2 text-sm text-white rounded-md font-medium">@lang('View more')</span>
                                        </div>
                                        <div class="absolute bottom-0 left-0 ml-4 mb-4">
                                            <div class="overflow-hidden rounded-md p-[3px] border bg-white border-slate-200 relative">
                                                <img src="{{ url('storage/'. $game->image_square) }}" alt="{{ $game->title }}" class="!w-[80px] rounded-md" loading="lazy">
                                            </div>
                                        </div>
                                        <div>
                                            <img src="{{ url('storage/'. $game->image_horizontal) }}" alt="{{ $game->title }}" class="rounded-xl swiper-img" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="flex mt-4 gap-4 pb-4 px-4">
                                        <div class="text-left">
                                            <x-heading class="text-[18px] !mb-0">{{ $game->title }}</x-heading>
                                            @if($game->description != null)
                                                <x-sub-heading class="!mb-3">{{ strip_tags(Str::words($game->description, 15, '...')) }}</x-sub-heading>
                                            @endif
                                            <div class="flex flex-col">
                                                <div class="flex">
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $game->volatility }}</x-heading>
                                                            <x-sub-heading>VOLATILITY</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $game->rtp }}</x-heading>
                                                            <x-sub-heading>RTP</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $game->maximum_win }}</x-heading>
                                                            <x-sub-heading>MAXIMUM WIN</x-sub-heading>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $game->provider->title }}</x-heading>
                                                            <x-sub-heading>PROVIDER</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ $game->region }}</x-heading>
                                                            <x-sub-heading>REGION</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-1 uppercase">{{ \Carbon\Carbon::parse($game->released_date)->format('m/d/Y') }}</x-heading>
                                                            <x-sub-heading>RELEASED DATE</x-sub-heading>
                                                        </div>
                                                    </div>
                                                </div>
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
        </div>
    </div>
</div>

