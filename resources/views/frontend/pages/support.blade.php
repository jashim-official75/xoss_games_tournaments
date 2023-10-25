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
@section('content')
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
@endsection