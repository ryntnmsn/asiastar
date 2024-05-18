<div class="bg-amber-400 mt-40">
    <div class="py-20 w-full">
        <div class="w-full max-w-[1280px] mx-auto">
            <div class="flex gap-10">
                <div class="flex-1">
                    <img src="{{url('storage/images/ASIASTAR_LOGO_HORIZONTAL_BLACK.png')}}" alt="" class="w-[180px] grayscale brightness-0 opacity-70">
                    <x-paragraph class="!text-slate-800 !text-xs mt-5 !font-normal">
                        Blk 10 Lot 29 Montalban Heights San Jose Rodriguez RIzal Metro Manila PH
                    </x-paragraph>
                    <div>
                        <ul class="flex gap-2">
                            <li>
                                <a href=""><img src="{{url('storage/images/facebook.png')}}" alt="" class="w-6"></a>
                            </li>
                            <li>
                                <a href=""><img src="{{url('storage/images/instagram.png')}}" alt="" class="w-6"></a>
                            </li>
                            <li>
                                <a href=""><img src="{{url('storage/images/x.png')}}" alt="" class="w-6"></a>
                            </li>
                            <li>
                                <a href=""><img src="{{url('storage/images/discord.png')}}" alt="" class="w-6"></a>
                            </li>
                            <li>
                                <a href=""><img src="{{url('storage/images/telegram.png')}}" alt="" class="w-6"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col">
                        <x-heading class="!text-base !font-bold !text-slate-800">@lang('Games')</x-heading>
                        <ul class="flex flex-col gap-2 text-slate-800">
                            @foreach ($getGameCategories as $category)
                                <li>
                                    <a wire:navigate href="{{route('game.category.home.index', $category->slug)}}">{{__($category->name)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col">
                        <x-heading class="!text-base !font-bold !text-slate-800">@lang('Useful Links')</x-heading>
                        <ul class="flex flex-col gap-2 text-slate-800">
                            <li>
                                <a href="{{route('about.our.company.index')}}">@lang('Our Company')</a>
                            </li>
                            <li>
                                <a href="{{route('news.index')}}">@lang('Company News')</a>
                            </li>
                            <li>
                                <a href="{{route('partner.home.index')}}">@lang('Partners')</a>
                            </li>
                            <li>
                                <a href="{{route('join.us.index')}}">@lang('Join us')</a>
                            </li>
                            <li>
                                <a href="{{route('contact.home.index')}}">@lang('Contact us')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col">
                        <x-heading class="!text-base !font-bold !text-slate-800">@lang('Languages')</x-heading>
                        <ul class="flex flex-col gap-2 text-slate-800">
                            <li>
                                <a href="{{ url('/locale/en') }}">@lang('English')</a>
                            </li>
                            <li>
                                <a href="{{ url('/locale/jp') }}">@lang('Japanese')</a>
                            </li>
                            <li>
                                <a href="{{ url('/locale/ch') }}">@lang('Chinese')</a>
                            </li>
                            <li>
                                <a href="{{ url('/locale/kr') }}">@lang('Korean')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-slate-800/[.20] py-2">
        <p class="text-center text-slate-800 text-sm">@lang('Copyright')  2024. @lang('All rights reserved').</p>
    </div>
</div>
