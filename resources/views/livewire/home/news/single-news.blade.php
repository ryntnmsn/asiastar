<div>
    <div class="w-full max-w-[1280px] mx-auto mt-20">
        <div class="w-full max-w-[640px] mx-auto mt-20 flex flex-col gap-10">
            <div>
                <div>
                    <x-paragraph class="!font-medium">{{date('F j, Y', strtotime($created_at))}}</x-paragraph>
                </div>
                <div>
                    <img src="{{url('storage/'. $image)}}" alt="{{$title}}" class="rounded-3xl">
                </div>
            </div>
            <div>
                <div>
                    <x-paragraph class="!font-medium capitalize mt-5">
                        <span class="bg-slate-200 px-2 py-1 text-sm rounded-md">{{str_replace('_', ' ', $category)}}</span>
                    </x-paragraph>
                </div>
                <x-heading class="!text-3xl !leading-normal">{{$title}}</x-heading>
                <div class="!text-slate-500 noto-sans leading-loose text-justify mt-5">
                        {!! $description !!}
                </div>
            </div>
        </div>

        <div class="mt-20">
            <div class="mt-40">
                <div class="mb-10 border-b border-slate-200 flex justify-between items-center">
                    <x-heading class="capitalize">Related news</x-heading>
                    @if($category == 'company_news')
                        <a href="{{route('all.company.news.index')}}" class="montserrat text-slate-600">All news</a>
                    @else
                        <a href="{{route('all.achivements.news.index')}}" class="montserrat text-slate-600">All achievements</a>
                    @endif
                </div>
                <div>
                    <!-- Companies News -->
                    <div class="grid grid-cols-4 gap-10">
                        @foreach ($relatedNews as $relatedNews)
                            <div id="zoomEffect" class="relative group">
                                <a href="{{route('single.news.index', ['category' => $relatedNews->category, 'slug' => $relatedNews->slug])}}" class="absolute top-0 bottom-0 left-0 right-0 z-10"></a>
                                <div class="flex gap-2 flex-col w-full group-hover:-translate-y-2 duration-300 ease-in-out cursor-pointer">
                                    <div>
                                        <img src="{{url('storage/'. $relatedNews->image)}}" alt="{{$relatedNews->name}}" class="w-full rounded-2xl">
                                    </div>
                                    <div>
                                        <div class="flex text-left flex-col items-start">
                                            <x-heading class="text-base !font-medium !text-slate-600">
                                                {{$relatedNews->name}}
                                            </x-heading>
                                            <x-paragraph class="!text-sm">
                                                {{Str::words($relatedNews->short_description, 10, '...')}}
                                            </x-paragraph>
                                            <a href="" class="text-amber-500 text-sm">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
