<div class="mt-12">
    <div class="flex gap-2 text-slate-600 pb-5 border-b border-slate-700/[.70]">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-600">
                <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
              </svg>
        </span>
        <span class="text-slate-600">
            Sort
        </span>
        <span>
            <x-primary-button-new wire:click="resetFilters" class="!text-xs !px-2 !py-1">Reset</x-primary-button-new>
        </span>
    </div>

    <div>
        <div>
            <div class="flex flex-col gap-2">
                <x-select wire:model.live="filterSortSelect" class="!bg-transparent !border-0 !px-0 !text-slate-600 focus:border-0 focus:!ring-0">
                    <option value="" class="hidden">Select sort</option>
                    <option value="volatility">Volatility</option>
                    <option value="rtp">RTP</option>
                    <option value="maximum_win">Maximum win</option>
                </x-select>
                <x-select wire:model.live="filterSortOrder" class="!bg-transparent !border-0 !px-0 !text-slate-600 focus:!border-0 focus:!ring-0">
                    <option value="" class="hidden">Select order</option>
                    <option value="desc">High - Low</option>
                    <option value="asc">Low - High</option>
                </x-select>
            </div>
        </div>
    </div>

</div>
