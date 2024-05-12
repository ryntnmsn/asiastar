<div class="mt-10">
    <div class="flex gap-2 text-slate-600 pb-5 border-b border-slate-700/[.70]">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-600">
                <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
              </svg>
        </span>
        <span class="text-slate-400">
            Filters
        </span>
        <span>
            <x-primary-button-new wire:click="resetFilters" class="!text-xs !px-2 !py-1">Reset</x-primary-button-new>
        </span>
    </div>

    <div>
        <div id="accordion-open" data-accordion="open" data-active-classes="bg-none !text-slate-400 montserrat" data-inactive-classes="!text-slate-600">
            {{-- Theme Filter --}}
            <div class="py-4">
                <h2 id="accordion-open-heading-1">
                    <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-slate-600" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
                        <span>Theme</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden mt-4 duration-300 ease-in-out" aria-labelledby="accordion-open-heading-1 relative">
                    <fieldset id="slideAnimation">
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterTheme" id="theme-all" value="" type="radio" name="filterTheme" class="">
                            <label for="theme-all">
                                <span class="text-slate-600">All</span>
                            </label>
                        </div>
                        @foreach ($getThemes as $theme)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterTheme" id="theme-{{ $theme->id }}" value="{{ $theme->id }}" type="radio" name="filterTheme" class="radio-buttons ring-0 focus:border-none bg-slate-600 border-slate-700">
                                <label for="theme-{{ $theme->id }}">
                                    <span class="text-slate-600">{{ $theme->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>


            {{-- Type of Game Filter --}}
            <div class="py-4">
                <h2 id="accordion-open-heading-2">
                    <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-slate-600" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                        <span>Type of Game</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden mt-4 duration-300 ease-in-out" aria-labelledby="accordion-open-heading-2">
                    <fieldset id="slideAnimation">
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterGameType" id="type-all" value="" type="radio" name="filterGameType" class="">
                            <label for="type-all">
                                <span class="text-slate-600">All</span>
                            </label>
                        </div>
                        @foreach ($gameTypes as $gameType)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterGameType" id="type-{{ $gameType->id }}" value="{{ $gameType->id }}" type="radio" name="filterGameType">
                                <label for="type-{{ $gameType->id }}">
                                    <span class="text-slate-600">{{ $gameType->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>

            {{-- Providers Filter --}}
            <div class="py-4">
                <h2 id="accordion-open-heading-3">
                    <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-slate-600" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                        <span>Providers</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden mt-4 duration-300 ease-in-out" aria-labelledby="accordion-open-heading-3">
                    <fieldset id="slideAnimation">
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterProvider" id="providers-all" value="" type="radio" name="filterProvider">
                            <label for="providers-all">
                                <span class="text-slate-600">All</span>
                            </label>
                        </div>
                        @foreach ($providers as $providers)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterProvider" id="providers-{{ $providers->id }}" value="{{ $providers->id }}" type="radio" name="filterProvider" class="radio-buttons">
                                <label for="providers-{{ $providers->id }}">
                                    <span class="text-slate-600">{{ $providers->title }}</span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>

            {{-- RTP Filter --}}
            <div class="py-4">
                <h2 id="accordion-open-heading-4">
                    <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-slate-600" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
                        <span>RTP</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button id="slideAnimation">
                </h2>
                <div id="accordion-open-body-4" class="hidden mt-4 duration-300 ease-in-out" aria-labelledby="accordion-open-heading-4">
                    <fieldset id="slideAnimation">
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-1" value="" type="radio" name="filterRTP">
                            <label for="rtp-option-1">
                                <span class="text-slate-600">All</span>
                            </label>
                        </div>

                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-2" value="50" type="radio" name="filterRTP">
                            <label for="rtp-option-2">
                                <span class="text-slate-600">Below 50%</span>
                            </label>
                        </div>

                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-3" value="51" type="radio" name="filterRTP">
                            <label for="rtp-option-3">
                                <span class="text-slate-600">51% - 60%</span>
                            </label>
                        </div>

                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-4" value="61" type="radio" name="filterRTP">
                            <label for="rtp-option-4">
                                <span class="text-slate-600">61% - 70%</span>
                            </label>
                        </div>

                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-5" value="71" type="radio" name="filterRTP">
                            <label for="rtp-option-5">
                                <span class="text-slate-600">71% - 80%</span>
                            </label>
                        </div>

                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-6" value="81" type="radio" name="filterRTP">
                            <label for="rtp-option-6">
                                <span class="text-slate-600">81% - 90%</span>
                            </label>
                        </div>

                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-7" value="91" type="radio" name="filterRTP">
                            <label for="rtp-option-7">
                                <span class="text-slate-600">91% - 100%</span>
                            </label>
                        </div>

                    </fieldset>
                </div>
            </div>

            {{-- Language Filter --}}
            <div class="py-4">
                <h2 id="accordion-open-heading-3">
                    <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-slate-600" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
                        <span>Language</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-5" class="hidden mt-4 duration-300 ease-in-out" aria-labelledby="accordion-open-heading-5">
                    <fieldset id="slideAnimation">
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterLanguage" id="languages-all" value="" type="radio" name="filterLanguage">
                            <label for="languages-all">
                                <span class="text-slate-600">All</span>
                            </label>
                        </div>
                        @foreach ($availableLanguages as $availableLanguage)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterLanguage" id="languages-{{ $availableLanguage->id }}" value="{{ $availableLanguage->id }}" type="radio" name="filterLanguage">
                                <label for="languages-{{ $availableLanguage->id }}">
                                    <span class="text-slate-600">{{ $availableLanguage->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>

        </div>
    </div>

</div>
