<div>
    <div class="flex justify-between items-center">
        <x-title>Create Game</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="store">
            <div class="flex flex-col gap-5">

                <div>
                    <x-label for="title">Title</x-label>
                    <x-input wire:model="title" type="text" id="title"></x-input>
                    @if($errors->has('title'))
                        <span class="text-sm text-rose-500">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div wire:ignore>
                    <x-label for="description">Description</x-label>
                    <x-textarea wire:model="description" type="text" id="description"></x-textarea>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="language_id">Language</x-label>
                            <x-select wire:model="language_id" class="!w-full">
                                @foreach ($languages as $language)
                                    <option value="" class="hidden">--Select language--</option>
                                    <option value="{{$language->id}}">{{$language->name}}</option>
                                @endforeach
                            </x-select>
                            @if($errors->has('language_id'))
                                <span class="text-sm text-rose-500">{{ $errors->first('language_id') }}</span>
                            @endif
                        </div>
                        <div class="flex-1">
                            <x-label for="game_category_id">Game Category</x-label>
                            <x-select wire:model="game_category_id" class="!w-full">
                                <option value="" class="hidden">--Select game category--</option>
                                @foreach ($gameCategories as $gameCategory)
                                    <option value="{{ $gameCategory->id }}">{{ $gameCategory->name }}</option>
                                @endforeach
                            </x-select>
                            @if($errors->has('game_category_id'))
                                <span class="text-sm text-rose-500">{{ $errors->first('game_category_id') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="game_type">Game Type</x-label>
                            <x-select wire:model="game_type_id" class="!w-full">
                                <option value="" class="hidden">--Select game type--</option>
                                @foreach ($gameTypes as $gameType)
                                    <option value="{{ $gameType->id }}">{{ $gameType->name }}</option>
                                @endforeach
                            </x-select>
                            @if($errors->has('game_type_id'))
                                <span class="text-sm text-rose-500">{{ $errors->first('game_type_id') }}</span>
                            @endif
                        </div>
                        <div class="flex-1">
                            <x-label for="asia">Region</x-label>
                            <x-select wire:model="region" class="!w-full">
                                <option value="" class="hidden">--Select region--</option>
                                <option value="Asia">Asia</option>
                            </x-select>
                            @if($errors->has('region'))
                                <span class="text-sm text-rose-500">{{ $errors->first('region') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="released_date">Released Date</x-label>
                            <x-date wire:model="released_date" type="date"></x-date>
                            @if($errors->has('released_date'))
                                <span class="text-sm text-rose-500">{{ $errors->first('released_date') }}</span>
                            @endif
                        </div>
                        <div class="flex-1">
                            <x-label for="volatility">Volatility</x-label>
                            <x-select wire:model="volatility" class="!w-full">
                                <option value="" class="hidden">--Select volatility--</option>
                                <option value="1">Low</option>
                                <option value="2">Medium</option>
                                <option value="3">High</option>
                            </x-select>
                            @if($errors->has('volatility'))
                                <span class="text-sm text-rose-500">{{ $errors->first('volatility') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="rtp">RTP</x-label>
                            <x-input wire:model="rtp" type="text"></x-input>
                            @if($errors->has('rtp'))
                                <span class="text-sm text-rose-500">{{ $errors->first('rtp') }}</span>
                            @endif
                        </div>
                        <div class="flex-1">
                            <x-label for="maximum_win">Maximum Win</x-label>
                            <x-input wire:model="maximum_win" type="text" class="!w-full"></x-input>
                            @if($errors->has('maximum_win'))
                                <span class="text-sm text-rose-500">{{ $errors->first('maximum_win') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="theme">Theme</x-label>
                            <div wire:ignore>
                                <x-select wire:model='themes' class="w-full" id="themes" multiple='multiple'>
                                    @foreach ($getThemes as $theme)
                                        <option value="{{$theme->id}}">{{$theme->name}}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            @if($errors->has('themes'))
                                <span class="text-sm text-rose-500">{{ $errors->first('themes') }}</span>
                            @endif
                        </div>
                        <div class="flex-1">
                            <x-label for="theme">Providers</x-label>
                            <x-select wire:model="provider_id" class="!w-full">
                                <option value="" class="hidden">--Select provider--</option>
                                @foreach ($providers as $provider)
                                    <option value="{{$provider->id}}">{{$provider->title}}</option>
                                @endforeach
                            </x-select>
                            @if($errors->has('provider_id'))
                                <span class="text-sm text-rose-500">{{ $errors->first('provider_id') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="theme">Available languages</x-label>
                            <div wire:ignore>
                                <x-select wire:model='available_language' class="w-full" id="availableLanguage" multiple='multiple'>
                                    @foreach ($availableLanguages as $availableLanguage)
                                        <option value="{{$availableLanguage->id}}">{{$availableLanguage->name}}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            @if($errors->has('available_language'))
                                <span class="text-sm text-rose-500">{{ $errors->first('available_language') }}</span>
                            @endif
                        </div>
                        <div class="flex-1">
                            <x-label for="theme">Feature</x-label>
                            <div wire:ignore>
                                <x-select wire:model='features' class="w-full" id="features" multiple='multiple'>
                                    @foreach ($getFeatures as $feature)
                                        <option value="{{$feature->id}}">{{$feature->name}}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            @if($errors->has('features'))
                                <span class="text-sm text-rose-500">{{ $errors->first('features') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="featured">Is Featured</x-label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" wire:model="is_featured" name="is_featured" class="sr-only peer">
                                <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                            </label>
                        </div>

                        <div class="flex-1">
                            <x-label for="status">Status</x-label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" wire:model="status" name="status" class="sr-only peer">
                                <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex gap-5">
                        {{-- Image Square --}}
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Image Square <span class="text-slate-500 text-xs font-normal">(Dimensions: 560x560 pixels)</span></label>
                            <input wire:model="image_square" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">

                            @if($image_square)
                                <div class="mt-4">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $image_square->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('image_square'))
                                <span class="text-sm text-rose-500">{{ $errors->first('image_square') }}</span>
                            @endif
                        </div>

                        {{-- Image horizontal --}}
                        <div class="flex-1">
                            <div class="flex-1">
                                <label class="block mb-2 font-medium text-slate-700">Image Horizontal <span class="text-slate-500 text-xs font-normal">(Dimensions: 950x560 pixels)</span></label>
                                <input wire:model="image_horizontal" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">

                                @if($image_horizontal)
                                    <div class="mt-4">
                                        <label for="" class="text-sm">Image Preview</label>
                                        <img src="{{ $image_horizontal->temporaryUrl() }}" alt="" class="w-96 border border-slate-200 rounded-lg p-1">
                                    </div>
                                @endif

                                @if($errors->has('image_horizontal'))
                                    <span class="text-sm text-rose-500">{{ $errors->first('image_horizontal') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex gap-5">
                        {{-- Image Vertical --}}
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Image Vertical <span class="text-slate-500 text-xs font-normal">(Dimensions: 560x950 pixels)</span></label>
                            <input wire:model="image_vertical" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">

                            @if($image_vertical)
                                <div class="mt-4">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $image_vertical->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('image_vertical'))
                                <span class="text-sm text-rose-500">{{ $errors->first('image_vertical') }}</span>
                            @endif
                        </div>

                        {{-- Hero Image --}}
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Hero Image <span class="text-slate-500 text-xs font-normal">(Dimensions: 640x640 pixels)</span></label>
                            <input wire:model="hero_image" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">

                            @if($hero_image)
                                <div class="mt-4">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $hero_image->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('hero_image'))
                                <span class="text-sm text-rose-500">{{ $errors->first('hero_image') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <x-button type="submit" wire:target="store">Create</x-button>
                </div>
            </div>
        </form>
    </div>
</div>


@script()
    <script>
        $(document).ready(function() {
            $('#availableLanguage').select2();
            $('#availableLanguage').on('change', function() {
                let $data = $(this).val();
                $wire.set('available_language', $data);
            });
        });
    </script>
@endscript

@script()
    <script>
        $(document).ready(function() {
            $('#themes').select2();
            $('#themes').on('change', function() {
                let $data = $(this).val();
                $wire.set('themes', $data);
            });
        });
    </script>
@endscript

@script()
    <script>
        $(document).ready(function() {
            $('#features').select2();
            $('#features').on('change', function() {
                let $data = $(this).val();
                $wire.set('features', $data);
            });
        });
    </script>
@endscript

<script>
    tinymce.init({
        selector: '#description',
        forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                @this.set('description', editor.getContent());
            });
        }
    });
</script>

<script>
    window.addEventListener('created',function(e){
        Swal.fire({
            title: 'Created',
            text: 'New game created',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
