<section class="w-full bg-white">

    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col lg:flex-row">
            <div class="relative bg-white overflow-hidden">
                <div class="max-w-7xl mx-auto">
                    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">



                        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                            <div class="sm:text-center lg:text-left">
                                <h1
                                    class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                    <span class="block xl:inline">Aminath Fareedha</span>
                                    <span class="block text-indigo-600 xl:inline">Mushathareege Dhevvadhoo</span>
                                </h1>
                                <p
                                    class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Mom ah kommeves ehcheh develop kohdhinumuge niyathuga! Mom kuri mashkaithah
                                    dhakkuvaidhey App eh
                                </p>
                                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                    <div class="rounded-md shadow">
                                        <a href="#"
                                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                            This is
                                        </a>
                                    </div>
                                    <div class="mt-3 sm:mt-0 sm:ml-3">
                                        <a href="#"
                                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                            Mom
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">

                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Register</h4>
                    <p class="text-lg text-gray-500">Sign in instead? <a href="/login"
                            class="text-blue-600 underline">Sing in</a></p>
                    <div class="relative w-full mt-10 space-y-8">
                        <form class="my-4" wire:submit.prevent="submit">
                            <div class="relative">
                                <label class="font-medium text-gray-900">Username</label>
                                <input type="text"
                                    class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50"
                                    wire:model="form.name" placeholder="Enter Your Name" />
                                @error('form.name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Email</label>
                                <input type="email"
                                    class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50"
                                    wire:model="form.email" placeholder="Enter Your Email" />
                                @error('form.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="relative">
                                <label class="font-medium text-gray-900">Password</label>
                                <input type="password"
                                    class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50"
                                    wire:model="form.password" placeholder="Password" />
                                @error('form.password') <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Password</label>
                                <input type="password"
                                    class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50"
                                    wire:model="form.password_confirmation" placeholder="Password Confirmation" />
                            </div>
                            <div class="flex justify-around my-8">

                                <input type="submit" value="Register"
                                    class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition  duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease rounded tracking-wider cursor-pointer " />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>