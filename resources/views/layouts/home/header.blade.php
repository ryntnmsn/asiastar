<div class="w-full lg:p-5 top-0 lg:fixed relative lg:bg-transparent bg-slate-50 z-[100] montserrat duration-300 ease-in-out">
    <div wire:ignore class="header w-full rounded-xl duration-300 ease-in-out px-8 py-4 shadow {{request()->is('about-our-company') || request()->is('news*') || request()->is('join-us') || request()->is('contact-us') || request()->is('partners') || request()->is('games*') ? 'bg-slate-50' : ''}}">
        <div x-data="{ open: false }" class="flex flex-col md:items-center md:justify-between md:flex-row ">
            <div class="flex flex-row items-center justify-between">
                <a href="{{route('home.index')}}" class="font-semibold tracking-widest text-slate-50 uppercase rounded-lg">
                    <img src="{{url('storage/images/ASIASTAR_LOGO_HORIZONTAL_BLACK.png')}}" alt="" class="header_logo w-[150px]">
                </a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class=" items-center flex-col flex-grow gap-10 hidden md:flex md:justify-end md:flex-row">

                {{-- Home --}}
                <a class="text_header {{request()->is('about-our-company') || request()->is('news*') || request()->is('join-us') || request()->is('contact-us') || request()->is('partners') || request()->is('games*') ? 'text-slate-600' : 'text-slate-50'}}" href="{{route('home.index')}}">@lang('Home')</a>

                {{-- Games --}}
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="{{request()->is('about-our-company') || request()->is('news*') || request()->is('join-us') || request()->is('contact-us') || request()->is('partners') || request()->is('games*') ? 'text-slate-600' : 'text-slate-50'}} text_header flex flex-row items-center gap-1 w-full text-left">
                        <span>@lang('Games')</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div id="modalAnimation" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-6 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="text-sm text-slate-50 p-4 bg-gradient-to-r from-sky-600 to-sky-800 rounded-md shadow flex flex-col gap-4">
                            @foreach ($getGameCategories as $category)
                                <a wire:navigate class="" href="{{route('game.category.home.index', $category->slug)}}">{{__($category->name)}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- About us --}}
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="{{request()->is('about-our-company') || request()->is('news*') || request()->is('join-us') || request()->is('contact-us') || request()->is('partners') || request()->is('games*') ? 'text-slate-600' : 'text-slate-50'}} text_header flex flex-row gap-1 items-center w-full text-left">
                        <span>@lang('About us')</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div id="modalAnimation" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-6 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="text-sm p-4 bg-gradient-to-r from-sky-600 to-sky-800 text-slate-50 rounded-md shadow flex flex-col gap-4">
                            <a class="" href="{{ route('about.our.company.index') }}">@lang('Our Company')</a>
                            <a class="" href="{{ route('news.index') }}">@lang('Company News')</a>
                            <a class="" href="{{ route('partner.home.index') }}">@lang('Partners')</a>
                            <a class="" href="{{ route('join.us.index') }}">@lang('Join us')</a>
                            <a class="" href="{{ route('contact.home.index') }}">@lang('Contact us')</a>
                        </div>
                    </div>
                </div>
                <div>
                    <x-primary-button-new class="!px-4 !py-2">@lang('Contact Us')</x-primary-button-new>
                </div>
                <div class="flex gap-2">
                    {{-- Languages --}}
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="{{request()->is('about-our-company') || request()->is('news*') || request()->is('join-us') || request()->is('contact-us') || request()->is('partners') || request()->is('games*') ? 'text-slate-600' : 'text-slate-50'}} text_header flex flex-row gap-1 items-center w-full text-left hover:bg-sky-600 rounded-full text-sm p-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                                </svg>
                            </span>
                        </button>
                        <div id="modalAnimation" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-5 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="text-sm p-4 bg-gradient-to-r from-sky-600 to-sky-800 text-slate-50 rounded-md shadow flex flex-col gap-4">
                                <a class="flex gap-2 items-center" href="{{ url('/locale/en') }}">
                                    <span class="fi fi-us"></span>
                                    <span>English</span>
                                </a>
                                <a class="flex gap-2 items-center" href="{{ url('/locale/jp') }}">
                                    <span class="fi fi-jp"></span>
                                    <span>Japanese</span>
                                </a>
                                <a class="flex gap-2 items-center" href="{{ url('/locale/ch') }}">
                                    <span class="fi fi-cn"></span>
                                    <span>Chinese</span>
                                </a>
                                <a class="flex gap-2 items-center" href="{{ url('/locale/kr') }}">
                                    <span class="fi fi-kr"></span>
                                    <span>Korean</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button id="theme-toggle" type="button" class="{{request()->is('about-our-company') || request()->is('news*') || request()->is('join-us') || request()->is('contact-us') || request()->is('partners') || request()->is('games*') ? 'text-slate-600' : 'text-slate-50'}} text_header hover:bg-sky-600 focus:outline-none focus:ring-0 rounded-full text-sm p-2">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
      </div>
</div>
