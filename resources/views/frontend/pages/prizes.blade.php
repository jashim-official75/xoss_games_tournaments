@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | Prizes">
    <meta property="og:description" content="Tournamnet | Prizes">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournamnet | Prizes" />
    <meta name="description" content="Tournamnet | Prizes" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournamnet | Prizes</title>
@endsection



@section('content')

<section id="prizes_page" class="common_padding">

    <div class="custom_container">
        <div class="title">
            <h1 class="mostPopular__title__text"> <img src="{{ asset('assets/frontend/img/prizes-icon.png') }}"
                    alt="">Tournament Prizes</h1>
            <p class="subheading_common">Clash of Champions Battle for Supremacy in the Ultimate Tournament of Feature
                Games!</p>
            <div class="title_bar">
                <div class="bar"></div>
                <img src="{{ asset('assets/frontend/img/battle.png') }}" alt="">
                <div class="bar"></div>
            </div>
        </div>
        <div class="single_game_prizes">
            <div class="prizes_inner">

                <div class="prize_card first_prize d-md-none d-flex">
                    <div class="prizes_position">
                        <h2>1st Prize</h2>
                    </div>
                    <div class="prizes_img">
                        <img src="{{ asset('assets/frontend/img/prizes/smart-watch.png') }}" alt="">
                    </div>
                    <div class="prize_name">
                        <h3>Smart Watch</h3>
                    </div>

            </div>

                <div class="prize_card second_prize">
                  
                        <div class="prizes_position">
                            <h2>2nd Prize</h2>
                        </div>
                        <div class="prizes_img">
                            <img src="{{ asset('assets/frontend/img/prizes/bluetooth-speaker.png') }}" alt="">
                        </div>
                        <div class="prize_name">
                            <h3>Bluetooth Speaker</h3>
                        </div>
              
                </div>

                <div class="prize_card first_prize d-md-flex d-none">
                        <div class="prizes_position">
                            <h2>1st Prize</h2>
                        </div>
                        <div class="prizes_img">
                            <img src="{{ asset('assets/frontend/img/prizes/smart-watch.png') }}" alt="">
                        </div>
                        <div class="prize_name">
                            <h3>Smart Watch</h3>
                        </div>

                </div>


                <div class="prize_card third_prize">
                        <div class="prizes_position">
                            <h2>3rd Prize</h2>
                        </div>
                        <div class="prizes_img">
                            <img src="{{ asset('assets/frontend/img/prizes/headphone.png') }}" alt="">
                        </div>
                        <div class="prize_name">
                            <h3>Headphone</h3>
                        </div>
                </div>

            </div>
        </div>

</section>

@endsection

