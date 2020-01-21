@extends('layouts.app')

@section('content')
<main class="main-body py-4" uk-height-viewport>
    <div class="uk-position-center" uk-grid>
        <div class="uk-width-1-1 p-0">
            <div class="uk-card uk-card-secondary uk-card-body  uk-dark register-card">
                <h1 class="uk-card-title uk-text-center">{{ __('Register') }}</h1>
                <div class="uk-card-body px-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div uk-grid>
                            <label for="name" class="uk-width-1-4@m uk-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="uk-width-3-4@m">
                                <input id="name" type="text" class="uk-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div uk-grid>
                            <label for="email" class="uk-width-1-4@m uk-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="uk-width-3-4@m">
                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div uk-grid>
                            <label for="password" class="uk-width-1-4@m uk-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="uk-width-3-4@m">
                                <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div uk-grid>
                            <label for="password-confirm" class="uk-width-1-4@m uk-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="uk-width-3-4@m">
                                <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0" uk-grid>
                            <label class="uk-width-1-4@m"></label>
                            <div class="uk-width-3-4@m uk-width-offset-1-4@m">
                                <button type="submit" class="uk-button uk-button-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
