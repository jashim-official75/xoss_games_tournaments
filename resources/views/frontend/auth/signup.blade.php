@extends('frontend.layouts.web')

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
                    <input type="password" placeholder="Password"  id="password" name="password">
                      <i class="fas fa-eye-slash toggle-password" data-target="#password"></i>
                </div>

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <label for="password_confirmation">Confirm Password</label>
                <div class="inputBox">
                    <input type="password" placeholder="Confirm Password"  id="c_password" name="password_confirmation">
                      <i class="fas fa-eye-slash toggle-password" data-target="#c_password"></i>
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
