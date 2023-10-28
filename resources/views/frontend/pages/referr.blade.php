@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | Referr">
    <meta property="og:description" content="Tournamnet | Referr">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournamnet | Referr" />
    <meta name="description" content="Tournamnet | Referr" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournamnet | Referr</title>
@endsection
@section('content')
    <section id="referr_header">
        <div class="color_shape">
            <img src="{{ asset('assets/frontend/img/colorfull-arrow.png') }}" alt="">
        </div>
        <div class="custom_container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-12">
                   <div class="referral_content">
                    <h1>Referr  <span> a Friend</span></h1>
                    <h3>Referr to earn reawards and amazing prizes</h3>
                   </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-12">
                    <div class="refferal_img">
                        <img src="{{ asset('assets/frontend/img/referr-friend.png') }}" alt=""  class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="reffer_section">
        <div class="custom_container">
            <div class="refferBox">
                <div class="innerBox">
                    <h2>Refer a friend and Earn <span>Rewards!</span></h2>
              
                <div class="inputbx">
                  <label for="inputBox">Referral Link</label>
                  <span>Use the link below to refer your friends</span>
                  <div class="referral_input">
                    <input type="text" name="" value="" id="inputBox" readonly>
                    <!-- <input type="button" value="copy" id="btn"> -->
                    <button type="button" id="btn">Copy Link</button>
                  </div>
                </div>
                </div>
                <span class="other_option">OR</span>
                <hr>
                <div class="socail_share">
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/facebook.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/facebook-messanger.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/whatsapp.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/telegram.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/twitter.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/instagram.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/linkedin.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/sms.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/reddit.png') }}" alt=""/></a>
                    <a href="#"><img src="{{ asset('assets/frontend/img/socail-icons/pinterest.png') }}" alt=""/></a>
                   
                </div>
              </div>
        </div>
    </div>
    <script>
        
// refer code

let Button = document.querySelector("#btn");
let InputBx = document.querySelector("#inputBox");
Button.addEventListener("click", function () {
  InputBx.select();
  InputBx.setSelectionRange(0, 99999); 
  document.execCommand("copy");
  Button.innerText = "Copied";
  Button.classList.add("active");
  setTimeout(function () {
    Button.innerText = "Copy Link";
    Button.classList.remove("active");
  }, 1000); 
});


    </script>
@endsection
