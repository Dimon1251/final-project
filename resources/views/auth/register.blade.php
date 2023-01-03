@extends('user.parts.layout')

@section('title')
    Register
@endsection

@section('content')

    <!-- signup__area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Full Name</h5>
                                    <div class="sign__input">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Work email</h5>
                                    <div class="sign__input">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Password</h5>
                                    <div class="sign__input">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <i class="fal fa-lock"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>Re-Password</h5>
                                    <div class="sign__input">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <i class="fal fa-lock"></i>
                                    </div>
                                </div>
                                <div class="sign__action d-flex justify-content-between mb-30">
                                    <div class="sign__agree d-flex align-items-center">
                                        <input class="m-check-input" type="checkbox" id="m-agree">
                                        <label class="m-check-label" for="m-agree">I agree to the <a href="#">Terms &amp; Conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <div class="sign__new text-center mt-20">
                                    <p>Already register? <a href="{{ route('login') }}"> Sign In</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup__area end -->

@endsection
