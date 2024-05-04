<div class="mt-12">
    <div class="flex text-slate-600 border-b border-slate-200 pb-5">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-600">
                <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
              </svg>
        </span>
        <span class="text-slate-600">
            Filters
        </span>
    </div>
    <div>
        <div id="accordion-open" data-accordion="open" data-active-classes="bg-none">
            {{-- Theme Filter --}}
            <div class="border-b border-slate-200 py-4">
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
                            <input wire:model.live="filterTheme" id="theme-option-all" type="radio" value="" checked name="theme" class="w-4 h-4 border-slate-300 checked:bg-amber-500 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    All
                                </span>
                            </label>
                        </div>
                        @foreach ($getThemes as $theme)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterTheme" id="theme-option-{{ $theme->id }}" value="{{ $theme->id }}" type="radio" name="theme"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                    <span class="text-slate-500">
                                        {{ $theme->name }}
                                    </span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>


            {{-- Type of Game Filter --}}
            <div class="border-b border-slate-200 py-4">
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
                            <input wire:model.live="filterGameType" id="gameType-option-all" type="radio" value="" checked name="filterGameType" class="w-4 h-4 border-slate-300 checked:bg-amber-500 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    All
                                </span>
                            </label>
                        </div>
                        @foreach ($gameTypes as $gameType)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterGameType" id="gameType-option-{{ $gameType->id }}" value="{{ $gameType->id }}" type="radio" name="filterGameType"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                    <span class="text-slate-500">
                                        {{ $gameType->name }}
                                    </span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>

            {{-- Providers Filter --}}
            <div class="border-b border-slate-200 py-4">
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
                            <input wire:model.live="filterProvider" id="provider-option-all" type="radio" value="" checked name="filterProvider" class="w-4 h-4 border-slate-300 checked:bg-amber-500 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    All
                                </span>
                            </label>
                        </div>
                        @foreach ($providers as $provider)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterProvider" id="provider-option-{{ $provider->id }}" value="{{ $provider->id }}" type="radio" name="filterProvider"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                    <span class="text-slate-500">
                                        {{ $provider->title }}
                                    </span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>

            {{-- RTP Filter --}}
            <div class="border-b border-slate-200 py-4">
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
                            <input wire:model.live="filterRTP" id="rtp-option-1" value="" type="radio" name="filterRTP"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    All
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-2" value="50" type="radio" name="filterRTP"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    Below 50%
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-3" value="51" type="radio" name="filterRTP"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    51% - 60%
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-4" value="61" type="radio" name="filterRTP"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    61% - 70%
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-5" value="71" type="radio" name="filterRTP"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    71% - 80%
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-6" value="81" type="radio" name="filterRTP"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    81% - 90%
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input wire:model.live="filterRTP" id="rtp-option-7" value="91" type="radio" name="filterRTP"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    91% - 100%
                                </span>
                            </label>
                        </div>
                    </fieldset>
                </div>
            </div>

            {{-- Language Filter --}}
            <div class="border-b border-slate-200 py-4">
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
                            <input wire:model.live="filterLanguage" id="provider-option-all" type="radio" value="" checked name="filterLanguage" class="w-4 h-4 border-slate-300 checked:bg-amber-500 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                <span class="text-slate-500">
                                    All
                                </span>
                            </label>
                        </div>
                        @foreach ($availableLanguages as $availableLanguage)
                            <div class="flex items-center gap-2 mb-4">
                                <input wire:model.live="filterLanguage" id="language-option-{{ $availableLanguage->id }}" value="{{ $availableLanguage->id }}" type="radio" name="filterLanguage"  class="w-4 h-4 checked:bg-amber-500 border-slate-300 focus:ring-2 focus:ring-amber-500 focus:bg-amber-500 active:bg-amber-500 focus:border-amber-500">
                                    <span class="text-slate-500">
                                        {{ $availableLanguage->name }}
                                    </span>
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
            </div>

        </div>
    </div>
</div>
