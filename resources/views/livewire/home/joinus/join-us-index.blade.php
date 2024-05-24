<div class="px-5">
    <div class="h-full w-full">
        <div class="w-full h-full max-w-[1280px] mx-auto mt-[3rem] lg:mt-[10rem]">
            <div>

                <div>
                    <img src="{{url('storage/images/image-placeholder-banner.jpg')}}" alt="" class="rounded-2xl">
                </div>

                <div class="mt-20">
                    <x-heading class="text-4xl">@lang('Join us')</x-heading>
                    <x-paragraph>
                        @lang('We always strive to find individuals who share the passion and vision of our company. If you are passionate about your field and share our values, we encourage you to go through the career opportunities we have in our company').
                    </x-paragraph>
                </div>

                <div wire:ignore id="zoomEffect" class="mt-20">

                    @if(count($recruitments) != null)
                        <div>
                        <x-heading>@lang('Available jobs')</x-heading>
                        </div>
                        <div id="accordion-collapse" data-accordion="collapse" data-active-classes="shadow-2xl dark:text-slate-400 text-slate-600 dark:bg-slate-800">
                            @foreach($recruitments as $recruitment)
                                <div class="">
                                    <h2 id="accordion-collapse-heading-{{$recruitment->id}}" class="bg-slate-50 dark:hover:bg-slate-800 dark:bg-slate-900 hover:shadow-2xl hover:z-10 mb-5 duration-300 ease-in-out hover:-translate-y-2 group rounded-2xl overflow-hidden">
                                        <button type="button" class="py-10 flex items-center justify-between w-full p-5 font-medium rtl:text-right gap-3 text-lg " data-accordion-target="#accordion-collapse-body-{{$recruitment->id}}" aria-expanded="false" aria-controls="accordion-collapse-body-{{$recruitment->id}}">
                                            <span class="flex items-center gap-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-600 !dark:text-slate-400">
                                                    <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                                    <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                                                </svg>
                                                <div class="flex flex-col items-start ">
                                                    <x-heading class="!text-base !mb-0">{{$recruitment->name}}</x-heading>
                                                    <x-paragraph class="!mb-0 text-sm">
                                                        @lang('Date posted'): {{ date('F j, Y', strtotime($recruitment->created_at)) }}
                                                    </x-paragraph>
                                                </div>
                                            </span>
                                            <svg data-accordion-icon class="text-slate-600 dark:text-slate-400 w-3 h-3 rotate-180 shrink-0 duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-{{$recruitment->id}}" class="slideAnimation hidden bg-slate-50 shadow-2xl mb-5 dark:bg-slate-800 rounded-2xl overflow-hidden" aria-labelledby="accordion-collapse-heading-{{$recruitment->id}}">
                                        <div class="p-5 text-slate-500 dark:text-slate-400 prose">
                                            <x-paragraph class="text-lg font-semibold">@lang('Job Description')</x-paragraph>
                                            {!! $recruitment->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                    <div>
                        <x-heading>@lang('No jobs available')</x-heading>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
