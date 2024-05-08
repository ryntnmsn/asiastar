<div>
    <div class="w-full max-w-[1280px] mx-auto mt-20">
        <div>
            <x-heading class="text-3xl">Achievements</x-heading>
        </div>
        @if(count($achievements) != null)
            <!-- Companies News -->
            <div class="rounded-2xl overflow-hidden">
                <div class="grid grid-cols-4 gap-10 py-5">
                    @foreach ($achievements as $achievement)
                        <div class="relative hover:-translate-y-2 duration-300 ease-in-out cursor-pointer">
                            <a href="{{route('single.news.index', ['category' => $achievement->category, 'slug' => $achievement->slug])}}" class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                            <div class="flex gap-2 flex-col w-full">
                                <div>
                                    <img src="{{url('storage/'. $achievement->image)}}" alt="{{$achievement->name}}" class="w-full rounded-2xl">
                                </div>
                                <div>
                                    <div class="flex text-left flex-col items-start">
                                        <x-heading class="text-base !font-medium !text-slate-600">
                                            {{$achievement->name}}
                                        </x-heading>
                                        <x-paragraph class="!text-sm">
                                            {{Str::words($achievement->short_description, 10, '...')}}
                                        </x-paragraph>
                                        <a href="" class="text-amber-500 text-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        @endif
        <div class="flex items-center justify-center py-5">
            <x-primary-button wire:click="loadMore">Load more</x-primary-button>
        </div>
    </div>
</div>
