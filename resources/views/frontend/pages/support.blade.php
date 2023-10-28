@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | Support">
    <meta property="og:description" content="Tournamnet | Support">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournamnet | Support" />
    <meta name="description" content="Tournamnet | Support" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournamnet | Support</title>
@endsection
{{-- @section('content')
 <section id="support">
    <div class="container">
<h2>For any Tournament related issues:</h2>
<p>Please send questions via  <a href="mailto:support.xossgames@gmail.com">support.xossgames@gmail.com</a> </p>
<h2>For Payment & Subscription related issues:</h2>
<p>Robi Email : 123@robi.com.bd</p>
<p>Contact Number : 01819-400400 & 121</p>
<p>USSD Code : *123*1489#.</p>
<p>Airtel Email : airtel.service@robi.com.bd</p>
<p>Contact Number : 01647-771212 & 121</p>
    </div>
 </section>
@endsection --}}



@section('content')
    <!-- SUPPORT HEADER PART START -->
    <header id="support_header">
       <div class="custom_container">
        <div class="row align-items-center support-customer ">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="support_text">
                    <h1>We are here for you</h1>
                    <p>We provides you technical support in 24/7</p>
                    <div class="support_contact">
                        <ul>
                            <li><a href="tel:+8801715855974">
                                    <div class="icon"><i class="fa-solid fa-headphones"></i></div>+880 1715-855974
                                </a></li>
                            <li><a href="mailto:support@xoss.games">
                                    <div class="icon"><i class="fa-regular fa-envelope-open"></i></div>
                                    support@xoss.games
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <img src="{{ asset('assets/frontend/img/customer_support.png') }}" class="img-fluid" alt="" />
            </div>
        </div>

       </div>
    </header>
    <!-- SUPPORT HEADER PART END -->

    <!-- SUPPORT FORM PART START -->
    <section id="support_contact">
        <div class="custom_container">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-6">
                    <div class="support_form">
                        <h2>Need Support?</h2>
                        <h3>Get Answers to Common Questions & Issues</h3>
                        <form action="" method="POST">
                            @csrf
                            <div class="inputBx">
                                <label for="fullname">Full Name</label>
                                <input type="text" placeholder="Full Name" name="fullname" id="fullname">
                                @error('fullname')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="inputBx">
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" placeholder="Phone Number" name="phonenumber" id="phonenumber">
                            </div>

                            <div class="inputBx">
                                <label for="phonenumber">Email</label>
                                <input type="text" placeholder="Email" name="email" id="email">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <label for="reason">Choose Reason</label>
                            <div class="select">
                                <select id="reason" name="reason">
                                    <option value="Option 0" disabled selected>Choose Reason</option>
                                    <option value="1" id="reg_num">Login Problem</option>
                                    <option value="2" id="subsc_num">Subscription Problem</option>
                                    <option value="3">Other's</option>
                                </select>
                                <span class="focus"></span>
                                @error('reason')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="inputBx" id="subscribed_number">
                                <label for="phonenumber">Subscribed Number</label>
                                <input type="text" placeholder="Subscribed Number" name="sub_number" id="phonenumber">
                            </div>

                            <div class="inputBx" id="registration_number">
                                <label for="phonenumber">Subscription Number</label>
                                <input type="text" placeholder="Subscription Number" name="regis_number" id="phonenumber">
                            </div>

                            <label for="Your Message">Your Message</label>
                            <textarea name="message" id="message" placeholder="Your Message"></textarea>

                            <input type="submit" value="Send" class="support_btn" id="send_btn">

                        </form>
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="support_info">
                        <h1 class="text-center mt-5">Emergency Contact</h1>
                        <img src="{{ asset('assets/frontend/img/supoort-illustration.webp') }}" alt="">
                        <div class="support_contact">

                            <ul>
                                <li><a href="tel:+8801715855974">
                                        <div class="icon"><i class="fa-solid fa-headphones"></i></div>+880 1715-855974
                                    </a></li>
                                <li><a href="mailto:support@xoss.games">
                                        <div class="icon"><i class="fa-regular fa-envelope-open"></i></div>
                                        support@xoss.games
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- SUPPORT FORM PART END -->

    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "101498069190218");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v16.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection

@section('pageJS')
    <script>
        $('#subscribed_number').hide();
        $('#registration_number').hide();

        $('document').ready(function() {
            $("#reason").change(function() {
                var reg_num = $(this).val();
                if (reg_num == 1) {
                    $('#registration_number').show();
                } else {
                    $('#registration_number').hide();
                }
            });

            $("#reason").change(function() {
                var subsc_num = $(this).val();
                if (subsc_num == 2) {
                    $('#subscribed_number').show();
                } else {
                    $('#subscribed_number').hide();
                }
            });
        });
    </script>
@endsection
