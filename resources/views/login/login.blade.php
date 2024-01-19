@extends('layouts.app')

@section('title', __('messages.auth'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <x-forms.primary-button type="submit">
                                    {{ __('Login') }}
                                </x-forms.primary-button>
                                <x-forms.primary-button>
                                    {{ __('messages.auth.github') }}
                                </x-forms.primary-button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
