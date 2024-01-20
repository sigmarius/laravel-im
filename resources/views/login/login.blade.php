@extends('layouts.app')

@section('title', __('messages.auth'))
@section('content')
    <x-forms.auth-forms
        title="{{ __('messages.auth') }}"
        action="{{ route('auth.signIn') }}"
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
                        {{ __('Login') }}
                    </x-forms.primary-button>

                    <x-forms.primary-button>
                        {{ __('messages.auth.github') }}
                    </x-forms.primary-button>

                    <x-forms.forgot-password />
                </div>
            </div>
        </x-slot:actions>
    </x-forms.auth-forms>
@endsection
