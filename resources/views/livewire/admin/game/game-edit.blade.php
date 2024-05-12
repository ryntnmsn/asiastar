<div>
    <div class="flex justify-between items-center">
        <x-title>Edit Game</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="update">
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
                                <option value="asia">Asia</option>
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
                        </div>
                        <div class="flex-1">
                            <x-label for="volatility">Volatility</x-label>
                            <x-select wire:model="volatility" class="!w-full">
                                <option {{ $volatility == '1' ? 'selected' : '' }} value="1">Low</option>
                                <option {{ $volatility == '2' ? 'selected' : '' }} value="2">Medium</option>
                                <option {{ $volatility == '3' ? 'selected' : '' }} value="3">High</option>
                            </x-select>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="rtp">RTP</x-label>
                            <x-date wire:model="rtp" type="text"></x-date>
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
                                <input  {{$is_featured == 1 ? 'checked' : ''}} type="checkbox" wire:model="is_featured" name="is_featured" class="sr-only peer">
                                <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                            </label>
                        </div>

                        <div class="flex-1">
                            <x-label for="status">Status</x-label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input {{$status == 1 ? 'checked' : ''}} type="checkbox" wire:model="status" name="status" class="sr-only peer">
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
                            <input wire:model="new_image_square" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">
                            <input wire:model="old_image_square" type="text" class="hidden">

                            @if($new_image_square == null)
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ url('storage/'. $old_image_square) }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @else
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $new_image_square->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('new_image_square'))
                                <span class="text-sm text-rose-500">{{ $errors->first('new_image_square') }}</span>
                            @endif
                        </div>

                        {{-- Image horizontal --}}
                        <div class="flex-1">
                            <div class="flex-1">
                                <label class="block mb-2 font-medium text-slate-700">Image Horizontal <span class="text-slate-500 text-xs font-normal">(Dimensions: 950x560 pixels)</span></label>
                                <input wire:model="new_image_horizontal" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">
                                <input wire:model="old_image_horizontal" type="text" class="hidden">

                                @if($new_image_horizontal == null)
                                    <div class="mt-5">
                                        <label for="" class="text-sm">Image Preview</label>
                                        <img src="{{ url('storage/'. $old_image_horizontal) }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                    </div>
                                @else
                                    <div class="mt-5">
                                        <label for="" class="text-sm">Image Preview</label>
                                        <img src="{{ $new_image_horizontal->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                    </div>
                                @endif

                                @if($errors->has('new_image_horizontal'))
                                    <span class="text-sm text-rose-500">{{ $errors->first('new_image_horizontal') }}</span>
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
                            <input wire:model="new_image_vertical" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">
                            <input wire:model="old_image_vertical" type="text" class="hidden">

                            @if($new_image_vertical == null)
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ url('storage/'. $old_image_vertical) }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @else
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $new_image_vertical->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('new_image_vertical'))
                                <span class="text-sm text-rose-500">{{ $errors->first('new_image_vertical') }}</span>
                            @endif
                        </div>

                        {{-- Hero Image --}}
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Hero Image <span class="text-slate-500 text-xs font-normal">(Dimensions: 1080x1080 pixels)</span></label>
                            <input wire:model="new_hero_image" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">
                            <input wire:model="old_hero_image" type="text" class="hidden">

                            @if($new_hero_image == null)
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ url('storage/'. $old_hero_image) }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @else
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $new_hero_image->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('new_hero_image'))
                                <span class="text-sm text-rose-500">{{ $errors->first('new_hero_image') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <x-button type="submit" wire:target="update">Update</x-button>
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
    window.addEventListener('updated',function(e){
        Swal.fire({
            title: 'Updated',
            text: 'Game updated successfully',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
