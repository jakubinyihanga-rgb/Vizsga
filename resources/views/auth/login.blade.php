@extends('layouts.auth')

@section('title','Login')

@section('content')

<style>

body {
    font-family: 'Inter', sans-serif;
    background: #f5f5f7;
    margin: 0;
}


/* =========================
   WRAPPER
========================= */

.login-wrapper {

    min-height: 100vh;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 40px 20px;

    background:
        radial-gradient(
            circle at top right,
            rgba(200,165,91,.10),
            transparent 35%
        ),
        #f5f5f7;
}


/* =========================
   CARD
========================= */

.login-card {

    width: 100%;

    max-width: 470px;

    background: white;

    border-radius: 26px;

    overflow: hidden;

    border: 1px solid #e8e8e8;

    box-shadow:
        0 25px 70px rgba(0,0,0,.12);
}


/* =========================
   HEADER
========================= */

.login-header {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #101112 0%,
            #1d1e21 100%
        );

    padding: 50px 40px 42px;

    text-align: center;
}


.login-header::after {

    content: "";

    position: absolute;

    width: 230px;

    height: 230px;

    border-radius: 50%;

    right: -100px;

    top: -130px;

    background:
        rgba(200,165,91,.14);
}


.login-icon {

    width: 68px;

    height: 68px;

    margin: 0 auto 20px;

    border-radius: 50%;

    display: flex;

    justify-content: center;

    align-items: center;

    border:
        1px solid rgba(200,165,91,.35);

    background:
        rgba(255,255,255,.03);

    color: #c8a55b;

    font-size: 23px;

    position: relative;

    z-index: 2;
}


.login-label {

    color: #c8a55b;

    font-size: 9px;

    letter-spacing: 4px;

    font-weight: 700;

    position: relative;

    z-index: 2;
}


.login-title {

    font-family:
        'Playfair Display',
        serif;

    font-size: 38px;

    font-weight: 700;

    color: white;

    margin:
        8px 0 10px;

    position: relative;

    z-index: 2;
}


.login-title span {
    color: #c8a55b;
}


.login-subtitle {

    color: #999;

    font-size: 13px;

    margin: 0;

    position: relative;

    z-index: 2;
}


/* =========================
   BODY
========================= */

.login-body {

    padding: 38px;
}


/* =========================
   FORM
========================= */

.form-group {

    margin-bottom: 23px;
}


.form-group label {

    color: #444;

    font-size: 12px;

    font-weight: 600;

    margin-bottom: 8px;
}


.input-wrapper {

    position: relative;
}


.input-wrapper i {

    position: absolute;

    left: 17px;

    top: 50%;

    transform: translateY(-50%);

    color: #aaa;

    font-size: 13px;

    z-index: 2;
}


.form-control {

    height: 52px;

    padding:
        0 16px 0 45px;

    border:
        1px solid #ddd;

    border-radius: 12px;

    background: #fafafa;

    font-size: 13px;

    box-shadow: none !important;

    transition: .2s;
}


.form-control:focus {

    background: white;

    border-color: #b89146;

    box-shadow:
        0 0 0 3px rgba(184,145,70,.08) !important;
}


/* =========================
   REMEMBER ME
========================= */

.remember-row {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 26px;
}


.remember-box {

    display: flex;

    align-items: center;

    gap: 8px;
}


.remember-box input {

    accent-color: #b89146;

    width: 15px;

    height: 15px;
}


.remember-box label {

    margin: 0;

    color: #777;

    font-size: 12px;

    cursor: pointer;
}


/* =========================
   LOGIN BUTTON
========================= */

.login-btn {

    width: 100%;

    height: 52px;

    border: none;

    border-radius: 11px;

    background:

        linear-gradient(
            135deg,
            #ae8741,
            #d4b56f
        );

    color: #111;

    font-size: 13px;

    font-weight: 700;

    cursor: pointer;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 12px;

    transition: .25s;
}


.login-btn:hover {

    transform: translateY(-2px);

    box-shadow:
        0 10px 25px rgba(174,135,65,.28);
}


.login-btn i {

    transition:
        transform .2s;
}


.login-btn:hover i {

    transform:
        translateX(4px);
}


/* =========================
   ERROR
========================= */

.invalid-feedback {

    margin-top: 7px;

    color: #b94343;

    font-size: 11px;
}


/* =========================
   BOTTOM
========================= */

.login-footer {

    margin-top: 27px;

    padding-top: 23px;

    border-top:
        1px solid #eeeeee;

    text-align: center;

    color: #aaa;

    font-size: 11px;
}


.login-footer a {

    color: #a57e39;

    font-weight: 600;

    text-decoration: none;
}


/* =========================
   MOBILE
========================= */

@media(max-width: 576px) {

    .login-wrapper {
        padding: 20px 15px;
    }

    .login-header {
        padding: 40px 25px 35px;
    }

    .login-title {
        font-size: 32px;
    }

    .login-body {
        padding: 30px 24px;
    }

}

</style>


<div class="login-wrapper">

    <div class="login-card">


        {{-- HEADER --}}
        <div class="login-header">

            <div class="login-icon">
                <i class="fa-solid fa-user"></i>
            </div>

            <span class="login-label">
                WELCOME BACK
            </span>

            <h1 class="login-title">
                Account <span>Login</span>
            </h1>

            <p class="login-subtitle">
                Sign in to continue to your account.
            </p>

        </div>



        {{-- BODY --}}
        <div class="login-body">

            <form
                method="POST"
                action="{{ route('login') }}"
            >

                @csrf


                {{-- EMAIL --}}
                <div class="form-group">

                    <label for="email">
                        E-Mail Address
                    </label>

                    <div class="input-wrapper">

                        <i class="fa-regular fa-envelope"></i>

                        <input
                            id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your e-mail"
                            required
                            autocomplete="email"
                            autofocus
                        >

                    </div>


                    @error('email')

                        <span class="invalid-feedback d-block">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                {{-- PASSWORD --}}
                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <div class="input-wrapper">

                        <i class="fa-solid fa-lock"></i>

                        <input
                            id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                        >

                    </div>


                    @error('password')

                        <span class="invalid-feedback d-block">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                {{-- REMEMBER --}}
                <div class="remember-row">

                    <div class="remember-box">

                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}
                        >

                        <label for="remember">
                            Remember me
                        </label>

                    </div>


                    @if(Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            style="
                                color:#a57e39;
                                font-size:12px;
                                font-weight:600;
                                text-decoration:none;
                            "
                        >
                            Forgot password?
                        </a>

                    @endif

                </div>



                {{-- BUTTON --}}
                <button
                    type="submit"
                    class="login-btn"
                >

                    Sign In

                    <i class="fa-solid fa-arrow-right"></i>

                </button>


            </form>



            <div class="login-footer">

                <a href="{{ url('/') }}">
                    <i class="fa-solid fa-arrow-left mr-1"></i>
                    Back to Webshop
                </a>

            </div>

        </div>

    </div>

</div>

@endsection