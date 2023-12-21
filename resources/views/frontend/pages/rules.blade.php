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
                alt=""> টুর্নামেন্টে অংশগ্রহণের নিয়মাবলী </h1>
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
            <h2 class="tournament_heding_secondary">যোগ্যতা:</h2>
            <ol>
                <li>টুর্নামেন্টের জন্য ব্যবহৃত গেম প্ল্যাটফর্মে খেলোয়াড়দের একটি বৈধ, মেয়াদ শেষ না হওয়া কাউন্ট থাকা উচিত।</li>
            </ol>
            <h2 class="tournament_heding_secondary">রেজিস্ট্রেশন:</h2>
            <ol>
                <li>অংশগ্রহণকারীদের নির্দিষ্ট সময়সীমার মধ্যে টুর্নামেন্টের জন্য নিবন্ধন করতে হবে।</li>
                <li>নিবন্ধনের সময় সঠিক এবং আপ-টু-ডেট যোগাযোগের তথ্য প্রদান করুন।</li>
            </ol>
          
            <h2 class="tournament_heding_secondary">ন্যায্যতা ও সততা:</h2>
             <ol>
                <li>প্রতারণা, হ্যাক বা অন্যায্য সুবিধার কোনো প্রকার ব্যবহার না করেই সকল খেলোয়াড়ের কাছ থেকে খেলাটি ন্যায্যভাবে খেলার প্রত্যাশিত৷</li>
                <li>ম্যাচ ফিক্সিং, যোগসাজশ, বা যে কোনো ধরনের প্রতারণা কঠোরভাবে নিষিদ্ধ।</li>
             </ol>
          
            <h2 class="tournament_heding_secondary">আচরণ:</h2>
             <ol>
                <li>সম্মানজনক এবং ক্রীড়ানুসারী আচরণ সর্বদা প্রত্যাশিত।.</li>
                <li> অন্য খেলোয়াড়দের প্রতি আপত্তিকর ভাষা, হয়রানি বা আপত্তিকর আচরণ সহ্য করা হবে না।</li>
                <li> খেলোয়াড়দের অবশ্যই প্ল্যাটফর্মের পরিষেবার শর্তাবলী এবং সম্প্রদায় নির্দেশিকা অনুসরণ করতে হবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">সংযোগ বিচ্ছিন্ন করা:</h2>
             <ol>
                <li>সংযোগ বিচ্ছিন্ন হওয়ার ক্ষেত্রে, প্লেয়াররা একটি বিরাম বা পুনরায় চালু করার অনুরোধ করতে পারে শুধুমাত্র যদি একটি স্পষ্ট এবং নথিভুক্ত প্রযুক্তিগত সমস্যা কারণ হয়।</li>
                <li>টুর্নামেন্ট সংগঠকরা পুনরায় শুরু করার অনুমতি দেবে কিনা সে বিষয়ে চূড়ান্ত সিদ্ধান্ত নেবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">রিপোর্টিং সমস্যা:</h2>
             <ol>
                <li>যদি কোন প্লেয়ার কোনো সমস্যা্র সম্মুখীন হয় বা নিয়ম লঙ্ঘন করে তাহলে খেলোয়াড়দের অবিলম্বে টুর্নামেন্ট আয়োজকদের রিপোর্ট করতে হবে।</li>
                <li>প্রয়োজনে প্রমাণ প্রদান করতে হবে, যেমন স্ক্রিনশট বা ভিডিও রেকর্ডিং।</li>
             </ol>

            <h2 class="tournament_heding_secondary">পুরস্কার বিতরণ:</h2>
             <ol>
                <li>টুর্নামেন্টের আয়োজকরা তাদের স্পেসিফিকেশন অনুযায়ী বিজয়ীদের পুরস্কার প্রদান করবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">স্ট্রিমিং এবং দর্শনীয়:</h2>
             <ol>
                <li>টুর্নামেন্টের আয়োজকরা স্ট্রিমিং সীমিত বা নিয়ন্ত্রণ করতে পারে বা দর্শকদের অনুমতি দিতে পারে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">স্ট্রিমিং এবং দর্শনীয়:</h2>
             <ol>
                <li>টুর্নামেন্টের আয়োজকরা স্ট্রিমিং সীমিত বা নিয়ন্ত্রণ করতে পারে বা দর্শকদের অনুমতি দিতে পারে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">নিয়ম আপডেট:</h2>
             <ol>
                <li>টুর্নামেন্ট আয়োজকরা প্রতিযোগিতা চলাকালীন নিয়মে আপডেট বা পরিবর্তন করতে পারে। অংশগ্রহণকারীদের কোনো পরিবর্তন সম্পর্কে অবহিত করা হবে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">অযোগ্যতা:</h2>
             <ol>
                <li>নিয়ম লঙ্ঘনের জন্য খেলোয়াড়দের অযোগ্য ঘোষণা করার ক্ষমতা টুর্নামেন্ট আয়োজকদের রয়েছে।</li>
                <li>অযোগ্য খেলোয়াড়রা কোনো পুরস্কার বা পুরস্কার বাজেয়াপ্ত করতে পারে।</li>
             </ol>

            <h2 class="tournament_heding_secondary">আপিল:</h2>
             <ol>
                <li>খেলোয়াড়রা টুর্নামেন্ট আয়োজকদের দ্বারা নেওয়া সিদ্ধান্তের জন্য আপিল করতে পারে, তবে আপিল প্রক্রিয়াটি আয়োজকদের দেওয়া নিয়ম অনুযায়ী অনুসরণ করা উচিত।</li>
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
             <li>খেলোয়াড়দের অবশ্যই টুর্নামেন্ট আয়োজকদের নিয়ম ও সিদ্ধান্ত মেনে চলতে হবে। তা করতে ব্যর্থ হলে অযোগ্যতা হতে পারে।</li>
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
