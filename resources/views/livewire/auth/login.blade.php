<div class="w-full h-full">
    <section class="bg-slate-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-slate-900">  
            </a>
            <div class="w-full bg-white rounded-xl shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-slate-900 md:text-2xl">
                        Sign in to your account
                    </h1>
                    <form wire:submit="submitLogin" class="space-y-4 md:space-y-6" action="#">
                        @if(Session::has('errorMsg'))
                            <div class="w-full p-2 rounded-lg mb-4 text-center">
                                <span class="text-sm text-rose-500">{!! Session::get('errorMsg') !!}</span>
                            </div>
                        @endif
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-slate-900">Your email</label>
                            <input wire:model="email" type="email" name="email" id="email" class="bg-slate-50 border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-amber-600 focus:border-amber-500 block w-full p-2.5" placeholder="Enter email">
                            @error($email)
                                <span class="text-sm text-rose-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-slate-900">Password</label>
                            <input wire:model="password" type="password" name="password" id="password" placeholder="••••••••" class="bg-slate-50 border border-slate-300 text-slate-900 sm:text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5">
                            @error($password)
                                <span class="text-sm text-rose-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border checked:bg-amber-500 border-slate-300 rounded bg-slate-50 focus:ring-3 focus:ring-amber-500 focus:bg-amber-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-slate-500">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Forgot password?</a>
                        </div>
                        <button wire:target="submitLogin" type="submit" class="w-full bg-amber-500 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
