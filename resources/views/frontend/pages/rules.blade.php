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
                alt=""> টুর্নামেন্টে অংশগ্রহণের শর্তাবলী </h1>
        <p class="subheading_common"> টুর্নামেন্টে অংশগ্রহণের পূর্বে জেনে নিন আবশ্যকীয় সকল শর্তাবলী</p>
        <div class="title_bar">
            <div class="bar"></div>
            <img src="{{ asset('assets/frontend/img/battle.png') }}" alt="">
            <div class="bar"></div>
        </div>
    </div>

    <article>
        <main>
            <h2 class="tournament_heding_secondary">যোগ্যতা:</h2>
            <ol>
                <li>টুর্নামেন্টের অংশগ্রহনের জন্য প্লেয়ারের একটি বৈধ একাউন্ট থাকতে হবে।</li>
            </ol>
            <h2 class="tournament_heding_secondary">রেজিস্ট্রেশন:</h2>
            <ol>
                <li>অংশগ্রহণকারীদের নির্দিষ্ট সময়সীমার মধ্যে টুর্নামেন্টের জন্য নিবন্ধন করতে হবে।</li>
                <li>নিবন্ধনের সময় সঠিক তথ্য প্রদান করতে হবে।</li>
            </ol>
          
            <h2 class="tournament_heding_secondary">ন্যায্যতা ও সততা:</h2>
             <ol>
                <li>প্রতারণা, হ্যাক বা অন্যায্য কোনো প্রকার ব্যবহার না করে, সকল প্লেয়ারদের টুর্নামেন্টটি ন্যায্যতার সাথে খেলাতে হবে ৷</li>
                <li>ম্যাচ ফিক্সিং, অসৎ আচরণ এবং প্রতারণা নিষিদ্ধ।</li>
             </ol>
          
            <h2 class="tournament_heding_secondary">আচরণ:</h2>
             <ol>
                <li>সম্মানজনক এবং ক্রীড়ানুসারী আচরণ সর্বদা প্রত্যাশিত।.</li>
                <li> অন্য খেলোয়াড়দের প্রতি আপত্তিকর ভাষা, হয়রানি বা আপত্তিকর আচরণ মেনে নেয়া হবে না।</li>
                <li> খেলোয়াড়দের অবশ্যই প্ল্যাটফর্মের পরিষেবার শর্তাবলী এবং সম্প্রদায় নির্দেশিকা অনুসরণ করতে হবে।</li>
                <li>  সংগঠকরা পুনরায় শুরু করার অনুমতি দেবে কিনা সে বিষয়ে চূড়ান্ত সিদ্ধান্ত নেবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">যে সব কারণে টুর্নামেন্ট থেকে বাতিল ঘোষণা হবেন:</h2>
             <ol>
                <li>মিথ্যা বিবরণ, ভুল ব্যক্তিগত তথ্য, একাধিক পরিচয়, জাল সফ্টওয়্যার ব্যবহার, হ্যাকিং টুলস, চিট কোড, দুর্নীতিগ্রস্ত সফ্টওয়্যার ইত্যাদি অবৈধ কর্মকাণ্ড করলে রেজিস্ট্রেশন বাতিল হবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">পুরস্কার বিতরণ:</h2>
             <ol>
                <li>টুর্নামেন্টের আয়োজকরা তাদের কম্পানির নীতি অনুযায়ী বিজয়ীদের পুরস্কার প্রদান করবে।</li>
             </ol>


            <h2 class="tournament_heding_secondary">নিয়ম আপডেট:</h2>
             <ol>
                <li>টুর্নামেন্ট আয়োজকরা প্রতিযোগিতা চলাকালীন নিয়মে আপডেট বা পরিবর্তন করতে পারে। </li>
             </ol>

            <h2 class="tournament_heding_secondary">সময়কাল:</h2>
             <ol>
                <li>টুর্নামেন্ট আয়োজকরা প্রতিযোগিতা চলাকালীন টুর্নামেন্টের সময়কাল বাড়াতে অথবা কমাতে পারবে। </li>
             </ol>

            <h2 class="tournament_heding_secondary">অযোগ্যতা:</h2>
             <ol>
                <li>নিয়ম লঙ্ঘনের জন্য খেলোয়াড়দের অযোগ্য ঘোষণা করার ক্ষমতা টুর্নামেন্ট আয়োজকদের রয়েছে।</li>
                <li>অযোগ্য খেলোয়াড়রা কোনো পুরস্কার পাবে না।</li>
             </ol>

            <h2 class="tournament_heding_secondary">গোপনীয়তা:</h2>
             <ol>
               <li>নিবন্ধনের সময় প্রদত্ত ব্যক্তিগত তথ্য প্রযোজ্য গোপনীয়তা আইন অনুযায়ী পরিচালনা করা হবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">সমাপ্তি:</h2>
             <ol>
              <li>অপ্রত্যাশিত পরিস্থিতি বা নিয়ম লঙ্ঘন ঘটলে টুর্নামেন্ট সংগঠকরা টুর্নামেন্ট বন্ধ করার অধিকার সংরক্ষণ করে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">সম্মতি:</h2>
             <ol>
             <li>খেলোয়াড়দের অবশ্যই টুর্নামেন্ট আয়োজকদের নিয়ম ও সিদ্ধান্ত মেনে চলতে হবে। তা করতে ব্যর্থ হলে সে খেলোয়াড় অযোগ্য হিসেবে বিবেচিত হবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">অতিরিক্ত নিয়ম:</h2>
             <ol>
             <li>খেলা এবং নির্দিষ্ট টুর্নামেন্ট বিন্যাসের উপর নির্ভর করে টুর্নামেন্টের অতিরিক্ত নিয়ম থাকতে পারে।</li>
             </ol>

             <p>এই নিয়মগুলি সমস্ত অংশগ্রহণকারীদের জন্য একটি ন্যায্য এবং আনন্দদায়ক অভিজ্ঞতা প্রদানের উদ্দেশ্যে। প্রতিটি টুর্নামেন্টের নির্দিষ্ট নিয়ম পর্যালোচনা করা গুরুত্বপূর্ণ, কারণ সেগুলি আলাদা হতে পারে। এই নিয়ম লঙ্ঘনের ফলে শাস্তি, অযোগ্যতা বা টুর্নামেন্ট আয়োজকদের দ্বারা নির্ধারিত অন্যান্য পরিণতি হতে পারে।
            </p>

        </main>
    </article>
  </div>
</section>
 
@endsection
