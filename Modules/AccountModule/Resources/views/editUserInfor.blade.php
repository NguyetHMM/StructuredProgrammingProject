@extends('accountmodule::layouts.logined')

@section('content')
    <div class="container" style="margin-top:10%">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 mb-4 mb-md-0">
                <img alt="image" class="img-fluid" src="{{ asset('images/mainimg.jpg') }}">
            </div>
            <div class="col-12 col-md-2 col-lg ml-md-auto text-left">
                <form method="POST" action="{{ route('editUserInfor') }}">
                    @csrf
                    <section class="fdb-block">
                        <div class="container" style="margin-top: 10%">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg text-center">
                                    <div class="fdb-box fdb-touch">
                                        <div class="row">
                                            <div class="col">
                                                <h1>{{ __('Customer Details') }}</h1>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>
                                            <div class="col">
                                                <input id="" type="text" class="form-control" name="name" required
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-left">{{ Auth::user()->email }}</label>
                                        </div>
                                        <div class="row mt-4">
                                            <label for="phonenumber"
                                                class="col-md-4 col-form-label text-md-left">{{ __('Phone Number') }}</label>
                                            <div class="col">
                                                <input id="" type="text" class="form-control" name="phonenumber"
                                                    value="{{ Auth::user()->phonenumber }}">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <label for="datofbirth"
                                                class="col-md-4 col-form-label text-md-left">{{ __('Date Of Birth') }}</label>
                                            <div class="col">
                                                <input id="" type="date" class="form-control" name="dateofbirth"
                                                    value="{{ Auth::user()->dateofbirth }}">
                                                {{ Auth::user()->dateofbirth }}
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Save') }}
                                                </button>
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
