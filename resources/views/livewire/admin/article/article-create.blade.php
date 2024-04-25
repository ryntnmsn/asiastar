<div>
    <div class="flex justify-between items-center">
        <x-title>Create Article</x-title>
    </div>
    <div class="mt-10">
        <form wire:submit="store">
            <div class="flex flex-col gap-4">
                <div>
                    <label class="block mb-2 font-medium text-slate-700">Title</label>
                    <x-input wire:model="name" type="text"></x-input>
                    @error($name)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 font-medium text-slate-700">Short description</label>
                    <x-textarea wire:model="short_description" type="text"></x-textarea>
                    @error($short_description)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 font-medium text-slate-700">Description</label>
                    <x-textarea wire:model="description" type="text"></x-textarea>
                    @error($description)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Language</label>
                            <x-select wire:model="language_id" type="text" class="!w-full">
                                <option value="">English</option>
                            </x-select>
                            @error($language_id)
                                <span class="text-sm text-rose-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Category</label>
                            <x-select wire:model="language_id" type="text" class="!w-full">
                                <option value="">English</option>
                            </x-select>
                            @error($language_id)
                                <span class="text-sm text-rose-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block mb-2 font-medium text-slate-700" for="default_size">Status</label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                    </label>
                </div>
                <div>
                    <label class="block mb-2 font-medium text-slate-700" for="default_size">Image</label>
                    <input class="block w-full mb-5 text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none dark:border-slate-600" id="default_size" type="file">
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
            text: 'New article category created',
            icon: 'success',
            iconColor: 'lightgreen',
            confirmButtonColor: '#f59e0b',
        }).then(function() {
            location.reload();
        });
    });
</script>
