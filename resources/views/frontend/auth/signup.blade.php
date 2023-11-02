@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | Signup">
    <meta property="og:description" content="Tournamnet | Signup">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournamnet | Signup" />
    <meta name="description" content="Tournamnet | Signup" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournamnet | Signup</title>
@endsection
@section('content')
    <section id="login_page" id="login">
        <form action="{{ route('user.signup.store') }}" method="POST">
            @csrf
            <div class="login_body__logo">
                <img src="{{ asset('assets/frontend/img/xoss_games_popup-logo.png') }}" alt="" />
            </div>
            <div class="login_body__contant" id="wAuto">
                <span class="signin__title">Sign Up in with your Gp number</span>
            </div>
            <div class="login_body__inputs">
                <div>
                    <label for="number">GP Number</label>
                    <input type="number" placeholder="Grameenphone Number" name="phone_num" />
                    @error('phone_num')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <label for="password">Password</label>
                    <div class="inputBox">
                        <input type="password" placeholder="Password" id="password" name="password">
                        <i class="fas fa-eye-slash toggle-password" data-target="#password"></i>
                    </div>

                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <label for="password_confirmation">Confirm Password</label>
                    <div class="inputBox">
                        <input type="password" placeholder="Confirm Password" id="c_password" name="password_confirmation">
                        <i class="fas fa-eye-slash toggle-password" data-target="#c_password"></i>
                    </div>

                    <label for="refer_code">Refer Code</label>
                    <div class="inputBox">
                        <input type="text" placeholder="Enter Referr Code" {{ $referr_code ? 'readonly' : '' }}
                            name="refer_code" value="{{ $referr_code }}" />
                    </div>

                    <button type="submit">Sign Up</button>
                    <div class="account_policy">
                        <span>Already have an account?</span><a href="{{ route('user.sign_in') }}">SignIn</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
