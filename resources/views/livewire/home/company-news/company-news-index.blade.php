<div class="h-full w-full">
    <div class="w-full h-full max-w-[1280px] mx-auto px-10 mt-20">
        <div>
            <div>
                <x-heading class="text-3xl">Company News</x-heading>
            </div>

            @if(count($companyNews) != null)
                <!-- Companies News -->
                <div id="zoomEffect" wire:ignore class="swiper companyNews">
                    <div class="swiper-wrapper">
                        @foreach ($companyNews as $companyNews)
                        <div class="swiper-slide">
                            <div class="flex w-full gap-10">
                                <div class="flex-1">
                                    <img src="{{url('storage/'.$companyNews->image)}}" alt="" class="w-full rounded-xl">
                                </div>
                                <div class="flex-1">
                                    <div class="flex text-left flex-col items-start">
                                        <x-heading>
                                            {{$companyNews->name}}
                                        </x-heading>
                                        <x-paragraph>
                                            {{$companyNews->short_description}}
                                        </x-paragraph>
                                        <x-button-orange>Read more</x-button-orange>
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
                    <div class="grid grid-cols-4 gap-10">
                        @foreach ($latestNews as $latestNews)
                            <div id="zoomEffect">
                                <div class="flex gap-2 flex-col w-full hover:-translate-y-2 duration-300 ease-in-out cursor-pointer">
                                    <div>
                                        <img src="{{url('storage/'. $latestNews->image)}}" alt="{{$latestNews->name}}" class="w-full rounded-xl">
                                    </div>
                                    <div>
                                        <div class="flex text-left flex-col items-start">
                                            <x-heading class="text-base !font-medium !text-slate-600">
                                                {{$latestNews->name}}
                                            </x-heading>
                                            <x-paragraph class="!text-sm">
                                                {{$latestNews->short_description}}
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
                        <x-primary-button>View all news</x-primary-button>
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
                <div class="grid grid-cols-4 gap-10">
                    @foreach ($achievements as $achievement)
                        <div id="zoomEffect">
                            <div class="flex gap-2 flex-col w-full hover:-translate-y-2 duration-300 ease-in-out cursor-pointer">
                                <div>
                                    <img src="{{url('storage/'. $achievement->image)}}" alt="{{$achievement->name}}" class="w-full rounded-xl">
                                </div>
                                <div>
                                    <div class="flex text-left flex-col items-start">
                                        <x-heading class="text-base !font-medium !text-slate-600">
                                            {{$achievement->name}}
                                        </x-heading>
                                        <x-paragraph class="!text-sm">
                                            {{$achievement->short_description}}
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
                    <x-primary-button>View all achievements</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</div>
