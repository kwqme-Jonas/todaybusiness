@extends('layouts.app')

@section('content')
<div class="mx-auto container flex items-center">
    <div class="w-full pt-2 p-4 ">
        <div class="mx-auto md:p-8 md:w-1/2">
            <div class="bg-white shadow-2xl rounded px-8 pt-6 pb-1 mb-4">
                <div class="uppercase justify-center flex font-semibold text-green-500">{{ __('Login') }}</div>

                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-8">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail') }}</label>

                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="email" type="email" class="block pr-10 shadow appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="block pr-10 shadow appearance-none border-2 border-green-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-green-500 transition duration-500 ease-in-out @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <div class="flex items-center bg-red-500 text-white text-sm rounded font-bold px-2 py-1" role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <input class=" sm:ml-4 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-sm font-semibold text-gray-600" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div>
                                    @if (Route::has('password.request'))
                                    <a class="font-bold text-sm text-green-500 hover:text-teal-700" href="{{ route('password.request') }}">
                                        forgot password
                                    </a>
                                 @endif
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 text-center">
                            <button class="transition duration-500 bg-green-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Login
                            </button>
                        </div>
                        <hr>
                        <div class="mt-8">
                            <p class="text-sm items-center">
                                Don't have an account yet?
                                <a class="font-bold text-sm text-green-500 hover:text-teal-700" href="/register">
                                    Create an account
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
