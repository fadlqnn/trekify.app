@extends('template.template')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-3 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Verifikasi Email Anda
                    </h1>
                    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        Kami baru saja mengirimkan 6 digit angka unik untuk Verifikasi Email anda. INGAT! jangan bagikan
                        kode unik ini kepada siapapun termasuk tim kami. Kode verifikasi hanya akan tersedia 6 Menit dari
                        sekarang.</p>

                    <form class="max-w-sm mx-auto" action="{{ route('register.verification') }}" method="POST">
                        @csrf
                        <div class="flex justify-center my-4 mt-10 space-x-3 rtl:space-x">
                            <div>
                                <label for="code-1" class="sr-only">First code</label>
                                <input type="text" maxlength="1" data-focus-input-init data-focus-input-next="code-2"
                                    id="code-1" autofocus name="verification_code1"
                                    class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required />
                            </div>
                            <div>
                                <label for="code-2" class="sr-only">Second code</label>
                                <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-1"
                                    data-focus-input-next="code-3" id="code-2" autofocus name="verification_code2"
                                    class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required />
                            </div>
                            <div>
                                <label for="code-3" class="sr-only">Third code</label>
                                <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-2"
                                    data-focus-input-next="code-4" id="code-3" autofocus name="verification_code3"
                                    class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required />
                            </div>
                            <div>
                                <label for="code-4" class="sr-only">Fourth code</label>
                                <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-3"
                                    data-focus-input-next="code-5" id="code-4" autofocus name="verification_code4"
                                    class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required />
                            </div>
                            <div>
                                <label for="code-5" class="sr-only">Fifth code</label>
                                <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-4"
                                    data-focus-input-next="code-6" id="code-5" autofocus name="verification_code5"
                                    class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required />
                            </div>
                            <div>
                                <label for="code-6" class="sr-only">Sixth code</label>
                                <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-5"
                                    id="code-6" autofocus name="verification_code6"
                                    class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required />
                            </div>
                            <div class="flex pb-2">
                                <button type="submit"
                                    class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    <span class="sr-only">Icon description</span>
                                </button>
                            </div>

                        </div>
                        <p id="helper-text-explanation"
                            class="mt-2 text-sm text-gray-500 dark:text-gray-400 flex justify-center">Please
                            introduce
                            the 6 digit code we sent via email.</p>

                        @if (session('success'))
                            <p id="helper-text-explanation"
                                class="mt-2 text-sm text-green-500 dark:text-green-400 flex justify-center">
                                {{ session('success') }}</p>
                        @endif

                        @if (session('error'))
                            <p id="helper-text-explanation"
                                class="mt-2 text-sm text-red-500 dark:text-red-400 flex justify-center">
                                {{ session('error') }}</p>
                        @endif

                    </form>
                    <form action="{{ route('register.resend') }}" method="POST" id="resendForm">
                        @csrf
                        <div class="flex">
                            <button type="submit" id="resendButton"
                                class="mt-5 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Resend
                                Code (10s)</button>
                    </form>

                    <button type=""
                        class="mt-5 w-full text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Change
                        Email</button>
                </div>

            </div>
        </div>
        </div>

    </section>

    <style>
        #resendButton[disabled] {
            cursor: not-allowed;
            /* Mengubah kursor saat tombol dinonaktifkan */
        }
    </style>

    <script>
        function focusNextInput(el, prevId, nextId) {
            if (el.value.length === 0) {
                if (prevId) {
                    document.getElementById(prevId).focus();
                }
            } else {
                if (nextId) {
                    document.getElementById(nextId).focus();
                }
            }
        }

        document.querySelectorAll('[data-focus-input-init]').forEach(function(element) {
            element.addEventListener('keyup', function() {
                const prevId = this.getAttribute('data-focus-input-prev');
                const nextId = this.getAttribute('data-focus-input-next');
                focusNextInput(this, prevId, nextId);
            });
        });

        let initialCountdown = 10; // Waktu dalam detik
        let theCountdown = 300; // Waktu dalam detik
        let countdown = initialCountdown; // Waktu dalam detik
        const button = document.getElementById('resendButton');
        const form = document.getElementById('resendForm');
        let countdownInterval;
        let clickCount = 0;
        let refreshing = false;

        function startInitialCountdown() {
            button.disabled = true; // Menonaktifkan tombol saat initialCountdown dimulai
            clearInterval(countdownInterval);
            countdownInterval = setInterval(function() {
                countdown--;
                button.innerText = `Resend Code (${countdown}s)`;
                if (countdown <= 0) {
                    clearInterval(countdownInterval); // Menghentikan initialCountdown jika sudah 0
                    button.disabled = false; // Mengaktifkan tombol kembali
                    button.innerText = 'Resend Code';
                }
            }, 1000); // Interval dalam milidetik (1000ms = 1 detik)
        }

        // Memulai initialCountdown saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function(event) {
            startInitialCountdown();
        });

        // Event listener untuk mengatur ulang initialCountdown saat tombol diklik
        button.addEventListener('click', function() {
            if (!button.disabled) {
                event.preventDefault();
                clickCount++;
                countdown = clickCount > 0 ? theCountdown : 0; // Setel ulang countdown ke 60 detik
                startCountdownAfterLoad();
                refreshing = true;

                setTimeout(function() {
                    form.submit();
                }, 10);
            }
        });

        function startCountdownAfterLoad() {
            window.addEventListener('load', function(){
                refreshing = false;
                if(clickCount > 0) {
                    startCountdown();
                }
            });
        }

        function startCountdown() {
            clearInterval(countdownInterval);
            countdownInterval = setInterval(function() {
                theCountdown--;
                let minutes = Math.floor(theCountdown / 60);
                let seconds = theCountdown % 60;
                seconds = seconds < 300 ? '0' + seconds : seconds;
                button.innerText = `Resend Code (${minutes}m ${seconds}s)`;
                if (theCountdown <= 0) {
                    clearInterval(countdownInterval); // Menghentikan countdown jika sudah 0
                    button.disabled = false; // Mengaktifkan tombol kembali setelah countdown selesai
                    button.innerText = 'Resend Code';
                }
            }, 1000);
        }
    </script>
@endsection
