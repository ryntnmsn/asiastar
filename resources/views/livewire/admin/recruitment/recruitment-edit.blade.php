<div>
    <div class="flex justify-between items-center">
        <x-title>Edit Job</x-title>
    </div>
    <div class="mt-10">

        <form wire:submit.prevent="update">
            <div class="flex flex-col gap-4">
                <div>
                    <label class="block mb-2 font-medium text-slate-700">Title</label>
                    <x-input wire:model="name" name="name" type="text"></x-input>
                    @if($errors->has('name'))
                        <span class="text-sm text-rose-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div wire:ignore>
                    <label class="block mb-2 font-medium text-slate-700">Description</label>
                    <x-textarea wire:model="description" name="description" type="text" id="description"></x-textarea>
                    @if($errors->has('description'))
                        <span class="text-sm text-rose-500">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="flex-1">
                    <label class="block mb-2 font-medium text-slate-700">Language</label>
                    <x-select wire:model="language_id" name="language_id" class="!w-full">
                        @foreach ($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                        @endforeach
                    </x-select>
                    @if($errors->has('language_id'))
                        <span class="text-sm text-rose-500">{{ $errors->first('language_id') }}</span>
                    @endif
                </div>
                <div>
                    <label class="block mb-2 font-medium text-slate-700" for="default_size">Status</label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" wire:model="status" {{$status == 1 ? 'checked' : ''}} class="sr-only peer">
                        <div class="relative w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-100 dark:peer-focus:ring-amber-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div>
                    </label>
                </div>

                <div>
                    <x-button type="submit" wire:target="update" class="mt-5">Update</x-button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    window.addEventListener('updated',function(e){
        Swal.fire({
            title: 'Update',
            text: 'Job updated successfully',
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
