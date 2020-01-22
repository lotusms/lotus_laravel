@extends('layouts.app')

@section('content')
<main class="main-body p-4" uk-height-viewport>
    <div class="uk-position-center" style="margin: 0 auto" uk-grid>
        <div class="uk-width-1-1 p-0">
            <div class="uk-card uk-card-secondary uk-card-body  uk-dark login-card">
                <h1 class="uk-card-title uk-text-center">{{ __('Login') }}</h1>

                <div class="uk-card-body px-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div uk-grid>
                            <label for="email" class="uk-width-1-4@m uk-form-label uk-text-right@m">{{ __('E-Mail Address:') }}</label>

                            <div class="uk-width-3-4@m">
                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div uk-grid>
                            <label for="password" class="uk-width-1-4@m uk-form-label uk-text-right@m">{{ __('Password:') }}</label>

                            <div class="uk-width-3-4@m">
                                <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div uk-grid>
                            <label class="uk-width-1-4@m"></label>
                            <div class="uk-width-3-4@m">
                                <input class="uk-checkbox mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="uk-form-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-0" uk-grid>
                            <label class="uk-width-1-4@m"></label>
                            <div class="uk-width-3-4@m">
                                <div uk-grid>
                                    <div class="uk-width-1-2@m">
                                        <button type="submit" class="uk-button uk-button-primary mr-2">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="uk-width-1-2@m">
                                        @if (Route::has('password.request'))
                                            <a class="uk-button uk-button-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
