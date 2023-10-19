@extends('frontend.layouts.web')
@section('content')
<!-- about us content section start -->
<section id="forgot_password">
    <div class="container">
        <div class="verify_number">
           <div class="forgotpass_form">
            <h2>Reset Password?</h2>
           <p class="text-center">To reset your password,Create your new password</p> 
           
           <form action="{{route('new.password.store')}}" method="POST">
            <input type="hidden" name="otp" value="{{$otp}}">
            @csrf
           
            <div class="inputBx">
                <input type="password" name="password" id="password" placeholder="New Password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="inputBx">
                <input type="password" name="password_confirmation" id="c_password" placeholder="Retype Password" class="mt-3">
            @error('password_confirmation')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <button type="submit">Submit</button>
           </form>
           </div>
        </div>
    </div>
</section>
<!-- about us content section end -->

@endsection