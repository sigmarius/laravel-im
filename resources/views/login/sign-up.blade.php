@extends('layouts.app')

@section('title', __('messages.auth.sign-up'))

@section('content')
    <x-forms.auth-forms
        title="{{ __('messages.auth.sign-up') }}"
        action="{{ route('login') }}"
    >
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('messages.auth.name') }}</label>

            <div class="col-md-6">
                <x-forms.text-input
                    name="name"
                    autocomplete="name"
                    value="{{ old('name') }}"
                    autofocus="true"
                    :isError="$errors->has('name')"
                />

                @error('name')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <x-forms.text-input
                    type="email"
                    name="email"
                    autocomplete="email"
                    value="{{ old('email') }}"
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

        <x-slot:rememberMe>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
        </x-slot:rememberMe>

        <x-slot:actions>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <x-forms.primary-button type="submit">
                        {{ __('messages.auth.sign-up.action') }}
                    </x-forms.primary-button>

                    <x-forms.primary-button>
                        {{ __('messages.auth.github') }}
                    </x-forms.primary-button>
                </div>
            </div>
        </x-slot:actions>
    </x-forms.auth-forms>
@endsection
