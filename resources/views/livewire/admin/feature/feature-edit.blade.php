<div>
    <div class="flex justify-between items-center">
        <x-title>Edit Feature</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="update">
            <div class="flex flex-col gap-5">
                <div>
                    <x-label>Name</x-label>
                    <x-input wire:model="name" type="text" id="name"></x-input>
                    @if($errors->has('name'))
                        <span class="text-sm text-rose-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div>
                    <x-button type="submit" wire:target="update">Create</x-button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    window.addEventListener('updated',function(e){
        Swal.fire({
            title: 'Updated',
            text: 'Feature updated successfully',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
