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
    <section id="tournament_header" class="section-top">
        <div class="custom_container">
            <div class="tournament_slider">
                @foreach ($games as $game)
                    <div class="single_slider-item"
                        style="background-image: url('{{ asset('uploads/Tournamant/GameBanner/' . $game->game_banner) }}')">
                        <div class="slider_content">
                            @if (auth()->guard('subscriber')->check())
                                <h1 class="sm-hide"><a href="{{ route('tournament.game.details', $game->slug) }}">{{ $game->game_name }}</a>
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
    <section id="tournament_card" class="section">
        <div class="custom_container">
            <div class="title pb-5">
                <h1 class="mostPopular__title__text"> <img src="{{ asset('assets/frontend/img/tournament-icon.png') }}"
                        alt="">Tournaments</h1>
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
                                        <h3>Entry Fee : ৳19.00</h3>
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
    </section>
    <!-- --------------------------TOURNAMENT CARD END ------------------------ -->


 

    <script>
        const parallaxContainer = document.querySelector(".parallax");
        const parallaxInstance = new Parallax(parallaxContainer);
    </script>
@endsection
