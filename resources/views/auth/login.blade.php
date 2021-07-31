@extends('layouts.guest')

@section('content')

    <div id="login">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="card col-auto">
                <div class="card-header text-center text-white"><h4>{{ __('🙆🏽 Start your journey with AGventure 🙆🏽') }}</h4></div>
                <div class="card-body row text-light">
                    <div class="col-5">
                        <div class="my-5">
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                                    <strong>Oops!</strong> {{ $errors->first() }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Email address') }}</label>
                                    <input placeholder="Enter email address" id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                           autocomplete="email" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input placeholder="Enter password" id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password" required
                                           autocomplete="current-password">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary col-12 signinbutton mb-3">{{ __('Login') }}</button>
                                    @if (Route::has('password.request'))
                                        <a class="link-light p-0 small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>&nbsp;&nbsp;
                                    @endif
                                    <span>
                                        <small>Don't have an account?</small>
                                        <a class="link-light p-0 small fw-bold" href="{{ route('register') }}">{{ __('Register.') }}</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <img src="{{asset("images/angry.png")}}" class="img-fluid w-100" alt="tuma mboga bana">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
