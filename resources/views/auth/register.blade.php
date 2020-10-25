@extends('layouts.app')

@section('content')
<div class="mx-auto container flex items-center">
    <div class="w-full pt-2 -p-4">
        <div class="mx-auto md:p-8 md:w-1/2">
            <div class="bg-white shadow-2xl rounded px-8 pt-4 pb-1 mb-3">
                <div class="uppercase justify-center flex font-semibold text-green-500">{{ __('Register') }}</div>

                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-8">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>

                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="name" type="text" class="block pr-10 shadow-md appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <div class="flex items-center bg-red-500 text-white text-sm rounded font-bold px-2 py-1" role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>

                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="email" type="email" class="block pr-10 shadow-md appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <div class="flex items-center bg-red-500 text-white text-sm rounded font-bold px-2 py-1" role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>

                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="password" type="password" class="block pr-10 shadow-md appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <div class="flex items-center bg-red-500 text-white text-sm rounded font-bold px-2 py-1" role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>

                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="password-confirm" type="password" class="block pr-10 shadow-md appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="city" class="block text-gray-700 text-sm font-bold mb-2">{{ __('City') }}</label>

                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="city" type="city" class="block pr-10 shadow-md appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out" name="city" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="contact" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Contact') }}</label>

                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="contact" type="contact" class="block pr-10 shadow-md appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out" name="contact" required autocomplete="contact">
                            </div>
                        </div>

                        <div class="mb-4 text-center">
                            <button class="transition duration-500 bg-green-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
