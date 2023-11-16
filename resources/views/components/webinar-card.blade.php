<div class="flex flex-col">
    <h3
        class="font-bold text-lg text-white bg-gradient-to-b from-red-900 to-red-500 py-1 px-2">
        {{ $webinar->presenter }}</h3>
    <div class="flex mt-2 gap-2">
        <div class="flex flex-col basis-1/2">
            <img class="w-[105px] h-[87px]"
                alt="{{ $webinar->presenter }}"
                src="{{ $webinar->presenter_image }}">
            <div class="my-2">
                <span>DATE & TIME:</span>
                <p
                    class="text-base/4 font-bold text-[#3067AB]">
                    {{ $webinar->date_and_time }}</p>
            </div>

            <button id="readMoreButton"
                class="text-sm p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900">Read
                More...</button>

        </div>
        <div class="flex flex-col justify-between gap-2 basis-1/2">
            <div>
                <h4 class="text-base/4 font-bold mb-2">{{ $webinar->title }}
                </h4>
                <span class="text-red-600 font-bold">LIVE</span>
            </div>
            <div>
                <div class="flex flex-col gap-2">
                    <a class="text-xs/4 p-2 text-center bg-gradient-to-b from-red-900 to-red-500 py-2 text-white"
                        href="{{ route('goToPayment', $webinar) }}">I want to
                        PAY
                        ${{ $webinar->price }} & Participate</a>
                    <a href=""
                        class="text-xs/4 p-2 text-center bg-gradient-to-b from-red-900 to-red-500 text-white"
                        href="">FREE Access for DressageClinic.com
                        Members
                        ENTER</a>
                </div>
            </div>
        </div>
    </div>
</div>
