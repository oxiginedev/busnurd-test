@extends('layouts.auth')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="grid gap-6">
            <div class="grid gap-2">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input
                    id="name"
                    class="block w-full"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                />
            </div>

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
            </div>

            <div class="grid gap-2">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input
                    id="password"
                    class="block w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </div>
    </form>
@endsection
