<div>
    <div class="flex justify-between items-center">
        <x-title>Games</x-title>
        <x-href href="{{ route('game.create') }}">Create</x-href>
    </div>
    <div class="mt-5">

    @if(count($games) != null)
        <div class="mb-5 flex md:flex-row flex-col justify-between">
            <div class="flex-1">
                <x-search wire:model.live="search" type="text"></x-search>
            </div>
            <div class="flex-1">
                <div class="flex gap-2 justify-end items-center">
                    <div>
                        <x-label>Filters:</x-label>
                    </div>
                    <div class="flex justify-end">
                        <x-select wire:model.live="sort_by_game_category" class="">
                            <option value="" class="hidden">Sort by category</option>
                            @foreach ($game_categories as $game_category)
                                <option value="{{$game_category->id}}">{{$game_category->name}}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="flex justify-end">
                        <x-select wire:model.live="sort_by_game_type" class="">
                            <option value="" class="hidden">Sort by game type</option>
                            @foreach ($game_types as $game_type)
                                <option value="{{$game_type->id}}">{{$game_type->name}}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div>
                        <div class="flex justify-end">
                            <x-select wire:model.live="sort_by_status">
                                <option value="" class="hidden">Sort by status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </x-select>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-select wire:model.live="sort">
                            <option value="" class="hidden">Sort</option>
                            <option value="asc">A-Z</option>
                            <option value="desc">Z-A</option>
                        </x-select>
                    </div>
                    <div class="flex justify-end">
                        <x-button wire:click="clearFilter">Clear</x-button>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-left rtl:text-right text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Language
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            RTP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Region
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Volatility
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                        <tr class="bg-white border-b hover:bg-slate-50">
                            <td class="px-6 py-4 w-1">
                                {{ $loop->iteration }}
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-slate-900 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <div>
                                        <img src="{{url('storage/'.$game->image_square)}}" alt="" class="w-10 rounded-lg">
                                    </div>
                                    <div>
                                        {{ $game->title }}
                                    </div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $game->language->name }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                {{ str_replace('_', ' ', $game->game_category->name) }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                {{ str_replace('_', ' ', $game->game_type->name) }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                {{ $game->rtp }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                {{ $game->region }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                @if($game->volatility == 3)
                                    High
                                @elseif($game->volatility == 2)
                                    Medium
                                @else
                                    Low
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if($game->status == 1)
                                    <x-active></x-active>
                                @else
                                    <x-inactive></x-inactive>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-4">
                                    <a href="{{ route('game.edit', $game->id) }}" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </a>
                                    <a wire:click="clone({{ $game->id }})" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                        </svg>
                                    </a>
                                    <a wire:click="delete({{ $game->id }})" data-modal-target="popup-delete" data-modal-toggle="popup-delete" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-rose-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-5">
                {{ $games->links() }}
            </div>
        </div>
    </div>
    @else
        <x-no-record></x-no-record>
    @endif


    <div wire:ignore.self id="popup-delete" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 end-2.5 text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-delete">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-slate-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-slate-500">Are you sure you want to delete this record?</h3>

                    <form wire:submit="destroy">
                        <button wire:target="destroy" data-modal-hide="popup-delete" type="submit" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-delete" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-slate-900 focus:outline-none bg-white rounded-lg border border-slate-200 hover:bg-slate-100 hover:text-amber-500 focus:z-10 focus:ring-4 focus:ring-slate-100">No, cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
