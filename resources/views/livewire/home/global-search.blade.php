<!-- Contact modal -->
<div wire:ignore.self id="global-search-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 z-50 w-full md:inset-0 !items-start pt-20 pb-40 h-[calc(100%-1rem)] max-h-full">
    <div id="modalAnimation" class="relative p-4 w-full max-w-[1080px] max-h-full">
        <!-- Modal content -->
        <div class="relative bg-slate-50/[.80] dark:bg-slate-900/[.80] backdrop-blur-xl rounded-2xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b dark:border-slate-800 rounded-t">
                <x-heading class="text-2xl font-semibold text-slate-600 !mb-0">
                    Search
                </x-heading>
                <button wire:click="resetGlobalSearch" type="button" class="text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="global-search-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-10">
                <x-input-home type="text" wire:model.live="globalSearchQuery"></x-input-home>
                <div>
                    @if(strlen($globalSearchQuery) >= 2)
                        @if(count($globalSearchResultsGames) != null)
                            <div class="mt-5 cursor-pointer">
                                <div class="text-slate-600 font-semibold">@lang('Games result')</div>
                                <div class="flex flex-row gap-5 overflow-x-auto">
                                    @forelse ($globalSearchResultsGames as $result)
                                        <div class="p-3 relative">
                                            <a href="{{ route('single.game.index', $result->id)}}" class="absolute top-0 left-0 right-0 bottom-0 z-10"></a>
                                            <div class="w-[120px] rounded-2xl p-1 overflow-hidden bg-white dark:bg-slate-800">
                                                <img src="{{url('storage/'.$result->image_square)}}" alt="{{$result->title}}" class="rounded-2xl" loading="lazy">
                                            </div>
                                            <div class="text-center text-sm mt-2">
                                                <span class="dark:text-slate-50 text-slate-600 mb-5">{{ $result->title }}</span>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="text-slate-600 mb-5">
                                            @lang('No results found')
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        @endif
                    @endif
                </div>

                <div>
                    @if(strlen($globalSearchQuery) >= 2)
                    @if(count($globalSearchResultsNews) != null)
                        <div class="mt-5">
                            <div class="text-slate-600 font-semibold">@lang('News result')</div>
                            @foreach ($globalSearchResultsNews as $result)
                                <div class="relative hover:bg-slate-100 dark:hover:bg-slate-800 px-3 rounded-xl duration-300 ease-in-out">
                                    <a href="{{ route('single.news.index', ['category' => $result->category, 'slug' => $result->slug])}}" class="absolute top-0 left-0 right-0 bottom-0 z-10"></a>
                                    <div class="py-3 border-b border-slate-100 dark:border-slate-800">
                                        <div class="flex gap-5">
                                            <div class="md:block hidden">
                                                <div class="w-40 rounded-xl p-1 bg-white dark:bg-slate-800 overflow-hidden">
                                                    <img src="{{ url('storage/'.$result->image) }}" alt="{{ $result->name }}" class="rounded-xl">
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="dark:text-slate-50 text-slate-600 font-medium">
                                                    {{Str::words($result->name, 13, '...')}}
                                                </span>
                                                <span class="dark:text-slate-400 text-slate-500 text-sm">
                                                    @lang('Date posted'): <span>{{ date('F j, Y', strtotime($result->created_at)) }}</span>
                                                </span>
                                                <span class="dark:text-slate-400 text-slate-500 text-sm pt-2">
                                                    {!! Str::words($result->description, 20, '...') !!}
                                                </pan>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endif
                    @endif
                </div>
            </div> 
        </div>
    </div>
</div>
    



