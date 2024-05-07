<div class="h-full">
    <div class="w-full h-full max-w-[1280px] mx-auto px-10">
        <div class="flex h-full items-center justify-center my-20">
            <div class="flex-1">
                <h1 class="noto-sans text-[120px] font-bold text-slate-200 tracking-tighter leading-[140px]">{{$title}}</h1>
            </div>
            <div class="flex-1">
                <img src="{{url('storage/' . $hero_image)}}" alt="{{$title}}" class="w-full">
            </div>
        </div>
        <div>
            <div class="flex gap-10 items-center">
                <div>
                    <div class="w-[180px] rounded-[34px] overflow-hidden p-1 bg-white shadow-xl">
                        <img src="{{url('storage/' . $image_square)}}" alt="{{$title}}" class="rounded-[30px]">
                    </div>
                </div>
                <div>
                    <x-heading>{{$title}}</x-heading>
                </div>
            </div>
            <div class="my-20">
                <div class="text-slate-400 leading-loose">{!! $description !!}</div>
            </div>
            <div class="my-20">
                <div class="mb-10">
                    <x-heading class="Capitalize">Game details</x-heading>
                </div>
                <div class="grid grid-cols-3 gap-10">
                    @if($volatility != null)
                        <div>
                            <x-heading class="uppercase !mb-1 !text-xl">{{$volatility}}</x-heading>
                            <x-sub-heading class="!text-[14px]">Session volatility</x-sub-heading>
                        </div>
                    @endif
                    @if($rtp != null)
                        <div>
                            <x-heading class="Capitalize !mb-1 !text-xl">{{$rtp}}%</x-heading>
                            <x-sub-heading class="!text-[14px]">RTP</x-sub-heading>
                        </div>
                    @endif
                    @if($maximum_win != null)
                        <div>
                            <x-heading class="Capitalize !mb-1 !text-xl"><span class="text-sm">x</span>{{$maximum_win}}</x-heading>
                            <x-sub-heading class="!text-[14px]">Maximum win</x-sub-heading>
                        </div>
                    @endif
                    @if($themes != null)
                        <div>
                            <x-heading class="Capitalize !mb-1 !text-xl">
                                @foreach ($themes as $theme)
                                    {{$theme->name}}{{$loop->last ? '' : ','}}
                                @endforeach
                            </x-heading>
                            <x-sub-heading class="!text-[14px]">Theme</x-sub-heading>
                        </div>
                    @endif
                    @if($provider != null)
                        <div>
                            <x-heading class="Capitalize !mb-1 !text-xl">{{$provider->title}}</x-heading>
                            <x-sub-heading class="!text-[14px]">Provider</x-sub-heading>
                        </div>
                    @endif
                    @if($features != null)
                        <div>
                            <x-heading class="Capitalize !mb-1 !text-xl">
                                @foreach ($features as $feature)
                                    {{$feature->name}}{{$loop->last ? '' : ','}}
                                @endforeach
                            </x-heading>
                            <x-sub-heading class="!text-[14px]">Features</x-sub-heading>
                        </div>
                    @endif
                    @if($available_language != null)
                        <div>
                            <div class="flex gap-2 mb-2">
                                @foreach ($available_language as $available_language)
                                    <div data-popover id="popover-default-{{$available_language->id}}" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-slate-500 transition-opacity duration-300 bg-white border border-slate-200 rounded-lg shadow-sm opacity-0">
                                        <div class="px-3 py-2">
                                            <p>{{$available_language->name}}</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                    <img data-popover-target="popover-default-{{$available_language->id}}" src="{{url('storage/'.$available_language->image)}}" alt="{{$available_language->name}}" class="hover:opacity-100 hover:grayscale-0 duration-300 ease-in-out w-10 opacity-80 rounded-[4px] grayscale">
                                @endforeach
                            </div>
                            <x-sub-heading class="!text-[14px]">Languages</x-sub-heading>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-40">
            <div class="mb-10 border-b border-slate-200 flex justify-between items-center">
                <x-heading class="Capitalize">Other Games</x-heading>
                <a href="" class="montserrat">All games</a>
            </div>
            <div>
                <div class="grid grid-cols-6 gap-14">
                    @foreach ($otherGames as $game)
                        <div class="hover:-translate-y-2 duration-300 ease-in-out cursor-pointer relative">
                            <a href="{{route('single.game.index', $game->id)}}" class="absolute z-10 bottom-0 top-0 right-0 left-0"></a>
                            <div class="bg-white p-1 rounded-[34px] overflow-hidden shadow-xl">
                                <img src="{{url('storage/'.$game->image_square)}}" alt="{{$game->title}}" class="rounded-[30px]">
                            </div>
                            <div>
                                <x-heading class="text-center !text-[16px] mt-3">{{$game->title}}</x-heading>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
