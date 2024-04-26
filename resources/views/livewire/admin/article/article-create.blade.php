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
                    @if($errors->has('name'))
                        <span class="text-sm text-rose-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div>
                    <label class="block mb-2 font-medium text-slate-700">Short description</label>
                    <x-input wire:model="short_description" type="text"></x-input>
                    @error($short_description)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
                </div>
                <div wire:ignore>
                    <label class="block mb-2 font-medium text-slate-700">Description</label>
                    <x-textarea wire:model="description" type="text" id="description"></x-textarea>
                    @error($description)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="flex gap-5">
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Language</label>
                            <x-select wire:model="language_id" type="text" class="!w-full">
                                @foreach ($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </x-select>
                            @error($language_id)
                                <span class="text-sm text-rose-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1">
                            <label class="block mb-2 font-medium text-slate-700">Category</label>
                            <x-select wire:model="article_category_id" type="text" class="!w-full">
                                @foreach ($articleCategories as $articleCategory)
                                    <option value="{{ $articleCategory->id }}">{{ $articleCategory->name }}</option>
                                @endforeach
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
                        <input type="checkbox" wire:model="status" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                    </label>
                </div>
                <div>
                    <label class="block mb-2 font-medium text-slate-700" for="default_size">Image</label>
                    <input wire:model="image" class="block w-full text-sm text-slate-700 border border-slate-300 rounded-lg cursor-pointer bg-slate-50 focus:outline-none" id="default_size" type="file">
                    @error($image)
                        <span class="text-sm text-rose-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <x-button type="submit" wire:target="store" class="mt-5">Create</x-button>
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
