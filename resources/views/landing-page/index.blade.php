@extends('template.template')

@section('nav')
    @extends('template.nav')
@endsection

@section('content')
    <main id="home">
        <div id="content">
            <div class="header-image">
                <img loading="lazy" src="assets/img/header img alternate.jpg" alt="header" />
                <div class="text-container">
                    <div class="text-header">
                        <span>Explore Nature, Equip Gears, Adventure!</span>
                    </div>
                    <div class="text-description">
                        <p>
                            Explore nature and have fun there! Confused about where to get
                            the tools to go there? Check here! We provide a lot of equipment
                            and guides for you!
                        </p>
                    </div>
                    <div class="button">
                        <a href="#">Get Started</a>
                    </div>
                </div>
                @if (session('success'))
                    <div class="fixed bottom-0 left-0 mb-4 ml-4 z-50">
                        <div class="flex items-center p-5 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            id="success-alert" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Email Diverifikasi!</span>
                                <div>
                                    Terima Kasih sudah mendaftar. Jadikan
                                    petualangan anda lebih menarik bersama <span class="font-medium">Trekify</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

            <article id="guide">
                <div class="container">
                    <div class="header-section">
                        <span>Guide</span>
                    </div>

                    <div class="guide-description">
                        <p>
                            The guide services that we provide for you, Maybe you often or
                            maybe this is the first time you experience confusion, worry,
                            when you want to do 'trekking' or 'hiking'.
                            <br /><br />
                            Don't worry, Trekify Team guides will guide you to explore,
                            explore nature, mountains, and more! In addition, we will
                            provide education such as what can be done there and what is not
                            allowed there.
                        </p>

                        <aside>
                            <div class="desc-img">
                                <img loading="lazy" src="assets/img/desc alternate.jpg" alt="Guide" />
                                <div class="desc-texting">
                                    <p>
                                        Our guide is leading to camp on Mount Kebnekaise, Swedish.
                                    </p>
                                    <p class="desc-secondtext">Kebnekaise, Swedish</p>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="guide-button-cont">
                        <div class="guide-button">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </article>

            <article id="market">
                <div class="container">
                    <div class="header-section">
                        <span>Market</span>
                    </div>

                    <div class="market-container">
                        <div class="col-1">
                            <div class="container-col">
                                <a href="#">
                                    <span>Hiking</span>
                                    <img loading="lazy" src="assets/img/hiking.jpg" alt="Hiking" loading="lazy" />
                                </a>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="container-col">
                                <a href="#">
                                    <span>Gears</span>
                                    <img loading="lazy" src="assets/img/Gears.jpg" alt="Gears" loading="lazy" />
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="container-col">
                                <a href="#">
                                    <span>Photos</span>
                                    <img loading="lazy" src="assets/img/photos.jpg" alt="Photos" loading="lazy" />
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="container-col">
                                <a href="#">
                                    <span>Hostelry</span>
                                    <img loading="lazy" src="assets/img/Hostelry.jpg" alt="Hostelry" loading="lazy" />
                                </a>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="container-col">
                                <a href="#">
                                    <span>Camp</span>
                                    <img loading="lazy" src="assets/img/Camp.jpg" alt="Camp" loading="lazy" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="separator-container">
                        <div class="market-separator"></div>
                    </div>

                    <div class="market-desc">
                        <p>
                            So here are some of our available products that you can rent
                            today! You don't need to be confused anymore, we provide all
                            your needs. If you're a first time renter on Trekify, you'll get
                            a <b>15% discount!</b> Check out our other products too, click
                            the button below.
                        </p>
                    </div>

                    <div class="market-button-cont">
                        <div class="market-button">
                            <a href="">See All >></a>
                        </div>
                    </div>
                </div>
            </article>

            <article id="au">
                <div class="container">
                    <div class="header-section">
                        <span>About Us</span>
                    </div>

                    <div class="au-header">
                        <span>Team</span>
                    </div>

                    <div class="au-img">
                        <div class="au-desc">
                            <div class="au-item">
                                <img loading="lazy" src="assets/img/team 1.jpg" alt="Team" loading="lazy" />
                                <div class="au-texting">
                                    <span>
                                        We're a team of gear providers for you to get out there in
                                        nature! We've got everything you need to get you out
                                        there!
                                    </span>

                                    <p class="au-desc-secondtext">- Equipment Team</p>
                                </div>
                            </div>

                            <div class="au-item">
                                <img loading="lazy" src="assets/img/team 2.jpg" alt="Team" loading="lazy" />
                                <div class="au-texting">
                                    <span>
                                        We documented your trip! Maybe you hired our photo service
                                        haha. We will prepare everything for your precious moments
                                        out there!
                                    </span>

                                    <p class="au-desc-secondtext">- Creative Team</p>
                                </div>
                            </div>

                            <div class="au-item">
                                <img loading="lazy" src="assets/img/team 3.jpg" alt="Team" loading="lazy" />
                                <div class="au-texting">
                                    <span>
                                        Oh... So this is your first time hiking? Afraid of getting
                                        lost or... bad things? Don't worry, we can guide you to
                                        travel safely!
                                    </span>

                                    <p class="au-desc-secondtext">- Guider Team</p>
                                </div>
                            </div>
                        </div>

                        <div class="au-desc">
                            <div class="au-item">
                                <img loading="lazy" src="assets/img/team 4.jpg" alt="Team" loading="lazy" />
                                <div class="au-texting">
                                    <span>
                                        ah... don't mind us. We're just helping you from here to
                                        make your network or our team there run smoothly... but if
                                        something goes wrong, please contact us!
                                    </span>

                                    <p class="au-desc-secondtext">- IT Team</p>
                                </div>
                            </div>

                            <div class="au-item">
                                <img loading="lazy" src="assets/img/team 5.jpg" alt="Team" class="team-5" loading="lazy" />
                                <div class="au-texting">
                                    <span>
                                        Do you want to keep your precious moments there? Maybe I
                                        can capture you many moments and not miss a single one!
                                        I'm ready to be part of the team! haha.
                                    </span>

                                    <p class="au-desc-secondtext">- Photographer Team</p>
                                </div>
                            </div>

                            <div class="au-item">
                                <img loading="lazy" src="assets/img/team 6.jpg" alt="Team" loading="lazy" />
                                <div class="au-texting">
                                    <span>
                                        If something bad happens that we don't want, our Trekify
                                        Rescue team is ready to help you to be safe. We work
                                        closely with government agencies. We are approved.
                                    </span>

                                    <p class="au-desc-secondtext">- Rescue Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <footer>
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer-header">
                            <span>Trekify</span>
                        </div>
                        <div class="footer-desc">
                            <p>
                                Trekify is a community platform to support you in doing what
                                you want with nature. We provide a lot of equipment, medicine,
                                food, for you to adventure with. We even have a team for you
                                if you need one.
                                <b>Trekify is your friend, we are nature's friend.</b>
                            </p>
                        </div>

                        <div class="footer-cp">
                            <span>&copy; 2023 | Muhammad Fadlan Abyan Sahara</span>
                        </div>

                        <div class="footer-sub">
                            <p>Trekify, Green and Cold.</p>
                        </div>
                    </div>

                    <div class="footer-support">
                        <div class="footer-col">
                            <span>Support</span>
                            <a href="#">Equipment</a>
                            <a href="#">Creative</a>
                            <a href="#">Guider</a>
                            <a href="#">IT Support</a>
                            <a href="#">Photographer</a>
                            <a href="#">Rescue</a>
                        </div>

                        <div class="footer-col">
                            <span>Contact</span>
                            <a href="#">Gmail</a>
                            <a href="#">Instagram</a>
                            <a href="#">Whatsapp</a>
                            <a href="#">Facebook</a>
                        </div>

                        <div class="footer-col">
                            <span>Location</span>
                            <p>San Francisko, Trekify HQ, USA.</p>
                            <p>Phoenix, Arizona, St. Burg White 99 7621, USA.</p>
                            <p>Los Angeles, California, St. Billie E 04 102, USA.</p>
                            <p>Osby, Swedia, St. Jinji A 887 2213.</p>
                            <p>Are, Swedia, St. Vistanr A 837 52 99928.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <style>
        /* Animasi fade in */
        .fade-in {
            opacity: 0;
            animation: fadeIn ease-in 1;
            animation-fill-mode: forwards;
            animation-duration: 1s;
            /* Durasi animasi */
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Animasi fade out */
        .fade-out {
            opacity: 1;
            animation: fadeOut ease-out 1;
            animation-fill-mode: forwards;
            animation-duration: 1s;
            /* Durasi animasi */
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>

    <script>
        // Menampilkan alert dengan animasi fade in
        document.querySelector('.success-alert').classList.add('fade-in');

        // Menghilangkan success-alert dengan animasi fade out setelah 5 detik
        setTimeout(function() {
            document.querySelector('.success-alert').classList.remove('fade-in');
            document.querySelector('.success-alert').classList.add('fade-out');
        }, 5000);
    </script>
@endsection
