@extends('layouts.master')

@section('content')

    <div id="register">
        <div class="row justify-content-center">
            <div class="col-5 pb-5">
                <div class="card my-5">
                    <div class="card-header text-center text-white"><h4>{{ __('Register') }}</h4></div>

                    <div class="card-body text-light">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>


                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="option">Option</label>
                                <select name="option" id="option" class="form-control">
                                    <option selected hidden value="" >Select user type.</option>
                                    <option value="Farmer">Farmer</option>
                                    <option value="Client">Client</option>
                                </select>
                            </div>

                            <div id="location" style="display:none;" class="form-group mb-3">
                                <label for="location" class="col-form-label text-md-right">{{ __('Location') }}</label>


                                    <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>


                            <div class="form-group mb-3">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>


                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

$('#option').on('change', function(){
    if($(this).val()==='Farmer')
    {
        $('#location').show(500)

    }
    else{
        $('#location').hide(500)
    }
})
</script>
@endsection
