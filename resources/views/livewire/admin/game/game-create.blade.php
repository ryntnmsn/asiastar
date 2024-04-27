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
                    @error($title)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
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
                                    <option value="{{$language->id}}">{{$language->name}}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div class="flex-1">
                            <x-label for="game_category">Game Category</x-label>
                            <x-select wire:model="game_category" class="!w-full">
                                <option value="live_pachinko">Live Pachinko</option>
                                <option value="live_casino">Live Casino</option>
                                <option value="live_cockfighting">Live Cockfighting</option>
                            </x-select>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <x-label for="game_type">Game Type</x-label>
                            <x-select wire:model="game_type" class="!w-full">
                                <option value="hot_game">Hot Game</option>
                                <option value="new_game">New Game</option>
                                <option value="Coming Soon Game">Coming Soon Game</option>
                            </x-select>
                        </div>
                        <div class="flex-1">
                            <x-label for="asia">Region</x-label>
                            <x-select wire:model="region" class="!w-full">
                                <option value="asia">Asia</option>
                            </x-select>
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
                                <option value="asia">Asia</option>
                            </x-select>
                        </div>
                        <div class="flex-1">
                            <x-label for="featured">Featured</x-label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" wire:model="is_featured" name="is_featured" class="sr-only peer">
                                <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Image</label>
                            <input wire:model="image" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">

                            @if($image)
                                <div class="mt-4">
                                    <label for="" class="text-sm">Image Preview</label>
                                    <img src="{{ $image->temporaryUrl() }}" alt="" class="w-60 border border-slate-200 rounded-lg p-1">
                                </div>
                            @endif

                            @if($errors->has('image'))
                                <span class="text-sm text-rose-500">{{ $errors->first('image') }}</span>
                            @endif
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
                    <x-button type="submit" wire:target="store">Create</x-button>
                </div>
            </div>
        </form>
    </div>
</div>

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
