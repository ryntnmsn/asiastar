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
                    <x-paragraph class="noto-sans leading-loose indent-10 text-justify">
                        @lang('AS Pachinko is a well-established company with over 10 years of experience in the industry. We offer professional and comprehensive gaming interfaces, coupled with robust cash flow services, delivering round-the-clock support and accommodating multiple international currencies. Our diverse portfolio extends beyond our core offerings, encompassing offline property and office space solutions, on-site studio construction services, CDN-related services, API distribution, and more. Our global reach spans across 100+ countries and regions, including Southeast Asia, America, Europe, and Oceania.')
                        <br><br>
                        @lang('For more than 10 years, AS Pachinko has steadfastly adhered to the principles of mutually beneficial cooperation and unwavering customer-centricity. We continually strive for innovation and service excellence, aiming to provide our valued customers with increasingly professional and exceptional experiences. By choosing AS Pachinko, you embark on a journey towards a brilliant future, forged through our collaborative efforts and shared vision.')
                    </x-paragraph>
                </div>
                <div class="flex-1">
                    <div class="p-4 flex justify-center items-center">
                        <img src="{{url('storage/images/ASIASTAR_LOGO_BLACK.png')}}" alt="" class="w-full max-w-[240px] block dark:hidden">
                        <img src="{{url('storage/images/ASIASTAR_LOGO_WHITE.png')}}" alt="" class="w-full max-w-[240px] hidden dark:block">
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
                        <img id="zoomEffect" src="{{url('storage/images/location.png')}}" alt="" class="rounded-2xl">
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
