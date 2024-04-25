<div>
    <div class="flex justify-between items-center">
        <x-title>Language</x-title>
        <x-button>Create</x-button>
    </div>
    <div class="mt-10">
        <div class="relative overflow-x-auto">
            <table class="w-full text-left rtl:text-right text-slate-500">
                <thead class="text-sm text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Code
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($languages as $language)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-slate-900 whitespace-nowrap">
                                {{ $language->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $language->code }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>