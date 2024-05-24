<div wire:ignore>
    <ul class="w-full flex flex-row xl:flex-col gap-5">
        <li class="xl:flex-none flex flex-1 justify-center xl:justify-normal cursor-pointer">
            <button data-modal-target="game-search-modal" data-modal-toggle="game-search-modal" class="hover:text-slate-600 dark:text-slate-600 text-slate-400 flex gap-1 xl:gap-3 items-center duration-300 ease-in-out xl:flex-row flex-col text-xs md:text-sm">
                <span>
                    <x-icon-search></x-icon-search>
                </span>
                <span>
                    @lang('Search')
                </span>
            </button>
        </li>
        <li class="xl:flex-none flex flex-1 justify-center xl:justify-normal cursor-pointer">
            <a wire:navigate href="{{route('game.category.home.index',$gameCategorySlug)}}" class="{{request()->is('games/category/home/*') ? '!font-semibold text-amber-400' : 'dark:text-slate-600 text-slate-400'}} flex gap-1 xl:gap-3 items-center duration-300 ease-in-out xl:flex-row flex-col text-xs md:text-sm">
                <span>
                    <x-icon-home></x-icon-search>
                </span>
                <span class="whitespace-nowrap">
                    @lang('Games Home')
                </span>
            </a>
        </li>
        <li class="xl:flex-none flex flex-1 justify-center xl:justify-normal cursor-pointer">
            <a wire:navigate href="{{route('game.category.home.all.index', $gameCategorySlug)}}" class="{{request()->is('games/category/all/*') ? '!font-semibold text-amber-400' : 'dark:text-slate-600 text-slate-400'}} flex gap-1 xl:gap-3 items-center duration-300 ease-in-out xl:flex-row flex-col text-xs md:text-sm">
                <span>
                    <x-icon-games></x-icon-games>
                </span>
                <span class="whitespace-nowrap">
                    @lang('All Games')
                </span>
            </a>
        </li>
        @if(request()->is('games/category/all*'))
        <li class=" xl:flex-none flex flex-1 justify-center xl:justify-normal cursor-pointer border-l xl:border-none border-slate-300 dark:border-slate-700">
            <button id="toggleButton" class="flex gap-1 xl:gap-3 items-center duration-300 ease-in-out xl:flex-row flex-col text-xs md:text-sm dark:text-slate-600 text-slate-400">
                <span>
                    <x-icon-filter></x-icon-filter>
                </span>
                <span class="whitespace-nowrap">
                    @lang('Filters')/@lang('Sort')
                </span>
            </button>
        </li>
        @endif
    </ul>
</div>
