<!-- Contact modal -->
<div wire:ignore id="contact-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div id="modalAnimation" class="relative p-4 w-full max-w-[1080px] max-h-full">
        <!-- Modal content -->
        <div class="relative bg-slate-50/[.80] dark:bg-slate-900/[.80] backdrop-blur-xl rounded-2xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b dark:border-slate-800 rounded-t">
                <x-heading class="text-2xl font-semibold text-slate-600 !mb-0">
                    Connect with us
                </x-heading>
                <button type="button" class="text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="contact-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-10 space-y-10">
                <div class="grid grid-cols-3 gap-5">
                    <div class="bg-slate-100 dark:bg-slate-800 p-5 rounded-xl">
                        <div class="flex gap-2 items-start">
                            <div class="!text-slate-600">
                                <x-icon-email></x-icon-email>
                            </div>
                            <div class="flex flex-col items-start">
                                <x-text class="!text-sm !mb-0">Email address</x-text>
                                @foreach ($contacts as $contact)
                                    @if(($contact->type == 'email') != null)
                                        <x-heading class="!mb-0 !text-base">{{$contact->title}}</x-heading>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
        
                    <div class="bg-slate-100  dark:bg-slate-800 p-5 rounded-xl">
                        <div class="flex gap-2 items-start">
                            <div class="!text-slate-600">
                                <x-icon-phone></x-icon-phone>
                            </div>
                            <div class="flex flex-col items-start">
                                <x-text class="!text-sm !mb-0">Phone number</x-text>
                                @foreach ($contacts as $contact)
                                    @if(($contact->type == 'phone') != null)
                                        <x-heading class="!mb-0 !text-base">{{$contact->title}}</x-heading>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-1">
                    <div class="rounded-2xl">
                        <div class="flex flex-col gap-4">
                            <div class="mb-5">
                                <x-text>
                                    Simply fill out the contact form below and we will be delighted to assist you promptly. <br><br>
                                    Please note that by submitting this form, you agree to allow us to collect your contact details and any other relevant information that might help give you a personalized response.
                                </x-text>
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
</div>
    



