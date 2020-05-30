@extends('layouts.app')

@section('content')
<div id="auth-box" class="container">
    <h1 class="u-center">Black Forge</h1>
    <div id="login-box" class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <h2>{{ __('Login') }}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <p class="help is-danger" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="password">{{ __('Password') }}</label>
                        <div class="control">
                            <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                            @error('password')
                                <p class="help is-danger" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">    
                            <label class="checkbox" for="remember">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-link">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="button" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            Or <a href="{{ route('register') }}">Register</a> for an account to start playing!
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection