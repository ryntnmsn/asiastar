
    <nav class="header duration-300 ease-in-out {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'bg-slate-50' : '' }}">
        <div class="navbar">
            <i class='bx bx-menu' style="color:#000"></i>
            <div class="logo px-10">
                <a href="#">
                    <img src="{{url('storage/images/ASIASTAR_LOGO_HORIZONTAL_BLACK.png')}}" alt="AsiaStar Pachinko" class="header_logo w-[150px]" loading="lazy">
                </a>
            </div>
            <div class="flex items-center">
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class=" text-slate-600">@lang('Menu')</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bx bx-x text-slate-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                          </svg>
                    </div>
                    <ul class="links">
                        <li class="group border-b border-white/[.30] hover:bg-slate-50 duration-300 ease-in-out">
                            <a href="{{ route('home.index') }}" class="text_header {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }} group-hover:text-amber-400 duration-300 ease-in-out montserrat">@lang('Home')</a>
                        </li>
                        <li class="group border-b border-white/[.30] hover:bg-slate-50 duration-100 ease-in-out">
                            <a class="text_header {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }} group-hover:text-amber-400 duration-300 ease-in-out montserrat">@lang('Games')</a>
                            <i class='bx bxs-chevron-down text_header games-arrow arrow text-slate-100 group-hover:text-amber-400 duration-300 ease-in-out {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }}'></i>
                            <ul class="games-sub-menu sub-menu duration-100 ease-in-out">
                                @foreach ($getGameCategories as $category)
                                    <li>
                                        <a href="{{ route('game.category.home.index', $category->slug) }}" class="montserrat">{{ __($category->name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="group border-b border-white/[.30] hover:bg-slate-50 duration-300 ease-in-out">
                            <a class="text_header {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }} text-slate-100 group-hover:text-amber-400 duration-300 ease-in-out montserrat">@lang('Services')</a>
                            <i class='bx bxs-chevron-down text_header services-arrow arrow text-slate-100 group-hover:text-amber-400 duration-300 ease-in-out {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }}'></i>
                            <ul class="services-sub-menu sub-menu">
                                
                            </ul>
                        </li>
                        <li class="group border-b border-white/[.30] hover:bg-slate-50 duration-300 ease-in-out">
                            <a class="text_header {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }} text-slate-100 group-hover:text-amber-400 duration-300 ease-in-out montserrat">@lang('About us')</a>
                            <i class='bx bxs-chevron-down text_header about-arrow arrow text-slate-100 group-hover:text-amber-400 duration-300 ease-in-out {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }}'></i>
                            <ul class="about-sub-menu sub-menu">
                                <li><a href="{{ route('about.our.company.index') }}" class="montserrat">@lang('Our Company')</a></li>
                                <li><a href="{{ route('news.index') }}" class="montserrat">@lang('Company News')</a></li>
                                <li><a href="{{ route('contact.home.index') }}" class="montserrat">@lang('Contact us')</a></li>
                                <li><a href="{{ route('join.us.index') }}" class="montserrat">@lang('Careers')</a></li>
                                <li><a href="{{ route('partner.home.index') }}" class="montserrat">@lang('Partners')</a></li>
                            </ul>
                        </li>
                        <li class="group border-b border-white/[.30] hover:bg-slate-50 duration-300 ease-in-out">
                            <a class="text_header {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }} text-slate-100 group-hover:text-amber-400 duration-300 ease-in-out montserrat">@lang('Languages')</a>
                            <i class='bx bxs-chevron-down text_header languages-arrow arrow text-slate-100 group-hover:text-amber-400 duration-300 ease-in-out {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }}'></i>
                            <ul class="languages-sub-menu sub-menu">
                                <li><a href="{{ url('/locale/en') }}" class="montserrat">English</a></li>
                                <li><a href="{{ url('/locale/ch') }}" class="montserrat">Chinese</a></li>
                                <li><a href="{{ url('/locale/jp') }}" class="montserrat">Japanese</a></li>
                                <li><a href="{{ url('/locale/kr') }}" class="montserrat">Korean</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="search-box border-0 lg:border-b border-white/[.30]">
                    <div class="flex items-center h-full">
                        <i class="flex items-center h-full gap-2">
                            <button data-modal-target="global-search-modal" data-modal-toggle="global-search-modal" class="group {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : 'text-slate-100' }} text_header hover:bg-amber-400 focus:outline-none focus:ring-0 rounded-full text-sm p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-slate-50 bx bx-search">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                            <button id="theme-toggle" type="button" class="group {{ request()->is('games*') || request()->is('news*') || request()->is('join-us*') || request()->is('partners*') || request()->is('contact-us*') ? 'text-slate-600' : '!text-slate-100' }} hover:bg-amber-400 focus:outline-none focus:ring-0 rounded-full text-sm p-2">
                                <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6 group-hover:text-slate-50" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-6 h-6 group-hover:text-slate-50" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                            </button>
                        </i>
                    </div>
                </div>
                <div>
                    <div class="flex items-center">
                        <button data-modal-target="contact-modal" data-modal-toggle="contact-modal" class="bg-amber-400 hover:bg-amber-300 duration-300 ease-out p-6 flex h-full">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                                  </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    
    
    
    
    {{-- <nav class="md:bg-transparent  bg-slate-50 flex items-center fixed top-0 w-full md:flex-row flex-col">
        <div class="flex items-center justify-between w-full md:w-60 px-5">
            <img src="{{url('storage/images/ASIASTAR_LOGO_HORIZONTAL_BLACK.png')}}" alt="" class="header_logo w-[150px]">
            <label for="hamburger_icon" class="md:hidden block" for="btn">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </span>
                <input type="checkbox" id="btn">
            </label>
        </div>
        <div class="w-full flex justify-start md:justify-end">
            <div class="w-full flex relative justify-start md:justify-end">
                <ul class="h-full montserrat">
                    <li class="border-b border-white/[.20] group hover:border-amber-400 duration-300 ease-in-out">
                        <div class="flex items-center h-full">
                            <a href="" class="text-slate-600 md:text-slate-200 font-medium group-hover:text-amber-400 duration-300 ease-in-out flex items-center">Home</a>
                        </div>
                    </li>
                    <li class="border-b border-amber-400/[.20] group hover:border-amber-400 duration-300 ease-in-out">
                        <div class="flex items-center h-full">
                            <label for="btn-1" class="show">Games</label>
                            <a href="" class="text-slate-600 md:text-slate-200 font-medium group-hover:text-amber-400 duration-300 ease-in-out">Games</a>
                            <input type="checkbox" id="btn-1">
                        </div>
                        <ul class="bg-amber-400 rounded overflow-hidden font-medium">
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Live Pachinko</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Live Casino</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Live Cockfighting</a></li>
                        </ul>
                    </li>
                    <li class="border-b border-amber-400/[.20] group hover:border-amber-400 duration-300 ease-in-out">
                        <div class="flex items-center h-full">
                            <a href="" class="text-slate-600 md:text-slate-200 font-medium group-hover:text-amber-400 duration-300 ease-in-out flex items-center">Services</a>
                        </div>
                    </li>
                    <li class="h-full border-b border-amber-400/[.20] group hover:border-amber-400 duration-300 ease-in-out">
                        <div class="flex items-center h-full">
                            <a href="" class="font-medium group-hover:text-amber-400 duration-300 ease-in-out flex items-center">About</a>
                        </div>
                        <ul class="bg-amber-400 rounded overflow-hidden font-medium">
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Our Company</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Company News</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Partners</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Join us</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Contact us</a></li>
                        </ul>
                    </li>
                    <li class="h-full border-b border-amber-400/[.20] group hover:border-amber-400 duration-300 ease-in-out">
                        <div class="flex items-center h-full">
                            <a href="" class="font-medium group-hover:text-amber-400 duration-300 ease-in-out flex items-center">Language</a>
                        </div>
                        <ul class="bg-amber-400 rounded overflow-hidden">
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">English</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Chinese</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Japanese</a></li>
                            <li class="hover:bg-amber-300 duration-300 ease-in-out"><a href="">Korean</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="flex items-center">
                    <button id="menu-toggle" class="bg-amber-400 hover:bg-amber-300 duration-300 ease-out p-6 flex h-full">
                        <div class="md:block hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </nav> --}}
