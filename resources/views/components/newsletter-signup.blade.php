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
            <x-text-input class="block mt-1 w-full px-1 py-1 shadow-gray-500"
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
            <x-text-input class="block mt-1 w-full px-1 py-1 shadow-gray-500"
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
