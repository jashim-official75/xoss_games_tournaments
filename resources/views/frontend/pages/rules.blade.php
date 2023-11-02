@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | Rules">
    <meta property="og:description" content="Tournamnet | Rules">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournamnet | Rules" />
    <meta name="description" content="Tournamnet | Rules" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournamnet | Rules</title>
@endsection
@section('content')

<section id="tournament_rules" class="common_padding">
  <div class="container">
    <div class="title pb-5">
        <h1 class="mostPopular__title__text"> <img src="{{ asset('assets/frontend/img/tournament-icon.png') }}"
                alt=""> Rules for Participating </h1>
        <p class="subheading_common">Clash of Champions Battle for Supremacy in the Ultimate Tournament of Feature
            Games!</p>
        <div class="title_bar">
            <div class="bar"></div>
            <img src="{{ asset('assets/frontend/img/battle.png') }}" alt="">
            <div class="bar"></div>
        </div>
    </div>

    <article>
        <main>
            <h2 class="tournament_heding_secondary">Eligibility:</h2>
            <ol>
                <li>Players should have a valid, unexpired account on the game platform being used for the tournament.</li>
            </ol>
            <h2 class="tournament_heding_secondary">Registration:</h2>
            <ol>
                <li>Participants must register for the tournament within the specified deadline.</li>
                <li>Provide accurate and up-to-date contact information during registration.</li>
            </ol>
          
            <h2 class="tournament_heding_secondary">Fair Play:</h2>
             <ol>
                <li>All players are expected to play the game fairly, without using cheats, hacks, or any form of unfair advantage.</li>
                <li> Match-fixing, collusion, or any form of cheating is strictly prohibited.</li>
             </ol>
          
            <h2 class="tournament_heding_secondary">Behavior:</h2>
             <ol>
                <li>Respectful and sportsmanlike conduct is expected at all times.</li>
                <li> Offensive language, harassment, or abusive behavior towards other players will not be tolerated.</li>
                <li> Players must follow the platform's terms of service and community guidelines.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Disconnections:</h2>
             <ol>
                <li>In the event of a disconnect, players may request a pause or restart only if a clear and documented technical issue is the cause.</li>
                <li>Tournament organizers will make the final decision on whether to allow a restart.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Reporting Issues:</h2>
             <ol>
                <li>Players should promptly report any issues or rule violations to the tournament organizers.</li>
                <li>Provide evidence if necessary, such as screenshots or video recordings.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Prize Distribution:</h2>
             <ol>
                <li>The tournament organizers will award prizes to the winners in accordance with their specifications.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Streaming and spectating:</h2>
             <ol>
                <li>The tournament organizers may limit or regulate streaming or allow spectators.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Streaming and spectating:</h2>
             <ol>
                <li>The tournament organizers may limit or regulate streaming or allow spectators.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Rules Updates:</h2>
             <ol>
                <li>Tournament organizers may make updates or changes to the rules during the competition. Participants will be notified of any changes.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Disqualifications:</h2>
             <ol>
                <li>Tournament organizers have the authority to disqualify players for rule violations.</li>
                <li>Disqualified players may forfeit any prizes or rewards.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Appeals:</h2>
             <ol>
                <li>Players may appeal decisions made by the tournament organizers, but the appeal process should be followed according to the rules provided by the organizers.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Privacy:</h2>
             <ol>
               <li>Personal information provided during registration will be handled in accordance with applicable privacy laws.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Termination:</h2>
             <ol>
              <li>Tournament organizers reserve the right to terminate a tournament if unforeseen circumstances or violations of rules occur.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Compliance:</h2>
             <ol>
             <li>Players must comply with the rules and decisions of tournament organizers. Failure to do so may result in disqualification.</li>
             </ol>

            <h2 class="tournament_heding_secondary">Additional rules:</h2>
             <ol>
             <li>The tournament may have additional rules depending on the game and the specific tournament format</li>
             </ol>

             <p>These rules are meant to provide a fair and enjoyable experience for all participants. It's important to review the specific rules of each tournament, as they may vary. Violations of these rules may result in penalties, disqualification, or other consequences as determined by the tournament organizers.
            </p>

        </main>
    </article>
  </div>
</section>
 
@endsection
