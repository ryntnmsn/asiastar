<div class="h-full w-full">
    <div class="w-full h-full max-w-[1280px] mx-auto mt-20">
        <x-heading>Contact Us</x-heading>
        <div class="flex gap-20">
            <div class="flex-1">
                <div class="flex h-full">
                    <div class="flex flex-col gap-5 ">
                        <div>
                            <img src="{{url('storage/images/image-placeholder-banner.jpg')}}" alt="" class="rounded-2xl">
                        </div>
                        <div>
                            <x-paragraph class="noto-sans leading-loose">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </x-paragraph>
                        </div>

                        @foreach ($contacts as $contact)
                            @if($contact->type == 'phone')
                                <div class="flex gap-2 items-start">
                                    <div class="!text-cyan-600">
                                        <x-icon-phone></x-icon-phone>
                                    </div>
                                    <div class="flex flex-col gap-1 items-start">
                                        <x-paragraph class="!text-sm !mb-0">Phone number/s</x-paragraph>
                                        <x-heading class="!text-base">{{$contact->title}}</x-heading>
                                    </div>
                                </div>
                            @endif

                            @if($contact->type == 'email')
                                <div class="flex gap-2 items-start">
                                    <div class="!text-cyan-600">
                                        <x-icon-email></x-icon-email>
                                    </div>
                                    <div class="flex flex-col gap-1 items-start">
                                        <x-paragraph class="!text-sm !mb-0">Email address</x-paragraph>
                                        <x-heading class="!text-base">{{$contact->title}}</x-heading>
                                    </div>
                                </div>
                            @endif

                            @if($contact->type == 'address')
                                <div class="flex gap-2 items-start">
                                    <div class="!text-cyan-600">
                                        <x-icon-address></x-icon-address>
                                    </div>
                                    <div class="flex flex-col gap-1 items-start">
                                        <x-paragraph class="!text-sm !mb-0">Address</x-paragraph>
                                        <x-heading class="!text-base">{{$contact->title}}</x-heading>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="bg-white p-10 rounded-2xl border border-slate-200 dark:bg-dark-blue dark:border-slate-900">
                    <div class="flex flex-col gap-5">
                        <div>
                            <x-heading class="!text-lg">
                                Fill out the information below
                            </x-heading>
                        </div>
                        <div class="flex flex-row gap-4">
                            <div class="flex-1 flex flex-col gap-2">
                                <x-text>First name</x-text>
                                <x-input-home type="text"></x-input-home>
                            </div>
                            <div class="flex-1 flex flex-col gap-2">
                                <x-text>Last name</x-text>
                                <x-input-home type="text"></x-input-home>
                            </div>
                        </div>
                        <div class="flex flex-row gap-4">
                            <div class="flex-1 flex flex-col gap-2">
                                <x-text>Email address</x-text>
                                <x-input-home type="email"></x-input-home>
                            </div>
                        </div>
                        <div class="flex flex-row gap-4">
                            <div class="flex-1 flex flex-col gap-2">
                                <x-text>Phone number</x-text>
                                <x-input-home type="text"></x-input-home>
                            </div>
                        </div>
                        <div class="flex flex-row gap-4">
                            <div class="flex-1 flex flex-col gap-2">
                                <x-text>Message</x-text>
                                <x-textarea-home type="text"></x-textarea-home>
                            </div>
                        </div>
                        <div class="text-right">
                            <div>
                                <x-primary-button-new class="!px-4 !py-2">Submit</x-primary-button-new>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
