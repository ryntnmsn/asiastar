<div>
    <ul class="w-full flex flex-col gap-5">
        <li class="cursor-pointer">
            <a href="" class="hover:text-slate-600 text-slate-600 flex flex-row gap-3 items-center duration-300 ease-in-out">
                <span>
                    <x-icon-search></x-icon-search>
                </span>
                <span>
                    <x-text>Search</x-text>
                </span>
            </a>
        </li>
        <li class="cursor-pointer">
            <a wire:navigate href="{{route('game.category.home.index',$gameCategorySlug)}}" class="{{request()->is('games/category/home/*') ? '!font-semibold !text-slate-400' : 'text-slate-600'}} flex gap-3 items-center duration-300 ease-in-out">
                <span>
                    <x-icon-home></x-icon-search>
                </span>
                <span>
                    <x-text>Games Home</x-text>
                </span>
            </a>
        </li>
        <li class="cursor-pointer">
            <a wire:navigate href="{{route('game.category.home.all.index', $gameCategorySlug)}}" class="{{request()->is('games/category/all/*') ? '!font-semibold !text-slate-400' : 'text-slate-600'}} flex gap-3 items-center duration-300 ease-in-out">
                <span>
                    <x-icon-games></x-icon-games>
                </span>
                <span>
                    <x-text>All Games</x-text>
                </span>
            </a>
        </li>
    </ul>
</div>
