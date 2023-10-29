<x-guest-layout>
    <div class="flex flex-col gap-3">
        <h1
            class="flex items-center bg-gradient-to-b from-purple-600 to-fuchsia-950 text-3xl text-white px-3">
            About us</h1>
        <div id="container"
            class="flex flex-row gap-4">
            <main id="our_team"
                class=" flex  flex-col basis-3/4 gap-3">
                <section x-data="{ show_more: false }"
                    id="about_dressage"
                    class="border-2 rounded-xl border-purple-500 py-2 px-4">
                    <h3 class="text-2xl">About DressageMeetingOnline.com</h3>
                    <article id="content_info">
                        <p class="text-justify my-3 text-sm">
                            <br>
                            <span>
                                DressageMeetingOnline.com is the newest member
                                of
                                the Select Media family of websites. We are
                                excited
                                to lead the revolution in Dressage Education
                                around
                                the world by offering for the first time, an
                                opportunity for all riders, trainers, judges and
                                enthusiasts at any level to interact live with
                                the
                                Top Dressage Educators up close and personal,
                                using
                                the latest technology available.
                            </span>
                        </p>
                        <p class="text-justify my-3 text-sm">
                            <br>
                            <span>
                                By presenting a comprehensive catalog of
                                exciting,
                                live webinar events where participants can call,
                                interact, speak, watch, listen and learn with
                                other
                                students from the most in-demand Dressage
                                Educators
                                across the globe, anyone with a phone line and
                                broadband internet connection
                            </span>
                            <span x-cloak
                                x-show="show_more">
                                can now attend access the information, coaching
                                and instruction they need to improve their
                                Dressage skills in an up close and personal way
                                never before available.

                                Our catalog of Dressage Webinars offers live
                                opportunities to participate, recorded versions
                                for those who wish to enjoy the benefit of a
                                session and couldn’t attend the live session, as
                                well as the choice to attend our FREE webinars,
                                presented by various organizations, companies
                                and friends of Dressage. Our support team is
                                here to assist you with your questions and guide
                                you as join your first of many webinars with
                                DressageMeetingOnline to come. We are thrilled
                                to have you join us on this journey into the
                                future of Dressage Education.

                                See you online soon!

                            </span>
                        </p>
                    </article>
                    <div id="read_more_btn">
                        <button id="readMoreButton"
                            x-text="show_more ? 'Read Less' : 'Read More'"
                            x-on:click="show_more = !show_more"
                            class="p-2 text-center font-bold text-white w-28 bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900">
                        </button>

                    </div>
                    <br>
                </section>
                {{-- {{Executive Director}} --}}
                <section id="executive_director"
                    x-data="{ show_more: false }"
                    class="border-2 rounded-xl border-purple-500 py-2 px-4">
                    <h3 class="text-2xl">Andreas Stano, Executive Director</h3>
                    <div id="container"
                        class="flex flex-row-reverse gap-4 items-center">
                        <article id="content_info">
                            <p class="text-justify mt-3 text-sm">
                                <br>
                                <span>
                                    Andreas Stano is presently the Executive
                                    Director and Founder of Select Media Inc.,
                                    owner
                                    and manager of the world famous educational
                                    website, DressageClinic.com as well as the
                                    daily
                                    dressage news site WorldDressageNews.com,
                                    and
                                    now, added to the list, the revolutionary
                                    educational website
                                    DressageMeetingOnline.com.
                                    Andreas is also the Founder and creator of
                                    the
                                    Global Dressage Forum North America held in
                                    Florida every year and recognized as the
                                    most
                                    important and influential educational
                                    gathering
                                    for dressage education around the world.
                                    With
                                    Mr. Stano’s leadership, innovativeness and
                                    dynamic management style, has turned Select
                                    Media Inc. into one of the most successful
                                    and
                                    highly esteemed equestrian media companies
                                    in the world.
                                </span>
                            </p>
                            <p x-cloak
                                x-show="show_more"
                                class="text-justify text-sm">
                                <br>
                                <span>
                                    During the 90′s, for a ten year period,
                                    Andreas was CEO of HCM Ltd., an
                                    international concert management firm
                                    representing classical music artists and
                                    organizing live concerts for opera singer
                                    Luciano Pavarotti, ballet dancer Mikahl
                                    Baryishnikov and Martha Graham, world famous
                                    violinist Yehudi Menuhin as well as all
                                    symphonies from Europe and North America.
                                    Andreas also worked closely with pop artists
                                    such as James Brown, Barry White, Jerry Lee
                                    Lewis and Chuck Berry as well as family
                                    entertainment groups such as Walt Disney’s
                                    World On Ice, Harlem Globetrotters.
                                    <br>
                                    Being a competitive equestrian for over 35
                                    years, 21 years as a Grand Prix jumper rider
                                    and 15 years as a dressage rider, Andreas
                                    decided in 2002 to let go of his previous
                                    concert duties and concentrate fully on the
                                    development of Dressage Education, leading
                                    to the establishment of Select Media Inc. to
                                    the present day.
                                    <br>
                                    <br>
                                    During the late 70′s and early 80′s, Andreas
                                    was Assistant to the President of Select
                                    Press Ltd., a leading book
                                    and magazine publishing firm based in
                                    Montreal overseeing operations of the
                                    European divisions as well as the North
                                    America divisions.
                                    <br>
                                    <br>
                                    Today, Andreas is regarded as the dressage
                                    industries’ expert for the implementation
                                    and realization of innovative methods and
                                    technologies for the further development of
                                    dressage education for all serious riders
                                    around the world.
                                </span>
                            </p>
                        </article>
                        <div id="details"
                            class="flex gap-2 flex-col">
                            <img class="object-scale-down"
                                src="{{ Vite::asset('resources/images/director.png') }}">
                            <button
                                x-text="show_more ? 'Read Less' : 'Read More'"
                                x-on:click="show_more = !show_more"
                                id="readMoreButton"
                                class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900 w-28">Read
                                More</button>
                        </div>
                    </div>
                    <br>
                </section>
                {{-- {{Managing Director}} --}}
                <section x-data="{ show_more: false }"
                    id="managing_director"
                    class="border-2 rounded-xl border-purple-500 border-from py-2 px-4">
                    <h3 class="text-2xl">Suzanne La Licata, Managing Director
                    </h3>
                    <div id="container"
                        class="flex flex-row-reverse gap-4 items-center">
                        <article id="content_info">
                            <p class="text-justify mt-3 text-sm">
                                <br>
                                <span>
                                    Suzanne brings her 20 year career specialty
                                    of education, business and systems solutions
                                    consulting to Select Media at an amazing
                                    time in the company’s history. Dynamic
                                    changes in technology, along with the demand
                                    for new content, interactive learning and
                                    access to education without boundaries
                                    created the vision for launching the
                                    DressageMeetingOnline.com website. Suzanne
                                    has successfully led and managed innovative
                                    programs where Webinar technology brought
                                    groups of people worldwide together for the
                                    very first time in order to make effective,
                                    memorable and meaningful results happen.
                                    It’s her pleasure and passion to introduce
                                    this vibrant and personal experience to
                                    those who may not otherwise have an
                                    opportunity to listen, watch and learn from
                                    top educators in the Dressage world.
                                </span>
                            </p>

                            <p x-cloak
                                x-show="show_more"
                                class="text-justify text-sm">
                                <br>
                                <span>
                                    Conducting live, interactive learning
                                    opportunities is an exciting privilege to be
                                    part of, while keeping up with current
                                    programs, devices and media is made
                                    comfortable through her lifelong love of
                                    learning how things work, collaborating to
                                    make positive changes happen and sharing
                                    this knowledge with others.
                                </span>
                            </p>
                        </article>
                        <div id="details"
                            class="flex gap-2 flex-col">
                            <img class="object-scale-down"
                                src="{{ Vite::asset('resources/images/managing_director.png') }}">
                            <button
                                x-text="show_more ? 'Read Less' : 'Read More'"
                                x-on:click="show_more = !show_more"
                                id="readMoreButton"
                                class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900 w-28">Read
                                More</button>
                        </div>
                    </div>
                    <br>
                </section>
                {{-- {{Support Team}} --}}
                <section id="support_team"
                    class="border-2 rounded-xl border-purple-500 py-2 px-4">
                    <h3 class="text-2xl">Technical Support Team
                    </h3>
                    <div id="container"
                        class="flex flex-row-reverse gap-4 items-center">
                        <article id="content_info">
                            <p class="text-justify my-3 text-sm">
                                <span>
                                    Our Technical Support Team provides direct
                                    access to experts to help maximize your Live
                                    Webinar experience, freeing you to get
                                    online quickly to your selected session, and
                                    ready to learn from the top Dressage
                                    Educators available.
                                </span>
                            </p>
                        </article>
                    </div>
                </section>
                {{-- {{Technical Lead}} --}}
                <section id="technical_lead"
                    class="border-2 rounded-xl border-purple-500 py-2 px-4">
                    <h3 class="text-2xl">Lawrence Grigoras, Technical Lead
                    </h3>
                    <div id="container"
                        class="flex flex-row-reverse gap-4 items-center">
                        <article id="content_info">
                            <p class="text-justify my-3 text-sm">
                                <br>
                                <span>
                                    As Technical Lead, Lawrence is our
                                    go-to-computer technician at
                                    DressageMeetingOnline.com With his A+
                                    industry credentials, we are proud of his
                                    hardware and software professional skills.
                                    He knows his way around with desktops,
                                    laptops, tablets and mobile devices and has
                                    worked with us for several years. If you
                                    happen to have a chance to talk with him, we
                                    are sure you will be impressed as well.
                                    Besides working with computers, being a dad
                                    & husband, Lawrence likes to listen
                                    electronic music and watch movies.
                                </span>
                            </p>
                        </article>
                        <figure id="details"
                            class="w-full">
                            <img class="object-scale-down"
                                src="{{ Vite::asset('resources/images/technical_lead.png') }}">
                        </figure>
                    </div>
                    <br>
                </section>
                {{-- {{Customer Care}} --}}
                <section x-data="{ show_more: false }"
                    id="customer_care"
                    class="border-2 rounded-xl border-purple-500 py-2 px-4">
                    <h3 class="text-2xl">Gail Herrell, Director of Customer Care
                    </h3>
                    <div id="container"
                        class="flex flex-row-reverse gap-4 items-center">
                        <article id="content_info">
                            <p class="text-justify my-3 text-sm">
                                <br>
                                <span>
                                    Gail leads our Customer Care team and has
                                    been involved with all of the Select Media
                                    websites since 2004. Gail has been named the
                                    Editor-In-Chief of WorldDressageNews.com and
                                    heads up press and publicity. She truly
                                    enjoys her work, assisting us in bringing
                                    the knowledge and experience of the best
                                    dressage trainers in the world to our
                                    customers. Gail pours her heart and soul
                                    into assisting our members and participants
                                    to make sure that they get the most out of
                                    their online training experience and
                                    ensuring that they are treated with the
                                    highest level of customer care possible.
                                    Gail enjoys her free time riding her horse,
                                    as well as
                                </span>
                                <span x-cloak
                                    x-show="show_more">
                                    caring for her many other pets, studying
                                    oriental brush painting and spending time
                                    out in the South Florida sunshine enjoying
                                    water sports.
                                </span>
                            </p>
                        </article>

                        <div id="details"
                            class="flex gap-4 flex-col mt-6">
                            <img class="object-scale-down"
                                src="{{ Vite::asset('resources/images/customer_care.png') }}">
                            <button
                                x-text="show_more ? 'Read Less' : 'Read More'"
                                x-on:click="show_more = !show_more"
                                id="readMoreButton"
                                class="p-2 text-center font-bold text-white bg-gradient-to-b from-pink-400 to bg-purple-950 hover:from-slate-400 hover:to-gray-900 w-28">Read
                                More</button>
                        </div>
                    </div>
                    <br>
                </section>
                {{-- {{Sponsorships & Advertising}} --}}
                <section id="sponsorships_advertising"
                    class="border-2 rounded-xl border-purple-500 py-2 px-4">
                    <h3 class="text-2xl">Kate O’Connor, Sponsorships &
                        Advertising
                    </h3>
                    <div id="container"
                        class="flex flex-row-reverse gap-4 items-center">
                        <article id="content_info">
                            <p class="text-justify my-3 text-sm">
                                <br>
                                <span>
                                    Kate manages our Education Partnerships and
                                    Sponsorship/Advertising. She currently holds
                                    the position of the New England Dressage
                                    Association (NEDA) Vice President of
                                    Activities. After earning her certification
                                    as an Instructor/Trainer through the
                                    University of Wisconsin Lacrosse Certified
                                    Instructor Program and apprenticing with
                                    Lois Heyerdahl, she moved back to her home
                                    state of Massachusetts. In addition to ably
                                    coordinating sponsorships and working with
                                    our education partners, Kate is a real
                                    estate sales professional specializing in
                                    equine properties and is a certified
                                    relocation specialist.
                                </span>
                            </p>
                        </article>
                        <figure id="details"
                            class="w-full">
                            <img class=""
                                src="{{ Vite::asset('resources/images/sponsorships.png') }}">
                        </figure>
                    </div>
                </section>
            </main>
            <aside id="sponsors"
                class="flex  flex-col basis-1/4 gap-3">
                <section
                    class="border-2  rounded-xl border-purple-500 py-2 px-4">
                    <div
                        class="flex flex-col gap-6  justify-center items-center">
                        <figure>
                            <img src="{{ Vite::asset('resources/images/our_team.png') }}"
                                alt="">
                        </figure>
                        <h3 class="py-3.5 text-blue font-bold text-xl">About
                            Our
                            team</h3>
                    </div>
                    <article class="text-justify text-sm">
                        <p class="pt-4">
                            DressageMeetingOnline has a dedicated team of
                            equestrian and technology professionals on staff to
                            bring you the easiest and newest way to connect to
                            your favorite Dressage educator for a one-of-a-kind
                            interactive experience.
                        </p>

                        <p class="pt-4">
                            We are focused on providing a fun and memorable
                            experience each and every time you choose to
                            participate in one of our LIVE sessions. We offer
                            first class support and passion for what we do.
                        </p>

                        <p class="pt-4">
                            We can't wait to see you in our next scheduled
                            Webinar!
                        </p>
                    </article>
                </section>

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
