<div class="h-full">
    @if(count($gameBanners) != null)
        <!-- Game Banners -->
        <div>
            <div wire:ignore class="swiper gameBanner">
                <div class="swiper-wrapper">
                    @foreach ($gameBanners as $gameBanner)
                    <div class="swiper-slide">
                        <div class="h-[380px] lg:h-[560px] xl:h-[768px] w-full bg-cover !bg-fixed bg-no-repeat bg-center" style="background-image:url('{{ url('storage/'. $gameBanner->image) }}')"></div>
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

    <div class="h-full w-full max-w-[1280px] mx-auto px-3">
        <div class="mt-10">
            <div class="flex flex-col xl:flex-row">
                <div class="w-full xl:w-[20%]">
                    <div class="dark:bg-slate-900 bg-white  p-5 rounded-2xl mr-0 xl:mr-8 xl:mb-0 mb-8">
                        @include('layouts.home.game-category-nav-desktop')
                    </div>
                </div>
                <div wire:ignore class="w-full xl:w-[80%] relative">

                    {{-- Hot Games --}}
                    @if(count($hotGames) != null)
                        <div id="slideAnimationGames" class="mb-10">
                            <div class="flex justify-between items-center">
                                <div>
                                    <x-heading class="!mb-0">@lang('Hot Games')</x-heading>
                                </div>
                                <div>
                                    <div class="flex dark:text-slate-400">
                                        <div class="hotGames-prev"><x-icon-arrow-nav-left></x-icon-arrow-nav-lef></div>
                                        <div class="hotGames-next"><x-icon-arrow-nav-right></x-icon-arrow-nav-right></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper hotGames">
                                <div class="swiper-wrapper pt-5 pb-10 relative">
                                    @foreach ($hotGames as $game)
                                        <div class="group relative swiper-slide flex flex-col gap-2 duration-300 ease-in-out bg-white dark:bg-slate-900 dark:hover:bg-dark-blue-hover border-slate-100 dark:border-slate-800 border hover:-translate-y-2 cursor-pointer hover:shadow-2xl">
                                            <a href="{{ route('single.game.index', $game->id) }}" class="absolute top-0 bottom-0 left-0 right-0 z-[100]"></a>
                                            <div class="p-5 flex flex-col gap-4">
                                                <div class="overflow-hidden rounded-2xl">
                                                    <img src="{{ url('storage/'. $game->image_horizontal) }}" class="w-full rounded-2xl object-cover group-hover:scale-[1.1] group-hover:rotate-3 duration-300 ease-in-out" alt="{{ $game->title }}" >
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <div class="flex gap-2 items-center border-b border-slate-300 dark:border-slate-700/[.50] pb-3">
                                                        <div>
                                                            <img src="{{url('storage/'.$game->image_square)}}" alt="{{ $game->title }}" class="w-10 rounded-lg ">
                                                        </div>
                                                        <div class="flex flex-col gap-1 items-start">
                                                            <x-heading class="!text-base text-left !leading-[14px] !mb-0">{{ $game->title }}</x-heading>
                                                            <x-text class="!text-xs !font-medium">{{$game->provider->title}}</x-text>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <x-sub-heading class="!mb-3 !text-xs text-left">{!! strip_tags(Str::limit($game->description, 120, '...')) !!}</x-sub-heading>
                                                    </div>
                                                    <div>
                                                        <div class="flex">
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                        @if($game->volatility == 3)
                                                                            @lang('High')
                                                                        @elseif($game->volatility == 2)
                                                                            @lang('Medium')
                                                                        @else
                                                                            @lang('Low')
                                                                        @endif
                                                                    </x-text>
                                                                    <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                        @lang('Volatility')
                                                                    </x-text>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                        {{$game->rtp}}%
                                                                    </x-text>
                                                                    <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                        RTP
                                                                    </x-text>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                        <span class="text-[8px]">x</span>{{$game->maximum_win}}
                                                                    </x-text>
                                                                    <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                        @lang('Max win')
                                                                    </x-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <x-primary-button-new class="!text-sm">@lang('More details')</x-primary-button-new>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif


                    {{-- New Games --}}
                    @if(count($newGames) != null)
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <div>
                                    <x-heading class="!mb-0">@lang('New Games')</x-heading>
                                </div>
                                <div>
                                    <div class="flex dark:text-slate-400">
                                        <div class="newGames-prev"><x-icon-arrow-nav-left></x-icon-arrow-nav-lef></div>
                                        <div class="newGames-next"><x-icon-arrow-nav-right></x-icon-arrow-nav-right></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper newGames">
                                <div class="swiper-wrapper pt-5 pb-10 relative">
                                    @foreach ($newGames as $game)
                                        <div class="group relative swiper-slide flex flex-col gap-2 duration-300 ease-in-out bg-white dark:bg-slate-900 dark:hover:bg-dark-blue-hover border-slate-100 dark:border-slate-800 border hover:-translate-y-2 cursor-pointer hover:shadow-2xl">
                                            <a href="{{ route('single.game.index', $game->id) }}" class="absolute top-0 bottom-0 left-0 right-0 z-[100]"></a>
                                            <div class="p-5 flex flex-col gap-4">
                                                <div class="overflow-hidden rounded-2xl">
                                                    <img src="{{ url('storage/'. $game->image_horizontal) }}" class="w-full rounded-2xl object-cover group-hover:scale-[1.1] group-hover:rotate-3 duration-300 ease-in-out" alt="{{ $game->title }}" >
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <div class="flex gap-2 items-center border-b border-slate-300 dark:border-slate-700/[.50] pb-3">
                                                        <div>
                                                            <img src="{{url('storage/'.$game->image_square)}}" alt="{{ $game->title }}" class="w-10 rounded-lg ">
                                                        </div>
                                                        <div class="flex flex-col gap-1 items-start">
                                                            <x-heading class="!text-base !leading-[14px] !mb-0">{{ $game->title }}</x-heading>
                                                            <x-text class="!text-xs !font-medium">{{$game->provider->title}}</x-text>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <x-sub-heading class="!mb-3 !text-xs text-left">{!! strip_tags(Str::limit($game->description, 120, '...')) !!}</x-sub-heading>
                                                    </div>
                                                    <div>
                                                        <div class="flex">
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                        @if($game->volatility == 3)
                                                                            @lang('High')
                                                                        @elseif($game->volatility == 2)
                                                                            @lang('Medium')
                                                                        @else
                                                                            @lang('Low')
                                                                        @endif
                                                                    </x-text>
                                                                    <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                        @lang('Volatility')
                                                                    </x-text>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                        {{$game->rtp}}%
                                                                    </x-text>
                                                                    <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                        RTP
                                                                    </x-text>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="flex flex-col">
                                                                    <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                        <span class="text-[8px]">x</span>{{$game->maximum_win}}
                                                                    </x-text>
                                                                    <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                        @lang('Max win')
                                                                    </x-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <x-primary-button-new class="!text-sm">@lang('More details')</x-primary-button-new>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif


                    {{-- Coming SOon Games --}}
                    @if(count($comingSoonGames) != null)
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <div>
                                    <x-heading class="!mb-0">@lang('Coming Soon')</x-heading>
                                </div>
                                <div>
                                    <div class="flex dark:text-slate-400">
                                        <div class="comingSoonGames-prev"><x-icon-arrow-nav-left></x-icon-arrow-nav-lef></div>
                                        <div class="comingSoonGames-next"><x-icon-arrow-nav-right></x-icon-arrow-nav-right></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper comingSoonGames">
                                <div class="swiper-wrapper pt-5 pb-10 relative">
                                    @foreach ($comingSoonGames as $game)
                                    <div class="group relative swiper-slide flex flex-col gap-2 duration-300 ease-in-out bg-white dark:bg-slate-900 dark:hover:bg-dark-blue-hover border-slate-100 dark:border-slate-800 border hover:-translate-y-2 cursor-pointer hover:shadow-2xl">
                                        <a href="{{ route('single.game.index', $game->id) }}" class="absolute top-0 bottom-0 left-0 right-0 z-[100]"></a>
                                        <div class="p-5 flex flex-col gap-4">
                                            <div class="overflow-hidden rounded-2xl">
                                                <img src="{{ url('storage/'. $game->image_horizontal) }}" class="w-full rounded-2xl object-cover group-hover:scale-[1.1] group-hover:rotate-3 duration-300 ease-in-out" alt="{{ $game->title }}" >
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <div class="flex gap-2 items-center border-b border-slate-300 dark:border-slate-700/[.50] pb-3">
                                                    <div>
                                                        <img src="{{url('storage/'.$game->image_square)}}" alt="{{ $game->title }}" class="w-10 rounded-lg ">
                                                    </div>
                                                    <div class="flex flex-col gap-1 items-start">
                                                        <x-heading class="!text-base !leading-[14px] !mb-0">{{ $game->title }}</x-heading>
                                                        <x-text class="!text-xs !font-medium">{{$game->provider->title}}</x-text>
                                                    </div>
                                                </div>
                                                <div>
                                                    <x-sub-heading class="!mb-3 !text-xs text-left">{!! strip_tags(Str::limit($game->description, 120, '...')) !!}</x-sub-heading>
                                                </div>
                                                <div>
                                                    <div class="flex">
                                                        <div class="flex-1">
                                                            <div class="flex flex-col">
                                                                <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                    @if($game->volatility == 3)
                                                                        @lang('High')
                                                                    @elseif($game->volatility == 2)
                                                                        @lang('Medium')
                                                                    @else
                                                                        @lang('Low')
                                                                    @endif
                                                                </x-text>
                                                                <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                    @lang('Volatility')
                                                                </x-text>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex flex-col">
                                                                <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                    {{$game->rtp}}%
                                                                </x-text>
                                                                <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                    RTP
                                                                </x-text>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex flex-col">
                                                                <x-text class="!text-xs !font-medium !text-slate-600 dark:!text-slate-400 uppercase">
                                                                    <span class="text-[8px]">x</span>{{$game->maximum_win}}
                                                                </x-text>
                                                                <x-text class="!text-xs !font-medium dark:!text-slate-600 !text-slate-400">
                                                                    @lang('Max win')
                                                                </x-text>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <x-primary-button-new class="!text-sm">@lang('More details')</x-primary-button-new>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @livewire('home.game-search')

</div>
