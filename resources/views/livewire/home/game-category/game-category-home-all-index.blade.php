<div class="h-full">
    <div class="h-full w-full max-w-[1280px] mx-auto">
        @if(count($gameBanners) != null)
            <!-- Game Banners -->
            <div class="mt-10">
                <div wire:ignore class="swiper gameBanner rounded-3xl">
                    <div class="swiper-wrapper">
                        @foreach ($gameBanners as $gameBanner)
                        <div class="swiper-slide">
                            <div class="rounded-3xl h-[380px] md:h-[480px] w-full bg-cover !bg-fixed bg-no-repeat bg-center" style="background-image:url('{{ url('storage/'. $gameBanner->image) }}')"></div>
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
            </div>
        @endif

        <div class="mt-10">
            <div class="flex">
                <div class="w-[20%]">
                    <div wire:ignore class="bg-dark-blue p-5 rounded-2xl mr-8">
                        @include('layouts.home.game-category-nav-desktop')
                        @include('layouts.home.sort-game-category-nav-desktop')
                        @include('layouts.home.filter-game-category-nav-desktop')
                    </div>
                </div>
                <div class="w-[80%] relative">

                    {{-- Games --}}
                    @if(count($games) != null)
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <div>
                                    <x-heading class="!mb-0 !text-slate-400">All Games</x-heading>
                                </div>
                                <div>
                                    <div class="flex dark:text-slate-400">
                                        <div wire:click="grid" class="hotGames-next"><x-icon-grid-view></x-icon-grid-view></div>
                                        <div wire:click="list" class="hotGames-prev"><x-icon-list-view></x-icon-list-view></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                @if($isGridView)
                                    <div id="slideAnimationGames" class="grid grid-cols-3 gap-8 pt-5 pb-10 relative">
                                        @foreach ($games as $game)
                                            <div class="relative group swiper-slide flex flex-col gap-2 duration-300 ease-in-out bg-dark-blue hover:bg-dark-blue-hover rounded-3xl hover:-translate-y-2 cursor-pointer hover:shadow-2xl">
                                                <a href="{{ route('single.game.index', $game->id) }}" class="absolute top-0 bottom-0 left-0 right-0 z-[100]"></a>
                                                <div class="p-5 flex flex-col gap-4">
                                                    <div class="overflow-hidden rounded-2xl">
                                                        <img src="{{ url('storage/'. $game->image_horizontal) }}" class="w-full rounded-2xl object-cover group-hover:scale-[1.1] group-hover:rotate-3 duration-300 ease-in-out" alt="{{ $game->title }}" >
                                                    </div>
                                                    <div class="flex flex-col gap-2">
                                                        <div class="flex gap-2 items-center border-b border-slate-700/[.50] pb-3">
                                                            <div>
                                                                <img src="{{url('storage/'.$game->image_square)}}" alt="{{ $game->title }}" class="w-10 rounded-lg ">
                                                            </div>
                                                            <div class="flex flex-col gap-1 items-start">
                                                                <x-heading class="!text-base !leading-[14px] !mb-0 !text-slate-400">{{ $game->title }}</x-heading>
                                                                <x-text class="!text-xs !font-medium !text-slate-600">{{$game->provider->title}}</x-text>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <x-sub-heading class="!mb-3 !text-xs text-left !text-slate-400">{{ strip_tags(Str::words($game->description, 15, '...')) }}</x-sub-heading>
                                                        </div>
                                                        <div>
                                                            <div class="flex">
                                                                <div class="flex-1">
                                                                    <div class="flex flex-col">
                                                                        <x-text class="!text-xs !font-medium uppercase !text-slate-400">
                                                                            @if($game->volatility == 3)
                                                                                High
                                                                            @elseif($game->volatility == 2)
                                                                                Medium
                                                                            @else
                                                                                Low
                                                                            @endif
                                                                        </x-text>
                                                                        <x-text class="!text-xs !font-medium !text-slate-600">
                                                                            Volatility
                                                                        </x-text>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-1">
                                                                    <div class="flex flex-col">
                                                                        <x-text class="!text-xs !font-medium uppercase !text-slate-400">
                                                                            {{$game->rtp}}%
                                                                        </x-text>
                                                                        <x-text class="!text-xs !font-medium !text-slate-600">
                                                                            RTP
                                                                        </x-text>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-1">
                                                                    <div class="flex flex-col">
                                                                        <x-text class="!text-xs !font-medium uppercase !text-slate-400">
                                                                            <span class="text-[8px]">x</span>{{$game->maximum_win}}
                                                                        </x-text>
                                                                        <x-text class="!text-xs !font-medium !text-slate-600">
                                                                            Max win
                                                                        </x-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <x-primary-button-new>More details</x-primary-button-new>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif


                                @if($isListView)
                                    <div id="slideAnimationGames" class="my-5 grid grid-cols-1">
                                        <div class="flex flex-row text-slate-500 uppercase text-xs py-4 rounded-lg mb-4">
                                            <div class="w-[40%] text-left">Game Name</div>
                                            <div class="w-[15%] text-center">Volatility</div>
                                            <div class="w-[15%] text-center">RTP</div>
                                            <div class="w-[15%] text-center">Maximum win</div>
                                            <div class="w-[15%] text-center">Provider</div>
                                        </div>
                                        @foreach ($games as $game)
                                            <div class="relative flex flex-row px-4 py-8 cursor-pointer items-center rounded-xl hover:-translate-y-2 duration-300 ease-in-out bg-dark-blue hover:bg-dark-blue-hover w-full mb-3">
                                                <a href="{{ route('single.game.index', $game->id) }}" class="group absolute top-0 bottom-0 left-0 right-0 z-[10]"></a>
                                                <div class="flex gap-2 items-center w-[40%]">
                                                    <div>
                                                        <img src="{{url('storage/'.$game->image_square)}}" alt="{{$game->title}}" class="w-[60px] rounded-xl">
                                                    </div>
                                                    <div>
                                                        <x-heading class="!text-base whitespace-nowrap !text-slate-400">{{$game->title}}</x-heading>
                                                    </div>
                                                </div>
                                                <div class="w-[15%] relative z-[20]">
                                                    <div class="flex items-center justify-center h-full volatility-container">
                                                        <div class="relative">
                                                            <div class="volatility-details">
                                                                <span class="uppercase text-xs noto-sans">
                                                                    @if($game->volatility == 3)
                                                                        High
                                                                    @elseif($game->volatility == 2)
                                                                        Medium
                                                                    @else
                                                                        Low
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            @if($game->volatility == 'high')
                                                                <img src="{{url('storage/images/high-icon.png')}}" alt="" class="w-20" data-tooltip-target="tooltip-light">
                                                            @elseif($game->volatility == 'medium')
                                                                <img src="{{url('storage/images/medium-icon.png')}}" alt="" class="w-20" data-tooltip-target="tooltip-light">
                                                            @else
                                                                <img src="{{url('storage/images/low-icon.png')}}" alt="" class="w-20" data-tooltip-target="tooltip-light">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-[15%]">
                                                    <div class="flex items-center justify-center h-full">
                                                        <x-heading class="!text-base font-semibold !mb-0 !text-slate-400">{{$game->rtp}}%</x-heading>
                                                    </div>
                                                </div>
                                                <div class="w-[15%]">
                                                    <div class="flex items-center justify-center h-full">
                                                        <x-heading class="!text-base font-semibold !mb-0 !text-slate-400">x{{$game->maximum_win}}</x-heading>
                                                    </div>
                                                </div>
                                                <div class="w-[15%]">
                                                    <div class="flex items-center justify-center h-full">
                                                        <img src="{{url('storage/'.$game->provider->image)}}" alt="{{$game->provider->title}}" class="w-20">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="text-center">
                            <x-primary-button-new wire:click="loadMore" class="!px-4 !py-2">Load more</x-primary-button-new>
                        </div>
                    @else
                        <div class="flex flex-row gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-slate-600 w-6 h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 0 0-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634Zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 0 1-.189-.866c0-.298.059-.605.189-.866Zm-4.34 7.964a.75.75 0 0 1-1.061-1.06 5.236 5.236 0 0 1 3.73-1.538 5.236 5.236 0 0 1 3.695 1.538.75.75 0 1 1-1.061 1.06 3.736 3.736 0 0 0-2.639-1.098 3.736 3.736 0 0 0-2.664 1.098Z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-slate-600 montserrat">No game found</span>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    @include('layouts.home.game-search')
</div>
