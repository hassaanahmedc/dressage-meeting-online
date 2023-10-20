<x-guest-layout>
    <div class="flex w-full md:flex-row flex-col">
        <section x-data="slideshow"
            x-init="setInterval(() => { current_slide = (current_slide + 1) % 4 }, 5000)"
            id="slideshow"
            class="basis-1/2">
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
                {{-- TODO: Add dots to navigate --}}
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
                {{-- TODO: Newsletter signup goes here --}}
            </section>
            <section class="basis-1/2"
                id="event-calendar">
                3
            </section>
        </div>
    </div>
</x-guest-layout>
