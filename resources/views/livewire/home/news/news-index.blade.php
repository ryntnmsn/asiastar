<div class="h-full w-full">
    <div class="w-full h-full max-w-[1280px] mx-auto px-10 mt-20">
        <div>
            <div>
                <x-heading class="text-3xl">Company News</x-heading>
            </div>

            @if(count($companyNews) != null)
                <!-- Companies News -->
                <div id="zoomEffect" wire:ignore class="swiper companyNews overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach ($companyNews as $companyNews)
                        <div class="swiper-slide relative duration-300 ease-in-out cursor-pointer group">
                            <a href="{{route('single.news.index', ['category' => $companyNews->category, 'slug' => $companyNews->slug])}}" class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                            <div class="flex w-full gap-10">
                                <div class="flex-1">
                                    <div class="relative">
                                        <div class="absolute top-0 left-0 bg-white m-5 w-16 h-16 p-1 shadow-xl">
                                            <div class="flex flex-col items-center justify-center gap-0">
                                                <span class="font-semibold mb-0 text-slate-600 !text-[32px] leading-[32px] montserrat">{{date('j', strtotime($companyNews->created_at) )}}</span>

                                                <span class="text-[16px] leading-[16px] m-0 montserrat text-slate-600">{{date('M', strtotime($companyNews->created_at) )}}</span>
                                            </div>
                                        </div>
                                        <img src="{{url('storage/'.$companyNews->image)}}" alt="" class="w-full">
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex text-left flex-col items-start">
                                        <x-heading>
                                            {{$companyNews->name}}
                                        </x-heading>
                                        <x-paragraph>
                                            {{$companyNews->short_description}}
                                        </x-paragraph>
                                        <x-primary-button class="!text-[16px] ">Read more</x-primary-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            @endif

            <div class="mt-20">
                <div>
                    <x-heading class="text-3xl">Latest News</x-heading>
                </div>
                <!-- Companies Latest -->
                <div>
                    <div class="grid grid-cols-3 py-5">
                        @foreach ($latestNews as $latestNews)
                            <div class="group">
                                <div class="flex border border-slate-50 bg-white p-5 gap-2 flex-col w-full group-hover:-translate-y-2 hover:shadow-2xl hover:z-10 duration-300 ease-in-out cursor-pointer relative h-full">
                                    <a href="{{route('single.news.index', ['category' => $latestNews->category, 'slug' => $latestNews->slug])}}" class="absolute top-0 bottom-0 left-0 right-0 z-20"></a>
                                    <div class="relative">
                                        <div class="absolute top-0 left-0 bg-white m-2 w-14 h-14 p-1 shadow-xl">
                                            <div class="flex flex-col items-center justify-center gap-0">
                                                <span class="font-semibold mb-0 text-slate-600 !text-[26px] leading-[28px] montserrat">{{date('j', strtotime($companyNews->created_at) )}}</span>
                                                <span class="text-[14px] leading-[12px] m-0 montserrat text-slate-600">{{date('M', strtotime($companyNews->created_at) )}}</span>
                                            </div>
                                        </div>
                                        <img src="{{url('storage/'. $latestNews->image)}}" alt="{{$latestNews->name}}" class="w-full">
                                    </div>
                                    <div>
                                        <div class="flex text-left flex-col justify-between items-start">
                                            <x-heading class="text-base !font-medium !text-slate-600">
                                                {{$latestNews->name}}
                                            </x-heading>
                                            <x-paragraph class="!text-sm">
                                                {{Str::words($latestNews->short_description, 13, '...')}}
                                            </x-paragraph>
                                            <a href="" class="text-amber-500 text-sm">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-20 text-center">
                    <div>
                        <x-primary-button href="{{route('all.company.news.index')}}">View all news</x-primary-button>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-44">
            <div class="text-center">
                <x-heading class="text-3xl">Our Achievements</x-heading>
                <p class="text-slate-500 noto-sans font-light leading-loose">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
                </p>
            </div>
            <div>
                <div class="grid grid-cols-3 py-5">
                    @foreach ($achievements as $achievement)
                        <div class="group">
                            <div class="flex border border-slate-50 bg-white p-5 gap-2 flex-col w-full group-hover:-translate-y-2 hover:shadow-2xl hover:z-10 duration-300 ease-in-out cursor-pointer relative h-full">
                                <a href="{{route('single.news.index', ['category' => $achievement->category, 'slug' => $achievement->slug])}}" class="absolute top-0 bottom-0 left-0 right-0 z-20"></a>
                                <div class="relative">
                                    <div class="absolute top-0 left-0 bg-white m-2 w-14 h-14 p-1 shadow-xl">
                                        <div class="flex flex-col items-center justify-center gap-0">
                                            <span class="font-semibold mb-0 text-slate-600 !text-[26px] leading-[28px] montserrat">{{date('j', strtotime($achievement->created_at) )}}</span>
                                            <span class="text-[14px] leading-[12px] m-0 montserrat text-slate-600">{{date('M', strtotime($achievement->created_at) )}}</span>
                                        </div>
                                    </div>
                                    <img src="{{url('storage/'. $achievement->image)}}" alt="{{$achievement->name}}" class="w-full">
                                </div>
                                <div>
                                    <div class="flex text-left flex-col justify-between items-start">
                                        <x-heading class="text-base !font-medium !text-slate-600">
                                            {{$achievement->name}}
                                        </x-heading>
                                        <x-paragraph class="!text-sm">
                                            {{Str::words($achievement->short_description, 13, '...')}}
                                        </x-paragraph>
                                        <a href="" class="text-amber-500 text-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-20 text-center">
                <div>
                    <x-primary-button href="{{route('all.achivements.news.index')}}">View all achievements</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</div>
