@extends('layouts.auth')

@section('content')
<form method="POST" action="">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">{{ ('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">{{ ('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Login
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ ('Forgot Your Password?') }}
            </a>
        @endif
    </div>
</form>
<div class="d-flex justify-content-between">
    <a href="/">&laquo; landing</a>
    <a href="/register">Register?</a>
</div>
@endsection
