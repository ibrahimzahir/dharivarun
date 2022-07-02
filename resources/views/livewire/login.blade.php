<section class="w-full bg-white">

    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col lg:flex-row">
            @include('livewire.splash')

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">

                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Sing in</h4>
                    <p class="text-lg text-gray-500">Do not have account? <a href="/register"
                            class="text-blue-600 underline">Register</a></p>
                    <div class="relative w-full mt-10 space-y-8">
                        <form class="my-4" wire:submit.prevent="submit">
                            <div class="relative">
                                <label class="font-medium text-gray-900">Username</label>
                                <input type="text"
                                    class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50"
                                    wire:model="form.name" placeholder="Username" />
                                @error('form.name') <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative">
                                <label class="font-medium text-gray-900">Password</label>
                                <input type="password"
                                    class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50"
                                    wire:model="form.password" placeholder="Password" />
                                @error('form.password') <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-around my-8">

                                <input type="submit" value="Login"
                                    class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition  duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease rounded tracking-wider cursor-pointer " />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>