@extends('frontend.layouts.web')

@section('content')
<section id="login_page" class="section">
    <form action="{{ route('user.signin.store') }}" method="POST">
        @csrf
        <div class="login_body__logo">
            <img src="{{ asset('assets/frontend/img/xoss_games_popup-logo.png') }}" alt="" />
        </div>
        <div class="login_body__contant" id="wAuto">
            <span class="signin__title">Sign In with your Gp number</span>
        </div>
        <div class="login_body__inputs">
            <div>
                <label for="number">Phone Number</label>
                
                <input type="number" placeholder="Phone Number" name="phone_num" />
                {{-- <span class="text-danger">*must be a Grammen Phone Number</span> --}}
                @error('phone_num')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="passwordField">Password</label>
                <div class="inputBox">
                    <input type="password" placeholder="Password"  id="password" name="password">
                      <i class="fas fa-eye-slash toggle-password" data-target="#password"></i>
                </div>

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <button type="submit">Sign In</button>
                <div class="account_policy"><span>Don't have an account?</span><a href="{{ route('user.sign_up') }}">SignUp</a>
                </div>
                <div class="forget_password text-center"><a href="{{route('verify_number')}}">Forgot password?</a>
                </div>
                
            </div>
        </div>
    </form>
</section>
@endsection
