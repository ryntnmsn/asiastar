<div>
    <div class="w-full max-w-[1280px] mx-auto mt-20">
        <div class="w-full max-w-[640px] mx-auto mt-20 flex flex-col gap-10">
            <div>
                <div>
                    <x-paragraph class="!font-medium">{{date('F j, Y', strtotime($created_at))}}</x-paragraph>
                </div>
                <div>
                    <img src="{{url('storage/'. $image)}}" alt="{{$title}}">
                </div>
            </div>
            <div>
                <div>
                    <x-paragraph class="!font-medium capitalize">
                        <span class="bg-slate-200 px-2 py-1 text-xs !font-semibold">{{str_replace('_', ' ', $category)}}</span>
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
                <div class="mb-10 border-b border-slate-300 flex justify-between items-center">
                    <x-heading class="capitalize">Related news</x-heading>
                    @if($category == 'company_news')
                        <a href="{{route('all.company.news.index')}}" class="montserrat text-slate-600">All news</a>
                    @else
                        <a href="{{route('all.achivements.news.index')}}" class="montserrat text-slate-600">All achievements</a>
                    @endif
                </div>
                <div>
                    <!-- Companies News -->
                    <div class="grid grid-cols-4">
                        @foreach ($relatedNews as $relatedNews)
                            <div class="group">
                                <div class="flex border border-slate-100 bg-white p-5 gap-2 flex-col w-full group-hover:-translate-y-2 hover:shadow-2xl hover:z-10 duration-300 ease-in-out cursor-pointer relative h-full">
                                    <a href="{{route('single.news.index', ['category' => $relatedNews->category, 'slug' => $relatedNews->slug])}}" class="absolute top-0 bottom-0 left-0 right-0 z-20"></a>
                                    <div class="relative">
                                        <div class="absolute top-0 left-0 bg-white m-2 w-14 h-14 p-1 shadow-xl">
                                            <div class="flex flex-col items-center justify-center gap-0">
                                                <span class="font-semibold mb-0 text-slate-600 !text-[26px] leading-[28px] montserrat">{{date('j', strtotime($relatedNews->created_at) )}}</span>
                                                <span class="text-[14px] leading-[12px] m-0 montserrat text-slate-600">{{date('M', strtotime($relatedNews->created_at) )}}</span>
                                            </div>
                                        </div>
                                        <img src="{{url('storage/'. $relatedNews->image)}}" alt="{{$relatedNews->name}}" class="w-full">
                                    </div>
                                    <div>
                                        <div class="flex text-left flex-col justify-between items-start">
                                            <x-heading class="text-base !font-medium !text-slate-600">
                                                {{$relatedNews->name}}
                                            </x-heading>
                                            <x-paragraph class="!text-sm">
                                                {{Str::words($relatedNews->short_description, 13, '...')}}
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
