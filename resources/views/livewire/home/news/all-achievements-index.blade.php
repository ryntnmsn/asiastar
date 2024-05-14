<div>
    <div class="w-full max-w-[1280px] mx-auto mt-20">
        <div>
            <x-heading class="text-3xl">Achievements</x-heading>
        </div>
        @if(count($achievements) != null)
            <!-- Companies News -->
            <div class="rounded-2xl overflow-hidden">
                <div class="grid grid-cols-3 py-5">
                    @foreach ($achievements as $achievement)
                        <div class="group">
                            <div class="flex border border-slate-100 dark:border-slate-900 dark:bg-dark-blue dark:hover:bg-dark-blue-hover bg-slate-50 p-5 gap-2 flex-col w-full group-hover:-translate-y-2 hover:shadow-2xl hover:z-10 duration-300 ease-in-out cursor-pointer relative h-full">
                                <a href="{{route('single.news.index', ['category' => $achievement->category, 'slug' => $achievement->slug])}}" class="absolute top-0 bottom-0 left-0 right-0 z-20"></a>
                                <div class="relative">
                                    <div class="absolute top-0 left-0 bg-slate-50 m-2 w-14 h-14 p-1 shadow-xl rounded-xl">
                                        <div class="flex flex-col items-center justify-center gap-0">
                                            <span class="font-semibold mb-0 text-slate-600 !text-[26px] leading-[28px] montserrat">{{date('j', strtotime($achievement->created_at) )}}</span>
                                            <span class="text-[14px] leading-[12px] m-0 montserrat text-slate-600">{{date('M', strtotime($achievement->created_at) )}}</span>
                                        </div>
                                    </div>
                                    <img src="{{url('storage/'. $achievement->image)}}" alt="{{$achievement->name}}" class="w-full rounded-2xl">
                                </div>
                                <div>
                                    <div class="flex text-left flex-col justify-between items-start">
                                        <x-heading class="text-base !font-medium">
                                            {{$achievement->name}}
                                        </x-heading>
                                        <x-paragraph class="!text-sm">
                                            {{Str::words($achievement->short_description, 13, '...')}}
                                        </x-paragraph>
                                        <a href="" class="text-cyan-600 text-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
        @endif
        <div class="flex items-center justify-center py-5">
            <x-primary-button-new wire:click="loadMore" class="!px-4 !py-2">Load more</x-primary-button-new>
        </div>
    </div>
</div>
