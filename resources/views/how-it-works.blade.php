<x-guest-layout>
    <div class="flex flex-col gap-3">
        <h1
            class="flex items-center bg-gradient-to-b from-yellow-400 to-orange-400 text-3xl text-white px-3">
            How It Works</h1>
        <div id="container"
            class="flex flex-row gap-4">
            <main id="hiw"
                class=" flex  flex-col basis-3/4 gap-3">
                <section id="get_started"
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <h3 class="text-2xl">Getting Started</h3>
                    <article id="content_info">
                        <p class="my-3 text-justify text-sm">
                            <span>
                                Its fun, it’s easy, a unique educational
                                experience for the betterment of your riding and
                                knowledge..
                            </span>
                        </p>
                        <p class="my-3 text-justify text-sm">
                            <span>
                                Just choose the Webinar you would like to
                                participate
                            </span>
                        </p>
                        <ul class="pl-20 my-3 text-justify text-sm list-disc">
                            <li>Click on the I WANT TO PARTICIPATE button
                                for the particular webinar</li>
                            <li>Fill out the contact information form</li>
                            <li>Pay with your credit card</li>
                            <li>Receive your email confirmation with your
                                link to connect and your code to enter the
                                online classroom at the time the LIVE
                                meeting is happening. </li>
                            <li>Always try to be 10 minutes early for your
                                meeting.</li>
                        </ul>
                        <p>
                            <span class="my-3 text-justify text-sm">
                                Enjoy participating interactively with some of
                                the most influential dressage riders and
                                trainers from around the world.
                            </span>
                        </p>
                    </article>
                    <br>
                </section>

                <section x-data="{ show_more: false }"
                    id="getting_support"
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <h3 class="text-2xl">Getting Support</h3>
                    <article id="content_info">
                        <p class="my-3 text-justify text-sm">
                            <span>
                                Attending a DressageMeetingOnline.com webinar
                                requires a broadband Internet connection such as
                                DSL or Cable. If you are unsure of your Internet
                                connection please contact your ISP (Internet
                                Service Provider) before purchasing a webinar.
                                You must also have speakers and a microphone
                                connected to your computer, or you may use a
                                headset and microphone.
                            </span>
                        </p>
                        <p class="my-3 text-justify text-sm">
                            <span>
                                Participants who can read and open an email,
                                have a broadband connection, are using the
                                latest version of their browser and Adobe Flash
                                player should have no problems joining a
                                webinar.
                            </span>
                        </p>
                        <p class="text-justify text-sm">
                            <span>
                                However, if you feel you would like to have our
                                Customer Care team assist you, you may call
                            </span>
                            <span x-cloak
                                x-show= "show_more">
                                or write an email to
                                info@dressagemeetingonline.com
                                For support questions from Mac Users, we can
                                assist you best if you have downloaded the
                                following software to allow us to work with you
                                on your computer.
                            </span>
                        </p>
                    </article>
                    <div id="read_more_btn"
                        class="mt-2">
                        <button x-text="show_more ? 'Read Less' : 'Read More'"
                            x-on:click="show_more = !show_more"
                            id="readMoreButton"
                            class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900  w-28">Read
                            More</button>
                    </div>
                    <br>
                </section>

                <section x-data="{ show_more: false }"
                    id="private_webinars"
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <h3 class="text-2xl">Private 1 to 1 Webinars</h3>
                    <article id="content_info">
                        <p class="my-3 text-justify text-sm">
                            <span>
                                Here is a great opportunity for you to have a
                                private one to one 45 minute session with your
                                favorite instructor. Speak to him or her about
                                your training issues. Show your instructor
                                images, videos of your tests or anything else
                                you would like to display on your computer so
                                that your instructor can see and discuss with
                                you in real time.
                            </span>
                        </p>
                        <p class="my-3 text-justify text-sm">
                            <span>
                                This is the best way to have a private up close
                                and personal meeting with your favorite
                                instructor where you can discuss in privacy,
                                show your test or daily riding videos to him or
                                her and get direct comments
                            </span>
                            <span x-cloak
                                x-show="show_more">and instruction
                                Take advantage of this unique opportunity for a
                                private one to one meeting. Get in touch with us
                                and we will make this happen for you.</span>
                        </p>
                    </article>
                    <div id="read_more_btn"
                        class="mt-2">
                        <button x-text="show_more ? 'Read Less' : 'Read More'"
                            x-on:click="show_more = !show_more"
                            id="readMoreButton"
                            class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900  w-28">Read
                            More</button>
                    </div>
                    <br>
                </section>

                <section x-data="{ show_more: false }"
                    id="faq"
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <h3 class="text-2xl">Frequently Asked Questions</h3>
                    <article id="content_info">
                        <p class="my-3 text-justify text-sm">
                            <span class="font-bold text-gray-600">
                                FREQUENTLY ASKED QUESTIONS (FAQs)
                            </span>
                        </p>
                        <p class="my-3 text-justify text-sm">
                        <h4 class="text-base font-bold text-gray-600">What is a
                            webinar?</h4>
                        <span class="mt-3 text-justify text-sm">
                            This is the best way to have a private up close
                            and personal meeting with your favorite
                            instructor where you can discuss in privacy,
                            show your test or daily riding videos to him or
                            her and get direct comments
                        </span>
                        </p>

                        <p class="my-3 text-justify text-sm">
                        <h4 class="text-base font-bold text-gray-600">How do
                            webinars work?</h4>
                        <span class="mt-3 text-justify text-sm">
                            Webinars are similar to LIVE classrooms, allowing
                            participants to listen and learn from top Dressage
                            educators in real-time, AND with the convenience and
                            cost savings of being able to participate from your
                            choice of location, anywhere in the world with a
                            broadband Internet connection.
                        </span>
                        </p>

                        <p class="my-3 text-justify text-sm">
                        <h4 class="text-base font-bold text-gray-600">How
                            interactive is a DressageMeetingOnline.com LIVE
                            webinar?</h4>
                        <span class="mt-3 text-justify text-sm">
                            The LIVE Webinars allow you to not only to hear and
                            see
                        </span>
                        </p>

                        <div x-cloak
                            x-show="show_more">
                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">I am
                                unable to attend a LIVE webinar. Is there a
                                recording I can listen to?</h4>
                            <span class="mt-3 text-justify text-sm">
                                Yes. DressageMeetingOnline.com will offer
                                recorded
                                Webinars that can be viewed on demand. Please
                                check
                                back later for more information.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">At
                                what time should I login for the webinar?</h4>
                            <span class="mt-3 text-justify text-sm">
                                The right time to login is 10 – 15 minutes
                                before the webinar begins – to give yourself
                                enough time to check if your computer is working
                                fine – audio and video. Paid participants will
                                receive an email as soon as they pay to book
                                their seat for a particular webinar with
                                instructions to as to how to log into the
                                webinar.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600"> What
                                Type of Internet Connection and Computer Do I
                                Need to Join a Webinar?</h4>
                            <span class="mt-3 text-justify text-sm">
                                To fully experience your webinar, access to a
                                reliable broadband Internet connection for the
                                scheduled date and time of the Webinar, is the
                                most important item to have.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600"> What
                                Type of Web Browser is Needed?</h4>
                            <span class="mt-3 text-justify text-sm">
                                Our webinars can be viewed using web-browsers
                                such as Internet Explorer Firefox, Chrome or
                                Safari.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600"> Do I
                                have to call in to hear the Webinar?</h4>
                            <span class="mt-3 text-justify text-sm">
                                Telephone calls are not required to hear the
                                audio portion of the Webinar. Once your computer
                                or mobile device is connected on the Internet to
                                the Webinar link provided, the audio can be
                                heard, and participants may use their
                                microphones to interact on the Webinar with
                                their favorite Educator. The visual portion of
                                the Webinar displays as well.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600"> What
                                Does “Allow Video and Audio” mean when I join
                                the Webinar?</h4>
                            <span class="mt-3 text-justify text-sm">
                                In order to fully see the video, listen to the
                                audio and interact with the Educator, “ALLOW”
                                the video and audio portions when asked while
                                first joining the Webinar. Participants should
                                never “DENY these settings.
                            </span>
                            </p>
                        </div>

                    </article>
                    <div id="read_more_btn"
                        class="mt-2">
                        <button x-text="show_more ? 'Read Less' : 'Read More'"
                            x-on:click="show_more = ! show_more"
                            id="readMoreButton"
                            class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900  w-28">Read
                            More</button>
                    </div>
                    <br>
                </section>

                <section x-data="{ show_more: false }"
                    id="refund_policy"
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <h3 class="text-2xl">Refund & Cancellation Policy</h3>
                    <br>
                    <article id="content_info">
                        <h4 class="text-xl font-bold text-gray-600">Important
                            Information:</h4>
                        <span class="my-3 text-justify text-sm">
                            Our goal is to provide the highest level of
                            customer satisfaction, however due to the nature
                            of the live events, we are unable to provide
                            refunds. If you have paid to obtain your seat
                            for a LIVE webinar, please study our HOW IT
                            WORKS page to know how to link into your meeting
                            on the date and time it takes place. Yes, it is
                            easy and quick, but for your first Webinar, try
                            to find out as much as possible as to the
                            procedure so you will not have surprises at the
                            moment it is time for you to it is time for you to
                            join your LIVE meeting.
                        </span>
                        <div x-cloak
                            x-show="show_more">
                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">
                                Cancellation of a Webinar:</h4>
                            <span class="mt-3 text-justify text-sm">
                                DressageMeetingOnline.com reserves the right to
                                cancel or reschedule any webinar event due to
                                inevitable reasons like insufficient
                                registrations or circumstances beyond its
                                control. All the attendees will be notified
                                about the cancellation of the event at the email
                                address used for registration and payment.
                            </span>
                            <br>
                            <span class="mt-3 text-justify text-sm">
                                Upon such cancellation, registered attendees can
                                request by email to <a
                                    href="">info@DressageMeetingingOnline.com
                                </a>to receive a full refund of the amount paid
                                in a single settlement refunded to the credit
                                card used for the original payment.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">Or
                                alternately, the attendees can opt for any one
                                of the below:</h4>
                            <ul
                                class="pl-20 my-3 text-justify text-sm list-disc">
                                <li>The webinar so cancelled can be rescheduled
                                    and the paid attendees of the webinar can
                                    attend the newly scheduled webinar for no
                                    additional charges for participation..</li>
                                <li>If the attendees wish to attend a different
                                    webinar with another educator of their
                                    choosing at a future date and time, they can
                                    do so by entering an approved discount
                                    voucher code that will be provided to paid
                                    participants by our Customer Care Team.
                                </li>
                            </ul>
                            <span class="mt-3 text-justify text-sm">
                                Please note that we stand by our customers and
                                that we ask that changes are limited to one
                                request per participant.
                            </span>
                            <span class="mt-3 text-justify text-sm">
                                However, DressageMeetingOnline.com will not be
                                responsible for any penalties or other
                                expenditure incurred due to the cancellation.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">
                                Refunds</h4>
                            <span class="mt-3 text-justify text-sm">
                                Once payment is issued by a participant to
                                reserve a seat in a webinar, it is understood
                                and accepted by the participant that there are
                                no refunds for any reason what so ever,
                                including and not limited to reasons such as the
                                participant not being able to attend a webinar
                                due to technological reasons, scheduling or
                                convenience reasons, lack of adequate broadband
                                or internet connection, late arrival to the
                                scheduled webinar and or any technological
                                failure on behalf of the participant or the
                                participant’s equipment, or any other reasons
                                resulting for the participant not to be able to
                                attend the scheduled webinar.
                            </span>
                            <br>
                            <span class="mt-3 text-justify text-sm">
                                Please contact our Customer Care team 24 to 48
                                hours prior to your webinar for assistance in
                                understanding the procedure. If you have a
                                question on connecting, viewing or participating
                                that we may assist you with, don’t leave it for
                                the last moment, carefully read our HOW IT WORKS
                                page, or call us for a verbal guidance. We are
                                here to help!
                            </span>
                            </p>
                        </div>
                    </article>
                    <div id="read_more_btn"
                        class="mt-2">
                        <button x-text="show_more ? 'Read Leas' : 'Read More'"
                            x-on:click="show_more = !show_more"
                            id="readMoreButton"
                            class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900  w-28">Read
                            More</button>
                    </div>
                    <br>
                </section>

                <section x-data="{ show_more: false }"
                    id="minimum_requirements"
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <h3 class="text-2xl">Minimum Requirements</h3>
                    <article id="content_info">
                        <p class="my-3 text-justify text-sm">
                            Participants will need a fast Internet
                            connection, a microphone and speakers. A USB or
                            wireless headset is recommended.
                        </p>
                        <p class="my-3 text-justify text-base">
                            Operating Systems and Conditions Supported by
                            DressageMeetingOnline.com for PC users:
                        </p>
                        <ul class="pl-20 my-3 text-sm list-disc">
                            <li>Windows XP, Windows 7 or higher</li>
                            <li>Broadband Internet Connection</li>
                            <li>Internet Explorer 8.0 or higher or</li>
                            <li>Latest Release of Chrome, or Firefox </li>
                            <li>Latest Version of Adobe Flash Player.</li>
                        </ul>

                        <h3 class="text-xl italic font-bold text-gray-500">For
                            Macs or PCs, Here are the Browsers We Support
                        </h3>
                        <p class="my-3 text-justify text-base">
                            Browsers Supported by DressageClinic.com for Mac
                            and PC users:
                        </p>
                        <ul class="pl-20 my-3 text-sm list-disc">
                            <li>Mac OS X</li>
                            <li>Broadband Internet Connection</li>
                            <li>Latest Release of Safari, Chrome or Firefox
                            </li>
                            <li>Latest Release of Adobe Flash Player </li>
                        </ul>

                        <p class=" text-justify text-base">For Mobile Users:
                        </p>
                        <span class="my-3 text-justify text-sm">
                            MegaMeeting Mobile is our recommended Webinar
                            Application available for both Apple and Android
                            mobile devices. You can find the Application
                        </span>
                        <span x-show="show_more"
                            class="my-3 text-justify text-sm">
                            in the iTunes Store and the Google Play store.
                            Downloading the Application in advance will assist
                            you greatly in joining the Webinar on time.
                        </span>
                    </article>
                    <div id="read_more_btn"
                        class="mt-2">
                        <button x-text="show_more ? 'Read Less' : 'Read More'"
                            x-on:click="show_more = !show_more"
                            id="readMoreButton"
                            class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900  w-28">Read
                            More</button>
                    </div>
                    <br>
                </section>

                <section x-data="{ show_more: false }"
                    id="privacy_policy"
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <h3 class="text-2xl">Privacy Policy</h3>
                    <article id="content_info">
                        <p class="my-3 text-justify text-sm">
                            This policy covers how we use your personal
                            information. We take your privacy seriously and take
                            measures to safeguard your personal information.
                        </p>
                        <p class="my-3 text-justify text-sm">
                            We may change this policy from time to time by
                            updating this page. You should check this page from
                            time to time to ensure that you are happy with any
                            changes. This policy is effective from June 1, 2013.
                        </p>

                        <p class="text-base font-bold text-gray-500">What
                            we collect</p>
                        <span class=" text-justify text-sm">We may collect
                            information such as </span>

                        <ul class="pl-20 my-3 text-justify text-sm list-disc">
                            <li>name & contact information including email
                                address</li>
                            <li>demographic information such as postal code,
                                preferences and interests</li>
                            <li>other information relevant to customer surveys
                                and/or offersr</li>
                        </ul>

                        <p class="text-base font-bold text-gray-500">What
                            we do with the information we gather?</p>
                        <span class="text-justify text-sm">We require this
                            information to understand
                            your</span>

                        <div x-cloak
                            x-show="show_more">
                            <span>
                                needs and provide you with a better service and
                                for the following reasons:
                            </span>
                            <ul
                                class="pl-20 my-3 text-justify text-sm list-disc">
                                <li>Internal record keeping.</li>
                                <li>We may periodically send promotional email
                                    about new products, special offers or other
                                    information which we think you may find
                                    interesting using the email address which
                                    you have provided.</li>
                                <li>From time to time, we may also use your
                                    information to contact you for market
                                    research purposes. We may contact you by
                                    email, phone, fax or mail.</li>
                                <li>We may use the information to customize the
                                    website according to your interests.</li>
                                <li>We may provide your information to our third
                                    party partners for marketing or promotional
                                    purposes.</li>
                                <li>We do not sell your information.</li>
                            </ul>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">
                                Security</h4>
                            <span class="mt-3 text-justify text-sm">
                                We are committed to ensuring that your
                                information is secure and to prevent
                                unauthorized access or disclosure.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">
                                How we use cookies</h4>
                            <span class="mt-3 text-justify text-sm">
                                Overall, cookies help us provide you with a
                                better website, by enabling us to monitor which
                                pages you find useful and which you do not. A
                                cookie in no way gives us access to your
                                computer or any information about you, other
                                than the data you choose to share with us.
                            </span>
                            <br>
                            <span class="mt-3 text-justify text-sm">
                                You can choose to accept or decline cookies.
                                Most web browsers automatically accept cookies,
                                but you can usually modify your browser setting
                                to decline cookies if you prefer. This may
                                prevent you from taking full advantage of the
                                website.
                            </span>
                            </p>

                            <p class="my-3 text-justify text-sm">
                            <h4 class="text-base font-bold text-gray-600">
                                Links to other websites</h4>
                            <span class="mt-3 text-justify text-sm">
                                Our website may contain links to enable you to
                                visit other websites of interest easily. Once
                                you have used these links to leave our site, you
                                should note that we do not have any control over
                                that other website. Therefore, we cannot be
                                responsible for the protection and privacy of
                                any information which you provide whilst
                                visiting such sites and such sites are not
                                governed by this privacy statement. You should
                                exercise caution and look at the privacy
                                statement applicable to the website in question.
                            </span>
                            </p>
                        </div>
                    </article>
                    <div id="read_more_btn"
                        class="mt-2">
                        <button x-text="show_more ? 'Read Less' : 'Read More'"
                            x-on:click="show_more = ! show_more"
                            id="readMoreButton"
                            class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900  w-28">Read
                            More</button>
                    </div>
                    <br>
                </section>

            </main>
            <aside id="sponsors"
                class="flex  flex-col basis-1/4 gap-3">
                <section
                    class="border-2 rounded-xl border-orange-400 py-2 px-4">
                    <div
                        class="flex flex-col gap-6  justify-center items-center">
                        <figure class="mt-8">
                            <img src="{{ Vite::asset('resources/images/our_team.png') }}"
                                alt="">
                        </figure>
                        <p
                            class="pt-3.5 text-indigo-800 font-bold text-sm/[12ox] italic text-center">
                            Everyone
                            can NOW participate in a LIVE webinar using a
                            broadband internet connection, with their computer
                            or an I-Phone, I-Pad or Android Tablet device.</h3>
                        </p>
                        <article class="text-justify text-sm">
                            <p>
                                Simply join a webinar from our catalog and you
                                will receive an email link to the Webinar
                                meeting room with a code to access the Webinar
                                at the scheduled date and time.
                            </p>

                            <p class="pt-4">
                                Once the session is ready to begin, click the
                                link from your computer to see the meeting
                                materials and join the audio portion to listen
                                in and speak up, using a headset with a
                                microphone or computer speakers and built-in
                                microphone.
                            </p>

                            <p class="pt-4">
                                Remember to join using the link and meeting
                                password to see what's going on, and get ready
                                to watch and participate on the Webinar to hear
                                what our Top Educators have to say on their
                                topic.
                            </p>

                            <p class="pt-4">
                                This way you can see what our Educators are
                                showing, AND ask questions, listen and learn.
                                The sessions last one hour, and provide a
                                one-of-a-kind opportunity to listen, interact,
                                watch and learn from the comfort of your home,
                                barn, hotel or any location with a broadband
                                internet connection.
                            </p>

                            <p class="pt-4">
                                Dressage Meeting Online is proud to offer the
                                best in Dressage Education -- Up Close &
                                Personal.
                            </p>

                        </article>
                </section>

                <section id="calender">
                    Calendar Placeholder
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
