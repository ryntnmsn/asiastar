<div>
    <div class="flex justify-between items-center">
        <x-title>Edit Article Category</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="update">
            <div class="flex flex-col gap-4">
                <div>
                    <label for="name" class="block mb-2 font-medium text-slate-700">Name</label>
                    <x-input wire:model="name" type="text" id="name"></x-input>
                    @error($name)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
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
            text: 'Article category updated',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
