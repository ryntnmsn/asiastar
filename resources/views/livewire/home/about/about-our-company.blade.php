<div class="h-full w-full">
    <div>
        <div>
            <div class="h-[380px] md:h-[480px] w-full bg-cover !bg-fixed bg-no-repeat bg-center" style="background-image:url('{{ url('storage/images/image-placeholder-banner.jpg') }}')"></div>
        </div>
    </div>
    <div class="w-full h-full max-w-[1280px] mx-auto px-10 mt-20">
        <div>
            <div>
                <x-heading class="text-4xl">@lang('About Our Company')</x-heading>
            </div>
            <div class="flex md:flex-row flex-col gap-10">
                <div class="flex-1">
                    <x-paragraph class="noto-sans leading-loose">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>

                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </x-paragraph>
                </div>
                <div class="flex-1">
                    <div class="p-4">
                        <img id="zoomEffect" src="{{url('storage/images/image-placeholder.jpg')}}" alt="" class="shadow-2xl rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-44">
            <div class="text-center">
                <x-heading class="text-4xl">@lang('Core Values')</x-heading>
                <x-paragraph class="noto-sans leading-loose">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
                </x-paragraph>
            </div>
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                    <div class="dark:bg-dark-blue dark:hover:bg-dark-blue-hover dark:border-slate-900 bg-white p-5 border border-slate-50 flex flex-col items-center justify-center gap-4 duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img id="zoomEffect" src="{{url('storage/images/image-placeholder.jpg')}}" alt="" class="rounded-2xl">
                        <x-heading class="text-xl">Lorem Ipsum</x-heading>
                    </div>
                    <div class="dark:bg-dark-blue dark:hover:bg-dark-blue-hover dark:border-slate-900 bg-white p-5 border border-slate-50 flex flex-col items-center justify-center gap-4 duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img id="zoomEffect" src="{{url('storage/images/image-placeholder.jpg')}}" alt="" class="rounded-2xl">
                        <x-heading class="text-xl">Lorem Ipsum</x-heading>
                    </div>
                    <div class="dark:bg-dark-blue dark:hover:bg-dark-blue-hover dark:border-slate-900 bg-white p-5 border border-slate-50 flex flex-col items-center justify-center gap-4 duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img id="zoomEffect" src="{{url('storage/images/image-placeholder.jpg')}}" alt="" class="rounded-2xl">
                        <x-heading class="text-xl">Lorem Ipsum</x-heading>
                    </div>
                    <div class="dark:bg-dark-blue dark:hover:bg-dark-blue-hover dark:border-slate-900 bg-white p-5 border border-slate-50 flex flex-col items-center justify-center gap-4 duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img id="zoomEffect" src="{{url('storage/images/image-placeholder.jpg')}}" alt="" class="rounded-2xl">
                        <x-heading class="text-xl">Lorem Ipsum</x-heading>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
