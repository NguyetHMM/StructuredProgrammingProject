@extends('accountmodule::layouts.master')

@section('content')

    <div class="container" style="margin-top:10%">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 mb-4 mb-md-0">
                <img alt="image" class="img-fluid" src="{{ asset('images/mainimg.jpg') }}">
            </div>
            <div class="col-12 col-md-2 col-lg ml-md-auto text-left">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <section class="fdb-block">
                        <div class="container" style="margin-top: 10%">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg col-md-5 text-center">
                                    <div class="fdb-box fdb-touch">
                                        <div class="row">
                                            <div class="col">
                                                <h1>{{ __('Login') }}</h1>
                                            </div>
                                        </div>
                                        @if (session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif

                                        <div class="row mt-4">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                            <div class="col">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span> @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>
                                            <div class="col">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span> @enderror
                                            </div>
                                        </div>


                                        <div class="row mt-4">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mt-4">
                                            <div class="col-md-8 offset-md-7">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    @endsection
