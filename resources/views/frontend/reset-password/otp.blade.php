@extends('frontend.layouts.web')
@section('content')
<!-- about us content section start -->
<section id="forgot_password">
    <div class="container">
        <div class="verify_number">
           <div class="forgotpass_form">
            <h2>OTP</h2>
            <p>Check Your Text Message, We've already sent you the OTP code on your phone number</p>
           <form action="{{route('otp.match')}}" method="get">
            @csrf
            <input type="number" name="otp" id="otp" placeholder="Enter your OTP">
            @error('otp')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <button type="submit">Submit</button>
           </form>
           </div>
        </div>
    </div>
</section>
<!-- about us content section end -->

@endsection