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
                    @if (isset($data) && $data == 'borrower')
                        <h2>{{ __('Borrowers Login') }}</h2>
                    @elseif(isset($data) && $data == 'admin')
                        <h2>{{ __('Admin Login') }}</h2>
                    @else
                        <h2>{{ __('Lenders Login') }}</h2>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="user">
                                Email
                            </label>
                            <input id="email" type="email" required
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if ((isset($data) && $data != 'admin') || !isset($data))
                            <div class="form-group">
                                <label for="user">
                                    Mobile Number
                                </label>
                                <input type="text" name="mobilenumber" required id="number" class="form-control">

                            </div>
                        @endif
                        <div class="form-group">
                            <label for="password">
                                Password
                            </label>
                            <div class="password-field">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <span class="password-showhide">
                                    <span class="show-password">Show</span>
                                    <span class="hide-password">hide</span>
                                </span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group forgot-link">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="submit">
                            <input type="submit" id="submitbtn" value="Login" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
