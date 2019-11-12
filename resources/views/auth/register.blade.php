@extends('layouts.app')

@section('content')
<div class="container register-container">
    <div class="ui middle aligned grid">
        <div class="column">
            <div class="ui huge header centered login-header">{{ __('Register') }}</div>
            <form method="POST" class="ui form" action="{{ route('register') }}">
                @csrf
                <div class="field required @error('name') error @enderror">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" placeholder="Name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <div class="ui error message"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="field required @error('email') error @enderror">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <div class="ui error message"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="field required @error('password') error @enderror">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" placeholder="Password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <div class="ui error message"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="field required">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button type="submit" class="ui fluid button">{{ __('Register') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
