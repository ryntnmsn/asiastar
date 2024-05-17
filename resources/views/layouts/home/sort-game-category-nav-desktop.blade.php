<div class="mt-12">
    <div class="text-sm flex gap-2 text-slate-400 dark:text-slate-600 pb-5 border-b border-slate-300 dark:border-slate-700/[.70]">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M6.97 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1-1.06 1.06L8.25 4.81V16.5a.75.75 0 0 1-1.5 0V4.81L3.53 8.03a.75.75 0 0 1-1.06-1.06l4.5-4.5Zm9.53 4.28a.75.75 0 0 1 .75.75v11.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V7.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
            </svg>
        </span>
        <span class="text-slate-400">
            @lang('Sort')
        </span>
        <span>
            <x-primary-button-new wire:click="resetSort" class="!text-xs !px-2 !py-1">@lang('Reset')</x-primary-button-new>
        </span>
    </div>

    <div>
        <div>
            <div class="flex flex-col gap-2">
                <x-select wire:model.live="filterSortSelect" class=" !text-sm !bg-transparent !border-0 !px-0 !text-slate-600 focus:border-0 focus:!ring-0">
                    <option value="" class="hidden">@lang('Select sort')</option>
                    <option value="volatility">@lang('Volatility')</option>
                    <option value="rtp">RTP</option>
                    <option value="maximum_win">@lang('Maximum win')</option>
                </x-select>
                <x-select wire:model.live="filterSortOrder" class=" !text-sm !bg-transparent !border-0 !px-0 !text-slate-600 focus:!border-0 focus:!ring-0">
                    <option value="" class="hidden">@lang('Select order')</option>
                    <option value="desc">@lang('High') - @lang('High')</option>
                    <option value="asc">@lang('Low') - @lang('High')</option>
                </x-select>
            </div>
        </div>
    </div>
</div>
