@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="ui middle aligned grid">
            <div class="column">
                <div class="ui huge header centered login-header">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}" class="ui form">
                    @csrf
                    <div class="field">
                        <label for="email"></label>
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="password"></label>
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <div class="ui error message">
                            <strong>{{ $message }}</strong>
                        </div>
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
                    {{--<div class="form-group row mb-0">--}}
                    {{--<div class="col-md-8 offset-md-4">--}}
                    {{--@if (Route::has('password.request'))--}}
                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                    {{--{{ __('Forgot Your Password?') }}--}}
                    {{--</a>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </form>
            </div>
        </div>
    </div>
@endsection
