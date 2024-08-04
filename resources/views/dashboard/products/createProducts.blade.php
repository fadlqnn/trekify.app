@extends('template.template')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">

        <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-3 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create Product
                    </h1>
                    <form class="max-w-xl mx-auto" action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <label for="nameProduct-address-icon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Product</label>
                        <div class="flex mb-5">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </span>
                            <input type="text" name="nameProduct" id="website-admin"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Kismis Jawa" value="{{ old('nameProduct') }}">

                            @error('nameProduct')
                                <div class="error mb-3">
                                    <p class="text-red-600">
                                        {{ $message }}
                                    </p>
                                </div>
                            @enderror
                        </div>

                        <label for="website-admin"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <div class="flex mb-5">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H7a1 1 0 0 1-1-1v-7c0-.6.4-1 1-1Z" />
                                </svg>
                            </span>
                            <input type="password" name="password" id="website-admin"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="*******">
                        </div>

                        @error('password')
                            <div class="error mb-3">
                                <p class="text-red-600">
                                    {{ $message }}
                                </p>
                            </div>
                        @enderror

                        <label for="website-admin"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                            Confirmation</label>
                        <div class="flex mb-5">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </span>
                            <input type="password" name="password_confirmation" id="website-admin"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="*******">

                            @error('password_confirmation')
                                <div class="error mb-3">
                                    <p class="text-red-600">
                                        {{ $message }}
                                    </p>
                                </div>
                            @enderror
                        </div>

                        <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 border-0 rounded md:mt-10 dark:bg-gray-700">

                        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                            Name</label></td>

                        <div class="flex  mb-5 ">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                </svg>
                            </span>
                            <input type="text" name="name" id="website-admin"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Bonnie Green" value="{{ old('name') }}">

                            @error('name')
                                <div class="error mb-3">
                                    <p class="text-red-600">
                                        {{ $message }}
                                    </p>
                                </div>
                            @enderror
                        </div>

                        <input type="hidden" name="role_id" value="1">

                        <table class="flex-col w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                            <tr>
                                <td>
                                    <label for="website-admin"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number
                                        Phone</label>
                                </td>

                                <td>
                                    <label for="website-admin"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                </td>
                            </tr>

                            <tr>
                                <td class="flex-initial w-60 pr-3">
                                    <input type="number" name="number_phone" id="website-admin"
                                        class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block min-w-0 w-full text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5"
                                        placeholder="08xxxxx" value="{{ old('number_phone') }}">

                                </td>

                                <td class="flex-initial w-60">
                                    <select id="countries" name="country"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5">

                                        <option value="">Select Country</option>
                                    </select>
                            </tr>

                            <tr>
                                <td>
                                    @error('number_phone')
                                        <div class="error mb-3">
                                            <p class="text-red-600">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </td>

                                <td>
                                    @error('country')
                                        <div class="error mb-3">
                                            <p class="text-red-600">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="website-admin"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                                </td>

                                <td>
                                    <label for="website-admin"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                </td>
                            </tr>

                            <tr>
                                <td class="flex-initial w-60 pr-3">
                                    <input type="number" name="age" id="website-admin"
                                        class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block min-w-0 w-full text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5"
                                        placeholder="41" value="{{ old('age') }}">
                                </td>

                                <td class="flex-initial w-60">
                                    <select id="gender" name="gender"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5">

                                        <option value="">Select Gender</option>
                                        <option value="Men">Men</option>
                                        <option value="Woman">Woman</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    @error('age')
                                        <div class="error mb-3">
                                            <p class="text-red-600">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </td>

                                <td>
                                    @error('gender')
                                        <div class="error mb-3">
                                            <p class="text-red-600">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                        </table>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                            an account</button>
                    </form>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="{{ route('login.index') }}"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
                </div>
            </div>
        </div>

    </section>


    <script>
        fetch('https://restcountries.com/v3.1/all')
            .then(response => response.json())
            .then(data => {
                data.sort((a, b) => a.name.common.localeCompare(b.name.common));

                const countries = document.getElementById('countries');
                data.forEach(country => {
                    const option = document.createElement('option');
                    option.text = country.name.common;
                    option.value = country.name.common;
                    countries.add(option);
                });
            })
            .catch(error => {
                console.error('Error Fetching Data:', error);
            })
    </script>
@endsection
