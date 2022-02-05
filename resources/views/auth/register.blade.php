@extends('layouts.app')

@section('content')

    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Register</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="name">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" @error('name') border-red-500
                        @enderror
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('name')
                        <div class='text-red-500 text-sm mt-2'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Username</label>
                    <input id="username" name="username" type="text" value="{{ old('name') }}" @error('name')
                        border-red-500 @enderror
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('username')
                        <div class='text-red-500 text-sm mt-2'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email Address</label>
                    <input id="email" name="email" type="email" value="{{ old('username') }}" @error('email')
                        border-red-500 @enderror
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('email')
                        <div class='text-red-500 text-sm mt-2'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                    <input id="password" name="password" type="password"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <p id="passwordHelpBlock" class=" italic text-xs text-gray-600">
                            Your password must be more than 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase,
                            1 Numeric and 1 special character.
                        </p>
                        @error('password')
                        <div class='text-red-500 text-sm mt-2'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password_confirmation">Password Confirmation</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">

                    
                    @error('password')
                        <div class='text-red-500 text-sm mt-2'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" name="register"
                    class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Register</button>
            </div>
        </form>
    </section>
@endsection
