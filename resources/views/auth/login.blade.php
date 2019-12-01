@extends('layouts.app')

@section('content')
    <div class="container login-container">
        <div class="ui middle aligned grid login">
            <div class="column">
                <div class="ui huge header centered login__header">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}" class="ui form">
                    @csrf
                    <div class="field required @error('email') error @enderror">
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <div class="ui error message"><strong>{{ $message }}</strong></div>
                        @enderror
                    </div>
                    <div class="field required @error('password') error @enderror">
                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <div class="ui error message"><strong>{{ $message }}</strong></div>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input class="hidden" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                    </div>
                    <button type="submit" class="ui fluid button">{{ __('Login') }}</button>
                </form>
                <div class="login__register-link">
                    <span>Do not have an account?</span>
                    <a class="btn btn-link" href="{{ route('register') }}">{{ __('Register Now') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
