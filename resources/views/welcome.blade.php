<x-guest-layout>
    <div class="flex w-full md:flex-row flex-col">
        <section x-data="slideshow" x-init="setInterval(() => { current_slide = (current_slide + 1) % 4 }, 5000)" id="slideshow" class="basis-1/2 mr-12">
            <div class="relative flex justify-center">
                <div x-on:click="prev_slide()"
                    class="z-50 absolute top-1/2 left-1 bg-black/50 rounded-full text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="rotate-180 w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div x-on:click="next_slide()"
                    class="z-50 absolute top-1/2 right-1 bg-black/50 rounded-full text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                {{-- TODO: Add dots to navigate --}}
                <img x-cloak x-transition.duration.1000ms class="absolute" x-show="current_slide === 0"
                    src="{{ Vite::asset('resources/images/slideshow-1.png') }}">
                <img x-cloak x-transition.duration.1000ms class="absolute" x-show="current_slide === 1"
                    src="{{ Vite::asset('resources/images/slideshow-2.png') }}">
                <img x-cloak x-transition.duration.1000ms class="absolute" x-show="current_slide === 2"
                    src="{{ Vite::asset('resources/images/slideshow-3.png') }}">
                <img x-cloak x-transition.duration.1000ms class="absolute" x-show="current_slide === 3"
                    src="{{ Vite::asset('resources/images/slideshow-4.png') }}">
                <img src="{{ Vite::asset('resources/images/slideshow-0.png') }}">
            </div>
        </section>
        <div class="flex basis-1/2">
            <section class="basis-1/2" id="newsletter-signup">
                {{-- TODO: Newsletter signup goes here --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div id="newsletter" class="bg-gradient-to-b from-pink-300 to-purple-800">
                        <h3 class="text-center text-xl text-white leading-10">Newsletter Sign Up</h3>
                    </div>
                    <!-- Name -->
                    <div id="textfield_container" class="bg-gray-200 ">
                        <div class="px-3 ml-1 mb-2 mt-2">
                            <x-text-input id="first_name" class="block mt-1 w-full px-1 py-1 shadow-gray-500/40 md:shadow-xl" type="text" name="name" placeholder="Enter your First Name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="px-3 ml-1 mb-2">
                            <x-text-input id="last_name" class="block mt-1 w-full px-1 py-1 shadow-gray-500" type="text" name="name" placeholder="Enter your Last Name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div class="px-3 ml-1 mb-2">
                            <x-text-input id="email" class="block mt-1 w-full px-1 py-1 shadow-gray-500" type="email" name="email" placeholder="Enter your Email ID"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-primary-button class="ml-4">
                                {{ __('Subscribe') }}
                            </x-primary-button>

                            <x-primary-button class="ml-4">
                                {{ __('Cancel') }}
                            </x-primary-button>

                        </div>
                    </div>
                </form>
            </section>
            <section class="basis-1/2" id="event-calendar">
                3
            </section>
        </div>
    </div>
</x-guest-layout>
