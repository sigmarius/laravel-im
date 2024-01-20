@extends('layouts.app')

@section('title', __('messages.forgot-password'))
@section('content')
    <x-forms.auth-forms
        title="{{ __('messages.forgot-password') }}"
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
