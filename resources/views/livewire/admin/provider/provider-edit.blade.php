<div>
    <div class="flex justify-between items-center">
        <x-title>Edit Provider</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="update">
            <div class="flex flex-col gap-5">
                <div>
                    <x-label>Name</x-label>
                    <x-input wire:model="title" type="text" id="title"></x-input>
                    @if($errors->has('title'))
                        <span class="text-sm text-rose-500">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div>
                    <x-label>Image <span class="text-slate-500 text-xs font-normal">(Dimensions: 350x350 pixels)</span></x-label>
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
            text: 'Provider updated successfully',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
