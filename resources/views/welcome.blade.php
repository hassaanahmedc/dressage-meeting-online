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
                    <template x-for="i in 4"
                        :key="i">
                        <div x-on:click="current_slide = i - 1"
                            class="w-4 h-4 cursor-pointer rounded-full border-white bg-blue-900/10 border-2"
                            :class="{ '!bg-blue-900': current_slide === i - 1 }">
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
                <x-newsletter-signup />
            </section>
            <section class="basis-1/2"
                id="event-calendar">
                {{-- TODO: Calendar goes here --}}
            </section>
        </div>
    </div>
    <div class="flex mt-4">
        <div class="content-start basis-3/4 gap-2 grid grid-cols-3">
            @foreach ($webinars as $webinar)
                <x-webinar-card :webinar="$webinar" />
            @endforeach
        </div>
        <div class="ml-2 basis-1/4">
            <h5
                class="font-bold text-xl text-white bg-gradient-to-b from-gray-950 to-gray-700 py-1 px-2">
                Our Sponsers</h5>
            <div class="flex flex-col gap-4 mt-5">
                <figure>
                    <img
                        src="{{ Vite::asset('resources/images/ThankYouSponsors.png') }}">
                </figure>

                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/NewSaddleFitBanners.png') }}">
                    </a>
                </figure>

                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/KOTTAS_DressageMeeting_Ad.png') }}">
                    </a>
                </figure>


                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/GlobalDressageForumNorthAmerica.png') }}">
                    </a>
                </figure>

                <figure>

                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/DressageClinic-Head-Banner.png') }}">
                    </a>
                </figure>

                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/NEDA-New-Education-Logo.png') }}">
                    </a>
                </figure>

                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/GDCTA-Logo.png') }}">
                    </a>
                </figure>

                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/PATH_Logo_Full.png') }}">
                    </a>
                </figure>

                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/IDCTA-Region-Map.png') }}">
                    </a>
                </figure>


                <figure>
                    <a href="">
                        <img
                            src="{{ Vite::asset('resources/images/WDCBanne.png') }}">
                    </a>
                </figure>

            </div>
        </div>
    </div>
</x-guest-layout>
