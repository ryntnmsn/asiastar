<div>
    <div class="h-full w-full">
        <div class="w-full h-full max-w-[1280px] mx-auto px-10 mt-20">
            <div>
                <div>
                    <img src="{{url('storage/images/image-placeholder-banner.jpg')}}" alt="" class="rounded-2xl">
                </div>
                <div class="mt-20 text-center">
                    <x-heading class="text-4xl">Our Partners</x-heading>
                    <x-paragraph>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </x-paragraph>
                </div>
                <div class="mt-20">
                    <div class="grid grid-cols-3">
                        @foreach ($partners as $partner)
                            <div>
                                <div class="border border-slate-50 bg-white py-10 px-5 flex flex-col items-center justify-center gap-5 hover:shadow-2xl hover:z-10 hover:-translate-y-2 duration-300 ease-in-out cursor-pointer">
                                    <div>
                                        <img src="{{url('storage/'.$partner->image)}}" alt="{{$partner->title}}" class="w-20">
                                    </div>
                                    <div>
                                        <x-heading class="!text-base !font-semibold">{{$partner->title}}</x-heading>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-slate-600 w-6 h-6">
                                            <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
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
