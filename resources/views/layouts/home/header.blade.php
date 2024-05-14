<div class="w-full px-10 p-5 top-0 fixed z-[100] montserrat">

    <div class="w-full bg-slate-50/[.30] backdrop-blur-lg p-5 rounded-xl ">
        <div x-data="{ open: false }" class="flex flex-col md:items-center md:justify-between md:flex-row ">
            <div class="flex flex-row items-center justify-between">
                <a href="#" class="text-lg font-semibold tracking-widest text-slate-50 uppercase rounded-lg">LOGO HERE</a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="text-slate-50 items-center flex-col flex-grow gap-10 hidden md:flex md:justify-end md:flex-row">

                {{-- Home --}}
                <a class="" href="#">Home</a>

                {{-- Games --}}
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center gap-1 w-full text-left">
                        <span>Games</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div id="modalAnimation" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="p-4 bg-gradient-to-r from-sky-600 to-sky-800 text-slate-50 rounded-md shadow flex flex-col gap-4">
                            <a class="" href="#">Live Pachinko</a>
                            <a class="" href="#">Live Casino</a>
                            <a class="" href="#">Live Cockfighting</a>
                        </div>
                    </div>
                </div>

                {{-- About us --}}
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row gap-1 items-center w-full text-left">
                        <span>About us</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div id="modalAnimation" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="p-4 bg-gradient-to-r from-sky-600 to-sky-800 text-slate-50 rounded-md shadow flex flex-col gap-4">
                            <a class="" href="#">Our Company</a>
                            <a class="" href="#">Company News</a>
                            <a class="" href="#">Partners</a>
                            <a class="" href="#">Join us</a>
                            <a class="" href="#">Contact us</a>
                        </div>
                    </div>
                </div>
                <x-primary-button-new class="!px-4 !py-2">Contact Us</x-primary-button-new>
            </nav>
        </div>
      </div>







    {{-- <div class="flex justify-between items-center">
        <div class="py-2">
            <span class="text-[18px] font-semibold text-slate-50 montserrat">
                LOGO HERE
            </span>
        </div>
        <div>
            <ul class="text-slate-50 montserrat flex gap-10">
                <li>Home</li>
                <li>Games</li>
                <li>About us</li>
                <li>Contact us</li>
                <li>Language</li>
            </ul>
        </div>
 --}}










        {{-- <div class="flex gap-5 pt-4">
            This is sample only:
            @foreach ($getGameCategories as $gameCategory)
                <div>
                    <a href="{{route('game.category.home.index', $gameCategory->slug)}}">{{$gameCategory->name}}</a>
                </div>
            @endforeach
        </div> --}}
        {{-- <div>
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
        </div> --}}
        {{-- <div>
            <ul class="flex text-[18px]">
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white {{ request()->is('/') ? 'border-b-2 border-amber-500 text-amber-500' : '' }}"><a href="#" class="">Home</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Games</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">News</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Company</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Partners</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Contact Us</a></li>
            </ul>
        </div> --}}
    {{-- </div> --}}
</div>
