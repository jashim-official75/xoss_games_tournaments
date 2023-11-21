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


     <div class="prizes_header">
        <img src="{{ asset('assets/frontend/img/tournament-prizes-banner.jpg') }}" alt="" class="img-fluid">
     </div>

    <section id="prizes_page">
        <div class="title mt-5">
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
        <div class="container">
            <div class="single_game_prizes">
                <div class="prizes_inner">
                    @if ($first_prize)
                        <div class="prize_card first_prize d-md-none d-flex">
                            <div class="prizes_position">
                                <h2>1st Prize</h2>
                            </div>
                            <div class="prizes_img">
                                <img src="{{ asset($first_prize->image) }}" alt="">
                            </div>
                            <div class="prize_name">
                                <h3>{{ $first_prize->prize_name }}</h3>
                            </div>
                        </div>
                    @endif

                    @if ($second_prize)
                        <div class="prize_card second_prize">
                            <div class="prizes_position">
                                <h2>2nd Prize</h2>
                            </div>
                            <div class="prizes_img">
                                <img src="{{ asset($second_prize->image) }}" alt="">
                            </div>
                            <div class="prize_name">
                                <h3>{{ $second_prize->prize_name }}</h3>
                            </div>
                        </div>
                    @endif

                    @if ($first_prize)
                        <div class="prize_card first_prize d-md-flex d-none">
                            <div class="prizes_position">
                                <h2>1st Prize</h2>
                            </div>
                            <div class="prizes_img">
                                <img src="{{ asset($first_prize->image) }}" alt="">
                            </div>
                            <div class="prize_name">
                                <h3>{{ $first_prize->prize_name }}</h3>
                            </div>
                        </div>
                    @endif


                    @if ($third_prize)
                        <div class="prize_card third_prize">
                            <div class="prizes_position">
                                <h2>3rd Prize</h2>
                            </div>
                            <div class="prizes_img">
                                <img src="{{ asset($third_prize->image) }}" alt="">
                            </div>
                            <div class="prize_name">
                                <h3>{{ $third_prize->prize_name }}</h3>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

    </section>
@endsection
