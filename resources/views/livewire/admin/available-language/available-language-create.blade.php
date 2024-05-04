<div>
    <div class="flex justify-between items-center">
        <x-title>Create Game Language</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="store">
            <div class="flex flex-col gap-5">
                <div>
                    <x-label>Name</x-label>
                    <x-input wire:model="name" type="text" id="name"></x-input>
                    @if($errors->has('name'))
                        <span class="text-sm text-rose-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div>
                    <x-label>Image <span class="text-slate-500 text-xs font-normal">(Dimensions: 100x60 pixels)</span></x-label>
                    <input wire:model="image" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" type="file">

                    @if($image)
                        <div class="mt-4">
                            <label for="" class="text-sm">Image Preview</label>
                            <img src="{{ $image->temporaryUrl() }}" alt="" class="w-[100px] border border-slate-200 rounded-lg p-1">
                        </div>
                    @endif

                    @if($errors->has('image'))
                        <span class="text-sm text-rose-500">{{ $errors->first('image') }}</span>
                    @endif
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
            text: 'Game language created',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
