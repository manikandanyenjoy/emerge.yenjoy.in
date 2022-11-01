@extends('layouts.app')

@section('content')
    <div class="form-parent col-lg-12">
        <div class="row">
            <div class="col-lg-7 p-0">
                <div class="static-details">
                    <h2>Hello Friend</h2>
                    <p>Enter your personal details and start journey with us</p>
                    <img src="images/signin-img.png" alt="Sign Banner">
                </div>
            </div>

            <div class="col-lg-5 p-0">
                <div class="sign-in">
                    @if (isset($data))
                        <h2>Borrower Sigup</h2>
                    @else
                        <h2>Lender Sigup</h2>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" required>
                            <span class="otp-label">A 6-digit OTP will be sent via SMS to validate</span>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group requried password-field">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span class="otp-label">A 8-digit Requried</span>
                            
                                <span class="password-showhide">
                                    <span class="show-password">Show</span>
                                    <span class="hide-password">hide</span></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if (isset($data) && $data == 'borrower')
                            <input type="hidden" value="2" name="register_role">
                        @elseif(isset($data) && $data == 'admin')
                            <input type="hidden" value="3" name="register_role">
                        @else
                            <input type="hidden" value="1" name="register_role">
                        @endif
                        <div class="agree">
                            <p>By clicking the button below, you agree to our
                                <a href="javascript:;" target="_blank">Terms of Use</a>
                                &nbsp;as well as&nbsp;<a href="javascript:;" target="_blank">Fines and Penalties</a>
                            </p>
                        </div>

                        <div class="submit">
                            <input type="submit" id="submitbtn" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
