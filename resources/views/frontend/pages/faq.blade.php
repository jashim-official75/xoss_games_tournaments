@extends('frontend.layouts.web')
@section('frontend_header')
    <meta property="og:title" content="Tournamnet | FAQ">
    <meta property="og:description" content="Tournamnet | FAQ">
    <meta property="og:image" content="https://xoss.games/xoss_games-og-image.jpg" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Tournamnet | FAQ" />
    <meta name="description" content="Tournamnet | FAQ" />
    <meta name="keywords" content="xoss games, games, online game, action game" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Tournamnet | FAQ</title>
@endsection
@section('content')
<section id="faq" class="common_padding">

    <div class="container">
        <div class="title pb-5">
            <h1 class="mostPopular__title__text"> <img src="{{ asset('assets/frontend/img/tournament-icon.png') }}"
                    alt=""> FAQ for Tournament</h1>
            <p class="subheading_common">Clash of Champions Battle for Supremacy in the Ultimate Tournament of Feature
                Games!</p>
            <div class="title_bar">
                <div class="bar"></div>
                <img src="{{ asset('assets/frontend/img/battle.png') }}" alt="">
                <div class="bar"></div>
            </div>
        </div>


        <div class="accordion">
            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Xoss গেমস টুর্নামেন্ট কি?</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Xoss গেমস হলো HTML 5 গেমের একটি ওয়েব পোর্টাল। একজন ব্যবহারকারী এন্ট্রি ফি প্রদান করে টুর্নামেন্টে অংশগ্রহণ করতে পারবে। এখানে ব্যবহারকারীরা প্রতিদিন এবং সপ্তাহে সর্বোচ্চ স্কোর করে একটি নিশ্চিত পুরস্কার জিততে পারবে।</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">কারা টুর্নামেন্টে যোগদান করতে পারবে? </span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>শুধুমাত্র গ্রামীণফোন ব্যবহারকারীরা Xoss গেমস টুর্নামেন্টে যোগদান করতে পারবে।</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">টুর্নামেন্ট অংশগ্রহণ করতে আমি কিভাবে রেজিস্ট্রেশন করব?</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p> আপনি অফিসিয়াল Xoss গেমস টুর্নামেন্ট ওয়েবসাইটের মাধ্যমে রেজিস্ট্রেশন করতে পারবেন। ( হোম > সাইন আপ )</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title"> আমি কিভাবে টুর্নামেন্টে অংশগ্রহণ করব? </span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>সর্ব প্রথমে পছন্দের গেম নির্বাচন করে, নির্ধারিত এন্ট্রি ফি প্রদান করে টুর্নামেন্টে অংশগ্রহণ করতে পারবেন। </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">
                আমি ইতিমধ্যেই একটি অ্যাকাউন্টের জন্য সাইন আপ করেছি তাহলে কেন আমি টুর্নামেন্টে অংশগ্রহণ করতে পারছিনা?
                </span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p> টুর্নামেন্টে অংশগ্রহণ করার জন্য আপনাকে নির্ধারিত এন্ট্রি ফি প্রদান করতে হবে.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title"> আমার র‍্যাঙ্ক কত আমি কিভাবে জানতে পারবো?</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>গেম খেলা শুরু করলে আপনি আপনার র‍্যাঙ্ক লিডারবোর্ডে দেখতে পাবেন।</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">টুর্নামেন্টের ফলাফল কখন ঘোষণা করা হবে? </span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>টুর্নামেন্টের ফলাফল ৭ কার্য দিবসের মধ্যে Xoss গেমস  টুর্নামেন্ট এর অফিসিয়াল ফেসবুক পেইজে এবং অফিশিয়াল ওয়েবসাইটে ঘোষণা করা হবে।</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">আমি কখন আমার পুরস্কার পাব? </span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>সাত কার্যদিবসের মধ্যে আপনার পুরস্কার পেয়ে যাবেন</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">আমি কিভাবে আমার পুরস্কার গ্রহণ করব?</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>আয়োজকরা আপনার নিবন্ধিত মোবাইল নম্বরে আপনার সাথে যোগাযোগ করবে।</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">ফ্রি গেমস সেকশনের কাজ কী?</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>ফ্রী গেম সেকশনে ইউজার প্রতিটা গেম ফ্রী খেলতে পারবেন, কোন পুরস্কার জিততে পারবেন না।</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">আমি কিভাবে Xoss গেমের সাথে যোগাযোগ করতে পারি?</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>আপনি Xoss গেমস টুর্নামেন্ট ওয়েবসাইটে মেসেজ দিয়ে অথবা প্রদত্ত মোবাইল নম্বরে (01715855974) সরাসরি কল দিয়ে যোগাযোগ করতে পারেন। মেইল করতে পারেন (support@xoss.games) এড্রেসে।</p>
              </div>
            </div>

          </div>
    </div>

    

</section>
@endsection