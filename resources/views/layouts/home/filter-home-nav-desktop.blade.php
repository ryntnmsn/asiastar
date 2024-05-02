<div class="mt-12">
    <div class="flex text-slate-700 border-b border-slate-200 pb-5">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700">
                <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
              </svg>
        </span>
        <span class="text-slate-700">
            Filters
        </span>
    </div>
    <div class="mt-5">
        <div wire:ignore id="accordion-collapse" data-accordion="collapse" data-active-classes="bg-none">
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex items-center justify-between py-3 w-full font-medium rtl:text-right text-slate-700" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                <span>Theme</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden mt-4" aria-labelledby="accordion-collapse-heading-1">
                
                <fieldset>
                    <div class="flex items-center gap-2 mb-4">
                        <input wire:model.live="filterTheme" id="theme-option-all" type="radio" value="" checked name="theme" value="" class="w-4 h-4 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                            <span>
                                All
                            </span>
                        </label>
                    </div>
                    @foreach ($themes as $theme)
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterTheme" id="theme-option-{{ $theme->id }}" value="{{ $theme->id }}" type="radio" name="theme" value="USA" class="w-4 h-4 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span>
                                    {{ $theme->name }}
                                </span>
                            </label>
                        </div>
                    @endforeach
                </fieldset>      
               
            </div>
        </div>
    </div>
</div>