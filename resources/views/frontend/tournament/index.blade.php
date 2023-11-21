@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | Enjoy a Wide Range of Online Games on Xoss Games">
    <meta property="og:description" content="Tournamnet | Enjoy a Wide Range of Online Games on Xoss Games">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournament | Enjoy a Wide Range of Online Games on Xoss Games" />
    <meta name="description" content="Xoss Games | Enjoy a Wide Range of Online Games on Xoss Games" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournament | Enjoy a Wide Range of Online Games on Xoss Games</title>
@endsection
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!-- --------------------------TOURNAMENT HEADER  START ------------------------ -->
    <section id="tournament_header">
        <div class="custom_container">
            <div class="tournament_slider">
                <div class="single_slider-item"
                style="background-image: url('{{ asset('assets/frontend/img/tournament-prizes.jpg') }}')">
                <div class="slider_content">
                    @if (auth()->guard('subscriber')->check())
                        <h1 class="sm-hide"><a
                                href="{{ route('tournament.game.details', $game->slug) }}">Tournament</a>
                        </h1>
                        <h2 class="sm-hide bangla_font">খেলে জিতে নাও <br> আকর্ষণীয় সব পুরস্কার</h2>
                        <a href="{{ route('prizes') }}" class="primary_btn mt-5">Prizes</a>
                    </div>
                </div>
                @foreach ($games as $game)
                    <div class="single_slider-item"
                        style="background-image: url('{{ asset('uploads/Tournamant/GameBanner/' . $game->game_banner) }}')">

                        <div class="slider_content">
                            @if (auth()->guard('subscriber')->check())
                                <h1 class="sm-hide"><a
                                        href="{{ route('tournament.game.details', $game->slug) }}">{{ $game->game_name }}</a>
                                </h1>
                            @else
                                <h1 class="sm-hide"><a href="{{ route('user.sign_in') }}">{{ $game->game_name }}</a></h1>
                            @endif
                            <h2 class="sm-hide">Join now for the ultimate gaming clash and earn rewards</h2>
                            @if (auth()->guard('subscriber')->check())
                                <a href="{{ route('tournament.game.details', $game->slug) }}" class="primary_btn mt-5">Join
                                    Now</a>
                            @else
                                <a href="{{ route('user.sign_in') }}" class="primary_btn mt-5">Join Now</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- --------------------------TOURNAMENT HEADER  END ------------------------ -->

    <!-- -------------------------- PRELAUNCHING TEXT START ------------------------ -->
    <section class="prelanching_text custom_container">
        <div class="js-container">
            <h1 class="backindown-text">We're Launching <span>Soon!</span> </h1>
        </div>
    </section>
    <!-- -------------------------- PRELAUNCHING TEXT START ------------------------ -->

    <!-- --------------------------TOURNAMENT CARD START ------------------------ -->
    {{-- <section id="tournament_card" class="section-top">
        <div class="custom_container">
            <div class="title pb-5">
                <h1 class="mostPopular__title__text"> <img src="{{ asset('assets/frontend/img/tournament-icon.png') }}"
                        alt=""> Daily Tournaments</h1>
                <p class="subheading_common">Clash of Champions Battle for Supremacy in the Ultimate Tournament of Feature
                    Games!</p>
                <div class="title_bar">
                    <div class="bar"></div>
                    <img src="{{ asset('assets/frontend/img/battle.png') }}" alt="">
                    <div class="bar"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($games as $game)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mb-3 ">
                        <div class="tournament_card m-lg-3">
                            <div class="card_img">
                                <div class="cover_img">
                                    <img src="{{ asset('uploads/Tournamant/GameImage/' . $game->image) }}" alt="">
                                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                        <path fill="#0099ff" fill-opacity="1"
                                            d="M0,320L48,282.7C96,245,192,171,288,160C384,149,480,203,576,186.7C672,171,768,85,864,80C960,75,1056,149,1152,160C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="card_body">
                                <div class="game_title">
                                    <a
                                        href="{{ route('tournament.game.details', $game->slug) }}">{{ $game->game_name }}</a>
                                </div>
                                <div class="date">
                                    <img src="{{ asset('assets/frontend/img/calendar.png') }}" alt="">
                                    <span>Registration Starts </span> <span><b>
                                            @php
                                                $stringDate = $game->start_date; // Your string date
                                                $date = \Carbon\Carbon::parse($stringDate);
                                                echo $formattedDate = $date->format('j F, Y');
                                            @endphp
                                        </b></span>
                                </div>
                               <div class="card_footer">
                                <div class="entry_fee">
                                    <h3>Entry Fee : ৳9.99</h3>
                                </div>
                                <div class="play_now-btn">
                                    <a href="{{ route('tournament.game.details', $game->slug) }}" class="primary_btn">Join
                                        Now</a>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- --------------------------TOURNAMENT CARD END ------------------------ -->
    <!-- --------------------------TOURNAMENT CARD START ------------------------ -->
    <section id="tournament_card" class="section-top">
        <div class="custom_container">
            <div class="title pb-5">
                <h1 class="mostPopular__title__text"> <img src="{{ asset('assets/frontend/img/tournament-icon.png') }}"
                        alt="">Tournament Games</h1>
                <p class="subheading_common">Clash of Champions Battle for Supremacy in the Ultimate Tournament of Feature
                    Games!</p>
                <div class="title_bar">
                    <div class="bar"></div>
                    <img src="{{ asset('assets/frontend/img/battle.png') }}" alt="">
                    <div class="bar"></div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                @foreach ($games as $game)
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3 ">
                        <div class="tournament_card m-lg-3 ">
                            <div class="card_img">
                                <div class="cover_img">
                                    <img src="{{ asset('uploads/Tournamant/GameImage/' . $game->image) }}" alt="">
                                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                        <path fill="#0099ff" fill-opacity="1"
                                            d="M0,320L48,282.7C96,245,192,171,288,160C384,149,480,203,576,186.7C672,171,768,85,864,80C960,75,1056,149,1152,160C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="card_body">
                                <div class="game_title">
                                    <a
                                        href="{{ route('tournament.game.details', $game->slug) }}">{{ $game->game_name }}</a>
                                </div>
                                <div class="date">
                                    <img src="{{ asset('assets/frontend/img/calendar.png') }}" alt="">
                                    <span>Registration Starts </span> <span><b>
                                            @php
                                                $stringDate = $game->start_date; // Your string date
                                                $date = \Carbon\Carbon::parse($stringDate);
                                                echo $formattedDate = $date->format('j F, Y');
                                            @endphp
                                        </b></span>
                                </div>
                                <div class="card_footer">
                                    <div class="entry_fee">
                                        <h3>Entry Fee : ৳{{ $game->game_fee }}</h3>
                                    </div>
                                    @if (auth()->guard('subscriber')->check())
                                        <div class="play_now-btn">
                                            <a href="{{ route('tournament.game.details', $game->slug) }}"
                                                class="primary_btn">Join
                                                Now</a>
                                        </div>
                                    @else
                                        <div class="play_now-btn">
                                            <a href="{{ route('user.sign_in') }}" class="primary_btn">Join
                                                Now</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                   
                @endforeach
            </div> --}}
            @foreach ($games as $game)
                <div class="card_full_width"
                    style="background-image: url('{{ asset('uploads/Tournamant/GameImage/' . $game->image) }}')">
                    <div class="card_overlay"></div>
                    <div class="card_content">
                        <div class="game_name">
                            <div class="game_profile d-md-none d-block">
                                <img src="{{ asset('uploads/Tournamant/GameImage/' . $game->image) }}" alt="">
                            </div>
                            <h2>{{ $game->game_name }}</h2>
                            <span>Registration Starts </span> <span><b>
                                    @php
                                        $stringDate = $game->start_date; // Your string date
                                        $date = \Carbon\Carbon::parse($stringDate);
                                        echo $formattedDate = $date->format('j F, Y');
                                    @endphp
                                </b></span>
                            <div class="entry_fee">
                                <h3>Entry Fee : ৳{{ $game->game_fee }}</h3>
                            </div>
                            <div class="play_now-btn m-0">
                                @if (auth()->guard('subscriber')->check())
                                    <a href="{{ route('tournament.game.details', $game->slug) }}" class="primary_btn">Join
                                        Now</a>
                                @else
                                    <a href="{{ route('user.sign_in') }}" class="primary_btn">Join
                                        Now</a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="card_full_width"
                style="background-image: url('{{ asset('assets/frontend/img/large-card-banner/football-tournament-banner.png') }}')">
                <div class="card_overlay"></div>
                <div class="card_content">
                    <div class="game_name">
                        <div class="game_profile d-md-none d-block">
                            <img src="{{ asset('assets/frontend/img/football-tournament.webp') }}" alt="">
                        </div>
                        <h2>Football Tournament</h2>
                        <span>Registration Starts </span> <span><b>
                                @php
                                    $stringDate = $game->start_date; // Your string date
                                    $date = \Carbon\Carbon::parse($stringDate);
                                    echo $formattedDate = $date->format('j F, Y');
                                @endphp
                            </b></span>
                        <div class="entry_fee">
                            <h3>Entry Fee : ৳{{ $game->game_fee }}</h3>
                        </div>
                        <div class="play_now-btn m-0">
                            <a href="{{ route('user.sign_in') }}" class="primary_btn">Join
                                Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </section>
    <!-- --------------------------TOURNAMENT CARD END ------------------------ -->

    <!-- --------------------------TOP 3 OPTIONS START ------------------------ -->
    <section id="tournament_steps" class="section">
        <h1 class="title">Simple 3 Steps Need to Follow Up <br> <span>To Get Rewards!</span> </h1>
        <div class="container">
            <div class="row three_steps justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="steps_card">
                        <div class="card_header">
                            <span class="number">01</span>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/img/join-now.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card_body">
                            <div class="card_body_content">
                                <h2>Join Now</h2>
                            </div>
                            <div class="info_content">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, aspernatur!</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="steps_card">
                        <div class="card_header">
                            <span class="number">02</span>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/img/pay-money.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card_body">
                            <div class="card_body_content">
                                <h2>Pay Money</h2>
                            </div>
                            <div class="info_content">
                                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, id.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="steps_card">
                        <div class="card_header">
                            <span class="number">03</span>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/img/win-prizes.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card_body">
                            <div class="card_body_content">
                                <h2>Win Prizes</h2>
                            </div>
                            <div class="info_content">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, aut.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------TOP 3 OPTIONS START ------------------------ -->

    <!-- --------------------------TOURNAMENT PRIZES START ------------------------ -->
    <section id="tournament_card" class="section-top">
        <div class="container-fluid">
            <div class="title pb-5">
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
            <div class="prizes_gift">
                <div class="prizes_slider">
                    @foreach ($prizes as $prize)
                        <div class="prize_item">
                            <div class="prize_img">
                                <img src="{{ asset($prize->image) }}" alt="">
                            </div>
                            <div class="prize_name">
                                <h3>{{ $prize->name }}</h3>
                            </div>
                            <div class="prize_badge">
                                <img src="{{ asset('assets/frontend/img/gift-box-wrap.png') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="prizes_box">
                    <img src="{{ asset('assets/frontend/img/gift-box.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------TOURNAMENT PRIZES END ------------------------ -->

    <!-- --------------------------TOURNAMENT PRIZES START ------------------------ -->
    <section id="tournmanet_games_banner " class="custom_container section_margin ">
        <div class="demo_bg">
            <h1>Tournament Graphics 1920 * 400 </h1>
        </div>
    </section>
    <!-- --------------------------TOURNAMENT PRIZES END ------------------------ -->
    
    <!-- --------------------------TOURNAMENT PRIZES START ------------------------ -->
    <section id="tournmanet_games_banner " class="custom_container section_margin ">
        <div class="demo_bg">
            <h1>Tournament Graphics 1920 * 400 </h1>
        </div>
    </section>
    <!-- --------------------------TOURNAMENT PRIZES END ------------------------ -->

    <!-- -------------------------- REFERR PAGE START ------------------------ -->
    <section id="reffer_your_friend" class="custom_container section_margin">
        <div class="container-fluid">
            <div class="refeer_frinds">
                <div class="reffer_img">
                    <img src="{{ asset('assets/frontend/img/referr-friends.png') }}" alt="" class="img-fluid">
                </div>
                <div class="reffer_invitaion_text">
                    <h2>Invite Friends & Win Rewards!</h2>
                    <h3>Join Xoss Games Tournament Today</h3>
                </div>
                <div class="join_now">
                    <a href="#" class="primary_btn">LogIn Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- -------------------------- REFERR PAGE END ------------------------ -->
@endsection
