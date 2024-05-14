<div wire:ignore>
    <ul class="w-full flex flex-col gap-5">
        <li class="cursor-pointer">

            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="hover:text-slate-600 dark:text-slate-600 text-slate-400 flex flex-row gap-3 items-center duration-300 ease-in-out">
                <span>
                    <x-icon-search></x-icon-search>
                </span>
                <span>
                    Search
                </span>
            </button>
        </li>
        <li class="cursor-pointer">
            <a wire:navigate href="{{route('game.category.home.index',$gameCategorySlug)}}" class="{{request()->is('games/category/home/*') ? '!font-semibold text-cyan-600' : 'dark:text-slate-600 text-slate-400'}} flex gap-3 items-center duration-300 ease-in-out">
                <span>
                    <x-icon-home></x-icon-search>
                </span>
                <span>
                    Games Home
                </span>
            </a>
        </li>
        <li class="cursor-pointer">
            <a wire:navigate href="{{route('game.category.home.all.index', $gameCategorySlug)}}" class="{{request()->is('games/category/all/*') ? '!font-semibold text-cyan-600' : 'dark:text-slate-600 text-slate-400'}} flex gap-3 items-center duration-300 ease-in-out">
                <span>
                    <x-icon-games></x-icon-games>
                </span>
                <span>
                    All Games
                </span>
            </a>
        </li>
    </ul>
</div>
