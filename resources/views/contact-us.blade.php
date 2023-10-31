<x-guest-layout>
    <div class="flex flex-col gap-3">
        <h1
            class="flex items-center bg-gradient-to-b from-purple-600 to-fuchsia-950 text-3xl text-white px-3">
            About us</h1>
        <div id="container"
            class="flex flex-row gap-4">
            <main id="our_team"
                class=" flex  flex-col basis-3/4 gap-3">
                <section id="about_dressage"
                    class="border-2 rounded-xl border-purple-500 py-2 px-4">
                    <h3 class="text-2xl text-blue">DressageMeetingOnline.com</h3>
                    <p class="text-justify text-base">Please complete the form
                        below and we will reply to your inquiry shortly..</p>
                    <p
                        class="flex justify-between text-justify my-3 mx-3  text-lg">
                        <span>
                            Tell Us About Yourself...
                        </span>

                        <span class="text-red-700 mr-20">
                            * are required fields
                        </span>
                    </p>
                    <div id=form_container>
                        <form method="POST"
                            class="flex flex-col pb-2 w-3/4"
                            action="{{ route('contact-us.store') }}">
                            @csrf
                            <!-- Name -->
                            <div id="textfield_container"
                                class="px-4 py-2 flex flex-col gap-1">
                                <div class="relative">
                                    <x-text-input id="field_name"
                                        class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                        type="text"
                                        name="full_name"
                                        placeholder="Enter your Full Name"
                                        :value="old('full_name')"
                                        required
                                        autocomplete="full_name" />
                                    <span
                                        class="absolute bottom-0 -right-4 text-red-700">*</span>
                                    <x-input-error :messages="$errors->get('full_name')"
                                        class="mt-2 " />
                                </div>
                                <!-- Organization -->
                                <div>
                                    <x-text-input id="field_oraganization"
                                        class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                        type="text"
                                        name="organization"
                                        placeholder="Enter Your Company/Organization"
                                        :value="old('organization')"
                                        autocomplete="organization" />
                                    <x-input-error :messages="$errors->get('organization')"
                                        class="mt-2" />
                                </div>
                                <!-- Email Address -->
                                <div class="relative">
                                    <x-text-input id="field_email"
                                        class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                        type="email"
                                        name="email"
                                        placeholder="Enter your email"
                                        :value="old('email')"
                                        required
                                        autocomplete="email" />
                                    <span
                                        class="absolute bottom-0 -right-4 text-red-700">*</span>
                                    <x-input-error :messages="$errors->get('email')"
                                        class="mt-2" />
                                </div>
                                <!-- Phone Number -->
                                <div class="relative">
                                    <x-text-input id="field_phone"
                                        class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                        type="text"
                                        name="phone"
                                        placeholder="Enter your Phone Number"
                                        :value="old('phone')"
                                        required
                                        autocomplete="phone" />
                                    <span
                                        class="absolute bottom-0 -right-4 text-red-700">*</span>
                                    <x-input-error :messages="$errors->get('phone')"
                                        class="mt-2" />
                                </div>
                                <!-- State / Province -->
                                <div>
                                    <x-text-input id="field_city"
                                        class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                        type="text"
                                        name="city"
                                        placeholder="Enter your City & State/Province"
                                        :value="old('city')"
                                        autocomplete="city" />
                                    <x-input-error :messages="$errors->get('city')"
                                        class="mt-2" />
                                </div>

                                <!-- Postal Code -->
                                <div>
                                    <x-text-input id="field_zip_code"
                                        class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                        type="text"
                                        name="zip_code"
                                        placeholder="Enter your Postal Code/Zipe"
                                        :value="old('zip_code')"
                                        autocomplete="zip_code" />
                                    <x-input-error :messages="$errors->get('zip_code')"
                                        class="mt-2" />
                                </div>
                                <!-- Country Name -->
                                <div>
                                    <x-text-input id="field_country"
                                        class="block mt-1 w-full px-1 py-1 shadow-gray-500"
                                        type="text"
                                        name="country"
                                        placeholder="Enter your Country"
                                        :value="old('country')"
                                        autocomplete="country" />
                                    <x-input-error :messages="$errors->get('country')"
                                        class="mt-2" />
                                </div>
                                <!-- Interest Checkboxes -->
                                <div class="text-lg my-3">
                                    <p>Tell Us About Your Interests... </p>
                                    <p class="text-center w-1/2">I want to...
                                    </p>
                                    <div id="interests"
                                        class="my-3 text-sm flex flex-row flex-wrap gap-5">
                                        <label for="attend_webinar">
                                            <input type="checkbox"
                                                id="attend_webinar"
                                                name="attend_webinar"
                                                class="mr-2 focus:ring-0"
                                                value="">Attend a Webinar
                                        </label>

                                        <label for="sponsor_webinar">
                                            <input type="checkbox"
                                                id="sponsor_webinar"
                                                name="sponsor_webinar"
                                                class="mr-2 focus:ring-0"
                                                value="">Sponsor a Webinar
                                        </label>

                                        <label for="teach_webinar">
                                            <input type="checkbox"
                                                id="teach_webinar"
                                                name="teach_webinar"
                                                class="mr-2 focus:ring-0"
                                                value="">Teach a Webina
                                        </label>

                                        <label for="other">
                                            <input type="checkbox"
                                                id="other"
                                                name="other"
                                                class="mr-2 focus:ring-0"
                                                value="">Other
                                        </label>
                                    </div>
                                </div>
                                <!-- Additional Contact Message -->
                                <div>
                                    <p class="mb-3 text-lg">Tell Us How We Can
                                        Help You...</p>
                                    <textarea id="contact_msg"
                                        class="inline mt-1 w-3/4 px-1 py-1 shadow-gray-500 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                        type="textarea"
                                        name="contact_msg">
                                    </textarea>
                                    <span class="inline text-sm italic">upto
                                        750 chars</span>
                                </div>
                            </div>
                            <div class="px-4">
                                <x-primary-button
                                    class="justify-center my-3  text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900r">
                                    Contact Me!
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </section>
            </main>


            <aside id="sponsors"
                class="flex  flex-col basis-1/4 gap-3">

                <section id="calender">
                    calemder here
                </section>

                <section id="newsletter">
                    <x-newsletter-signup />
                </section>

                <section id="contact"
                    class="border-2 rounded-xl border-yellow-700 py-2 px-4">
                    <h3 class=" text-2xl text-center text-yellow-700">
                        Questions?
                    </h3>
                    <p class="pt-2 text-center">
                        If you have any Questions
                        about our Webinars,
                        Call<span class="text-yellow-700">1-604-746-9222</span>
                    </p>
                </section>
            </aside>
        </div>
    </div>
</x-guest-layout>
