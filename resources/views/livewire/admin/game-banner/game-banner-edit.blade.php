<div>
    <div class="flex justify-between items-center">
        <x-title>Update Partner</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="update">
            <div class="flex flex-col gap-5">
                <div>
                    <div>
                        <x-label>Image <span class="text-slate-500 text-xs font-normal">(Dimensions: 1200x480 pixels)</span></x-label>
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

                        @if($errors->has('new_image'))
                            <span class="text-sm text-rose-500">{{ $errors->first('new_image') }}</span>
                        @endif
                    </div>
                </div>

                <div>
                    <x-label>Game category</x-label>
                    <x-select wire:model="game_category_id" class="w-full">
                        <option value="" selected class="hidden">--Select game category--</option>
                        @foreach ($gameCategories as $gameCategory)
                            <option value="{{$gameCategory->id}}">{{$gameCategory->name}}</option>
                        @endforeach
                    </x-select>
                </div>

                <div>
                    <x-label>Status</x-label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input {{$status == 1 ? 'checked' : ''}} type="checkbox" wire:model="status" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                    </label>
                </div>

                <div>
                    <x-button type="submit" wire:target="update">Update</x-button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    window.addEventListener('updated',function(e){
        Swal.fire({
            title: 'Updated',
            text: 'Game banner updated successfully',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
