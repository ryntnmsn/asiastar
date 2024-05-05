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
                <div class="flex text-slate-600 border-b border-slate-200 pb-5 mt-12">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-600">
                            <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                          </svg>
                    </span>
                    <span class="text-slate-600">
                        Filters
                    </span>
                </div>
                <div>
                    <div id="accordion-open" data-accordion="open" data-active-classes="bg-none">
                        <div class="border-b border-slate-200 py-4">
                            <h2 id="accordion-open-heading-year">
                                <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-slate-600" data-accordion-target="#accordion-open-body-year" aria-expanded="false" aria-controls="accordion-open-body-year">
                                    <span>Year</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-open-body-year" class="hidden mt-4 duration-300 ease-in-out" aria-labelledby="accordion-open-heading-year relative">
                                <fieldset id="slideAnimation">
                                    <div class="flex items-center gap-2 mb-4">
                                        <input wire:model.live="filterYear" id="year-option-all" type="radio" value="" checked name="year" class="w-4 h-4 border-slate-300 checked:bg-amber-500 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                            <span class="text-slate-500">
                                                All
                                            </span>
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-2 mb-4">
                                        <input wire:model.live="filterYear" id="year-option-" value="" type="radio" name="year"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                            <span class="text-slate-500">
                                                2023
                                            </span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[85%] pl-10 flex flex-col gap-20">
            <div>
                <x-heading>Coming Soon</x-heading>

                <div class="mt-10">
                    <ol class="relative border-s border-slate-200 flex flex-col gap-10">
                        @foreach ($games as $game)
                            <li class="mb-10 ms-6 flex items-center p-5 group rounded-xl hover:bg-slate-100 cursor-pointer">
                                <div>
                                    <img src="{{url('storage/' . $game->image_horizontal)}}" alt="{{$game->title}}" class="w-[340px] rounded-xl">
                                </div>
                                <div>
                                    <span class="absolute flex items-center justify-center w-8 h-8 bg-amber-100 rounded-full -start-4 ring-8 ring-amber-50">
                                        <svg class="w-4 h-4 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex gap-5">
                                    <div class="flex flex-col items-center justify-center">
                                        <div>
                                            <h3 class="flex items-center m-0 p-0 text-[42px] font-bold montserrat text-slate-600">
                                                {{date('m.d', strtotime($game->released_date))}}
                                            </h3>
                                            <x-heading class="!mb-0">{{$game->title}}</x-heading>
                                            <x-sub-heading class="!mb-3 !text-sm">{{ strip_tags(Str::words($game->description, 10, '...')) }}</x-sub-heading>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.home.game-search')
</div>
