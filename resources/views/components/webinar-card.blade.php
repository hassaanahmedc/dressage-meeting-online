<div class="flex flex-col border border-black">
    <h3
        class="font-bold text-lg text-white bg-gradient-to-b from-red-900 to-red-500 py-1 px-2">
        {{ $webinar->presenter }}</h3>
    <div class="flex gap-2">
        <img class="w-16 h-16"
            alt="{{ $webinar->presenter }}"
            src="{{ $webinar->presenter_image }}">
        <h4>{{ $webinar->title }}</h4>
    </div>
    <div class="flex">
        <p>{{ $webinar->date_and_time }}</p>
        <a href="{{ route('goToPayment', $webinar) }}">Participate {{ $webinar->price }}</a>
    </div>
</div>
