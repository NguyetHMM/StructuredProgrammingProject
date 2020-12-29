<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 40%">

        <div class="modal-content" style="padding: 0 5%">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Register">CUSTOMER REGISTER</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" id="name_modal" placeholder="name"
                            class="form-control @error('name') is-invalid @enderror" name="name" required
                            autocomplete="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" id="email_modal" placeholder="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" id="password_modal" placeholder="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password"> @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_modal" placeholder="confirm password"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <p class="text-center">
                        <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Register</button>
                    </p>

                </form>

                <p class="text-center text-muted">Already have a account?</p>
                <p class="text-center text-muted"><a href="customer-register.html"><strong>Login</strong></a></p>

            </div>
        </div>
    </div>
</div>
