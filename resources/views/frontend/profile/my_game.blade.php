@extends('frontend.layouts.web')
@section('frontend_header')
    <title>Xoss Games | Tournaments</title>
@endsection

@section('content')
    <div class="containerBody ">
        <!-- --------------------------TOURNAMENT CARD START ------------------------ -->
        <section id="tournament_card" class="section">
            <div class="container">
                <div class="title pb-5">
                    <h1 class="mostPopular__title__text"> <img src="{{ asset('assets/frontend/img/tournament-icon.png') }}"
                            alt=""> My Current Games</h1>
                    <p class="subheading_common">Clash of Champions Battle for Supremacy in the Ultimate Tournament of
                        Feature
                        Games!</p>
                    <div class="title_bar">
                        <div class="bar"></div>
                        <img src="{{ asset('assets/frontend/img/battle.png') }}" alt="">
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @forelse ($games as $game)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mb-3 ">
                            <div class="tournament_card">
                                <div class="card_img">
                                    <div class="cover_img">
                                        <img src="{{ asset('uploads/Tournamant/GameImage/' . $game->image) }}"
                                            alt="">
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
                                    <div class="play_now-btn">
                                        <a href="{{ route('tournament.game.details', $game->slug) }}"
                                            class="primary_btn">Game Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="text-center text-danger">You're not participate any tournament games</h1>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- --------------------------TOURNAMENT CARD END ------------------------ -->
    </div>
@endsection
