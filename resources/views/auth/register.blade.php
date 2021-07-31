@extends('layouts.master')

@section('content')

    <div id="register">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-5 pb-5">
                <div class="card my-5">
                    <div class="card-header text-center text-white"><h4>{{ __('😃 JOIN AGVENTURE TODAY 😃') }}</h4></div>
                    <div class="card-body text-light ">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> {{ $errors->first() }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="name" class="col-form-label text-md-right">{{ __('First Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                <div class="col">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Last Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">I want to register as a:</label><br>
                                <select class="form-select" name="is_admin" required>
                                    <option selected value="0">Client</option>
                                    <option value="1">Farmer</option>
                                </select>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="password" class="col-form-label text-md-right">{{ __('Create Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">
                                </div>
                                <div class="col">
                                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                           autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row mb-0 justify-content-center">
                                <div class="col-12 text-center ">
                                    <button type="submit" class="btn btn-primary registerbutton px-5 mb-3">
                                        {{ __('Register') }}
                                    </button>
                                    <p class="small">Already have an account? <a class="link-light fw-bold" href="{{route('login')}}">Log In</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
