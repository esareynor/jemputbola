@extends('layouts.auth')
@section('content')
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    {{-- <h1 class="auth-title">Jemput Bola</h1> --}}
                </div>
                <h1 class="auth-title">Log in</h1>
                <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl @error('email') is-invalid @enderror"
                            placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl @error('password') is-invalid @enderror"
                            placeholder="Password" name="password" required autocomplete="current-password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg ">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                            class="font-bold">Register</a></p>
                    {{-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a></p> --}}
                </div>
                <hr class="mt-5">
                <div class="text-center">
                    <span class="auth-subtitle">Kecamatan Semampir</span>
                    <br />
                    <span class="auth-subtitle ">Kota Surabaya</span>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
@endsection
