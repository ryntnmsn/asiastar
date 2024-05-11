<div class="w-full roboto-slab">
    <div class="flex justify-between px-8 shadow-xl bg-white/[.20] text-slate-700">
        <div class="py-4">
            <span class="ext-[18px] font-semibold">
                LOGO HERE
            </span>
        </div>
        <div>
            @foreach ($getGameCategories as $gameCategory)
                <a href="{{route('game.category.home.index', $gameCategory->slug)}}">{{$gameCategory->name}}</a>
            @endforeach
        </div>
        <div>
            <ul class="flex text-[18px]">
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white {{ request()->is('/') ? 'border-b-2 border-amber-500 text-amber-500' : '' }}"><a href="#" class="">Home</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Games</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">News</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Company</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Partners</a></li>
                <li class="py-4 px-5 hover:bg-amber-500 ease-in-out duration-300 hover:text-white"><a href="#" class="capitalize">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
