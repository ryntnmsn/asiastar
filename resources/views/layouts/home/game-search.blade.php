<!-- Main modal Search-->
<div wire:ignore.self id="default-modal" tabindex="-1" aria-hidden="true" class="duration-300 ease-in-out hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 bottom-0 z-[999] justify-center items-center w-full md:inset-0 max-h-full backdrop-blur-xl">
    <div id="modalAnimation" class="relative p-4 w-full h-full max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow h-full opacity-75 backdrop-blur-xl overflow-auto">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-slate-600">
                    @lang('Search games')
                </h3>
                <button wire:click="resetSearch" type="button" class="text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-600 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div>
                    <input wire:model.live.debounce.500ms="searchQuery" type="text" class="w-full rounded-md p-2 border-2 border-slate-300 text-lg text-slate-600 placeholder:text-slate-400 focus:ring-sky-600 focus:border-sky-600" placeholder="Enter here...">
                </div>

                @if(strlen($searchQuery) >= 2)
                <div class="mt-10">
                    <span class="text-slate-600">@lang('Search Result')</span>
                    @forelse ($results as $result)
                        <div class="flex flex-col even:bg-slate-50 hover:bg-slate-50 rounded-xl px-3 cursor-pointer hover:-translate-y-2 duration-300 ease-in-out">
                            <div class="flex gap-3 py-3">
                                <div>
                                    <div class="w-[80px] rounded-2xl p-1 overflow-hidden bg-white">
                                        <img src="{{url('storage/'.$result->image_square)}}" alt="{{$result->title}}" class="rounded-2xl" loading="lazy">
                                    </div>
                                </div>
                                <div>
                                    <x-title class="!text-base font-semibold">{{ $result->title }}</x-title>
                                    @if($result->description != null)
                                        <x-sub-heading class="!mb-1 !text-sm !text-slate-500">{{ strip_tags(Str::words($result->description, 10, '...')) }}</x-sub-heading>
                                    @endif
                                    <div>
                                        <div class="flex flex-row gap-3">
                                            <div class="flex items-center">
                                                <div class="text-[12px] uppercase text-slate-400">@lang('Volatility'):</div>
                                                <div class="text-[12px] uppercase text-slate-600 ml-1">{{$result->volatility}}</div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="text-[12px] uppercase text-slate-400">RTP:</div>
                                                <div class="text-[12px] uppercase text-slate-600 ml-1">{{$result->rtp}}%</div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="text-[12px] uppercase text-slate-400">@lang('Max win'):</div>
                                                <div class="text-[12px] uppercase text-slate-600 ml-1">x{{$result->maximum_win}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div>
                            @lang('No results found')
                        </div>
                    @endforelse
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
