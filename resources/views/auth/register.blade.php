@extends('layouts.app')

@section('content')
<div id="auth-box" class="container">
    <h1>Black Forge</h1>
    <div id="login-box" class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <h2>{{ __('Register') }}</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="field">
                        <label for="name" class="label">{{ __('Player Name') }}</label>
                        <div class="control">
                            <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <p class="help is-danger" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
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
                        <label class="label" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <div class="control">
                            <input id="password-confirm" type="password" class="input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
                            @error('password_confirmation')
                                <p class="help is-danger" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="button is-link">
                                {{ __('Register') }}
                            </button>

                            <a class="button" href="{{ route('welcome') }}">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
