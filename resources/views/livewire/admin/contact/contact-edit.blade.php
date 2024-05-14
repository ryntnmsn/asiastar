<div>
    <div class="flex justify-between items-center">
        <x-title>Edit Contact</x-title>
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
                    <x-select wire:model="type" class="w-full">
                        <option value="" class="hidden">--Select type--</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone number</option>
                        <option value="address">Address</option>
                    </x-select>
                    @if($errors->has('type'))
                        <span class="text-sm text-rose-500">{{ $errors->first('type') }}</span>
                    @endif
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
            text: 'Contact updated successfully',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
