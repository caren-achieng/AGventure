@extends('layouts.guest')

@section('content')

    <div id="login" class="container">
        <div class="row align-items-center justify-content-center h-100 mt-5">
            <div class="col-auto">
                <div class="row">
                    <div class="col-5">
                        <h1>Start your journey with AGventure</h1>
                        <div class="my-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input placeholder="Enter email address" id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                           autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input placeholder="Enter password" id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password" required
                                           autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary col-12 signinbutton">{{ __('Login') }}</button>
                                </div>
                                <div class="form-group d-flex align-item-center justify-content-between">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link p-0 small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <span>
                                        Don't have an account?
                                        <a class="btn btn-link p-0 " href="{{ route('register') }}">{{ __('Register.') }}</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-7 farmer">
                        <img src="{{asset("images/angry.png")}}" alt="tuma mboga bana">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
