<div class="">
    <div class="relative">
        {{-- <div class="absolute bottom-0 left-0 top-0 right-0 w-full max-w-[1280px] mx-auto items-center justify-center flex">
            <x-heading class="text-animation md:!text-[60px] !text-[42px] lg:!text-[80px] xl:!text-[112px] !text-center !leading-[45px] md:!leading-[70px] lg:!leading-[90px]  xl:!leading-[112px] !font-bold z-20 !text-slate-50">Every Ball <br>Sparks a Fortune!</x-heading>
        </div> --}}
        {{-- <div class="absolute bottom-0 z-30 pb-40 flex items-center justify-center left-0 right-0">
            <a href="#games">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-slate-600 hover:text-slate-50 duration-300 ease-in-out hover:-translate-y-2">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z" clip-rule="evenodd" />
                </svg>
            </a>
        </div> --}}
        <div class="bg-gradient-to-b from-slate-800 absolute top-0 left-0 right-0 bottom-0 z-10">

        </div>
        <div class="youtube-container">
            <iframe src="https://www.youtube.com/embed/9qVx-d4Cf4s?autoplay=1&mute=1&loop=1&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1&rel=0&loop=1&playlist=9qVx-d4Cf4s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>


    <div class="px-5 w-full max-w-[1280px] mx-auto relative h-auto overflow-hidden flex items-center justify-center rounded-2xl pt-20">
        <div class="flex flex-col gap-10">
            <div class="flex flex-col justify-center items-center">
                <x-heading class="!font-bold !text-[52px]">@lang('Games')</x-heading>
                <x-paragraph class="text-center w-3/4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </x-paragraph>
            </div>
            <div class="main gap-5 h-[420px] md:h-[50vw]">
                <div class="single-column flex flex-col gap-5 rounded-2xl">
                    @foreach ($gamesCol1 as $game)
                        <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64 rounded-2xl">
                    @endforeach
                </div>
                <div class="single-column flex flex-col gap-5 rounded-2xl">
                    @foreach ($gamesCol2 as $game)
                        <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64 rounded-2xl">
                    @endforeach
                </div>
                <div class="single-column flex flex-col gap-5 rounded-2xl">
                    @foreach ($gamesCol3 as $game)
                        <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64 rounded-2xl">
                    @endforeach
                </div>
                <div class="single-column md:flex flex-col gap-5 rounded-2xl hidden">
                    @foreach ($gamesCol4 as $game)
                        <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64 rounded-2xl">
                    @endforeach
                </div>
                <div class="single-column md:flex flex-col gap-5 rounded-2xl hidden">
                    @foreach ($gamesCol5 as $game)
                        <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64 rounded-2xl">
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore class="px-5 mt-40 w-full max-w-[1280px] mx-auto h-full">
        <div class="flex flex-col gap-10">
            <div class="flex flex-col justify-center items-center">
                <x-heading class="!font-bold !text-[52px]">@lang('About us')</x-heading>
                <x-paragraph class="text-center w-3/4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </x-paragraph>
            </div>
            <div>
                <div class="grid sm:grid-cols-3 gap-5 lg:gap-10 about-us">
                    <div>
                        <div class="flex flex-col justify-between gap-5 lg:gap-10 h-full">
                            <div class="p-10 rounded-2xl bg-slate-50 shadow dark:bg-dark-blue h-full flex items-center justify-center flex-col">
                                <x-heading class="!mb-0 !font-bold !text-[72px] flex">
                                    <div id="start2" class="start-counter"></div>
                                    <div id="counter2" data-stop="10" data-speed="100" class="text-amber-400">0</div>
                                    <span>+</span>
                                </x-heading>
                                <x-heading class="!mb-0 !font-bold !text-[24px] leading-[40px] text-center">
                                    <div>
                                        @lang('Years of experience')
                                    </div>
                                </x-heading>
                            </div>
                            <div class="p-10 rounded-2xl bg-slate-50 shadow dark:bg-dark-blue h-full flex items-center justify-center flex-col">
                                <x-heading class="!mb-0 !font-bold !text-[24px] leading-[40px] text-left border-l-[6px] pl-3 border-amber-400">
                                    <div>
                                        @lang('Variety of professional Pachinko games')
                                    </div>
                                </x-heading>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col justify-between gap-5 lg:gap-10 h-full">
                            <div class="p-10 rounded-2xl bg-slate-50 shadow dark:bg-dark-blue h-full flex items-center justify-center flex-col">
                                <x-heading class="!mb-0 !font-bold !text-[72px] flex">
                                    <div id="start3" class="start-counter"></div>
                                    <div id="counter3" data-stop="200" data-speed="10" class="text-amber-400">0</div>
                                    <span>+</span>
                                </x-heading>
                                <x-heading class="!mb-0 !font-bold !text-[24px] leading-[40px] text-center">
                                    <div>
                                        @lang('Live casino games')
                                    </div>
                                </x-heading>
                            </div>
                            <div class="p-10 rounded-2xl bg-slate-50 shadow dark:bg-dark-blue h-full flex items-center justify-center">
                                <img src="{{url('storage/images/ASIASTAR_LOGO_BLACK.png')}}" alt="" class="w-full max-w-[180px] block dark:hidden">
                                <img src="{{url('storage/images/ASIASTAR_LOGO_WHITE.png')}}" alt="" class="w-full max-w-[180px] hidden dark:block">
                            </div>
                            <div class="p-10 rounded-2xl bg-slate-50 shadow dark:bg-dark-blue h-full flex items-center justify-center flex-col">
                                <x-heading class="!mb-0 !font-bold !text-[24px] leading-[40px] text-left border-l-[6px] pl-3 border-amber-400">
                                    <div>
                                        @lang('24/7 Support')
                                    </div>
                                </x-heading>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col justify-between gap-5 lg:gap-10 h-full">
                            <div class="p-10 rounded-2xl bg-slate-50 shadow dark:bg-dark-blue h-full flex items-center justify-center flex-col">
                                <x-heading class="!font-bold !text-[24px] leading-[40px] text-left border-l-[6px] pl-3 border-amber-400">
                                    <div>
                                        @lang('Available in 100+ countries and supports multiple currencies')
                                    </div>
                                </x-heading>
                            </div>
                            <div class="p-10 rounded-2xl bg-slate-50 shadow dark:bg-dark-blue h-full flex items-center justify-center flex-col">
                                <x-heading class="!mb-0 !font-bold !text-[24px] leading-[40px] text-left border-l-[6px] pl-3 border-amber-400">
                                    <div>
                                        @lang('API Distribution Business and CDN Services')
                                    </div>
                                </x-heading>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore class="py-40 w-full max-w-[1280px] mx-auto h-full">
        <div class="flex flex-col gap-10">
            <div class="flex flex-col justify-center items-center">
                <x-heading class="!font-bold !text-[52px]">@lang('Partners')</x-heading>
                <x-paragraph class="text-center w-3/4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </x-paragraph>
            </div>
            <div>
                <div class="flex flex-wrap gap-10 items-center justify-center">
                    @foreach ($partners as $partner)
                        <div class="bg-slate-50 shadow dark:bg-dark-blue hover:dark:bg-dark-blue-hover px-6 py-2 rounded-full">
                            <x-heading class="!text-base !mb-0 whitespace-nowrap">
                                {{ $partner->title }}
                            </x-heading>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>
        {{-- <ul>
            <li><a href="locale/en">English</a></li>
            <li><a href="locale/jp">Japanese</a></li>
            <li><a href="locale/ch">Chinese</a></li>
            <li><a href="locale/kr">Korean</a></li>
        </ul>

       <p class="py-10">
            @lang('GAMES')
       </p> --}}

       {{-- @foreach ($games as $game)
           <div class="flex gap-3">
                <p>{{ $game->title }}</p>
                <p>{{ $game->language->name }}</p>
           </div>
       @endforeach --}}
    </div>
</div>
