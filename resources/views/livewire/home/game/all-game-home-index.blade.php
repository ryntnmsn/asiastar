<div class="h-full">
    @if(count($gameBanners) != null)
        <!-- Game Banners -->
        <div wire:ignore class="swiper gameBanner">
            <div class="swiper-wrapper">
                @foreach ($gameBanners as $gameBanner)
                <div class="swiper-slide">
                    <div class="h-[380px] md:h-[480px] w-full bg-cover !bg-fixed bg-no-repeat bg-center" style="background-image:url('{{ url('storage/'. $gameBanner->image) }}')"></div>
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
        <div wire:ignore class="w-[15%] h-full pr-5 relative">
            <div>
                @include('layouts.home.game-home-nav-desktop')
                @include('layouts.home.filter-home-nav-desktop')
            </div>
        </div>
        <div class="w-[85%] pl-10 flex flex-col gap-20">
        {{-- Games --}}

        <div>
            <div class="flex justify-between items-center">
                <div>
                    <x-heading>All Games</x-heading>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="flex gap-2">
                        <x-select wire:model.live="filterSortSelect">
                            <option value="" class="hidden">Select sort</option>
                            <option value="volatility">Volatility</option>
                            <option value="rtp">RTP</option>
                            <option value="maximum_win">Maximum win</option>
                        </x-select>
                        <x-select wire:model.live="filterSortOrder">
                            <option value="" class="hidden">Select order</option>
                            <option value="desc">High - Low</option>
                            <option value="asc">Low - High</option>
                        </x-select>
                    </div>

                    <div class="flex gap-2 items-center">
                        <div>
                            <x-label class="!text-slate-400 !mb-0 !text-sm">View:</x-label>
                        </div>
                        <div class="flex items-center">
                            <button type="button" wire:click="grid">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                </svg>
                            </button>
                            <button type="button" wire:click="list">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-600">
                                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                  </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                {{-- Grid View --}}
                @if($isGridView)
                    <div class="my-5 grid grid-cols-3 gap-5">
                        @forelse ($games as $game)
                            <div class="box-container hover:-translate-y-2 ease-in-out duration-300 rounded-xl overflow-hidden cursor-pointer group border border-slate-200 p-[3px]">
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
                                                        <img src="{{ url('storage/'. $game->image_square) }}" alt="{{ $game->title }}" class="!w-[80px] rounded-md" loading="lazy">
                                                    </div>
                                                </div>
                                                <div>
                                                    <x-heading class="text-[16px] !mb-0 text-slate-800">{{ $game->title }}</x-heading>
                                                    @if($game->description != null)
                                                        <x-sub-heading class="!mb-3 text-slate-600">{{ strip_tags(Str::words($game->description, 10, '...')) }}</x-sub-heading>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex">
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-0 uppercase">{{ $game->volatility }}</x-heading>
                                                            <x-sub-heading class="text-slate-500 capitalize">Volatility</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-0 uppercase">{{ $game->rtp }}<span class="text-[10px]">%</span></x-heading>
                                                            <x-sub-heading class="text-slate-500 capitalize">RTP</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-0 uppercase"><span class="text-[10px]">x</span>{{ $game->maximum_win }}</x-heading>
                                                            <x-sub-heading class="text-slate-500 capitalize">Maximum win</x-sub-heading>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-0 uppercase">{{ $game->provider->title }}</x-heading>
                                                            <x-sub-heading class="text-slate-500 capitalize">Provider</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-0 uppercase">{{ $game->region }}</x-heading>
                                                            <x-sub-heading class="text-slate-500 capitalize">Region</x-sub-heading>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex flex-col">
                                                            <x-heading class="!text-sm !mb-0 uppercase">{{ \Carbon\Carbon::parse($game->released_date)->format('m/d/Y') }}</x-heading>
                                                            <x-sub-heading class="text-slate-500 capitalize">Released date</x-sub-heading>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative rounded-xl overflow-hidden">
                                        <div>
                                            <img src="{{ url('storage/'. $game->image_vertical) }}" alt="{{ $game->title }}" class="rounded-xl swiper-img group-hover:scale-[1.1] group-hover:object-cover duration-300 ease-in-out" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>No game found</div>
                        @endforelse
                    </div>
                    <div class="flex items-center justify-center py-5">
                        <x-primary-button wire:click="loadMore">Load more</x-primary-button>
                    </div>
                @endif

                @if($isListView)
                    <div wire:transition class="my-5 grid grid-cols-1">
                        <div class="flex flex-row text-slate-500 uppercase text-xs py-4 bg-slate-200 rounded-lg mb-4">
                            <div class="w-[25%] text-center">Game Name</div>
                            <div class="w-[15%] text-center">Volatility</div>
                            <div class="w-[15%] text-center">RTP</div>
                            <div class="w-[15%] text-center">Maximum win</div>
                            <div class="w-[15%] text-center">Provider</div>
                            <div class="w-[15%] text-center">Released date</div>
                        </div>
                        @forelse ($games as $game)
                            <div class="flex flex-row px-4 py-8 cursor-pointer items-center rounded-xl hover:-translate-y-2 duration-300 ease-in-out even:bg-slate-100 hover:bg-slate-100 w-full">
                                <div class="flex gap-2 items-center w-[25%]">
                                    <div>
                                        <img src="{{url('storage/'.$game->image_square)}}" alt="{{$game->title}}" class="w-[60px] rounded-xl border border-slate-200 p-[3px] bg-white">
                                    </div>
                                    <div>
                                        <x-heading class="!text-base font-semibold whitespace-nowrap">{{$game->title}}</x-heading>
                                    </div>
                                </div>
                                <div class="w-[15%]">
                                    <div class="flex items-center justify-center h-full volatility-container">
                                        <div class="relative">
                                            <div class="volatility-details">
                                                <span class="uppercase text-xs">{{$game->volatility}}</span>
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
                                        <x-heading class="!text-base font-semibold !mb-0">{{$game->rtp}}%</x-heading>
                                    </div>
                                </div>
                                <div class="w-[15%]">
                                    <div class="flex items-center justify-center h-full">
                                        <x-heading class="!text-base font-semibold !mb-0">x{{$game->maximum_win}}</x-heading>
                                    </div>
                                </div>
                                <div class="w-[15%]">
                                    <div class="flex items-center justify-center h-full">
                                        <img src="{{url('storage/'.$game->provider->image)}}" alt="{{$game->provider->title}}" class="w-20">
                                    </div>
                                </div>
                                <div class="w-[15%]">
                                    <div class="flex items-center justify-center h-full">
                                        <x-heading class="!text-base font-semibold !mb-0">{{$game->released_date}}</x-heading>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>
                                No game found
                            </div>
                        @endforelse
                    </div>
                    <div class="flex items-center justify-center py-5">
                        <x-primary-button wire:click="loadMore">Load more</x-primary-button>
                    </div>
                @endif
            </div>
        </div>

        </div>
    </div>
</div>

