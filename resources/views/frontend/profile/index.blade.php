@extends('frontend.layouts.web')
@section('frontend_header')
    <title>Xoss Games | Tournaments</title>
@endsection

@section('content')
    <div class="containerBody">
        <section class="contant_body_profile">
            <form action="{{ route('user.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="contant_body__logo">
                    <input type="file" id="imageUpload" style="display: none" name="profile_pic" />
                    <span>Profile</span>
                    <label for="imageUpload" class="d-block">
                        @if ($user->profile_pic)
                            <img class="login_logo" src="{{ asset('uploads/User/Profile/' . $user->profile_pic) }}"
                                alt="" style="border-radius: 50%;">
                        @else
                            <img class="login_logo" src="{{ asset('assets/frontend/img/profile_logo.png') }}"
                                alt="">
                        @endif
                    </label>
                    @if ($user->name)
                        <p>{{ $user->name }} </p>
                    @else
                        <p>{{ $user->phone_num }}</p>
                    @endif
                    <small>Gaming Account</small>
                </div>
                <div class="user_control-btn pt-4 d-flex justify-content-center">
                    <a href="{{ route('user.logout') }}" class="logout_btn user_btn ml-3"><i
                            class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
                </div>
                <div class="contant_body__inputs">
                    <div class="input-icons">
                        @error('name')
                            <div class="eroor_text">{{ $message }}</div>
                        @enderror
                        <div>
                            <div class="icon"><i class="fas fa-user"></i></div>
                            <span>|</span>
                            <input class="input-field" type="text" placeholder="Your Name" name="name"
                                value="{{ $user->name }}" />
                        </div>

                        <div>
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <span>|</span>
                            <input class="input-field" type="text" placeholder="Your Phone Number" name="phone_num"
                                value="{{ $user->phone_num }}" readonly />
                        </div>

                        <div>
                            <div class="icon"><i class="fas fa-key"></i></div>
                            <span>|</span>
                            <input class="input-field" type="password" placeholder="Old Password" name="password" />
                        </div>

                        <div>
                            <div class="icon"><i class="fas fa-key"></i></div>
                            <span>|</span>
                            <input class="input-field" type="password" placeholder="New Password" name="new_password" />
                            @error('new_password')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                    </div>

                    <div>
                        <button type="submit">Save Changes</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- --------------------------TOURNAMENT CARD START ------------------------ -->
        <section id="tournament_card">
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
                <div class="row">
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
                        <h1 class="text-center">Game Not Found</h1>
                    @endforelse

                </div>
            </div>
        </section>
        <!-- --------------------------TOURNAMENT CARD END ------------------------ -->
    </div>
@endsection
