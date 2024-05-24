<div class="bg-amber-400 mt-40 px-5">
    <div class="py-20 w-full">
        <div class="w-full max-w-[1280px] mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-10 text-sm">
                <div class="flex-1">
                    <img src="{{url('storage/images/ASIASTAR_LOGO_HORIZONTAL_BLACK.png')}}" alt="" class="w-[180px] grayscale brightness-0 opacity-70">
                    <div class="mt-10">
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
                        <ul class="flex flex-col gap-3 text-slate-800">
                            @foreach ($getGameCategories as $category)
                                <li>
                                    <a wire:navigate href="{{route('game.category.home.index', $category->slug)}}" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">{{__($category->name)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col">
                        <x-heading class="!text-base !font-bold !text-slate-800">@lang('Services')</x-heading>
                        <ul class="flex flex-col gap-3 text-slate-800">
                            <li>
                                <a href="" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Studio Construction')</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Live Pachinko Construction')</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Property and Office Space Services')</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Global Cash Flow Serve')</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('API Distribution')</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('CDN Service')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col">
                        <x-heading class="!text-base !font-bold !text-slate-800">@lang('Useful Links')</x-heading>
                        <ul class="flex flex-col gap-3 text-slate-800">
                            <li>
                                <a href="{{route('about.our.company.index')}}" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Our Company')</a>
                            </li>
                            <li>
                                <a href="{{route('news.index')}}" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Company News')</a>
                            </li>
                            <li>
                                <a href="{{route('partner.home.index')}}" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Partners')</a>
                            </li>
                            <li>
                                <a href="{{route('join.us.index')}}" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Join us')</a>
                            </li>
                            <li>
                                <a href="{{route('contact.home.index')}}" class="hover:underline duration-300 ease-in-out underline-offset-4 hover:text-black">@lang('Contact us')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col">
                        <x-heading class="!text-base !font-bold !text-slate-800">@lang('Languages')</x-heading>
                        <ul class="flex flex-col gap-3 text-slate-800">
                            <li>
                                <a href="{{ url('/locale/en') }}" class="hover:underline duration-300 ease-in-out underline-offset-4">@lang('English')</a>
                            </li>
                            <li>
                                <a href="{{ url('/locale/jp') }}" class="hover:underline duration-300 ease-in-out underline-offset-4">@lang('Japanese')</a>
                            </li>
                            <li>
                                <a href="{{ url('/locale/ch') }}" class="hover:underline duration-300 ease-in-out underline-offset-4">@lang('Chinese')</a>
                            </li>
                            <li>
                                <a href="{{ url('/locale/kr') }}" class="hover:underline duration-300 ease-in-out underline-offset-4">@lang('Korean')</a>
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
