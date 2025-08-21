@extends('layouts.auth')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="grid gap-6">
            <div class="grid gap-2">
                <x-label for="email" value="{{ __('Email address') }}" />
                <x-input
                    id="email"
                    class="block w-full"
                    type="email"
                    inputmode="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="email"
                />
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid gap-2">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input
                    id="password"
                    class="block w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Don\'t have an account') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Log In') }}
                </x-button>
            </div>
        </div>
    </form>
@endsection
