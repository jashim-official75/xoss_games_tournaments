@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | Sign UP and Verify Phone Number">
    <meta property="og:description" content="Tournamnet | Sign UP and Verify Phone Number">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournamnet | Sign UP and Verify Phone Number" />
    <meta name="description" content="Tournamnet | Sign UP and Verify Phone Number" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournamnet | Verify Phone Number</title>
@endsection
@section('content')
    <section id="login_page" id="login">
        <form action="{{ route('user.signup.verify_check') }}" method="POST">
            @csrf
            <div class="login_body__logo">
                <img src="{{ asset('assets/frontend/img/xoss_games_popup-logo.png') }}" alt="" />
            </div>
            <div class="login_body__contant" id="wAuto">
                <span class="signin__title">Check Your Text Message, We've already sent you the OTP code on your phone
                    number</span>
            </div>
            <div class="login_body__inputs">
                <div>
                    @php
                        if (session()->get('verify_sub_id')) {
                            $sub_id = session()->get('verify_sub_id');
                        }
                    @endphp
                    <label for="otp">OTP</label>
                    @if ($sub_id)
                        <input type="hidden" name="sub_id" value="{{ $sub_id }}">
                    @endif
                    <input type="text" name="otp" placeholder="Enter Your OTP" />
                    @error('otp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </section>
@endsection
