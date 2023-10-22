<x-guest-layout>
    <div class="flex w-full md:flex-row flex-col">
        <section x-data="slideshow"
            x-init="setInterval(() => { current_slide = (current_slide + 1) % 4 }, 5000)"
            id="slideshow"
            class="basis-1/2 mr-12">
            <div class="relative flex justify-center">
                <div x-on:click="prev_slide()"
                    class="z-50 absolute top-1/2 left-1 bg-black/50 rounded-full text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="rotate-180 w-8 h-8">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div x-on:click="next_slide()"
                    class="z-50 absolute top-1/2 right-1 bg-black/50 rounded-full text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-8 h-8">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="z-50 bottom-2 right-2 absolute flex gap-2">
                    <template x-for="i in 4" :key="i">
                        <div x-init="console.log(i)"
                            x-on:click="current_slide = i - 1"
                            class="w-4 h-4 cursor-pointer rounded-full border-white bg-blue-900/10 border-2"
                            :class="{'!bg-blue-900': current_slide === i - 1}">
                        </div>
                    </template>
                </div>
                <img x-cloak
                    x-transition.duration.1000ms
                    class="absolute"
                    x-show="current_slide === 0"
                    src="{{ Vite::asset('resources/images/slideshow-1.png') }}">
                <img x-cloak
                    x-transition.duration.1000ms
                    class="absolute"
                    x-show="current_slide === 1"
                    src="{{ Vite::asset('resources/images/slideshow-2.png') }}">
                <img x-cloak
                    x-transition.duration.1000ms
                    class="absolute"
                    x-show="current_slide === 2"
                    src="{{ Vite::asset('resources/images/slideshow-3.png') }}">
                <img x-cloak
                    x-transition.duration.1000ms
                    class="absolute"
                    x-show="current_slide === 3"
                    src="{{ Vite::asset('resources/images/slideshow-4.png') }}">
                <img
                    src="{{ Vite::asset('resources/images/slideshow-0.png') }}">
            </div>
        </section>
        <div class="flex basis-1/2">
            <section class="basis-1/2"
                id="newsletter-signup">
                <form method="POST"
                    class="flex flex-col bg-gray-200 pb-2"
                    action="{{ route('newsletter-members.store') }}">
                    @csrf
                    <div id="newsletter"
                        class="bg-gradient-to-b from-fuchsia-300 to-fuchsia-800">
                        <h3 class="text-center text-xl text-white leading-10">
                            Newsletter Sign Up</h3>
                    </div>
                    <!-- Name -->
                    <div id="textfield_container"
                        class="px-4 py-2 flex flex-col gap-1">
                        <div>
                            <x-text-input
                                class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                type="text"
                                name="first_name"
                                placeholder="Enter your first name"
                                :value="old('first_name')"
                                required
                                autofocus
                                autocomplete="first_name" />
                            <x-input-error :messages="$errors->get('first_name')"
                                class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div>
                            <x-text-input
                                class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                type="text"
                                name="last_name"
                                placeholder="Enter your last name"
                                :value="old('last_name')"
                                required
                                autofocus
                                autocomplete="last_name" />
                            <x-input-error :messages="$errors->get('last_name')"
                                class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div>
                            <x-text-input id="email"
                                class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                type="email"
                                name="email"
                                placeholder="Enter your email"
                                :value="old('email')"
                                required
                                autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')"
                                class="mt-2" />
                        </div>
                    </div>
                    <div class="px-4">
                        <x-primary-button class="w-full justify-center">
                            Subscribe
                        </x-primary-button>
                    </div>
                </form>
            </section>
            <section class="basis-1/2"
                id="event-calendar">
                3
            </section>
        </div>
    </div>
</x-guest-layout>
