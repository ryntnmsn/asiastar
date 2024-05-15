<div class="">


    <div class="relative">
        <div class="absolute bottom-0 left-0 top-0 right-0 w-full max-w-[1280px] mx-auto items-center justify-center flex">
            <x-heading class="text-animation !text-[112px] pb-40 !text-center !leading-[112px] !font-bold z-20 !text-slate-50">Every Ball <br>Sparks a Fortune!</x-heading>
        </div>
        <div class="absolute bottom-0 z-30 pb-40 flex items-center justify-center left-0 right-0">
            <a href="#games">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-slate-600 hover:text-slate-50 duration-300 ease-in-out hover:-translate-y-2">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="bg-gradient-to-t from-slate-900 absolute top-0 left-0 right-0 bottom-0 z-10">

        </div>
        <div class="youtube-container">
            <iframe src="https://www.youtube.com/embed/_Td7JjCTfyc?autoplay=1&mute=1&loop=1&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1&rel=0&loop=1&playlist=_Td7JjCTfyc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>


    <div id="games" class="w-full max-w-[1280px] mx-auto relative pt-40">
        <div class="flex justify-center pb-10">
            <x-heading class="!font-bold !text-[52px]">Games</x-heading>
        </div>
        <div class="flex">
            <div wire:ignore class="flex-1">
                <div class="flex flex-col gap-5 items-center">
                    <div class="swiper-pachi cardPachinko">
                        <div class="swiper-wrapper">
                            @foreach ($games as $game)
                                <div class="swiper-slide">
                                    <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <x-heading>Live Pachinko</x-heading>
                    </div>
                    <div>
                        <x-primary-button-new class="!px-4 !py-2">View All Games</x-primary-button-new>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="flex flex-col gap-5 items-center">
                    <div class="swiper-pachi cardCasino">
                        <div class="swiper-wrapper">
                            @foreach ($games as $game)
                                <div class="swiper-slide">
                                    <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <x-heading>Live Casino</x-heading>
                    </div>
                    <div>
                        <x-primary-button-new class="!px-4 !py-2">View All Games</x-primary-button-new>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="flex flex-col gap-5 items-center">
                    <div class="swiper-pachi cardCockfighting">
                        <div class="swiper-wrapper">
                            @foreach ($games as $game)
                                <div class="swiper-slide">
                                    <img src="{{url('storage/'.$game->image_vertical)}}" alt="" class="w-64">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <x-heading>Live Cockfighting</x-heading>
                    </div>
                    <div>
                        <x-primary-button-new class="!px-4 !py-2">View All Games</x-primary-button-new>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="mt-40">
        <div class="gallery">
            <div class="left">
                <div class="detailsWrapper text-slate-50">
                    <div class="details">
                        <div class="headline text-2xl font-bold">Lorem ipsum dolor sit amet</div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                    <div class="details">
                        <div class="headline text-2xl font-bold">Lorem ipsum dolor sit amet</div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                    <div class="details">
                        <div class="headline text-2xl font-bold">Lorem ipsum dolor sit amet</div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                    <div class="details">
                        <div class="headline text-2xl font-bold">Lorem ipsum dolor sit amet</div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                </div>
            </div>

            <div class="right">
                <div class="photos">

                        <div class="w-64 relative h-full">
                            <div class="">
                                <div class="photo">
                                    <img src="{{url('storage/images/sample01.png')}}" alt="" class="w-64">
                                </div>
                                <div class="photo">
                                    <img src="{{url('storage/images/sample02.png')}}" alt="" class="w-64">
                                </div>
                                <div class="photo">
                                    <img src="{{url('storage/images/sample03.png')}}" alt="" class="w-64">
                                </div>
                                <div class="photo">
                                    <img src="{{url('storage/images/sample01.png')}}" alt="" class="w-64">
                                </div>
                            </div>
                            <div class="absolute flex items-center justify-center z-10">
                                <img src="{{url('storage/images/phone.png')}}" alt="" class="w-64">
                            </div>
                        </div>



                </div>
            </div>
        </div>
    </div>









    <div>
        {{-- <ul>
            <li><a href="locale/en">English</a></li>
            <li><a href="locale/jp">Japanese</a></li>
            <li><a href="locale/ch">Chinese</a></li>
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
