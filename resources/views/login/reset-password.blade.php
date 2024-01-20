@extends('layouts.app')

@section('title', __('messages.auth.reset-password'))
@section('content')
    <x-forms.auth-forms
        title="{{ __('messages.auth.reset-password') }}"
        action="{{ route('login') }}"
    >

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <x-forms.text-input
                    type="email"
                    name="email"
                    autocomplete="email"
                    value="{{ old('email') }}"
                    autofocus="true"
                    :isError="$errors->has('email')"
                />

                @error('email')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <x-forms.text-input
                    type="password"
                    name="password"
                    autocomplete="current-password"
                    :isError="$errors->has('password')"
                />

                @error('password')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">{{ __('messages.auth.password_confirmation') }}</label>

            <div class="col-md-6">
                <x-forms.text-input
                    type="password"
                    name="password_confirmation"
                    :isError="$errors->has('password_confirmation')"
                />

                @error('password_confirmation')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
                @enderror
            </div>
        </div>

        <x-slot:actions>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <x-forms.primary-button type="submit">
                        {{ __('messages.auth.forgot-password.send-link') }}
                    </x-forms.primary-button>
                </div>
            </div>
        </x-slot:actions>
    </x-forms.auth-forms>
@endsection
