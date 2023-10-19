@extends('frontend.layouts.web')
@section('content')
<!-- about us content section start -->
<section id="forgot_password">
    <div class="container">
        <div class="verify_number">
           <div class="forgotpass_form">
            <h2>Forgot Password?</h2>
            <p>Enter Your Phone Number we'll send you a verification code on your number</p>
           <form action="{{route('send.otp.store')}}" method="post">
            @csrf
            <input type="number" name="phone_num" id="phone_number" placeholder="Enter your number">
            @error('phone_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <button type="submit">Send</button>
           </form>
           </div>
        </div>
    </div>
</section>
<!-- about us content section end -->

@endsection