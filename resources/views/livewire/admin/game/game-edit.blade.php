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
                            <x-label for="game_category">Game Category</x-label>
                            <x-select wire:model="game_category" class="!w-full">
                                <option value="" class="hidden">--Select game category--</option>
                                <option value="live_pachinko">Live Pachinko</option>
                                <option value="live_casino">Live Casino</option>
                                <option value="live_cockfighting">Live Cockfighting</option>
                            </x-select>
                            @if($errors->has('game_category'))
                                <span class="text-sm text-rose-500">{{ $errors->first('game_category') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="game_type">Game Type</x-label>
                            <x-select wire:model="game_type" class="!w-full">
                                <option value="" class="hidden">--Select game type--</option>
                                <option value="hot_game">Hot Game</option>
                                <option value="new_game">New Game</option>
                                <option value="coming_soon_game">Coming Soon Game</option>
                            </x-select>
                            @if($errors->has('game_type'))
                                <span class="text-sm text-rose-500">{{ $errors->first('game_type') }}</span>
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
                            <x-input wire:model="volatility" type="text" class="!w-full"></x-input>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="rtp">RTP</x-label>
                            <x-date wire:model="rtp" type="text"></x-date>
                        </div>
                        <div class="flex-1">
                            <x-label for="maximum_win">Maximum Win</x-label>
                            <x-input wire:model="maximum_win" type="text" class="!w-full"></x-input>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="theme">Theme</x-label>
                            <x-select wire:model="theme" class="!w-full">
                                <option value="" class="hidden">--Select theme--</option>
                                <option value="asia">Asia</option>
                            </x-select>
                            @if($errors->has('theme'))
                                <span class="text-sm text-rose-500">{{ $errors->first('theme') }}</span>
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
                            <x-label for="featured">Featured</x-label>
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
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Image</label>
                            <input wire:model="new_image" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">
                            <input wire:model="old_image" type="text" class="hidden">

                            @if($new_image == null)
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ url('storage/'. $old_image) }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @else
                                <div class="mt-5">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $new_image->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('image'))
                                <span class="text-sm text-rose-500">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="flex-1">
                        </div>
                    </div>
                </div>
                <div>
                    <x-button type="submit" wire:target="update">Create</x-button>
                </div>
            </div>
        </form>
    </div>
</div>


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
